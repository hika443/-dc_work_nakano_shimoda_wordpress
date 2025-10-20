  <?php get_header(); ?>
  <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
                <?php if(have_posts()): while(have_posts()): the_post();?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
	        </div>
            
            <div id="cont_right">
                <div class="sub-menu">
                    <h3>SERVICE</h3>
                    <h4>Web事業</h4>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/service/#s1">ホームページ制作</a></li>
                        <li><a href="<?php echo home_url(); ?>/service/#s2">エンジニア派遣</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>