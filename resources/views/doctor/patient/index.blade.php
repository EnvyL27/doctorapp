@extends('layouts.app')
@section('title')
Patient
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
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">
                Patient
            </span>
            <span class="text-xs mt-1">&nbspOverview</span>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="nav-item">
                <a href="{{ route('patient.create') }}" class="nav-link pr-1">
                    <i class="fas fa-plus-circle fa-lg"></i>
                </a>
            </div>

        </div>
        <div class="card-body pt-0">
            @if ($message = Session::get('success'))<div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th scope="col">
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Age</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Username</th>
                        <th width='280px'>action</th>
                    </tr>
                </thead>
                <tbody class="small">
                    @foreach ($patient as $ptn)
                    <tr>
                        <td>
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </td>
                        <td>{{ $ptn -> name}}</td>
                        <td class="text-xs">{{ $ptn -> phone}}</td>
                        <td>{{ $ptn -> address}}</td>
                        <td>{{ $ptn -> age}}</td>
                        <td>
                            @php
                            $pathImage = '';
                            $ptn->profile ? ($pathImage = 'storage/' . $ptn->profile) : ($pathImage = 'picture/empty.png');
                            @endphp
                            <img src="{{ asset('' . $pathImage . '') }}" width="100" alt="">
                        </td>
                        <td>{{ $ptn -> username}}</td>
                        <td class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Dropdown Information -->
                            <form action="{{ route('patient.destroy',['patient'=>$ptn->id]) }}" method="POST" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('patient.show',$ptn->id) }}">
                                    <i class="far fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="{{ route('patient.edit',$ptn->id) }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modify
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item">
                                    <i class="far fa-trash-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Delete
                                </button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $patient->links()}}
                    </div>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection