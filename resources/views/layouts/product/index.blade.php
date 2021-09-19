@extends('master')
@section('title')
    <title>Product Page </title>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Pages</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Home</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class=" card card-primary">
                    <div class="card-header">
                        <a href="{{ route('Product.create') }}" class="btn btn-primary"> Add Product</a>
                    </div>
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Description table</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Category Product</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>
                                    @forelse ($product as $pr)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pr->name_product }}</td>
                                        <td>{{ $pr->description }}</td>
                                        <td>{{ $pr->price }}</td>
                                        <td>{{ $pr->stock }}</td>
                                        <td>{{ $pr->category->name_category }}</td>
                                        <td><a href="{{ route('Product.edit', $pr->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('Product.destroy', $pr->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"><i class="fas fa-trash "></i></button>
                                            </form>
                                        </td>
                                        <td>&nbsp;</td>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak Ada Data</td>
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
