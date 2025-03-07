@extends('layouts.app')

{{-- @section('title', 'Sign In') --}}

@section('content')
<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('style/assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Selamat Datang!!</h1>
          
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Login</h5>
            </div>
           
            <div class="card-body">
              <form role="form text-left">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username-addon">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="text-center">
                  <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection