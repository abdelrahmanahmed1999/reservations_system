<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash; 
use App\Models\Email;
use App\Models\User;




class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request, $api = false)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            if ($api) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            if ($api) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
            return redirect()->back()->withErrors(['error' => 'Invalid credentials'])->withInput();
        }


        if ($api) {
            $token = $user->createToken('api_token')->plainTextToken;
    
            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                'token' => $token,
            ]);
        }
        

        Auth::login($user);

        if($user->role==="superAdmin"){
            return redirect()->route('superadmin.dashboard.home');
        }
        if($user->role==="applicant"){
            return redirect()->route('applicant.dashboard.home');
        }
        return "other roles not handled yet!";
    }


    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request, $api = false)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            
        ]);
        
        if ($validator->fails()) {
            if ($api) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            else{
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }
        
        
        try {
            DB::beginTransaction();
            
            $user = User::create([
                'name'     => $request->name,
                'email'      => $request->email,
                'password' => Hash::make($request->password), 
            ]);
            
            
            if ($api) {
                $token = $user->createToken('api_token')->plainTextToken;
                
                return response()->json([
                    'message' => 'Registration successful',
                    'user'    => $user,
                    'token'   => $token,
                ], 201);
            }

            Auth::login($user);
            DB::commit();
            return redirect()->route('applicant.dashboard.home');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['errors' => 'Something Wrong'])->withInput();
        }
    }
    
    public function logout(Request $request)
    {
        Auth::logout(); 
        return redirect()->route('login');
    }


    /*********************************************************API**************** */


    public function apiLogin(Request $request)
    {
        return $this->postLogin($request, true);
    }

    public function apiRegister(Request $request)
    {
        return $this->postRegister($request, true);
    }

}
