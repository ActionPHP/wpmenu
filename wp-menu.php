<?php

class WP_ADMIN_MENU
{	
	public function __construct()
	{
		$this->menu();

	}
	
	public function menu()
	{
		
		add_action('admin_menu', array( $this, 'admin_menu'));

	}

	public function admin_menu()
	{
		$page_title = 'Page title';
		$menu_title = 'Menu title';
		$capability = 'manage_options';
		$menu_slug = 'bl_stripe_payments';
		$function = array( $this, 'admin_menu_page');
		$icon_url = '';
		$position = '';

		add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position ); 
	}

	public function admin_menu_page()
	{
		include 'bl-stripe-menu-page.php';
	}
}
