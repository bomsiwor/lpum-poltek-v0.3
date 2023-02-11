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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                            type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                            type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                            type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false"
                            disabled>Disabled</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Kelola User</h1>
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        <p>
                            Dapat mengubah data-data dari akun user & mengubah status
                            vote user. <br />
                            Pilih user dan tekan tombol Ubah status untuk mengubah data
                            secara massal
                        </p>
                        <button class="btn tema-3 mb-2" data-bs-target="#uploadMassUsers" data-bs-toggle="modal"><i
                                class="fa-solid fa-cloud-arrow-up"></i> Upload
                            CSV</button>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col"><input type="checkbox" /></th>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td><input type="checkbox" name="bahasa" value="{{ $user->id }}" /></td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->study_program->nama }}</td>
                                            <td>{{ $user->nim }}</td>
                                            <td>
                                                @if ($user->vote_status)
                                                    <span class="badge tema-2"><i class="fa-solid fa-circle-check"></i>
                                                        Active Voter</span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        <i class="fa-solid fa-triangle-exclamation"></i> Not Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-inline">
                                                    <form action="{{ route('user.delete') }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <input type="hidden" name="param" value="{{ $user->nim }}">
                                                        <button class="btn btn-danger my-1" type="submit"
                                                            onclick="return confirm('Yakin hapus?');">Hapus</button>
                                                    </form>
                                                    <button class="btn tema-3 detail-button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        value="{{ route('user-detail', ['user' => $user->nim]) }}">
                                                        Detail
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button class="btn tema-3 verif-button" value="{{ route('verify') }}"><span
                                class="mdi mdi-check-decagram"></span> Verify All</button>
                        <button class="btn tema-3 verif-button" value="{{ route('unverify') }}"><span
                                class="mdi mdi-alert-octagram"></span> unverify all</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Detail Data User
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="modalUser">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form form-control"
                                value="Boma" />
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" id="nim" class="form form-control"
                                value="021900009" />
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label>Prodi : <b class="prodi-text"></b></label>

                                <div class="col-md-6 my-0">
                                    <select class="form-select formProfil" aria-label="Pilih Prodi">
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
                            <input type="text" name="angkatan" id="angkatan" class="form form-control"
                                value="2019" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form form-control"
                                value="Bomsiwor@gmail.com" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form form-control"
                                value="Boma" />
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="vote_status"
                                    name="vote_status" />
                                <label class="form-check-label" for="flexSwitchCheckDefault">Active Voter</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn btn-primary" id="simpanModalButton">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('Layouts.footer')

    {{-- Modal Upload user --}}
    <div class="modal fade" id="uploadMassUsers" tabindex="-1" aria-labelledby="uploadMassUsersLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="uploadMassUsersLabel">
                        Upload User banyak
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('mass-upload-users') }}" method="POST" id="massUsers"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="profile-picture" class="form-label">Upload file CSV</label>
                            <input class="form-control" type="file" name="users">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" form="massUsers">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("table").simpleCheckboxTable();
            $("#example").DataTable();
            $("#simpanModalButton").hide();
        });



        $(".verif-button").click(function(e) {
            e.preventDefault();
            var arr = [];
            var url = $(this).val();

            $.each($("input[name='bahasa']:checked"), function() {
                arr.push($(this).val());
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: url,
                data: {
                    data: arr,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alertify.notify(response.message, 'success', 5);
                    location.reload();
                }
            });
        });

        $(".detail-button").click(function(e) {
            e.preventDefault();
            var url = $(this).val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    var result = response.data;
                    var prodi = response.prodi;
                    $("#nama").val(response.data.nama);
                    $("#nim").val(response.data.nim);
                    $("#email").val(response.data.email);
                    $("#password").val(response.pwd);

                    if (result.vote_status == 1) {
                        $("#vote_status").attr('checked', '');
                    };

                    $(".prodi-text").html(prodi);

                }
            });
        });

        $("#modalUser").change(function(e) {
            e.preventDefault();
            $("#simpanModalButton").show();
        });
    </script>
@endsection
