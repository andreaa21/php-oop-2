<html>

<body>

    <main>
        <div class="container p-5">
            <div class="row d-flex flex-wrap">
                <?php foreach ($productList as $product) : ?>
                    <div class="col m-3">
                        <div class="x-card p-3 d-flex flex-column justify-content-between">

                            <div class="card-image h-50">
                                <img src="<?php echo $product->image ?>" alt="">
                            </div>

                            <div class="card-text d-flex justify-content-between">
                                <span><strong><?php echo $product->brand ?></strong></span>
                                <span><?php echo $product->name ?></span>
                                <span>&euro;<?php echo $product->price ?></span>
                            </div>
                            <div class="icon w-25">
                                <img src="<?php echo $product->category->icon ?>" alt="">
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>

    </main>
</body>

</html>