@extends('layouts.app')

@section('content')
    <h1>Hello {{auth::user()->name}}</h1>

@endsection