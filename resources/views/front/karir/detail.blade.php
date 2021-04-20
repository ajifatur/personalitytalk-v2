@extends('template.main')

@section('title', $karir->karir_title.' - Karir | ')

@section('content')

<section id="breadcrumb-container">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('site.home') }}"><i data-feather="home"></i></a></li>
				<li class="breadcrumb-item"><a href="{{ route('site.karir.index') }}">Karir</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $karir->karir_title }}</li>
			</ol>
		</nav>
	</div>
</section>
<section>
	<div class="bg-theme-2">
		<div class="container pt-0 pt-md-4 pb-4 mb-4 mb-lg-0">
		  <div class="row">
		    <div class="col-lg-8 order-2 order-lg-1 text-white">
		      <span class="badge bg-theme-1 mb-3 p-2">Karir</span>
		      <h2 class="mb-3">{{ $karir->karir_title }}</h2>
		      <p class="m-0">Oleh : {{ $karir->nama_user }}<br> Terakhir diperbarui {{ generate_date($karir->karir_at) }}</p>
		    </div>
		    <div class="col-lg-4 order-1 order-lg-2 stick sticky-top px-0 px-md-3">
		      <div class="sticky-sidebar">
		        <div class="card rounded-2 border-0 shadow-sm mb-3 mb-lg-0">
		          <img class="card-img-top" src="{{ image('assets/images/karir/'.$karir->karir_gambar, 'karir') }}">
		          <div class="card-body d-none d-lg-block">
		            <h5 class="mb-3">{{ $karir->karir_title }}</h5>
		            <p class="m-0">Oleh : {{ $karir->nama_user }}<br> Terakhir diperbarui {{ generate_date($karir->karir_at) }}</p>
		            <span class="badge bg-theme-1 mt-3 p-2 text-white">Karir</span>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</section>
<section class="my-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="heading">
          <h5 class="font-weight-bold">Ringkasan</h5>
        </div>
        <div class="card bg-light rounded-2 border-0 shadow-sm px-3">
          <div class="row ql-snow">
            <div class="ql-editor">{!! html_entity_decode($karir->konten) !!}</div>
          </div>
        </div>
        <a class="btn btn-primary" href="{{ $karir->karir_url }}" target="_blank">Daftar Karir</a>
      </div>
  </div>
</section>

@endsection

@section('css-extra')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style type="text/css">
  /* Quill */
  .ql-editor h2 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor h3 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor ol {padding-left: 30px!important;}
  .ql-editor ol li {font-size: 14px!important; color: #74757f!important; padding-left: 5px!important;}
  .card-img-top{border-radius: 0}
  @media (min-width: 768px) {
    .card-img-top{border-radius: 1em}
  }
  @media (min-width: 992px) {
    .card-img-top{border-radius: 1em 1em 0 0}
  }
</style>

@endsection