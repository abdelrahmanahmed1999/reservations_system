

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
                      <p class="pt-3 text-white">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="{{route('login')}}">Log In</a></p>
                    </div>
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{ $error }}</div>
                        @endforeach
                      @endif
                      <h3>Register</h3>
                      <form  method="POST" action="{{ route('postregister') }}">
                        @csrf

                        <div class="mb-3">
                          <label class="form-label" for="name">Name</label>
                          <input class="form-control" type="text" autocomplete="on" id="name" name="name"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="email">Email address</label>
                          <input class="form-control" type="email" autocomplete="on" id="email"  name="email"/>
                        </div>
                        <div class="row gx-2">
                          <div class="mb-3 col-sm-6">
                            <label class="form-label" for="card-password">Password</label>
                            <input class="form-control" type="password" autocomplete="on" id="card-password" name="password"/>
                          </div>
                          <div class="mb-3 col-sm-6">
                            <label class="form-label" for="card-confirm-password">Confirm Password</label>
                            <input class="form-control" type="password" autocomplete="on" id="card-confirm-password" name="password_confirmation"/>
                          </div>
                        </div>

                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
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