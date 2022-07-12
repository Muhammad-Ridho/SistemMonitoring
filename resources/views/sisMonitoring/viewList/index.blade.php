@extends('layouts.appSisMonitoring')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>View List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">View List</li>
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
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal">Tambah Data</button>
                                        </div>
                                        <div class="col">
                                            <form class="d-flex" role="search">
                                                <a role="button" class="btn btn-success"><i class="fa fa-search"></i></a>
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
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Alamat Domisili</th>
                                            <th scope="col">Alamat Kantor</th>
                                            <th scope="col">No. HP</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-list">
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal add data -->
                <div class="card-body">
                    <!-- grid -->
                    <div class="modal fade" id="add-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Create post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-post" method="post">
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="fullname" name="title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="idNumber" class="form-label">NIP</label>
                                            <textarea class="form-control" id="idNumber" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="home_address" class="form-label">Alamat Domisili</label>
                                            <textarea class="form-control" id="home_address" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="office_address" class="form-label">Alamat Kantor</label>
                                            <textarea class="form-control" id="office_address" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label">No. HP</label>
                                            <textarea class="form-control" id="phone_number" name="content"></textarea>
                                        </div>
                                        <button type="button" id="add-submit" class="btn btn-primary">Submit</button>
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
                    <div class="modal fade" id="delete-modal" tabindex="-1">
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
                                    <button type="button" id="delete-button" class="btn btn-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- update modal -> update data -->
                <div class="card-body">
                    <!-- grid -->
                    <div class="modal fade" id="update-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="update-post" method="post">
                                    <div class="mb-3">
                                            <label for="update-fullname" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="update-fullname" name="title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="update-idNumber" class="form-label">NIP</label>
                                            <textarea class="form-control" id="update-idNumber" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="update-home_address" class="form-label">Alamat Domisili</label>
                                            <textarea class="form-control" id="update-home_address" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="update-office_address" class="form-label">Alamat Kantor</label>
                                            <textarea class="form-control" id="update-office_address" name="content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="update-phone_number" class="form-label">No. HP</label>
                                            <textarea class="form-control" id="update-phone_number" name="content"></textarea>
                                        </div>
                                        <button type="button" id="update-button" class="btn btn-primary">Submit</button>
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
    <script>
        
    </script>
@endsection