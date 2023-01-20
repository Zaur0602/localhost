<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	".default", 
	array(
		"AUTH" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "DYNAMIC_WITHOUT_STUB",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
			0 => "EMAIL",
			1 => "TITLE",
			2 => "NAME",
		),
		"SUCCESS_PAGE" => "/",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>