<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?><h1>Контактная информация</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>

	<ul class="contactList">
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont1.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont1.png" title="cont1.png">
			</td>
			<td>
                +7 (4742) 39-06-26<br>

			</td>
		</tr>
		</tbody>
		</table>
 </li>
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont2.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont2.png" title="cont2.png">
			</td>
			<td>
 <a href="mailto:info@part-avto.com">info@part-avto.com</a><br>
 			</td>
		</tr>
		</tbody>
		</table>
 </li>
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont3.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont3.png" title="cont3.png">
			</td>
			<td>
				 г. Липецк<br>
				 ул. Мойсковская, д.12     
			</td>
		</tr>
		</tbody>
		</table>
 </li>
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont4.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont4.png" title="cont4.png">
			</td>
			<td>
				 Пн-Пт : с 09:00 до 20:00<br>
				 Сб, Вс : с 09:00 до 14:00<br>
			</td>
		</tr>
		</tbody>
		</table>
 </li>
	</ul>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "TYPECONTROL",
			1 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:5:{s:10:\"yandex_lat\";d:52.61032215451692;s:10:\"yandex_lon\";d:39.53084066105799;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:39.5287592668627;s:3:\"LAT\";d:52.61060299048937;s:4:\"TEXT\";s:0:\"\";}i:1;a:3:{s:3:\"LON\";d:39.5287592668627;s:3:\"LAT\";d:52.61060299048937;s:4:\"TEXT\";s:69:\"Магазин запасных частей###RN###Парт-авто\";}}s:9:\"POLYLINES\";a:5:{i:0;a:3:{s:6:\"POINTS\";a:8:{i:0;a:2:{s:3:\"LAT\";d:52.61139977107;s:3:\"LON\";d:39.533458497057;}i:1;a:2:{s:3:\"LAT\";d:52.61091647967;s:3:\"LON\";d:39.532643105516;}i:2;a:2:{s:3:\"LAT\";d:52.610420120761;s:3:\"LON\";d:39.531484391222;}i:3;a:2:{s:3:\"LAT\";d:52.609858444649;s:3:\"LON\";d:39.530390049944;}i:4;a:2:{s:3:\"LAT\";d:52.609623322267;s:3:\"LON\";d:39.529789235124;}i:5;a:2:{s:3:\"LAT\";d:52.610080503512;s:3:\"LON\";d:39.52893092824;}i:6;a:2:{s:3:\"LAT\";d:52.610341747784;s:3:\"LON\";d:39.528373028765;}i:7;a:2:{s:3:\"LAT\";d:52.610498493596;s:3:\"LON\";d:39.528995301256;}}s:5:\"TITLE\";s:0:\"\";s:5:\"STYLE\";a:2:{s:11:\"strokeColor\";s:8:\"FF00007F\";s:11:\"strokeWidth\";i:3;}}i:1;a:3:{s:6:\"POINTS\";a:8:{i:0;a:2:{s:3:\"LAT\";d:52.61139977107;s:3:\"LON\";d:39.533458497057;}i:1;a:2:{s:3:\"LAT\";d:52.61091647967;s:3:\"LON\";d:39.532643105516;}i:2;a:2:{s:3:\"LAT\";d:52.610420120761;s:3:\"LON\";d:39.531484391222;}i:3;a:2:{s:3:\"LAT\";d:52.609858444649;s:3:\"LON\";d:39.530390049944;}i:4;a:2:{s:3:\"LAT\";d:52.609623322267;s:3:\"LON\";d:39.529789235124;}i:5;a:2:{s:3:\"LAT\";d:52.610080503512;s:3:\"LON\";d:39.52893092824;}i:6;a:2:{s:3:\"LAT\";d:52.610341747784;s:3:\"LON\";d:39.528373028765;}i:7;a:2:{s:3:\"LAT\";d:52.610498493596;s:3:\"LON\";d:39.528995301256;}}s:5:\"TITLE\";s:0:\"\";s:5:\"STYLE\";a:2:{s:11:\"strokeColor\";s:8:\"FF00007F\";s:11:\"strokeWidth\";i:3;}}i:2;a:3:{s:6:\"POINTS\";a:8:{i:0;a:2:{s:3:\"LAT\";d:52.61139977107;s:3:\"LON\";d:39.533458497057;}i:1;a:2:{s:3:\"LAT\";d:52.61091647967;s:3:\"LON\";d:39.532643105516;}i:2;a:2:{s:3:\"LAT\";d:52.610420120761;s:3:\"LON\";d:39.531484391222;}i:3;a:2:{s:3:\"LAT\";d:52.609858444649;s:3:\"LON\";d:39.530390049944;}i:4;a:2:{s:3:\"LAT\";d:52.609623322267;s:3:\"LON\";d:39.529789235124;}i:5;a:2:{s:3:\"LAT\";d:52.610080503512;s:3:\"LON\";d:39.52893092824;}i:6;a:2:{s:3:\"LAT\";d:52.610341747784;s:3:\"LON\";d:39.528373028765;}i:7;a:2:{s:3:\"LAT\";d:52.610498493596;s:3:\"LON\";d:39.528995301256;}}s:5:\"TITLE\";s:0:\"\";s:5:\"STYLE\";a:2:{s:11:\"strokeColor\";s:8:\"FF00007F\";s:11:\"strokeWidth\";i:3;}}i:3;a:3:{s:6:\"POINTS\";a:8:{i:0;a:2:{s:3:\"LAT\";d:52.61139977107;s:3:\"LON\";d:39.533458497057;}i:1;a:2:{s:3:\"LAT\";d:52.61091647967;s:3:\"LON\";d:39.532643105516;}i:2;a:2:{s:3:\"LAT\";d:52.610420120761;s:3:\"LON\";d:39.531484391222;}i:3;a:2:{s:3:\"LAT\";d:52.609858444649;s:3:\"LON\";d:39.530390049944;}i:4;a:2:{s:3:\"LAT\";d:52.609623322267;s:3:\"LON\";d:39.529789235124;}i:5;a:2:{s:3:\"LAT\";d:52.610080503512;s:3:\"LON\";d:39.52893092824;}i:6;a:2:{s:3:\"LAT\";d:52.610341747784;s:3:\"LON\";d:39.528373028765;}i:7;a:2:{s:3:\"LAT\";d:52.610498493596;s:3:\"LON\";d:39.528995301256;}}s:5:\"TITLE\";s:0:\"\";s:5:\"STYLE\";a:2:{s:11:\"strokeColor\";s:8:\"FF00007F\";s:11:\"strokeWidth\";i:3;}}i:4;a:3:{s:6:\"POINTS\";a:8:{i:0;a:2:{s:3:\"LAT\";d:52.61139977107;s:3:\"LON\";d:39.533458497057;}i:1;a:2:{s:3:\"LAT\";d:52.61091647967;s:3:\"LON\";d:39.532643105516;}i:2;a:2:{s:3:\"LAT\";d:52.610420120761;s:3:\"LON\";d:39.531484391222;}i:3;a:2:{s:3:\"LAT\";d:52.609858444649;s:3:\"LON\";d:39.530390049944;}i:4;a:2:{s:3:\"LAT\";d:52.609623322267;s:3:\"LON\";d:39.529789235124;}i:5;a:2:{s:3:\"LAT\";d:52.610080503512;s:3:\"LON\";d:39.52893092824;}i:6;a:2:{s:3:\"LAT\";d:52.610341747784;s:3:\"LON\";d:39.528373028765;}i:7;a:2:{s:3:\"LAT\";d:52.610498493596;s:3:\"LON\";d:39.528995301256;}}s:5:\"TITLE\";s:17:\"Парт-авто\";s:5:\"STYLE\";a:2:{s:11:\"strokeColor\";s:8:\"FF00007F\";s:11:\"strokeWidth\";i:3;}}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		)
	),
	false
);?><br>
<br><br>
		<?$APPLICATION->IncludeComponent(
			"bitrix:form.result.new", 
			".default", 
			array(
				"CACHE_TIME" => "360000",
				"CACHE_TYPE" => "Y",
				"CHAIN_ITEM_LINK" => "",
				"CHAIN_ITEM_TEXT" => "",
				"EDIT_URL" => "",
				"IGNORE_CUSTOM_TEMPLATE" => "N",
				"LIST_URL" => "",
				"SEF_MODE" => "N",
				"SUCCESS_URL" => "",
				"USE_EXTENDED_ERRORS" => "Y",
				"WEB_FORM_ID" => "2",
				"COMPONENT_TEMPLATE" => ".default",
				"VARIABLE_ALIASES" => array(
					"WEB_FORM_ID" => "WEB_FORM_ID",
					"RESULT_ID" => "RESULT_ID",
				)
			),
			false
		);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>