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
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="p-2">
                                <table class="table table-striped table-hover border">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Nama Karyawan</th>
                                            <th scope="col">Alamat Domisili</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">150307928</th>
                                            <td>Sonia</td>
                                            <td>Malang</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-warning" href="#" role="button">Details</a>
                                                    <a class="btn btn-danger" href="#" role="button">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection