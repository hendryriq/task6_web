<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#">SI Sekolah</a>
            <div id="close-sidebar">
                {{-- <i class="fas fa-times"></i> --}}
            </div>
        </div>
        <div class="sidebar-header">
            <div class="user-pic">
                {{-- <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture"> --}}
            </div>
            <div class="user-info">
                <span class="user-role">
                    @if (Auth::check())
                        <span class="active"><span href="#" title="Dashboard">Hi, {{ Auth::user()->name }}</span>
                        </span>
                    @endif
                </span>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="sidebar-dropdown">
                    <a href="/">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="/students">
                        <span>Students</span>
                    </a>

                </li>
                <li class="sidebar-dropdown">
                    <a href="/teacher">
                        <span>Teacher</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="/class">
                        <span>Class</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                  <a href="/extracurricular">
                      <span>Extracurricular</span>
                  </a>
              </li>

            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->

</nav>
