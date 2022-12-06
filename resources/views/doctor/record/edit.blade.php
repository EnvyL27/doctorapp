@extends('layouts.app')
@section('title')
Edit Medical Record
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
                Edit Medical Record Data
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
            <form method="post" action="{{ route('record.update', $record->id) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="user_id" class="form-label">Patient Name</label>
                    <select name="user_id" class="form-control text-xs">
                        @foreach ($user as $us)
                        <option value="{{ $us->id }}" {{$record->user_id == $us->id ? 'selected' : ''}}>{{ $us->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disease" class="form-label">Disease</label>
                    <input type="disease" class="form-control text-xs" id="disease" value="{{ $record->disease }}" ariadescribedby="disease" name="disease">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="description" class="form-control text-xs" id="description" name="description">{{ $record->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="medicine1" class="form-label">Medicine 1</label>
                    <select name="medicine1" class="form-control text-xs">
                        @foreach ($medicine as $med)
                        <option value="{{ $med->id }}" {{$record->medicine1 == $med->id ? 'selected' : ''}}>{{ $med->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="medicine2" class="form-label">Medicine 2</label>
                    <select name="medicine2" class="form-control text-xs">
                        <!-- @foreach ($medicine as $med)
                        @if($med->id == $record->medicine2)
                        <option value="{{ $med->id }}" {{$record->medicine2 == $med->id ? 'selected' : ''}}>{{ $med->name }}</option>
                        @else
                        <option value="">--Select--</option>
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endif
                        @endforeach -->
                        @foreach ($medicine as $med)
                        @if($record->medicine2 == $med->id)
                        <option value="{{ $med->id }}" {{$record->medicine2 == $med->id ? 'selected' : ''}}>{{ $med->name }}</option>
                        @else
                        <option value="">--Select--</option>
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="medicine3" class="form-label">Medicine 3</label>
                    <select name="medicine3" class="form-control text-xs">
                        @foreach ($medicine as $med)
                        @if($record->medicine3 == $med->id)
                        <option value="{{ $med->id }}" {{$record->medicine3 == $med->id ? 'selected' : ''}}>{{ $med->name }}</option>
                        @else
                        <option value="">--Select--</option>
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="medicine4" class="form-label">Medicine 4</label>
                    <select name="medicine4" class="form-control text-xs">
                        @foreach ($medicine as $med)
                        @if($record->medicine4 == $med->id)
                        <option value="{{ $med->id }}" {{$record->medicine4 == $med->id ? 'selected' : ''}}>{{ $med->name }}</option>
                        @else
                        <option value="">--Select--</option>
                        <option value="{{ $med->id }}">{{ $med->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection