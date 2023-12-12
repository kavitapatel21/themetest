<?php
/**
 * Ultimate Auction For WooCommerce Cron Setting Page 
 *
 * @author   WooThemes
 * @category Admin
 * @package  WooCommerce/Admin
 * @version  2.4.0
 */   
 
 if(isset($_POST['uwa-settings-submit']) == 'Save Changes')
	{
		
		// Cron Setting Section
		if (isset($_POST['uwa_cron_status_in'])) {
			update_option('woo_ua_cron_auction_status', absint($_POST['uwa_cron_status_in']));
		} 
		if (isset($_POST['uwa_cron_status_number'])) {
			update_option('woo_ua_cron_auction_status_number', absint($_POST['uwa_cron_status_number']));
		}
		
		// Auction Product Section		 
		$ajax_bid_enable  = isset($_POST['uwa_bid_ajax_enable']) ? sanitize_key($_POST['uwa_bid_ajax_enable']) : 'no';	
		if(!empty( $ajax_bid_enable )){
			update_option('woo_ua_auctions_bid_ajax_enable', $ajax_bid_enable);
		}
				
		if (isset($_POST['uwa_bid_ajax_interval'])) {
			update_option('woo_ua_auctions_bid_ajax_interval', absint($_POST['uwa_bid_ajax_interval']));
		
		}
		//shop Page
		$shop_enable  = isset($_POST['uwa_shop_enabled']) ? sanitize_key($_POST['uwa_shop_enabled']) : 'no';
		if(!empty( $shop_enable )){
			update_option('woo_ua_show_auction_pages_shop', $shop_enable);
		} 
		$search_enable  = isset($_POST['uwa_search_enabled']) ? sanitize_key($_POST['uwa_search_enabled']) : 'no';
		if(!empty( $search_enable )){
			update_option('woo_ua_show_auction_pages_search', $search_enable);
		} 
		$cat_enable  = isset($_POST['uwa_cat_enabled']) ? sanitize_key($_POST['uwa_cat_enabled']) : 'no';
		if(!empty( $cat_enable )){
			update_option('woo_ua_show_auction_pages_cat', $cat_enable);
		} 
		$tag_enable  = isset($_POST['uwa_tag_enabled']) ? sanitize_key($_POST['uwa_tag_enabled']) : 'no';		
		if(!empty( $tag_enable )){
			update_option('woo_ua_show_auction_pages_tag', $tag_enable);
		}
		$expired_enable  = isset($_POST['uwa_expired_enabled']) ? sanitize_key($_POST['uwa_expired_enabled']) : 'no';
		if(!empty( $expired_enable )){
			update_option('woo_ua_expired_auction_enabled', $expired_enable);
		} 
		
		$uwa_countdown_format  = isset( $_POST['uwa_countdown_format'] ) ? sanitize_text_field( $_POST['uwa_countdown_format'] ) : 'yowdHMS';
		if(!empty( $uwa_countdown_format )){
			update_option('woo_ua_auctions_countdown_format', $uwa_countdown_format);
		} 
		
		$hide_compact_enable  = isset($_POST['uwa_hide_compact_enable']) ? sanitize_key($_POST['uwa_hide_compact_enable']) : 'no';		
		if(!empty( $hide_compact_enable )){
			update_option('uwa_hide_compact_enable', $hide_compact_enable);
		} 
		
		
		$private_message  = isset($_POST['uwa_private_message']) ? sanitize_key($_POST['uwa_private_message']) : 'no';		
		if(!empty( $private_message )){
			update_option('woo_ua_auctions_private_message', $private_message);
		} 
		
		$bids_tab  = isset($_POST['uwa_bids_tab']) ? sanitize_key($_POST['uwa_bids_tab']) : 'no';		
		if(!empty( $bids_tab )){
			update_option('woo_ua_auctions_bids_section_tab', $bids_tab);
		} 
		
		$watchlists_tab  = isset($_POST['uwa_watchlists_tab']) ? sanitize_key($_POST['uwa_watchlists_tab']) : 'no';			
		if(!empty( $watchlists_tab )){
			update_option('woo_ua_auctions_watchlists', $watchlists_tab);
		} 	
		
		$owner_to_bid  = isset($_POST['uwa_allow_owner_to_bid']) ? sanitize_key($_POST['uwa_allow_owner_to_bid']) : 'no';			
		if(!empty( $owner_to_bid )){
			update_option('uwa_allow_owner_to_bid', $owner_to_bid);
		} 

		$admin_to_bid  = isset($_POST['uwa_allow_admin_to_bid']) ? sanitize_key($_POST['uwa_allow_admin_to_bid']) : 'no';		
		if(!empty( $admin_to_bid )){
			update_option('uwa_allow_admin_to_bid', $admin_to_bid);
		} 
		
		$bid_place_warning  = isset($_POST['uwa_enable_bid_place_warning']) ? sanitize_key($_POST['uwa_enable_bid_place_warning']) : 'no';			
		if(!empty( $bid_place_warning )){
			update_option('uwa_enable_bid_place_warning', $bid_place_warning);
		} 

        if(isset($_POST['uwa_copyright_text']) && $_POST['uwa_copyright_text'] == 1){
			update_option('uwa_copyright_text', "yes");
		} else{
			update_option('uwa_copyright_text', "no");
		}	

		if(isset($_POST['uwa_login_register_msg_enabled'])){	
			update_option('uwa_login_register_msg_enabled', "yes");
		} else{
			update_option('uwa_login_register_msg_enabled', "no");
		}	

			
	}
	
	
	// Cron Setting Section
	$uwa_cron_status_in = get_option('woo_ua_cron_auction_status', '2');
	$uwa_cron_status_number = get_option('woo_ua_cron_auction_status_number', '25');
	
	//Auction Section
	$uwa_bid_ajax_interval = get_option('woo_ua_auctions_bid_ajax_interval', '25');	
	
	$ajax_enable = get_option('woo_ua_auctions_bid_ajax_enable');
	//Shop Page   
	$expired_enable = get_option('woo_ua_expired_auction_enabled');
	$shop_enable = get_option('woo_ua_show_auction_pages_shop');	
	$search_enable = get_option('woo_ua_show_auction_pages_search');
	$cat_enable = get_option('woo_ua_show_auction_pages_cat');	
	$tag_enable = get_option('woo_ua_show_auction_pages_tag');	
	
	//Auction Detail Page
	$countdown_format = get_option('woo_ua_auctions_countdown_format');	   
	
	$private_tab_enable = get_option('woo_ua_auctions_private_message');	
	$bids_tab_enable = get_option('woo_ua_auctions_bids_section_tab');	
	$watchlists_tab_enable = get_option('woo_ua_auctions_watchlists');
	
	$compact_checked= get_option('uwa_hide_compact_enable');	
	$owner_bid_enable = get_option('uwa_allow_owner_to_bid',"no");	
	$admin_bid_enable = get_option('uwa_allow_admin_to_bid',"no");	
	$bid_warning = get_option('uwa_enable_bid_place_warning');

	$uwa_copyright_text = get_option('uwa_copyright_text');
	if($uwa_copyright_text == false){
		update_option('uwa_copyright_text', "yes");
	}
	$uwa_copyright_checked_enable = "";
	if($uwa_copyright_text == "yes" || $uwa_copyright_text == false){
		$uwa_copyright_checked_enable = "checked";
	}

	$uwa_login_register_msg_enabled = get_option('uwa_login_register_msg_enabled');
	$uwa_login_register_checked_enable = "";
	if($uwa_login_register_msg_enabled == "yes" || $uwa_login_register_msg_enabled == false){
		$uwa_login_register_checked_enable = "checked";
	}
		
	
?>		
	
<div class="wrap" id="uwa_auction_setID">
	<div id='icon-tools' class='icon32'></br></div>
	
	<h2 class="uwa_main_h2"><?php esc_html_e( 'Ultimate Auction for WooCommerce', 'ultimate-woocommerce-auction' ); ?><span class="uwa_version_text"><?php esc_html_e( 'Version :', 'ultimate-woocommerce-auction' ); ?> <?php echo esc_attr(WOO_UA_VERSION); ?></span></h2>
	
	<div class="get_uwa_pro">

                 <!-- <a href="https://auctionplugin.net?utm_source=woo plugin&utm_medium=horizontal banner&utm_campaign=learn-more-button" target="_blank"> <img src="<?php echo esc_url(WOO_UA_ASSETS_URL);?>/images/UWCA_row.jpg" alt="" /> </a>
                
    	<div class="clear"></div> -->
    	<?php
    	global $current_user;
				$user_id = $current_user->ID;
				/* If user clicks to ignore the notice, add that to their user meta */
				if (isset($_GET['uwa_pro_add_plugin_notice_ignore']) && '0' == absint($_GET['uwa_pro_add_plugin_notice_ignore'])) {
					update_user_meta($user_id, 'uwa_pro_add_plugin_notice_disable', 'true', true);
				}
				if (current_user_can('manage_options')) {
					$user_id = $current_user->ID;
					$user_hide_notice = get_user_meta( $user_id, 'uwa_pro_add_plugin_notice_disable', true );				
					if ($user_hide_notice != "true") {
													?>
					<div class="notice notice-info">
						<div class="get_uwa_pro" style="display:flex;justify-content: space-evenly;">
							<a href="https://auctionplugin.net?utm_source=woo plugin&utm_medium=admin notice&utm_campaign=learn-more-button" target="_blank"> <img src="<?php echo esc_url(WOO_UA_ASSETS_URL);?>/images/UWCA_row.jpg" alt="" /> </a>
							<p class="uwa_hide_free">
							<?php
							//printf(__('<a href="%s">Hide Notice</a>', 'ultimate-woocommerce-auction'),esc_attr(add_query_arg('uwa_pro_add_plugin_notice_ignore', '0')));?>
							</p>
							<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'uwa_pro_add_plugin_notice_ignore', '0' ), 'ultimate-woocommerce-auction', '_ultimate-woocommerce-auction_nonce' ) ); ?>" class="woocommerce-message-close notice-dismiss" style="position:relative;float:right;padding:9px 0px 9px 9px;text-decoration:none;"></a>									
							<div class="clear"></div>
						</div>
					</div>
						<?php
					}
				}	
				?>	
    </div>

 	
	<div id="uwa-auction-banner-text">	
	<?php esc_html__('If you like <a href="https://wordpress.org/support/plugin/ultimate-woocommerce-auction/reviews?rate=5#new-post" target="_blank"> our plugin working </a> with WooCommerce, please leave us a <a href="https://wordpress.org/support/plugin/ultimate-woocommerce-auction/reviews?rate=5#new-post" target="_blank">★★★★★</a> rating. A huge thanks in advance!', 'ultimate-woocommerce-auction' ); ?>	 
    </div>
	 <div class="uwa_setting_right">
		
			<div class="box_like_plugin">
				<div class="like_plugin">
						<h2 class="title_uwa_setting"><?php esc_html_e( 'Like this plugin?', 'ultimate-woocommerce-auction' ); ?></h2>
					<div class="text_uwa_setting">
						<div class="star_rating">
							<form class="rating">
							  <label>
							    <input type="radio" name="stars" value="yes" />
							    <span class="icon">★</span>
							  </label>
							  <label>
							    <input type="radio" name="stars" value="2" />
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							  </label>
							  <label>
							    <input type="radio" name="stars" value="3" />
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							    <span class="icon">★</span>   
							  </label>
							  <label>
							    <input type="radio" name="stars" value="4" />
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							  </label>
							  <label>
							    <input type="radio" name="stars" value="5" />
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							    <span class="icon">★</span>
							  </label>
							</form>
						</div>

						<div class="happy_img"> 
							<a target="_blank" href="https://wordpress.org/support/plugin/ultimate-woocommerce-auction/reviews?rate=5#new-post"> <img src="<?php echo esc_url(WOO_UA_ASSETS_URL);?>/images/we_just_need_love.png" alt="" /></a>
						</div>
					</div>
				</div>	
			</div>
			
				<div class="box_get_premium">
					<a href="https://auctionplugin.net?utm_source=woo plugin&utm_medium=vertical banner&utm_campaign=learn-more-button" target="_blank"> <img src="<?php echo esc_url(WOO_UA_ASSETS_URL);?>/images/UWCA_col.jpg" alt="" /> </a>
			</div>
			
		
		</div>
	<div class="uwa_setting_left">
	
		<form  method='post' class='uwa_auction_setting_style'>

			<!-- beginning of the left meta box section -->
			<div id="wps-deals-misc" class="post-box-container">
				<div class="metabox-holder">	
				<div class="meta-box-sortables ui-sortable">
				<div id="general">					
					<div class="inside ">					
					<table class="form-table">
						<tbody>
						<tr>
						<th scope="row">
						<h2><?php esc_html_e( 'Auction Settings', 'ultimate-woocommerce-auction' ); ?></h2>
								
						</th>
						
						</tr>
						
							<tr>
								<tr>
								<th scope="row">
									<label for="uwa_cron_status_in"><?php esc_html_e( 'Check Auction Status:', 'ultimate-woocommerce-auction' ); ?></label>
								</th>
								<td>
									<?php esc_html_e( 'In every', 'ultimate-woocommerce-auction' ); ?>
									<input type="number" name="uwa_cron_status_in" class="regular-number" min="1" id="uwa_cron_status_in" 
									value="<?php echo esc_attr($uwa_cron_status_in); ?>"><?php esc_html_e( 'Minutes.', 'ultimate-woocommerce-auction' ); ?>
									</br>
									<div class="uwa-auction-settings-tip">
									<?php esc_html_e('A scheduler runs on an interval specified in this field in recurring manner.It checks, if some live auctions product can be expired and accordingly update their status.', 'ultimate-woocommerce-auction');
                                     ?>	
									</div>									 
								</td>
							   </tr>
							 
							   <tr>
								<th scope="row">
									<label for="uwa_cron_status_number"><?php esc_html_e( 'Auctions Processed Simultaneously:', 'ultimate-woocommerce-auction' ); ?></label>
								</th>
								
									<td>
									<?php esc_html_e( 'Process ', 'ultimate-woocommerce-auction' ); ?>
									<input type="number" name="uwa_cron_status_number" class="regular-number" min="1"
									id="uwa_cron_status_number" value="<?php echo esc_attr($uwa_cron_status_number); ?>"><?php esc_html_e( 'auctions per request.', 'ultimate-woocommerce-auction' ); ?>
									</br>
									<div class="uwa-auction-settings-tip">
									<?php esc_html_e('Number of auctions products Process per request.The scheduler processes the specified no. auctions whenever a schedule occurs.', 'ultimate-woocommerce-auction');
                                     ?>									
									
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
		<span style="width: 500px; margin-left: -375px;">* <strong><?php esc_html_e( 'Note :', 'ultimate-woocommerce-auction' ); ?><strong> <ol>
										<li><?php esc_html_e( 'It is recommended to fill the above values in a balanced manner based upon the traffic, no. of auction products and no. of users on your site.', 'ultimate-woocommerce-auction' ); ?>
										</li>
										<li><?php esc_html_e( 'The less is the no. of auctions per request (fields 2 and 4 from above), the processing will be more optimized. If you are allowing so many auctions to be processed in each request, it can affect your site performance.', 'ultimate-woocommerce-auction' ); ?>
										</li>
										<li><?php esc_html_e( 'Similarly, you should also not set a very few no. of auction products since there may be delayed in expiry of some auction products and/or email notifications.', 'ultimate-woocommerce-auction' ); ?>
										</li>
										<li><?php esc_html_e( 'It is recommended not to keep on changing these values frequently as your auction products will be rescheduled every time you update the values.', 'ultimate-woocommerce-auction' ); ?>
										</li>										
									</ol>
		</span></a>	</div>
								</td>
							   </tr>
							   
							  
							  <tr>
								<tr>
								<th scope="row">
									<label for="uwa_bid_ajax_enable"><?php esc_html_e( 'Bidding Information:', 'ultimate-woocommerce-auction' ); ?></label>
								</th>
								<td>									
									<input type="checkbox" <?php checked($ajax_enable, 'yes'); ?> name="uwa_bid_ajax_enable" class="regular-number" id="uwa_bid_ajax_enable" value="yes"><?php esc_html_e( 'Enable Ajax update for latest bidding.', 'ultimate-woocommerce-auction' ); ?>
									</br>
									<div class="uwa-auction-settings-tip">
									<?php esc_html_e('Enables/disables ajax current bid checker (refresher) for auction - updates current bid value without refreshing page (increases server load, disable for best performance)', 'ultimate-woocommerce-auction');
                                     ?>	
								</div>									 
								</td>
							   </tr>
							 
							   <tr>
								<th scope="row">
									<label for="uwa_bid_ajax_interval"><?php esc_html_e( 'Check Bidding Info:', 'ultimate-woocommerce-auction' ); ?></label>
								</th>
								
									<td>
									<?php esc_html_e( 'In every', 'ultimate-woocommerce-auction' ); ?>
									<input type="number" name="uwa_bid_ajax_interval" class="regular-number" min="1" 
									id="uwa_bid_ajax_interval" value="<?php echo esc_attr($uwa_bid_ajax_interval); ?>"><?php esc_html_e( 'Second.', 'ultimate-woocommerce-auction' ); ?>
									</br>
									<div class="uwa-auction-settings-tip">
									<?php esc_html_e('Time interval between two ajax requests in seconds (bigger intervals means less load for server)', 'ultimate-woocommerce-auction');
                                     ?>									
									</div>							
								</td>
							   </tr>
							   
							  
							   
							   <tr>
					<th scope="row">
									<label for="uwa_bid_ajax_interval"><?php esc_html_e( 'Bidding Restriction:', 'ultimate-woocommerce-auction' ); ?></label>
								</th>
					<td class="uwaforminp">						
						<input type="checkbox" <?php checked($admin_bid_enable, 'yes'); ?> name="uwa_allow_admin_to_bid"  id="uwa_allow_admin_to_bid" value="yes">
						<?php esc_html_e('Allow Administrator to bid on their own auction.', 'ultimate-woocommerce-auction');  ?>
					</td>
				</tr>
				
				<tr>
					<th></th>
					<td class="uwaforminp">						
						<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_allow_owner_to_bid"  id="uwa_allow_owner_to_bid" value="yes">
					<?php esc_html_e('Allow Auction Owner (Seller/Vendor) to bid on their own auction.', 'ultimate-woocommerce-auction');  ?>								 
					</td>
				</tr>




						<!-- AJAX setting -->
						<tr>
							<td colspan="2">
								<div class="pro-option-css">
								<h2 class="uwa_section_tr pro-color"><?php esc_html_e( 'AJAX BIDDING', 'ultimate-woocommerce-auction' ); ?> <?php esc_html_e( '(PRO Features)', 'ultimate-woocommerce-auction' ); ?></h2>
								<span style="margin-right:10px"> </span>  
								<a href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank" class="update-pro-link">Buy PRO Version to unlock</a>		
								</div>
							</td>
						</tr>
						<tr class="pro-color">
							<th scope="row">
								<label for="uwa_bid_ajax_interval_update_pro pro-color"><?php esc_html_e( 'Instant Bidding', 'ultimate-woocommerce-auction' ); ?></label>   
							</th>
							<td class="uwaforminp pro-color" >						
								<input type="checkbox" <?php checked($admin_bid_enable, 'yes'); ?> name="uwa_allow_admin_to_bid_update_pro"  id="uwa_allow_admin_to_bid_update_pro" value="" disabled>
								<?php esc_html_e('By enabling this setting, bids will be placed without page refresh.', 'ultimate-woocommerce-auction');  ?>
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
								<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("This option will simulate instant bidding for users. You can keep it enable.", 'ultimate-woocommerce-auction'); ?>	
								</span></a>
							</td>
						</tr>
						<tr class="pro-color">
							<th></th>
							<td class="uwaforminp">						
								<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_allow_owner_to_bid_update_pro"  id="uwa_allow_owner_to_bid_update_pro" value="" disabled>
							<?php esc_html_e('Get Bid amount information instantly without page refresh.', 'ultimate-woocommerce-auction');  ?>
							<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong><span style="width: 500px; margin-left: -375px;"><?php esc_html_e("By enabling this setting, bid information will be polled every X second mentioned in below setting and bid information will be displayed without page refresh. This can be performance heavy operation on your server.", 'ultimate-woocommerce-auction'); ?>	
								</span></a>				 
							</td>
						</tr>
						<tr class="pro-color">
							<th scope="row">
								<label for="uwa_cron_status_in_update_pro"><?php esc_html_e( 'Check Bidding Information', 'ultimate-woocommerce-auction' ); ?></label>
							</th>
							<td>
								<?php esc_html_e( 'In every', 'ultimate-woocommerce-auction' ); ?>
								<input type="number" name="uwa_cron_status_in_update_pro" class="regular-number" min="1" id="uwa_cron_status_in_update_pro" 
								value="" disabled><?php esc_html_e( 'Second.', 'ultimate-woocommerce-auction' ); ?>
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
								<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("Time interval between two ajax requests in seconds (bigger intervals means less load on server)", 'ultimate-woocommerce-auction'); ?>	
								</span></a>
								</br>								 
							</td>
						</tr>
						<tr class="pro-color">
							<th scope="row">
								<label for="uwa_bid_ajax_interval_update_pro"><?php esc_html_e( 'Sync Timer on Auction List Page', 'ultimate-woocommerce-auction' ); ?></label>
							</th>
							<td class="uwaforminp">						
								<input type="checkbox" <?php checked($admin_bid_enable, 'yes'); ?> name="uwa_allow_admin_to_bid_update_pro"  id="uwa_allow_admin_to_bid_update_pro" value="" disabled>
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
								<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("When this checkbox is enabled then once the page loads, after five seconds an AJAX request will be sent to server to get server time and calculate the time left for expiration and update the timer of the product. We have given this provision if site takes too long to load and due to this the timer might have a lag and to overcome this lag, we have provided this setting. Please note that enabling this setting will increase number of AJAX request calls to the server which might lead to stress on the server.", 'ultimate-woocommerce-auction'); ?>	
								</span></a>
							</td>
						</tr>
						<!-- End AJAX setting -->
							   
						<!-- Messages SETTINGS -->

						<tr>
							<td colspan="2">
							<h2 class="uwa_section_tr"><?php esc_html_e( 'Messsage settings', 
							'ultimate-woocommerce-auction' ); ?></h2>						
							<span style='vertical-align: top;'><?php esc_html_e( 'Do you want to show the below message to a visitor (non-logged in user) who tries to place a bid?', 'ultimate-woocommerce-auction' ); ?></span>  

							<div style='vertical-align: top;'><?php _e( 'MESSAGE : <strong>Please Login/Register in to place your bid or buy the product.</strong>', 
							'ultimate-woocommerce-auction' ); ?></div>  
							</td>

						</tr>
							   
						<tr>
							<th scope="row"><?php esc_html_e( 'Show a message to the visitor :', 
							  'ultimate-woocommerce-auction' ); ?></th>
							 
							<td>							   
							 <input <?php echo $uwa_login_register_checked_enable; ?> value="yes" name="uwa_login_register_msg_enabled" type="checkbox">
							  <?php esc_html_e( "Un-check this option if you directly want to redirect to the login & registration (my-account) page.", 
							  'ultimate-woocommerce-auction' ); ?>
							 </td>
						</tr>
							   							   
							   
							   
							<tr >
							<td colspan="2">
							<h2 class="uwa_section_tr"><?php esc_html_e( 'Shop Page', 'ultimate-woocommerce-auction' ); ?></h2>						
							<span style='vertical-align: top;'><?php esc_html_e( 'The following options affect on frontend Shop Page.', 'ultimate-woocommerce-auction' ); ?></span>  
							</td>

							</tr>
							   
							 <tr>
							 <th scope="row"><?php esc_html_e( 'Auctions Display:', 'ultimate-woocommerce-auction' ); ?></th>
							 
							 <td>
							 <input <?php checked($expired_enable, 'yes'); ?> value="yes" name="uwa_expired_enabled" type="checkbox">
							  <?php esc_html_e( 'Show Expired Auctions.', 'ultimate-woocommerce-auction' ); ?>
							 </td>
							 </tr>
							   
							 
							<tr>
							 <th scope="row"><?php esc_html_e( 'Show Auctions on:', 'ultimate-woocommerce-auction' ); ?></th>							 
							 <td>
							 <input <?php checked($shop_enable, 'yes'); ?> value="yes" name="uwa_shop_enabled" type="checkbox">
							  <?php esc_html_e( 'On Shop Page.', 'ultimate-woocommerce-auction' ); ?>
							 </td>
							 </tr>
							<tr>
							 <th scope="row"></th>							 
							 <td>
							 <input <?php checked($search_enable, 'yes'); ?> value="yes" name="uwa_search_enabled" type="checkbox">
							 <?php esc_html_e( 'On Product Search Page.', 'ultimate-woocommerce-auction' ); ?>
							 </td>
							 </tr> 
							 
							<tr>
							 <th scope="row"></th>							 
							 <td>
							 <input <?php checked($cat_enable, 'yes'); ?> value="yes" name="uwa_cat_enabled" type="checkbox">
							  <?php esc_html_e( 'On Product Category Page.', 'ultimate-woocommerce-auction' ); ?>
							 </td>
							 </tr>  
	
							<tr>
							 <th scope="row"></th>							 
							 <td>
							 <input <?php checked($tag_enable, 'yes'); ?> value="yes" name="uwa_tag_enabled" type="checkbox"> <?php esc_html_e( 'On Product Tag Page.', 'ultimate-woocommerce-auction' ); ?>
							 </td>
							 </tr> 



							 <!--  Proxy Auction Settings -->

							<td colspan="2">
								<div class="pro-option-css">
								<h2 class="uwa_section_tr pro-color"><?php esc_html_e( 'Proxy Auction Settings', 'ultimate-woocommerce-auction' ); ?> <?php esc_html_e( '(PRO Features)', 'ultimate-woocommerce-auction' ); ?></h2>
								<span style="margin-right:10px"> </span>  
								<a href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank" class="update-pro-link">Buy PRO Version to unlock</a>		
								</div>
							</td>
							

							<tr class="pro-color">
								<th scope="row">
									<label for="uwa_bid_ajax_interval_update_pro"><?php esc_html_e( 'Enable Proxy Bidding:', 'ultimate-woocommerce-auction' ); ?></label>   
								</th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($admin_bid_enable, 'yes'); ?> name="uwa_allow_admin_to_bid_update_pro"  id="uwa_allow_admin_to_bid_update_pro" value="" disabled>
									<?php esc_html_e('Enable Proxy Bidding.', 'ultimate-woocommerce-auction');  ?>
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("Proxy Bidding (also known as Automatic Bidding) - Our automatic bidding system makes bidding convenient so you don't have to keep coming back to re-bid every time someone places another bid. When you place a bid, you enter the maximum amount you're willing to pay for the item. The seller and other bidders don't know your maximum bid. We'll place bids on your behalf using the automatic bid increment amount, which is based on the current high bid. We'll bid only as much as necessary to make sure that you remain the high bidder, or to meet the reserve price, up to your maximum amount.", 'ultimate-woocommerce-auction'); ?>	
									</span></a>
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_allow_owner_to_bid_update_pro"  id="uwa_allow_owner_to_bid_update_pro" value="" disabled>
								<?php esc_html_e('Mask Username.', 'ultimate-woocommerce-auction');  ?>		<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("If you enable Mask Username for proxy bidding username will add ****** and not display full Username public", 'ultimate-woocommerce-auction'); ?>	
									</span></a>				 
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_allow_owner_to_bid_update_pro"  id="uwa_allow_owner_to_bid_update_pro" value="" disabled>
								<?php esc_html_e('Mask Bid Amount', 'ultimate-woocommerce-auction');  ?>		
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("if you enable Mask Bid for proxy bidding Bid value will add ****** and not display full Bid Value public", 'ultimate-woocommerce-auction'); ?>	
									</span></a>				 
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_allow_owner_to_bid_update_pro"  id="uwa_allow_owner_to_bid_update_pro" value="" disabled>
								<?php esc_html_e('Place bid on behalf of first user if maximum bid of second user matches with first user.', 'ultimate-woocommerce-auction');  ?>		
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong><span style="width: 500px; margin-left: -375px;"><?php esc_html_e("If User 1 has set a specific maximum bid and if User 2 comes and places same maximum bid, then plugin will show alert message to user 2 and will place bid on behalf of User 1 of same amount as his maximum bid.", 'ultimate-woocommerce-auction'); ?>	
									</span></a>				 
								</td>
							</tr>

							<!-- End proxy Auction Settings -->



							<!--  Silent Auction Settings -->

							<tr >
								<td colspan="2">
								<div class="pro-option-css">
								<h2 class="uwa_section_tr pro-color"><?php esc_html_e( 'Silent Auction Settings', 'ultimate-woocommerce-auction' ); ?> <?php esc_html_e( '(PRO Features)', 'ultimate-woocommerce-auction' ); ?></h2>
								<span style="margin-right:10px"> </span>  
								<a href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank" class="update-pro-link">Buy PRO Version to unlock</a>		
								</div>
							</td>
								
								
							</tr>

							<tr class="pro-color">
								<th scope="row">
									<label for="uwa_silent_bid_enable_update_pro"><?php esc_html_e( 'Enable Silent Bidding:', 'ultimate-woocommerce-auction' ); ?></label>   
								</th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($admin_bid_enable, 'yes'); ?> name="uwa_silent_bid_enable_update_pro"  id="uwa_silent_bid_enable_update_pro" value="yes" disabled>
									<?php esc_html_e('Enable Silent Bidding', 'ultimate-woocommerce-auction');  ?>
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("A Silent-bid auction is a type of auction process in which all bidders simultaneously submit Silent bids to the auctioneer, so that no bidder knows how much the other auction participants have bid. The highest bidder is usually declared the winner of the bidding process.", 'ultimate-woocommerce-auction'); ?>	
									</span></a>
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_silent_maskusername_enable_update_pro"  id="uwa_silent_maskusername_enable_update_pro" value="yes" disabled>
								<?php esc_html_e('Mask Username', 'ultimate-woocommerce-auction');  ?>		
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("If you enable Mask Username for silent bidding username will add ****** and not display full Username public", 'ultimate-woocommerce-auction'); ?>	
									</span></a>				 
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_silent_maskbid_enable_update_pro"  id="uwa_silent_maskbid_enable_update_pro" value="" disabled>
								<?php esc_html_e('Mask Bid Amount', 'ultimate-woocommerce-auction');  ?>		<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("If you enable Mask Bid for silent bidding Bid value will add ****** and not display full Bid Value public", 'ultimate-woocommerce-auction'); ?>	
									</span></a>				 
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_restrict_bidder_enable_update_pro"  id="uwa_restrict_bidder_enable_update_pro" value="" disabled>
								<?php esc_html_e('Restrict users to bid only one time.', 'ultimate-woocommerce-auction');  ?>		
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("In reality, Silent auctions accept single bid from each user. You can check this field to allow single bid for each user.", 'ultimate-woocommerce-auction'); ?>	
									</span></a>				 
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_silent_outbid_email_update_pro"  id="uwa_silent_outbid_email_update_pro" value="" disabled>
								<?php esc_html_e('Do you want to send outbid notification.', 'ultimate-woocommerce-auction');  ?>
								</td>
							</tr>
							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" <?php checked($owner_bid_enable, 'yes'); ?> name="uwa_silent_outbid_email_cprice_update_pro"  id="uwa_silent_outbid_email_cprice_update_pro" value="" disabled>
								<?php esc_html_e(' Show Current Bid Value In outbid mail.', 'ultimate-woocommerce-auction');  ?>		
								</td>
							</tr>
							<!-- End silent Auction Settings -->



							<tr >
							
							   <td colspan="2">
							   <h2 class="uwa_section_tr"><?php esc_html_e( 'Auction Detail Page', 'ultimate-woocommerce-auction' ); ?></h2>
							   
								  
						<span style='vertical-align: top;'><?php esc_html_e( 'The following options affect on frontend Auction Detail page.', 'ultimate-woocommerce-auction' ); ?></span>  </td>
				  
							   </tr>    


<tr>
								<th scope="row">
									<label for="uwa_countdown_format"><?php esc_html_e( 'Countdown Format', 'ultimate-woocommerce-auction' ); ?></label>
								</th>
								
									<td>									
									<input type="text" name="uwa_countdown_format" class="regular-number" id="uwa_countdown_format" value="<?php echo esc_attr($countdown_format); ?>"><?php esc_html_e( 'The format for the countdown display. Default is yowdHMS', 'ultimate-woocommerce-auction' ); ?>
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
		<span style="width: 500px; margin-left: -375px;"><?php esc_html_e("Use the following characters (in order) to indicate which periods you want to display: 'Y' for years, 'O' for months, 'W' for weeks, 'D' for days, 'H' for hours, 'M' for minutes, 'S' for seconds.	Use upper-case characters for mandatory periods, or the corresponding lower-case characters for optional periods, i.e. only display if non-zero. Once one optional period is shown, all the ones after that are also shown.", 'ultimate-woocommerce-auction');
                                     ?>	
		</span></a>	</div>
									</br>
															
								</td>
							   </tr>
						<tr>				
						<th scope="row">
							<label for="uwa_hide_compact_enable"><?php esc_html_e( 'Hide compact countdown', 'ultimate-woocommerce-auction' ); ?></label>
						</th>
						<td>
							<input <?php checked($compact_checked, 'yes'); ?> value="yes" name="uwa_hide_compact_enable" type="checkbox">
							<?php esc_html_e('Hide compact countdown format and display simple format.','ultimate-woocommerce-auction');?>	
					    </td>
					</tr>	 
							 
							 <tr>
							 <th scope="row"><?php esc_html_e( 'Enable Specific Sections:', 'ultimate-woocommerce-auction' ); ?></th>
							 
							 <td>
							<input <?php checked($private_tab_enable, 'yes'); ?> value="yes" name="uwa_private_message" type="checkbox">
								<?php esc_html_e('Enable Send Private message.','ultimate-woocommerce-auction');?>
							 </td>
							 </tr>							 
							 
							 <tr>
							 <th scope="row"></th>
							 
							 <td>
							 <input <?php checked($bids_tab_enable, 'yes'); ?> value="yes" name="uwa_bids_tab" type="checkbox">
								<?php esc_html_e('Enable Bids section.','ultimate-woocommerce-auction');?>	
							 </td>
							 </tr> 
							 
							<tr>
							 <th scope="row"></th>
							 
							 <td>
							 <input <?php checked($watchlists_tab_enable, 'yes'); ?>  value="yes" name="uwa_watchlists_tab" type="checkbox">
							 <?php esc_html_e( 'Enable Watchlists.', 'ultimate-woocommerce-auction' ); ?>
								
							 </td>
							 </tr> 		

							 <tr>
							 	<th scope="row"><label for="uwa_enable_bid_place_warning"><?php esc_html_e( 'Enable an alert box:', 'ultimate-woocommerce-auction' ); ?></label></th>
							 	<td class="uwaforminp">
							 						
						<input type="checkbox" <?php checked($bid_warning, 'yes'); ?> name="uwa_enable_bid_place_warning"  id="uwa_enable_bid_place_warning" value="yes">
						<?php esc_html_e('Enable an alert box for confirmation when user places a bid.', 'ultimate-woocommerce-auction');  ?><a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
						<span>
							<?php esc_html_e('This setting lets you enable an alert confirmation which is shown to user when they place a bid.', 'ultimate-woocommerce-auction');  ?>
					    </span></a>		
							 	</td>
							 </tr>	



							 <!-- Timer and Soft Close / Avoid Sniping settings -->

							<tr >
								<td colspan="2">
									<div class="pro-option-css">
									<h2 class="uwa_section_tr pro-color"><?php esc_html_e( 'Timer and Soft Close / Avoid Sniping', 'ultimate-woocommerce-auction' ); ?> <?php esc_html_e( '(PRO Features)', 'ultimate-woocommerce-auction' ); ?></h2>
									<span style="margin-right:10px"> </span>  
									<a href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank" class="update-pro-link">Buy PRO Version to unlock</a>		
									</div>
								</td>
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping_update">
							   		Choose from where Countdown Timer would get time:</label>
								</th>
								<td class="uwaforminp">	
										<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
										<span>Timer is essential for auctions and they should run in a way so that each user sees approximate same time left on their browser. Though this depends on various factors other than our software but we have provided 2 ways for timer to get time. First way is recommended when bidders are in one timezone or country. We recommend using this setting as the calculation of time logic is fast. The second way should be chosen when your bidders are at different locations around the globe. </span></a>					

									<input type="radio" name="timer_type_update" value="timer_jquery_update"  disabled>
										<span class="description">Local - Ideal when Bidders are in single timezone (Recommended)</span>
										<span style="margin-right:10px;"></span>
									<input type="radio" name="timer_type_update" value="timer_react_update" disabled>
										<span class="description">Global - Ideal when Bidders are all over the World.</span>					
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping_update">
							   		Anti-sniping: How should users see an updated time left (Timer value)?</label>
								</th>
								<td class="uwaforminp">	

										<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
										<span>When a user places a bid which invokes anti-sniping (soft-close) then the time left will change and thus the timer shown on the page has to be updated to show correct present value. Since other users who were already seeing the product detail page, it is imperative for them to see the updated time left and the best way to update timer value on their product detail page would be to Automatic Page Refresh Manual Page Refresh As admin you can choose among these two values. </span></a>					

			                        <input type="radio" name="anti_sniping_timer_update_notification_update" value="auto_page_refresh" disabled>
										<span class="description">Auto Page Refresh</span>
										<span style="margin-right:10px;"></span>
									<input type="radio" name="anti_sniping_timer_update_notification_update" value="manual_page_refresh" disabled>
										<span class="description">Manual Page Refresh</span>		
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping">
							   		What message to show when timer has changed?</label>
								</th>
								<td class="uwaforminp">
								<textarea name="anti_sniping_clock_msg_update" id="anti_sniping_clock_msg_update" rows="2" cols="50" disabled>Time left has changed due to soft-close</textarea>
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping_update">
							   		Anti-sniping: What do you want to do?</label>
								</th>
								<td class="uwaforminp">	
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>We provide two options. First option extending auction if bid placed meet below timing. Second option will reset auction and will send email to
										all bidders intimating latest bid </span></a>

									<input type="radio" name="uwa_aviod_snipping_type_main_update" id="uwa_aviod_snipping_type_extend_update" value="sniping_type_extend_checked" disabled>
										<span class="description">Extend Auction</span>
										<span style="margin-right:10px;"></span>
									<input type="radio" name="uwa_aviod_snipping_type_main_update" id="uwa_aviod_snipping_type_reset_update" value="sniping_type_reset_checked" disabled>
									<span class="description">Reset Auction</span>				
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping_update">Anti-sniping: Extend Auction options</label>
								</th>
								<td class="uwaforminp">	
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>We provide two options. First option will keep extending auction if bid placed meet below timing. Second option will extend auction only once and will send email to 
										all bidders intimating latest bid </span></a>						
									<input type="radio" name="uwa_aviod_snipping_type_update" id="uwa_aviod_snipping_type_recursive_update" value="snipping_recursive" disabled> 
										<span class="description">Extend Auction in recursive manner</span>
										<span style="margin-right:10px;"></span> 
									<input type="radio" name="uwa_aviod_snipping_type_update" id="uwa_aviod_snipping_type_once_update" value="snipping_only_once" disabled> 
									<span class="description">Extend Auction only once</span>			
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping_update">Anti-sniping: At what time should it kick-in?</label>
								</th>
								<td class="uwaforminp">	
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>Mention time left for auction to close: </span></a>
									<input type="number" placeholder="Hours" name="uwa_auto_extend_when_update" class="small-text regular-number_update" id="uwa_auto_extend_when" value="" min="0" disabled="">
									<input type="number" placeholder="Minutes" name="uwa_auto_extend_when_m_update" class="small-text regular-number" id="uwa_auto_extend_when_m_update" value="" min="0" disabled="">
									<input type="number" placeholder="Seconds" name="uwa_auto_extend_when_s_update" class="small-text regular-number" id="uwa_auto_extend_when_s_update" value="" min="0" max="59" disabled="">
														
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>Note: You should use hours and minutes field and we do not recommend to use seconds field for the simple reason that loading of page after refresh depends on hosting server capacity and the page content and that varies from customer to customer and thus the timer wont be real time as you would expect. </span></a>
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_avoid_snipping_update">Anti-sniping: What time should it extend or reset to?</label>
								</th>
								<td class="uwaforminp">	
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>Extend auction by following time: </span></a>
									
									<input type="number" placeholder="Hours" name="uwa_auto_extend_time_update" class="small-text regular-number" id="uwa_auto_extend_time_update" value="" min="0" disabled="">
									<input type="number" placeholder="Minutes" name="uwa_auto_extend_time_m_update" class="small-text regular-number" id="uwa_auto_extend_time_m_update" value="" min="0" disabled="">
									<input type="number" placeholder="Seconds" name="uwa_auto_extend_time_s_update" class="small-text regular-number" id="uwa_auto_extend_time_s_update" value="" min="0" max="59" disabled="">
														
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>Note: You should use hours and minutes field and we do not recommend to use seconds field for the simple reason that loading of page after refresh depends on hosting server capacity and the page content and that varies from customer to customer and thus the timer wont be real time as you would expect. </span></a>
								</td> 
							</tr>
							
							<!-- End Timer and Soft Close / Avoid Sniping settings -->


							<!-- Extra settings -->

							<tr class="pro-color">
								<td colspan="2">
									<div class="pro-option-css">
									<h2 class="uwa_section_tr pro-color"><?php esc_html_e( 'Extra Settings', 'ultimate-woocommerce-auction' ); ?> <?php esc_html_e( '(PRO Features)', 'ultimate-woocommerce-auction' ); ?></h2>
									<span style="margin-right:10px"> </span>  
									<a href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank" class="update-pro-link">Buy PRO Version to unlock</a>		
									</div>
								</td>
							</tr>

							<tr class="pro-color">
								<th scope="row"><label for="uwa_avoid_snipping_update">
									Auto create order after Auction expire</label></th>
								<td class="uwaforminp">
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>When an auction product will expire then WC order will be created with "pending payment" status and will have payment details (except shipping charge).</span></a>

									<label class="switch">
									  <!-- <input type="checkbox"> --> 
									  <input class="coupon_question" type="checkbox" name="uwa_auto_order_enable_update" id="uwa_auto_order_enable_update" value="1" disabled="">
									  <span class="slider"></span>
									</label>

									<span class="description">Do you want to automatically generate an order for an auction product?</span>
								</td>
							</tr>

							<tr class=" pro-color answer">
								<th scope="row"></th>
								<td class="uwaforminp">
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>User will have to update their shipping address inside their My Account &gt; Addresses. This will then let admin add shipping cost to the order and taking shipping fee also.</span></a>

									<span>Do you want users to fill their shipping address before they place their bids?</span>
									<p style="padding-left: 20px;">User will have to update their shipping address inside their My Account &gt; Addresses. This will then let admin add shipping cost to the order and taking shipping fee also.</p>
									<br>
									<a style="margin-top: 22px;" href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>Note: User will have to update their shipping address inside their My Account &gt; Addresses. This will then let admin add shipping cost to the order and taking shipping fee also. </span></a>
								
									<input type="radio" name="uwa_shipping_address_update" id="uwa_shipping_address_yes_update" value="yes" disabled=""> 
									<span class="description">Yes</span>
									<span style="margin-right:20px;"></span> 

									
									<span class="uwaforminp"><a href="" class="uwa_fields_tooltip" onclick="return false">
										<strong>?</strong>
										<span>Note: Since user address is not available then there will be difficulty for admin to add shipping cost for the product inside its associated order. </span></a>
											<input type="radio" name="uwa_shipping_address_update" id="uwa_shipping_address_no_update" value="no" disabled=""> 
											<span class="description">No</span>
									</span>
								
								</td>
							</tr>

							<tr class="pro-color">
								<th>
									<label for="uwa_can_maximum_bid_amt_update">Bidding Restriction:</label>
								</th>
								<td class="uwaforminp">	<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>You can set maximum bidding amount here.</span></a>					
									<input type="number" name="uwa_can_maximum_bid_amt_update" style="width: 157px;" class="regular-number" min="1" id="uwa_can_maximum_bid_amt_update" value="" disabled="">						
									Default is  <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1,000,000,000,000</bdi></span>									 
								</td>
							</tr>

							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" name="uwa_allow_admin_to_bid_update" id="uwa_allow_admin_to_bid_update" value="1" disabled="">
									<span class="description">Allow Administrator to bid on their own auction.</span>
								</td>
							</tr>

							<tr class="pro-color">
								<th></th>
								<td class="uwaforminp">						
									<input type="checkbox" name="uwa_allow_owner_to_bid_update" id="uwa_allow_owner_to_bid_update" value="1" disabled="">
									<span class="description">Allow Auction Owner (Seller/Vendor) to bid on their own auction.</span>								 
								</td>
							</tr>

							<tr class="pro-color">
								<th scope="row">
							   		<label for="uwa_block_reg_user_update">
							   		Do you want to block registered user from bidding</label>
								</th>
								<td>
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>If yes, it will block all existing and new users to place bid, defaults is no </span></a>
									
									<input type="radio" name="uwa_block_reg_user_update" id="uwa_block_reg_user_yes_update" value="" disabled> 
										<span class="description">Yes</span>
										<span style="margin-right:20px;"></span> 
									<input type="radio" name="uwa_block_reg_user_update" id="uwa_block_reg_user_no_update" value="" disabled> 
										<span class="description">No</span>
									<br><br>
								</td> 
							</tr>

							<tr class="pro-color">
								<th scope="row">
									<label for="uwa_block_user_text_update">
										What notification message do you want to show to blocked users</label>
								</th>
								<td>
									<textarea name="uwa_block_user_text_update" id="uwa_block_user_text_update" rows="4" cols="50" disabled="">You cannot place a bid on the product yet. Please contact the administrator of the website to get it unblocked.</textarea>
								</td>				
							</tr>

							<tr class="pro-color">
								<th>
									<label for="uwa_global_bid_inc_update">Set Bid Increment Globally:</label>
								</th>
								<td class="uwa_global_bid_inc">	<a href="" class="uwa_fields_tooltip" onclick="return false">
									<strong>?</strong>
									<span>You can set bid increment for every auction</span></a>					
									<input type="number" name="uwa_global_bid_inc_update" style="width: 157px;" class="regular-number" min="1" id="uwa_global_bid_inc_update" value="" disabled="">															 
								</td>
							</tr>

							<tr class="pro-color">
								<th>
									<label for="uwa_can_maximum_bid_amt_update">Relist Options</label>
								</th>
								<td class="uwaforminp">	
									<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>							
										<span>
										<strong>Start auction from beginning :</strong><br>
										When you select this option then all bids are deleted and auction starts from beginning.<br>	<br>
										<strong>Start auction from where it ended.</strong>
										<br>						
										When you select this option then auction starts from where it had ended.<br>
										</span>
									</a>					
									<select class="uwa_relist_options" name="uwa_relist_options_update" disabled>
									<option value="uwa_relist_start_from_beg">Start auction from beginning</option>
									<option value="uwa_relist_start_from_end" selected="selected">Start auction from where it ended.						</option>
									</select>
								</td>
							</tr>

							<tr class="pro-color">
								<th>
									<label for="uwa_disable_buy_it_now_update">Disable the Buy It Now</label>
								</th>
								<td class="uwaforminp">
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>
										Disable the Buy It Now option once bidding has reached the reserve price.					    </span></a>						
									<input type="checkbox" name="uwa_disable_buy_it_now_update" id="uwa_disable_buy_it_now_update" value="1" disabled="">
									<span class="description">Disable the Buy It Now option once bidding has reached the reserve price.</span>
											
								</td>
							</tr>

							<tr class="pro-color">
								<th>
								</th>
								<td class="uwaforminp">
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>
										Disable the Buy It Now option once bidding has reached the Buy Now price.					    </span></a>						
									<input type="checkbox" name="uwa_disable_buy_it_now__bid_check_update" id="uwa_disable_buy_it_now__bid_check_update" value="1" disabled="">
									<span class="description">Disable the Buy It Now option once bidding has reached the Buy Now price.</span>
											
								</td>
							</tr>

							<tr class="pro-color">
								<th>
									<label for="uwa_enable_bid_place_warning_update">Enable an alert box.</label>
								</th>
								<td class="uwaforminp">
								<a href="" class="uwa_fields_tooltip" onclick="return false"><strong>?</strong>
									<span>
										This setting lets you enable an alert confirmation which is shown to user when they place a bid.					    </span></a>						
									<input type="checkbox" name="uwa_enable_bid_place_warning_update" id="uwa_enable_bid_place_warning_update" value="1" disabled="">
									<span class="description">Enable an alert box for confirmation when user places a bid.</span>
											
								</td>
							</tr>


							<!-- End extra settings -->
							 


							 <tr>							
							   <td colspan="2" style="margin:0!important; padding:0!important;" >
							   <h2 style="border-top: 1px solid #DFDFDF;"></h2>
							 </tr>
							 <tr>
							 
							<tr>

							<th scope="row"><label style="font-size:20px;"><?php esc_html_e( 'Footer Text', 'ultimate-woocommerce-auction' ); ?></label></th>
							<td class="">
					
								<input <?php echo $uwa_copyright_checked_enable; ?> value="1" 
								name="uwa_copyright_text" type="checkbox"><?php esc_html_e( 'Enable Copyright Text in Footer', 'ultimate-woocommerce-auction'); ?> 
							</td>
							</tr> 							 				   

						</tbody>						
					</table>
					

						<tfoot>
							<tr>
								<td colspan="2" valign="top" scope="row">								
									<input type="submit" id="uwa-settings-submit" name="uwa-settings-submit" class="button-primary" value="<?php esc_html_e('Save Changes','ultimate-woocommerce-auction');?>" />
								</td>
							</tr>
						</tfoot>
					</table>
					
					
				</div><!-- /.inside -->
			</div></div></div></div>
			<!-- bend of the meta box section -->
        </form>		
		</div>
    </div>