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
                <h4 class="content-heading">Form Pengajuan Anak Panti</h4>
                    <div class="col-xl-6">
                        <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/be_forms_validation.js) -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-material" action="#" method="post" novalidate="novalidate" onsubmit="return false;">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Nama anda..">
                                    <label for="val-username2">Nama Pengaju</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="contoh@contoh.com..">
                                    <label for="val-email2">Email Pengaju</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="08XXXXXXXXX..">
                                    <label for="val-username2">Telepon atau HP Pengaju</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Alamat anda..">
                                    <label for="val-username2">Alamat Pengaju</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Nama anak yang diajukan..">
                                    <label for="val-username2">Nama Anak</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Yatim/Piatu/Yatim Piatu..">
                                    <label for="val-username2">Status Orang tua Anak</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-material col-md-4">
                                        <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Tempat lahir...">
                                        <label for="val-username2">Tempat lahir Anak</label>
                                    </div>
                                    <div class="form-material col-md-8">
                                        <input type="date" class="form-control" id="val-username2" name="val-username2" placeholder="Yatim/Piatu/Yatim Piatu..">
                                        <label for="val-username2">Tanggal lahir Anak</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-material">
                                    <textarea class="form-control" id="contact3-msg" name="contact3-msg" rows="7"></textarea>
                                    <label for="contact3-msg">Catatan...</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <strong><p>Surat Kematian Orang Tua</p></strong>
                                <div class="form-material">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary btn-info" data-toggle="modal" data-target="#modal-fadein">Submit</button>
                            </div>
                        </form>
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



