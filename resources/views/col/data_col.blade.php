@extends('main.main_gudang')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-arrange-send-to-back"></i>
            </span> Data Warna
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <a href="" type="button" class="btn btn-gradient-info btn-fw">Invoice Baru</a> --}}
                <a href="{{ route('col.create') }}" type="button" class="btn btn-gradient-info btn-icon-text">
                    <i class=" mdi mdi-note-plus btn-icon-append"></i>
                    Tambah Warna
                </a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Warna</h4>
                    <nav aria-label="breadcrumb">
                        <div class="search-field d-none d-md-block">
                            <form class="d-flex align-items-center h-100" action="#">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent border-1">
                                        <i class="input-group-text border mdi mdi-magnify"></i>
                                    </div>
                                    <input type="text" class="form-control bg-transparent border-0"
                                        placeholder="Cari kode/nama warna">
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Kode Warna </th>
                                    <th> Nama Warna</th>
                                    <th> Warna </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i= 1;    
                                @endphp

                                @foreach ($cols as $item)
                                <tr>
                                    <td>
                                        {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
                                        1
                                    </td>
                                    <td>1</td>
                                    <td>Broken White</td>
                                    <td>
                                        <div id="visit-sale-chart-legend"
                                            class="rounded-legend legend-vertical legend-top-center float-center">
                                            <ul>
                                                <li><span class="legend-dots"
                                                        style="background:linear-gradient(to right, rgba(238,235,227,1), rgb(227, 238, 238))"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">Option</button>
                                            <div class="dropdown-menu" style="">
                                                <a herf="#" class="dropdown-item">Detail</a>
                                                <a class="dropdown-item">Edit</a>
                                                <a class="dropdown-item">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
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
@endsection
