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
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-md-8">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h1 class="card-title text-center">Menu Navigasi</h1>
                    <div class="d-flex justify-content-center mb-2">
                      <li
                        class="list-inline-item d-flex align-items-center text-muted"
                      >
                        <i class="fa fa-circle font-10 me-1"></i> Data tidak
                        dibuka publik
                      </li>
                    </div>
                    <div class="text-center justify-content-center">
                      <button class="btn tema-3">Buka untuk umum!</button>
                      <button class="btn tema-2" id="tampilTombol">
                        Tampilkan hasil
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h1 class="card-title text-center">Statistik Pemilih</h1>
                    <ul>
                      <li class="list-inline-item d-flex align-items-center">
                        <i class="fa fa-circle font-10 me-1"></i> Active Voter :
                        angka
                      </li>
                      <li
                        class="list-inline-item d-flex align-items-center text-success"
                      >
                        <i class="fa fa-circle font-10 me-1"></i> Sudah memilih :
                        angka
                      </li>
                      <li
                        class="list-inline-item d-flex align-items-center text-muted"
                      >
                        <i class="fa fa-circle font-10 me-1"></i> Belum memilih :
                        angka
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="row animate__animated animate__fadeIn animate__slower"
              id="hasil"
            >
              <div class="col-md-8">
                <div class="card" style="height: 50vh">
                  <div class="card-body">
                    <h2 class="card-title text-center">Hasil perhitungan</h2>
                    <div id="my-chart">
                      <table
                        class="charts-css column show-heading show-labels show-primary-axis show-data-axes show-data-on-hover"
                      >
                        <caption class="text-center fs-3">
                          Pemilihan Presiden
                        </caption>
  
                        <thead>
                          <tr>
                            <th scope="col">No Urut</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
  
                        <tbody>
                          <tr>
                            <th>Jokowi/Ahok</th>
                            <td style="--size: calc(15 / 100)">
                              <span class="data">15</span>
                            </td>
                          </tr>
                          <tr>
                            <th>Prabowo/Sandi</th>
                            <td style="--size: calc(15 / 100)">
                              <span class="data">100</span>
                            </td>
                          </tr>
                          <tr>
                            <th>Naruto/Sasuke</th>
                            <td style="--size: calc(40 / 100)">
                              <span class="data">40</span>
                            </td>
                          </tr>
                          <tr>
                            <th>Spongebob/Patrik</th>
                            <td style="--size: calc(30 / 100)">
                              <span class="data">30</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Legends</h2>
                    <ul class="charts-css legend legend-square">
                      <li>Jokowi/Ahok</li>
                      <li>Prabowo/Sandi</li>
                      <li>Naruto/Sasuke</li>
                      <li>Spombob/Petrik</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
      @include('Layouts.footer')
      <script>
        $(document).ready(function () {
          $("#hasil").hide();
        });
    
        $("#tampilTombol").click(function (e) {
          e.preventDefault();
          $("#hasil").show();
        });
      </script>
@endsection
