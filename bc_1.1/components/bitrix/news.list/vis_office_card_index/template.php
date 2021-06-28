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

<div class="similar">
    <div class="similar-bg_text"><?=$arParams["COMPONENT_TITLE"]?></div>
    <div class="similar-container">

    <div class="similar-title"><?=$arParams["COMPONENT_TITLE"]?></div>
    <div class="similar-row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <a class="similar-row_card row_card" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
        <div class="row_card-bg" style="background: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>') no-repeat center/cover"></div>
        <div class="row_card-title">
            <div class="row_card-title-item">
                <div class="number"><?=$arItem["PROPERTIES"]['ETAJ']['VALUE'];?></div>
                <div class="text">этаж</div>
            </div>
            <div class="row_card-title-item">
                <div class="number"><?=round($arItem["PROPERTIES"]['PLOSH']['VALUE'], 0);?></div>
                <small class="text">кв. м.</small></div>
        </div>
        <div class="row_card-bottom">
            <div class="row_card-bottom-title"><?echo $arItem["NAME"]?></div>
            <div class="row_card-bottom-price">
                <div class="number">5 768 ₽</div>
                <div class="text"> кв. м.</div>
            </div>
        </div>
    </a>

<?endforeach;?>


    </div>



    </div>

    <?if($arParams["SHOW_BOTTOM_LINK"] == "Y"):?>

        <button class="info-btn"><a href="/arenda/" > Все офисы</a> </button>

    <?endif;?>
</div>
