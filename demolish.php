<?php require_once('./includes/functions.php')?>
<?php $langLink = setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">

  <?php getHeader();?>
    <div class="article-header">
        <img src="./public/images/background-demolish.jpg" alt="Article background" class="article-header__image">
    </div>
    <div class="article">
        <h1 class="article__title section-title"><?=DEMOLISH['title']?></h1>
        <p class="article__text"><?=DEMOLISH['text'][0]?></p>
        <p class="article__text"><?=DEMOLISH['text'][1]?>
        </p>
        <p class="article__text"><?=DEMOLISH['text'][2]?></p>
        <ul class="article-list">
            <li class="article-list__item"><?=DEMOLISH['listTop'][0]?></li>
            <li class="article-list__item"><?=DEMOLISH['listTop'][1]?></li>
            <li class="article-list__item"><?=DEMOLISH['listTop'][2]?></li>
        </ul>
        <p class="article__text"><?=DEMOLISH['text'][3]?></p>
        <ul class="article-list">
            <li class="article-list__item"><?=DEMOLISH['listBottom'][0]?></li>
            <li class="article-list__item"><?=DEMOLISH['listBottom'][1]?></li>
            <li class="article-list__item"><?=DEMOLISH['listBottom'][2]?></li>
            <li class="article-list__item"><?=DEMOLISH['listBottom'][3]?></li>
        </ul>
        <div class="article-image-wrapper">
            <div class="article-image-item">
                <img src="./public/images/articles/article-demolish-1.jpg" alt="Article image" class="article__image">
            </div>
            <div class="article-image-item">
                <img src="./public/images/articles/article-demolish-2.jpg" alt="Article image" class="article__image">
            </div>
        </div>
        <p class="article__text"><?=DEMOLISH['text'][4]?></p>
        <p class="article__text"><?=DEMOLISH['text'][5]?></p>
    </div>

    <?php getFooter();?>
</body>

</html>