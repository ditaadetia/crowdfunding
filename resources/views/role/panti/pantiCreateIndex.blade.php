@extends('layout.core.index')
@section('title')
    Admin - Daftar Panti Asuhan
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Daftar Panti</h4>
                            <form action="{{ route('panti.createPanti') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Panti Asuhan</label>
                                    <input type="text" class="form-control" id="nama_panti" name="nama_panti" placeholder="Nama Panti">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Alamat Panti Asuhan</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Panti">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
    </div>
@endsection
@section('js')
@endsection