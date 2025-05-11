@extends('layouts.layout')

@section('content')
<main class="main" id="top">
    <div class="container" data-layout="container">
        <div class="row g-3 mb-3">
            <!-- Card for Total Seekers -->
            <div class="col-md-6 col-xxl-3">
                <div class="card h-md-100 ecommerce-card-min-width">
                    <div class="card-header pb-0">
                        <h6 class="mb-0 mt-2 d-flex align-items-center">Total Reservations
                            <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Total number of seekers">
                                <span class="far fa-question-circle" data-fa-transform="shrink-1"></span>
                            </span>
                        </h6>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-end">
                        <div class="row">
                            <div class="col">
                                <p class="font-sans-serif lh-1 mb-1 fs-5">{{ $reservationsCount }}</p>
                                <span class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>
                            </div>
                            <div class="col-auto">
                                <canvas id="totalSeekersChart" width="120" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Total Seekers Card -->

            <!-- Card for Active Companies -->
            <div class="col-md-6 col-xxl-3">
                <div class="card h-md-100">
                    <div class="card-header pb-0">
                        <h6 class="mb-0 mt-2">Total Services</h6>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-end">
                        <div class="row">
                            <div class="col">
                                <p class="font-sans-serif lh-1 mb-1 fs-5">{{ $servicesCount }}</p>
                                <span class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>
                            </div>
                            <div class="col-auto">
                                <canvas id="activeCompaniesChart" width="150" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Active Companies Card -->

        </div>

        <div class="row g-3 mb-3">
            <!-- Card for Companies -->
            <div class="col-lg-6 col-xxl-6 ps-lg-2">
                <div class="card h-100">
                    <div class="card-header bg-body-tertiary">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-0">Applicants</h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-0">
                        @foreach ($applicants as $applicant)
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            @if ($applicant->image)
                                                <img class="rounded-circle img-thumbnail shadow-sm" src="{{ asset('images/applicants/' . $applicant->image) }}" width="40" alt="{{ $applicant->name }}" />
                                            @else
                                            @endif
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center">
                                                <a class=" stretched-link text-primary" href="{{route('superadmin.applicant.profile',$applicant->id)}}" target="_blank">{{ $applicant->name }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-5">
                                            <div class="fs-10 fw-semi-bold">
                                              {{ $applicant->email}}
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer bg-body-tertiary p-0">
                        <a class="btn btn-sm btn-link d-block w-100 py-2" href="{{ route('superadmin.applicant.index') }}">All Applicants<span class="fas fa-chevron-right ms-1 fs-11"></span></a>
                    </div>
                </div>
            </div>
            <!-- End of Companies Card -->

        </div>

    </div>
</main>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart for Total Seekers
        new Chart(document.getElementById("totalSeekersChart"), {
            type: "bar",
            data: {
                labels: ["W1", "W2", "W3", "W4", "W5"],
                datasets: [{
                    data: [12, 19, 8, 15, 22],
                    backgroundColor: ["#007bff", "#6610f2", "#e83e8c", "#fd7e14", "#28a745"],
                    borderRadius: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { enabled: true } },
                scales: { y: { display: false }, x: { display: false } },
                barPercentage: 0.7, 
                categoryPercentage: 0.9
            }
        });

        // Chart for Active Companies
        new Chart(document.getElementById("activeCompaniesChart"), {
            type: "line",
            data: {
                labels: ["W1", "W2", "W3", "W4", "W5"],
                datasets: [{
                    data: [5, 10, 7, 12, 25],
                    borderColor: "#007bff",
                    backgroundColor: "rgba(0, 123, 255, 0.2)",
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 0,  
                    pointHoverRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { enabled: true } },
                scales: { y: { display: false }, x: { display: false } }
            }
        });

        // Chart for Hired Seekers
        new Chart(document.getElementById("hiredSeekersChart"), {
            type: "bar",
            data: {
                labels: ["W1", "W2", "W3", "W4", "W5"],
                datasets: [{
                    data: [10, 15, 12, 18, 25],
                    backgroundColor: ["#dc3545", "#ffc107", "#20c997", "#17a2b8", "#6f42c1"],
                    borderRadius: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { enabled: true } },
                scales: { y: { display: false }, x: { display: false } },
                barPercentage: 0.7, 
                categoryPercentage: 0.9
            }
        });

        // Chart for Total Jobs
        new Chart(document.getElementById("totalJobsChart"), {
            type: "line",
            data: {
                labels: ["W1", "W2", "W3", "W4", "W5"],
                datasets: [{
                    data: [8, 12, 18, 22, 30],
                    borderColor: "#28a745",
                    backgroundColor: "rgba(40, 167, 69, 0.2)",
                    borderWidth: 3,
                    fill: true,
                    tension: 1,
                    pointRadius: 0,  
                    pointHoverRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { enabled: true } },
                scales: { y: { display: false }, x: { display: false } }
            }
        });
    </script>
@endsection