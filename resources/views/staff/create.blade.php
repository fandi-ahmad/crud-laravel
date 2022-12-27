@extends('layouts.myLayout')

@section('content')
    <div class="container pt-3">
        <form action="{{ url('staff') }}" method="POST">
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
            </table>
            <button class="btn btn-primary" type="submit">create</button>
        </form>
    </div>
@endsection