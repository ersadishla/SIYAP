<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        <script>    
            $('#modal-fadein').on('hide', function() {
                document.location.href('/donasi');
            });
        </script>
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">
            <header id="page-header">
                @include('layouts.navbar')
            </header>
            <main id="main-container">
                <div class="content">
                    <center><h2 class="content-heading">MEDIA DONASI</h2></center>

                    <h3 class="content-heading">Pertama</h3>
                    <p class="block-content nice-copy">Dengan mentranfer ke rekening Bank di nomer rekening :
                    MANDIRI: 140-00-1596894-5 A/N. YAYASAN KUN FAYAKUN
                    (mohon untuk mencantumkan nama bila berkenan)</p>
                    <h3 class="content-heading">Kedua</h3>
                    <p class="block-content nice-copy">Dengan menyerahkan langsung kepada baik berupa uang atau barang ke alamat : Jl.Raya Pandugo Timur No. 7 - 8 Rungkut - Surabaya. Jawa Timur</p>
                    <h3 class="content-heading">Ketiga</h3>
                    <p class="block-content nice-copy">Bagi calon donatur yng masih dalam lingkup surabaya, kami siap untuk mengambil ke tempat / lokasi yang sekiranya masih bisa kami jangkau, mohon untuk menginformasikan alamat dan nomer telpon melalui email kami :donasi@yayasankunfayakun.com

                    Semoga apa yang akan Bapak / Ibu sumbangkan kepada yayasan kami akan senantiasa di ridhoi oleh allah SWT, akan membawa barokah bagi keluarga dan semua umat.  Semoga akan dilipat gandakan pahala dan rezekinya dari sumber yang tidak disangka sangka datangnya… AMINN.</p>

                    <h4 class="content-heading">Form Konfimasi Donasi</h4>
                    <div class="col-xl-6">
                        <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/be_forms_validation.js) -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-material" action="#" method="post" novalidate="novalidate" onsubmit="return false;">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Nama anda..">
                                    <label for="val-username2">Nama</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="contoh@contoh.com..">
                                    <label for="val-email2">Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="08XXXXXXXXX..">
                                    <label for="val-username2">Telepon atau HP</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Rp 120.000">
                                    <label for="val-username2">Jumlah Donasi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <textarea class="form-control" id="contact3-msg" name="contact3-msg" rows="7"></textarea>
                                    <label for="contact3-msg">Catatan...</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <strong><p>Bukti Donasi</p></strong>
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
        <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-success">
                            <h3 class="block-title">Terima kasih</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Terima kasih telah melakukan donasi :).</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/donasi" class="btn btn-alt-secondary" data-dismiss="modal">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>



