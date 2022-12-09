@extends('layouts.app')
@section('title')
Medical Record Detail
@endsection

@section('breadcrumb1')
Medical Record Management
@endsection

@section('breadcrumb2')
Pages
@endsection

@section('breadcrumb3')
Medical Record
@endsection

@section('content')
<div class="container-fluid">
    <div class="card-header justify-content-center">
        {{ $record->user->name }} Medical Record Data
    </div>
    <div class="card">
        <div class="card-body text-center">
            <div class="row">
                <div class="col">
                    <span class="font-weight-bold">Name</span>
                    <p class="font-weight-light">{{ $record->user->name }}</p>
                    <span class="font-weight-bold">Disease</span>
                    <p class="font-weight-light">{{ $record->disease }}</p>
                    <span class="font-weight-bold">Description</span>
                    <p class="font-weight-light">{{ $record->description }}</p>
                </div>
                <div class="col">
                    <span class="font-weight-bold">Medicines</span>
                    <p class="font-weight-light">{{ $record->medicine_1->name }}</p>
                    <p class="font-weight-light">{{ $record->medicine_2->name ?? ' ' }}</p>
                    <p class="font-weight-light">{{ $record->medicine_3->name ?? ' ' }}</p>
                    <p class="font-weight-light">{{ $record->medicine_4->name ?? ' ' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection