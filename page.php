<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php while( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <time class="tiny-text entry-date"><?php echo get_the_date(); ?></time>
            <?php the_title( '<h1 class="heading-big entry-title">', '</h1>' ); ?>
          </header>

          <?php if( has_post_thumbnail() ) : ?>
            <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </main>
  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
