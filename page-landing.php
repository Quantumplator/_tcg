<?php
/**
 * Template Name: Welcome
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcg
 */

get_header('landing'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="landing-container">
        <div class="landing-inner">
          <h1>Patience Is A Virtue</h1>
          <h2>&amp; We're Extremely Virtuous.</h2>
        </div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('landing'); ?>
