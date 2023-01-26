@extends('main.main_gudang')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book-open"></i>
            </span> Data Produk
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <a href="" type="button" class="btn btn-gradient-info btn-fw">Invoice Baru</a> --}}
                <a href="{{ route('inv.create') }}" type="button" class="btn btn-gradient-info btn-icon-text"> 
                    <i class=" mdi mdi-note-plus btn-icon-append"></i>
                    Produk Baru
                </a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Produk</h4>
                    <nav aria-label="breadcrumb">
                        <div class="search-field d-none d-md-block">
                        <form class="d-flex align-items-center h-100" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent border-1">
                                    <i class="input-group-text border mdi mdi-magnify"></i>
                                </div>
                                <input type="text" class="form-control bg-transparent border-0"
                                    placeholder="Cari Nama Produk">
                            </div>
                        </form>
                    </div>
                    </nav>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Nama Produk </th>
                                    <th> Stok Roll</th>
                                    <th> Stok YDS </th>
                                    <th> Roll Terjual </th>
                                    <th> YDS Terjual </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
                                        1
                                    </td>
                                    <td>Cey Crinkle Premium</td>
                                    <td>200</td>
                                    <td>12.000</td>
                                    <td>30</td>
                                    <td>679</td>
                                    <td><label class="badge badge-success">Tersedia</label></td>
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
                                <tr>
                                    <td>
                                        {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
                                        2
                                    </td>
                                    <td>Cey Crinkle Maxima</td>
                                    <td>30</td>
                                    <td>1800</td>
                                    <td>30</td>
                                    <td>679</td>
                                    <td><label class="badge badge-warning">Sisa Sedikit</label></td>
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
                                <tr>
                                    <td>
                                        {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
                                        3
                                    </td>
                                    <td>Cey Crinkle Valentino</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>30</td>
                                    <td>679</td>
                                    <td><label class="badge badge-danger">Habis</label></td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection