<?php $langLink = setLangLink();?>

<header class="header">
  <div class="header-top">
    <div class="container langContainer">
      <div class="header-top-lang langMenu">
        <a lang="uk" hreflang="uk" href="#" class="header-top-lang__link headerLang" data-lang="uk">
          <img src="./public/icons/icon-ukr.svg" alt="Icon language" />
        </a>
        <a lang="ru" hreflang="ru-Ru" href="#" class="header-top-lang__link headerLang" data-lang="ru">
          <img src="./public/icons/icon-rus.svg" alt="Icon language" />
        </a>
      </div>
      <div class="header-top-info">
        <div class="header-top-logo">
          <div class="header-burger headerBurger">
            <span class="header-burger__icon"></span>
          </div>
          <a href="./<?=$langLink;?>" class="header-top__logo">
            <img src="./public/icons/icon-logo.svg" alt="Icon logotype" />
          </a>
          <a href="./<?=$langLink;?>" class="header-top__logo--mobile">
            <img src="./public/icons/icon-logo-mobile.svg" alt="Icon logotype" />
          </a>
        </div>
        <div class="header-top-contacts">
          <div class="header-top-locations">
            <img src="./public/icons/icon-location.svg" alt="Icon location" class="header-top-locations__icon" />
            <a href="https://goo.gl/maps/DTcAV9Lfsn9rvwdj7" class="header-top-locations__link">
            <?= HEADER['address']?>
            </a>
          </div>
          <div class="header-top-phones">
            <img src="./public/icons/icon-phone.svg" alt="Icon phone" class="header-top-phones__icon" />
            <div class="header-top-phones__list">
              <a href="tel:+380968632571" class="header-top-phones__link">
                +380 96 863 25 71
              </a>
              <a href="tel:+380636646086" class="header-top-phones__link">
                +380 63 664 60 86
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="header-navigation headerMenu">
    <ul class="header-navigation__list">
      <li class="header-navigation__item">
        <a href="./<?=$langLink;?>" class="header-navigation__link"><?= HEADER['nav'][0]?></a>
      </li>
      <li class="header-navigation__item">
        <a href="./about-us<?=$langLink;?>" class="header-navigation__link"><?= HEADER['nav'][1]?></a>
      </li>
      <li class="header-navigation__item">
        <a href="./about-us<?=$langLink;?>#gallery-slider" class="header-navigation__link"><?= HEADER['nav'][2]?></a>
      </li>
      <li class="header-navigation__item header-navigation__item--submenu subMenu">
        <a href="#" class="header-navigation__link"><?= HEADER['nav'][3]?></a>
        <ul class="header-submenu__list headerSubMenu">
          <li class="header-submenu__item">
            <a href="./construction<?=$langLink;?>" class="header-submenu__link"><?= HEADER['dropdown'][0]?></a>
          </li>
          <li class="header-submenu__item">
            <a href="./repair<?=$langLink;?>" class="header-submenu__link"><?= HEADER['dropdown'][1]?></a>
          </li>
          <li class="header-submenu__item">
            <a href="./internal-engineering-networks<?=$langLink;?>" class="header-submenu__link"><?= HEADER['dropdown'][2]?></a>
          </li>
          <li class="header-submenu__item">
            <a href="./external-engineering-networks<?=$langLink;?>" class="header-submenu__link"><?= HEADER['dropdown'][3]?></a>
          </li>
          <li class="header-submenu__item">
            <a href="./planning<?=$langLink;?>" class="header-submenu__link"><?= HEADER['dropdown'][4]?></a>
          </li>
          <li class="header-submenu__item">
            <a href="./demolish<?=$langLink;?>" class="header-submenu__link"><?= HEADER['dropdown'][5]?></a>
          </li>
        </ul>
      </li>
      <li class="header-navigation__item">
        <a href="./contacts<?=$langLink;?>" class="header-navigation__link"><?= HEADER['nav'][4]?></a>
      </li>
    </ul>
  </div>
</header>
