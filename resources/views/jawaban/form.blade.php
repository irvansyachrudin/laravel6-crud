@extends('adminlte.master')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/jawaban" method="POST">
            @csrf
            <div class="form-group">
                <label for="Description">isi jawaban</label>
                <input type="text" class="form-control" id="isi" name="isi">
            </div>
            <div class="form-group">
                <label for="Description">id pertanyaan</label>
                <input type="text" class="form-control" id="pertanyaan_id" name="pertanyaan_id">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection