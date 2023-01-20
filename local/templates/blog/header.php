<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE HTML>
<head>
    <?php $APPLICATION->ShowHead()?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-1.11.1.min.js');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
    Asset::getInstance()->addString("<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>");

    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<div class="header">
    <div class="header_top">
        <div class="wrap">
            <div class="header-top-left">
                <div class="logo">
                    <a href="/"><h1>SHARE</h1>
                        <h2>The Blog</h2>
                    </a>
                </div>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
              <!--  <div class="menu">
                    <ul class="menu bounce">
                        <li class="active"><a href="index.html" class="active">Home</a></li>
                        <li><a href="single.html">About</a></li>
                        <li><a href="single.html">Support</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>-->
                <div class="clear"></div>
            </div>
            <div class="header-top-right">
                <div class="social-icons">
                <? $APPLICATION->SetTitle("Home");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"FORGOT_PASSWORD_URL" => "/auth/forget.php",
		"PROFILE_URL" => "/auth/personal.php",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.confirmation",
	"flat",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONFIRM_CODE" => "confirm_code",
		"LOGIN" => "login",
		"USER_ID" => "confirm_user_id"
	)
);?>
                </div>
                
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>




<!--------------------- Main Content ------------------->
<div class="wrap">
    <div class="main">
        <div class="content">
