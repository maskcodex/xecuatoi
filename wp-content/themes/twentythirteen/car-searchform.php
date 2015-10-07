<div id='pick-form'>
            	<form method="get" id="car-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	                <div id='head-form'>
	                    <ul id='menu-form'>
	                        <li class='active'>Đặt Xe</li>
	                        <li>Xem/thay đổi/Hủy đặt xe</li>
	                    </ul>
	                </div>
	                <div id='form-content'>
	                	<table cellpadding='0' cellspacing='0'>
	                		<tr>
	                			<td><input type="radio" name="direction" value="one_way"  id='one-way' checked><span>Một Chiều</span></td>
	                			<td><input type="radio" name="direction" value="two_way"  id='return-way'><span>Khứ Hồi</span></td>
	                		</tr>
	                		<tr>
                				<td>Đi từ:</td>
	                			<td>Ngày đi:</td>
	                		</tr>
	                		<tr>
	                			<td>
	                				<select>
	  									<option value="audi">Hồ Chí Minh</option>
	  									<option value="bmw">Vũng Tàu</option>
	  									<option value="bmw">Cần Thơ</option>
  									</select>
	                			</td>
	                			<td><input type='date' id='date-start'><input type="time" name="usr_time"></td>
	                		</tr>
	                		<tr>
                				<td>Đến:</td>
	                			<td>Ngày về:</td>
	                		</tr>
	                		<tr>
	                			<td>
	                				<select id='goal-location'>
	  									<option value="audi">Hồ Chí Minh</option>
	  									<option value="bmw">Vũng Tàu</option>
	  									<option value="bmw">Cần Thơ</option>
  									</select>
	                			</td>
	                			<td id='date-end' ><input type='date'><input type="time" name=""></td>
	                		</tr>
	                		<tr>
	                			<td>Loại xe:</td>
	                			<td>
	                				<select>
	  									<option value="audi">Toyota Innova</option>
	  									<option value="bmw">Toyota Fortuner</option>
  									</select>
  								</td>
	                		</tr>
	                		<tr>
	                			<td>Quãng đường dự kiến:</td>
	                			<td><input type='text' value=''></td>
	                		</tr>
	                		<tr>
	                			<td><input type='submit' value='Tìm Xe'></td>
	                			<td><input type='submit' value='Đặt Xe'> </td>
	                		</tr>
	                	</table>
  					  	<input type="hidden" name="search" value="car">
	                </div>
            	</fomr>
            </div>