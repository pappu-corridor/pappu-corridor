<?php get_header(); ?>

<section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title"><?php the_title(); ?></h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb text-center">
                    <li><a href="<?php echo get_site_url();?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section>
        
        
<div class="inner-content">

    <div class="page">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="content-main">
            <?php the_content(); ?>
        </div>
        
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>