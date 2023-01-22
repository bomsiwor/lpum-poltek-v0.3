@extends('Layouts.template')

@section('bodi')

    @include('Layouts.preload')
    @include('Layouts.header')
    @include('Layouts.sidebar')
    @include('Layouts.page-wrapper')
      
      
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <h3 class="text-muted">
              Kelola data-data user. Termasuk mengubah privilege vote user
            </h3>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Kelola User</h1>
                    <p>
                      Dapat mengubah data-data dari akun user & mengubah status
                      vote user. <br />
                      Pilih user dan tekan tombol Ubah status untuk mengubah data
                      secara massal
                    </p>
                    <div class="table-responsive">
                      <table
                        class="table table-bordered text-center"
                        id="example"
                      >
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" name="bahasa" value="indo" />
                            </td>
                            <th scope="row">1</th>
                            <td>Bomsiwor</td>
                            <td>Elins</td>
                            <td>2019</td>
                            <td>
                              <span class="badge bg-danger">Belum aktif</span>
                            </td>
                            <td>
                              <button class="btn btn-danger">Hapus</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" name="bahasa" value="indo" />
                            </td>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Elmek</td>
                            <td>2020</td>
                            <td>
                              <span class="badge bg-danger">Belum aktif</span>
                            </td>
                            <td>
                              <button class="btn btn-danger">Hapus</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" name="bahasa" value="indo" />
                            </td>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>TKN</td>
                            <td>2022</td>
                            <td>
                              <span class="badge tema-2">Aktif</span>
                            </td>
                            <td>
                              <button class="btn btn-danger">Hapus</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <button class="btn tema-3" id="tombolVerif">Tekan</button>
                    <button
                      class="btn tema-3"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >
                      Modal
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- Modal -->
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
            >
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Detail Data User
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                </div>
                <div class="modal-body">
                <form action="" id="modalUser">
                    <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form form-control"
                        value="Boma"
                    />
                    </div>
                    <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input
                        type="text"
                        name="nim"
                        id="nim"
                        class="form form-control"
                        value="021900009"
                    />
                    </div>
                    <div class="mb-3">
                    <div class="form-group">
                        <label class="col-md-12">Prodi</label>
                        <div class="col-md-12">
                        <select
                            class="form-select formProfil"
                            aria-label="Pilih Prodi"
                        >
                            <option selected>Pilih Prodi</option>
                            <option value="1">Elins</option>
                            <option value="2">Elmek</option>
                            <option value="3">TKN</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input
                        type="text"
                        name="angkatan"
                        id="angkatan"
                        class="form form-control"
                        value="2019"
                    />
                    </div>
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form form-control"
                        value="Bomsiwor@gmail.com"
                    />
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form form-control"
                        value="Boma"
                    />
                    </div>
                    <div class="mb-3">
                    <div class="form-check form-switch">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckDefault"
                        />
                        <label class="form-check-label" for="flexSwitchCheckDefault"
                        >Active Voter</label
                        >
                    </div>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Batal
                </button>
                <button
                    type="button"
                    class="btn btn-primary"
                    id="simpanModalButton"
                >
                    Simpan
                </button>
                </div>
            </div>
            </div>
        </div>
      @include('Layouts.footer')
      <script>
        $(document).ready(function () {
          $("table").simpleCheckboxTable();
          $("#example").DataTable();
          $("#simpanModalButton").hide();
    
          $("#tombolVerif").click(function (e) {
            e.preventDefault();
            var arr = [];
            $.each($("input[name='bahasa']:checked"), function () {
              arr.push($(this).val());
            });
            console.log(arr);
          });
        });
    
        $("#modalUser").change(function (e) {
          e.preventDefault();
          $("#simpanModalButton").show();
        });
      </script>
@endsection
