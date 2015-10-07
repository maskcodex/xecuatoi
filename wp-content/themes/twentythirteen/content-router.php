<?php	
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $meta = get_post_meta( get_the_ID() ); 	
		$bien_so = get_post_meta( get_the_ID(), 'biển_số', true );
		$lai_xe = get_post_meta( get_the_ID(), 'lai_xe', true );
		$gia = get_post_meta( get_the_ID(), 'gia_chuyến_đi', true );
		$km = get_post_meta( get_the_ID(), 'số_km_tối_đa', true );
		$gio = get_post_meta( get_the_ID(), 'số_giờ_tối_đa', true );
		$phu_thu = get_post_meta( get_the_ID(), 'phụ_thu', true );
		$xep_hang = get_post_meta( get_the_ID(), 'xếp_hạng', true );
		$hinh = get_post_meta( get_the_ID(), 'hình_ảnh', true );
		$vat = get_post_meta( get_the_ID(), 'vat', true );
	?>
	<div class='car-info'>
		<div class='left-car-info'>
			<div class='car-fearured-image'><?php the_post_thumbnail(); ?></div>
			<div class='list-thumb-image'></div>
		</div>
		<div class='right-car-info'>
			<h2><?php the_title(); ?></h2>
			<table>
				<tr>
					<td>Biển số: <span class='bold'><?php echo $bien_so; ?></span></td>
					<td>Lái xe: <span class='bold'><?php echo $lai_xe; ?></span></td>
				</tr>
				<tr>
					<td>Số KM tối đa: <span class='bold'><?php echo $km; ?></span>Km</td>
					<td>Số giờ tối đa: <span class='bold'><?php echo $gio; ?> Giờ</td>
				</tr>
				<tr>
					<td>Giá chuyến đi: <span class='price'><?php echo number_format($gia); ?></span> VNĐ</td>
					<td>VAT: <span class='bold'><?php echo $vat; ?></span> %</td>
				</tr>
				<tr>
					<td>Phụ Thu: <span class='bold'><?php echo $phu_thu; ?></span> VNĐ</td>
					<td><input type='button' value='Đặt Xe' class='book-car-button'></td>
				</tr>
			</table>
		</div>
		<div class='clr'></div>
	</div>
</article><!-- #post -->



