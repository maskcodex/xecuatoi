<?php
/**
 * @package WordPress
 * @subpackage Traveler
 * @since 1.0
 *
 * Email booking information tours
 *
 * Created by ShineTheme
 *
 */
if(!isset($order_id)) return false;
    $order_code=$order_id;
$first_name=get_post_meta($order_id,'st_first_name',true);
$last_name=get_post_meta($order_id,'st_last_name',true);
echo st()->load_template('email/header',null,array('email_title'=>st_get_language('booking_infomation')));

$main_color=st()->get_option('main_color','#ed8323');

$post_id =  get_post_meta($order_id,'item_id',true);
$st_cart_info = get_post_meta($order_id,'st_cart_info',true);
$st_cart_info = $st_cart_info[$post_id]['data'];
$type_tour = $st_cart_info['type_tour'];
?>
    <tr style="background: white">
        <td colspan="10" style="padding: 10px;">
            <?php if(!isset($send_to_admin)):?>
            <h3 style="
margin-top: 30px;
padding-top: 10px;">
                <?php printf(st_get_language('hi').' <strong>%s</strong>',$first_name.' '.$last_name)?>,
                <br>
                <p><?php st_the_language('thank_you_for_booking') ?></p>

            </h3>
            <?php endif;?>

            <p><strong><?php st_the_language('booking_number')?></strong> <?php echo esc_html($order_id)?></p>
            <p><strong><?php st_the_language('booking_date')?></strong> <?php echo get_the_time(get_option('date_format'),$order_id)?></p>
            <p><strong><?php st_the_language('booking_method')?></strong> <?php

                echo STPaymentGateways::get_gatewayname(get_post_meta($order_id,'payment_method',true));

                ?></p>

            <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>

                <tr>
                    <td style="
border-left: 1px solid #bcbcbc;
border-top: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;
padding: 6px;
background: #e4e4e4;
"

                        >
                        *
                    </td>
                    <td style="
border-left: 1px solid #bcbcbc;
border-top: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;
padding: 6px;
background: #e4e4e4;">
                        <?php st_the_language('item') ?>
                    </td>
                    <td style="
border-left: 1px solid #bcbcbc;
border-top: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;
padding: 6px;
background: #e4e4e4;
border-right: 1px solid #bcbcbc;">
                        <?php st_the_language('infomation') ?>
                    </td>
                </tr>
                <?php
//                $args=array(
//                    'post_type'=>'st_order_item',
//                    'posts_per_page'=>'10',
//                    'meta_key'=>'order_parent',
//                    'meta_value'=>$order_id,
//                );
//                query_posts($args);
                $total=0;
                $i=0;
//                while(have_posts()){
//
//                    the_post();
                    $i++;

                    $order_item_id=$order_id;

                    $object_id=get_post_meta($order_item_id,'item_id',true);

                    $check_in=get_post_meta($order_item_id,'check_in',true);
                    $check_out=get_post_meta($order_item_id,'check_out',true);
                    $datediff=STDate::date_diff(strtotime($check_in),strtotime($check_out));
                    $number=get_post_meta($order_item_id,'item_number',true);
                    $price=get_post_meta($order_item_id,'item_price',true);

                    $total+=  STCart::get_order_item_total($order_item_id,get_post_meta($order_item_id,'st_tax',true)) ;
                    ?>
                    <tr>
                        <td style="
padding: 6px;
border-left: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;" valign="top" align="center" width="5%">
                            <?php echo esc_html($i) ?>
                        </td>
                        <td width="35%" style="vertical-align: top;padding: 6px;border-bottom:1px dashed #ccc;
border-left: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;">
                            <?php echo get_the_post_thumbnail($object_id,array(360,270,'bfi_thumb'=>true),array('style'=>'max-width:100%;height:auto'))?>
                        </td >
                        <td style="padding: 6px;vertical-align: top;border-bottom:1px dashed #ccc;
border-left: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;
border-right: 1px solid #bcbcbc;

">
                            <p><strong><?php st_the_language('booking_address');?> </strong><?php echo get_post_meta($object_id,'address',true)?> </p>
                            <p><strong><?php st_the_language('booking_email') ?></strong><?php echo get_post_meta($object_id,'contact_email',true)?> </p>
                            <p><strong><?php st_the_language('tour') ?> : </strong><a target="_blank" href="<?php  echo get_the_permalink($object_id)?>"><?php  echo get_the_title($object_id)?></a></p>
                            <p><strong><?php st_the_language('tour_max_people') ?> : </strong> <?php echo get_post_meta($object_id,'max_people',true) ?></p>


                            <?php $type_price = get_post_meta($object_id,'type_price',true); ?>
                            <?php if($type_price == 'people_price'){ ?>
                                <p><strong><?php _e('Adult Price',ST_TEXTDOMAIN) ?>: </strong>
                                    <?php echo get_post_meta($order_id,'adult_number',true);?> x
                                    <?php echo TravelHelper::format_money(get_post_meta($object_id,'adult_price',true));?>
                                </p>
                                <p><strong><?php _e('Child Price',ST_TEXTDOMAIN) ?>: </strong>
                                    <?php echo get_post_meta($order_id,'child_number',true);?> x
                                    <?php echo TravelHelper::format_money(get_post_meta($object_id,'child_price',true));?>
                                </p>
                            <?php }else{ ?>
                                <p><strong><?php st_the_language('booking_amount') ?></strong> <?php echo esc_html($number)?></p>
                                <p><strong><?php st_the_language('booking_price') ?></strong>
                                    <?php echo TravelHelper::format_money($price);?>
                                </p>
                            <?php } ?>

                            <p><strong><?php st_the_language('tour_date') ?> : </strong>
                                <?php if($type_tour == 'daily_tour'){ ?>
                                    <?php $date=  $st_cart_info['check_in'] ;if($date) echo date('m/d/Y',strtotime($date)); ?>
                                    <p><strong>
                                            <?php _e('Duration',ST_TEXTDOMAIN) ?>: </strong>
                                        <?php  $day =  get_post_meta($object_id,'duration_day',true)?>
                                        <?php echo esc_html($day) ?>
                                        <?php if($day > 1) _e('days',ST_TEXTDOMAIN); else _e('day',ST_TEXTDOMAIN) ?>
                                    </p>
                                <?php }else{ ?>
                                    <?php $date= $st_cart_info['check_in'];if($date) echo date('m/d/Y',strtotime($date)); ?>
                                    -
                                    <?php $date= $st_cart_info['check_out'];if($date) echo date('m/d/Y',strtotime($date)); ?>
                                <?php } ?>
                             </p>
                        </td>
                    </tr>
                <?php

//                }
//                wp_reset_query();

                ?>
                </tbody>
                <tfoot >
                <tr>
                    <td colspan="2" style="
                    text-align: center;
border-left: 1px solid #bcbcbc;
border-bottom: 1px solid #bcbcbc;
padding: 6px;
background: #e4e4e4;"></td>
                    <td  style="
border-bottom: 1px solid #bcbcbc;
border-right:1px solid #bcbcbc;
padding: 6px;
background: #e4e4e4;">
                        <table cellspacing="0px" cellpadding="0" width="100%">
                            <tr>
                                <td style="border-bottom: 1px dashed #ccc;padding:10px;">
                                    <strong><?php st_the_language('sub_total') ?></strong></td>
                                <td style="border-bottom: 1px dashed #ccc;padding:10px;"><?php
                                        if(get_post_meta($order_code,'st_is_tax_included_listing_page',true)=='on')
                                        {
                                            $tax_percent=get_post_meta($order_code,'st_tax_percent',true);
                                            if($tax_percent)
                                                $total2= $total/100*$tax_percent;
                                            echo TravelHelper::format_money($total-$total2);

                                        }else{
                                            echo TravelHelper::format_money($total);

                                        }
                                    ?></td>
                            </tr>
                            <tr>
                                <td style="border-bottom: 1px dashed #ccc;padding:10px;">
                                    <strong><?php st_the_language('tax') ?></strong></td>
                                <td style="border-bottom: 1px dashed #ccc;padding:10px;"><?php
                                        $tax = get_post_meta($order_code, 'st_tax', true);
                                    $tax_amount=0;

                                    if($tax){
                                            $tax_amount = ($total / 100) * $tax;
                                            echo TravelHelper::format_money($tax_amount);

                                        }elseif(get_post_meta($order_code,'st_is_tax_included_listing_page',true)=='on')
                                        {
                                            $tax_percent=get_post_meta($order_code,'st_tax_percent',true);
                                            if($tax_percent)
                                                echo TravelHelper::format_money($total/100*$tax_percent);
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td  style="border-bottom: 1px dashed #ccc;padding:10px;"><strong><?php st_the_language('total')?></strong></td>
                                <td style="border-bottom: 1px dashed #ccc;padding:10px;">
                                    <?php echo TravelHelper::format_money($total+$tax_amount) ?>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                </tfoot>

            </table>
            <?php
            echo st()->load_template('email/booking_customer_infomation',null,array('order_id'=>$order_id));?>
        </td>
    </tr>

<?php
echo st()->load_template('email/footer');
