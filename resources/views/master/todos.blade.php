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
                  @foreach ($todos as $todo)
                    <tr>
                      <th scope="row">{{ $todo->id }}</th>
                      <td>

                        <a href="/todos/{{$todo->id}}/show">
                          {{ $todo->description }}
                        </a>

                      </td>
                      <td>{{ $todo->status === 0 ? 'pending' : 'done' }}</td>
                      <td>
                          <button class="btn btn-danger">Delete</button>
                          <a class="btn btn-info text-white" href="/todos/{{$todo->id}}/edit">Edit&nbsp;&nbsp;</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
              {{-- pagination is here --}}
              {{ $todos->links() }}
              <!-- End Table with hoverable rows -->

            </div>
          </div>
      </div>
    </div>
  </section>

@endsection


