<?php $langLink = setLangLink();?>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-inner">
                <div class="footer-logo">
                    <a href="./<?=$langLink;?>" class="footer-logo__link">
                        <img src="./public/icons/icon-footer.svg" alt="Logotype icon" class="footer-logo__icon">
                    </a>
                    <span class="footer-logo__copyright"><?=FOOTER['copyright']?></span>
                </div>
                <div class="footer-navigation">
                    <aside class="footer-navigation-services">
                        <h3 class="footer-navigation__title"><?=FOOTER['navTitle'][0]?></h3>
                        <ul class="footer-navigation-list">
                            <li class="footer-navigation-list__item">
                                <a href="./construction<?=$langLink;?>" class="footer-navigation-list__link"><?=FOOTER['navLeft'][0]?></a>
                            </li>
                            <li class="footer-navigation-list__item">
                                <a href="./repair<?=$langLink;?>" class="footer-navigation-list__link"><?=FOOTER['navLeft'][1]?></a>
                            </li>
                            <li class="footer-navigation-list__item">
                                <a href="./planning<?=$langLink;?>" class="footer-navigation-list__link"><?=FOOTER['navLeft'][2]?></a>
                            </li>
                            <li class="footer-navigation-list__item">
                                <a href="./demolish<?=$langLink;?>" class="footer-navigation-list__link"><?=FOOTER['navLeft'][3]?></a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="footer-navigation-info">
                        <h3 class="footer-navigation__title"><?=FOOTER['navTitle'][1]?></h3>
                        <ul class="footer-navigation-list">
                            <li class="footer-navigation-list__item">
                                <a href="./about-us<?=$langLink;?>#gallery-slider" class="footer-navigation-list__link"><?=FOOTER['navRight'][0]?></a>
                            </li>
                            <li class="footer-navigation-list__item">
                                <a href="./about-us<?=$langLink;?>" class="footer-navigation-list__link"><?=FOOTER['navRight'][1]?></a>
                            </li>
                            <li class="footer-navigation-list__item">
                                <a href="./contacts<?=$langLink;?>" class="footer-navigation-list__link"><?=FOOTER['navRight'][2]?></a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="footer-bottom-info">
                    <div class="footer-bottom-phone">
                        <img src="./public/icons/icon-phone-footer.svg" alt="Icon phone" class="footer-bottom-phone__image">
                        <a href="tel:+380968632571" class="footer-bottom__link">+380 96 863 25 71</a>
                    </div>
                    <div class="footer-bottom-location">
                        <img src="./public/icons/icon-location-footer.svg" alt="Icon location" class="footer-bottom-location__image">
                        <a href="https://goo.gl/maps/DTcAV9Lfsn9rvwdj7" class="footer-bottom__link"><?=FOOTER['address']?></a>
                    </div>
                </div>
                <div class="footer-bottom-social">
                    <a href="https://www.facebook.com/" class="footer-bottom__icon">
                        <img src="./public/icons/icon-instagram.svg" alt="Icon social" class="footer-bottom-social__image"/>
                    </a>
                    <a href="https://www.instagram.com/" class="footer-bottom__icon">
                        <img src="./public/icons/icon-facebook.svg" alt="Icon social" class="footer-bottom-social__image"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>