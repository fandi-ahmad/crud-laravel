@extends('layouts.head')

@section('content')
    <br>
    <form action="{{ url('pegawai') }}" method="POST">
        @csrf
        @include('pegawai.form')
    </form>
@endsection