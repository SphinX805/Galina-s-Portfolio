<?php get_header(); ?>

<body>
                <?php
             $posts = get_posts( array(
    'numberposts' => 1,
    'category'    => get_cat_ID('picture'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
            <?php the_post_thumbnail('main_pic_size'); ?>
<?php
}
wp_reset_postdata(); // сброс 
?>
    <div id="main-block">
        <section>
            <?php
             $posts = get_posts( array(
    'numberposts' => 1,
    'category'    => get_cat_ID('name'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <h2><?php the_title(); ?></h2>
<?php
}
wp_reset_postdata(); // сброс 
?>
            <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('work_special'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <h3><?php the_title(); ?></h3>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </section>

        <section>
                        <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('button_1'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <a href="#" class="button"><?php the_title(); ?></a>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </section>

        


        <section id="links">
            <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/inst.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/youtube.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/tiktok.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/mail.svg"></a>
        </section>
    </div>

    <div id="awards">
        <h3>Достижения</h3>
        <img src="<?php echo get_template_directory_uri()?>/assets/images/">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/aw2.jpg">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/aw3.jpg">
    </div>

    <div id="comments">
        <h4>Отзывы</h4>
    </div>
<?php get_footer(); ?>