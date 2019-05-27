<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">
            <header id="page-header">
                @include('admin.navbar')
            </header>
            <main id="main-container">
                <div class="content">
                    <h3 class="h4 font-w700 text-uppercase mb-5">Data Berita</h3>
                    <a href="#" class="btn btn-info">Tambah</a>
                    <div class="block-header block-header-default">
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                                            <th>Nama</th>
                                            <th class="text-center" style="width: 100px;">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
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



