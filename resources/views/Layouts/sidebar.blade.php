<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{-- Pagu --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pagu') }}"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Pagu</span></a>
                </li>
                {{-- Profile --}}
                <li class="sidebar-item" id="profileButton">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('profil') }}"
                        aria-expanded="false"><i class="mdi mdi-account-network"></i><span
                            class="hide-menu">Profile</span></a>
                </li>
                {{-- Kelola User --}}
                @can('manage-users')
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                            data-bs-toggle="collapse" data-bs-target="#accordion-manage-user" aria-expanded="true"
                            aria-controls="accordion-manage-user"><i class="mdi mdi-shield-crown"></i><span
                                class="accordion-header">Halaman Admin</span></a>
                        <div id="accordion-manage-user" class="accordion-collapse collapse" data-bs-parent="#akordion1">
                            <div class="card my-1">
                                <div class="card-body ps-2 py-1">
                                    <ul class="list-akord">
                                        <li class="item-akord"><a href="{{ route('manage-user') }}"><i
                                                    class="mdi mdi-folder-account"></i> Kelola User </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                @endcan
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                        data-bs-toggle="collapse" data-bs-target="#accordion-vote" aria-expanded="true"
                        aria-controls="accordion-vote"><i class="mdi mdi-vote"></i><span
                            class="accordion-header">Pemilu</span></a>
                    <div id="accordion-vote" class="accordion-collapse collapse" data-bs-parent="#akordion1">
                        <div class="card my-1">
                            <div class="card-body ps-2 py-1">
                                <ul class="list-akord">
                                    <li class="item-akord"><a href="{{ route('coblos') }}"><i class="mdi mdi-vote"></i>
                                            Coblos digital</a></li>
                                    <li class="item-akord"><a href="{{ route('hasil') }}"><i
                                                class="mdi mdi-counter"></i> Hasil Pemilu</a></li>
                                    <li class="item-akord"><a href="#"><i class="mdi mdi-cog"></i> Kelola
                                            Pemilu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <form action="/auth/logout" method="post">
                        @csrf
                        <button class="btn tema-3" id="logoutButton">Logout!</button>
                    </form>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
