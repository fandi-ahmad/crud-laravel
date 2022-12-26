@extends('layouts.head')

@section('content')
    <p>input form di bawah ini</p>
    <form method="POST" action="{{ url('home/contoh') }}">
        @csrf
        <input type="text" name="nama">
        <button type="submit">submit</button>
    </form>
@endsection