<footer class="page-footer font-small pt-2">
    <div class="container text-center text-md-left">
        <div>
            <div>
                <div class="f-title">Tentang</div>
                <div class="d-flex">
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('site.halaman.detail', ['permalink' => 'tentang-kami']) }}">Tentang {{ setting('site.name') }}</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('site.karir.index') }}">Karir</a></li>
                            <li><a href="https://karir.psikologanda.com">Psikolog</a></li>
                            <li><a href="https://tes.psikologanda.com">Tes Online</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="f-title">Lainnya</div>
                <div class="d-flex">
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="#">Bantuan</a></li>
                            <li><a href="#">Yang Kamu Dapat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="container-scm">
				<!--
                <ul class="list-unstyled download-app text-center text-md-right">
                    <li><a href="#" target="_blank"><img src="https://www.qubisa.com/assets/img/ic-google-play.png" alt=""></a></li>
                    <li><a href="#!"><img src="https://www.qubisa.com/assets/img/ic-apps-store.png" alt=""></a></li>
                </ul>
				-->
                <ul class="list-unstyled social-media text-center text-md-right">
                    <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i data-feather="instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i data-feather="youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">{{ setting('site.name') }} © {{ date('Y') }}. All rights reserved.</div>
    </div>
</footer>