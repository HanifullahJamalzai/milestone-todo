@extends('master.layout.app')
@section('title', 'Todo Form')

@section('contents')

<div class="pagetitle">
    <h1>We are adding a Todo</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create a Todo</h5>

                <form action="{{ route('todos.store') }}" method="POST">
                    {{-- cross site request forgery --}}
                    @csrf
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}

                    <div class="row mb-3">
                      <div class="col-sm-12">
                        <textarea type="text" class="form-control" name="description" placeholder="Write your todo here...">{{ old('description') }}</textarea>
                      </div>
                    </div>

                    @error('description')
                      <span class="text-danger text-sm">{{$message}}</span>
                    @enderror

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Checked if you done your work</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" style="width: 100%; background: #0d6efd;">Save</button>
                </form>

            </div>
          </div>
      </div>
    </div>
  </section>

@endsection


