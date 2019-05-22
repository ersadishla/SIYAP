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
                <div class="content content-full nice-copy-story">
                    <div class="row justify-content-center py-30 text-justify">
                        <img class="img-fluid" src="img/panti.jpg" alt="">
                        <div class="col-lg-8">
                            <h3>Definisi</h3>
                            <p>Beberapa pengertian Panti asuhan di antaranya: Menurut Depsos RI (2004: 4), Panti Sosial Asuhan anak adalah suatu lembaga usaha kesejahteraan sosial yang mempunyai tanggung jawab untuk memberikan pelayanan kesejahteraan sosial pada anak telantar dengan melaksanakan penyantunan dan pengentasan anak telantar, memberikan pelayanan pengganti orang tua/wali anak dalam memenuhi kebutuhan fisik, mental dan sosial kepada anak asuh sehingga memperoleh kesempatan yang luas,tepat dan memadai bagi pengembangan kepribadianya sesuai dengan yang diharapkan sebagai bagian dari generasi penerus cita- cita bangsa dan sebagai insan yang akan turut serta aktif dalam bidang pembangunan nasional‟.</p>
                            <h3>Di Indonesia</h3>
                            <p>Dasar hukum perlindungan anak di Indonesia tercantum dalam UU Perlindungan Anak, Pasal 20, dinyatakan bahwa “Negara, Pemerintah, Masyarakat, Keluarga dan Orang Tua berkewajiban dan bertanggung jawab terhadap penyelenggaraan Perlindungan Anak”.</p>
                            <p> Di Indonesia Panti asuhan berada dibawah pengawasan Dinas sosial. Menurut Data di Biro Pusat Statistik dan Departemen Sosial menunjukkan bahwa pada tahun 2006 jumlah anak telantar yang berusia 6 – 18 tahun mencapai 2.815.393 anak, Balita Terlantar mencapai 518.296 , Anak Perlakuan Salah 182.408, Anak Jalanan 232.894 dan Anak Nakal sebesar 295.763. dengan rincian yang tinggal di perkotaan sebanyak 492.281 jiwa dan pedesaan mencapai 2.275.348 jiwa. Sedangkan yang tergolong rawan ketelantaran diperkirakan mencapai 10.322.764, dengan rincian yang tinggal di perkotaan mencapai 2.996.253 jiwa dan pedesaan sebanyak 7.326.421 jiwa. Kondisi tersebut menuntut perhatian dan upaya pemerintah dalam rangka mewujudkan sistem perlindungan dan pelayanan kesejahteraan sosial anak yang lebih representatif untuk perkembangan anak</p>
                        </div>
                    </div>
                    <div class="row justify-content-center py-30">
                        <div class="col-lg-8 clearfix">
                            <button type="button" class="btn btn-rounded btn-secondary float-right">
                                <i class="fa fa-share-alt text-primary mr-5 "></i> Share
                            </button>
                            <a class="btn btn-rounded bg-secondary btn-secondary mr-5" href="/berita">
                                Back
                            </a>
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



