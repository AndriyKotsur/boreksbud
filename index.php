<?php require_once('./includes/functions.php')?>
<?php $langLink = setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">
    <?php getHeader();?>
    <div class="section-slider">
        <div class="section-slider-item slidesItem">
            <img src="./public/images/sliders/slider-1.jpg" alt="Slider image" class="section-slider__image">
            <div class="section-slider-content">
                <h1 class="section-slider-content__title section-title"><?=SLIDER[0]?></h1>
                <a href="./construction<?=$langLink;?>" class="btn-link section-slider-content__link"><?=BUTTONS[1]?></a>
            </div>
        </div>
        <div class="section-slider-item slidesItem">
            <img src="./public/images/sliders/slider-2.jpg" alt="Slider image" class="section-slider__image">
            <div class="section-slider-content">
                <h1 class="section-slider-content__title section-title"><?=SLIDER[1]?></h1>
                <a href="./planning<?=$langLink;?>" class="btn-link section-slider-content__link"><?=BUTTONS[1]?></a>
            </div>
        </div>
        <div class="section-slider-item slidesItem">
            <img src="./public/images/sliders/slider-3.jpg" alt="Slider image" class="section-slider__image">
            <div class="section-slider-content">
                <h1 class="section-slider-content__title section-title"><?=SLIDER[2]?></h1>
                <a href="./repair<?=$langLink;?>" class="btn-link section-slider-content__link"><?=BUTTONS[1]?></a>
            </div>
        </div>
        <a class="slider-step__prev section-slider-step__prev prevBtn"></a>
        <a class="slider-step__next section-slider-step__next nextBtn"></a>
    </div>

    <div class="section-description">
        <p class="section-description__text"><?=DESCR[0]?></p>
        <p class="section-description__text"><?=DESCR[1]?></p>
        <a href="./about-us<?=$langLink;?>" class="btn-link section-description__link"><?=BUTTONS[0]?></a>
    </div>

    <div class="section-services">
        <div class="container">
            <h2 class="section-services__title section-title"><?=SERVICES['title']?></h2>
            <p class="section-services__text section-text"><?=SERVICES['descr']?></p>
            <div class="section-services-list">
                <div class="section-services-list__item">
                    <div class="section-services-image-wrapper">
                        <img src="./public/images/services/services-1.jpg" alt="Services image" class="section-services__image">.
                    </div>
                    <span class="section-services__descr"><?=SERVICES['items'][0]?></span>
                    <a href="./construction<?=$langLink;?>" class="btn-link section-services__link"><?=BUTTONS[1]?></a>
                </div>
                <div class="section-services-list__item">
                    <div class="section-services-image-wrapper">
                        <img src="./public/images/services/services-2.jpg" alt="Services image" class="section-services__image">
                    </div>
                    <span class="section-services__descr"><?=SERVICES['items'][1]?></span>
                    <a href="./repair<?=$langLink;?>" class="btn-link section-services__link"><?=BUTTONS[1]?></a>
                </div>
                <div class="section-services-list__item">
                    <div class="section-services-image-wrapper">
                        <img src="./public/images/services/services-3.jpg" alt="Services image" class="section-services__image">
                    </div>
                    <span class="section-services__descr"><?=SERVICES['items'][2]?></span>
                    <a href="./internal-engineering-networks<?=$langLink;?>"
                        class="btn-link section-services__link"><?=BUTTONS[1]?></a>
                </div>
                <div class="section-services-list__item">
                    <div class="section-services-image-wrapper">
                        <img src="./public/images/services/services-4.jpg" alt="Services image" class="section-services__image">
                    </div>
                    <span class="section-services__descr"><?=SERVICES['items'][3]?></span>
                    <a href="./internal-engineering-networks<?=$langLink;?>"
                        class="btn-link section-services__link"><?=BUTTONS[1]?></a>
                </div>
                <div class="section-services-list__item">
                    <div class="section-services-image-wrapper">
                        <img src="./public/images/services/services-5.jpg" alt="Services image" class="section-services__image">
                    </div>
                    <span class="section-services__descr"><?=SERVICES['items'][4]?></span>
                    <a href="./planning<?=$langLink;?>" class="btn-link section-services__link"><?=BUTTONS[1]?></a>
                </div>
                <div class="section-services-list__item">
                    <div class="section-services-image-wrapper">
                        <img src="./public/images/services/services-6.jpg" alt="Services image" class="section-services__image">
                    </div>
                    <span class="section-services__descr"><?=SERVICES['items'][5]?></span>
                    <a href="./demolish<?=$langLink;?>" class="btn-link section-services__link"><?=BUTTONS[1]?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-steps">
        <div class="section-steps-list">
            <h2 class="section-steps__title section-title"><?=STEPS['title']?></h2>
            <div class="section-steps-list__item">
                <span class="section-steps__number">01</span>
                <div class="section-steps-content">
                    <h3 class="section-steps-content__title"><?=STEPS['stepTitle'][0]?></h3>
                    <span class="section-steps-content__text"><?=STEPS['stepText'][0]?></span>
                </div>
            </div>
            <div class="section-steps-list__item">
                <div class="section-steps-content">
                    <h3 class="section-steps-content__title"><?=STEPS['stepTitle'][1]?></h3>
                    <span class="section-steps-content__text"><?=STEPS['stepText'][1]?></span>
                </div>
                <span class="section-steps__number">02</span>
            </div>
            <div class="section-steps-list__item">
                <span class="section-steps__number">03</span>
                <div class="section-steps-content">
                    <h3 class="section-steps-content__title"><?=STEPS['stepTitle'][2]?></h3>
                    <span class="section-steps-content__text"><?=STEPS['stepText'][2]?></span>
                </div>
            </div>
            <div class="section-steps-list__item">
                <div class="section-steps-content">
                    <h3 class="section-steps-content__title"><?=STEPS['stepTitle'][3]?></h3>
                    <span class="section-steps-content__text"><?=STEPS['stepText'][3]?></span>
                </div>
                <span class="section-steps__number">04</span>
            </div>
        </div>
    </div>

    <div class="section-gallery">
        <div class="container">
            <h2 class="section-gallery__title section-title"><?=GALLERY['title']?></h2>
            <p class="section-gallery__text section-text"><?=GALLERY['descr']?></p>
            <div class="section-gallery-list">
                <div class="section-gallery-list__item">
                    <img src="./public/images/gallery/gallery-1.jpg" alt="Gallery image" class="section-gallery__image">
                </div>
                <div class="section-gallery-list__item">
                    <img src="./public/images/gallery/gallery-2.jpg" alt="Gallery image" class="section-gallery__image">
                </div>
                <div class="section-gallery-list__item">
                    <img src="./public/images/gallery/gallery-3.jpg" alt="Gallery image" class="section-gallery__image">
                </div>
                <div class="section-gallery-list__item">
                    <img src="./public/images/gallery/gallery-4.jpg" alt="Gallery image" class="section-gallery__image">
                </div>
                <div class="section-gallery-list__item">
                    <img src="./public/images/gallery/gallery-5.jpg" alt="Gallery image" class="section-gallery__image">
                </div>
                <div class="section-gallery-list__item">
                    <img src="./public/images/gallery/gallery-6.jpg" alt="Gallery image" class="section-gallery__image">
                </div>
            </div>
        </div>
    </div>

    <div class="section-advantages">
        <h2 class="section-advantages__title section-title"><?=ADVANTAGE['title']?></h2>
        <div class="section-advantages-inner">
            <div class="section-advantages-item">
                <div class="section-advantages-item__icon">
                    <img src="./public/icons/icon-experience.svg" alt="Icon advantage"
                        class="section-advantages-item__image">
                </div>
                <span class="section-advantages-item__text"><?=ADVANTAGE['items'][0]?></span>
            </div>
            <div class="section-advantages-item">
                <div class="section-advantages-item__icon">
                    <img src="./public/icons/icon-quality.svg" alt="Icon advantage"
                        class="section-advantages-item__image">
                </div>
                <span class="section-advantages-item__text"><?=ADVANTAGE['items'][1]?></span>
            </div>
            <div class="section-advantages-item">
                <div class="section-advantages-item__icon">
                    <img src="./public/icons/icon-control.svg" alt="Icon advantage"
                        class="section-advantages-item__image">
                </div>
                <span class="section-advantages-item__text"><?=ADVANTAGE['items'][2]?></span>
            </div>
            <div class="section-advantages-item">
                <div class="section-advantages-item__icon">
                    <img src="./public/icons/icon-document.svg" alt="Icon advantage"
                        class="section-advantages-item__image">
                </div>
                <span class="section-advantages-item__text"><?=ADVANTAGE['items'][3]?></span>
            </div>
            <div class="section-advantages-item">
                <div class="section-advantages-item__icon">
                    <img src="./public/icons/icon-staff.svg" alt="Icon advantage"
                        class="section-advantages-item__image">
                </div>
                <span class="section-advantages-item__text"><?=ADVANTAGE['items'][4]?></span>
            </div>
            <div class="section-advantages-item">
                <div class="section-advantages-item__icon">
                    <img src="./public/icons/icon-equipment.svg" alt="Icon advantage"
                        class="section-advantages-item__image">
                </div>
                <span class="section-advantages-item__text"><?=ADVANTAGE['items'][5]?></span>
            </div>
        </div>
    </div>

    <div class="section-request">
        <div class="container">
            <div class="section-request-wrapper">
                <div class="section-request-form">
                    <h2 class="section-request-form__title section-title"><?=FORM['title']?></h2>
                    <p class="section-request-form__text section-text"><?=FORM['descr']?></p>
                    <form id="form" class="form section-request__form">
                        <div class="form-field section-request-form__group">
                            <input id="name" type="text" class="form-input section-request-form__input inputName" name="name" placeholder="<?=FORM['placeholder'][0]?>"
                                required>
                            <label for="name" class="form-label section-request-form__label"></label>
                        </div>
                        <div class="form-field section-request-form__group">
                            <input id="phone" type="tel" class="form-input section-request-form__input inputPhone"
                                name="phone" placeholder="<?=FORM['placeholder'][1]?>" required>
                            <label for="phone" class="form-label section-request-form__label"></label>
                        </div>
                        <div class="form-field section-request-form__group">
                            <input id="email" type="email" class="form-input section-request-form__input inputEmail"
                                name="email" placeholder="<?=FORM['placeholder'][2]?>" required>
                            <label for="email" class="form-label section-request-form__label"></label>
                        </div>
                        <div class="form-field section-request-form__group">
                            <textarea id="request" class="form-textarea section-request-form__textarea inputMsg" name="request" placeholder="<?=FORM['placeholder'][3]?>"></textarea>
                            <label for="request" class="form-label section-request-form__label"></label>
                        </div>
                        <span class="form-error section-request-form__error errMsg"></span>
                        <input type="submit" class="form-submit btn-link section-request-form__btn" value="<?=BUTTONS[2]?>">
                    </form>
                </div>
                <div class="section-request-map">
                    <iframe title="Location of the company"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d659.4469448745859!2d22.273343015864846!3d48.613905385128355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473918560bb85cfb%3A0xfcd6b80f2a7b819a!2z0LLRg9C70LjRhtGPINCa0LDQv9GD0YjQsNC90YHRjNC60LAsIDEwOCwg0KPQttCz0L7RgNC-0LQsINCX0LDQutCw0YDQv9Cw0YLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODgwMDA!5e0!3m2!1suk!2sua!4v1595252045390!5m2!1suk!2sua"
                        allowfullscreen width="600" height="400" class="section-request__map"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php getPopup();?>
    <?php getFooter();?>
</body>
</html>