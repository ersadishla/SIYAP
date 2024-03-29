<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">
            <header id="page-header">
                @include('layouts.navbar')
            </header>
            <main id="main-container">
                <div class="content">                        
                    <!-- Posts -->
                    <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="mb-50">
                            <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                <a class="img-link" href="/berita1">
                                    <img class="img-fluid" src="img/panti.jpg" alt="">
                                </a>
                            </div>
                            <h3 class="h4 font-w700 text-uppercase mb-5">Berita 1</h3>
                            <div class="text-muted mb-10">
                                <span class="mr-15">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>1 Januari, 2019
                                </span>
                                <a class="text-muted mr-15" href="#">
                                    <i class="fa fa-fw fa-user mr-5"></i>Admin
                                </a>
                            </div>
                            <p>Panti Asuhan atau Panti Sosial Asuhan Anak juga Lembaga Kesejahteraan Sosial Anak (LKSA) ialah lembaga sosial nirlaba yang menampung, mendidik dan memelihara anak-anak yatim, yatim piatu dan anak telantar...</p>
                            <a class="link-effect font-w600" href="/berita1">Baca Lebih..</a>
                        </div>
                        <div class="mb-50">
                            <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                <a class="img-link" href="/berita1">
                                    <img class="img-fluid" src="img/panti.jpg" alt="">
                                </a>
                            </div>
                            <h3 class="h4 font-w700 text-uppercase mb-5">Berita 1</h3>
                            <div class="text-muted mb-10">
                                <span class="mr-15">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>1 Januari, 2019
                                </span>
                                <a class="text-muted mr-15" href="#">
                                    <i class="fa fa-fw fa-user mr-5"></i>Admin
                                </a>
                            </div>
                            <p>Panti Asuhan atau Panti Sosial Asuhan Anak juga Lembaga Kesejahteraan Sosial Anak (LKSA) ialah lembaga sosial nirlaba yang menampung, mendidik dan memelihara anak-anak yatim, yatim piatu dan anak telantar...</p>
                            <a class="link-effect font-w600" href="/berita1">Baca Lebih..</a>
                        </div>
                        <div class="mb-50">
                            <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                <a class="img-link" href="/berita1">
                                    <img class="img-fluid" src="img/panti.jpg" alt="">
                                </a>
                            </div>
                            <h3 class="h4 font-w700 text-uppercase mb-5">Berita 1</h3>
                            <div class="text-muted mb-10">
                                <span class="mr-15">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>1 Januari, 2019
                                </span>
                                <a class="text-muted mr-15" href="#">
                                    <i class="fa fa-fw fa-user mr-5"></i>Admin
                                </a>
                            </div>
                            <p>Panti Asuhan atau Panti Sosial Asuhan Anak juga Lembaga Kesejahteraan Sosial Anak (LKSA) ialah lembaga sosial nirlaba yang menampung, mendidik dan memelihara anak-anak yatim, yatim piatu dan anak telantar...</p>
                            <a class="link-effect font-w600" href="/berita1">Baca Lebih..</a>
                        </div>
                        <div class="mb-50">
                            <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                <a class="img-link" href="/berita1">
                                    <img class="img-fluid" src="img/panti.jpg" alt="">
                                </a>
                            </div>
                            <h3 class="h4 font-w700 text-uppercase mb-5">Berita 1</h3>
                            <div class="text-muted mb-10">
                                <span class="mr-15">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>1 Januari, 2019
                                </span>
                                <a class="text-muted mr-15" href="#">
                                    <i class="fa fa-fw fa-user mr-5"></i>Admin
                                </a>
                            </div>
                            <p>Panti Asuhan atau Panti Sosial Asuhan Anak juga Lembaga Kesejahteraan Sosial Anak (LKSA) ialah lembaga sosial nirlaba yang menampung, mendidik dan memelihara anak-anak yatim, yatim piatu dan anak telantar...</p>
                            <a class="link-effect font-w600" href="/berita1">Baca Lebih..</a>
                        </div>
                        <nav class="clearfix push">
                            <a class="btn btn-secondary min-width-100 float-right" href="javascript:void(0)">
                                Next <i class="fa fa-arrow-right ml-5"></i>
                            </a>
                            <a class="btn btn-secondary min-width-100 float-left" href="javascript:void(0)">
                                <i class="fa fa-arrow-left mr-5"></i> Prev
                            </a>
                        </nav>
                        <hr class="d-xl-none">
                    </div>
                    <!-- END Posts -->
                    </div>  
                </div>
            </main>
            <!-- Footer -->
            <footer id="page-footer" class="opacity-0 bg-light">
                @include('layouts.footer')
            </footer>
            <!-- END Footer -->
        </div>
    </body>
</html>

