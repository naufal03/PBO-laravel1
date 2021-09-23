@extends('master')
@section('title')
  <title>Edit Category Page </title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Category Edit </h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Home</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2>Halaman Edit Data Category</h2>
          </div>
          <div class="card-body">
            <form action="{{ route('Product.update', $product->id) }}" method="post">
              @csrf
              @method('PUT')
              <table class="table table-bordered">
                <tr>
                  <td> Name Product</td>
                  <td> <input type="text" value="{{ $product->name_product }}" name="name_product"
                      class="form-control" id=""></td>
                </tr>
                <tr>
                  <td> Description</td>
                  <td> <input type="text" value="{{ $product->description }}" name="description" class="form-control"
                      id=""></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td> <input type="text" value="{{ $product->price }}" name="price" class="form-control" id=""></td>
                </tr>
                <tr>
                  <td> Stock</td>
                  <td> <input type="text" value="{{ $product->stock }}" name="stock" class="form-control" id=""></td>
                </tr>
                <tr>
                  <td> Category</td>
                  <td>
                    <select name="category_id" class="form-control">
                      <option value="0">-Pilih Data-</option>
                      @foreach ($category as $cat)
                        @if ($product->category_id == $cat->id)
                          <option value="{{ $cat->id }}" selected>{{ $cat->name_category }}
                          </option>
                        @else
                          <option value="{{ $cat->id }}">{{ $cat->name_category }}</option>
                        @endif
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><button type="submit" class="btn btn-primary">Save Data</button></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
