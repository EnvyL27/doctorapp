@extends('layouts.app')
@section('title')
Medical Record
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
        <div class="card-header">
            <span class="font-weight-bold">
                Medical Record
            </span>
            <span class="text-xs mt-1">&nbspOverview</span>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ url('record/search') }}">
                <div class="input-group">
                    <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="nav-item">
                <a href="{{ route('record.create') }}" class="nav-link pr-1">
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
                        <th scope="col">Patient Name</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Description</th>
                        <th scope="col">Medicine 1</th>
                        <th scope="col">Medicine 2</th>
                        <th scope="col">Medicine 3</th>
                        <th scope="col">Medicine 4</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="small">
                    @foreach ($record as $rcd)
                    <tr>
                        <td>
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </td>
                        <td>{{ $rcd -> user -> name }}</td>
                        <td class="text-xs">{{ $rcd -> disease}}</td>
                        <td>{{ $rcd -> description}}</td>
                        <td>{{ $rcd -> medicine_1 -> name}}</td>
                        <td>{{ $rcd -> medicine_2 -> name ?? ''}}</td>
                        <td>{{ $rcd -> medicine_3 -> name ?? ''}}</td>
                        <td>{{ $rcd -> medicine_4 -> name ?? ''}}</td>
                        <td class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Dropdown Information -->
                            <form action="{{ route('record.destroy',['record'=>$rcd->id]) }}" method="POST" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('record.show',$rcd->id) }}">
                                    <i class="far fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="{{ route('record.edit',$rcd->id) }}">
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
                </tbody>
            </table>
            {{ $record->links()}}
        </div>
    </div>

</div>
@endsection