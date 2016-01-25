<?php
    $homepage_fields = CFS() -> get();
    $banner_images = $homepage_fields['banner_images'];
    $news_desc = $homepage_fields['news']
    $about_me_desc = $homepage_fields['about_me'];
    $about_me_img = $homepage_fields['about_me_img'];
    $achievements_desc = $homepage_fields['achievements'];
    $music_desc = $homepage_fields['music'];
    $gallery_desc = $homepage_fields['gallery'];
    $contact_desc = $homepage_fields['contact'];
    $contact_img = $homepage_fields['contact_img'];
?>

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

<section id="news" class="section news">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--white">Aktualności</h2>
        </div>
    </div>
</section>

<section id="about" class="section about">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--grey">O mnie</h2>
            <?php if ($about_me_desc != ''): ?>
                <p class="section-paragraph section-paragraph--grey">
                    <?php echo $about_me_desc; ?>
                </p>
            <?php endif; ?>

            <img class="section__image" src="<?php echo $about_me_img; ?>" alt="">
        </div>
    </div>
</section>

<section id="achivements" class="section achivements">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--white">Osiągnięcia</h2>
            <?php if ($achievements_desc != ''): ?>
                <p class="section-paragraph section-paragraph--white">
                    <?php echo $achievements_desc; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="music" class="section music">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--grey">Muzyka</h2>
            <?php if ($music_desc != ''): ?>
                <p class="section-paragraph section-paragraph--grey">
                    <?php echo $music_desc; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="gallery" class="section gallery">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--white">Galeria</h2>
            <?php if ($gallery_desc != ''): ?>
                <p class="section-paragraph section-paragraph--white">
                    <?php echo $gallery_desc; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="contact" class="section contact">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--grey">Kontakt</h2>
            <?php if ($contact_desc != ''): ?>
                <p class="section-paragraph section-paragraph--grey">
                    <?php echo $contact_desc; ?>
                </p>
            <?php endif; ?>

            <img class="section__image" src="<?php echo $contact_img; ?>" alt="">
        </div>
    </div>
</section>
