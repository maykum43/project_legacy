@extends('main.main_gudang')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-arrange-send-to-back"></i>
            </span> Data Pegawai
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <a href="" type="button" class="btn btn-gradient-info btn-fw">Invoice Baru</a> --}}
                <a href="{{route('pgw.create')}}" type="button" class="btn btn-gradient-info btn-icon-text">
                    <i class=" mdi mdi-note-plus btn-icon-append"></i>
                    Tambah Data
                </a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pegawai</h4>
                    <nav aria-label="breadcrumb">
                        <div class="search-field d-none d-md-block">
                            <form class="d-flex align-items-center h-100" action="#">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent border-1">
                                        <i class="input-group-text border mdi mdi-magnify"></i>
                                    </div>
                                    <input type="text" class="form-control bg-transparent border-0"
                                        placeholder="Cari data">
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th> ID Pegawai </th>
                                    <th> Nama </th>
                                    <th> Jabatan </th>
                                    <th> Telepon </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i= 1;    
                                @endphp

                                @foreach ($pgws as $pgws)
                                <tr>
                                    <td>
                                        {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
                                        {{ $i++ }}
                                    </td>
                                    <td>{{$pgws->id_pgw}}</td>
                                    <td>{{$pgws->nama}}</td>
                                    <td>{{$pgws->jabatan}}</td>
                                    <td>{{$pgws->tlp}}</td>
                                    {{-- <td style="background-color: {{ $item->rgb }}; border-radius: 50%;">
                                        <div style="width: 10px; height: 10px;"></div>
                                    </td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">Option</button>
                                            <div class="dropdown-menu" style="">
                                                <a herf="#" class="dropdown-item">Detail</a>
                                                <a href="" class="dropdown-item">Edit</a>
                                                <a href="" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="dropdown-item">Hapus</a>
                                                {{-- <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button> 
                                                {{ route('col.delete') }} --}}
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
