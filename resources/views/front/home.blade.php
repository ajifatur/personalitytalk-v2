@extends('template.main')

@section('content')

<!-- Slider -->
<section id="main-image">
	<div class="container px-sm-0">
		<div class="sl-main-image">
			<div>
				<a href="javascript:void(0)">
					<div class="w-100">
						<div class="position-relative">
							<img src="{{ asset('assets/images/slider/SLIDER 1.jpg') }}" alt="Slider">
						</div>
					</div>
				</a>
			</div>
			<div>
				<a href="/register">
					<div class="w-100">
						<div class="position-relative">
							<img src="{{ asset('assets/images/slider/SLIDER 2.jpg') }}" alt="Slider">
						</div>
					</div>
				</a>
			</div>
			<div>
				<a href="/register">
					<div class="w-100">
						<div class="position-relative">
							<img src="{{ asset('assets/images/slider/SLIDER 3.jpg') }}" alt="Slider">
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Slider -->

<!-- Kategori -->
<section id="category">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'e-learning']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/distance-education.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">E-Learning<br>&nbsp;</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'online-course']) }}" >
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/call.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Online Course<br>&nbsp;</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'workshop']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/audio-book.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Workshop<br>&nbsp;</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'sertifikasi']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/course.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Sertifikasi<br>&nbsp;</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.karir.index') }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/blended-learning.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Karir<br>&nbsp;</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'asesmen']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/daily-tasks.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Asesmen<br>&nbsp;</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'seleksi-rekruitmen']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/checkpoint.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Seleksi &<br>Rekrutmen</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'pelatihan-pendampingan']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/passive-candidate.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Pelatihan &<br>Pendampingan</p>
					</div>
				</a>
			</div>
			<div class="col mb-3">
				<a href="{{ route('site.program.index', ['category' => 'konseling-psikoterapi']) }}">
					<div class="m-auto border px-4 py-3 rounded-2" style="width: fit-content">
						<img src="{{asset('assets/images/category/cloud-connection.svg')}}" alt="category">
					</div>
					<div class="text-center">
						<p class="font-weight-bold mb-0 mt-2">Konseling &<br>Psikoterapi</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Kategori -->

<!-- Deskripsi -->
<section id="section-profile">
	<div class="container h-100 section-block">
		<div class="row h-100">
			<div class="col-12 my-auto">
				<div class="media d-block d-lg-flex text-center text-lg-left">
					<div class="p-3 rounded-2 bg-theme-1 mr-3 mb-3 mb-lg-0">
						<img width="100" src="{{asset('assets/images/logo/1598935068-icon.png')}}" style="filter: brightness(0) invert(1);">
					</div>
					<div class="media-body">
						<h2 class="title">Apa itu PersonalityTalk?</h2>
						<p class="m-0">PersonalityTalk adalah lembaga yang bergerak di bidang jasa training, coaching, dan consulting dalam bidang psikologi.<br>Berdiri sejak tahun 2014, Alhamdulillah PersonalityTalk telah membantu banyak orang dalam menyelesaikan permasalahan tentang kehidupan keluarga, karir, dan bisnis. Dengan para mentor yang berpengalaman di bidangnya menjadikan PersonalityTalk dipercaya menjadi media tempat belajar para Mahasiswa Psikologi, Praktisi SDM, Psikolog, Guru, Dosen, Praktisi NLP, Hypnoterapis, juga para Orang Tua yang ingin mendapatkan pembelajaran baik teori maupun praktik.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Deskripsi -->

