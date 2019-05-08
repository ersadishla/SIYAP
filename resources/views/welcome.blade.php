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
                        <a class="nav-link active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-home mr-5"></i>Beranda
                        </a>
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <a class="nav-link" href="javascript:void(0)">
                                Profil
                            </a>
                            <a class="nav-link" href="javascript:void(0)">
                                Data Anak
                            </a>
                            <a class="nav-link" href="javascript:void(0)">
                                Berita
                            </a>
                            <a class="nav-link" href="javascript:void(0)">
                                Kontak
                            </a>
                            <a class="nav-link" href="javascript:void(0)">
                                Donasi
                            </a>
                            <div>
                                
                            </div>
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                Lainnya
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Link 1</a>
                                    <a class="dropdown-item" href="#">Link 2</a>
                                    <a class="dropdown-item" href="#">Link 3</a>
                                </div>
                            </a>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

            </header>
        </div>
    </body>
</html>
