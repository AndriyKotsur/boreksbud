<?php require_once('./includes/functions.php')?>
<?php setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>


<body class="body">
  <?php getHeader();?>
    <div class="article-header">
        <img src="./public/images/background-construction.jpg" alt="Article background" class="article-header__image">
    </div>
    <div class="article">
        <h1 class="article__title section-title"><?=CONSTRUCTION['title']?></h1>
        <p class="article__text"><?=CONSTRUCTION['text'][0]?></p>
        <p class="article__text"><?=CONSTRUCTION['text'][1]?></p>
        <ul class="article-list">
            <li class="article-list__item"><?=CONSTRUCTION['listTop'][0]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listTop'][1]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listTop'][2]?></li>
        </ul>
        <p class="article__text"><?=CONSTRUCTION['text'][2]?></p>
        <ul class="article-list">
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][0]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][1]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][2]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][3]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][4]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][5]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][6]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][7]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][8]?></li>
            <li class="article-list__item"><?=CONSTRUCTION['listBottom'][9]?></li>
        </ul>
        <div class="article-image-wrapper">
            <div class="article-image-item">
                <img src="./public/images/articles/article-construction-1.jpg" alt="Article image" class="article__image">
            </div>
            <div class="article-image-item">
                <img src="./public/images/articles/article-construction-2.jpg" alt="Article image" class="article__image">
            </div>
        </div>
        <p class="article__text"><?=CONSTRUCTION['text'][3]?></p>
        <p class="article__text"><?=CONSTRUCTION['text'][4]?></p>
    </div>

  <?php getFooter();?>
</body>

</html>