<!-- E-Learning -->
<section id="e-learning">
	<div class="container section-block">
		<div class="row pl-0">
			<div class="col-12 col-lg-3 d-flex" data-aos="fade-right">
				<div class="my-auto">
					<h2 class="title">E-Learning</h2>
					<div class="desc">Tambah pengetahuan kamu dengan belajar ilmu psikologi melalu E-Learning dari PersonalityTalk.</div> <a class="view-more link-primary" href="{{ route('site.program.index', ['category' => 'e-learning']) }}">Lihat semua <i data-feather="chevron-right"></i></a>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="py-4">
					<div class="sl-course sl-card card-view2" data-count="">
						@foreach($program_elearning as $data)
						<div>
							<div class="card-item">
								<a href="/program/{{ $data->program_permalink }}">
									<div class="position-relative">
										<div class="img-wrapper">
											<img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="img-fluid" alt="">
										</div>
										<div class="container-category">
										</div>
									</div>
								</a>
								<div class="p-2">
									<a class="title" href="/program/{{ $data->program_permalink }}">
										<p>{{ $data->program_title }}</p>
									</a>
									<p class="d-none d-md-block">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} <br><a class="link-primary" style="display: inline;" href="/program/{{ $data->program_permalink }}">Selengkapnya></a></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /E-Learning -->

<section id="online-course">
	<div class="container section-block">
		<div class="row pl-0">
			<div class="col-12 col-lg-3 d-flex" data-aos="fade-right">
				<div class="my-auto">
					<h2 class="title">Online Course</h2>
					<div class="desc">Tingkatkan keterampilan profesional kamu dalam bidang psikologi dan SDM dengan mengikuti E-Course.</div> <a class="view-more link-primary" href="{{ route('site.program.index', ['category' => 'online-course']) }}">Lihat semua <i data-feather="chevron-right"></i></a>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="py-4">
					<!-- <div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div> -->
					<div class="sl-course sl-card card-view2" data-count="">
						@foreach($program_course as $data)
						<div>
							<div class="card-item">
								<a href="/program/{{ $data->program_permalink }}">
									<div class="position-relative">
										<div class="img-wrapper">
											<img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="img-fluid" alt="">
										</div>
										<div class="container-category">
										</div>
									</div>
								</a>
								<div class="p-2">
									<a class="title" href="/program/{{ $data->program_permalink }}">
										<p>{{ $data->program_title }}</p>
									</a>
									<p class="d-none d-md-block">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} <br><a class="link-primary" style="display: inline;" href="/program/{{ $data->program_permalink }}">Selengkapnya></a></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
<!-- 				<div class="text-center py-4">
					<div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<section id="workshop">
	<div class="container section-block">
		<div class="row pl-0">
			<div class="col-12 col-lg-3 d-flex" data-aos="fade-right">
				<div class="my-auto">
					<h2 class="title">Workshop</h2>
					<div class="desc">Tingkatkan keterampilan praktis kamu dengan mengikuti berbagai workshop yang diselenggarakan oleh PersonalityTalk.</div> <a class="view-more link-primary" href="{{ route('site.program.index', ['category' => 'workshop']) }}">Lihat semua <i data-feather="chevron-right"></i></a>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="py-4">
					<!-- <div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div> -->
					<div class="sl-course sl-card card-view2" data-count="">
						@foreach($program_workshop as $data)
						<div>
							<div class="card-item">
								<a href="/program/{{ $data->program_permalink }}">
									<div class="position-relative">
										<div class="img-wrapper">
											<img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="img-fluid" alt="">
										</div>
										<div class="container-category">
										</div>
									</div>
								</a>
								<div class="p-2">
									<a class="title" href="/program/{{ $data->program_permalink }}">
										<p>{{ $data->program_title }}</p>
									</a>
									<p class="d-none d-md-block">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} <br><a class="link-primary" style="display: inline;" href="/program/{{ $data->program_permalink }}">Selengkapnya></a></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
