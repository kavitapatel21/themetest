<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ultimate WooCommerce Auction Pro - business addons
 *
 * @package Ultimate WooCommerce Auction Pro
 * @author Nitesh Singh 
 * @since 1.0 
 *
 */

?>


<div class="uwa_main_setting wrap woocommerce">	
	<h1 class="uwa_admin_page_title">
				<?php _e( 'Addons', 'ultimate-woocommerce-auction' ); ?>				
				
	</h1>
	<?php
	$uwa_all_addons_list =  array('uwa_addons' =>
		array(
			'slug' => _x( 'uwa_buyers_premium_addon', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( "Buyer's Premium", 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( "Charge a premium amount over and above Bid Amount for admin or auction owner.", 'Addon Description', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'uwa_buyers_premium_addon.jpg', 'Addon Thumbnail', 
				'ultimate-woocommerce-auction' )),
			 
		array(
			'slug' => _x( 'uwa_stripe_auto_debit_addon', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( 'Credit Card Auto Debit', 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( 'Collect User Credit Card on registration and 
				automatically debit winning amount and transfer to Stripe Account of auction 
				owner.', 'Addon Description', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'stripe.jpg', 'Addon Thumbnail', 'ultimate-woocommerce-auction' )),
			 
		array(
			'slug' => _x( 'uwa_twilio_sms_addon', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( 'SMS Notification', 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( 'Send SMS notification for bid, outbid, won and ending soon using Twilio.', 'Addon Description', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'Twilio_SMS.jpg', 'Addon Thumbnail', 'ultimate-woocommerce-auction' )),
	

		array(
			'slug' => _x( 'uwa_offline_dealing_addon', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( 'Offline Dealing for Buyer & Seller', 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( 'Exchange contact details of each other and settle your auction offline.', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'offline_dealing.jpg', 'Addon Thumbnail', 'ultimate-woocommerce-auction' )),


		array(
			'slug' => _x( 'uwa_currency_switcher', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( 'Currency Switcher With Aelia', 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( 'Our Addons show auction prices in multiple currencies using Aelia Currency Switcher plugin', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'aelia_cs.jpg', 'Addon Thumbnail', 'ultimate-woocommerce-auction' )),
	
		
		array(
			'slug' => _x( 'uwa_currency_switcher', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( 'Whatsapp Message Notification', 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( 'Send Whatsapp message notification for outbid, won and ending soon using Twilio.', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'whatsapp_msg.jpg', 'Addon Thumbnail', 'ultimate-woocommerce-auction' )),
	
		
		array(
			'slug' => _x( 'uwa_currency_switcher', 'Addon Slug', 'ultimate-woocommerce-auction' ),
			'name' => _x( 'Take Fees for Bidding', 'Addon Name', 'ultimate-woocommerce-auction' ),
			'description' => _x( 'Bidder have to pay fee before placing the bid', 'ultimate-woocommerce-auction' ),
			'thumbnail' => _x( 'fee_to_placebid.jpg', 'Addon Thumbnail', 'ultimate-woocommerce-auction' ))
		);
		
		
		$uwa_addons_list = $uwa_all_addons_list;		
 
	?>		
	<h2 class="uwa_addon_setting_title"><?php _e( 'Addons for Ultimate Woo Auction Pro', 'ultimate-woocommerce-auction' ); ?>	</h2>	
	<div class="uws-addons-content">
		
			<div class="wp-list-table widefat uws-addons">
			
			<?php if ( $uwa_addons_list ) { ?>			
			 <?php foreach ( $uwa_addons_list as $slug => $addon ){ ?>				
				<div class="plugin-card">
                    <div class="plugin-card-top">
                        <div class="name column-name">
                            <h3>
                                <span class="plugin-name"><?php echo $addon['name']; ?></span>
                                <img class="plugin-icon" src="<?php echo WOO_UA_ASSETS_URL . '/images/addons/' . $addon['thumbnail'] ?>" alt="" />
                            </h3>
                        </div>

                        <div class="action-links">
                            <ul class="plugin-action-buttons">
                                <li data-addon="<?php echo $addon['slug']; ?>">
                                    <label class="uwa-switch">
                                        <a href="#" class="uwa-toggle-addons" style="outline: none;"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="20"><rect width="42" height="20" rx="10" fill="#c0c3c6"></rect><circle cx="6" cy="6" r="6" transform="translate(6 4)" fill="#fff"></circle></svg></a>
                                    </label>
                                </li>
							
                            </ul>
                        </div>

                        <div class="desc column-description">
                            <p>
                                <?php echo $addon['description']; ?>
                            </p>
							
                        </div>
                    </div>
                </div>
				<?php } ?>
			
			<?php } ?>
				
				
			</div>
			
		<div class="popup">
    <label class="close" for="example1"><img src="<?php echo WOO_UA_ASSETS_URL;?>images/popup-close.png"></label>
    <div class="modual-popup-content">
      <img src="<?php echo WOO_UA_ASSETS_URL;?>images/484964199.png">
      <h4><a href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank">Unlock</a></h4>
      <h3>7+ Addon</h3>
      <a class="prem-plan-btn"href="">With Ultimate Woo Auction Pro Plans</a>
      <p class="upgrade-text">We’re sorry <br> Auction Addon are not available on <strong>"Ultimate Auction for WooCommerce"</strong>. Please upgrade to a PRO plan to unlock the Addon of your choice.</p>
      <a class="Upgrade-pro-btn" href="<?php echo $GLOBALS['update_link']['pro_link']; ?>" target="_blank">Upgrade to Pro</a>
      
    </div>
</div>
		
		</div>	
		



 






<script>
  jQuery(document).ready(function(){
    jQuery(".uwa-toggle-addons").click(function(){
      jQuery(".popup").toggleClass("show");
    });
  });
  jQuery("label.close").click(function(){
    jQuery(".popup").removeClass("show");
});
</script>
<style>
a:focus{
	outline: none;
}
  .popup label.close img {
    width: 16px;
}
.modual-popup-content h4 a {
    color: #ff5722;
    font-size: 20px;
    text-decoration: none;
}
.modual-popup-content {
    padding: 40px;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
a.Alredy-Upgraded-link {
    color: #7867ff;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
    margin-top: 10px;
}
.modual-popup-content p {
    text-align: center;
    margin-bottom: 30px;
}
a.Upgrade-pro-btn {
    background-color: #ff5722;
    color: #fff;
    text-decoration: none;
    padding: 12px 15px;
    font-weight: 600;
    letter-spacing: 0.5px;
    font-size: 15px;
    margin-bottom: 20px;
}
a.prem-plan-btn {
    background-color: #e9f3ff;
    padding: 10px 25px;
    border-radius: 20px;
    text-decoration: none;
    color: #1c81fb;
    font-weight: bold;
    margin-bottom: 10px;
}
.popup.show {
    opacity: 1;
    visibility: visible;
    position: fixed;
    z-index: 9;
    left: 0;
    right: 0;
	top: 20%;
}

.black-bg {
  opacity: 0;
  position: fixed;
  background: radial-gradient(rgba(0, 0, 0, 0.8) 75%, rgba(0, 0, 0, 0.6));
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.popup {
    opacity: 0;
    overflow: hidden;
    background: #fcfcfc;
    width: 400px;
    padding: 0;
    margin: 0 auto;
    box-shadow: #000 0 1px 20px;
    transition: all .1s ease-out;
}

.input.uwa-toggle-addons:checked ~ .black-bg {
  opacity: 1;
  transition: opacity .15s ease-in;
}

.input.uwa-toggle-addons:checked ~ .popup {
  opacity: 1;
  transition: opacity .15s ease-in;
}

.input.uwa-toggle-addons:checked + label::before {
  content: "Close ";
}

.close {
  position: absolute;
  top: 0px;
  right: 10px;
  font-size: 3em;
  color: #ccc;
}

.close:hover {
  color: #d00;
}

.uws-addons-content .plugin-card .plugin-action-buttons .uwa-switch input:checked+.uwa_slider {

background-color: #0068a0

}



.uwa_addon_setting_title {

padding: 6px 0 6px 12px;

padding: 10px 0 12px 12px;

margin: 0 0 10px 0;

font-weight: 600!important;

font-size: 1.3em!important;

background-color: #f9f9f9;

color: #23282d!important

}



.uwa-switch {

position: relative;

display: inline-block;

width: 40px;

height: 18px

}



.uwa-switch input {

display: none

}



.uwa-switch .uwa_slider {

position: absolute;

cursor: pointer;

top: 0;

left: 0;

right: 0;

bottom: 0;

background-color: #ccc;

-webkit-transition: .4s;

transition: .4s

}



.uwa-switch .uwa_slider.round {

border-radius: 34px

}



.uwa-switch .uwa_slider.round:before {

border-radius: 50%

}



.uwa-switch .uwa_slider.round:before {

position: absolute;

content: "";

height: 14px;

width: 14px;

left: 2px;

bottom: 2px;

background-color: #fff;

-webkit-transition: .4s;

transition: .4s

}



.uwa-switch input:checked+.uwa_slider:before {

-webkit-transform: translateX(22px);

-ms-transform: translateX(22px);

transform: translateX(22px)

}



</style>