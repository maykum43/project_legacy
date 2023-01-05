@extends('main.main_gudang')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book-open"></i>
            </span> Invoice Baru
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <a href="" type="button" class="btn btn-gradient-info btn-fw">Invoice Baru</a> --}}
                <a href="" type="button" class="btn btn-gradient-info btn-icon-text"> 
                    <i class=" mdi mdi-note-plus btn-icon-append"></i>
                    Invoice Baru
                </a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Invoice</h4>
                    <nav aria-label="breadcrumb">
                        <div class="search-field d-none d-md-block">
                        <form class="d-flex align-items-center h-100" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent border-1">
                                    <i class="input-group-text border mdi mdi-magnify"></i>
                                </div>
                                <input type="text" class="form-control bg-transparent border-0"
                                    placeholder="Cari Invoice atau Customer">
                            </div>
                        </form>
                    </div>
                    </nav>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> No. Invoice </th>
                                    <th> Nama Customer </th>
                                    <th> Sales </th>
                                    <th> Nama Kain </th>
                                    <th> Roll </th>
                                    <th> Jumlah </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                                        0212
                                    </td>
                                    <td>Fikri</td>
                                    <td>Mirza</td>
                                    <td>Cey Crinkle Premium</td>
                                    <td>10</td>
                                    <td>Rp. 6,000,000</td>
                                    <td><label class="badge badge-warning">Belum Dikirim</label></td>
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
                                    <td> 0213 </td>
                                    <td>Fikri</td>
                                    <td>Mirza</td>
                                    <td>Cey Crinkle Premium</td>
                                    <td>10</td>
                                    <td>Rp. 6,000,000</td>
                                    <td><label class="badge badge-info">Belum Bayar</label></td>
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
                                        <i class="mdi mdi-bookmark-remove text-danger nav-profile-badge"></i>
                                        0214
                                    </td>
                                    <td>Fikri</td>
                                    <td>Mirza</td>
                                    <td>Cey Crinkle Maxima</td>
                                    <td>10</td>
                                    <td>Rp. 6,000,000</td>
                                    <td><label class="badge badge-danger">Cancel</label></td>
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
                                    <td> 0215 </td>
                                    <td>Fikri</td>
                                    <td>Mirza</td>
                                    <td>Cey Crinkle Maxima</td>
                                    <td>10</td>
                                    <td>Rp. 6,000,000</td>
                                    <td><label class="badge badge-success">Selesai</label></td>
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
    {{-- <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Updates</h4>
                    <div class="d-flex">
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                            <i class="mdi mdi-account-outline icon-sm me-2"></i>
                            <span>jack Menqu</span>
                        </div>
                        <div class="d-flex align-items-center text-muted font-weight-light">
                            <i class="mdi mdi-clock icon-sm me-2"></i>
                            <span>October 3rd, 2018</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 pe-1">
                            <img src="assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded"
                                alt="image">
                            <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                        </div>
                        <div class="col-6 ps-1">
                            <img src="assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded"
                                alt="image">
                            <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                        </div>
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                        <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                        <div class="mb-0 flex-grow">
                            <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                            <p class="mb-0 font-weight-light">It is a long established fact that a reader will be
                                distracted by the readable content of a page.</p>
                        </div>
                        <div class="ms-auto">
                            <i class="mdi mdi-heart-outline text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Invoice Belum Bayar</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Due Date </th>
                                    <th> Progress </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> Herman Beck </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar"
                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Jul 01, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> John Richards </td>
                                    <td> Apr 12, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td> Peter Meggik </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Edward </td>
                                    <td> May 03, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Ronald </td>
                                    <td> Jun 05, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-info" role="progressbar"
                                                style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-white">Todo</h4>
                    <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input"
                            placeholder="What do you need to do today?">
                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                            id="add-task">Add</button>
                    </div>
                    <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked> Call John </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Create invoice </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Print Statements </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked> Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
