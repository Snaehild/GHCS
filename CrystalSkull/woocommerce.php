<?php/** Template name: Woocommerce*/?><?php get_header();?><?php if (class_exists('MultiPostThumbnails')) : wp_reset_postdata(); $custombck = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'header-image', $post->ID, 'full'); endif; ?><?php if(empty($custombck)){}else{ ?><?php require_once(get_template_directory() .'/css/header-image-woo.css.php'); ?><?php } ?><?phpif (!function_exists('loop_columns')) {    function loop_columns() {        return 3; // 3 products per row    }}?><div class="page normal-page container-wrap  boxed">	<div class="container">		<div class="row">		    <?php            if ( of_get_option('mainshop') ) {             $main_shop_layout = of_get_option('mainshop');            }else{               $main_shop_layout = 's1';            }            if ( of_get_option('singleprod') ) {            $single_product_layout = of_get_option('singleprod');            }else{               $single_product_layout = 's1';            }            if(is_product()){                if($single_product_layout == 's2' || $single_product_layout == 's3'){                    add_filter('loop_shop_columns', 'loop_columns');                }                switch($single_product_layout) {                    case 's1': ?>                      <div class="col-lg-12 col-md-12">                        <?php woocommerce_content(); ?>                      <div class="clear"></div>                    <?php  break;                    case 's3':                        echo '<div class="col-lg-8 col-md-8">';                            woocommerce_content();                        echo '</div><!--/col-lg-8 col-md-8-->';                        echo '<div id="sidebar" class="col-lg-4 col-md-4">';                            get_sidebar();                        echo '</div><!--/col-lg-8 col-md-8-->';                        break;                    case 's2':                        echo '<div class="col-lg-4 col-md-4">';                            get_sidebar();                        echo '</div><!--/col-lg-8 col-md-8-->';                        echo '<div class="col-lg-8 col-md-8">';                            woocommerce_content();                        echo '</div><!--/col-lg-8 col-md-8-->';                        break;                    default:                        woocommerce_content();                        break;                }            }            //Main Shop page layout            elseif(is_shop() || is_product_category() || is_product_tag()) {                if($main_shop_layout == 's3' || $main_shop_layout == 's2'){                    add_filter('loop_shop_columns', 'loop_columns');                }                switch($main_shop_layout) {                    case 's1': ?>                    <div class="col-lg-12 col-md-12">                        <?php woocommerce_content(); ?>                    <div class="clear"></div>                    <?php    break;                    case 's3':                        echo '<div class="col-lg-8 col-md-8">';                            woocommerce_content();                        echo '</div><!--/col-lg-8 col-md-8-->';                        echo '<div id="sidebar" class="col-lg-4 col-md-4">';                            get_sidebar();                        echo '</div><!--/col-lg-8 col-md-8-->';                        break;                    case 's2':                        echo '<div id="sidebar" class="col-lg-4 col-md-4">';                            get_sidebar();                        echo '</div><!--/col-lg-8 col-md-8-->';                        echo '<div class="col-lg-8 col-md-8">';                            woocommerce_content();                        echo '</div><!--/col-lg-8 col-md-8-->';                        break;                    default:                        woocommerce_content();                        break;                }            }            //regular WooCommerce page layout            else { ?>            <div class="col-lg-12 col-md-12">                <?php woocommerce_content(); ?>            <div class="clear"></div>          <?php  }             ?>			</div>		<div class="clear"></div>		</div>	</div></div><?php get_footer(); ?>