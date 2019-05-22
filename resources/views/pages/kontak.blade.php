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
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <div class="block-content">
                            <h3 class="h2 block-title">Kritik dan Saran</h3>
                        </div>
                        <div class="block-content">
                            <p>
                            Untuk Informasi & Layanan, silahkan menghubungi kami di kontak berikut, Kirimkan pesan, saran dan komentar kepada kami :
                            </p>
                        </div>
                        <!-- Material (floating) Contact -->
                        <div class="block block-themed">
                            <div class="block-options float-right">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>



                            <div class="block-content">
                                <form class="js-validation-material" action="#" method="post" onsubmit="return false;" novalidate="novalidate">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="contact3-firstname" name="contact3-firstname">
                                                <label for="contact3-firstname">Nama</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating input-group">
                                                <input type="email" class="form-control" id="contact3-email" name="contact3-email">
                                                <label for="contact3-email">Email</label>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="contact3-firstname" name="contact3-firstname">
                                                <label for="contact3-firstname">Judul</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="contact3-msg" name="contact3-msg" rows="7"></textarea>
                                                <label for="contact3-msg">Pesan</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-alt-info">
                                                <i class="fa fa-send mr-5"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Material (floating) Contact -->
                        <div class="col-xl-2"></div>
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



