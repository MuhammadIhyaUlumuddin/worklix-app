@extends('layouts.app')

@section('title', 'Izin Cuti')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row g-2 align-items-start">
                <div class="col-12 col-lg">
                    <div class="d-flex flex-column flex-md-row gap-2">
                        <button class="btn btn-primary text-nowrap">
                            <span class='icon-base bx bxs-plus-square icon-sm me-1'></span>Izin / Cuti
                        </button>
                        <button class="btn btn-success text-nowrap">
                            <span class='icon-base bx bxs-plus-square icon-sm me-1'></span>Cuti Bersama
                        </button>
                        <button class="btn btn-info text-nowrap">
                            <span class='icon-base bx bxs-plus-square icon-sm me-1'></span>Kuota Izin / Cuti
                        </button>
                    </div>
                </div>

                <div class="col-12 col-lg-auto text-lg-end">
                    <button class="btn btn-light text-nowrap w-100 w-lg-auto">
                        <span class='icon-base bx bx-reset icon-sm me-1'></span>Reset Jatah Cuti
                    </button>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 col-lg d-none d-lg-block"></div>

                <div class="col-12 col-lg-auto ms-lg-auto">
                    <div class="input-group" style="max-width: 420px;">
                        <input type="date" name="" id="" class="form-control">
                        <input type="text" name="" id="" class="form-control" placeholder="Cari Nama">
                        <button class="btn btn-primary">
                            <span class='icon-base bx bx-search icon-sm me-1'></span>Cari
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive text-nowrap text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Tanggal Izin</th>
                        <th>Hari</th>
                        <th>Keterangan</th>
                        <th>Tipe Izin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0"></tbody>
            </table>
        </div>
    </div>
@endsection
