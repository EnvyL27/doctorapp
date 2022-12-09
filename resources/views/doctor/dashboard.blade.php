@extends('layouts.app')
@section('title')
Dashboard
@endsection

@section('breadcrumb1')
Admin Management
@endsection

@section('breadcrumb2')
Dashboard
@endsection

@section('breadcrumb3')
Analytics
@endsection

@section('content')
<div class="mb-4 text-lg font-weight-bold">
    <span>
        Welcome Doctor!
    </span>
</div>
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="patient">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    PATIENT</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $datap }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="record">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    MEDICAL RECORD</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $datamr }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Medicine</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $datam }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-pills fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    SCHEDULE</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection