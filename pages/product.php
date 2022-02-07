<?php include 'header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['img']; ?> " alt="" class="card-img-top" style="height: 300px"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product['title']; ?></h3>
                            <h4><?php echo $product['price']; ?></h4>
                            <hr/>
                            <a href="action.php?pages=detail&&id=<?php echo $product['id']; ?>  "class="btn btn-outline-success">Read More</a>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>


