@extends('master.layout.app')
@section('title', 'Home')

@section('contents')
{{-- @php
  dd(auth()->user)
@endphp --}}
<div class="pagetitle">
    <h1>Our Todo Applictaion</h1>
  </div><!-- End Page Title -->

  @if(session()->has('success'))
  {{-- @if(Session::has('success')) --}}
      <span class="text-success">{{session()->get('success')}}</span>
      {{-- <span class="text-success">{{session('success')}}</span> --}}
  @endif

  <section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Home Card</h5>
            <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection


