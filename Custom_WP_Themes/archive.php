<?php get_header(); ?>

<section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title"><?php the_archive_title();?> </h2>
                <ul class="list-unstyled thm-breadcrumb text-center">
                    <li><a href="<?php echo get_site_url();?>">Home</a></li>
                    <li><?php the_archive_title();?></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section>
        
        
<section class="blog-one">
            <div class="container">
                <div class="row">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
				<div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <a href="<?php the_permalink(); ?>"><i class="egypt-icon-add"></i><!-- /.egypt-icon-add --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <div class="blog-one__top">
                                    <div class="blog-one__date">
                                        <span>
                                            <?php echo get_the_date('M'); ?> <br>
                                            <?php echo get_the_date('d'); ?>
                                        </span>
                                    </div><!-- /.blog-one__date -->
                                    <div class="blog-one__meta">
                                        <a><?php the_author(); ?></a>
                                        <a><?php the_category(', ') ?></a>
                                    </div><!-- /.blog-one__meta -->
                                </div><!-- /.blog-one__top -->
                                <h3 class="blog-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!-- /.blog-one__title -->
                                <a href="<?php the_permalink(); ?>" class="blog-one__link">Read More <span>+</span></a>
                                <!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div>
			</div>
			<?php endwhile; ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center pagination_nav">
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>