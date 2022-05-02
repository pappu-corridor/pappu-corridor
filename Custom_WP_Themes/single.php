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
        
        
<section class="blog-details">
            <div class="container">
                <div class="row">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            
                    <div class="col-lg-8">
                        <div class="blog-four__single">
                            <div class="blog-four__date">
                                <span>
                                            <?php echo get_the_date('M'); ?> <br>
                                            <?php echo get_the_date('d'); ?>
                                        </span>
                            </div><!-- /.blog-four__date -->
                            <div class="blog-four__image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Awesome Image">
                            </div><!-- /.blog-four__image -->
                            <div class="blog-four__content">
                                <div class="blog-four__meta">
                                    <a><?php the_author(); ?></a>
                                    <span class="blog-four__meta-sep">_</span><!-- /.blog-four__meta-sep -->
                                    <a><?php the_category(', ') ?></a>
                                    <span class="blog-four__meta-sep">_</span><!-- /.blog-four__meta-sep -->
                                    <a><?php global $post; echo $post->comment_count; ?> Comments</a>
                                </div><!-- /.blog-four__meta -->
                                <h3 class="blog-four__title"><?php the_title(); ?></h3><!-- /.blog-four__title -->
                                        <?php the_content(); ?>                                
                             </div><!-- /.blog-four__single -->
                    </div>
                    </div>

        <?php endwhile; endif; ?>
        <div class="col-lg-4">
            <?php dynamic_sidebar( 'sidebar' ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>