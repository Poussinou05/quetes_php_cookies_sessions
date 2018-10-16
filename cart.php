<?php
session_start();

require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach($_SESSION['panier'] as $cookie){?>
            <div>
                <figure class="text-center">
                <img src="assets/img/product-<?php echo $cookie ?>.jpg">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                    </figcaption>
                </figure>
            </div>

        <?php
        };
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
