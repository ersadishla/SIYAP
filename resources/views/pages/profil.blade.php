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
                    <center><h2 class="content-heading">MUKADIMAH</h2></center>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid options-item" src="img/profil.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                        <h4 class="block-content font-w700">ASSALAMUALAIKUM WR WB</h4>
                        <p class="block-content nice-copy text-justify">
                        Tiada kata yang lebih pantas untuk kita ucapkan selain memanjatkan puji dan syukur kehadirat Allah SWT yang telah melimpahkan kepada kita segala rohmat, taufiq, dan hidayahnya. Sehingga kita masih dapat menikmati anugrah terindahnya yang ada dimuka bumi ini.
                        </p>
                        <p class="block-content nice-copy text-justify">
                        Solawat serta salam mudah-mudahan tetap tercurahkan kepada junjungan Nabi besar kita Muhammad SAW yang telah menunjukkan kita dari jalan yang gelap gulita menuju jalan yang terang benderang.
                        </p>
                        <p class="block-content nice-copy text-justify">
                        Selanjutnya saya sampaikan terima kasih yang sebesar-besarnya atas dukungan juga kepercayaan bapak/ibu juga saudara-saudara yang telah memberikan kesempatan kepada kami untuk mengemban tugas yang mungkin tidaklah ringan . Namun dengan dorongan dan motivasi yang telah ibu/bapak juga rekan-rekan berikan kepada saya. InsyaAlloh saya tidak akan menyia-nyiakan kesempatan yang telah ibu/bapak berikan kepada saya ini.
                        </p>
                        </div>
                    </div>
                    <center><h2 class="content-heading">PROFIL</h2></center>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid options-item" src="img/logo.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="block-content">
                            <!-- class="block-content nice-copy" -->
                                <table class="table table-borderless table-vcenter">
                                    <tr>
                                        <td >Nama</td>
                                        <td >Yayasan Panti Asuhan Kun Fayakun</td>
                                    </tr>
                                    <tr>
                                        <td >Tanggal Berdiri</td>
                                        <td >12 Agustus 2015</td>
                                    </tr>
                                    <tr>
                                        <td >Alamat</td>
                                        <td >Jalan Raya Pandugo Timur kav 07-08, Surabaya, Wonorejo, Kec. Rungkut, Jawa Timur, 60297</td>
                                    </tr>
                                    <tr>
                                        <td >Nomor HP</td>
                                        <td >081-3333-13-999 atau 085-1029-13-999</td>
                                    </tr>
                                    <tr>
                                        <td >Telepon</td>
                                        <td >(031)8720331</td>
                                    </tr>
                                    <tr>
                                        <td >Notaris</td>
                                        <td >Wibowo Ibo Sarwono, SH</td>
                                    </tr>
                                    <tr>
                                        <td >NPWP</td>
                                        <td >73.716.382.4-615.000</td>
                                    </tr>
                                </table>
                            </div>
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



