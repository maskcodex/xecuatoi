<?php
    /**
     * @package WordPress
     * @subpackage Traveler
     * @since 1.0
     *
     * Tours field duration
     *
     * Created by ShineTheme
     *
     */
    $default=array(
        'title'=>'',
        'is_required'=>'on',
    );

    if(isset($data)){
        extract(wp_parse_args($data,$default));
    }else{
        extract($default);
    }
    if($is_required == 'on'){
        $is_required = 'required';
    }
?>
<div class="form-group form-group-lg form-group-icon-left">
    <i class="fa fa-calendar input-icon input-icon-highlight"></i>
    <label><?php echo esc_html($title)?></label>
    <input name="duration" <?php echo esc_attr($is_required) ?> value="<?php echo STInput::get('duration') ?>" class="typeahead_location form-control <?php echo esc_attr($is_required) ?>" placeholder="<?php st_the_language('tour_duration')?>" type="text" />
</div>