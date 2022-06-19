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

                <form>
                    <div class="row mb-3">
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Write your todo here...">
                      </div>
                    </div>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Checked if you done your work</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" style="width: 100%">Save</button>
                </form>
            </div>
          </div>
      </div>
    </div>
  </section>

@endsection


