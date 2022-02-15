@extends('template.main')

@section('title', 'Karir | ')

@section('content')

<section id="breadcrumb-container">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb p-3">
				<li class="breadcrumb-item"><a href="{{ route('site.home') }}" class="link-primary"><i class="bi bi-house-fill"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">Karir</li>
			</ol>
		</nav>
	</div>
</section>
<section class="container position-relative">
	<div class="rounded-2 bg-white p-3 shadow-sm">
		<div class="d-flex align-items-center justify-content-between">
			<div>
				<h1 class="m-0">Karir</h1>
				<p class="m-0">Temukan karir kamu dari mitra {{ setting('site.name') }}.</p>
			</div>
			<img style="width: 50px!important; transform: scaleX(-1);" src="{{('assets/images/category/book.svg')}}">
		</div>
	</div>
</section>
<section class="mt-3">
  <div class="container">
    <div class="info-text">
		<div class="row psikologanda-karir"></div>
    </div>
  </div>
</section>

@endsection

@section('js-extra')
<script>
	$.ajax({
		type: "get",
		url: "https://karir.psikologanda.com/api/vacancy",
		success: function(response) {
			var html = '';
			for(var i=0; i<response.length; i++) {
				html += '<div class="col-lg-3 col-md-6 mb-3">';
				html += '<div class="card h-100 border-0 shadow-sm rounded-2">';
				html += '<a href="/karir/' + response[i].url + '">';
				html += '<img class="card-img-top" src="' + response[i].image + '" alt="Gambar">';
				html += '</a>';
				html += '<div class="card-body">';
				html += '<a class="link-primary" href="/karir/' + response[i].url + '"><h5 class="card-title">' + response[i].title + '</h5></a>';
				html += response[i].status == 1 ? '<span class="badge bg-success">Aktif</span>' : '<span class="badge bg-danger">Tidak Aktif</span>';
				html += '<p class="card-text">' + response[i].excerpt + ' <a class="link-primary fw-bold" href="/karir/' + response[i].url + '">Selengkapnya <i class="bi bi-arrow-right"></i></a></p>';
				html += '</div>';
				html += '</div>';
				html += '</div>';
			}
			$(".psikologanda-karir").html(html);
		}
	})
</script>
@endsection