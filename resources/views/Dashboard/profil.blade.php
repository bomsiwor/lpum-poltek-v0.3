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
            @error('photo')
                <div class="alert alert-danger">
                    Upload foto gagal <b>Coba lagi!</b>
                </div>
            @enderror

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <center class="m-t-30">

                            @if (!auth()->user()->image)
                                <img src="{{ asset('assets/images/users/default_profile.png') }}" class="rounded-circle"
                                    width="150" />
                            @else
                                <img src="{{ asset('storage/' . auth()->user()->image) }}" class="avatar" width="250"
                                    height="250" />
                            @endif

                            <h4 class="card-title m-t-10">{{ auth()->user()->nama }}</h4>
                            <h6 class="card-subtitle">{{ auth()->user()->study_program->nama }}</h6>
                            <div class="row text-center justify-content-center">
                                @if (auth()->user()->image)
                                    <div class="col-6">
                                        <form action="{{ route('delete-profile-picture') }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn tema-3"
                                                onclick="return confirm('Hapus fotomu yang cupu itu?');">Hapus
                                                Foto</button>
                                        </form>
                                    </div>
                                @endif
                                <div class="col-6">
                                    <button class="btn tema-2" data-bs-target="#uploadProfilPict"
                                        data-bs-toggle="modal">Ganti foto</button>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Surel</small>
                        <h6>{{ auth()->user()->email }}</h6>
                        <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ auth()->user()->phone }}</h6>
                        <small class="text-muted p-t-30 db">Terakhir diupdate</small>
                        <h6>{{ date('d-m-Y', strtotime(auth()->user()->updated_at)) }}</h6>
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
                                <button class="btn tema-2 mx-1" type="submit" id="save-profile-button"
                                    form="#profileDetail">
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <form class="form-horizontal form-material mx-2" method="POST"
                            action="{{ route('change-user-detail') }}" id="profileDetail">
                            @method('PUT')
                            @csrf
                            <!-- Nama lengkap -->
                            <div class="form-group">
                                <label class="col-md-12">Nama Lengkap</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nama Lengkap" value="{{ auth()->user()->nama }}"
                                        class="form-control form-control-line formProfil" name="nama" disabled />
                                </div>
                            </div>
                            <!-- Prodi -->
                            <div class="form-group">
                                <label class="col-md-12">Prodi</label>
                                <div class="col-md-12">
                                    <select class="form-select formProfil" aria-label="Pilih Prodi" name="study_program_id"
                                        disabled>
                                        <option selected value="0">Pilih Prodi</option>
                                        @foreach ($study_programs as $study_program)
                                            <option @if (auth()->user()->study_program_id == $study_program->id) selected @endif
                                                value="{{ $study_program->id }}">{{ $study_program->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- NIM -->
                            <div class="form-group">
                                <label class="col-md-12">NIM</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="nim" value="{{ auth()->user()->nim }}"
                                        class="form-control form-control-line formProfil" disabled name="nim" />
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Surel</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="johnathan@admin.com"
                                        value="{{ auth()->user()->email }}"
                                        class="form-control form-control-line formProfil" name="email" id="email"
                                        disabled />
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="{{ auth()->user()->password }}" name="password"
                                        class="form-control form-control-line formProfil" disabled />
                                </div>
                            </div>
                            <!-- No. HP / Whatsapp -->
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Masih kosong..." value="{{ auth()->user()->phone }}"
                                        class="form-control form-control-line formProfil" disabled name="phone" />
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

    {{-- Modal --}}
    <div class="modal fade" id="uploadProfilPict" tabindex="-1" aria-labelledby="uploadProfilPictLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="uploadProfilPictLabel">
                        Upload foto profil
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('change-profile-picture') }}" method="POST" id="changePicture"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <p>Maksimum 2 MB aja ya &#128030;</p>
                            <div class="text-center">
                                <img id="preview-image-before-upload"
                                    src="{{ asset('assets/images/image-not-found-icon.png') }}" alt="preview image"
                                    style="max-height: 250px;">
                            </div>
                            <label for="profile-picture" class="form-label">Upload foto baru</label>
                            <input class="form-control" type="file" name="photo" id="photo">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" form="changePicture">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#save-profile-button").hide();


            $("#photo").change(function(e) {
                e.preventDefault();
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                    $('#preview-image-before-upload').attr('width', 250);
                    $('#preview-image-before-upload').attr('height', 250);
                    $("#preview-image-before-upload").addClass("avatar");
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
