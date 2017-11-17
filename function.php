/* Admin menu */
function add_new_menu_items(){
    add_menu_page(
            "Cepkolik Foto",
            "Cepkolik Foto",
            "manage_options",
            "cepkolik_options",
            "cepkolik_options_page",
            "", 
            100 
    );
}

/* Creating administrator page template */
function cepkolik_options_page(){
        ?>
        <div class="wrap">
           <?php settings_errors(); ?>
            <h1>Image gallery with advert</h1>
            
            <form method="post" action="options.php">
                <?php
                settings_fields("header_section");
                do_settings_sections("cepkolik_options");
                submit_button(); 
                ?>          
            </form>
        </div>
        <?php
}
add_action("admin_menu", "add_new_menu_items");

/* Content of admin page */
function admin_ads_panel(){
        add_settings_section("header_section", "", "", "cepkolik_options");
		
		add_settings_field("reklam1", "Advert 1", "ads_1", "cepkolik_options", "header_section");
		register_setting("header_section", "reklam1");
		add_settings_field("reklam2", "Advert 2", "ads_2", "cepkolik_options", "header_section");
		register_setting("header_section", "reklam2");
		add_settings_field("reklam3", "Advert 3", "ads_3", "cepkolik_options", "header_section");
		register_setting("header_section", "reklam3");
}

/* Advert inputs */
function ads_1(){
        ?>
		<div style="position:relative;">
			<textarea style="margin-left:40px;" name="reklam1" id="reklam1" rows="5" cols="60"><?php echo get_option('reklam1'); ?></textarea>
		</div>	
		<?php
}
function ads_2(){
        ?>
		<div style="position:relative;">
			<textarea style="margin-left:40px;" name="reklam2" id="reklam2" rows="5" cols="60"><?php echo get_option('reklam2'); ?></textarea>
		</div>
	   <?php
}
function ads_3(){
        ?>
		<div style="position:relative;">
			<textarea style="margin-left:40px;" name="reklam3" id="reklam3" rows="5" cols="60"><?php echo get_option('reklam3'); ?></textarea>
		</div>
		<?php
}
add_action("admin_init", "admin_ads_panel");
	
/* Script */
function reklam_f (){
	$reklam1 = get_option('reklam1');
	$reklam2 = get_option('reklam2');
	$reklam3 = get_option('reklam3');

		if ( is_singular( array( 'phone', 'tablet', 'notebook' ) ) ) {
			wp_enqueue_script('ads', 'https://cepkolik.com/wp-content/themes/Newspaper/js/reklamscripti.js', array( 'jquery' ), '1.0.0', true );	
			wp_localize_script('ads', 'vars', array(
										'reklamkodu1' => $reklam1,
										'reklamkodu2' => $reklam2,
										'reklamkodu3' => $reklam3,
									));
		}
}
add_action('wp_enqueue_scripts','reklam_f');
