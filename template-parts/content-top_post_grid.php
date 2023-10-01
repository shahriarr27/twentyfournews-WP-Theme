<div class="row mx-0">
        <?php get_template_part('template-parts/content','left-post-grid'); ?>
        <div class="col-md-6">
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'post', // Change to your custom post type if needed
                        'posts_per_page' => 4, // Number of posts to display per page
                        'offset' => 1, // Number of posts to skip (offset)
                    );
                    $query = new WP_Query($args);
                ?>
                <?php while($query->have_posts()){ $query->the_post();?>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img src="<?php the_post_thumbnail_url()?>" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2 p-3">
                                <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp; <?php the_time('M d, Y')?></a></div>
                                <div class=""><a href="<?= get_the_permalink()?>" class="fh5co_good_font_2"><?php the_title() ?></a></div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>