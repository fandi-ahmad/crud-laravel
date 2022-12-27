@extends('layouts.myLayout')

@section('content')
    <div class="container pt-5">
    <a class="btn btn-primary btn-sm" href="{{ url('staff/create') }}">create</a>
        <table class="table table-border">
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>tanggal lahir</th>
                <th>gelar</th>
                <th>aksi</th>
            </tr>
            @foreach($datas as $key => $v)
                <tr>
                    <td>{{ $loop -> index+1 }}</td>
                    <td>{{ $v -> nama }}</td>
                    <td>{{ $v -> tanggal_lahir }}</td>
                    <td>{{ $v -> gelar }}</td>
                    <td class="d-flex flex-row align-items-center gap-2">
                        <a class="btn btn-sm btn-primary" href="{{ url('staff/'.$v->id.'/edit') }}">edit</a>
                        <form action="{{ url('staff/'.$v->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection