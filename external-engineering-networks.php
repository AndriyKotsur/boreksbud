<?php require_once('./includes/functions.php')?>
<?php $langLink = setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">
  <?php getHeader();?>
    <div class="article-header">
        <img src="./public/images/background-external.jpg" alt="Article background" class="article-header__image">
    </div>
    <div class="article">
        <h1 class="article__title section-title"><?=EXTERNAL['title']?></h1>
        <p class="article__text"><?=EXTERNAL['text'][0]?></p>
        <p class="article__text"><?=EXTERNAL['text'][1]?>
        </p>
        <ul class="article-list">
            <li class="article-list__item"><?=EXTERNAL['listTop'][0]?></li>
            <li class="article-list__item"><?=EXTERNAL['listTop'][1]?></li>
            <li class="article-list__item"><?=EXTERNAL['listTop'][2]?></li>
            <li class="article-list__item"><?=EXTERNAL['listTop'][3]?></li>
        </ul>
        <p class="article__text"><?=EXTERNAL['text'][2]?></p>
        <div class="article-image-wrapper">
            <div class="article-image-item">
                <img src="./public/images/articles/article-external-1.jpg" alt="Article image" class="article__image">
            </div>
            <div class="article-image-item">
                <img src="./public/images/articles/article-external-2.jpg" alt="Article image" class="article__image">
            </div>
        </div>
        <p class="article__text"><?=EXTERNAL['text'][3]?></p>
    </div>
    <?php getFooter();?>
</body>

</html>