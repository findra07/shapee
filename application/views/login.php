<link rel="icon" href="<?php echo base_url() ?>assets/sape1.png">
<title>Shapee</title>
<style>
    .blok-login {
        width: 100%;
        height: 550px;
        border: 1px solid lightblue;
        margin-top: 20px;
        background-color: lightblue;
        /* opacity: 80%; */
    }

    .blok-loginlogo {
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

    .form-login {
        width: 400px;
        height: 450px;
        border: 1px solid white;
        border-radius: 10px;
        margin-top: 50px;
        background-color: white;
    }

    .login {
        font-size: 25px;
        font-family: Maiandra GD;
        color: black;
        margin-left: 35px;
    }

    .kolom1,
    .kolom2 {
        width: 320px;
        height: 35px;
        border: 1px solid lightblue;
        margin: auto;
        margin-top: 40px;
        vertical-align: text-top;
    }

    .kolom3 {
        width: 320px;
        height: 35px;
        border: 1px solid lightblue;
        background-color: lightblue;
        margin: auto;
        margin-top: 50PX;
    }

    .username,
    .password {
        font-size: 15px;
        font-family: Maiandra GD;
        /* text-align: center; */
        opacity: 50%;
        margin-left: 10px;
        margin-top: 8px;
    }

    .login-button {
        font-size: 15px;
        font-family: Maiandra GD;
        text-align: center;
        margin-top: 8px;
        color: white;
    }

    .lupa-pass {
        font-size: 15px;
        font-family: Maiandra GD;
        margin-left: 40px;
        margin-top: 10px;
    }

    .daftar {
        font-size: 15px;
        font-family: Maiandra GD;
        color: black;
        text-align: right;
        margin-right: 40px;
        margin-top: 40px;
        color: red;
    }

    @media (max-width:1100px) {
        .blok-loginlogo {
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
    </a>
    Log in</p>
</div>

<div class="blok-login">
    <div class="blok-loginlogo">
        <img class="logo-tengah" src="<?php echo base_url() ?>assets/sape.png" alt="">
        <p class="namasape"> Shapee </p> <br>
        <p class="maubelanja"> Mau Belanja Online ? <br>
            Ya di Shapee aja</p>
    </div>
    <form class="blok-form">
        <div class="form-login">
            <P class="login"> Log in </P>
            <div class="kolom1">
                <p class="username">Username</p>
            </div>
            <div class="kolom2">
                <p class="password">Password</p>
            </div>
            <div class="kolom3">
                <p class="login-button"><b>LOG IN</b></p>
            </div>
            <p class="lupa-pass">Lupa Password ? </p>
            <P class="daftar"><u><b><a href="<?php echo base_url('CDaftar') ?>">Daftar</a></b></u></P>
        </div>
    </form>

</div>