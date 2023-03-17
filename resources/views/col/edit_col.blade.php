@extends('main.main_gudang')
@section('content')
<style>
        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="color"] {
            height: 40px;
            width: 40px;
            padding: 0;
            margin-left: 10px;
            vertical-align: middle;
            border: none;
            outline: none;
            cursor: pointer;
        }

        input[type="color"]::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        input[type="color"]::-webkit-color-swatch {
            border: none;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2);
        }

        input[type="color"]::-moz-color-swatch {
            border: none;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2);
        }

        input[type="color"]::-moz-focus-inner {
            border: none;
            outline: none;
        }

        #color-preview {
            margin-top: 10px;
            width: 200px;
            height: 100px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease-in-out;
        }

        #color-preview h2 {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }

        #color-preview p {
            text-align: center;
            font-size: 1rem;
            color: #888;
        }

        input[type="color"]:hover+#color-preview,
        input[type="color"]:focus+#color-preview {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        input[type="color"]::-webkit-color-swatch:hover,
        input[type="color"]::-moz-color-swatch:hover {
            box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.5);
        }
    </style>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book-open"></i>
            </span> Edit Warna
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
                    <h4 class="card-title">Update Data Warna</h4>
                    <form class="form-sample" action="{{ route('col.update',$data->id_col)}}" method="POST" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Warna</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama_col" value="{{$data->nama_col}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">#HEX</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" name="rgb" value="{{$data->rgb}}" id="">
                                      {{-- {{$data->rgb}} --}}
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode Warna</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="cd_col" value="{{$data->cd_col}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Pilih Warna</label>
                                  <div class="col-sm-9">
                                    <input type="color" id="color" name="color">

                                    <div id="color-preview">Warna yang dipilih: </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            {{-- <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pilih Warna</label>
                            <div class="col-sm-9">
                              <input type="color" class="form-control">
                            </div>
                          </div>
                        </div> --}}
                        </div>
                        <button type="submit" class="btn btn-gradient-info me-2">Simpan</button>
                        <a href="{{ route('cols_dt')}}" class="btn btn-gradient-light me-2">Batal</a>
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
<script>
  var colorPicker = document.getElementById("color");
  var colorPreview = document.getElementById("color-preview");

  colorPicker.addEventListener("input", function () {
      colorPreview.style.backgroundColor = colorPicker.value;
      colorPreview.innerHTML =  colorPicker.value;
  });
</script>
@endsection
