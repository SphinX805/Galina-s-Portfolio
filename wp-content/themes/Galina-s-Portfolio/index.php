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

    <div class="lenta">
    <!-- Начало первой страницы main-block -->
    <div class="main-block-page">
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

        <!-- Конец 1-ой страницы main-block -->


        <div class="main-block-page"> <!--блок Услуги -->
            Услуги
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, consectetur quia. Rerum labore earum quia pariatur, aliquid vero delectus, ab laborum accusamus vel repellendus a, dolor quaerat! Beatae voluptate corporis, velit, tempore esse vitae tempora culpa officia sint aliquid harum fuga maxime facilis ducimus aliquam praesentium distinctio! Quasi eaque commodi, tempora assumenda est, voluptate alias possimus necessitatibus veniam voluptates dolor culpa accusantium minima at quas aut sit atque sunt sequi quo suscipit numquam omnis officiis ullam. Impedit cumque est porro delectus quasi at, architecto cupiditate odit pariatur voluptate totam quam ex. Rerum, cum sapiente est aut qui impedit iusto temporibus.</p>
            <span class="back-B">Назад</span>
        </div>


        <div class="main-block-page">
            Кейсы
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas repudiandae, minus ratione architecto repellendus sunt beatae ullam doloremque provident voluptates necessitatibus sit eveniet quos molestiae voluptatem facilis aspernatur nobis harum? Dolores atque sapiente aut, esse perspiciatis eum ratione omnis tempore ex ipsum praesentium molestias harum tenetur dignissimos fugiat possimus recusandae laborum aliquid accusantium vero doloribus cupiditate est architecto obcaecati. Earum vero nam eos mollitia eius excepturi quis ab architecto nisi explicabo dolorem officia cum enim aut maiores, sit provident. Adipisci, minima eos accusamus sit quaerat repellat libero, voluptatibus architecto ex quibusdam recusandae alias placeat quos nostrum similique temporibus. Accusantium.</p>
            <span class="back-B">Назад</span>
        </div>

        <div class="main-block-page">
            Портфолио
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, eius, quam earum dolor perferendis accusamus sint nulla eligendi voluptates suscipit amet sed. Laborum saepe quis nesciunt sint soluta quod vel adipisci doloribus est accusantium assumenda facere ipsum, debitis perferendis, mollitia maxime praesentium quas fugit aspernatur quos voluptate? Amet aspernatur dolorem ut deserunt, facilis nam porro consequatur commodi quasi voluptatum voluptatem blanditiis eveniet repellendus omnis, ipsam suscipit modi sint a optio voluptate expedita temporibus labore delectus. Iste corrupti eum ipsum omnis maiores, quidem hic ad. Voluptate dolore doloribus, modi eveniet sed fuga, soluta voluptatem odit quas labore maxime. Commodi, magni delectus.</p>
            <span class="back-B">Назад</span>
        </div>

    </div> <!-- конец ленты -->

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