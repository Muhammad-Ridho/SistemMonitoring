@extends('layouts.appSisMonitoring')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dasboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dasboard</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <!-- grid -->
                    <div class="d-grid gap-3">
                        <div class="text-center">
                            <div class="p-2">
                                    <h1><strong>ASNMO</strong></h1>
                                    <h3>Monitoring of State Civil Apparatus</h3>
                            </div>
                            <div class="p-2">
                                    <img src="{{asset('template/')}}/dist/img/korpri.png" class="img-fluid" alt="logo korpri" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection