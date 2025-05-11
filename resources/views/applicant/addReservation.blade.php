@extends('layouts.applicant-layout')

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
                <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Reservation</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="card theme-wizard h-100 mb-5">
              
                <div class="card-body py-4" id="wizard-controller">
                    <form  id="applicantForm" method="POST"  action="{{ route('applicant.reservation.insert') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                                <div class="" novalidate="novalidate" data-wizard-form="1">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-name-en">Service *</label>
                                            <select name="service_id" class="form-control" required>
                                                <option value="" selected disabled> Choose Service</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">
                                                        {{ $service->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('service_id')
                                                <label class="text-danger mt-1">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <input type="submit" value="Book" class="btn btn-success">
                    </form>
                </div>

            </div>
        </div>
        

        

    </div>

@endsection

@section('scripts')

@endsection
