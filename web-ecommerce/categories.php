<?php 
    include('functions/userfunctions.php');

    include('includes/header.php'); 
 
    
?>
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home/Collections</h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Collections</h1>
                <hr>
                <div class="row">
                    <?php
                        $categories = getAllActive('categories');
                        if(mysqli_num_rows($categories) > 0)
                        {
                            foreach($categories as $item)
                            {
                                ?>
                                <div class="col-md-4 mb-2">
                                    <a href="products.php?category=<?= $item['slug']; ?>">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="uploads/<?= $item['image']; ?>" alt="Category Image" class="w-100" height="200px">
                                                <h4 class="text-center"><?= $item['name']; ?></h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <?php
                            }
                        }
                        else
                        {
                            echo "Our collection is avaliable";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<?php include('includes/footer.php'); ?>
