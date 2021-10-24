<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/categories/1">
                            <img class="product-img img-responsive center-block" src='/img/categories/roeitrainer.jpg'/>
                        </a>
                        <div class="card-title mb-3">Roeitrainer</div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/categories/2">
                            <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer.jpg'/>
                        </a>
                        <div class="card-title mb-3">Crosstrainer</div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/categories/3">
                            <img class="product-img img-responsive center-block" src='/img/categories/hometrainer.jpg'/>
                        </a>
                        <div class="card-title mb-3">Hometrainer</div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/categories/4">
                            <img class="product-img img-responsive center-block" src='/img/categories/loopband.jpg'/>
                        </a>
                        <div class="card-title mb-3">Loopband</div>
                    </div>

                </div>
            </div>
    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>

