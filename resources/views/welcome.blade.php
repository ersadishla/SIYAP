<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header main-content-boxed">
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" class="nav-link active">
                                <i class="fa fa-fw fa-home mr-5"></i>Beranda
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" class="nav-link">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Data Anak</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Donasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Lainnya</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">Inventaris</a>
                                    <a class="dropdown-item" href="">Pengajuan Anak Panti</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

            </header>
        </div>
    </body>
</html>
