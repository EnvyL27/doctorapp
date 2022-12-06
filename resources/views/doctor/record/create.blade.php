@extends('layouts.app')
@section('title')
Add Medical Record
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
    <div class="card">
        <div class="card-header text-lg justify-content-center">
            <span class="font-weight-bold">
                Add New Medical Record Data
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
            <form method="post" action="{{ route('record.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="user_id" class="form-label">Patient Name</label>
                    <select name="user_id" class="form-control text-xs">
                        <option value="">--Select--</option>
                        @foreach ($user as $us)
                        <option value="{{ $us->id }}">{{ $us->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disease" class="form-label">Disease</label>
                    <input type="disease" class="form-control text-xs" id="disease" placeholder="enter disease name" name="disease">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control text-xs" id="description" placeholder="enter description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="medicine1" class="form-label">Medicine 1</label>
                    <select name="medicine1" class="form-control text-xs">
                        <option value="">--Select--</option>
                        @foreach ($medicine as $med)
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="medicine2" class="form-label">Medicine 2</label>
                    <select name="medicine2" class="form-control text-xs">
                        <option value="">--Select--</option>
                        @foreach ($medicine as $med)
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="medicine3" class="form-label">Medicine 3</label>
                    <select name="medicine3" class="form-control text-xs">
                        <option value="">--Select--</option>
                        @foreach ($medicine as $med)
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="medicine4" class="form-label">Medicine 4</label>
                    <select name="medicine4" class="form-control text-xs">
                        <option value="">--Select--</option>
                        @foreach ($medicine as $med)
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop