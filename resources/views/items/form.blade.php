@extends('adminlte.master')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/items" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection