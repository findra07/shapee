<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<link rel="icon" href="<?php echo base_url() ?>assets/sape1.png">
<style>
    .header {
        width: 100%;
        height: 110px;
        background-color: lightblue;
        /* position: fixed; */
        /* border: 1px solid lightgreen; */
        /* position: fixed; */
    }

    .blok-header {
        width: 75%;
        height: 110px;
        /* border: 1px solid lightpink; */
        /* background-color: blue; */
        margin: auto;

    }

    .blok-atas {
        width: 100%;
        height: 40px;
        /* border: 1px solid lightcyan; */

    }

    .blok-bawah {
        width: 100%;
        height: 60px;
        /* border: 1px solid lightcyan; */

    }

    .blok-atas-kiri {
        display: inline-block;
        width: 35%;
        height: 40px;
        margin-left: 5px;
        /* border: 1px solid lightcyan; */
        vertical-align: text-bottom;
    }

    .blok-atas-kanan {
        display: inline-block;
        width: 60%;
        height: 40px;
        /* border: 1px solid lightcyan; */
        vertical-align: text-bottom;
        text-align: right;
    }

    .blok-logo {
        display: inline-block;
        width: 20%;
        height: 60px;
        /* border: 1px solid lightcyan; */
        vertical-align: top;
    }

    .blok-tengah {
        display: inline-block;
        width: 60%;
        height: 70px;
        /* border: 1px solid black; */
    }

    .shopping-cart {
        display: inline-block;
        width: 5%;
        height: 20px;
        /* border: 1px solid black; */
        /* position: absolute; */
        font-size: 24px;
        padding: 11px;
        vertical-align: top;
    }

    .blok-search {
        display: block;
        width: 100%;
        height: 40px;
        /* border: 1px solid orange; */
    }

    .barang-contoh {
        display: block;
        width: 99%;
        height: 20px;
        /* border: 1px solid lightcyan; */
        text-align: left;
        /* position: absolute; */
        overflow: hidden;
        font-size: 14px;
        font-family: Maiandra GD;
    }

    .headtext1 {
        font-size: 14px;
        font-family: Maiandra GD;
        padding-top: 8px;
    }

    .headtext2 {
        font-size: 14px;
        font-family: Maiandra GD;
        padding-top: 8px;
        color: black;
    }

    a {
        /* color: lightcyan; */
        color: white;
        margin-left: 2px;
        margin-right: 2px;
    }

    .klik-login {
        color: black;
    }

    .klik-login:hover {
        color: white;
        font-weight: bolder;
    }

    .kolom-search {
        width: 99%;
        height: 35px;
        border: 1px solid white;
        border-radius: 5px;
        background-color: white;
        /* position: absolute; */
    }

    .blok-icon-search {
        width: 50px;
        height: 40px;
        /* border: 1px solid black; */
        display: inline-block;
    }

    .icon-search {
        /* width: 35px; */
        height: 25px;
        /* border: 1px solid white; */
        border-radius: 5px;
        background-color: lightblue;
        padding-top: 7px;
        padding-left: 15px;
        margin-top: 1px;
        /* margin-left: 55%; */
        /* margin-top: 3px; */
        /* padding: 8px 20px; */
        /* display: inline; */
        /* vertical-align: top; */
    }

    .blok-caridisini {
        width: 89%;
        height: 30px;
        /* border: 1px solid black; */
        display: inline-block;
        vertical-align: middle;
    }

    .text-caridisini {
        text-align: left;
        padding-top: 3px;
        padding-left: 10px;
        font-size: 14px;
        font-family: Maiandra GD;
        /* display: inline; */
        vertical-align: middle;
        color: lightpink;
    }

    .img-logo {
        width: 50px;
        height: 50px;
        display: inline;
        /* margin: auto; */
    }

    .nama-brand {
        font-family: Maiandra GD;
        display: inline;
        color: white;
    }

    .blok-brand {
        width: 100px;
        height: 40px;
        /* border: 1px solid black; */
        display: inline-block;
        position: absolute;
        padding-top: 8px;
        font-size: 32px;
    }

    @media(max-width: 1200px) {

        .blok-kategori {
            width: 100%;
            margin: auto;
            margin: 10px auto;
            overflow: hidden;
        }

        .subblok-kategori {
            overflow: hidden;
        }

        .blok-header {
            width: 100%;
            margin: auto;
        }

        .tumbnail {
            width: 100%;
            margin: auto;
        }

        .blok-iklan {
            width: auto;
            margin: 20px auto;
        }
    }

    @media (max-width: 900px) {
        .blok-caridisini {
            width: 85%;
        }

    }

    @media(max-width: 860px) {
        .blok-logo {
            width: 160px;

        }
    }

    @media (max-width: 800px) {
        .blok-caridisini {
            width: 85%;
        }

    }

    @media (max-width: 700px) {
        .blok-caridisini {
            width: 80%;
        }

        .blok-atas {
            width: 720px;
        }
    }

    @media (max-width: 600px) {
        .blok-caridisini {
            width: 80%;
        }

        .blok-atas {
            width: 700px;
        }
    }

    @media (max-width: 500px) {
        .blok-caridisini {
            width: 78%;
        }
    }
</style>

<header class="header">
    <div class="blok-header">
        <div class="blok-atas">
            <div class="blok-atas-kiri">
                <div class="headtext1">
                    Download | Ikuti Kami Di
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-youtube"></a>
                </div>
            </div>
            <div class="blok-atas-kanan">
                <div class="headtext2">
                    <a href="" class="fas fa-bell"></a> Notifikasi
                    <a href="" class="fas fa-info-circle"></a> Bantuan
                    <a href="" class="fas fa-globe"></a> Bahasa <a href="" class="fas fa-angle-down"></a>
                    Daftar | <a class="klik-login" href="<?php echo base_url('index.php/CLogin') ?>">Login</a>
                </div>
            </div>

        </div>
        <div class="blok-bawah">
            <div class="blok-logo">
                <a href="<?php echo base_url() ?>index.php/CHome">
                    <img class="img-logo" src="<?php echo base_url() ?>assets/sape.png" height="2px" alt="">
                    <div class="blok-brand">
                        <p class="nama-brand">
                            <b> Shapee </b>
                        </p>
                    </div>
                </a>
            </div>
            <div class="blok-tengah">
                <div class="blok-search">
                    <div class="kolom-search">
                        <div class="blok-caridisini">
                            <div class="text-caridisini">
                                <i>Cari Disini ...</i>
                            </div>
                        </div>
                        <div class="blok-icon-search">
                            <div class="icon-search">
                                <a href="" class="fas fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="barang-contoh">
                    <?php
                    for ($i = 1; $i <= 15; $i++) {
                        echo "Barang";
                        echo $i;
                        echo "&nbsp";
                    }
                    ?>
                </div>
            </div>
            <div class="shopping-cart">
                <a href="" class="fas fa-shopping-cart"></a>
            </div>
        </div>
    </div>
</header>