@extends('master')
@section('title')
  <title>Category Page </title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Category Pages</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Home</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class=" card card-primary">
          <div class="card-header">
            <a href="{{ route('category.create') }}" class="btn btn-primary"> Add Category</a>
          </div>
          <div class="card-body">
            <div class="table table-responsive">
              <table class="table table-striped">
                <thead>
                  <th>No</th>
                  <th>Category Name</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  @forelse ($category as $ct)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $ct->name_category }}</td>
                      <td><a href="{{ route('category.edit', $ct->id) }}" class="btn btn-outline-warning"><i
                            class="fas fa-edit"></i></a>
                        <form action="{{ route('category.destroy', $ct->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger"><i class="fas fa-trash "></i></button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="text-center">Tidak Ada Data</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
