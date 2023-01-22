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
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <div class="row">
              <!-- Column -->
              <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <center class="m-t-30">
                      <img
                        src="../assets/images/users/5.jpg"
                        class="rounded-circle"
                        width="150"
                      />
                      <h4 class="card-title m-t-10">Hanna Gover</h4>
                      <h6 class="card-subtitle">Elektronika Instrumentasi</h6>
                      <div class="row text-center justify-content-center">
                        <div class="col-6">
                          <button class="btn tema-3">Hapus Foto</button>
                        </div>
                        <div class="col-6">
                          <button class="btn tema-2">Ganti foto</button>
                        </div>
                      </div>
                    </center>
                  </div>
                  <div>
                    <hr />
                  </div>
                  <div class="card-body">
                    <small class="text-muted">Email address </small>
                    <h6>hannagover@gmail.com</h6>
                    <small class="text-muted p-t-30 db">Phone</small>
                    <h6>+91 654 784 547</h6>
                    <small class="text-muted p-t-30 db">Address</small>
                    <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <!-- Column -->
              <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <div class="d-md-flex align-items-center">
                      <div>
                        <h4 class="card-title">Detail Profil</h4>
                        <h6 class="card-subtitle">
                          Edit profil kamu kalau perlu
                        </h6>
                      </div>
                      <div class="ms-auto d-flex no-block align-items-center">
                        <button class="btn tema-2" id="edit-profile-button">
                          Edit Profil
                        </button>
                        <button class="btn tema-2 mx-1" id="save-profile-button">
                          Simpan
                        </button>
                      </div>
                    </div>
                    <form class="form-horizontal form-material mx-2">
                      <!-- Nama lengkap -->
                      <div class="form-group">
                        <label class="col-md-12">Nama Lengkap</label>
                        <div class="col-md-12">
                          <input
                            type="text"
                            placeholder="Nama Lengkap"
                            value="Bomsiwor"
                            class="form-control form-control-line formProfil"
                            disabled
                          />
                        </div>
                      </div>
                      <!-- Prodi -->
                      <div class="form-group">
                        <label class="col-md-12">Prodi</label>
                        <div class="col-md-12">
                          <select
                            class="form-select formProfil"
                            aria-label="Pilih Prodi"
                            disabled
                          >
                            <option selected>Pilih Prodi</option>
                            <option value="1">Elins</option>
                            <option value="2">Elmek</option>
                            <option value="3">TKN</option>
                          </select>
                        </div>
                      </div>
                      <!-- NIM -->
                      <div class="form-group">
                        <label class="col-md-12">NIM</label>
                        <div class="col-md-12">
                          <input
                            type="text"
                            placeholder="xx xx xxxx"
                            value="021900009"
                            class="form-control form-control-line formProfil"
                            disabled
                          />
                        </div>
                      </div>
                      <!-- Email -->
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                          <input
                            type="email"
                            placeholder="johnathan@admin.com"
                            class="form-control form-control-line formProfil"
                            name="email"
                            id="email"
                            disabled
                          />
                        </div>
                      </div>
                      <!-- Password -->
                      <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                          <input
                            type="password"
                            value="password"
                            name="password"
                            class="form-control form-control-line formProfil"
                            disabled
                          />
                        </div>
                      </div>
                      <!-- No. HP / Whatsapp -->
                      <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                          <input
                            type="text"
                            placeholder="123 456 7890"
                            class="form-control form-control-line formProfil"
                            disabled
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Column -->
            </div>
          </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
      @include('Layouts.footer')
      <script>
        $(document).ready(function () {
          $("#save-profile-button").hide();
        });
      </script>
@endsection
