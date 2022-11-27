@extends('layout.header')
@section('isicard')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Panti</h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Panti</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Deadline</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach ($pantis as $panti)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $panti->nama_panti }}</td>
                                    <td>{{ $panti->alamat }}</td>
                                    <td>{{ $panti->status }}</td>
                                    <td>{{ $panti->date }}</td>
                                    <td>{{ $panti->deadline }}</td>
                                    <td>{{ $panti->actions }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
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
@extends('layout.footer')