<!-- 				<div class="text-center py-4">
					<div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<section id="sertifikasi">
	<div class="container section-block">
		<div class="row pl-0">
			<div class="col-12 col-lg-3 d-flex" data-aos="fade-right">
				<div class="my-auto">
					<h2 class="title">Sertifikasi</h2>
					<div class="desc">Persiapkan diri kamu untuk memenuhi kebutuhan sertifikasi bidang psikologi. Ikuti kursusnya sekarang.</div> <a class="view-more link-primary" href="{{ route('site.program.index', ['category' => 'sertifikasi']) }}">Lihat semua <i data-feather="chevron-right"></i></a>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="py-4">
					<!-- <div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div> -->
					<div class="sl-course sl-card card-view2" data-count="">
						@foreach($program_sertifikasi as $data)
						<div>
							<div class="card-item">
								<a href="/program/{{ $data->program_permalink }}">
									<div class="position-relative">
										<div class="img-wrapper">
											<img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="img-fluid" alt="">
										</div>
										<div class="container-category">
										</div>
									</div>
								</a>
								<div class="p-2">
									<a class="title" href="/program/{{ $data->program_permalink }}">
										<p>{{ $data->program_title }}</p>
									</a>
									<p class="d-none d-md-block">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} <br><a class="link-primary" style="display: inline;" href="/program/{{ $data->program_permalink }}">Selengkapnya></a></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
<!-- 				<div class="text-center py-4">
					<div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<section id="career">
	<div class="container section-block">
		<div class="row pl-0">
			<div class="col-12 col-lg-3 d-flex" data-aos="fade-right">
				<div class="my-auto">
					<h2 class="title">Karir</h2>
					<div class="desc">Temukan karir kamu dari mitra PersonalityTalk.</div> <a class="view-more link-primary" href="/karir">Lihat semua <i data-feather="chevron-right"></i></a>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="py-4">
					<!-- <div class="spinner-border mx-auto" role="status"><span class="sr-only">Loading...</span></div> -->
					<div class="sl-course sl-card card-view2" data-count="">
						@foreach($karir as $data)
						<div>
							<div class="card-item">
								<a href="/karir/{{ $data->karir_permalink }}">
									<div class="position-relative">
										<div class="img-wrapper">
											<img src="{{ image('assets/images/karir/'.$data->karir_gambar, 'karir') }}" class="img-fluid" alt="">
										</div>
										<div class="container-category">
										</div>
									</div>
								</a>
								<div class="p-2">
									<a class="title" href="/karir/{{ $data->karir_permalink }}">
										<p>{{ $data->karir_title }}</p>
									</a>
									<p class="d-none d-md-block">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} <br><a class="link-primary" style="display: inline;" href="/karir/{{ $data->karir_permalink }}">Selengkapnya></a></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="simple-profile">
	<div class="container h-100 section-block">
		<div class="row h-100">
			<div class="col-12 my-auto">
				<div class="media d-block text-center text-lg-left d-lg-flex justify-content-between align-items-center">
					<img width="80" class="mr-3 mb-3 mb-lg-0" src="{{asset('assets/images/category/meditation.svg')}}">
					<div class="text-center">Apakah Anda Praktisi SDM, Psikolog, Guru, Dosen, Praktisi NLP, Hypnoterapis, atau Mahasiswa Psikologi?<br>PersonalityTalk adalah solusi alternatif pembelajaran praktis seputar ilmu psikologi dan terapannya<br> untuk membantu Anda dalam hal pengembangan diri, komunikasi, karir, dan keluarga.
					</div>
					<a href="/register" class="btn btn-primary mt-3 rounded-1">Daftar Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="partner">
	<div class="container h-100 section-block">
		<div class="row h-100">
			<div class="col-12 text-center my-auto">
				<h2 class="title my-3">Mitra</h2>
				<div id="mitra">
					@foreach($mitra as $data)
					<div class="card text-center rounded-qbs shadow-qbs mx-2 border-0 my-2">
						<img src="{{ asset('assets/images/mitra/'.$data->logo_mitra) }}" class="card-img-top m-auto py-3" style="max-height: 100px!important; width: auto!important;">
						<div class="card-footer bg-transparent mx-4 pb-0">
							<p class="font-weight-bold">{{ $data->nama_mitra }}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<section id="see-more">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 text-center my-auto">
				<img width="80" class="mb-3" src="{{asset('assets/images/category/woman.svg')}}">
				<h2 class="title">Mulai Belajar Sekarang</h2>
				<div class="desc">Tunggu apa lagi, mulailah daftar disini, tontonlah video-video untuk meningkatkan pengetahuan kamu, dan baca juga e-book gratis di dalamnya.</div> <a href="/register" class="btn btn-primary mt-3 rounded-1">Daftar Sekarang</a></div>
		</div>
	</div>
