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
                Add New Medicine Data
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
            <form method="post" action="{{ route('medicine.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control text-xs" id="name" placeholder="enter medicine's name" name="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="price" class="form-control text-xs" id="price" placeholder="enter medicine's price" name="price">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="stock" class="form-control text-xs" id="stock" placeholder="enter medicine's stock" name="stock">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop