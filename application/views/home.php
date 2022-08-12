<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utama.css" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/sape1.png">
    <title>Shapee</title>

    <style>
        .blok-iklan {
            width: 75%;
            height: 360px;
            /* border: 1px solid lightskyblue; */
            margin: 20px auto;

        }

        .blok-iklan-kiri {
            width: 40%;
            height: 360px;
            /* border: 1px solid lightblue; */
            display: inline-block;
        }

        .iklan-kiri-atas {
            width: 100%;
            height: 178px;
            /* border: 1px solid black; */
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 4px;
        }

        .iklan-kiri-bawah {
            width: 100%;
            height: 178px;
            /* border: 1px solid lightblue; */
            border-radius: 5px;
            overflow: hidden;
        }

        .blok-iklan-kanan {
            width: 59%;
            height: 360px;
            /* border: 1px solid lightblue; */
            display: inline-block;
            /* align-items: center;
    justify-content: center; */
            overflow: hidden;
            border-radius: 5px;
        }

        .blok-kategori {
            width: 75%;
            height: 130px;
            /* border: 1px solid lightblue; */
            margin: 10px auto;
            overflow: hidden;
        }

        .subblok-kategori {
            display: inline-block;
            width: 100px;
            margin-left: 2.3%;
            /* border: 1px solid lightblue; */
            overflow: hidden;
        }

        .item-kategori {
            width: 100%;
            height: auto;
            /* border: 1px solid lightblue; */
            display: block;
            margin: auto;
            overflow: hidden;
        }

        .subblok-kategori:hover {
            background-color: lightblue;
            height: 122px;
            border-radius: 5px;
            box-shadow: 3px 3px 10px grey;
        }

        .nama-kategori {
            text-align: center;
            font-family: Maiandra GD;
            overflow: hidden;
        }

        .image {
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }

        .tumbnail {
            width: 100%;
            /* border: 1px solid black; */
            margin: auto;
            overflow: hidden;

        }

        .kotak {
            border: 0px;
            /* border: 1px solid lightblue; */
            /* background-color: blue; */
        }

        .kotak1 {
            /* border: 1px solid black; */
            border-radius: 5px;
            /* background-color: blue; */

        }


        .kotak2 {
            border: 1px solid lightblue;
            border-radius: 5px;
            /* background-color: blue; */
            font-family: Maiandra GD;
            box-shadow: 5px 5px 5px lightblue;
        }

        .kotak2:hover {
            border: 1px solid black;
        }


        .swiper {
            width: 100%;
            height: inherit;
        }

        .swiper-slide img {
            /* width: 100%; */
            width: auto;
        }

        .swiper .swiper-button-prev,
        .swiper .swiper-button-next {
            color: white;
        }

        .swiper .swiper-pagination-bullet {
            background-color: white;
        }

        .swiper .swiper-pagination-bullet-active {
            background-color: lightblue;
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
        }

        @media (max-width: 600px) {
            .blok-caridisini {
                width: 80%;
            }

            .blok-atas-kanan,
            .blok-atas-kiri {
                width: 280px;
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


</head>

<body>

    <?php include 'template/header.php'; ?>

    <div class="blok-iklan">
        <div class="blok-iklan-kiri">
            <div class="iklan-kiri-atas">
                <img src="<?php echo base_url() ?>assets/store1.jpg" alt="">
            </div>
            <div class="iklan-kiri-bawah">
                <img src="<?php echo base_url() ?>assets/store2.jpg" alt="">
            </div>
        </div>
        <div class="blok-iklan-kanan">

            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <!-- <div class="swiper-slide"><img src="assets/slide1.jpg"></div> -->
                    <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/slide2.jpg"></div>
                    <!-- <div class="swiper-slide"><img src="assets/slide3.jpg"></div> -->
                    <!-- <div class="swiper-slide"><img src="assets/slide4.jpg"></div> -->
                    <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/slide5.jpg"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </div>
    </div>
    <div class="blok-kategori">
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <div class="subblok-kategori">
                <div class="item-kategori">
                    <img src="<?php echo base_url() ?>assets/img-kategori.png" width="100%" alt="">
                </div>
                <div class="nama-kategori">
                    <?php
                    echo "<b>kategori</b>";
                    echo "&nbsp";
                    echo "<b>";
                    echo $i;
                    echo "</b>";
                    ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="tumbnail">
        <?php
        $nama = "Sepatu Masa Kini <br>";
        $harga = "Rp 250.000,-";
        ?>
        <table class="kotak" border="1" cellpadding="10" cellspacing="20" align="center">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <tr class="kotak1">
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <td class="kotak2">
                            <a href="<?php echo base_url('index.php/CItem') ?>">
                                <img class="image" src='<?php echo base_url() ?>assets/sampel.png'>
                            </a>
                            <br>
                            <?php
                            echo $nama;
                            echo $harga;
                            ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            // direction: 'vertical',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        });
    </script>

    <?php include 'template/footer.php'; ?>


</body>

</html>