<?php
include('includes/config.php');


$page_title = "Home Page";
$meta_description = "Home page description blogging website";
$meta_keywords = "php, css, html, reactjs";


include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-white">Category</h3>
                <div class="underline"></div>
            </div>

            
                <?php
                $homeCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 12";
                $homeCategory_run = mysqli_query($con, $homeCategory);


                if(mysqli_num_rows($navbarCategory_run) > 0)
                {
                   foreach($homeCategory_run as $homeCateItem)
                   {
                       ?>
                            <div class="col-md-3 mb-4">
                            <a class="text-decoration-none" href="category.php?title=<?= $homeCateItem['slug']; ?>">
                                <div class="card card-body">
                                <?= $homeCateItem['name']; ?>
                                </div>
                            
                            </div>
                        </a>

                       <?php
                   }
                }
               ?>
           
        </div>
    </div>
</div>
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">History of Web</h3>
                <div class="underline"></div>
                <p>
                where the Web first started. While employed at CERN in 1989, British scientist Tim Berners-Lee created the World Wide Web (WWW). To meet the need for automated information-sharing between scientists in universities and institutes around the world, the Web was initially designed and developed.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">Latest Post</h3>
                <div class="underline"></div>

                <?php
                $homePosts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 12";
                $homePosts_run = mysqli_query($con, $homePosts);


                if(mysqli_num_rows($homePosts_run) > 0)
                {
                   foreach($homePosts_run as $homePostItem)
                   {
                       ?>
                            <div class="mb-4">
                            <a class="text-decoration-none" href="post.php?title=<?= $homePostItem['slug']; ?>">
                                <div class="card card-body bg-light">
                                <?= $homePostItem['name']; ?>
                                </div>
                            
                            </div>
                        </a>

                       <?php
                   }
                }
               ?>

            </div>
            <div class="col-md-3">
                <div class="card-header">
                    <h4>Reach Us</h4>
                </div>
                <div class="card-body">
                    info@yccombinator.com
                </div>
            </div>
           
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>