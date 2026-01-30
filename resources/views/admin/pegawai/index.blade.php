@extends('layouts.app')

@section('title', 'Pegawai')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
                <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2">
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class='icon-base bx bx-user-check icon-sm me-1_5'></i> Pegawai
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class='icon-base bx bx-user-x icon-sm me-1_5'></i> Pegawai Tidak Aktif
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-column flex-lg-row gap-3 justify-content-between">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-primary">
                                <span class='icon-base bx bxs-plus-square icon-sm me-1'></span>Tambah
                            </button>
                            <button class="btn btn-success">
                                <span class='icon-base bx bxs-file-import icon-sm me-1'></span>Import Excel
                            </button>
                            <button class="btn btn-info">
                                <span class='icon-base bx bxs-file-blank icon-sm me-1'></span>Edit Via Excel
                            </button>
                        </div>

                        <div class="input-group w-100 w-lg-auto" style="max-width: 520px;">
                            <select name="" id="" class="form-select" style="max-width: 130px;">
                                <option value="">Nama</option>
                                <option value="">Divisi</option>
                                <option value="">Jabatan</option>
                            </select>
                            <input type="text" name="" id="" class="form-control"
                                placeholder="Cari Data">
                            <button class="btn btn-primary">
                                <span class='icon-base bx bx-search icon-sm me-1'></span>Cari
                            </button>
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                <i class='icon-base bx bx-sort-down icon-sm'></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="" class="dropdown-item">Pendaftar Terbaru</a></li>
                                <li><a href="" class="dropdown-item">Pendaftar Terlama</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="table-responsive text-nowrap text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>Tanggal Masuk</th>
                                <th>Aksi</th>
                                <th>Ganti Password</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
