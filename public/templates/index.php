<!DOCTYPE html>
<!--
  MASRIANTO 08 Juli 2020. admin@masrianto.com
  masrianto.com
  this template taken and modified from Bootstrap starter template
  http://twitter.github.com/bootstrap/examples/starter-template.html 
  modification for LAKIP 2020. -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pencarian Koleksi Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jaringan pencarian koleksi perpustakaan hak asasi manusia">
    <meta name="author" content="konsorsium Perpustakaan HAM Indonesia">
    <meta name="keywords" content="hak asasi manusia, HAM, koleksi, perempuan, lingkungan, hukum, buruh migran, bantuan hukum, advokasi, tanah, lingkungan, hutan, adat, masyarakat adat">
    <!-- main styles -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
            /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- <link href="/css/bootstrap/responsive.bootstrap4.css" rel="stylesheet"> -->
    <link href="/css/supersized.core.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/crawler.js">
        /* Text and/or Image Crawler Script v1.53 (c)2009-2011 John Davenport Scheuer
		   as first seen in http://www.dynamicdrive.com/forums/
		   username: jscheuer1 - This Notice Must Remain for Legal Use
		*/
    </script>
    <!-- For IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="plugins/html5.js"></script>
    <![endif]-->

    <!-- favorite and touch icons -->
    <!-- <link rel="shortcut icon" href="/icon/appicon.ico"> -->
    <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div id="masking"></div>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <img src="" class="navbar-text logo pull-left" /><a class="brand" href="index.php"><i class="fas fa-envelope mr-2"></i> <?= date('d M Y') ?></a>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- simple search -->
        <form class="well form-search">
            <input type="hidden" name="p" value="search" />
            <label>Kata Kunci</label>
            <input type="text" name="keywords" class="input-medium search-query" value="">
            <select name="node">
                <option value="ALL">Seluruh perpustakaan</option>
                <option value="1">Perpustakaan Komnas HAM (Komisi Nasional Hak Asasi Manusia)</option>
                <option value="2">Perpustakaan Komnas Perempuan</option>
                <option value="3">Perpustakaan ELSAM (Lembaga Studi dan Advokasi Masyarakat)</option>
                <option value="4">Perpustakaan LBH (Lembaga Bantuan Hukum) Jakarta</option>
                <option value="5">Perpustakaan Daniel S Lev</option>
                <option value="6">Perpustakaan IKA (Indonesia Untuk Kemanusiaan</option>
                <option value="7">Perpustakaan PULIH</option>
                <option value="8">Perpustakaan Migrant Care</option>
                <option value="9">Perpustakaan WALHI (Wahana Lingkungan Hidup Indonesia)</option>
                <option value="10">Perpustakaan MAMPU</option>
                <option value="11">Perpustakaan Seknas PEKKA</option>
                <option value="12">PERLUDEM Library Perkumpulan untuk Pemilu dan Demokrasi</option>
                <option value="13">Perpustakaan Rifka Annisa</option>
                <option value="14">Perpustakaan LRC-KJHAM</option>
                <option value="15">Perpustakaan SAVYAMIRA</option>
                <option value="16">Perpustakaan Institut KAPAL Perempuan</option>
                <option value="17">Perpustakaan SpekHam Solo</option>
                <option value="18">Perpustakaan UPIPA</option>
                <option value="19">Perpustakaan Sahabat Perempuan</option>
            </select>
            <button type="submit" class="btn btn-primary">Cari sekarang</button>
            <a data-toggle="modal" data-target="#advSearchModal" class="btn btn-info">Pencarian lanjut</a>
        </form>

        <!-- advanced search -->
        <div id="advSearchModal" class="modal fade hide">
            <form id="adv-search-form" action="index.php" method="get">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">x</a>
                    <h3>Pustaka : Pencarian lanjut</h3>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="advsearch" value="1" />
                    <input type="hidden" name="p" value="search" />
                    <table>
                        <tr>
                            <td class="value">
                                Judul Koleksi </td>
                            <td class="value">
                                <input type="text" name="title" />
                            </td>
                            <td class="value">
                                Pengarang </td>
                            <td class="value">
                                <input type="text" name="author" />
                            </td>
                        </tr>
                        <tr>
                            <td class="value">
                                Subyek </td>
                            <td class="value">
                                <input type="text" name="subject" />
                            </td>
                            <td class="value">
                                ISBN/ISSN </td>
                            <td class="value">
                                <input type="text" name="isbn" />
                            </td>
                        </tr>
                        <tr>
                            <td class="value">
                                Lokasi </td>
                            <td class="value" colspan="3">
                                <select name="node" class="full-width">
                                    <option value="ALL">Seluruh perpustakaan</option>
                                    <option value="1">Perpustakaan Komnas HAM (Komisi Nasional Hak Asasi Manusia)</option>
                                    <option value="2">Perpustakaan Komnas Perempuan</option>
                                    <option value="3">Perpustakaan ELSAM (Lembaga Studi dan Advokasi Masyarakat)</option>
                                    <option value="4">Perpustakaan LBH (Lembaga Bantuan Hukum) Jakarta</option>
                                    <option value="5">Perpustakaan Daniel S Lev</option>
                                    <option value="6">Perpustakaan IKA (Indonesia Untuk Kemanusiaan</option>
                                    <option value="7">Perpustakaan PULIH</option>
                                    <option value="8">Perpustakaan Migrant Care</option>
                                    <option value="9">Perpustakaan WALHI (Wahana Lingkungan Hidup Indonesia)</option>
                                    <option value="10">Perpustakaan MAMPU</option>
                                    <option value="11">Perpustakaan Seknas PEKKA</option>
                                    <option value="12">PERLUDEM Library Perkumpulan untuk Pemilu dan Demokrasi</option>
                                    <option value="13">Perpustakaan Rifka Annisa</option>
                                    <option value="14">Perpustakaan LRC-KJHAM</option>
                                    <option value="15">Perpustakaan SAVYAMIRA</option>
                                    <option value="16">Perpustakaan Institut KAPAL Perempuan</option>
                                    <option value="17">Perpustakaan SpekHam Solo</option>
                                    <option value="18">Perpustakaan UPIPA</option>
                                    <option value="19">Perpustakaan Sahabat Perempuan</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="search" value="Cari" class="btn btn-primary btn-large" />
                    <a class="btn btn-danger btn-large close" data-dismiss="modal">Close</a>
                </div>
            </form>
        </div>

        <div id="main-content">
        </div>
        <!-- add logo -->
        <div class="logo-konsorsium">
            <p style="background: #366;text-align:left;padding:7px;font-size:16px;color:#fff;">Didukung Oleh :</p>
            <!-- Running Logo -->
            <div class="marquee" id="mycrawler2">
                <a href="http://www.bantuanhukum.or.id" target="_blank" alt="Lembaga Bantuan Hukum Jakarta"><img src="/logo/logo-lbhj.png" title="Lembaga Bantuan Hukum Jakarta"></a>
                <a href="http://www.indonesiauntukkemanusiaan.org" target="_blank" alt="Indonesia untuk Kemanusiaan"><img src="/logo/logo-ika.png" title="Indonesia untuk Kemanusiaan"></a>
                <a href="http://www.migrantcare.net" target="_blank" alt="Migrant Care"><img src="/logo/logo-migrantcare.png" title="Migrant Care"></a>
                <a href="http://www.komnasham.go.id" target="_blank" alt="Komnas HAM"><img src="/logo/logo-komnas.png" title="Komnas HAM"></a>
                <a href="http://www.danlevlibrary.net" target="_blank" alt="Perpustakaan Hukum Daniel S. Lev"><img src="/logo/logo-danlev.png" title="Perpustakaan Hukum Daniel S. Lev"></a>
                <a href="http://www.pulih.org/" target="_blank" alt="Yayasan Pulih"><img src="/logo/logo-pulih.png" title="Yayasan Pulih"></a>
                <a href="http://www.pekka.or.id" target="_blank" alt="Perempuan Kepala Keluarga"><img src="/logo/logo-pekka.png" title="Perempuan Kepala Keluarga"></a>
                <a href="http://www.perludem.org" target="_blank" alt="Perkumpulan untuk Pemilu dan Demokrasi"><img src="/logo/logo_perludem02.jpg" title="Perkumpulan untuk Pemilu dan Demokrasi"></a>
                <a href="http://www.mampu.or.id" target="_blank" alt="Maju Perempuan Indonesia untuk Penanggulangan Kemiskinan"><img src="/logo/logo_mampu01.png" title="Maju Perempuan Indonesia untuk Penanggulangan Kemiskinan"></a>
                <a href="http://www.rifka-annisa.org/library/" target="_blank" alt="Perpustakaan Rifka Annisa"><img src="/logo/logo_annisa.jpg" title="Perpustakaan Rifka Annisa"></a>
                <a href="http://www.lrckjham.com//" target="_blank" alt="LRC-KJHAM (Legal Resource Center untuk Keadilan Jender dan Hak Asasi Manusia)"><img src="/logo/logo_KJHAM.jpg"></a>
                <a href="http://www.savyamirawcc.com/" target="_blank" alt="SAVYAMIRA (Women's Crisis Centre)"><img src="/logo/logo_savyamira.png"></a>
                <a href="http://www.spekham.org/" target="_blank" alt="Yayasan SPEK-HAM Surakarta"><img src="/logo/Logo-SPEKHAM.png"></a>
                <a href="http://upipagow.blogspot.co.id/" target="_blank" alt="Upipa Gow Wonosobo"><img src="/logo/logo_upipa.png"></a>
            </div>
            <script type="text/javascript">
                marqueeInit({
                    uniqueid: 'mycrawler2',
                    style: {
                        'padding': '2px',
                        'width': 'auto',
                        'height': '180px'
                    },
                    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
                    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
                    moveatleast: 2,
                    neutral: 150,
                    savedirection: true,
                    random: false
                });
            </script>
            <!-- /end of Running Logo -->

            <!-- Running Text -->
            <div class="marquee" id="mycrawler">
                Koleksi Perpustakaan dengan isu Hak Asasi Manusia.
                Lebih dari 20.000 koleksi buku, majalah, kliping dan koleksi perpustakaan lainnya.
                Koleksi dengan subyek hukum, lingkungan, perempuan, buruh, tanah, hutan, kebun dan subyek lainnya.
                Gunakan pencarian mudah untuk mencari koleksi dari semua perpustakaan yang tergabung.
                Atau gunakan pencarian spesifik untuk mendapatkan koleksi dari perpustakaan tertentu.
            </div>

            <script type="text/javascript">
                marqueeInit({
                    uniqueid: 'mycrawler',
                    style: {
                        'padding': '5px',
                        'width': 'auto',
                        'background': '#F1680A',
                        'font-size': '16px',
                        'color': '#fff',
                        'border': '1px solid #CC3300'
                    },
                    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
                    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
                    moveatleast: 2,
                    neutral: 150,
                    persist: true,
                    savedirection: true
                });
            </script>
            <!-- end of Running Text -->
        </div>
        <!-- end logo -->

        <!-- footer -->
        <div class="navbar navbar-fixed-bottom">
            <div class="footer">
                <div class="container">
                    <div class="nav-collapse">
                        <div class="navbawah pull-left">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="index.php?p=help-pustakaham">Bantuan</a></li>
                            <li><a href="index.php?p=about">Tentang Kami</a></li>
                        </div>
                    </div>
                    <!--/.nav-collapse -->

                    <p class="navbar-text pull-right">Copyright @<i class="fas fa-envelope mr-2"></i> <?= date('Y') ?> - LAKIP</p>
                </div>
            </div>
        </div>



    </div> <!-- /container -->

    <script src="/js/supersized.3.1.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- <script src="/js/bootstrap.js"></script> -->
    <script type="text/javascript">
        jQuery(function($) {
            $.supersized({
                transition: 6,
                keyboard_nav: 0,
                start_slide: 0,
                vertical_center: 1,
                horizontal_center: 1,
                min_width: 1000,
                min_height: 700,
                fit_portrait: 0,
                fit_landscape: 1,
                image_protect: 1,
                slides: [{
                        image: '/images/indonesia.jpg'
                    },

                ]
            });
        });
    </script>
</body>

</html>