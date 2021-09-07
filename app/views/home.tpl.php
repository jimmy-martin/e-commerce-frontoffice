<section>
    <div class="container-fluid">
        <div class="row mx-0">
            <?php foreach($homeCategories as $category) :?>
                <?php if($category->getHomeOrder() <= 2) :?>
                <div class="col-md-6">
                    <div class="card border-0 text-white text-center"><img src="<?= $absoluteURL ?>/<?= $category->getPicture() ?>" alt="Card image" class="card-img">
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="w-100 py-3">
                                <h2 class="display-3 font-weight-bold mb-4"><?= $category->getName() ?></h2><a href="<?= $router->generate('catalog-category', ['id' => $category->getId()]) ?>" class="btn btn-light"><?= $category->getSubtitle() ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif ?>
            <?php endforeach ?>
        <div class="row mx-0">


        <?php foreach ($homeCategories as $category) : ?>
            
            <?php if ($category-> getHomeOrder() >= 3): ?> 
            <div class="col-lg-4">
                <div class="card border-0 text-center text-white"><img src="<?= $absoluteURL ?>/<?= $category->getPicture() ?>" alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4"><?= $category->getName()?></h2><a href="<?= $router->generate('catalog-category', ['id' => $category->getId()]) ?>" class="btn btn-link text-white"><?= $category->getSubtitle()?>
                                <i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif ?> 
        <?php endforeach ?> 


        </div>
    </div>
</section>