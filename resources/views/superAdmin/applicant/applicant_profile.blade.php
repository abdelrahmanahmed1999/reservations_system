@extends('layouts.layout')

@section('content')


<div class="row g-3">
    <div class="col-xxl-3 col-xl-4 order-xl-1">
        <div class="position-xl-sticky top-0">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-2">
                <h6 class="mb-0">Contact Information</h6>
                </div>
                <div class="card-body bg-body-tertiary">
                <div class="card border rounded-3 bg-white dark__bg-1000 shadow-none">
                    <div class="bg-holder bg-card d-none d-sm-block d-xl-none" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-2.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body row g-0 flex-column flex-sm-row flex-xl-column z-1 align-items-center">
                    <div class="col-auto text-center me-sm-x1 me-xl-0">
                        <img class="ticket-preview-avatar" src="{{asset('images/applicants'.'/'.$applicant->image)}}" alt="" /></div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-12 ps-sm-1 ps-xl-0">
                        <p class="fw-semi-bold mb-0 text-800 text-center text-sm-start text-xl-center mb-3 mt-3 mt-sm-0 mt-xl-3">{{$applicant->name}}</p>
                    </div>
                    </div>
                </div>
                <div class="border rounded-3 p-x1 mt-3 bg-white dark__bg-1000 row mx-0 g-0">
                    <div class="col-md-6 col-xl-12 pe-md-4 pe-xl-0">
                        <div class="mb-4">
                            <h6 class="mb-1 false">Email</h6>
                                <a class="fs-10" href="mailto:mattrogers@gmail.com">  {{ $applicant->email  }}</a><br>
                        </div>

                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-9 col-xl-8">
        <div class="card overflow-hidden">
            <div class="card-header p-0 scrollbar-overlay border-bottom">
                <ul class="nav nav-tabs border-0 tab-contact-details flex-nowrap" id="contact-details-tab" role="tablist">
                <li class="nav-item text-nowrap" role="presentation"><a class="nav-link mb-0 d-flex align-items-center gap-2 py-3 px-x1 active" id="contact-timeline-tab" data-bs-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true"><span class="fas fa-stream icon"></span>
                    <h6 class="mb-0 text-600">Reservations</h6>
                    </a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="card-body bg-body-tertiary tab-pane active" id="timeline" role="tabpanel" aria-labelledby="contact-timeline-tab">
                    <div class="timeline-vertical py-0">
                        @forelse($applicant->reservations as $index =>$reservation)
                        <div class="timeline-item {{ $index % 2 == 0 ? 'timeline-item-start' : 'timeline-item-end' }} mb-3">
                            <div class="timeline-icon icon-item icon-item-lg text-primary border-300">
                                <span class="fs-8 fas fa-envelope"></span>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 timeline-item-time">
                                    <div>
                                        <h6 class="mb-0 text-700">
                                            {{ \Carbon\Carbon::parse($reservation->created_at)->locale('en')->isoFormat('YYYY') }}
                                        </h6>
                                        <p class="fs-11 text-500 font-sans-serif">
                                            {{ \Carbon\Carbon::parse($reservation->created_at)->locale('en')->isoFormat('D MMMM') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="timeline-item-content arrow-bg-white">
                                        <div class="timeline-item-card bg-white dark__bg-1100">
                                            <a href="#" >
                                                <h5 class="mb-2 hover-primary">{{$reservation?->service->name}}</h5>
                                            </a>
                                            <h5 class="mb-2 text-500 text-center" >{{$reservation?->service->description}}</h5>
                                            <p class="fs-10 border-bottom mb-3 pb-4 text-600">
                                            </p>
                                            <div class="d-flex flex-wrap pt-2">
                                                <h6 class="mb-0 text-600 lh-base">
                                                    <span class="far fa-clock me-1"></span>
                                                    {{ \Carbon\Carbon::parse($reservation->created_at)->locale('en')->isoFormat('HH:mm A') }}
                                                </h6>
                                                <div class="d-flex align-items-center ms-auto me-2 me-sm-x1 me-xl-2 me-xxl-x1">
                                                    <small class="badge rounded 
                                                        @if($reservation->status === 'approved') badge-subtle-success 
                                                        @elseif($reservation->status === 'pending') badge-subtle-warning 
                                                        @elseif($reservation->status === 'rejected') badge-subtle-danger 
                                                        @endif">
                                                        {{ $reservation->status }}
                                                    </small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="text-end mt-3">
                                                <a href="{{route('superadmin.applicant.changeReservationStatus',['status'=>'approved','id'=>$reservation->id])}}" class="btn btn-success btn-sm">Approved</a>
                                                <a href="{{route('superadmin.applicant.changeReservationStatus',['status'=>'','pending','id'=>$reservation->id])}}" class="btn btn-warning btn-sm">Pending</a>
                                                <a href="{{route('superadmin.applicant.changeReservationStatus',['status'=>'rejected','id'=>$reservation->id])}}" class="btn btn-danger btn-sm">Rejected</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            
                            <div class="text-center" id="tickets-table-fallback">
                                <p class="fw-bold fs-8 mt-3">No Reservation Found</p>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>    
    </div>
</div>


@endsection
