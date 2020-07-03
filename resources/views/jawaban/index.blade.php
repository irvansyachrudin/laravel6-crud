@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-body">
        <a href="/jawaban/create">Tambah Jawaban</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col">Isi</th>
                    <th scope="col">Id Pertanyaan</th>
                    <th scope="col">Lihat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jawabans as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->isi }}</td>
                    <td>{{ $data->pertanyaan_id }}</td>
                    <td><a class="btn btn-info" href="{{ route('jawabans.show',$data->pertanyaan_id) }}">Lihat</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection