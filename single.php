
<?php
    include "header.php";
?>


<!-- display image form post -->
    <div class="container">
        <div class="row">
            <div class="col-5">
            <?php if(have_posts()):?>
        <?php while(have_posts()):?>
        <?php the_post();
        ?>     
        

        <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail();?>
            <?php else: echo "not found";?>
            <?php endif;?>
         
            <?php endwhile;?>
        <?php endif?>
    <!-- display content in post   -->
            </div>
            <div class="col-7">
            <div class="main">
            <?php the_content();?>
             
            </div>
            </div>
        </div>
    </div>
    
      <!-- footer -->
    <div class="jumbotron mb-0 mt-5" style="background:#84D1FF;">
        <h1 class="text-center">Create By Sreyniet Loeurn</h1>
        <p class="text-center">This is the amazing website!!!!</p>
    </div>

    </body>
</html>