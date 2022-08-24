<link rel="icon" href="<?php echo base_url() ?>assets/sape1.png">
<title>Shapee</title>
<style>
    .blok-daftar {
        width: 100%;
        height: 550px;
        border: 1px solid lightblue;
        margin-top: 20px;
        background-color: lightblue;
        /* opacity: 80%; */
    }

    .blok-daftarlogo {
        width: 54%;
        height: 550px;
        /* border: 1px solid black; */
        display: inline-block;
        vertical-align: top;
    }

    .blok-form {
        width: 45%;
        height: 550px;
        /* border: 1px solid black; */
        display: inline-block;
        position: absolute;
    }

    .logo-atas {
        margin-left: 100px;
        margin-top: 10px;
    }

    .namalogo-atas {
        font-size: 30px;
        font-family: Maiandra GD;
        margin-top: -40px;
        margin-left: 150px;
        color: lightblue;
    }

    .logo-tengah {
        margin-top: 50px;
        margin-left: 40%;
        width: 270px;
        /* border: 1px solid black; */
    }

    .namasape {
        font-size: 80px;
        font-family: Maiandra GD;
        color: white;
        font-weight: bolder;
        margin-left: 41%;
        margin-top: -40px;
    }

    .maubelanja {
        font-size: 30px;
        font-family: Maiandra GD;
        color: white;
        font-weight: bolder;
        margin-left: 110px;
        margin-top: -50px;
        text-align: center;
    }

    .form-daftar {
        width: 400px;
        height: 400px;
        border: 1px solid white;
        border-radius: 10px;
        margin-top: 75px;
        background-color: white;
    }

    .daftar {
        font-size: 25px;
        font-family: Maiandra GD;
        color: black;
        margin-left: 35px;
        margin-top: 40px;
    }

    .kolom1 {
        width: 320px;
        height: 35px;
        border: 1px solid lightblue;
        margin-left: 40px;
        margin-top: 20px;
        vertical-align: text-top;
        padding-left: 10px;
        font-size: 15px;
        font-family: Maiandra GD;
        font-style: italic;
        /* opacity: 50%; */
    }

    .kolom3 {
        width: 320px;
        height: 35px;
        border: 1px solid lightblue;
        background-color: lightblue;
        margin-left: 40px;
        margin-top: 50PX;
        font-size: 15px;
        font-family: Maiandra GD;
        color: white;
        font-weight: bolder;
        text-align: center;
    }

    .username {
        font-size: 15px;
        font-family: Maiandra GD;
        /* text-align: center; */
        opacity: 50%;
        margin-left: 10px;
        margin-top: 8px;
    }

    .daftar-button {
        font-size: 15px;
        font-family: Maiandra GD;
        text-align: center;
        margin-top: 8px;
        color: white;
    }


    .to-login {
        font-size: 15px;
        font-family: Maiandra GD;
        color: black;
        text-align: right;
        margin-right: 40px;
        margin-top: 40px;
        color: red;
    }

    @media (max-width:1100px) {
        .blok-daftarlogo {
            width: 570px;
        }

        .maubelanja {
            margin-left: 150px;
        }
    }

    @media (max-width:1300px) {
        .maubelanja {
            margin-left: 140px;
        }
    }
</style>

<div>
    <a href="<?php echo base_url() ?>CHome">
        <img class="logo-atas" src="<?php echo base_url() ?>assets/sape.png" width="50px" alt="">
        <p class="namalogo-atas"><b>Shapee</b>
    </a> Daftar</p>
</div>

<div class="blok-daftar">
    <div class="blok-daftarlogo">
        <img class="logo-tengah" src="<?php echo base_url() ?>assets/sape.png" alt="">
        <p class="namasape"> Shapee </p> <br>
        <p class="maubelanja"> Mau Belanja Online ? <br>
            Ya di Shapee aja</p>
    </div>
    <div class="blok-form">
        <form class="form-daftar" action="<?php echo base_url('CDaftar/daftar_masuk') ?>" method="post">
            <P class="daftar"> Daftar </P>
            <input class="kolom1" type="text" name="username" placeholder="username ..." required="">
            <input class="kolom1" type="text" name="password" placeholder="password ..." required="">
            <button class="kolom3" type="submit">SIMPAN </button>

            <!-- <div class="kolom3">
                <p class="daftar-button"><b>SIMPAN</b></p>
            </div> -->
            <P class="to-login">ke halaman <u><b><a href="<?php echo base_url('CLogin') ?>">Log in</a></b></u></P>
        </form>
    </div>

</div>