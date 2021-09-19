@extends('master')
@section('title')
    <title>Edit Category Page </title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Category </h1>
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
                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <table class="table table-bordered">
                                <tr>
                                    <td> Name Category</td>
                                    <td> <input type="text" value="{{ $category->name_category }}" name="name_category"
                                            class="form-control" id=""></td>
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
