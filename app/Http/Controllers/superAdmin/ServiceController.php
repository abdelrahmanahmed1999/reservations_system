<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Support\Facades\Hash; 
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Services\ServiceService;
use App\Http\Resources\ServiceResource;

class ServiceController extends Controller
{

    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index()
    {
        $services=Service::get();
        return view('superAdmin.service.index',compact('services'));
    }

    
    public function Add()
    {
        return view('superAdmin.service.add');
    }
    
    public function insert(StoreServiceRequest $request)
    {
        try {
            $this->serviceService->createService($request->validated());
            return redirect()->route('superadmin.service.index')->with('success', 'Service created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
        
    public function Edit($id)
    {
        $service = Service::find($id);
        if(!$service){
            return redirect()->route('superadmin.service.index');
        }

        return view('superAdmin.service.edit',compact('service'));
    }
    

    public function Update(UpdateServiceRequest $request)
    {

        try {
            $this->serviceService->updateService($request->validated(), $request->id);

            return redirect()->route('superadmin.service.index')->with('success', 'Service update successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
 
    }
    
    
    public function  Delete($id){
        
        try {
            $this->serviceService->deleteService($id);
            return redirect()->route('superadmin.service.index')->with('success', 'Service deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }



    /************************************API******************************************* */

    public function serviceApi()
    {
        return ServiceResource::collection(Service::all());
    }

}