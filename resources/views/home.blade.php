@extends('layouts.app')
@section('activeHome','active')
@section('url_home','#1b')
@section('url_heroes',url("/heroes"))

@section('content')
    @include('layouts.loggedin')
@endsection
