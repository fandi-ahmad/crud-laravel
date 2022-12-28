@extends('layouts.head')

@section('content')
    <br>

    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>    
    @endif

    <div class="d-flex flex-row align-items-center justify-content-between mb-3">
        <a class="btn btn-primary btn-sm" href="{{ url('pegawai/create') }}">create</a>
        <form action="{{ url('pegawai') }}" method="GET" class="d-flex flex-row gap-2 align-items-center">    
            <input type="text" name="keyword" class="form-control" value="{{ $keyword }}">
            <button type="submit" class="btn btn-sm btn-secondary">search</button>
        </form>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>no</th>
            <th>foto profile</th>
            <th>nama</th>
            <th>tanggal lahir</th>
            <th>gelar</th>
            <th>nip</th>
            <th>action</th>
        </tr>
        @foreach($datas as $key => $value)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>
                    @if(strlen($value->foto_profil)>0)
                        <img src="{{ asset('foto/'.$value -> foto_profil) }}" alt="" width="80px">
                    @endif
                </td>
                <td>{{ $value -> nama }}</td>
                <td>{{ $value -> tanggal_lahir }}</td>
                <td>{{ $value -> gelar }}</td>
                <td>{{ $value -> nip }}</td>
                <td>
                    <div class="d-flex flex-row align-items-center gap-2">
                        <a class="btn btn-primary btn-sm" href="{{ url('pegawai/'.$value->id.'/edit') }}">edit</a>
                        <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm" type="submit">delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $datas->links() }}
@endsection