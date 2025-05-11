<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserService
{
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function createUser($data)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => 'applicant',
            ]);

            if (isset($data['picture_file'])) {
                $fileName = $this->fileService->storeFile($data['picture_file'], date('s-m'), 'images/applicants');
                $user->update(['image' => $fileName]);
            }

            DB::commit();
            return $user;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function updateUser($data, $id)
    {
        DB::beginTransaction();

        try {
            $applicant = User::findOrFail($id);
            $applicant->update([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);

            if (isset($data['picture_file'])) {
                $this->fileService->deleteFile(public_path('images/applicants/' . $applicant->image)); 
                $imageFileName = $this->fileService->storeFile($data['picture_file'], date('s-m'), 'images/applicants');
                $applicant->update(['image' => $imageFileName]);
            }

            DB::commit();
            return $applicant; 
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }

    public function deleteUser($id)
    {
        DB::beginTransaction();

        try {
            $applicant = User::findOrFail($id);
            
            if ($applicant->image) {
                $this->fileService->deleteFile(public_path('images/applicants/' . $applicant->image)); 
            }

            $applicant->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }
}