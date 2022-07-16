@extends('layouts.appSisMonitoring')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DATA USERMANAGEMENT</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Management</li>
                </ol>
            </div>
            </div>
        </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <!-- grid -->
                    <div class="d-grid gap-3">
                        <div class="text-center">
                            <div class="p-4"></div>
                            <div class="p-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col text-left">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add-userLogin"><i class="nav-icon fas fa-user-plus"></i> Tambah Data</button>
                                        </div>
                                        <div class="col">
                                            <form class="d-flex" role="search">
                                                <a role="label" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <input class="form-control me-2" id="mySearch" onkeyup="mySearchFunction()" type="search" placeholder="Search" aria-label="Search">
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <table class="table table-striped table-hover border">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="list-userLogin">
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal add data -->
                <div class="card-body">
                    <!-- grid -->
                    <div class="modal fade" id="add-userLogin" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Create post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-postUserLogin" method="post">
                                        <div class="mb-3">
                                            <label for="idNumber" class="form-label">NIP</label>
                                            <input type="text" class="form-control" id="idNumber" name="idNumber">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Nama</label>
                                            <textarea class="form-control" id="fullname" name="fullname"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <textarea class="form-control" id="password" name="password"></textarea>
                                        </div>
                                        <button type="button" id="add-submitUserLogin" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- delete modal -> delete data -->
                <div class="card-body">
                    <!-- grid -->
                    <div class="modal fade" id="delete-modalUserLogin" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="lead">Are you sure you want to delete this post?</p>
                                    <input name="id" id="post-id" type="hidden">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" id="delete-btnUserLogin" class="btn btn-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- update modal -> update data -->
                <div class="card-body">
                    <!-- grid -->
                    <div class="modal fade" id="update-modalUserLogin" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="update-postUserLogin" method="post">
                                        <div class="mb-3">
                                            <label for="update-idNumber" class="form-label">NIP</label>
                                            <textarea class="form-control" id="update-idNumber" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="update-fullname" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="update-fullname" name="content">
                                        </div>
                                        <div class="mb-3">
                                            <label for="update-password" class="form-label">Password</label>
                                            <textarea class="form-control" id="update-password" name="content"></textarea>
                                        </div>
                                        <button type="button" id="update-btnUserLogin" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

            
        </section>
        <!-- /.content -->
@endsection
