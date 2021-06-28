<div class="form">
	<div class="form_title">tim kiem</div>
	<form class="filter_form" action="http://localhost:8088/public?url=homepage/filter" method="post">
		<div class="form_element">
			<div class="form_element_title">khu vuc</div>
			<select name="site" id="site">
				<option value="">tat ca khu vuc</option>
				<option value="hai ba trung">hai ba trung</option>
				<option value="hoan kiem">hoan kiem</option>
				<option value="dong da">dong da</option>
				<option value="hoang mai">hoangmai</option>
				<option value="thanh xuan">thanh xuan</option>
			</select>
		</div>
		<div class="form_element">
			<div class="form_element_title">gia</div>
			<label for="from">tu</label>
			<input type="number" name="costfrom" id="from" class="text1">
			<label for="to" >den</label>
			<input type="number" name="costto" id="to" class="text1">
		</div>
		<div class="form_element">
			<div class="form_element_title">dien tich</div>
			<label for="from">tu</label>
			<input type="number" name="sfrom" id="from" class="text1">
			<label for="to">den</label>
			<input type="number" name="sto" id="to" class="text1">
		</div>
		<div class="form_element">
			<div class="form_element_title"><label for="type">loai nha</label></div>
			<select name="type" id="type">
				<option value="">tat ca</option>
				<option value="chung cu mini">chung cu mini</option>
				<option value="phong tro">phong tro</option>
				<option value="nha nguyen can">nha nguyen can</option>
			</select>
		</div>
		<button class="filter_button" type="submit" name="filter" value="filter">loc</button>
	</form>	
</div>