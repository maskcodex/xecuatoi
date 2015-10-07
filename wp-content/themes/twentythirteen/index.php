<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div id='top-content'>
            <?php get_template_part( 'car', 'searchform' ); ?>
            <div id='slider'>
                <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg">
            </div>
            <div class='clr'></div>
        </div>
        <div id='content'>
            <div class='content-box'>
            	<div id='call-info'>
            		<p >Tổng đài đặt xe</p>
            		<p ><span class='red-style-large'>18001234 </span><i>( Miễn phí cuộc gọi)</i></p>
					Gọi ngay để đặt chỗ và xác nhận thông tin đặt xe.
            	</div>
                <table id='car-list'>
                    <tr>
                        <td><h4>Tu HCM - Vũng Tàu</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" /><br />
                            Xe Toyota Innova<br />
                            <span class='red-style-medium'>1.000.000</span> VND</td>
                        <td><h4>Tu HCM - Vung tau</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" /><br />
                            Xe 7 cho<br />
                            <span class='red-style-medium'>1.000.000</span> VND</td>
                        <td><h4>Tu HCM - Vung tau</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" /><br />
                            Xe 7 cho<br />
                            <span class='red-style-medium'>1.000.000</span> VND</td>
                    </tr>
                </table>
            </div>
            <div class='content-box'>
                <table id='info-list' cellpadding='15px'>
                    <tr>
                        <td><h3>Dịch vụ Xe Của Tôi</h3>
<p>Website cung cấp dịch vụ thuê xe trực tuyến tốt nhất, kết nối nhà cung cấp dịch vụ thuê xe và khách hàng.

Cung cấp đầy đủ và chính xác thông tin của nhà cung cấp, xe, lịch hoạt động và giá thuê xe.</p></td>
                        <td><h3>Lợi ích khách hàng</h3>
<p>Chủ xe có thể quản lý tài khoản, quản lý thành viên, quản lý các đầu xe và giá cả cho thuê. Ngoài ra chủ xe còn có thể quản lý lịch hoạt động của xe, nhận thông tin nhu cầu thuê xe, quản lý đặt thuê. Hệ thống cung cấp những báo cáo đầy đủ và chi tiết để chủ xe linh động trong quản lý.</p></td>
                        <td><h3>Chất lượng đội xe</h3>
<p>Khách hàng hoàn toàn yên tâm và tin tưởng vào dịch vụ. Thủ tục đăng ký tham gia đơn giản, mọi thông tin cá nhân đều được hệ thống bảo mật cao nhất.

Khách hàng có thể quản lý tài khoản của mình, tìm kiếm xe, xem thông tin chi tiết xe cho thuê, đăng tin nhu cầu cần thuê xe, đặt thuê xe…</p></td>
                    </tr>
                </table>
            </div>
        </div>
<?php get_footer(); ?>
