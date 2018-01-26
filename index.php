<?php get_header(); ?>

  <div id="primary" class="l-main content-area">
    <main id="main" class="site-main" role="main">
      <?php if( have_posts() ) : ?>
        <div class="entry-list">
          <?php while( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <time class="tiny-text entry-date"><?php echo get_the_date(); ?></time>
                <?php the_title(
                  '<h2 class="heading-big entry-title"><a href="' . esc_url( get_permalink() ) . '">',
                  '</a></h2>'
                ); ?>
              </header>
              <?php if( has_post_thumbnail() ) : ?>
                <div class="entry-thumbnail">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                  </a>
                </div>
              <?php endif; ?>
              <div class="entry-content">
                <?php the_content( '<span class="btn btn-primary">Continue Reading</span>' ); ?>
              </div>
            </article><hr>
          <?php endwhile; ?>
        </div>
        <?php
          the_posts_pagination( array(
            'screen_reader_text' => 'ページネーション',
            'prev_text' => '',
            'next_text' => '',
          ) );
        ?>
      <?php else: ?>
        <section class="no-result not-found">
          <header class="entry-header">
            <h1 class="heading-big entry-title">Nothing Found</h1>
          </header>
          <div class="entry-content">
            おさがしの記事は見つかりませんでした。
          </div>
        </section>
      <?php endif; ?>
    </main>
  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
