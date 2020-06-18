<?php get_header(); ?>
<body>
    <div id="main">
                        <?php
             $posts = get_posts( array(
    'numberposts' => 1,
    'category'    => get_cat_ID("picture"),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
         
foreach( $posts as $post ){
    setup_postdata($post);
    ?>
    <img id="main-ph">
<?php
}
wp_reset_postdata(); // сброс 
?>
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

            <ul>
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
                <li><?php the_title(); ?></li>
<?php
}
wp_reset_postdata(); // сброс 
?>
            </ul>

        <span id="links">
                        <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('instagram'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <a href="#"><?php the_post_thumbnail('social'); ?></a>
<?php
}
wp_reset_postdata(); // сброс 
?>
                        <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('youtube'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <a href="#"><?php the_post_thumbnail('social'); ?></a>
<?php
}
wp_reset_postdata(); // сброс 
?>
                        <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('tiktok'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <a href="#"><?php the_post_thumbnail('social'); ?></a>
<?php
}
wp_reset_postdata(); // сброс 
?>
                        <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('mail'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <a href="#"><?php the_post_thumbnail('social'); ?></a>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </span>

        </section>

    </div>


    <div id="contButtons">
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
             $i = 0;
foreach( $posts as $post ){
    $i=$i + 1;
    $idd = "btn".$i;
    setup_postdata($post); ?>
                <span id = "<?php echo $idd; ?>"><?php the_title(); ?></span>
<?php
}
wp_reset_postdata(); // сброс 
?>
    
    </div>

    <div id="showContent">
        <div id="c1">
            <h2>Услуги</h2>
            <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('uslugi'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <p><?php the_content( $more_link_text = null, $strip_teaser = false ); ?></p>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </div>

        <div id="c2">
            <h2>Кейсы</h2>
            <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('kase'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <p><?php the_content( $more_link_text = null, $strip_teaser = false ); ?></p>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </div>

        <div id="c3">
            <h2>Портфолио</h2>
            <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('portfolio'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <p><?php the_content( $more_link_text = null, $strip_teaser = false ); ?></p>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </div>
    </div>

    <div id="awards">
        <h2>Достижения</h2>

        <div class="owl-carousel" id="owl1">
                                    <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('awards'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
                <div><?php the_post_thumbnail('awards'); ?></div>
<?php
}
wp_reset_postdata(); // сброс 
?>
        </div>

    </div>

    <div id="comm">
        <h2>Отзывы</h2>

        <!-- Карусель с отзывами -->
        <div class="owl-carousel" id="owl2">
            <!-- Начало отзыва -->
                                                <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('comment'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
    setup_postdata($post); ?>
    <div>
                <?php the_post_thumbnail('comment'); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content( $more_link_text = null, $strip_teaser = false ); ?>
            </div>
<?php
}
wp_reset_postdata(); // сброс 
?>
            <!-- Конец отзыва -->
        </div>

    </div>
    <?php get_footer(); ?>