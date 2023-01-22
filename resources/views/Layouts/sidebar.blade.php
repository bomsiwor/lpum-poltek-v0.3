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
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ route("pagu") }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Pagu</span></a
                >
              </li>
              {{-- Coblosan --}}
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ route('coblos') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-all"></i
                  ><span class="hide-menu">Coblos Digital</span></a
                >
              </li>
              {{-- Hasil --}}
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ route('hasil') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-face"></i
                  ><span class="hide-menu">Hasil Pemilu</span></a
                >
              </li>
              {{-- Profile --}}
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ route('profil') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-network"></i
                  ><span class="hide-menu">Profile</span></a
                >
              </li>
              {{-- Kelola User --}}
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ route('manage-user') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-file"></i
                  ><span class="hide-menu">Kelola User</span></a
                >
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