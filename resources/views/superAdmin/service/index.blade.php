@extends('layouts.layout')

@section('content')



    <div class="row gx-3">

        <div class="col-xxl-10 col-xl-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card" id="ticketsTable" data-list='{"valueNames":["client","subject","status","priority","agent"],"page":11,"pagination":true,"fallback":"tickets-table-fallback"}'>
                <div class="card-header border-bottom border-200 px-0">
                    <div class="d-lg-flex justify-content-between">
                        <div class="row flex-between-center gy-2 px-x1">
                            <div class="col-auto pe-0">
                                <h6 class="mb-0">Services</h6>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive scrollbar">
                    <table class="table table-sm mb-0 fs-10 table-view-tickets">
                        <thead class="bg-body-tertiary">
                        <tr>
                            <th class="sort align-middle " data-sort="client">Name</th>
                            <th class="sort align-middle" data-sort="status">Description</th>
                            <th class="sort align-middle" data-sort="status">Availability</th>
                            <th class="sort align-middle" data-sort="status">Operations</th>

                        </tr>
                        </thead>
                        <tbody class="list" id="table-ticket-body">
                            @foreach($services as $service)
                            <tr>
                                <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                    {{$service->name}}
                                </td>
                                <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                    {{ $service->description}}
                                </td>

                                <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                    {{ $service->availability}}
                                </td>
                                <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                    <a href="{{route('superadmin.service.edit',$service->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('superadmin.service.delete',$service->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center d-none" id="tickets-table-fallback">
                        <p class="fw-bold fs-8 mt-3">No Services Found</p>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
