@extends('layouts.layout')

<style>
    .last:before{
        width:53% !important;
        left:20% !important;
    }
</style>
@section('content')



    <div class="row gx-3">

        <div class="col-lg-12 col-xl-12 col-xxl-12 h-100">
            <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i></span>
            <div class="col">
                <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Editing Service</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="card theme-wizard h-100 mb-5">
               
                <div class="card-body py-4" id="wizard-controller">
                    <form  id="serviceForm" method="POST"  action="{{ route('superadmin.service.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$service->id}}" name="id">

                        <div class="tab-content">
                            <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                                <div class="" novalidate="novalidate" data-wizard-form="1">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-name">Name</label>
                                            <input class="form-control" type="text" name="name" value="{{$service->name}}" id="bootstrap-wizard-validation-wizard-name" />
                                            @error('name')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        
   
                                        
                                        <div class="col-md-6 ">
                                            <label class="form-label" for="description">Description *</label>
                                            <input type="description" class="form-control" rows="4" name="description" value="{{$service->description}}" id="description">
                                            @error('description')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>
          
            </div>
        </div>
        

        

    </div>

@endsection

@section('scripts')

@endsection
