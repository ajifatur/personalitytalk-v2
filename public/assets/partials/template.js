// navbar
//
$(function () {
    var bar = '';
    bar += '<header>';
        bar += '<nav class="navbar navbar-expand-lg navbar-light py-2 fixed-top shadow-sm">';
            bar += '<div class="container">'; bar += '<button type="button" id="sidebarCollapse" class="navbar-toggler">'; bar += '<i class="ti-menu">'; bar += '</i>'; bar += '</button>';
                bar += '<a class="navbar-brand mb-0" href="https://psikologanda.com"><img src="https://psikologanda.com/assets/images/logo/1617422635-logo.png" alt="Logo PersonalityTalk">'; bar += '</a>';
                bar += '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';  bar += '<span class="navbar-toggler-icon">'; bar += '</span>'; bar += '</button>';
                bar += '<div class="collapse navbar-collapse" id="navbarResponsive">';
                    bar += '<div class="header-right ml-auto">';
                       bar += ' <ul class="navbar-nav n-log">';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-default btn-borderless" href="https://psikologanda.com">Beranda'; bar += '</a>';  bar += '</li>';
                            bar += '<li class="nav-item dropdown">';
                                bar += '<a class="btn btn-default btn-borderless dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program</a>';
                                bar += '<div class="dropdown-menu dropdown-menu-right">';
                                    bar += '<a href="https://psikologanda.com/online-class" class="dropdown-item" type="button">Online Class'; bar += '</a>';
                                    bar += '<a href="https://psikologanda.com/online-course" class="dropdown-item" type="button">Online Course';  bar += '</a>';
                                    bar += '<a href="https://psikologanda.com/workshop" class="dropdown-item" type="button">Workshop'; bar += '</a>';
                                    bar += '<a href="https://psikologanda.com/sertifikasi" class="dropdown-item" type="button">Sertifikasi';  bar += '</a>';
                                    bar += '<a href="https://psikologanda.com/kategori/seleksi-rekruitmen" class="dropdown-item" type="button">Seleksi & Rekrutmen';  bar += '</a>';
                                    bar += '<a href="https://psikologanda.com/kategori/pelatihan-pendampingan" class="dropdown-item" type="button">Pelatihan & Pendampingan';  bar += '</a>';
                                    bar += '<a href="https://psikologanda.com/kategori/konseling-psikoterapi" class="dropdown-item" type="button">Konseling & Psikoterapi';  bar += '</a>';
                                bar += '</div>';
                            bar += '</li>';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-default btn-borderless" href="https://karir.psikologanda.com/login" target="_blank">HRD</a>'; bar += '</li>';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-default btn-borderless" href="https://psikologanda.com/psikolog">Psikolog</a>'; bar += '</li>';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-default btn-borderless" href="https://psikologanda.com/karir">Karir</a>'; bar += '</li>';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-default ml-2 rounded px-5" href="https://tes.psikologanda.com/login" target="_blank">Tes&nbsp;Online</a>'; bar += '</li>';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-primary ml-2 rounded" href="https://psikologanda.com/login">Masuk</a>'; bar += '</li>';
                            bar += '<li class="nav-item">';  bar += '<a class="btn btn-secondary ml-2 rounded" href="https://psikologanda.com/register">Daftar</a>'; bar += '</li>';
                        bar += '</ul>';
                    bar += '</div>';
                bar += '</div>';
            bar += '</div>';
        bar += '</nav>';
    bar += '</header>';
    bar += '<div style="height: 4.5em;">';
    bar += '</div>';
 
    $("#navbar-main").html(bar);
 
});

