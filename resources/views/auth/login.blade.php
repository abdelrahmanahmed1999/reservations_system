

@extends('layouts.auth-layout')

@section('content')



<main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                <img class="bg-auth-circle-shape" src="{{ asset('assets/img/bg-shape.png') }}" alt="" width="250">
                <img class="bg-auth-circle-shape-2" src="{{ asset('assets/img/shape-1.png') }}" alt="" width="150">
            <div class="card overflow-hidden z-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7" data-bs-theme="light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url('{{ asset('assets/img/half-circle.png') }}');">
                      </div>
                      <!--/.bg-holder-->

                      <div class="z-1 position-relative">
                        <a class="link-light mb-4 font-sans-serif fs-5 d-inline-block fw-bolder" href="#">Reservation</a>
                        <p class="opacity-75 text-white d-none">With the power of Falcon, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p>
                      </div>
                    </div>
                    <div class="mt-3 mb-4 mt-md-4 mb-md-5" data-bs-theme="light">
                      <p class="text-white">Don't have an account?<br><a class="text-decoration-underline link-light" href="{{route('register')}}">Get started!</a></p>
                    </div>
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row flex-between-center">

                          @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                            @endforeach
                          @endif
                        <div class="col-auto">
                          <h3>Account Login</h3>
                        </div>
                      </div>
                      <form  method="POST" action="{{ route('postlogin') }}">
                        @csrf

                        <div class="mb-3">
                          <label class="form-label" for="card-email">Email address</label>
                          <input class="form-control" id="card-email" type="email" name="email"/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Password</label>
                          </div>
                          <input class="form-control" id="card-password" type="password" name="password"/>
                        </div>

                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                        </div>
                      </form>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    
@endsection