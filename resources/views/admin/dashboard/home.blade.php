@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endpush

@section('content')
    <div class="card">
        <h5 class="card-header">Absensi Terbaru</h5>
        <div class="table-responsive text-nowrap text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <div class="d-flex align-items-center justify-content-center gap-3">
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="avatar" class="rounded-circle">
                                </div>
                                <span>Ehsan</span>
                            </div>
                        </td>
                        <td>Administrasi</td>
                        <td>Supervisor</td>
                        <td>Absen Masuk</td>
                        <td>15 January 2026 17:28:33</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endpush
