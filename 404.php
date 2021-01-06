<?php require_once('./includes/functions.php')?>
<?php $langLink = setLangLink();?>
<?php setLanguage();?>
<?php getHead();?>

<body class="body">
    <div class="error">
        <h1 class="error__title">404</h1>
        <span class="error__text section-title"><?=ERROR['not_found']?></span>
        <a href="./<?=$langLink;?>" class="btn-link error__link"><?=ERROR['button']?></a>
    </div>
</body>
</html>