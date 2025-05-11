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
                <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Adding Applicant</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="card theme-wizard h-100 mb-5">
                <div class="card-header bg-body-tertiary pt-3 pb-2">
                    <ul class="nav justify-content-between nav-wizard">
                        <li class="nav-item">
                            <a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-validation-tab1"
                                data-bs-toggle="tab" data-wizard-step="1">
                                <span class="nav-item-circle-parent"><span class="nav-item-circle"></span></span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab2" 
                            data-bs-toggle="tab" data-wizard-step="2">
                                <span class="nav-item-circle-parent last"><span class="nav-item-circle py-2"></span></span>
                            </a>
                        </li>

                        <li class="nav-item d-none">
                            <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab3" 
                            data-bs-toggle="tab" data-wizard-step="4">
                                <span class="nav-item-circle-parent "><span class="nav-item-circle py-2"><span class="fas fa-user"></span></span></span>
                                <span class="d-none d-md-block mt-1 fs-10">Files</span>
                            </a>
                        </li>
                      
                    </ul>
                </div>
                <div class="card-body py-4" id="wizard-controller">
                    <form  id="applicantForm" method="POST"  action="{{ route('superadmin.applicant.insert') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                                <div class="" novalidate="novalidate" data-wizard-form="1">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-name-en">Name *</label>
                                            <input class="form-control" type="text" value="{{old('name')}}" name="name" id="bootstrap-wizard-validation-wizard-name-en" />
                                            @error('name')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6 ">
                                            <label class="form-label" for="email">Email * </label>
                                            <input type="email" class="form-control" rows="4" name="email" value="{{old('email')}}" id="email">
                                            @error('email')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row  my-3">
                                        <div class=" col-md-6">
                                            <label class="form-label" for="card-password">Password *</label>
                                            <input class="form-control" type="password" autocomplete="on" id="card-password" name="password"/>
                                            @error('password')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class=" col-md-6">
                                            <label class="form-label" for="card-confirm-password">Confirm Password</label>
                                            <input class="form-control" type="password" autocomplete="on" id="card-confirm-password" name="password_confirmation"/>
                                            @error('password_confirmation')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div> 

                                </div>
                            </div>
                            <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                                <div data-wizard-form="2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="picture_file">Profile Picture</label>
                                                <input name="picture_file" type="file" id="picture_file" class="dropify"
                                                    data-default-file="{{ URL::asset('assets/img/avatar.png') }}"
                                                    data-height="108" aria-describedby="photoHelp">
                                                @error('picture_file')
                                                    <label class="text-danger mt-1">{{ $message }}</label>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                    </div>  
                                </div>
                            </div>

                        </div>
                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>
                <div class="card-footer bg-body-tertiary">
                    <div class="px-sm-3 px-md-5">
                    <ul class="pager wizard list-inline mb-0">
                        <li class="previous">
                            <button class="btn btn-link ps-0" type="button"><span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Prev</button>
                        </li>
                        <li class="next">
                            <button class="btn btn-primary px-5 px-sm-6" type="submit" id="next">Next<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        

        

    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nextButton = document.getElementById('next');
            const tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');

            tabLinks.forEach(tab => {
                tab.addEventListener('shown.bs.tab', function (e) {
                    if (e.target.getAttribute('href') === '#bootstrap-wizard-validation-tab2') {
                        nextButton.disabled = true;
                    } else {
                        nextButton.disabled = false;
                    }
                });
            });
        });


    </script>

@endsection
