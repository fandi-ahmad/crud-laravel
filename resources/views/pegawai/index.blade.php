@extends('layouts.head')

@section('content')
    <br>

    <a class="btn btn-primary btn-sm mb-2" href="{{ url('pegawai/create') }}">create</a>
    <table class="table table-bordered">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>tanggal lahir</th>
            <th>gelar</th>
            <th>nip</th>
            <th>action</th>
        </tr>
        @foreach($datas as $key => $value)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ $value -> nama }}</td>
                <td>{{ $value -> tanggal_lahir }}</td>
                <td>{{ $value -> gelar }}</td>
                <td>{{ $value -> nip }}</td>
                <td class="d-flex flex-row align-items-center gap-2">
                    <a class="btn btn-primary btn-sm" href="{{ url('pegawai/'.$value->id.'/edit') }}">edit</a>
                    <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection