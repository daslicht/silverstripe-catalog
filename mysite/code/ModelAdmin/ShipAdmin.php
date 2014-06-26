<?php

class ProduktAdmin extends CatalogPageAdmin {

	private static $url_segment = 'products'; // Linked as /admin/products/
	private static $menu_title = 'Produkte';

	private static $managed_models = array(
		'Page',

	);

}