@extends('layout')

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}</p>
    <a href="/logout">Logout</a>
@endsection