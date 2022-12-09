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
    <div class="card">
        <div class="card-header text-lg justify-content-center">
            <span class="font-weight-bold">
                Edit Medicine Data
            </span>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('medicine.update', $medicine->id) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control text-xs" id="name" name="name" value="{{ $medicine->name }}" ariadescribedby="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="price" class="form-control text-xs" id="price" name="price" value="{{ $medicine->price }}" ariadescribedby="price">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="stock" class="form-control text-xs" id="stock" value="{{ $medicine->stock }}" ariadescribedby="stock" name="stock">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop