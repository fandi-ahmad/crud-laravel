@extends('layouts.head')

@section('content')
    <br>
    <form action="{{ url('pegawai') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('pegawai.form')
    </form>
@endsection