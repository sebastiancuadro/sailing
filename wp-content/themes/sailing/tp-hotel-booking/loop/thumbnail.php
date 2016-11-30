<?php
/**
 * Product loop thumbnail
 *
 * @author  ThimPress
 * @package Tp-hotel-booking/Templates
 * @version 0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $hb_room;
global $hb_settings;
$gallery = $hb_room->gallery;
$featured = $gallery ? array_shift( $gallery ) : false;
?>
<div class="media">
	<a href="<?php the_permalink(); ?>">
		<?php $hb_room->getImage( 'catalog' ); ?>
		<?php do_action( 'hotel_booking_loop_room_price' ); ?>
	</a>
</div>