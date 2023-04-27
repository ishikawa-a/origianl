<?php get_header(); ?>
<div class="content_wrap search">
    <div class="container">
      <main class="main">
        <h1 class="page_title">検索結果</h1>
        <?php if (have_posts()): ?>
        <p class="search_results">
        <?php
          if (isset( $_GET[ 's' ] ) && empty( $_GET[ 's' ] )) {
            echo 'キーワード未入力';
          } else {
            echo '“' . $_GET[ 's' ] . '”の検索結果 ' . $wp_query->found_posts . '件';
          }
        ?>
        </p>
        <ul class="search_results-list">
          <?php while(have_posts()): the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            <?php the_excerpt(); ?>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php else: ?>
        <p class="search_results">該当する記事が見つかりませんでした。</p>
        <?php endif; ?>
        <div class="test-pagenavi"><?php the_posts_pagination(); ?></div>

        <nav class="navigation pagination" role="navigation" aria-label="投稿">
    <h2 class="screen-reader-text">投稿ナビゲーション</h2>
    <div class="nav-links">
        <ul class="page-numbers">
            <li><a class="prev page-numbers" href="http://localhost:80/archives/">前へ</a></li>
            <li><a class="page-numbers" href="http://localhost:80/archives/">1</a></li>
            <li><span aria-current="page" class="page-numbers current">2</span></li>
            <li><a class="page-numbers" href="http://localhost:80/archives/page/3">3</a></li>
            <li><a class="page-numbers" href="http://localhost:80/archives/page/4">4</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="http://localhost:80/archives/page/6">6</a></li>
            <li><a class="next page-numbers" href="http://localhost:80/archives/page/3">次へ</a></li>
        </ul>
    </div>
</nav>
<div class="wp-pagenavi">
  <span class="pages">2 / 4</span>
  <a class="previouspostslink" rel="prev" href="/example.com/news/">«</a>
  <a class="page smaller" title="Page 1" href="/example.com/news/">1</a>
  <span class="current">2</span>
  <a class="page larger" title="Page 3" href="/example.com/news/page/3/">3</a>
  <a class="page larger" title="Page 4" href="/example.com/news/page/4/">4</a>
  <a class="nextpostslink" rel="next" href="/example.com/news/page/3/">»</a>
</div>
        <?php the_posts_pagination( array(
          'mid_size' => 2,
          'prev_text' => __( '&lt;' ),
          'next_text' => __( '&gt;' ),
        ) ); ?>
        <nav class="pagination">
          <ul>
            <li class="pagination-first"><a href="#">«</a></li>
            <li class="pagination-prev"><a href="#">‹</a></li>
            <li class="pagination-current"><span>1</span></li>
            <li class="pagination-current"><a href="#">2</a></li>
            <li class="pagination-current"><a href="#">3</a></li>
            <li class="pagination-current"><a href="#">4</a></li>
            <li class="pagination-current"><a href="#">5</a></li>
            <li class="pagination-current">…</li>
            <li class="pagination-current"><a href="#">14</a></li>
            <li class="pagination-next"><a href="#">›</a></li>
            <li class="pagination-last"><a href="#">»</a></li>
          </ul>
        </nav>
      </main>
    </div>
  </div>  

<?php get_footer(); ?>
