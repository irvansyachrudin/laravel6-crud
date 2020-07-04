@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-body">
        <a href="/pertanyaan/create">Tambah Pertanyaan</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Lihat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaans as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->isi }}</td>
                    <td><a href="/jawaban/{{ $data->id }}">Lihat Jawaban</a></td>

                    <td><a href="/pertanyaan/{{ $data->id }}/edit">Edit</a> |
                        <form action="/pertanyaan/{{$data->id}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection