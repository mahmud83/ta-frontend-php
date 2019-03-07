<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    @guest
    @else
    <a class="navbar-brand" href="{{ url('/') }}">Dinas Pendidikan Provinsi Jawa Timur</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dana Alokasi Kegiatan">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#dak" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-book"></i>
                    <span class="nav-link-text">DAK</span>
                </a>
                <ul class="sidenav-second-level collapse" id="dak">
                    <li>
                        <a href="{{ action("DakController@sma") }}">SMA</a>
                    </li>
                    <li>
                        <a href="{{ action("DakController@smk") }}">SMK</a>
                    </li>
                    <li>
                        <a href="{{ action("DakController@pkplk") }}">PK-PLK</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bantan Operasional Sekolah">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#bos" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-institution"></i>
                    <span class="nav-link-text">BOS</span>
                </a>
                <ul class="sidenav-second-level collapse" id="bos">
                    <li>
                        <a href="{{ action("BosController@bl") }}">Belanja Langsung</a>
                    </li>
                    <li>
                        <a href="{{ action("BosController@btl") }}">Belanja Tidak Langsung</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ang. Penggunaan Belanja Daerah">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#apbd" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-briefcase"></i>
                    <span class="nav-link-text">APBD</span>
                </a>
                <ul class="sidenav-second-level collapse" id="apbd">
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#apbd-bl">Belanja Langsung</a>
                        <ul class="sidenav-third-level collapse" id="apbd-bl">
                            <li>
                                <a href="{{ action("ApbdBlController@sma") }}">SMA</a>
                            </li>
                            <li>
                                <a href="{{ action("ApbdBlController@smk") }}">SMK</a>
                            </li>
                            <li>
                                <a href="{{ action("ApbdBlController@pkplk") }}">PK-PLK</a>
                            </li>
                            <li>
                                <a href="{{ action("ApbdBlController@gtk") }}">GTK</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#apbd-btl">Belanja Tidak Langsung</a>
                        <ul class="sidenav-third-level collapse" id="apbd-btl">
                            <li>
                                <a href="{{ action("ApbdBtlController@hibah") }}">Hibah</a>
                            </li>
                            <li>
                                <a href="{{ action("ApbdBtlController@bkk") }}">BKK</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Prioritas">
                <!-- <a class="nav-link" href="{{ action("PrioritasController@index") }}">
                    <i class="fa fa-fw fa-sort"></i>
                    <span class="nav-link-text">Prioritas</span>
                </a> -->
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#prioritas" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-briefcase"></i>
                    <span class="nav-link-text">Prioritas</span>
                </a>
                <ul class="sidenav-second-level collapse" id="prioritas">
                    <li>
                        <a href="{{ action("PrioritasController@spp") }}">SPP</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@rekapSmkPengampu") }}">SMK Pengampu</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@rekapSeragam") }}">Seragam</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@rekapSarpras") }}">SARPRAS</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@kepengasuhan") }}">Kepengasuhan</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@honorNonPnstksdsmp") }}">Honorarium guru non PNS</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@honorKepalaGuruTkPaudNonPns") }}">Honorarium kepala/guru TK-PAUD  non PNS</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@honorGttPtt") }}">Honorarium GTT/PTT</a>
                    </li>
                    <li>
                        <a href="{{ action("PrioritasController@bosdaMadinDanBop") }}">BPPDGS BOP dan MADIN</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="rekap">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse"  href="#rekap" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-archive"></i>
                    <span class="nav-link-text">Rekap Anggaran</span>
                </a>
                <ul class="sidenav-second-level collapse" id="rekap">                
                    <li>
                        <a href="{{ action("RekapController@kabupaten") }}">Kabupaten</a>
                    </li>
                    <li>
                        <a href="{{ action("RekapController@madiun") }}">Madiun</a>
                    </li>
                    <li>
                        <a href="{{ action("RekapController@bojonegoro") }}">Bojonegoro</a>
                    </li>
                    <li>
                        <a href="{{ action("RekapController@malang") }}">Malang</a>
                    </li>
                    <li>
                        <a href="{{ action("RekapController@pamekasan") }}">Pamekasan</a>
                    </li>
                    <li>
                        <a href="{{ action("RekapController@jember") }}">Jember</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">           
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                    
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-sign-out"></i>{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    @endguest
</nav>