// sidebar
$(function () {
    var bar = '';

    bar += '<nav id="sidebar" class="sidebar-wrapper">';
        bar += '<div style="height: 4.2em;"></div>';
        bar += '<ul class="list-unstyled sidebar-menu">';
            bar += '<li class="menu-label"> <a href="https://psikologanda.com">Beranda</a> </li>';
            bar += '<li class="menu-label sidebar-dropdown"> <a href="#"> <span>Program</span> <i class="drop-icon ti-angle-right"></i> </a>';
                bar += '<div class="sidebar-submenu">';
                    bar += '<ul>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/online-class">Online Class</a> </li>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/online-course">Online Course</a> </li>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/workshop">Workshop</a> </li>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/sertifikasi">Sertifikasi</a> </li>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/kategori/seleksi-rekruitmen">Seleksi & Rekrutmen</a> </li>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/kategori/pelatihan-pendampingan">Pelatihan & Pendampingan</a> </li>';
                        bar += '<li class="menu-link"> <a href="https://psikologanda.com/kategori/konseling-psikoterapi">Konseling & Psikoterapi</a> </li>';
                    bar += '</ul>';
                bar += '</div>';
            bar += '</li>';
            bar += '<li class="menu-label"> <a href="https://karir.psikologanda.com" target="_blank">HRD</a> </li>';
            bar += '<li class="menu-label"> <a href="https://psikologanda.com/psikolog">Psikolog</a> </li>';
            bar += '<li class="menu-label"> <a href="https://psikologanda.com/karir">Karir</a> </li>';
            bar += '<li class="menu-label"> <a href="https://tes.psikologanda.com" target="_blank">Tes Online</a> </li>';
            bar += '<li class="menu-label"> <a href="https://psikologanda.com/login">Masuk</a> </li>';
            bar += '<li class="menu-label"> <a href="https://psikologanda.com/register">Daftar</a> </li>';
        bar += '</ul>';
    bar += '</nav>';

    $("#sidebar-main").html(bar);
 
});


//footer
$(function () {
    var bar = '';

    bar += '<footer class="page-footer font-small pt-2">';
        bar += '<div class="container text-center text-md-left">';
            bar += '<div>';
                bar += '<div>';
                    bar += '<div class="f-title">Tentang</div>';
                    bar += '<div class="d-flex">';
                        bar += '<div>';
                            bar += '<ul class="list-unstyled">';
                                bar += '<li><a href="#">Tentang PersonalityTalk</a></li>';
                                bar += '<li><a href="#">Kontak Kami</a></li>';
                            bar += '</ul>';
                        bar += '</div>';
                        bar += '<div>';
                            bar += '<ul class="list-unstyled">';
                                bar += '<li><a href="/karir">Karir</a></li>';
                                bar += '<li><a href="https://karir.psikologanda.com">Psikolog</a></li>';
                                bar += '<li><a href="https://tes.psikologanda.com">Tes Online</a></li>';
                            bar += '</ul>';
                        bar += '</div>';
                    bar += '</div>';
                bar += '</div>';
                bar += '<div>';
                    bar += '<div class="f-title">Lainnya</div>';
                    bar += '<div class="d-flex">';
                        bar += '<div>';
                            bar += '<ul class="list-unstyled">';
                                bar += '<li><a href="#">Syarat & Ketentuan</a></li>';
                                bar += '<li><a href="#">Kebijakan Privasi</a></li>';
                            bar += '</ul>';
                        bar += '</div>';
                        bar += '<div>';
                            bar += '<ul class="list-unstyled">';
                                bar += '<li><a href="#">Bantuan</a></li>';
                                bar += '<li><a href="/benefit">Yang Kamu Dapat</a></li>';
                            bar += '</ul>';
                        bar += '</div>';
                    bar += '</div>';
                bar += '</div>';
                bar += '<div id="container-scm">';
                    bar += '<ul class="list-unstyled social-media text-center text-md-right">';
                        bar += '<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>';
                        bar += '<li><a href="#" target="_blank"><i data-feather="instagram"></i></a></li>';
                        bar += '<li><a href="#" target="_blank"><i data-feather="youtube"></i></a></li>';
                    bar += '</ul>';
                bar += '</div>';
            bar += '</div>';
            bar += '<div class="footer-copyright">PersonalityTalk © 2020. All rights reserved.</div>';
        bar += '</div>';
    bar += '</footer>';
 
    $("#footer-main").html(bar);
 
});


//============================================================================
$(".preloader").fadeOut();

// Button toggle password
$(document).on("click", "#btn-toggle-password", function(e){
    e.preventDefault();
    if(!$(this).hasClass("show")){
        $("input[name=password]").attr("type","text");
        $(this).find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
        $(this).addClass("show");
    }
    else{
        $("input[name=password]").attr("type","password");
        $(this).find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
        $(this).removeClass("show");
    }
});