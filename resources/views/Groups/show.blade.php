@extends('layouts.app')

@section('title', 'cobaaaaa')

@section('content')
<div class ="card">
    <div class ="card-body">
        <h3>name group : {{$group['name'] }}</h3>
        <h3>description group : {{$group['description']}}</h3>
    </div>
</div>
@endsection