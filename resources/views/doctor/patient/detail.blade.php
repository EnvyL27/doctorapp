@extends('layouts.app')
@section('title')
Add Patient
@endsection

@section('breadcrumb1')
Patient Management
@endsection

@section('breadcrumb2')
Pages
@endsection

@section('breadcrumb3')
Patient
@endsection

@section('content')
<div class="container-fluid">
    <div class="card-header justify-content-center">
        {{ $patient->name }} Data
    </div>
    <div class="card">
        <div class="row p-3 justify-content-center">
            @php
            $pathImage = '';
            $patient->profile ? ($pathImage = 'storage/' . $patient->profile) : ($pathImage = 'picture/empty.png');
            @endphp
            <img src="{{ asset('' . $pathImage . '') }}" class="card-img-center" style="width: 200px;" alt="...">
        </div>
        <div class="card-body">
            <span class="font-weight-bold">Name</span>
            <p class="font-weight-light">{{ $patient->name }}</p>
            <span class="font-weight-bold">Phone Number</span>
            <p class="font-weight-light">{{ $patient->phone }}</p>
            <span class="font-weight-bold">Address</span>
            <p class="font-weight-light">{{ $patient->address }}</p>
            <span class="font-weight-bold">Age</span>
            <p class="font-weight-light">{{ $patient->age }}</p>
            <span class="font-weight-bold">Username</span>
            <p class="font-weight-light">{{ $patient->username }}</p>
            <span class="font-weight-bold">Password</span>
            <p class="font-weight-light">{{ $patient->password }}</p>
        </div>
    </div>
</div>
@endsection