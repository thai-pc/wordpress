<?php get_header();
echo '<pre>';
var_dump($wp_query);
echo '</pre>';
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div>
            Đăng lúc
            <a href="<?php echo get_permalink(); ?>">
                <time datetime="<?php echo get_the_date('c') ?>"><?php echo get_the_date() ?></time>
            </a>
            Bởi <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                <?php echo get_the_author() ?>
            </a>
        </div>
        <div>
            <?php the_excerpt() ?>
        </div>
        <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            Đọc thêm <span class="u-screen-reader-text">Về <?php the_title() ?></span>
        </a>
    <?php }
    the_posts_pagination();
} else { ?>
    <p>Xin lỗi, không tìm thấy bài viết nào</p>
<?php }

get_footer(); ?>
