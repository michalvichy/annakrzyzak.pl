<?php
    $homepage_fields = CFS() -> get();
    $banner_images = $homepage_fields['banner_images'];
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
            <p class="section-paragraph section-paragraph--grey">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed leo hendrerit,
                venenatis mauris vel, luctus magna. Donec mi ipsum, accumsan id odio vitae, pharetra dapibus quam.
                Sed viverra tellus in ante vulputate feugiat. Proin purus nisl, aliquam sit amet ligula et, blandit condimentum enimdevice.
            </p>
        </div>
    </div>
</section>

<section id="achivements" class="section achivements">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--white">Osiągnięcia</h2>
        </div>
    </div>
</section>

<section id="music" class="section music">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--grey">Muzyka</h2>
            <p class="section-paragraph section-paragraph--grey">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed leo hendrerit, venenatis mauris vel, luctus magna.
                Donec mi ipsum, accumsan id odio vitae, pharetra
            </p>
        </div>
    </div>
</section>

<section id="gallery" class="section gallery">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--white">Galeria</h2>
            <p class="section-paragraph section-paragraph--white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
    </div>
</section>

<section id="contact" class="section contact">
    <div class="grid grid--center">
        <div class="grid__item tab--three-quarters desk--three-fifths desk-med--one-half">
            <h2 class="section-headline section-headline--grey">Kontakt</h2>
            <p class="section-paragraph section-paragraph--grey">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed leo hendrerit
            </p>
        </div>
    </div>
</section>
