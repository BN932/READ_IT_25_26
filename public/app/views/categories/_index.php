<?php include_once '../app/models/categoriesModel.php';
$categories = \App\Models\CategoriesModel\findAll($connection);?>

<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <?php foreach($categories as $category) : ?>
                <li><a href="#"><?php echo $category['name']; ?> <span class="ion-ios-arrow-forward"></span></a></li>
                <?php endforeach; ?>
              </div>
            </div>