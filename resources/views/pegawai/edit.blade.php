@extends('layouts.head')

@section('content')
    <br>
    <form action="{{ url('pegawai/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        @include('pegawai.form')
    </form>
@endsection