</section>
@endsection

@section('js-extra')

<script>

$('.sl-main-image').slick({
	dots: !0,
	arrows: !0,
	centerMode: !0,
	centerPadding: "170px",
	slidesToShow: 1,
	autoplay: !0,
	autoplaySpeed: 5e3,
	responsive: [
	    { breakpoint: 992, settings: { centerPadding: "68px" } },
	    { breakpoint: 767, settings: { centerPadding: "30px", arrows: !0, centerMode: !1 } },
	]
});

$('.sl-course').slick({
    dots: !1,
    arrows: !0,
    infinite: !1,
	slidesToShow: 3,
	slidesToScroll: 3,
	responsive: [
	    { breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 2 } },
	    { breakpoint: 768, settings: { infinite: 0, slidesToShow: 1, slidesToScroll: 1, arrows: !1 } },
	]
});
	
$('#mitra').slick({
	slidesToShow: 4,
	arrows: !1,
	slidesToScroll: 4,
	autoplay: true,
	autoplaySpeed: 2000,
	responsive: [
	    { breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 2 } },
	    { breakpoint: 768, settings: { infinite: !0, slidesToShow: 1, slidesToScroll: 1, arrows: !1 } },
	]
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js" integrity="sha512-zMfrMAZYAlNClPKjN+JMuslK/B6sPM09BGvrWlW+cymmPmsUT1xJF3P4kxI3lOh9zypakSgWaTpY6vDJY/3Dig==" crossorigin="anonymous"></script>
<script type="text/javascript">
$(".nicescroll-box").niceScroll(".wrap");  // hwscroll!!
</script>
@endsection

@section('css-extra')
<style type="text/css">
	body{background-color: var(--white)}
	.wrapper {margin-bottom: 2.1875rem;}
	#popular-category > .container > .row > div a {background-color: #fb8312!important;}
	#popular-category > .container > .row > div a:hover {background-color: #c16c1c!important;}
	@media (max-width: 991px) {
		#main-image .sl-main-image .slick-prev {left: 10px!important;}
		#main-image .sl-main-image .slick-next {right: 10px!important;}
	}
	#main-image, #section-profile, #online-class, #online-course, #workshop, #sertifikasi, #career, #partner,  #e-learning{margin-top: 2.1875rem;}
	#main-image .sl-main-image .slick-dots li.slick-active button::before {color: #fb8312!important;}
	.slick-slider .slick-arrow.slick-prev, .slick-slider .slick-arrow.slick-next {background-color: #fb8312!important;}
	.slick-slider .slick-arrow.slick-prev:hover, .slick-slider .slick-arrow.slick-next:hover {background-color: #c16c1c!important;}
	.nav-tabs .nav-item a.active, .nav-tabs .nav-item a:hover {color: #fb8312!important; border-bottom: 3px solid #fb8312;}
	#special-program .view-more, #popular-webinar .view-more, #skill-course .view-more, #discount-course .view-more, #popular-partner .view-more, #certification-advisor .view-more, #popular-certification .view-more, #popular-course .view-more, #popular-microlearning .view-more {color: #fb8312!important;}
	#special-program .view-more:hover, #popular-webinar .view-more:hover, #skill-course .view-more:hover, #discount-course .view-more:hover, #popular-partner .view-more:hover, #certification-advisor .view-more:hover, #popular-certification .view-more:hover, #popular-course .view-more:hover, #popular-microlearning .view-more:hover {text-decoration: underline;}
	#see-more {padding: 80px 0;}
	.shadow-qbs{box-shadow: 0px 2px 3px rgb(0 0 0 / 15%); -webkit-box-shadow: 0px 2px 3px rgb(0 0 0 / 15%);}
	.rounded-qbs{border-radius: 10px;}
	.sl-main-image, .sl-course, #mitra{display: none}
	.sl-course.slick-initialized,
	.sl-main-image.slick-initialized,
	#mitra.slick-initialized{display: block}
	@media (max-width: 767.98px) { 

	}
</style>
@endsection