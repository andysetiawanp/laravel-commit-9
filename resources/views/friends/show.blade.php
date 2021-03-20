@extends('layouts.app')

@section('title', 'cobaaaaa')

@section('content')
<div class ="card">
    <div class ="card-body">
        <h3>nama teman : {{$friend['nama'] }}</h3>
        <h3>no telp teman : {{$friend['no_telp'] }}</h3>
        <h3>alamat teman : {{$friend['alamat']}}</h3>
    </div>
</div>
@endsection