<!-- including header file -->
<?php include '../templates/header.php'; ?>

<!-- including autoloader file -->

<?php include '../autoload/autoload1.inc.php';

$dataPost = new DataPost();

?>

<!-- portfolio section starts -->

<div class="container portfolio-container p-5 text-center">
<div class="portfolio-categories text-center">

<div class="portfolio-header">
    <div class="button-section">
        <a href=<?php echo APP_URL.'post/addPortfolio.php'; ?> class="btn btn-add">Add Portfolio</a>
    </div>
</div>
   
</div>
<div class="main-portfolio">
<div class="row">
    <!-- php code here -->
    <?php
if ($dataPost->showPorfolio()) {
    foreach ($dataPost->showPorfolio() as $data_portfolio) { ?>
    
    <div class="col col-lg-3 col-md-6 col-sm-12 portfolio-block">
        <img src="" alt="portfolio-img">
       <h4><?php echo $data_portfolio['portfolio_title']; ?></h4>
       <p>Created by: <?php echo $data_portfolio['user_name']; ?></p>
       <a href=<?php echo $data_portfolio['portfolio_link']; ?> class="portfolio-link">See Portfolio</a>
       <p class="text-right">Created at: <?php echo $data_portfolio['created_at']; ?></p>
       </div>
    
    <?php
    }
} else { ?>

<p class="text-danger h1">Empty Post</p>

<?php
}
?>
    
       
    </div>
</div>
</div>
    
</div>

<!-- portfolio section ends -->

<!-- including footer file -->

<?php

include '../templates/footer.php';

?>