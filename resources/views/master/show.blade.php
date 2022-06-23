@extends('master.layout.app')
@section('title', 'Show')

@section('contents')

<div class="pagetitle">
    <h1>Our Todo Applictaion</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Show card</h5>
            <p>{{$data->description}}</p>
          </div>

          {{-- dynamic way --}}
          <form action="{{route('todos.delete', ['id' => $data->id])}}" method="post">
            {{-- static way--}}
          {{-- <form action="/todos/{{$data->id}}/delete" method="post"> --}}
            
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger w-100" style="background: red;">Delete</button>
          </form>
        </div>


      </div>
    </div>
  </section>

@endsection


