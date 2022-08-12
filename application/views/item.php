<div>
    <?php include 'template/header.php'; ?>
</div>

<style>
    .blok-content {
        width: 1200px;
        height: 600px;
        border: 1px solid lightblue;
        margin: 20px auto;
    }

    .blok-contentkiri {
        width: 500px;
        height: 600px;
        border: 1px solid lightblue;
        display: inline-block;
    }

    .blok-contentkanan {
        width: 692px;
        height: 600px;
        border: 1px solid lightblue;
        display: inline-block;
    }

    .img-content {
        width: 450px;
        height: 450px;
        /* border: 1px solid lightblue; */
        padding: 25px;
        /* vertical-align: top; */
        /* position: absolute; */
        display: block;
    }

    .img-tumbnails {
        width: 500px;
        height: 100PX;
        /* border: 1px solid lightblue; */
        /* position: absolute; */
        display: block;
        /* padding: 5px; */
    }

    .img-tumbnails2 {
        margin: auto 11px;
    }
</style>

<div class="blok-content">
    <div class="blok-contentkiri">
        <div class="img-content">
            <img src="<?php echo base_url() ?>assets/sampel.png" width="450px" alt="">
        </div>
        <div class="img-tumbnails">
            <?php for ($i = 0; $i <= 3; $i++) : ?>
                <img class="img-tumbnails2" src="<?php echo base_url() ?>assets/sampel.png" width="100px" alt="">
            <?php endfor; ?>
        </div>

    </div>
    <div class="blok-contentkanan">

    </div>
</div>
<div>
    <?php include 'template/footer.php'; ?>
</div>