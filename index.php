  <?php get_header(); ?>
    <div class="container content">
        <div class="main block">
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post();?>
                  <?php get_template_part('content', get_post_format()); ?>
              <?php endwhile; ?>
              <?php else: ?>
                  <?php wpautop('Sorry, No post we are found.'); ?>
            <?php endif; ?>
        </div>
        <div class="side">
          <?php if (is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar')?>
          <?php endif; ?>

            <!-- <div class="block">
                <h3>Sidebar head</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nemo quae, soluta quibusdam fugit, perspiciatis officiis nesciunt facilis perferendis temporibus molestias veniam. Unde aliquid tempora consequuntur! Nemo laboriosam, quibusdam dolorem?</p>
                <a href="#" class="button">More</a>
            </div> -->
        </div>
    </div>
<?php get_footer(); ?>
