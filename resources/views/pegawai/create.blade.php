@extends('layouts.head')

@section('content')
    <br>
    <form action="{{ url('pegawai') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td><input type="text" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>gelar</td>
                <td><input type="text" name="gelar"></td>
            </tr>
            <tr>
                <td>nip</td>
                <td><input type="text" name="nip"></td>
            </tr>
        </table>
        <button type="submit">simpan</button>
    </form>
@endsection