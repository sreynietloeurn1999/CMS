<?php
    include "header.php";
?>
<!-- loop for out put image title author the date and category of post -->

    <div class="container">
   
    <?php if(have_posts()): ?>
        <?php while(have_posts()):  ?>
        <?php the_post()?><br>
          <!-- use teitle for link to detail information -->
                <h3><a href="<?php the_permalink() ?>"><h3>The title:<?php the_title();?></h3></a></h3>
            
        <!-- query the author date and category of post -->
            <h4 class="text-center">           
                Writen by <?php the_author();?>, Date: <?php the_date();?>,
                The category:
                <?php 
                $caters = get_the_category();
                $output = "";
                if($caters){
                    foreach($caters as $cater) {
                        $output = '<a href="'.get_category_link($cater->item_id).'">'.$cater->cat_name.'</a>';
                    }
                }
                echo $output;
                ?>                
            </h4 >

            <!-- to hide some information of page index -->
            <?php the_excerpt();?>

            <!-- query image form post -->
            <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?><br><br><br>
            <?php endif ?>
            <!-- use link to show detail information of post -->

            <a class="btn btn-outline-info" href="<?php the_permalink()?>">Read More</a>
        <?php endwhile ?>
    <?php endif ?>
    </div>

    <!-- footer -->
    <div class="jumbotron mb-0 mt-5" style="background:#84D1FF;">
        <h1 class="text-center">Create By Sreyniet Loeurn</h1>
        <p class="text-center">This is the amazing website!!!!</p>
    </div>

</body>
</html>