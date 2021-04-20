<header>
    <nav class="navbar navbar-expand-lg navbar-light py-2 fixed-top shadow-sm">
        <div class="container"> <button type="button" id="sidebarCollapse" class="navbar-toggler"><i class="ti-menu"></i></button>
			<a class="navbar-brand mb-0" href="{{ route('site.home') }}"><img src="{{ asset('assets/images/logo/'.setting('site.logo')) }}" alt="Logo PersonalityTalk"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<div class="header-right ml-auto">
					<ul class="navbar-nav n-log">
						<li class="nav-item"> <a class="btn btn-default btn-borderless" href="/">Beranda</a> </li>
						<li class="nav-item dropdown">
							<a class="btn btn-default btn-borderless dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="{{ Request::path() == '/' ? '#online-class' : route('site.program.index', ['category' => 'e-learning']) }}" class="dropdown-item" type="button">E-Learning</a>
								<a href="{{ Request::path() == '/' ? '#online-course' : route('site.program.index', ['category' => 'online-course']) }}" class="dropdown-item" type="button">Online Course</a>
								<a href="{{ Request::path() == '/' ? '#workshop' : route('site.program.index', ['category' => 'workshop']) }}" class="dropdown-item" type="button">Workshop</a>
								<a href="{{ Request::path() == '/' ? '#sertifikasi' : route('site.program.index', ['category' => 'sertifikasi']) }}" class="dropdown-item" type="button">Sertifikasi</a>
								<a href="{{ route('site.program.index', ['category' => 'seleksi-rekruitmen']) }}" class="dropdown-item" type="button">Seleksi & Rekrutmen</a>
								<a href="{{ route('site.program.index', ['category' => 'pelatihan-pendampingan']) }}" class="dropdown-item" type="button">Pelatihan & Pendampingan</a>
								<a href="{{ route('site.program.index', ['category' => 'konseling-psikoterapi']) }}" class="dropdown-item" type="button">Konseling & Psikoterapi</a>
							</div>
						</li>
						<li class="nav-item"> <a class="btn btn-default btn-borderless" href="https://karir.psikologanda.com/login" target="_blank">HRD</a> </li>
						<li class="nav-item"> <a class="btn btn-default btn-borderless" href="{{ route('site.psikolog.index') }}">Psikolog</a> </li>
						<li class="nav-item"> <a class="btn btn-default btn-borderless" href="{{ Request::path() == '/' ? '#career' : route('site.karir.index') }}">Karir</a> </li>
						<li class="nav-item"> <a class="btn btn-default ml-2 rounded px-5" href="https://tes.psikologanda.com/login" target="_blank">Tes&nbsp;Online</a> </li>
						@if(Auth::guest())
						<li class="nav-item"> <a class="btn btn-primary ml-2 rounded" href="{{ route('auth.login', ['ref' => $_GET['ref']]) }}">Masuk</a> </li>
						<li class="nav-item"> <a class="btn btn-secondary ml-2 rounded" href="{{ route('auth.register', ['ref' => $_GET['ref']]) }}">Daftar</a> </li>
						@else
						<li class="nav-item dropdown">
							<a class="nav-link account dropdown-toggle d-flex align-items-center" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
							  <img src="{{ image('assets/images/users/'.Auth::user()->foto, 'user') }}" alt="user" class="rounded-circle" width="31">
							</a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
							  <li><span class="dropdown-header">
							  	{{ Auth::user()->nama_user }}<br>
							  	<span class="font-weight-normal">Selamat Datang</span>
							  </span></li>
							  <li><hr class="dropdown-divider"></li>
							  <li><a class="dropdown-item" href="{{Auth::user()->is_admin==1? '/admin' : '/member'}}">Dashboard</a></li>
							  <li><a class="dropdown-item" href="{{Auth::user()->is_admin==1? '/admin/profil' : '/member/profil'}}">Profil</a></li>
							  @if(Auth::user()->is_admin==0)
							  <li><a class="dropdown-item" href="/member/afiliasi/cara-jualan">Afiliasi</a></li>
							  @endif
							  <li><a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Keluar</a></li>
								<form id="form-logout" method="post" action="{{Auth::user()->is_admin==1? '/admin/logout' : '/member/logout'}}">
							        {{ csrf_field() }}
							    </form>
							</ul>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
<div style="height: 4.8em;"></div>