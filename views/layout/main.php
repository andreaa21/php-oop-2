<main>
    <div class="container bg-dark text-white">
        <div class="row d-flex flex-wrap">
            <?php foreach ($productList as $product) : ?>

                <div class="col x-card">
                    <div class="card-image">
                        <img class="w-25" src="<?php echo $product->image ?>" alt="">
                    </div>
                    <div class="card-text d-flex flex-column">
                        <span><strong><?php echo $product->brand ?></strong></span>
                        <span><?php echo $product->name ?></span>
                        <span>&euro;<?php echo $product->price ?></span>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>

</main>