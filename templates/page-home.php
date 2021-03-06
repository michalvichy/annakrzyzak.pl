<?php
    $homepage_fields = CFS() -> get();
    $banner_images = $homepage_fields['banner_images'];
    $news_desc = $homepage_fields['news'];
    $about_me_desc = $homepage_fields['about_me_short'];
    $about_me_img = $homepage_fields['about_me_img'];
    $about_me_long = $homepage_fields['about_me_long'];
    $achievements_desc = $homepage_fields['achievements'];
    $music_desc = $homepage_fields['music'];
    $music_soundcloud = $homepage_fields['music_soundcloud'];
    $gallery_desc = $homepage_fields['gallery'];
    $contact_desc = $homepage_fields['contact'];
    $contact_img = $homepage_fields['contact_img'];
?>

<div id="home" class="anchor"></div>
<section class="homepage-banner">
    <div class="container">
        <div class="owl-carousel js-banner-carousel">
            <?php foreach ($banner_images as $image):
                $image_url = $image['banner_image'];
            ?>
                <img src="<?php echo $image_url; ?>" alt="">
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- <div id="news" class="anchor"></div>
<section class="section news">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--six-tenths">
            <h2 class="section-headline section-headline--white">Aktualności</h2>
            <?php if ($news_desc != ''): ?>
                <p class="section-paragraph section-paragraph--white">
                    <?php echo $news_desc; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section> -->

<div id="about" class="anchor"></div>
<section class="section about">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--six-tenths">
            <h2 class="section-headline section-headline--grey">O mnie</h2>
            <?php if ($about_me_desc != ''): ?>
                <p class="section-paragraph section-paragraph--grey">
                    <?php echo $about_me_desc; ?>
                </p>
            <?php endif; ?>

            <img class="section__image" src="<?php echo $about_me_img; ?>" alt="ania">

            <div class="btn__container">
                <a href="#more" class="btn btn-primary js-btn-more">Więcej</a>
            </div>

            <div id="more" class="anchor"></div>
            <div class="section__content section__content--about js-content-more">
                <?php
                    echo $about_me_long;
                ?>
            </div>
        </div>
    </div>
</section>

<div id="achivements" class="anchor"></div>
<section class="section achivements">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--six-tenths">
            <h2 class="section-headline section-headline--white">Osiągnięcia</h2>
            <?php if ($achievements_desc != ''): ?>
                <p class="section-paragraph section-paragraph--white">
                    <?php echo $achievements_desc; ?>
                </p>
            <?php endif; ?>
                <div class="achivements-carousel js-achivements">
                    <?php
                        $args = array(
                            'post_type' => 'ak_achivments',
                            'post_status' => 'publish',
                            'posts_per_page' => -1
                        );

                        $query = new WP_Query($args);

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post();
                                $post_id = $post->ID;
                                $post_fields = CFS() -> get(false, $post_id);
                                $post_img_url = $post_fields['achievement_img'];
                    ?>
                        <div class="achievements__single">
                            <a href="<?php echo $post_img_url ?>" data-lightbox="Achivements" data-title="<?php the_title(); ?>">
                                <div class="achievement__img" style="background-image:url('<?= $post_img_url ?>');"></div>
                            </a>
                        </div>
                    <?php wp_reset_query(); endwhile; endif; ?>
                </div>
            </div>
    </div>
</section>

<?php
    if ($music_soundcloud == '') {
        $music_desc = 'W trakce realizacji';
    }
?>
<div id="music" class="anchor"></div>
<section class="section music">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--six-tenths">
            <h2 class="section-headline section-headline--grey">Muzyka</h2>
            <?php if ($music_desc != ''): ?>
                <p class="section-paragraph section-paragraph--grey">
                    <?php echo $music_desc; ?>
                </p>
            <?php endif; ?>
            <?php if ($music_soundcloud != ''): ?>
                <div class="section__content">
                    <?php echo do_shortcode('[soundcloud]' . $music_soundcloud . '[/soundcloud]'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<div id="gallery" class="anchor"></div>
<section class="section gallery">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--six-tenths">
            <h2 class="section-headline section-headline--white">Galeria</h2>
            <?php if ($gallery_desc != ''): ?>
                <p class="section-paragraph section-paragraph--white">
                    <?php echo $gallery_desc; ?>
                </p>
            <?php endif; ?>
            <div class="gallery-container js-gallery">
                <?php
                    $args = array(
                        'post_type' => 'ak_gallery',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);

                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                            $album_id = $post->ID;
                            $album_title = get_the_title();
                            $album_fields = CFS() -> get(false, $album_id);
                            $album_main_photo = $album_fields['gallery_main_photo'];
                            $album_photos = $album_fields['gallery_album'];
                ?>
                <div class="single-album">
                    <div class="single-album__cover" data-title="<?= $album_title; ?>">
                        <a href="<?= $album_main_photo; ?>"
                            data-lightbox="<?= $album_title; ?>"
                            data-title="<?= $album_title; ?>"
                            style="background-image: url('<?= $album_main_photo; ?>');"
                            class="single-album__link"
                        ></a>
                    </div>

                    <div class="single-album__photos">
                        <?php foreach ($album_photos as $photo) :
                            $photo_url = $photo['gallery_album_photo'];
                        ?>
                            <a href="<?= $photo_url; ?>" data-lightbox="<?= $album_title; ?>" data-title="<?= $album_title; ?>">
                                <img src="<?= $photo['gallery_album_photo']; ?>" alt="single-gallery-photo">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php wp_reset_query(); endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<div id="contact" class="anchor"></div>
<section class="section contact">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--six-tenths">
            <h2 class="section-headline section-headline--grey">Kontakt</h2>
            <?php if ($contact_desc != ''): ?>
                <p class="section-paragraph section-paragraph--grey">
                    <?php echo $contact_desc; ?>
                </p>
            <?php endif; ?>

            <img class="section__image" src="<?php echo $contact_img; ?>" alt="">

            <div class="btn__container">
                <button class="btn btn-primary js-show-contactform">Napisz</button>
            </div>

            <div class="contact-form__container js-contactform">
                <?php echo do_shortcode('[contact-form-7 id="22" title="Formularz kontaktowy"]'); ?>
            </div>
        </div>
    </div>
</section>
