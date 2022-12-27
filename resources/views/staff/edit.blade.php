@extends('layouts.head')

@section('content')
    <br>
    <form action="{{ url('staff/'.$model->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value="{{ $model -> nama }}"></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td><input type="text" name="tanggal_lahir" value="{{ $model -> tanggal_lahir }}"></td>
            </tr>
            <tr>
                <td>gelar</td>
                <td><input type="text" name="gelar" value="{{ $model -> gelar }}"></td>
            </tr>
        </table>
        <button class="btn btn-primary" type="submit">update</button>
    </form>
@endsection