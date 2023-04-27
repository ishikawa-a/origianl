<?php get_header(); ?>
<div class="content_wrap">
  <div class="container with_sidebar">
    <main class="main">
      <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
      ?>
      <h1 class="page_title"><?php echo $catname; ?></h1>
      <?php if(have_posts()): ?>
        <ul class="category-list">
        <?php while(have_posts()):the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>        
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
