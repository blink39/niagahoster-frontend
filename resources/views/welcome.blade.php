<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{URL::asset('/image/logo.png')}}">
        <title>Niagahoster</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <style>
            body {
                font-family: 'Nunito Sans', sans-serif;
            }

            #navbarNav ul li a{
                color: black;
                font-weight: 600;
            }

            .box-border {
                border-style: solid;
                border-width: 1px;
                border-color: grey;
                display: inline-block;
                box-shadow: 0px 7px 8px #888888;
            }
            
            .box-border-blue {
                border-style: solid;
                border-width: 1px;
                border-color: #008FEE;
                display: inline-block;
                box-shadow: 0px 7px 8px #888888;
            }

            .btn-price {
                background-color: white;
                border-radius: 50px;
                padding: 10px 20px 10px 20px;
            }

            .hr-space {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                width: 100px;
                border-top: 5px solid rgba(0, 0, 0, 0.1);
                border-radius: 50px;
            }

            .btn-hosting{
                border: 0px;
                background-color: #0090EF;
                border-radius: 50px;
                color: white;
                padding: 10px 20px 10px 20px;
            }

            .margin-50 {
                margin-top: 50px;
            }
            
            @media only screen and (max-width: 576px) {
                .text-xs-center {
                    text-align: center !important;
                }
            }
            
            @media only screen and (max-width: 992px) {
                .margin-price-50 {
                    margin-top: 50px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div>
                <nav class="navbar navbar-expand-lg navbar-light" style="padding-bottom: 0px;">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fa fa-phone"></i> 0274-2885822</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fa fa-comments"></i> Live Chat</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> Member Area</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div>
                <nav class="navbar navbar-expand-lg navbar-light" style="padding-top: 0px; padding-bottom: 0px;">
                    <a class="navbar-brand" href="#" style="margin-right: 0px;">
                        <img src="{{URL::asset('/image/logo.png')}}" width="50" height="50" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Domain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Server</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Afiliasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        
            <hr>

            <div class="row" >
                <div class="col col-lg-6 offset-lg-0 col-md-6 offset-md-0 col-sm-10 offset-sm-1 col-10 offset-1 align-self-center">
                    <span style="font-weight: 600px; font-size: 35px;"><strong>PHP Hosting</strong></span> <br>
                    <span style="font-weight: 600px; font-size: 30px;"> Cepat, handal, penuh dengan modul PHP yang Anda butuhkan </span> <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Solusi PHP untuk performa query yang lebih cepat. <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Konsumsi memory yang lebih rendah. <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7 <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Fitur enkripsi IonCube dan Zend Guard Loaders <br>
                </div>
                <div class="col col-lg-6 offset-lg-0 col-md-6 offset-md-0 col-sm-10 offset-sm-1 col-10 offset-1 justify-content-center">
                    <img src="{{URL::asset('/image/illustration banner PHP hosting-01.svg')}}" width="500" height="300" alt="" style="max-width: 95%;">
                </div>
            </div>

            <hr>

            <div class="row justify-content-center margin-50" style="text-align: center; color:grey;">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-7 justify-content-center">
                    <embed src="{{URL::asset('/image/illustration banner PHP zenguard01.svg')}}" width="300" height="170" alt="" style="max-width: 95%;">
                    PHP Zend Guard Loader
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-7 justify-content-center">
                    <embed src="{{URL::asset('/image/composer.svg')}}" width="300" height="170" alt="" style="max-width: 95%;">
                    PHP Composer
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-7 justify-content-center">
                    <embed src="{{URL::asset('/image/icon PHP Hosting_ioncube.svg')}}" width="300" height="170" alt="" style="max-width: 95%;">
                    PHP ionCube Loader
                </div>
            </div>

            <div class="row justify-content-center margin-50">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12" style="text-align:center;">
                    <span style="font-weight: 600px; font-size: 35px;"><strong>Paket Hosting Singapura yang Tepat</strong></span> <br>
                    <span style="font-weight: 600px; font-size: 30px;">Diskon 40% + Domain dan SSL Gratis untuk Anda</span> <br>
                </div>
            </div>

            <div class="row justify-content-center margin-50">
                <div class="col col-lg-5 col-md-10 col-sm-10 col-10 justify-content-center">
                    <div class="row" style="text-align: center;">
                        <div class="col col-lg-6 col-md-6 col-xs-12 col-12 box-border margin-price-50">
                            <span style="font-weight: 600px; font-size: 35px;"><strong id="name0"></strong></span>
                            <hr>
                            <strike id="normalPrice0"></strike>
                            <br>
                            <span style="font-weight: 600px; font-size: 25px;" id="newPrice0"></span> 
                            <hr>
                            <strong id="user0"></strong> Pengguna Terdaftar
                            <hr>
                            <ul style="list-style: none; font-size:12px;padding-left:0px;">
                                <li><strong>0.5X RESOURCE POWER</strong></li>
                                <li><strong>500</strong> MB Disk Space</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                            </ul>
                            <br>
                            <button class="btn-price"><strong>Pilih Sekarang</strong></button>
                            <br>
                            <br>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-xs-12 col-12 box-border margin-price-50">
                            <span style="font-weight: 600px; font-size: 35px;"><strong id="name1"></strong></span>
                            <hr>
                            <strike id="normalPrice1"></strike>
                            <br>
                            <span style="font-weight: 600px; font-size: 25px;" id="newPrice1"></span> 
                            <hr>
                            <strong id="user1"></strong> Pengguna Terdaftar
                            <hr>
                            <ul style="list-style: none; font-size:12px;padding-left:0px;">
                                <li><strong>1X RESOURCE POWER</strong></li>
                                <li><strong>Unlimited</strong> MB Disk Space</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Database</li>
                                <li><strong>Unlimited</strong> Email</li>
                            </ul>
                            <br>
                            <button class="btn-price"><strong>Pilih Sekarang</strong></button>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-5 col-md-10 col-sm-10 col-10 justify-content-center">
                    <div class="row" style="text-align: center;">
                        <div class="col col-lg-6 col-md-6 col-xs-12 col-12 box-border-blue margin-price-50" style="padding:0px;">
                            <div style="background-color:#008FEE;color:white;">
                                <span style="font-weight: 600px; font-size: 35px;"><strong id="name2"></strong></span>
                                <hr>
                                <strike id="normalPrice2"></strike>
                                <br>
                                <span style="font-weight: 600px; font-size: 25px;" id="newPrice2"></span> 
                                <hr style="margin-bottom:0px;">
                            </div>
                            <div style="background-color:#007FDE;color:white;padding:15px 0px 15px 0px;">
                                <strong id="user2"></strong> Pengguna Terdaftar
                            </div>
                            <hr style="margin-top:0px">
                            <ul style="list-style: none; font-size:12px;padding-left:0px;">
                                <li><strong>2X RESOURCE POWER</strong></li>
                                <li><strong>Unlimited</strong> MB Disk Space</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Database</li>
                                <li><strong>Unlimited</strong> Email</li>
                                <li><strong>Private</strong> Name Server</li>
                                <li><strong>SpamAssassin</strong> Mail Protection</li>
                            </ul>
                            <br>
                            <button class="btn-price" style="background-color:#008FEE;color:white;"><strong>Pilih Sekarang</strong></button>
                            <br>
                            <br>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-xs-12 col-12 box-border margin-price-50">
                            <span style="font-weight: 600px; font-size: 35px;"><strong id="name3"></strong></span>
                            <hr>
                            <strike id="normalPrice3"></strike>
                            <br>
                            <span style="font-weight: 600px; font-size: 25px;" id="newPrice3"></span> 
                            <hr>
                            <strong id="user3"></strong> Pengguna Terdaftar
                            <hr>
                            <ul style="list-style: none; font-size:12px;padding-left:0px;">
                                <li><strong>3X RESOURCE POWER</strong></li>
                                <li><strong>Unlimited</strong> MB Disk Space</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Database</li>
                                <li><strong>Unlimited</strong> Email</li>
                                <li><strong>Private</strong> Name Server</li>
                                <li><strong>SpamAssassin</strong> Mail Protection</li>
                                <li><strong>Prioritas</strong> Layanan Support</li>
                                <li><strong>SpamExpert</strong> Pro Mail Protection</li>
                            </ul>
                            <br>
                            <button class="btn-price"><strong>Pilih Sekarang</strong></button>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center margin-50" style="text-align: center;">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <span style="font-weight: 600px; font-size: 30px;">Powerful dengan Limit PHP yang Lebih Besar</span>
                </div>
                <br>
                <br>

                <div class="col col-lg-5 col-md-5 col-sm-10 col-10">
                    <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-check-circle" style="color:green;"></i></td>
                            <td>max execution 300s</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle" style="color:green;"></i></td>
                            <td>max execution 300s</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle" style="color:green;"></i></td>
                            <td>php memory limit 1024 MB</td>
                        </tr>
                    </table>
                </div>
                
                <div class="col col-lg-5 col-md-5 col-sm-10 col-10">
                    <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-check-circle" style="color:green;"></i></td>
                            <td>post max 128 MB</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle" style="color:green;"></i></td>
                            <td>upload max filesize 128 MB</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle" style="color:green;"></i></td>
                            <td>max input vars 2500</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <hr class="hr-space margin-50">

            <div class="row justify-content-center margin-50" style="text-align: center;">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <span style="font-weight: 600px; font-size: 30px;">Semua Paket Hosting Sudah Termasuk</span>
                </div>
                
                <br><br>

                <div class="col col-lg-4 col-md-4 col-sm-6 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/icon PHP Hosting_PHP Semua Versi.svg')}}" width="100" height="60" alt="" style="max-width: 95%;">
                    <br>
                    <span style="font-weight: 600px; font-size: 20px;"><strong>PHP Semua Versi</strong></span>
                    <br>
                    <span style="font-weight: 600px; font-size: 15px;">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</span>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/icon PHP Hosting_My SQL.svg')}}" width="100" height="60" alt="" style="max-width: 95%;">
                    <br>
                    <span style="font-weight: 600px; font-size: 20px;"><strong>MySQL Versi 5.6</strong></span>
                    <br>
                    <span style="font-weight: 600px; font-size: 15px;">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</span>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/icon PHP Hosting_CPanel.svg')}}" width="100" height="60" alt="" style="max-width: 95%;">
                    <br>
                    <span style="font-weight: 600px; font-size: 20px;"><strong>Panel Hosting cPanel</strong></span>
                    <br>
                    <span style="font-weight: 600px; font-size: 15px;">Kelola website dengan panel canggih yang familiar di hati Anda.</span>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/icon PHP Hosting_garansi uptime.svg')}}" width="100" height="60" alt="" style="max-width: 95%;">
                    <br>
                    <span style="font-weight: 600px; font-size: 20px;"><strong>Garansi Uptime 99.9%</strong></span>
                    <br>
                    <span style="font-weight: 600px; font-size: 15px;">Data center yang mendukung kelangsungan website anda 24/7.</span>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/icon PHP Hosting_InnoDB.svg')}}" width="100" height="60" alt="" style="max-width: 95%;">
                    <br>
                    <span style="font-weight: 600px; font-size: 20px;"><strong>Database InnoDB Unlimited</strong></span>
                    <br>
                    <span style="font-weight: 600px; font-size: 15px;">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</span>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-6 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/icon PHP Hosting_My SQL remote.svg')}}" width="100" height="60" alt="" style="max-width: 95%;">
                    <br>
                    <span style="font-weight: 600px; font-size: 20px;"><strong>Wildcard Remote MySQL</strong></span>
                    <br>
                    <span style="font-weight: 600px; font-size: 15px;">Mendukung s/d 25 max_user_connections dan 100 max_connections.</span>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

            <hr class="hr-space margin-50">

            <div class="row justify-content-center margin-50">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: center;">
                    <span style="font-weight: 600px; font-size: 30px;">Mendukung Penuh Framework Laravel</span>
                </div>

                <br><br>

                <div class="col col-lg-6 col-md-10 col-sm-10 col-10" style="text-align: left;">
                    Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda
                    <br>
                    <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.
                    <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json</strong> dan <strong>fileinfo</strong>.
                    <br>
                    <i class="fa fa-check-circle" style="color:green;"></i> Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda.
                    <br>
                    <br>
                    <span style="font-size: 10px;">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</span>

                    <br><br>

                    <button class="btn-hosting"><strong>Pilih Hosting Anda</strong></button>
                </div>
                
                <div class="col col-lg-4 col-md-10 col-sm-10 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/illustration banner support laravel hosting.svg')}}" width="900" height="350" alt="" style="max-width: 95%;">
                </div>
            </div>

            <hr>

            <div class="row justify-content-center margin-50">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: center;">
                    <span style="font-weight: 600px; font-size: 30px;">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</span>
                </div>

                <br><br>

                <div class="col col-lg-9 col-md-9 col-sm-9 col-9 justify-content-center" style="padding-top: 20px;">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                            IcePHP <br>
                            apc <br>
                            apcu <br>
                            apm <br>
                            ares <br>
                            bcmath <br>
                            clamav <br>
                            crack <br>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                            http <br>
                            huffman <br>
                            idn <br>
                            imap <br>
                            inclued <br>
                            jsmin <br>
                            json <br>
                            ldap <br>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                            nd_pdo_mysql <br>
                            oauth <br>
                            oci8 <br>
                            pdf <br>
                            pdo_mysql <br>
                            pdo_odbs <br>
                            pgsql <br>
                            phalcon <br>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                            stats <br>
                            stem <br>
                            stomp <br>
                            suhosin <br>
                            tidy <br>
                            timezonedb <br>
                            uploadprogress <br>
                            uri_template <br>
                        </div>
                        
                    </div>
                    <div class="row justify-content-center" style="padding-top: 20px;">
                        <button class="btn-price"><strong>Selengkapnya</strong></button>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center margin-50">
                <div class="col col-lg-5 col-md-10 col-sm-10 col-10" style="text-align: left;">
                    <span style="font-weight: 600px; font-size: 30px;">Linux Hosting yang Stabil dengan Teknologi LVE</span>
                    <br>
                    <br>
                    
                    SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> ntuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.

                    <br><br>

                    <button class="btn-hosting"><strong>Pilih Hosting Anda</strong></button>
                </div>
                
                <div class="col col-lg-5 col-md-10 col-sm-10 col-10 justify-content-center">
                    <img src="{{URL::asset('/image/Image_support.png')}}" width="500" height="300" alt="" style="max-width: 95%;">
                </div>
            </div>
        </div>

        <div class="margin-50" style="background-color:#00A2F3;color:white;text-align:center;padding: 40px 0px 40px 0px;">
            <div class="container" style="font-size:30px;">
                Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong>&emsp; <button style="background-color:transparent;border-radius:50px;border-color:white;color:white;padding:0px 25px 0px 25px;"><i class="fa fa-comments"></i> Live Chat</button>
            </div>
        </div>
        <div style="background-color:#303030;padding: 40px 0px 40px 0px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                        <span style="color:#8E8E8E;">HUBUNGI KAMI</span>
                        <br>
                        <br>
                        <p style="color:#ADADAD;">
                            0274-5305505 <br>
                            Senin - Minggu <br>
                            24 Jam Nonstop
                        </p>
                        <br>
                        <p style="color:#ADADAD;">
                            Jl. Selokan Mataram Monjali <br>
                            rangjati MT 1/304 <br>
                            Sinduadi, Mlati, Sleman <br>
                            Yogyakarta 55284
                        </p>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                        <span style="color:#8E8E8E;">LAYANAN</span>
                        <br>
                        <br>
                        <p style="color:#ADADAD;">
                            Domain <br>
                            Shared Hosting <br>
                            Cloud VPS Hosting <br>
                            Managed VPS Hosting <br>
                            Web Builder <br>
                            Keamanan SSL / HTTPS <br>
                            Jasa Pembuatan Website <br>
                            Program Afiliasi
                        </p>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                        <span style="color:#8E8E8E;">SERVICE HOSTING</span>
                        <br>
                        <br>
                        <p style="color:#ADADAD;">
                            Hosting Murah <br>
                            Hosting Indonesia <br>
                            Hosting Singapura SG <br>
                            Hosting PHP <br>
                            Hosting Wordpress <br>
                            Hosting Laravel
                        </p>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                        <span style="color:#8E8E8E;">TUTORIAL</span>
                        <br>
                        <br>
                        <p style="color:#ADADAD;">
                            Knowledgebase <br>
                            Blog <br>
                            Cara Pembayaran <br>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top:50px;">
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                        <span style="color:#8E8E8E;">TENTANG KAMI</span>
                        <br>
                        <br>
                        <p style="color:#ADADAD;">
                            Tim Niagahoster <br>
                            Karir <br>
                            Events <br>
                            Penawaran & Promo Spesial <br>
                            Kontak Kami
                        </p>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                        <span style="color:#8E8E8E;">KENAPA PILIH NIAGAHOSTER?</span>
                        <br>
                        <br>
                        <p style="color:#ADADAD;">
                            Support Terbaik <br>
                            Garansi Harga Termurah <br>
                            Domain Gratis Selamanya <br>
                            Datacenter Hosting Terbaik <br>
                            Review Pelanggan
                        </p>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6" style="overflow-x:hidden;">
                        <span style="color:#8E8E8E;">NEWSLETTER</span>
                        <br>
                        <br>
                        <input type="text" placeholder="Email" style="border-radius:50px; background-color:white;padding: 10px 15px 10px 20px;"><button style="margin-left:-47%;border-radius:50px;background-color:#00A2F3;color:white;border:0px;padding: 5px;">Berlangganan</button>
                        <p style="color:#ADADAD;">
                            Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.
                        </p>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                    </div>
                </div>
                <div class="row" style="margin-top:50px;">
                    <div class="col col-lg-8 col-md-8 col-sm-8 col-12 text-xs-center" style="color:#ADADAD;font-size:10px;">
                        Copyright ©2021 Niagahoster | Hosting powered by PHP8, CloudLinux, CloudFlare, BitNinja and DC DCI-Indonesia. Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 text-xs-center" style="color:#ADADAD;text-align:right;font-size:10px;">
                        Syarat dan Ketentuan | Kebijakan Privasi
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    var text = '{"packages":[' +
    '{"name":"Bayi","normalPrice":"19.900","newPrice":"14.900","user":"938" },' +
    '{"name":"Pelajar","normalPrice":"46.900","newPrice":"23.450","user":"4.168" },' +
    '{"name":"Personal","normalPrice":"58.900","newPrice":"38.900","user":"10.017" },' +
    '{"name":"Bisnis","normalPrice":"109.900","newPrice":"65.900","user":"3.552" }]}';

    obj = JSON.parse(text);

    $( document ).ready(function() {
        for ( var i = 0; i < obj.packages.length; i++) {
            $('#name'+i).text(obj.packages[i].name);
            $('#normalPrice'+i).text("Rp " + obj.packages[i].normalPrice);
            $('#newPrice'+i).html('<sup>Rp</sup> <strong style="font-size:40px;">'+obj.packages[i].normalPrice.split(".")[0]+'</strong> <sup><strong>.'+obj.packages[i].normalPrice.split(".")[1]+'</strong>/bln</sup>');
            $('#user'+i).text(obj.packages[i].user);
        }
    });
</script>