<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?><h1>О магазине</h1>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"personal", 
	array(
		"COMPONENT_TEMPLATE" => "personal",
		"ROOT_MENU_TYPE" => "about",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
<div class="global-block-container">
	<div class="global-content-block">
		<div class="bx_page">
            <p>Вы зашли на сайт магазина автомобильных запасных частей "Парт-авто".</p>
            <p>Наш магазин расположен в городе Липецк, работает с 2014 года и зарекомендовал себя, как поставщик качественных запасных частей для автомобилей любых марок. Все товары есть как в наличии, так и на заказ.</p>
            <p>Наши специалисты имеют большой опыт, предоставят вам грамотные консультации и осуществят подбор любых запасных частей для вашего автомобиля, а также для вашего удобства осуществят доставку в удобное для вас время.</p>
            <p>У нас вы сможете найти широкий асортимент оригинальных запасных частей ведущих мировых производителей.</p>
            <p>Кроме того в наличии имеются неоригинальные запасные части высокого качества таких производителей, как:</p>
            <ul>
                <li>Ford</li>
                <li>Mitsubishi</li>
                <li>Kia</li>
                <li>Skoda</li>
                <li>BMW</li>
                <li>Audi</li>
                <li>Mercedess-Benz</li>
                <li>Bosch</li>
                <li>Hella</li>
                <li>NGK</li>
                <li>Hi-Q</li>
                <li>Brembo</li>
                <li>Lemforder</li>
                <li>Sacks</li>
            </ul>
            <p>Также в наличии вы сможете найти воздушные и масляные фильтры на все автомобили.</p>
            <p>У нас имеется широкий выбор моторных масел.</p>
            <p>Наш магазин сотрудничает с автомобильными сервисами, расположенными в городе Липецке.</p>
            <p>Мы можем гордиться тем, что у нас один из самых широких ассортиментов запасных частей.</p>
            <p><b>НА НАШЕМ САЙТЕ К ВАШИМ УСЛУГАМ:</b></p>
            <ul>
                <li>реальные и конкурентоспособные цены;</li>
                <li>широчайший ассортимент товаров;</li>
                <li>качественные описания товаров;</li>
                <li>поиск товаров в магазине;</li>
                <li>система обратной связи;</li>
                <li>продажа качественных аналогов товаров;</li>
                <li>гарантия на купленный у нас товар;</li>
                <li>покупка товара, не выходя из дома или офиса;</li>
                <li>быстрое согласование товара с клиентом для подтверждения заказа;</li>
                <li>обмен товаров ненадлежащего качества и многое другое.</li>
            </ul>
            <p>Мы всегда рады общению с нашими клиентами. Если у вас есть какие-либо пожелания, предложения, замечания, касающиеся работы нашего Интернет-магазина - пишите нам, и мы с благодарностью примем ваше мнение во внимание:</p>
			<p><b>ЭЛЕКТРОННАЯ ПОЧТА</b>: <a href="mailto:info@part-avto.com">info@part-avto.com</a></p>
		</div>
	</div>
	<div class="global-information-block">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include", 
			".default", 
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "information_block",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>