@extends('main.main_gudang')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book-open"></i>
            </span> Data Pegawai Baru
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
                    <h4 class="card-title">Input Data Pegawai Baru</h4>
                    <form class="form-sample" action="" method="POST" role="form">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama_pgw">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="jabatan" name="jabatan">
                                    <option value="Direktur">Direktur</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Kepala Gudang">Kepala Gudang</option>
                                    <option value="Admin Gudang">Admin Gudang</option>
                                    <option value="Helper">Helper</option>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Sales">Sales</option>
                                    <!-- Tambahkan opsi jabatan sesuai kebutuhan Anda -->
                                </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">No. Telepon</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="no_tlp">
                              </div>
                            </div>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-info me-2">Simpan</button>
                      <a href="{{ route('pgw')}}" class="btn btn-gradient-light me-2">Batal</a>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>

<script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>
@endsection
