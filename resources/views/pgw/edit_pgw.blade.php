@extends('main.main_gudang')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book-open"></i>
            </span> Edit Data Pegawai
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <p class="card-description"> INV.No : 0389 </p> --}}
                {{-- <a href="" type="button" class="btn btn-gradient-info btn-icon-text"> 
                    <i class=" mdi mdi-note-plus btn-icon-append"></i>
                    Invoice Baru
                </a> --}}
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title">Input Data Pegawai Baru</h4> --}}
                    <form class="form-sample" action="{{ route('pegawai.update',$data->id_col)}}" method="GET" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama_pgw" value="{{$data->nama}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="no_tlp" value="{{$data->tlp}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="jabatan" name="jabatan">
                                        {{-- <option value="{{$data->jabatan}}">{{$data->jabatan}}</option> --}}
                                        <option value="Manager" {{ $data->jabatan == 'Direktur' ? 'selected' : '' }}>Direktur</option>
                                        <option value="Accounting" {{ $data->jabatan == 'Accounting' ? 'selected' : '' }}>Accounting</option>
                                        <option value="Kepala Gudang" {{ $data->jabatan == 'Kepala Gudang' ? 'selected' : '' }}>Kepala Gudang</option>
                                        <option value="Admin Gudang" {{ $data->jabatan == 'Admin Gudang' ? 'selected' : '' }}>Admin Gudang</option>
                                        <option value="Helper" {{ $data->jabatan == 'Helper' ? 'selected' : '' }}>Helper</option>
                                        <option value="Kasir" {{ $data->jabatan == 'Kasir' ? 'selected' : '' }}>Kasir</option>
                                        <option value="Sales" {{ $data->jabatan == 'Sales' ? 'selected' : '' }}>Sales</option>
                                        <!-- Tambahkan opsi jabatan sesuai kebutuhan Anda -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-warning me-2">Update</button>
                        <a href="{{ route('pgw') }}" class="btn btn-gradient-light me-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var dt = new Date();
    document.getElementById('date-time').innerHTML = dt;
</script>
@endsection