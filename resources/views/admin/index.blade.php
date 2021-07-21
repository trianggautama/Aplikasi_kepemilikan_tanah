@extends('layouts.main')
@section('content')
<div class="content-wrapper"> 
        <div class="content p-4">
            <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
                <div>
                    <h1>Beranda</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>                
                            </a>
                            </li>
                            <li class="breadcrumb-item">
                            Admin
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Beranda</li>
                        </ol>
                    </nav>
                </div>
            <div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
            <div class="card-body">
                <h2 class="mb-1">71,503</h2>
                <p>Online Signups</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini  mb-4">
            <div class="card-body">
                <h2 class="mb-1">9,503</h2>
                <p>New Visitors Today</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
            <div class="card-body">
                <h2 class="mb-1">71,503</h2>
                <p>Monthly Total Order</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
            <div class="card-body">
                <h2 class="mb-1">9,503</h2>
                <p>Total Revenue This Year</p>
            </div>
            </div>
        </div>
        </div>
    <div class="row" >
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h2>Selamat Dtaang Admin</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script') 
    <script>
           
    </script>
@endsection