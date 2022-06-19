@extends('master.layout.app')
@section('title', 'Todos List')

@section('contents')

<div class="pagetitle">
    <h1>Our Todos List</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacobasdfasdfasd</td>
                    <td>Done</td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                        <button class="btn btn-info text-white">Edit&nbsp;&nbsp;</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        {{-- <div class="card">
          <div class="card-body">
            <h5 class="card-title">Home Card</h5>
            <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
          </div>
        </div> --}}

      </div>
    </div>
  </section>

@endsection


