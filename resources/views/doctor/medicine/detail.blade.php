@extends('layouts.app')
@section('title')
Medicine
@endsection

@section('breadcrumb1')
Medicine Management
@endsection

@section('breadcrumb2')
Pages
@endsection

@section('breadcrumb3')
Medicine
@endsection

@section('content')
<div class="container-fluid">
    <div class="card-header justify-content-center">
        {{ $medicine->name }} Data
    </div>
    <div class="card">
        <div class="card-body">
            <span class="font-weight-bold">Name</span>
            <p class="font-weight-light">{{ $medicine->name }}</p>
            <span class="font-weight-bold">Price</span>
            <p class="font-weight-light">{{ $medicine->price }}</p>
            <span class="font-weight-bold">stock</span>
            <p class="font-weight-light">{{ $medicine->stock }}</p>
        </div>
    </div>
</div>
@endsection