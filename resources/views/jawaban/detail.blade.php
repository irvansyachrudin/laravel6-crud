@extends('adminlte.master')

@section('content')

@if (strlen($jawabans) <= 10) <h4>Jawaban kosong, tambahkan jawaban anda</h4>
    <div class="card-body">
        <form action="/jawaban/{{ $jawabans }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Description">isi jawaban</label>
                <input type="text" class="form-control" id="isi" name="isi" ">
        </div>
        <button type=" submit" class="btn btn-primary">Jawab</button>
        </form>
    </div>

    @else
    <div class="card">
        <div class="card-body">
            <a href="/pertanyaan">kembali</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col">Isi</th>
                        <th scope="col">Id Pertanyaan</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($jawabans as $data)

                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->isi }}</td>
                        <td>{{ $data->pertanyaan_id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="card">
        <h4>
            Tambah Jawaban</h4>
        <div class="card-body">
            <form action="/jawaban/{{ $data->pertanyaan_id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Description">isi jawaban</label>
                    <input type="text" class="form-control" id="isi" name="isi">
                </div>
                <!-- <div class="form-group" hidden>
                <label for="Description">id pertanyaan</label>
                <input type="text" class="form-control" id="pertanyaan_id" name="pertanyaan_id" value="{{ $data->pertanyaan_id }}">
            </div> -->

                <button type="submit" class="btn btn-primary">Jawab</button>
            </form>
        </div>
    </div>
    @endif
    @endsection