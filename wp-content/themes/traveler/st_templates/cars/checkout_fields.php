<?php
/**
 * @package WordPress
 * @subpackage Traveler
 * @since 1.0
 *
 * Cars check out field
 *
 * Created by ShineTheme
 *
 */
?>
<div class="clearfix">
    <div class="row">

        <div class="col-sm-12">
            <div class="form-group">
                <label><?php st_the_language('driver_name') ?> <span class="require">*</span></label>
                <input name="driver_name" value="<?php echo STInput::request('driver_name') ?>" type="text" placeholder="<?php st_the_language('driver_name') ?>"  class="form-control">
            </div>
            <div class="form-group">
                <label><?php st_the_language('driver_age') ?> <span class="require">*</span></label>
                <input name="driver_age" value="<?php echo STInput::request('driver_age') ?>" type="text" placeholder="<?php st_the_language('driver_age') ?>"  class="form-control">
            </div>
        </div>

    </div>


</div>