<?php
/*
Template Name: oppekava-page
*/
get_header(); ?>

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    
    <div id="oppekava-content" class="container-fluid page-content table-list-page">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'oppekava-category' ) );?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-6 col-xl-5" data-aos="flip-left" data-aos-easing="ease-out-cubic">
                                    <h3><?php the_title();?></h3>
                                    <div class="table">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                        <?php 
                        endwhile; 
                        ?>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>