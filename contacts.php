<?php require_once('./includes/functions.php')?>
<?php $langLink = setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">
  <?php getHeader();?>
    <div class="contact-us-header">
        <h1 class="contact-us-header__title section-title"><?= CONTACTS['title'][0]?></h1>
    </div>
    <div class="contact-us">
        <div class="container">
            <div class="contact-us-wrapper">
                <div class="contact-us-phones">
                    <h2 class="contact-us__title section-title"><?= CONTACTS['title'][1]?></h2>
                    <p class="contact-us__item">+380 96 863 25 71</p>
                    <p class="contact-us__item">+380 63 664 60 86</p>
                </div>
                <div class="contact-us-locations">
                    <h2 class="contact-us__title section-title"><?= CONTACTS['title'][2]?></h2>
                    <p class="contact-us__item"><?= CONTACTS['address']?></p>
                </div>
            </div>
        </div>

        <div class="contact-us-request">
            <div class="container">
                <div class="contact-us-wrapper--request">
                    <div class="contact-us-map">
                        <iframe title="Location of the company"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d659.4469448745859!2d22.273343015864846!3d48.613905385128355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473918560bb85cfb%3A0xfcd6b80f2a7b819a!2z0LLRg9C70LjRhtGPINCa0LDQv9GD0YjQsNC90YHRjNC60LAsIDEwOCwg0KPQttCz0L7RgNC-0LQsINCX0LDQutCw0YDQv9Cw0YLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODgwMDA!5e0!3m2!1suk!2sua!4v1595252045390!5m2!1suk!2sua"
                            allowfullscreen width="600" height="400" class="contact-us__map"></iframe>
                    </div>
                    <div class="contact-us-form">
                        <h2 class="contact-us-form__title section-title"><?= FORM['title']?></h2>
                        <p class="contact-us-form__text section-text"><?= FORM['descr']?></p>
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
                                <textarea id="message" class="form-textarea section-request-form__textarea inputMsg" name="message" placeholder="<?=FORM['placeholder'][3]?>"></textarea>
                                <label for="message" class="form-label section-request-form__label"></label>
                            </div>
                            <span class="form-error section-request-form__error errMsg"></span>
                            <input type="submit" class="form-submit btn-link section-request-form__btn" value="<?=BUTTONS[2]?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php getPopup();?>
  <?php getFooter();?>
</body>

</html>