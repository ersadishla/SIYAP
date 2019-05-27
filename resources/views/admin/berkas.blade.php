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
                    <h3 class="h4 font-w700 text-uppercase mb-5">Berkas Pengajuan</h3>
                    <a href="#" class="btn btn-info">Tambah</a>
                    <div class="block-header block-header-default">
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                                            <th>Berkas</th>
                                            <th class="text-center" style="width: 100px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar16.jpg" alt="">
                                            </td>
                                            <td class="font-w600"><a href="#"> Berkas 1</a></td>
                                            <td class="text-center">
                                            <label class="css-control css-control-sm css-control-primary css-switch">
                                                <input type="checkbox" class="css-control-input" checked="">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar16.jpg" alt="">
                                            </td>
                                            <td class="font-w600"><a href="#"> Berkas 1</a></td>
                                            <td class="text-center">
                                            <label class="css-control css-control-sm css-control-primary css-switch">
                                                <input type="checkbox" class="css-control-input" checked="">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar16.jpg" alt="">
                                            </td>
                                            <td class="font-w600"><a href="#"> Berkas 1</a></td>
                                            <td class="text-center">
                                            <label class="css-control css-control-sm css-control-primary css-switch">
                                                <input type="checkbox" class="css-control-input" checked="">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                            </td>
                                        </tr>
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



