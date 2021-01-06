<?php

    function getHead () {
        require_once('./partials/head.php');
        $langLink = setLangLink();
    };

    function getHeader () {
        require_once('./partials/header.php');
    };

    function getFooter () {
        require_once('./partials/footer.php');
    };
    function getPopup () {
        require_once('./partials/popup.php');
    };

    function setLangLink() {

        if(empty($_COOKIE["lang"]) && empty($_GET["lang"])) {
            $langLink = '?lang=uk';
        } else if(empty($_COOKIE["lang"]) ) {
            $langLink = '?lang='.$_GET["lang"];
        } else {
            $langLink = '?lang='.$_COOKIE["lang"];
        };
        return $langLink;
    };
    
    function getLanguage() {

        if (empty($_GET["lang"])) {
            require_once('./languages/uk.php');
        } else {
            require_once('./languages/'.$_GET["lang"].'.php');
        }
    };

    function getCookie() {

        if(empty($_COOKIE["lang"])) {
            require_once('./languages/uk.php');
        } else {
            require_once('./languages/'.$_COOKIE["lang"].'.php');
        }
    };

    function setLanguage() {

        if(empty($_COOKIE["lang"])) {
            getLanguage();
        } else {
            getCookie();
        }
    };
?>