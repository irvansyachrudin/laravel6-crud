@extends('adminlte.master')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="Description">isi</label>
                <input type="text" class="form-control" id="isi" name="isi">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection