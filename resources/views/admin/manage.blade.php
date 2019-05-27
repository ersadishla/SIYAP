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
                            <!-- Intro Category -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="2">Kategori</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-bell fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="/admin/anak">Anak Panti</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="/admin/anak">Manage</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-bell fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="/admin/donasi">Donasi</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="/admin/donasi">Manage</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-bell fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="/admin/berita">Berita</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="/admin/berita">Manage</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Intro Category -->

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



