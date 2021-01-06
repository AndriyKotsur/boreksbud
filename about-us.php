<?php require_once('./includes/functions.php')?>
<?php setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">
    <?php getHeader();?>
    <div class="about-us-header">
        <h1 class="about-us-header__title section-title"><?=ABOUT['title']?></h1>
    </div>
    <div class="about-us">
        <p class="about-us__text"><?=ABOUT['text'][0]?></p>
        <p class="about-us__text"><?=ABOUT['text'][1]?></p>
        <p class="about-us__text"><?=ABOUT['text'][2]?></p>
        <h3 class="about-us__title"><?=ABOUT['subTitle'][0]?></h3>
        <ul class="about-us-list">
            <li class="about-us-list__item"><?=ABOUT['list'][0]?></li>
            <li class="about-us-list__item"><?=ABOUT['list'][1]?></li>
            <li class="about-us-list__item"><?=ABOUT['list'][2]?></li>
            <li class="about-us-list__item"><?=ABOUT['list'][3]?></li>
            <li class="about-us-list__item"><?=ABOUT['list'][4]?></li>
            <li class="about-us-list__item"><?=ABOUT['list'][5]?></li>
        </ul>
        <p class="about-us__text"><?=ABOUT['text'][3]?></p>
        <div id="gallery-slider" class="about-us-gallery">
            <h2 class="about-us-gallery__title"><?=ABOUT['subTitle'][1]?></h2>
            <div class="about-us-slider">
                <div class="about-us-slider-item slidesItem">
                    <img src="./public/images/gallery/gallery-1.jpg" alt="Slider image" class="about-us-slider__image">
                </div>
                <div class="about-us-slider-item slidesItem">
                    <img src="./public/images/gallery/gallery-2.jpg" alt="Slider image" class="about-us-slider__image">
                </div>
                <div class="about-us-slider-item slidesItem">
                    <img src="./public/images/gallery/gallery-3.jpg" alt="Slider image" class="about-us-slider__image">
                </div>
                <div class="about-us-slider-item slidesItem">
                    <img src="./public/images/gallery/gallery-4.jpg" alt="Slider image" class="about-us-slider__image">
                </div>
                <div class="about-us-slider-item slidesItem">
                    <img src="./public/images/gallery/gallery-5.jpg" alt="Slider image" class="about-us-slider__image">
                </div>
                <div class="about-us-slider-item slidesItem">
                    <img src="./public/images/gallery/gallery-6.jpg" alt="Slider image" class="about-us-slider__image">
                </div>
                <a class="slider-step__prev about-us-slider-step__prev prevBtn"></a>
                <a class="slider-step__next about-us-slider-step__next nextBtn"></a>
            </div>
        </div>
    </div>
    <?php getFooter();?>
</body>

</html>