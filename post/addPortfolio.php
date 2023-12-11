<!-- including header file -->
<?php include '../templates/header.php'; ?>

<!-- including autoloader file -->

<?php include '../autoload/autoload1.inc.php';

$dataPost = new DataPost();

?>

<!-- portfolio section starts -->

<div class="container portfolio-container p-5 text-center">
<div class="portfolio-categories text-center">
   <h1>Categories will be displayed here.</h1>
</div>
<div class="main-portfolio">
<div class="row">
 
    <form action="portfolio.php" method="post">
       
    </form>
       
    </div>
</div>
</div>
    
</div>

<!-- portfolio section ends -->

<!-- including footer file -->

<?php

include '../templates/footer.php';

?>