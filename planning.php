<?php require_once('./includes/functions.php')?>
<?php $langLink = setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">
  <?php getHeader();?>
    <div class="article-header">
        <img src="./public/images/background-planning.jpg" alt="Article background" class="article-header__image">
    </div>
    <div class="article">
        <h1 class="article__title section-title"><?=PLANNING['title']?></h1>
        <p class="article__text"><?=PLANNING['text'][0]?></p>
        <p class="article__text"><?=PLANNING['text'][1]?></p>
        <div class="article-image-wrapper">
            <div class="article-image-item">
                <img src="./public/images/articles/article-planning-1.jpg" alt="Article image" class="article__image">
            </div>
            <div class="article-image-item">
                <img src="./public/images/articles/article-planning-2.jpg" alt="Article image" class="article__image">
            </div>
        </div>
        <p class="article__text"><?=PLANNING['text'][2]?></p>
    </div>
    <?php getFooter();?>
</body>

</html>