@extends('doctor.layout')
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
                <a href="" class="nav-link pr-1">
                    <i class="fas fa-plus-circle fa-lg"></i>
                </a>
            </div>

        </div>
        <div class="card-body pt-0">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th scope="col">
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">address</th>
                        <th scope="col">created day</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </th>
                        <td>Mark</td>
                        <td>Male</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td class="text-center dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Dropdown Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modify
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-trash-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </th>
                        <td>Jacob</td>
                        <td>Male</td>
                        <td>@fat</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td class="text-center dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Dropdown Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modify
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-trash-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <input type="checkbox">
                            <label for="checkbox"></label>
                        </th>
                        <td>Larry the Bird</td>
                        <td>Male</td>
                        <td>@twitter</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td class="text-center dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Dropdown Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                                    View
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modify
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-trash-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection