<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>

<?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="box1">
        <h3><a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a></h3>
        <span>By <?=$arItem['PROPERTIES'] ['AUTHOR'] ['VALUE'];?>- 2 hours ago<span class="comments">8 Comments</span></span>
        <div class="view">
            <div class="view-back">
                <span class="views" title="views">(23)</span>
                <span class="likes" title="likes">(124)</span>
                <span class="link" title="link">(24)</span>
                <a href="single.html"> </a>
            </div>
            <a href="<?=$arItem['DETAIL_PAGE_URL'];?>"> <img src="<?=$arItem['PREVIEW_PICTURE'] ['SRC'];?>"></a>
        </div>
        <div class="data">
            <p><?=$arItem['PREVIEW_TEXT'];?></p>
            <span><a href="<?=$arItem['DETAIL_PAGE_URL'];?>">Continue reading >>></a></span>
        </div>
        <div class="clear"></div>
    </div>
<?endforeach;?>

<?php if($arParams['DISPLAY_BOTTOM_PAGER']) : ?>
<?=$arResult['NAV_STRING'];?>
<?php endif; ?>
