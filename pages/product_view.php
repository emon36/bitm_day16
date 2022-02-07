<?php include 'header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src=" assets/img/<?php echo $product['img']; ?> " alt="" class="card-img-top"/>
            </div>
            <div class="col-6">
                <div class="card-body py-0">
                    <h5 class="card-title font-weight-bold"> <?php echo $product['title']; ?> </h5>
                    <p class="card-text text-secondary p-size mb-0"><?php echo $product['Description']; ?></p>
                    <hr>
                    <p class="card-text"> Category: <?php echo $product['category']; ?></p>
                    <p class="card-text"> Brand: <?php echo $product['Brand']; ?></p>
                    <p class="card-text"><sub><?php echo $product['price']; ?></sub></p>
                </div>

            </div>
        </div>
    </div>
</section


<?php include 'footer.php' ?>



