<label for="wight">ส่วนที่ 2 ข้อมูลลสมาชิกในครัวเรือน</label>
</br>
<label for="wight">จำนวนสมาชิกในครัวเรือนที่อยู่อาศัยในห้วง พ.ศ. 2565 มากกว่า 6 เดือนขึ้นไป รวมทั้งสิ้น</label>
<label class="radio-inline col-form-label  col-lg-1">
	<input type="text" class="form-control" id="1_S2_TEXT" name="1_S2_TEXT" value="1" readonly />
	
</label>
<label for="wight">คน</label>
</br>
<label for="wight">(นับรวมผู้ตอบและสมาชิกทุกคน (ทุกช่วงอายุ) ในรอบ 1 ปีที่ผ่านมา)</label>
<div class="p-fluid p-formgrid p-grid">
	<div class="p-field p-col">
		</br>
		<div class="col-lg-1.5" style="margin-left: 10px;">
			<a onclick="addFamily('front','0')" class="ui green button "><i class="plus icon small"></i> เพิ่มสามาชิกในครัวเรือน</a>
		</div>
		</br>
		<div class="row" style="margin-left: 10px;">
			<table class="tg">
				<thead>
					<tr>
						<th>ลำดับที่</br>สมาชิก</br>ในครัวเรือน</th>
						<th>เพศ</th>
						<th>อายุ</th>
						<th>การตกเป็นเหยื่อ</br>อาชญากรรม</br>(1 ม.ค. – 31 ธ.ค. 65)</th>
						<th><u>หมายเหตุ</u></br>(กรณีไม่ระบุคำตอบ)</th>
						<th>กรอกข้อมูลและรายละเอียดการตกเป็นเหยื่ออาชญากรรม</th>
					</tr>
				</thead>
				<tbody id="familyTable">
					<tr>
						<td>1. (ตัวผู้ตอบ)</td>
						<td><input type="radio" id="1_2111" name="1_S2_1_1" value="1"> ชาย <input type="radio" id="1_2112" name="1_S2_1_1" value="2"> หญิง <input type="radio" id="1_2113" name="1_S2_1_1" value="3"> ทางเลือก</td>
						<td><input type="text" class="form-control" id="1_212" name="1_S2_1_2" /></td>
						<td><input type="radio" id="1_2131" name="1_S2_1_3" value="1"> เคย <input type="radio" id="1_2132" name="1_S2_1_3" value="2"> ไม่เคย</td>
						<td><input type="text" class="form-control" id="1_214" name="1_S2_1_4" /></td>
						<td>
							<a href="javascript:void(0)" data-url="<?= site_url('main/saveSurvey/true') ?>" id="1_2151_a" name="1_S2_1_5_BUTTON" type="button" data-toggle="modal" data-target="#modal-edit-1" class="ui basic black button btn-form-hiddend-save disabled"><i id="1_2151_i" class="edit icon large readonly"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="placeTemplate">

		</div>

		<template id="familyTemplate">
			<tr>
				<td>{No.}</td>
				<td><input type="radio" id="1_2{Num}11" name="1_S2_{Num}_1" value="1"> ชาย <input type="radio" id="1_2{Num}12" name="1_S2_{Num}_1" value="2"> หญิง <input type="radio" id="1_2{Num}13" name="1_S2_{Num}_1" value="3"> ทางเลือก</td>
				<td><input type="text" class="form-control" id="1_2{Num}2" name="1_S2_{Num}_2" /></td>
				<td><input type="radio" id="1_2{Num}31" name="1_S2_{Num}_3" value="1"> เคย <input type="radio" id="1_2{Num}32" name="1_S2_{Num}_3" value="2"> ไม่เคย</td>
				<td><input type="text" class="form-control" id="1_2{Num}4" name="1_S2_{Num}_4" /></td>
				<td>
					<a href="javascript:void(0)" data-url="<?= site_url('main/saveSurvey/true') ?>" id="1_2{Num}51_a" name="1_S2_{Num}_5_BUTTON" type="button" data-toggle="modal" data-target="#modal-edit-{Num}" class="ui basic black button btn-form-hiddend-save disabled"><i id="1_2{Num}51_i" class="edit icon large readonly"></i></a>
					<a href="javascript:void(0)" data-url="<?= site_url('main/deleteVictims/{profileId}/'. $u_now_id) ?>" name="1_S2_1_5_Delete" type="button" class="ui basic red button btn-form-save-delete readonly"><i id="1_2151_i" class="delete icon large readonly"></i></a>
				</td>
			</tr>
		</template>

		<template id="templateS3">
			</br>
			<label for="wight">ส่วนที่ 3 ข้อมูลทางประชากรศาสตร์ (ผู้ตกเป็นเหยื่อ)</label>
			</br>

			<div class="row">
				<label for="31" class="col-form-label">3.1 เพศ &nbsp</label>
				<label class="radio-inline col-form-label">
					<input type="radio" id="1_3{Num}11" name="1_S3_{Num}_3_1" value="1"> (1) ชาย
				</label>
				<label class="radio-inline col-form-label">
					<input type="radio" id="1_3{Num}12" name="1_S3_{Num}_3_1" value="2"> (2) หญิง
				</label>
				<label class="radio-inline col-form-label">
					<input type="radio" id="1_3{Num}13" name="1_S3_{Num}_3_1" value="3"> (3) เพศทางเลือก
				</label>
			</div>

			<div class="row">
				<label for="32" class="col-form-label">3.2 อายุ</label>
				<div class="col-lg-3">
					<input type="text" class="form-control" name="1_S3_{Num}_3_2" />
				</div>
				<div class="col-form-label inputTextFix">
					ปี (เต็มปีบริบูรณ์)
				</div>
			</div>

			<div class="row">
				<label for="33" class="col-form-label">3.3 รายได้</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_3{Num}31" name="1_S3_{Num}_3_3" value="1"> (1) ต่ำกว่า 15,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}32" name="1_S3_{Num}_3_3" value="2"> (2) 15,001-25,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}33" name="1_S3_{Num}_3_3" value="3"> (3) 25,001-35,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}34" name="1_S3_{Num}_3_3" value="4"> (4) 35,001-45,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}35" name="1_S3_{Num}_3_3" value="5"> (5) 45,001-55,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}36" name="1_S3_{Num}_3_3" value="6"> (6) 55,001-65,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}37" name="1_S3_{Num}_3_3" value="7"> (7) 65,001-75,000 บาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}38" name="1_S3_{Num}_3_3" value="8"> (8) มากกว่า 75,000 บาท
					</label>
				</div>
			</div>

			<div class="row">
				<label for="34" class="col-form-label">3.4 อาชีพ</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_3{Num}41" name="1_S3_{Num}_3_4" value="1"> (1) ข้าราชการ พนักงานรัฐวิสาหกิจ
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}42" name="1_S3_{Num}_3_4" value="2"> (2) พนักงานเอกชน
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}43" name="1_S3_{Num}_3_4" value="3"> (3) นักเรียน/นักศึกษา
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}44" name="1_S3_{Num}_3_4" value="4"> (4) รับจ้างทั่วไป
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}45" name="1_S3_{Num}_3_4" value="5"> (5) เกษตรกรรม
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}46" name="1_S3_{Num}_3_4" value="6"> (6) ประกอบธุรกิจ
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}47" name="1_S3_{Num}_3_4" value="7"> (7) ไม่ได้ประกอบอาชีพ
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}48" name="1_S3_{Num}_3_4" value="8"> (8) อื่น ๆ...
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-form-label inputTextFix" style="margin-left: 10px;">
					โปรดระบุ
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="1_S3_{Num}_3_4_TEXT" readonly />
				</div>
			</div>

			<div class="row">
				<label for="35" class="col-form-label">3.5 การศึกษาระดับสูงสุด</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_3{Num}51" name="1_S3_{Num}_3_5" value="1"> (1) ไม่เคยเข้ารับการศึกษา
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}52" name="1_S3_{Num}_3_5" value="2"> (2) การศึกษานอกระบบ (กศน.)
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}53" name="1_S3_{Num}_3_5" value="3"> (3) ประถมศึกษา
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}54" name="1_S3_{Num}_3_5" value="4"> (4) มัธยมศึกษา
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}55" name="1_S3_{Num}_3_5" value="5"> (5) ปวช.
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}56" name="1_S3_{Num}_3_5" value="6"> (6) ปวส.
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}57" name="1_S3_{Num}_3_5" value="7"> (7) ปริญญาตรี
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}58" name="1_S3_{Num}_3_5" value="8"> (8) ปริญญาโท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}59" name="1_S3_{Num}_3_5" value="9"> (9) สูงกว่าปริญญาโท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}510" name="1_S3_{Num}_3_5" value="10"> (10) การศึกษาในรูปแบบอื่น...
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-form-label inputTextFix" style="margin-left: 10px;">
					โปรดระบุ
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="1_S3_{Num}_3_5_TEXT" readonly />
				</div>
			</div>

			<div class="row">
				<label for="36" class="col-form-label">3.6 ท่านเห็นการปฏิบัติงานของเจ้าหน้าที่ตำรวจ หรือเจ้าหน้าที่ของหน่วยงานด้านยุติธรรม </br>เช่น เจ้าหน้าที่คุมประพฤติ เจ้าหน้าที่ราชทัณฑ์ เจ้าหน้าที่ยุติธรรมจังหวัด เจ้าหน้าที่ยุติธรรมชุมชน เป็นต้น </br>ในการปฏิบัติงานในพื้นที่ชุมชนของท่านมากน้อยเพียงใด</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_3{Num}61" name="1_S3_{Num}_3_6" value="1"> (1) สัปดาห์ละครั้ง
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}62" name="1_S3_{Num}_3_6" value="2"> (2) เดือนละครั้ง
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}63" name="1_S3_{Num}_3_6" value="3"> (3) ปีละครั้ง
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}64" name="1_S3_{Num}_3_6" value="4"> (4) มากกว่า 1 ครั้ง/ปี
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_3{Num}65" name="1_S3_{Num}_3_6" value="5"> (5) ไม่เคยพบ
					</label>
				</div>
			</div>
			</br>
		</template>

		<template id="templateS4">
			<label for="wight">ส่วนที่ 4 รายละเอียดผู้ประสบเหตุหรือตกเป็นเหยื่ออาชญากรรม</label>
			</br>

			<div class="row">
				<label for="41" class="col-form-label">4.1 ขณะเกิดเหตุผู้ประสบเหตุหรือเหยื่อจำหน้าผู้ก่อเหตุหรือรูปพรรณสัณฐานของผู้ก่อเหตุได้หรือไม่</label>
				<div class="col-lg-12">
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}11" name="1_S4_{Num}_4_1" value="1">จำได้ ระบุ
						</label>
						<label class="radio-inline col-form-label  col-lg-8">
							<input type="text" class="form-control" name="1_S4_{Num}_4_1_TEXT" readonly />
						</label>
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}12" name="1_S4_{Num}_4_1" value="2"> (2) จำไม่ได้
					</label>
				</div>
			</div>

			<div class="row">
				<label for="42" class="col-form-label">4.2 ความสัมพันธ์ระหว่างเหยื่อกับผู้ก่อเหตุ</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}21" name="1_S4_{Num}_4_2" value="1"> (1) บิดา/มารดา
					</label>
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}22" name="1_S4_{Num}_4_2" value="2"> (2) ผู้ปกครอง
					</label>
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}23" name="1_S4_{Num}_4_2" value="3"> (3) สามี
					</label>
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}24" name="1_S4_{Num}_4_2" value="4"> (4) ภรรยา
					</label>
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}25" name="1_S4_{Num}_4_2" value="5"> (5) คู่ชีวิตรูปแบบอื่น
					</label>

					<label class=" col-form-label ">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}26" name="1_S4_{Num}_4_2" value="6"> (6) ความสัมพันธ์อื่นๆ (ระบุ)
						</label>
						<label class="radio-inline col-form-label  col-lg-6">
							<input type="text" class="form-control" name="1_S4_{Num}_4_2_TEXT" readonly />
						</label>
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}27" name="1_S4_{Num}_4_2" value="7"> (7) ไม่รู้จัก/ไม่เกี่ยวข้อง
					</label>
				</div>
				<p style="margin-left: 10px;">หมายเหตุ : สามี/ภรรยา หมายความรวมถึง คู่สมรสที่จดทะเบียนและไม่จดทะเบียนสมรส</p>
			</div>

			<div class="row">
				<label for="43" class="col-form-label">4.3 มีความเสียหายต่อชีวิต ร่างกาย หรือทรัพย์สินหรือไม่</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}31" name="1_S4_{Num}_4_3" value="1"> (1) มี
					</label>
					<label class="radio-inline col-form-label  col-lg-2">
						<input type="radio" id="1_4{Num}32" name="1_S4_{Num}_4_3" value="2"> (2) ไม่มี
					</label>

				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="431" class="col-form-label">4.3.1 ความเสียหายต่อชีวิต ร่างกาย</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}311" name="1_S4_{Num}_4_3_1" value="1" disabled> (1) ไม่มี
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}312" name="1_S4_{Num}_4_3_1" value="2" disabled> (2) ไม่ได้รับบาดเจ็บ
					</label>
					<label class="radio-inline col-form-label  col-lg-4">
						<input type="radio" id="1_4{Num}313" name="1_S4_{Num}_4_3_1" value="3" disabled> (3) ได้รับบาดเจ็บเล็กน้อย ไม่ถึงกับต้องรักษาตัว
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}314" name="1_S4_{Num}_4_3_1" value="4" disabled> (4) รักษาตัวไม่เกิน 7 วัน
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}315" name="1_S4_{Num}_4_3_1" value="5" disabled> (5) รักษาตัว 8-20 วัน
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}316" name="1_S4_{Num}_4_3_1" value="6" disabled> (6) รักษาตัวเกินกว่า 20 วัน (สาหัส)
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}317" name="1_S4_{Num}_4_3_1" value="7" disabled> (7) เสียโฉม พิการ หรือทุพลภาพเป็นกรถาวร
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}318" name="1_S4_{Num}_4_3_1" value="8" disabled> (8) ได้รับอันตรายทางจิตใจจนถึงขั้นเข้ารับการบำบัดทางจิต
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}319" name="1_S4_{Num}_4_3_1" value="9" disabled> (9) ได้รับอันตรายต่อสุขภาพ เจ็บป่วย
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}3110" name="1_S4_{Num}_4_3_1" value="10" disabled> (10) เสียชีวิต
					</label>

				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="432" class="col-form-label">4.3.2 ความเสียหายทรัพย์ถูกประทุษร้าย</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}321" name="1_S4_{Num}_4_3_2" value="1" disabled> (1) ไม่มี
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}322" name="1_S4_{Num}_4_3_2" value="2" disabled> (2) มี เป็นมูลค่า
						</label>
						<label class="radio-inline col-form-label  col-lg-6">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_2_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="433" class="col-form-label">4.3.3 ความเสียหายอื่น ๆ</label>
				<div class="col-lg-12">

					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}331" name="1_S4_{Num}_4_3_3" value="1" disabled> (1) ค่ารักษาพยาบาล จำนวน
						</label>
						<label class="radio-inline col-form-label  col-lg-5">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_1_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}332" name="1_S4_{Num}_4_3_3" value="2" disabled> (2) ต้องหยุดงานหรือขาดรายได้ (จำนวนวันที่หยุดงาน x รายได้เฉลี่ยโดยประมาณ)
						</label>
						<label class="radio-inline col-form-label  col-lg-3">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_2_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}333" name="1_S4_{Num}_4_3_3" value="3" disabled> (3) ค่าใช้จ่ายในการติดต่อหน่วยงานราชการหรือหน่วยงานกระบวนการยุติธรรม (เช่น ตำรวจ อัยการ ศาล ศูนย์ดำรงธรรม ฯลฯ) จำนวน
						</label>
						<label class="radio-inline col-form-label  col-lg-2">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_3_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}334" name="1_S4_{Num}_4_3_3" value="4" disabled> (4) ค่าใช้จ่ายในการติดต่อทนายความ จำนวน
						</label>
						<label class="radio-inline col-form-label  col-lg-4">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_4_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}335" name="1_S4_{Num}_4_3_3" value="5" disabled> (5) ค่าใช้จ่ายในการติดต่อหน่วยงานเอกชน (เช่น บริษัทประกันภัย NGOs) จำนวน
						</label>
						<label class="radio-inline col-form-label  col-lg-3">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_5_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}336" name="1_S4_{Num}_4_3_3" value="6" disabled> (6) ค่าใช้จ่ายในการแสวงหาพยานหลักฐาน จำนวน
						</label>
						<label class="radio-inline col-form-label  col-lg-4">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_6_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="col-form-label">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}337" name="1_S4_{Num}_4_3_3" value="7" disabled> (7) ค่าใช้จ่ายด้านค่าเดินทาง ที่พักและอื่น ๆในการติดต่อทางคดี จำนวน
						</label>
						<label class="radio-inline col-form-label  col-lg-3">
							<input type="text" class="form-control" name="1_S4_{Num}_4_3_3_7_TEXT" readonly />
						</label>
						<label class="radio-inline" style="align-self: center;">
							บาท
						</label>
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}338" name="1_S4_{Num}_4_3_3" value="8" disabled> (8) ไม่มีความสูญเสีย/ค่าเสียหายจากมูลค่าที่เกิดขึ้น
					</label>
				</div>
			</div>

			<div class="row">
				<label for="44" class="col-form-label">4.4 ลักษณะความผิด</label>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="441" class="col-form-label">4.4.1 ความผิดต่อชีวิตร่างกาย</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}411" name="1_S4_{Num}_4_4_1" value="1"> (1) ฆ่า
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}412" name="1_S4_{Num}_4_4_1" value="2"> (2) พยายามฆ่า
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}413" name="1_S4_{Num}_4_4_1" value="3"> (3) ก่อการร้าย
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}414" name="1_S4_{Num}_4_4_1" value="4"> (4) วางเพลิง
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}415" name="1_S4_{Num}_4_4_1" value="5"> (5) วางระเบิด
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}416" name="1_S4_{Num}_4_4_1" value="6"> (6) อุบัติเหตุจราจร
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}417" name="1_S4_{Num}_4_4_1" value="7"> (7) อุบัติเหตุอื่น ๆ
					</label>
					<label class="radio-inline col-form-label  col-lg-3	">
						<input type="radio" id="1_4{Num}418" name="1_S4_{Num}_4_4_1" value="8"> (8) ชุลมุนต่อสู้
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}419" name="1_S4_{Num}_4_4_1" value="9"> (9) ทะเลาะวิวาท
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4110" name="1_S4_{Num}_4_4_1" value="10"> (10) ความรุนแรงในครอบครัว
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4111" name="1_S4_{Num}_4_4_1" value="11"> (11) ทำแท้งผิดกฎหมาย
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}4112" name="1_S4_{Num}_4_4_1" value="12"> (12) ข่มขู่คุกคามว่าจะทำอันตรายต่อชีวิตร่างกาย
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4113" name="1_S4_{Num}_4_4_1" value="13"> (13) ข่มขู่คุกคามให้ตกใจกลัว
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4114" name="1_S4_{Num}_4_4_1" value="14"> (14) ลักพาตัว
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4115" name="1_S4_{Num}_4_4_1" value="15"> (15) หน่วงเหนี่ยวกักขัง
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4116" name="1_S4_{Num}_4_4_1" value="16"> (16) เอาคนเป็นทาส
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4117" name="1_S4_{Num}_4_4_1" value="17"> (17) ความผิดต่อเสรีภาพ
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4118" name="1_S4_{Num}_4_4_1" value="18"> (18) ปลอมปนอาหาร
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}4119" name="1_S4_{Num}_4_4_1" value="19"> (19) ปล่อยสารพิษ
					</label>
				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="442" class="col-form-label">4.4.2 ความผิดต่อชีวิตร่างกาย</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-6" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}421" name="1_S4_{Num}_4_4_2" value="1"> (1) ปล้น จี้ ชิงทรัพย์ในที่สาธารณะ
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}422" name="1_S4_{Num}_4_4_2" value="2"> (2) ปล้น จี้ ชิงทรัพย์ในพื้นที่ส่วนบุคคล
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}423" name="1_S4_{Num}_4_4_2" value="3"> (3) ปล้นชิงสินค้า
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}424" name="1_S4_{Num}_4_4_2" value="4"> (4) ปล้นชิงรถยนต์/รถจักรยานยนต์
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}425" name="1_S4_{Num}_4_4_2" value="5"> (5) ปล้นชิงโคกระบือหรือเครื่องมือเกษตร
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}426" name="1_S4_{Num}_4_4_2" value="6"> (6) วิ่งราวทรัพย์
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}427" name="1_S4_{Num}_4_4_2" value="7"> (7) ล้วงกระเป๋า
					</label>
					<label class="radio-inline col-form-label  col-lg-6	">
						<input type="radio" id="1_4{Num}428" name="1_S4_{Num}_4_4_2" value="8"> (8) ลักทรัพย์สถานประกอบการ
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}429" name="1_S4_{Num}_4_4_2" value="9"> (9) ลักพาหนะ (รวมถึงทรัพย์สินในพาหนะ)
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}4210" name="1_S4_{Num}_4_4_2" value="10"> (10) ลักโคกระบือหรือเครื่องมือการเกษตร
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}4211" name="1_S4_{Num}_4_4_2" value="11"> (11) ลักทรัพย์สินในบ้าน/ที่พักอาศัย
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}4212" name="1_S4_{Num}_4_4_2" value="12"> (12) ลักทรัพย์รูปแบบอื่น ๆ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}4213" name="1_S4_{Num}_4_4_2" value="13"> (13) ข่มขู่ว่าจะเปิดเผยความลับ เช่น แบล็คเมล์ ภาพลับ/คลิปลับ เป็นต้น
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}4214" name="1_S4_{Num}_4_4_2" value="14"> (14) กรรโชกทรัพย์ (ขู่เข็ญว่าจะทำอันตรายต่อชีวิต/ร่างกายทรัพย์สินเพื่อแลกกับการเอาทรัพย์)
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}4215" name="1_S4_{Num}_4_4_2" value="15"> (15) ทำให้เสียทรัพย์ (เช่น ทำลายทรัพย์สิน ยานพาหนะ)
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}4216" name="1_S4_{Num}_4_4_2" value="16"> (16) บุกรุกทรัพย์สิน เช่น บ้าน ที่ดิน
					</label>
				</div>
			</div>


			<div class="row" style="margin-left: 10px;">
				<label for="443" class="col-form-label">4.4.3 ความผิดทางเพศ</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-4" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}431" name="1_S4_{Num}_4_4_3" value="1"> (1) ข่มขืนโดยใช้กำลังบังคับ
					</label>
					<label class="radio-inline col-form-label  col-lg-4">
						<input type="radio" id="1_4{Num}432" name="1_S4_{Num}_4_4_3" value="2"> (2) ข่มขืนขณะมึนเมา
					</label>
					<label class="radio-inline col-form-label  col-lg-4">
						<input type="radio" id="1_4{Num}433" name="1_S4_{Num}_4_4_3" value="3"> (3) ถูกรุมโทรม
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}434" name="1_S4_{Num}_4_4_3" value="4"> (4) ทารุณทางเพศ
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}435" name="1_S4_{Num}_4_4_3" value="5"> (5) กระทำอนาจาร (มีการแตะเนื้อต้องตัว)
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}436" name="1_S4_{Num}_4_4_3" value="6"> (6) พูดจาลวนลาม/ลอบแอบมอง
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}437" name="1_S4_{Num}_4_4_3" value="7"> (7) พูดจาลวนลาม/ลอบแอบมอง (ในสถานที่ทำงาน)
					</label>
					<label class="radio-inline col-form-label  col-lg-6	">
						<input type="radio" id="1_4{Num}438" name="1_S4_{Num}_4_4_3" value="8"> (8) สะกดรอย/ลอบติดตาม
					</label>
				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="444" class="col-form-label">4.4.4 ความผิดฉ้อโกงการหลอกลวง</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}441" name="1_S4_{Num}_4_4_4" value="1"> (1) แอบอ้างใช้ข้อมูล/เอกสารส่วนตัว
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}442" name="1_S4_{Num}_4_4_4" value="2"> (2) ถูกหลอกลวงด้วยการใช้เงินปลอม
					</label>
					<label class="radio-inline col-form-label  col-lg-6">
						<input type="radio" id="1_4{Num}443" name="1_S4_{Num}_4_4_4" value="3"> (3) แชร์ลูกโซ่
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}444" name="1_S4_{Num}_4_4_4" value="4"> (4) หลอกลวงจัดหางานหรือให้ไปทำงานในประเทศหรือต่างประเทศ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}445" name="1_S4_{Num}_4_4_4" value="5"> (5) หลอกลวงด้วยกลฉ้อฉลให้โอนเงินเข้าบัญชีธนาคารคนร้าย
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}446" name="1_S4_{Num}_4_4_4" value="6"> (6) หลอกลวงให้สูญเสียทรัพย์สินให้คนร้าย โดยมีการแสดงเอกสารเท็จให้หลงเชื่อ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}447" name="1_S4_{Num}_4_4_4" value="7"> (7) หลอกขายสินค้าปลอม
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}448" name="1_S4_{Num}_4_4_4" value="8"> (8) หลอกประกาศขายสินค้าแต่ไม่จัดส่งสินค้าให้ หรือส่งให้แต่ไม่ตรงกับที่โฆษณา
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}449" name="1_S4_{Num}_4_4_4" value="9"> (9) หลอกลวงให้สูญเสียทรัพย์สินให้คนร้ายด้วยวิธีการอื่น ๆ
					</label>
				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="445" class="col-form-label">4.4.5 ความผิดเกี่ยวกับคอมพิวเตอร์</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}451" name="1_S4_{Num}_4_4_5" value="1"> (1) ถูกลักลอบเข้าสู่ระบบคอมพิวเตอร์
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}452" name="1_S4_{Num}_4_4_5" value="2"> (2) ถูกล่วงรู้พาสเวิร์ดสำหรับระบบคอมพิวเตอร์ และนำไปก่อให้เกิดความเสียหาย
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}453" name="1_S4_{Num}_4_4_5" value="3"> (3) ถูกล้วงข้อมูลในระบบคอมพิวเตอร์
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}454" name="1_S4_{Num}_4_4_5" value="4"> (4) ตกเป็นเหยื่ออาชญากรรมทางคอมพิวเตอร์กรณีอื่น ๆ
					</label>
				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="446" class="col-form-label">4.4.6 ความผิดรูปแบบอื่น</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}461" name="1_S4_{Num}_4_4_6" value="1"> (1) ถูกเรียกสินบนโดยเจ้าหน้าที่ของรัฐ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}462" name="1_S4_{Num}_4_4_6" value="2"> (2) ถูกเรียกรับสินบนโดยภาคธุรกิจ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}463" name="1_S4_{Num}_4_4_6" value="3"> (3) ได้รับความเสียหายจากเจ้าหน้าที่รัฐที่ใช้อำนาจโดยมิชอบ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}464" name="1_S4_{Num}_4_4_6" value="4"> (4) ตกเป็นเหยื่อในกระบวนการยุติธรรม เช่น ถูกคุกคามหรือไม่ได้รับความเป็นธรรมจากคดีอาญา (แพะรับบาป)
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}465" name="1_S4_{Num}_4_4_6" value="5"> (5) ถูกเลือกปฏิบัติ โดยมิชอบ อันเนื่องมาจาก เพศ ความพิการ ศาสนา และเชื้อชาติ เป็นต้น
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}466" name="1_S4_{Num}_4_4_6" value="6"> (6) ถูกดูหมิ่น หมิ่นประมาท หรือถูกเหยียดหยามเนื่องจากความแตกต่างในเรื่องเพศ เชื้อชาติ ศาสนา ความพิการ ชนกลุ่มน้อย
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}467" name="1_S4_{Num}_4_4_6" value="7"> (7) ได้รับอันตรายจากการปล่อยมลภาวะตามเขตที่พักอาศัย
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}468" name="1_S4_{Num}_4_4_6" value="8"> (8) ถูกล่วงละเมิดความเป็นส่วนตัว
					</label>
				</div>
			</div>

			<div class="row">
				<label for="45" class="col-form-label">4.5 พฤติกรรมโดยย่อ (โดยสังเขป)</label>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<textarea type="text" class="form-control" id="1_4{Num}5" rows="3" name="1_S4_{Num}_4_5"></textarea>
				</div>
			</div>

			<div class="row">
				<label for="46" class="col-form-label">4.6 การติดต่อและบริการจากหน่วยงานในกระบวนการยุติธรรม</label>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="461" class="col-form-label">
					<input type="radio" id="1_4{Num}611" name="1_S4_{Num}_4_6_1" value="1"> 4.6.1 มีการแจ้งต่อเจ้าหน้าที่
				</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}6111" name="1_S4_{Num}_4_6_1_1" value="1" disabled> (1) แจ้งต่อเจ้าหน้าที่ตำรวจ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}6112" name="1_S4_{Num}_4_6_1_1" value="2" disabled> (2) แจ้งต่อผู้แทนชุมชน เช่น ผู้ใหญ่บ้าน กำนัน ผู้นำชุมชน หรือบุคคลที่ตนนับถือ แต่ไม่ได้แจ้งต่อเจ้าหน้าที่ตำรวจ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="radio" id="1_4{Num}6113" name="1_S4_{Num}_4_6_1_1" value="3" disabled> (3) แจ้งต่อเจ้าหน้าที่หรือหน่วยงานภาครัฐอื่น ที่ไม่ใช่หน่วยงานตำรวจ เช่น สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์, ยุติธรรมชุมชน, ยุติธรรมจังหวัดศูนย์ดํารงธรรม, ศูนย์ดํารงธรรม, ศูนย์บริการข้อมูลภาครัฐเพื่อประชาชน สายด่วน 1111 หรือศูนย์รับเรื่องราวร้องทุกข์
					</label>
					<label class="col-form-label col-lg-12" style="margin-left: -5px;">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}6114" name="1_S4_{Num}_4_6_1_1" value="4" disabled> (4) อื่นๆ โปรดระบุ
						</label>
						<label class="radio-inline col-form-label  col-lg-8">
							<input type="text" class="form-control" name="1_S4_{Num}_4_6_1_1_TEXT" readonly />
						</label>
					</label>
				</div>
			</div>

			<div class="row" style="margin-left: 10px;">
				<label for="461" class="col-form-label">
					<input type="radio" id="1_4{Num}612" name="1_S4_{Num}_4_6_2" value="1"> 4.6.2 ไม่มีการแจ้งต่อเจ้าหน้าที่
				</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
						<input type="checkbox" id="1_4{Num}6211" name="1_S4_{Num}_4_6_2_1" value="1" disabled> (1) แจ้งต่อเจ้าหน้าที่ตำรวจ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6212" name="1_S4_{Num}_4_6_2_2" value="1" disabled> (2) แจ้งต่อผู้แทนชุมชน เช่น ผู้ใหญ่บ้าน กำนัน ผู้นำชุมชน หรือบุคคลที่ตนนับถือ แต่ไม่ได้แจ้งต่อเจ้าหน้าที่ตำรวจ
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6213" name="1_S4_{Num}_4_6_2_3" value="1" disabled> (3) แจ้งต่อเจ้าหน้าที่หรือหน่วยงานภาครัฐอื่น ที่ไม่ใช่หน่วยงานตำรวจ เช่น สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์, ยุติธรรมชุมชน, ยุติธรรมจังหวัดศูนย์ดํารงธรรม, ศูนย์ดํารงธรรม, ศูนย์บริการข้อมูลภาครัฐเพื่อประชาชน สายด่วน 1111 หรือศูนย์รับเรื่องราวร้องทุกข์
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6214" name="1_S4_{Num}_4_6_2_4" value="1" disabled> (4) ได้แจ้งเหตุต่อผู้มีหน้าที่รับผิดชอบที่เกี่ยวข้องแล้ว เช่น ฝ่ายรักษาความปลอดภัย หัวหน้างาน
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6215" name="1_S4_{Num}_4_6_2_5" value="1" disabled> (5) มีเจ้าหน้าที่หรือบุคคลอื่นมาให้การช่วยเหลือไกล่เกลี่ยสามารถตกลงกับผู้กระทำผิดได้
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6216" name="1_S4_{Num}_4_6_2_6" value="1" disabled> (6) ถูกข่มขู่ จากผู้กระทำผิดหรือผู้เกี่ยวข้อง
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6217" name="1_S4_{Num}_4_6_2_7" value="1" disabled> (7) กลัวว่าจะถูกแก้แค้น หรือถูกทำร้ายจากผู้กระทำผิดหรือผู้เกี่ยวข้อง
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6218" name="1_S4_{Num}_4_6_2_8" value="1" disabled> (8) เป็นคนกันเอง/สนิทสนมคุ้นเคยกับผู้กระทำผิด
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}6219" name="1_S4_{Num}_4_6_2_9" value="1" disabled> (9) เป็นเหตุการณ์ที่น่าอับอาย กลัวว่าจะเสื่อมเสียชื่อเสียง
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62110" name="1_S4_{Num}_4_6_2_10" value="1" disabled> (10) สงสาร/เห็นใจผู้กระทำผิด (เนื่องจากผู้กระทำผิดเป็นเด็ก/พิการ/ยากจน เป็นต้น)
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62111" name="1_S4_{Num}_4_6_2_11" value="1" disabled> (11) ยุ่งยาก ไม่อยากเป็นคดีความ ไม่อยากขึ้นโรงขึ้นศาล
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62112" name="1_S4_{Num}_4_6_2_12" value="1" disabled> (12) ไม่สะดวก ไม่มีเวลาแจ้งเหตุกับเจ้าหน้าที่
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62113" name="1_S4_{Num}_4_6_2_13" value="1" disabled> (13) ขาดพยานหลักฐาน
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62114" name="1_S4_{Num}_4_6_2_14" value="1" disabled> (14) คิดว่าเจ้าหน้าที่ตำรวจไม่สามารถติดตามผู้กระทำผิดมาดำเนินคดีได้
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62115" name="1_S4_{Num}_4_6_2_15" value="1" disabled> (15) มีความรู้สึกไม่ดีกับเจ้าหน้าที่ตำรวจหรือไม่ไว้วางใจเจ้าหน้าที่
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62116" name="1_S4_{Num}_4_6_2_16" value="1" disabled> (16) ไม่เชื่อมั่นในประสิทธิภาพการปฏิบัติงานของเจ้าหน้าที่
					</label>
					<label class="radio-inline col-form-label  col-lg-12">
						<input type="checkbox" id="1_4{Num}62117" name="1_S4_{Num}_4_6_2_17" value="1" disabled> (17) ผู้กระทำผิดเป็นเจ้าหน้าที่รัฐหรือผู้มีอิทธิพล (รวมถึงลูกหลาน/ญาติ/คนใกล้ชิด)
					</label>
					<label class="col-form-label col-lg-12" style="margin-left: -5px;">
						<label class="radio-inline" style="align-self: center;">
							<input type="checkbox" id="1_4{Num}62118" name="1_S4_{Num}_4_6_2_18" value="1" disabled> (18) อื่นๆ (ระบุ)
						</label>
						<label class="radio-inline col-form-label  col-lg-8">
							<input type="text" class="form-control" name="1_S4_{Num}_4_6_2_18_TEXT" readonly />
						</label>
					</label>
				</div>
			</div>

			<div class="row">
				<label for="47" class="col-form-label">4.7 (เฉพาะกรณีที่แจ้งต่อเจ้าหน้าที่) ท่านมีความพึงพอใจต่อการดำเนินงานของเจ้าหน้าที่ต่อการรับแจ้งเหตุของท่านมากน้อยเพียงใด</label>
				<div class="col-lg-12">
					<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
						<input type="radio" id="1_4{Num}75" name="1_S4_{Num}_4_7" value="5"> (5) เชื่อมั่นมาก
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}74" name="1_S4_{Num}_4_7" value="4"> (4) เชื่อมั่นค่อนข้างมาก
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}73" name="1_S4_{Num}_4_7" value="3"> (3) เชื่อมั่นปานกลาง
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}72" name="1_S4_{Num}_4_7" value="2"> (2) เชื่อมั่นค่อนข้างน้อย
					</label>
					<label class="radio-inline col-form-label  col-lg-3">
						<input type="radio" id="1_4{Num}71" name="1_S4_{Num}_4_7" value="1"> (1) เชื่อมั่นน้อย
					</label>

					<label class=" col-form-label ">
						<label class="radio-inline" style="align-self: center;">
							<input type="radio" id="1_4{Num}70" name="1_S4_{Num}_4_7" value="99"> (0) ไม่เชื่อมั่นเลย
						</label>
					</label>

					<div class="row">
						<div class="col-form-label inputTextFix" style="margin-left: 10px;">
							โปรดระบุเหตุผล
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="1_S4_{Num}_4_7_TEXT" readonly />
						</div>
					</div>

				</div>
			</div>

			</br></br>
			<div class="panel panel-inverse overflow-hidden" style="max-width:50% ;">
				<div class="panel-heading">
					<h3 class="panel-title">
						<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion" href="#detailWrong">
							<i class="fa fa-plus-circle pull-right"></i>
							คำอธิบายลักษณะความผิด
						</a>
					</h3>
				</div>
				<div id="detailWrong" class="panel-collapse collapse in collapseForm">
					<div class="panel-body">
						<table class="tg">
							<thead>
								<tr>
									<th class="bg">ลักษณะความผิด</th>
									<th class="bg" style="text-align:center ;">คำอธิบาย</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="subhead">กลุ่ม 1 ชีวิตร่างกาย</td>
									<td class="subhead"></td>
								</tr>
								<tr>
									<td>ถูกฆ่า</td>
									<td>มีบุคคลในครอบครอบเสียชีวิตจากการถูกผู้อื่นฆ่าโดยมุ่งจะเอาชีวิต เช่น ถูกยิง ถูกแทง</td>
								</tr>
								<tr>
									<td>พยายามฆ่า</td>
									<td>ถูกทำร้ายจากผู้อื่นในลักษณะมุ่งจะเอาชีวิต (เช่น ถูกยิง ถูกแทง) แต่ไม่เสียชีวิต</td>
								</tr>
								<tr>
									<td>ก่อการร้าย</td>
									<td>ตกเป็นเหยื่อการก่อเกิดที่ทำให้เกิดความสะพรึงกลัวโดยหวังผลการเมือง เช่น วางระเบิดสถานที่สาธารณะ (เป็นได้ทั้งกรณีข่มขู่ไม่มีผู้ได้รับอันตราย และมีเจตนาทำอันตรายแก่คนหมู่มาก) ลอบฆ่าคนโดยไม่รู้จักกันมาก่อน (เช่น กรณีลอบยิงเจ้าหน้าที่หรือผู้ให้ข้อมูลกับเจ้าหน้าที่) หรือก่อเหตุทำอันตรายคนจำนวนมากพร้อมๆ กันโดยหวังผลทางการเมือง</td>
								</tr>
								<tr>
									<td>วางเพลิง</td>
									<td>ตกเป็นเหยื่อในเหตุเพลิงไหม้ที่มีผู้ก่อเหตุโดยตั้งใจทำให้เกิดเพลิงไหม้ ไม่ใช่อุบัติเหตุเพลิงไหม้</td>
								</tr>
								<tr>
									<td>วางระเบิด</td>
									<td>ตกเป็นเหยื่อเหตุวางระเบิดเพื่อทำร้ายบุคคล ในลักษณะของการก่อเหตุต่อบุคคลไม่ใช่การก่อการร้าย ต้องเป็นการก่อเหตุโดยตั้งใจหรือวางแผนล่วงหน้าไม่นับรวมกรณีทะเลาะวิวาทแล้วมีการใช้วัตถุระเบิด</td>
								</tr>
								<tr>
									<td>อุบัติเหตุจราจร</td>
									<td>ตกเป็นเหยื่อการก่อเหตุที่เกิดจากความประมาทเลินเล่อของผู้อื่นจากอุบัติเหตุที่เกี่ยวกับการขับขี่ยานพาหนะ </td>
								</tr>
								<tr>
									<td>อุบัติเหตุอื่น ๆ </td>
									<td>ตกเป็นเหยื่อการก่อเหตุที่เกิดจากความประมาทเลินเล่อของผู้อื่นจากอุบัติเหตุอื่น ๆ ที่ไม่เกี่ยวกับการขับขี่ยานพาหนะ (เช่น อุบัติเหตุในที่ทำงาน ประมาทเลินเล่อในการดูแลเด็กเล็กจนเกิดอันตราย)</td>
								</tr>
								<tr>
									<td>ชุลมุนต่อสู้</td>
									<td>ได้รับอันตรายจากเหตุทะเลาะวิวาทต่อสู้กันในลักษณะเป็นกลุ่มจนเกิดความวุ่นวายไม่รู้ว่าใครทำร้ายใคร</td>
								</tr>
								<tr>
									<td>ทะเลาะวิวาท</td>
									<td>ตกเป็นเหยื่อจากเหตุทำร้ายกันด้วยความโกรธเคืองหรือทะเลาะมีปากเสียงกันจนถึงกับลงไม้ลงมือ (ต้องถึงกับลงมือทำร้าย แค่มีปากเสียงกันยังไม่นับเป็นเหตุทะเลาะวิวาทในความหมายนี้)</td>
								</tr>
								<tr>
									<td>ความรุนแรงในครอบครัว</td>
									<td>ตกเป็นเหยื่อเหตุทะเลาะวิวาทที่ก่อเหตุโดยบุคคลในครอบครัวหรือคนที่อยู่บ้านเดียวกัน</td>
								</tr>
								<tr>
									<td>ทำแท้งผิดกฎหมาย</td>
									<td>ไปทำแท้งเถื่อนนอกโรงพยาบาลหรือกับคลินิกนอกระบบ</td>
								</tr>
								<tr>
									<td>ข่มขู่คุกคามว่าจะทำอันตราย</td>
									<td>ถูกขู่ว่าจะทำอันตรายต่อชีวิตร่างกาย อาจเป็นแค่การขู่ไม่จำเป็นต้องบังคับให้ยอมตาม</td>
								</tr>
								<tr>
									<td>ข่มขู่คุกคามให้ตกใจกลัว</td>
									<td>ถูกขู่ให้ตกใจกลัวโดยคำขู่เป็นเรื่องอื่น (ไม่ได้ขู่จะทำร้าย หากขู่ว่าจะทำร้ายจะเป็น ‘ข่มขู่คุกคามว่าจะทำอันตราย’)</td>
								</tr>
								<tr>
									<td>ลักพาตัว</td>
									<td>ถูกเอาตัวเด็กไปจากบิดามารดาหรือผู้ปกครอง อาจเป็นได้ทั้งเรียกค่าไถ่หรือโดยญาติหรือพ่อแม่อีกฝั่ง (กรณีเลิกราหรือทะเลาะกัน)</td>
								</tr>
								<tr>
									<td>หน่วงเหนี่ยวกักขัง</td>
									<td>ถูกเอาตัวไปขัง หรือถูกล่ามไว้ไม่สามารถออกไปไหนได้</td>
								</tr>
								<tr>
									<td>เอาคนเป็นทาส</td>
									<td>ถูกบังคับใช้แรงงานหรือบังคับให้ทำงานโดยสิ้นเชิงโดยไม่จ่ายค่าจ้าง (หรือจ่ายน้อยมาก)และถูกกักขังจำกัดเสรีภาพออกไปไหนมาไหนไม่ได้</td>
								</tr>
								<tr>
									<td>ความผิดต่อเสรีภาพ</td>
									<td>ถูกบังคับให้จำยอมทำตามผู้ก่อเหตุในกรณีอื่นๆ (หากบังคับโดยข่มขู่ถือเป็นกรณี ‘ข่มขู่คุกคาม’ อาจเป็นกรณีขู่ว่าจะเปิดเผยความลับแลกกับเงินเป็น ‘รีดเอาทรัพย์’) </td>
								</tr>
								<tr>
									<td>ปลอมปนอาหาร</td>
									<td>ตกเป็นเหยื่อมีผู้ก่อเหตุเอาสารพิษหรือสารที่ไม่ปลอดภัยใส่ในอาหาร เช่น ผสมสี ใส่สารกันบูด</td>
								</tr>
								<tr>
									<td>ปล่อยสารพิษ</td>
									<td>มีผู้ตั้งใจทิ้งวัตถุมีพิษหรือปล่อยสารพิษอันตรายไว้ในชุมชนจนมีคนใน ชุมชนได้รับอันตราย (นับเฉพาะกรณีตั้งใจทิ้งสารพิษในชุมชน กรณีโรงงานปล่อยมลภาวะเป็นความผิดกลุ่ม 5)</td>
								</tr>
								<tr>
									<td class="subhead">กลุ่ม 2 ความผิดต่อทรัพย์</td>
									<td class="subhead"></td>
								</tr>
								<tr>
									<td>ปล้น จี้ ชิงทรัพย์</td>
									<td>ถูกทำร้ายเพื่อให้ได้เอาทรัพย์ หรือข่มขู่ต่อหน้าว่าทำอันตรายให้ส่งมอบทรัพย์ให้ เช่น ถูกปืนจี้ ถูกมีดจี้ จะรุมทำร้ายหากไม่ได้ทรัพย์
										มีลักษณะต่างๆ เช่น ปล้นจี้ในท้องถนน โจรเข้ามาปล้นบ้าน ปล้นชิงเอารถ ปล้นคนขับแท็กซี่ นักเรียนถูกนักเลงข่มขู่ให้จ่ายเงิน
										(ปล้นหมายความว่าผู้ก่อเหตุ 3 คน ขึ้นไป)
									</td>
								</tr>
								<tr>
									<td>วิ่งราวทรัพย์</td>
									<td>ถูกเอาทรัพย์ไปโดยฉกฉวยซึ่งหน้าหมายถึงต่อหน้าต่อตา (เอาไปด้วยความรวดเร็วจนไม่ทันขัดขืน ไม่ได้ข่มขู่ ถ้าข่มขู่จะเข้าปล้น จี้ ชิงทรัพย์)</td>
								</tr>
								<tr>
									<td>ล้วงกระเป๋า</td>
									<td>ตกเป็นเหยื่อแอบลักทรัพย์ในกระเป๋าที่พกติดตัวโดยเจ้าทรัพย์ไม่รู้ตัว กรีดกระเป๋า</td>
								</tr>
								<tr>
									<td>ลักทรัพย์</td>
									<td>ตกเป็นเหยื่อถูกขโมย ย่องเบา หรือการลักทรัพย์มีลักษณะต่างๆ เช่น ลักทรัพย์ในบ้านเรือนที่พักอาศัย ลักเครื่องมือเกษตร ลักรถ </td>
								</tr>
								<tr>
									<td>รีดเอาทรัพย์</td>
									<td>ถูกข่มขู่ว่าจะเปิดเผยความลับ เช่น แบล็กเมล์ ภาพลับ/คลิปลับ เป็นต้น (ต้องแลกกับทรัพย์ ไม่งั้นจะเป็นข่มขู่คุกคามหรือความผิดต่อเสรีภาพ)</td>
								</tr>
								<tr>
									<td>กรรโชกทรัพย์</td>
									<td>ถูกขู่เข็ญว่าจะทำอันตรายต่อชีวิต/ร่างกายทรัพย์สินเพื่อแลกกับการเอาทรัพย์ (ต้องแลกกับทรัพย์ ไม่งั้นจะเป็นข่มขู่คุกคามหรือความผิดต่อเสรีภาพ)</td>
								</tr>
								<tr>
									<td>ทำให้เสียทรัพย์</td>
									<td>ถูกผู้อื่นทำลายทรัพย์สินโดยเจตนา</td>
								</tr>
								<tr>
									<td>บุกรุก</td>
									<td>มีผู้บุกเข้ามาในบ้านโดยมีเจตนาร้าย หรือมีผู้เข้าครอบครองที่ดินของตนโดยไม่ได้รับอนุญาต (รวมกรณีบุกรุกเข้ามาโดยไม่ทราบสาเหตุหรือไม่ทราบเจตนา รวมถึงกรณีเข้ามาเพื่อลักทรัพย์หรือทำร้ายแต่ยังไม่ได้ลงมือ)</td>
								</tr>
								<tr>
									<td class="subhead">กลุ่ม 3 ความผิดทางเพศ</td>
									<td class="subhead"></td>
								</tr>
								<tr>
									<td>ข่มขืนโดยใช้กำลังบังคับ</td>
									<td>ตกเป็นเหยื่อถูกบังคับให้มีเพศสัมพันธ์โดยเหยื่อไม่ยินยอมโดยใช้กำลังบังคับ </td>
								</tr>
								<tr>
									<td>ข่มขืนขณะมึนเมา</td>
									<td>ตกเป็นเหยื่อมีเพศสัมพันธ์โดยไม่ยินยอมเนื่องจากอยู่ในภาวะมึนเมาจนไม่สามารถขัดขืนได้</td>
								</tr>
								<tr>
									<td>ถูกรุมโทรม</td>
									<td>ตกเป็นเหยื่อถูกบังคับให้มีเพศสัมพันธ์โดยไม่ยินยอมโดยผู้ก่อเหตุมีตั้งแต่ 2 คน ขึ้นไป</td>
								</tr>
								<tr>
									<td>ทารุณทางเพศ</td>
									<td>ตกเป็นเหยื่อมีเพศสัมพันธ์โดยบังคับขืนใจในลักษณะใช้ความรุนแรงหรือทำอันตราย</td>
								</tr>
								<tr>
									<td>อนาจาร</td>
									<td>ถูกเนื้อต้องตัวในทางเพศโดยเหยื่อไม่ยินยอม (กอด จูบ ลูบ คลำ)</td>
								</tr>
								<tr>
									<td>พูดจาลวนลาม แอบมอง</td>
									<td>มีผู้ใช้วาจาโดยมีเนื้อหาทางเพศต่อเหยื่อ หรือลอบแอบมองจนเหยื่อรู้สึกไม่สบายใจ</td>
								</tr>
								<tr>
									<td>สะกดรอย/ลอบติดตาม</td>
									<td>ถูกสะกดรอย หรือลอบติดตาม แม้โดยไม่ทราบเจตนา จนเหยื่อรู้สึกไม่สบายใจ</td>
								</tr>
								<tr>
									<td class="subhead">กลุ่ม 4 ฉ้อโกง หลอกลวง</td>
									<td class="subhead"></td>
								</tr>
								<tr>
									<td>แอบอ้างใช้ข้อมูล/เอกสารส่วนตัว</td>
									<td>ถูกนำข้อมูลส่วนตัวไปใช้ในทางมิชอบ เช่น ลักลอบเอาข้อมูลบัตรเครดิตไปซื้อสินค้า เอาสำเนาบัตรประชาชนไปเปิดโทรศัพท์</td>
								</tr>
								<tr>
									<td>ใช้เงินปลอม</td>
									<td>ตกเป็นเหยื่อมีผู้ใช้เงินปลอมมาชำระหนี้/ซื้อขายสินค้า</td>
								</tr>
								<tr>
									<td>แชร์ลูกโซ่</td>
									<td>ถูกหลอกลวงทำธุรกิจที่มีผลตอบแทนจำนวนมากที่ไม่มีอยู่จริง (อาจมีการเชิญชวนให้สมัครสมาชิก)</td>
								</tr>
								<tr>
									<td>หลอกจัดหางานไปทำงานต่างประเทศ</td>
									<td>ถูกหลอกไปทำงานต่างประเทศโดยเรียกเก็บค่าบริการแล้วเอาเงินหนีไปโดยไม่ส่งไปทำงาน</td>
								</tr>
								<tr>
									<td>หลอกให้โอนเงินเข้าบัญชีคนร้าย</td>
									<td>ถูกหลอกลวง ล่อหลอกให้โอนเงินเข้าบัญชีคนร้าย เช่น แก๊ง Call Centre</td>
								</tr>
								<tr>
									<td>หลอกขายสินค้าปลอม</td>
									<td>ถูกหลอกขายสินค้าปลอม</td>
								</tr>
								<tr>
									<td>หลอกขายสินค้า</td>
									<td>ถูกหลอกประกาศขายสินค้า แต่ไม่จัดส่งสินค้าให้ หรือส่งให้แต่ไม่ตรงกับที่โฆษณา</td>
								</tr>
								<tr>
									<td>หลอกลวง</td>
									<td>ถูกทำให้หลงเชื่อให้ทรัพย์สินคนร้ายโดยวิธีการต่างๆ นอกจากที่กล่าวไว้</td>
								</tr>
								<tr>
									<td>เงินกู้นอกระบบ แก๊งทวงหนี้</td>
									<td>ถูกขูดรีดโดยแก๊งเงินกู้นอกระบบให้กู้เงินโดยคิดดอกเบี้ยในราคาสูงมาก (เกินกว่าร้อยละ 3 ต่อเดือน) หลอกให้ทำสัญญาเงินกู้เกินจริง โดยข่มขู่หรือทำอันตรายจากการทวงหนี้</td>
								</tr>
								<tr>
									<td>เรียกเก็บค่าคุ้มครอง</td>
									<td>ถูกเรียกเก็บเงินหรือทรัพย์สินเป็นค่าคุ้มครองโดยขู่ว่าหากไม่ให้จะทำอันตราย หรือไม่ให้ประกอบการค้าขายหรือประกอบอาชีพ</td>
								</tr>
								<tr>
									<td class="subhead">กลุ่ม 5 อาชญากรรมทางคอมพิวเตอร์</td>
									<td class="subhead"></td>
								</tr>
								<tr>
									<td>ถูกลักลอบเข้าสู่ระบบคอมพิวเตอร์</td>
									<td>เป็นเจ้าของบริษัท ห้างร้าน องค์กร หรือผู้รับผิดชอบระบบข้อมูลคอมพิวเตอร์ แล้วมีผู้ลักลอบแอบเข้าระบบโดยมิชอบ</td>
								</tr>
								<tr>
									<td>ถูกล่วงรู้พาสเวิร์ดสำหรับระบบคอมพิวเตอร์แล้วนำไปก่อให้เกิดความเสียหาย</td>
									<td>ถูกขโมยพาสเวิร์ดหรือมีผู้ล่วงรู้พาสเวิร์ดสำหรับเข้าบัญชีคอมพิวเตอร์ในทางมิชอบ แล้วมีการนำข้อมูลไปใช้ในทางมิชอบให้ได้รับความเสียหาย หรือมีการนำไปแอบอ้างบัญชีในทางมิชอบ</td>
								</tr>
								<tr>
									<td>ถูกล้วงข้อมูลในระบบคอมพิวเตอร์</td>
									<td>เป็นเจ้าของบริษัท ห้างร้าน องค์กร หรือผู้รับผิดชอบระบบข้อมูลคอมพิวเตอร์ หรือเป็นบุคคลผู้มีบัญชีข้อมูลคอมพิวเตอร์แล้วถูกผู้อื่นลักลอบเจาะข้อมูลเข้าระบบ (Hacker) เข้ามานำข้อมูลสำคัญไปใช้ให้เกิดความเสียหาย</td>
								</tr>
								<tr>
									<td>ตกเป็นเหยื่ออาชญากรรมทางคอมพิวเตอร์</td>
									<td>ถูกเข้าถึงข้อมูลคอมพิวเตอร์โดยมิชอบ หรือถูกทำให้เสียหายจากการนำข้อมูลทางคอมพิวเตอร์มาเผยแพร่หรือใช้ประโยชน์โดยมิชอบในกรณีอื่น ๆ </td>
								</tr>
								<tr>
									<td class="subhead">กลุ่ม 6 อาชญากรรมอื่นๆ</td>
									<td class="subhead"></td>
								</tr>
								<tr>
									<td>ถูกเรียกสินบน</td>
									<td>ถูกเรียกสินบนโดยเจ้าหน้าที่รัฐแลกกับการอำนวยความสะดวกหรือไม่จับกุม</td>
								</tr>
								<tr>
									<td>ถูกเรียกสินบนโดยธุรกิจ</td>
									<td>ถูกเรียกสินบนโดยพนักงานธุรกิจแลกกับการซื้อสินค้าหรือบริการ</td>
								</tr>
								<tr>
									<td>ได้รับเสียหายจากเจ้าหน้าที่รัฐโดยมิชอบ</td>
									<td>ถูกข่มขู่หรือบังคับโดยเจ้าหน้าที่ของรัฐโดยใช้อำนาจมิชอบ หรือถูกใช้อำนาจเกินขอบเขต</td>
								</tr>
								<tr>
									<td>ตกเป็นเหยื่อกระบวนการยุติธรรม</td>
									<td>ถูกข่มขู่ให้ยอมตามว่าจะจับกุม ถูกกระทำรุนแรงจากเจ้าหน้าที่เกินกว่าเหตุในขั้นตอนการจับกุม ตกเป็นแพะ (ถูกจับกุมคุมขังโดยไม่ได้กระทำผิด)</td>
								</tr>
								<tr>
									<td>ถูกเลือกปฏิบัติโดยไม่ชอบ</td>
									<td>ถูกเลือกปฏิบัติจากเจ้านาย คนที่ในที่งาน การให้บริการต่างๆ อันเนื่องมาจาก เพศ ความพิการ ศาสนา และเชื้อชาติ เป็นต้น</td>
								</tr>
								<tr>
									<td>ถูกดูหมิ่น หมิ่นประสาท เหยียดหยาม</td>
									<td>ถูกดูหมิ่น หมิ่นประมาท หรือถูกเหยียดหยามโดยผู้อื่นหรือคนไม่รู้จักเนื่องจากความแตกต่างในเรื่องเพศ เชื้อชาติ ศาสนา ความพิการ ชนกลุ่มน้อย</td>
								</tr>
								<tr>
									<td>ได้รับอันตรายจากการปล่อยมลภาวะ ตามเขตที่พักอาศัย</td>
									<td>ได้รับอันตรายจากการปล่อยสารพิษ น้ำเสีย อากาศเสีย กลิ่น จากโรงงาน หรือธุรกิจที่อาจเป็นอันตราย เช่น อู่ซ่อมรถ </td>
								</tr>
								<tr>
									<td>ล่วงละเมิดความเป็นส่วนตัว</td>
									<td>ถูกนำข้อมูลส่วนตัวไปใช้ในทางมิชอบหรือโดยไม่ได้รับอนุญาต (เว้นแต่การดำเนินการโดยเจ้าพนักงานตามกฎหมาย)</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</template>

		<template id="templateModal">
			<div class="modal fade" id="modal-edit-{Num}">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title">ข้อมูลและรายละเอียดการตกเป็นเหยื่ออาชญากรรม</h4>
						</div>
						<div class="modal-main" style="margin-left: 10px;">
						</div>
						<div class="modal-footer">
							<a class="close btn width-100 btn-default btn-form-hiddend-save" data-url="<?= site_url('main/saveSurvey/true') ?>" data-dismiss="modal" aria-hidden="true">Save</a>
						</div>
					</div>
				</div>
			</div>
		</template>


		<script>
			var i = 1;

			$(document).ready(function() {
				const place = document.querySelector("#placeTemplate");
				const tModal = document.querySelector('#templateModal');
				const cloneModal = tModal.content.cloneNode(true);
				let div = cloneModal.querySelectorAll("div.modal, div.fade");
				div[0].removeAttribute('modal-edit-{Num}')
				div[0].id = 'modal-edit-1';
				let a = cloneModal.querySelectorAll("div");
				a.forEach(element => {
					element.innerHTML = element.innerHTML.replaceAll("{Num}", '1');
				});

				place.appendChild(cloneModal);

				const modalGen = document.querySelector("#modal-edit-1");
				const modalMain = modalGen.querySelector(".modal-main");
				const templateS4 = document.querySelector('#templateS4');
				const cloneS4 = templateS4.content.cloneNode(true);
				let divS4 = cloneS4.querySelectorAll("div");
				divS4.forEach(element => {
					element.innerHTML = element.innerHTML.replaceAll("{Num}", '1');
				});
				modalMain.appendChild(cloneS4);

			});

			if ('<?= $u_check_new_survey_victims ?>' != '0') {
				$(function() {
					checkId(document.getElementById("1_211<?= $d_surveyVictims->S2_1 ?>"));
					document.getElementById("1_212").value = '<?= $d_surveyVictims->S2_2 ?>';
					checkId(document.getElementById("1_213<?= $d_surveyVictims->S2_3 ?>"));
					document.getElementById("1_214").value = '<?= $d_surveyVictims->S2_4 ?>';

					if ('<?= $d_surveyVictims->S2_3 ?>' == '1') {
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
					} else {
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
					}
					

					<? for ($index=2; $index <= count($d_surveyVictimslist)+1; $index++) { ?>
						addFamily('back','<?=$d_surveyVictimslist[$index-2]->profile_id?>');
						checkId(document.getElementById("1_2"+<?=$index?>+"1<?= $d_surveyVictimslist[$index-2]->S2_1 ?>"));
						document.getElementById("1_2"+<?=$index?>+"2").value = '<?= $d_surveyVictimslist[$index-2]->S2_2 ?>';
						checkId(document.getElementById("1_2"+<?=$index?>+"3<?= $d_surveyVictimslist[$index-2]->S2_3 ?>"));
						document.getElementById("1_2"+<?=$index?>+"4").value = '<?= $d_surveyVictimslist[$index-2]->S2_4 ?>';

						if ('<?= $d_surveyVictimslist[$index-2]->S2_3 ?>' == '1') {
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
						} else {
							document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
							document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
						}
					<? } ?>


				});
			};

			function createDetech(i) {
				$('input[name="1_S2_' + i + '_3"]').on('change', function() {
					if ($(this).val() === '1') {
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
					} else {
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
					}
				})

				$('input[name="1_S3_' + i + '_3_4"]').on('change', function() {
					if ($(this).val() === '8') {
						$('input[name="1_S3_' + i + '_3_4_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S3_' + i + '_3_4_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S3_' + i + '_3_5"]').on('change', function() {
					if ($(this).val() === '10') {
						$('input[name="1_S3_' + i + '_3_5_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S3_' + i + '_3_5_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_1"]').on('change', function() {
					if ($(this).val() === '1') {
						$('input[name="1_S4_' + i + '_4_1_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_1_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_2"]').on('change', function() {
					if ($(this).val() === '6') {
						$('input[name="1_S4_' + i + '_4_2_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_2_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_3"]').on('change', function() {
					if ($(this).val() === '1') {
						$('input[name="1_S4_' + i + '_4_3_1"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_3_2"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_3_3"]').prop('disabled', false);
					} else {
						$('input[name="1_S4_' + i + '_4_3_1"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_3_2"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_3_2"]').on('change', function() {
					if ($(this).val() === '2') {
						$('input[name="1_S4_' + i + '_4_3_2_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_3_2_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_3_3"]').on('change', function() {
					if ($(this).val() === '1') {
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					} else if ($(this).val() === '2') {
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					} else if ($(this).val() === '3') {
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					} else if ($(this).val() === '4') {
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					} else if ($(this).val() === '5') {
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					} else if ($(this).val() === '6') {
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					} else if ($(this).val() === '7') {
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', false);
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
					} else {
						$('input[name="1_S4_' + i + '_4_3_3_1_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_2_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_3_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_4_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_5_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_6_TEXT"]').prop('readonly', true);
						$('input[name="1_S4_' + i + '_4_3_3_7_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_6_1"]').on('change', function() {
					if ($(this).val() === '1') {
						$('input[name="1_S4_' + i + '_4_6_2"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_1"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_2"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_3"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_4"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_5"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_6"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_7"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_8"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_9"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_10"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_11"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_12"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_13"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_14"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_15"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_16"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_17"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_2_18"]').prop('checked', false);

						$('input[name="1_S4_' + i + '_4_6_2_1"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_2"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_3"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_4"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_5"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_6"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_7"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_8"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_9"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_10"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_11"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_12"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_13"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_14"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_15"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_16"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_17"]').prop('disabled', true);
						$('input[name="1_S4_' + i + '_4_6_2_18"]').prop('disabled', true);

						$('input[name="1_S4_' + i + '_4_6_1_1"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_18_TEXT"]').prop('readonly', true);



					}
				});

				$('input[name="1_S4_' + i + '_4_6_2"]').on('change', function() {
					if ($(this).val() === '1') {
						$('input[name="1_S4_' + i + '_4_6_1"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_1_1"]').prop('checked', false);
						$('input[name="1_S4_' + i + '_4_6_1_1_TEXT"]').prop('readonly', true);

						$('input[name="1_S4_' + i + '_4_6_2_1"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_2"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_3"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_4"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_5"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_6"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_7"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_8"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_9"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_10"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_11"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_12"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_13"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_14"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_15"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_16"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_17"]').prop('disabled', false);
						$('input[name="1_S4_' + i + '_4_6_2_18"]').prop('disabled', false);

						$('input[name="1_S4_' + i + '_4_6_1_1"]').prop('disabled', true);
					}
				});



				$('input[name="1_S4_' + i + '_4_6_1_1"]').on('change', function() {
					if ($(this).val() === '4') {
						$('input[name="1_S4_' + i + '_4_6_1_1_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_6_1_1_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_6_2_18"]').on('change', function() {
					if ($(this).prop("checked") == true) {
						$('input[name="1_S4_' + i + '_4_6_2_18_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_6_2_18_TEXT"]').prop('readonly', true);
					}
				});



				$('input[id="1_4' + i + '62118"]').on('change', function() {
					if ($(this).is(":checked")) {
						$('input[name="1_S4_' + i + '_4_6_2_1_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_6_2_1_TEXT"]').prop('readonly', true);
					}
				});

				$('input[name="1_S4_' + i + '_4_7"]').on('change', function() {
					if ($(this).val() === '0') {
						$('input[name="1_S4_' + i + '_4_7_TEXT"]').prop('readonly', false);
					} else {
						$('input[name="1_S4_' + i + '_4_7_TEXT"]').prop('readonly', true);
					}
				});
			};

			function addFamily(checkFront,profileId) {
				i=i+1;
				if(checkFront == 'front'){
					var restUrl = '../saveSurvey1/' + '<?= $u_now_id ?>' + '/' + i;
					if (validBlank()) {
						$.ajax({
							url: restUrl,
							data: $(FormSeletor).serialize(),
							dataType: 'json',
							type: 'post'
						});
					} else {
						formMessageValidator('กรอกข้อมูลไม่ครบถ้วน', 'กรุณากรอกข้อมูลที่เป็น * สีแดงให้ครบก่อนบันทึกข้อมูล');
					}
				}

				//familyTemplate
				const tbody = document.querySelector("#familyTable");
				const template = document.querySelector('#familyTemplate');

				const clone = template.content.cloneNode(true);
				let td = clone.querySelectorAll("td");
				td[0].innerHTML = td[0].innerHTML.replaceAll("{No.}", i + ".");
				td[1].innerHTML = td[1].innerHTML.replaceAll("{Num}", i);
				td[2].innerHTML = td[2].innerHTML.replaceAll("{Num}", i);
				td[3].innerHTML = td[3].innerHTML.replaceAll("{Num}", i);
				td[4].innerHTML = td[4].innerHTML.replaceAll("{Num}", i);
				td[5].innerHTML = td[5].innerHTML.replaceAll("{Num}", i).replaceAll("{profileId}",profileId);

				tbody.appendChild(clone);

				const place = document.querySelector("#placeTemplate");
				const tModal = document.querySelector('#templateModal');
				const cloneModal = tModal.content.cloneNode(true);
				let div = cloneModal.querySelectorAll("div.modal, div.fade");
				div[0].removeAttribute('modal-edit-{Num}')
				div[0].id = "modal-edit-" + i;
				let a = cloneModal.querySelectorAll("div");
				a.forEach(element => {
					element.innerHTML = element.innerHTML.replaceAll("{Num}", i);
				});
				place.appendChild(cloneModal);

				const modalGen = document.querySelector("#modal-edit-" + i);
				const modalMain = modalGen.querySelector(".modal-main");
				const templateS3 = document.querySelector('#templateS3');
				const templateS4 = document.querySelector('#templateS4');
				const cloneS3 = templateS3.content.cloneNode(true);
				let divS3 = cloneS3.querySelectorAll("div");
				divS3.forEach(element => {
					element.innerHTML = element.innerHTML.replaceAll("{Num}", i);
				});
				const cloneS4 = templateS4.content.cloneNode(true);
				let divS4 = cloneS4.querySelectorAll("div");
				divS4.forEach(element => {
					element.innerHTML = element.innerHTML.replaceAll("{Num}", i);
				});
				modalMain.appendChild(cloneS3);
				modalMain.appendChild(cloneS4);
				createDetech(i);

				document.getElementById("1_S2_TEXT").value = <?=count($d_surveyVictimslist)+1 ?>+(i-<?=count($d_surveyVictimslist)+1 ?>);
			}

			function validBlank() {
				var pass = true;
				$('.chk_empty').each(function(i, obj) {
					if (obj.value == "") {
						pass = false;
					}
				});
				return pass;
			}


			$('input[name="1_S2_1_3"]').on('change', function() {
				if ($(this).val() === '1') {
					document.getElementById("1_2151_a").className = document.getElementById("1_2151_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
					document.getElementById("1_2151_a").className = document.getElementById("1_2151_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
					document.getElementById("1_2151_i").className = document.getElementById("1_2151_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
				} else {
					document.getElementById("1_2151_a").className = document.getElementById("1_2151_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
					document.getElementById("1_2151_i").className = document.getElementById("1_2151_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
				}
			});



			$('input[name="1_S3_3_4"]').on('change', function() {
				if ($(this).val() === '8') {
					$('input[name="1_S3_3_4_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S3_3_4_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S3_3_5"]').on('change', function() {
				if ($(this).val() === '10') {
					$('input[name="1_S3_3_5_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S3_3_5_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_1"]').on('change', function() {
				if ($(this).val() === '1') {
					$('input[name="1_S4_4_1_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_1_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_2"]').on('change', function() {
				if ($(this).val() === '6') {
					$('input[name="1_S4_4_2_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_2_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_3"]').on('change', function() {
				if ($(this).val() === '1') {
					$('input[name="1_S4_4_3_1"]').prop('disabled', false);
					$('input[name="1_S4_4_3_2"]').prop('disabled', false);
					$('input[name="1_S4_4_3_3"]').prop('disabled', false);
				} else {
					$('input[name="1_S4_4_3_1"]').prop('disabled', true);
					$('input[name="1_S4_4_3_2"]').prop('disabled', true);
					$('input[name="1_S4_4_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3"]').prop('disabled', true);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_3_2"]').on('change', function() {
				if ($(this).val() === '2') {
					$('input[name="1_S4_4_3_2_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_3_2_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_3_3"]').on('change', function() {
				if ($(this).val() === '1') {
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				} else if ($(this).val() === '2') {
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				} else if ($(this).val() === '3') {
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				} else if ($(this).val() === '4') {
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				} else if ($(this).val() === '5') {
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				} else if ($(this).val() === '6') {
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				} else if ($(this).val() === '7') {
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', false);
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
				} else {
					$('input[name="1_S4_4_3_3_1_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_2_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_3_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_4_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_5_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_6_TEXT"]').prop('readonly', true);
					$('input[name="1_S4_4_3_3_7_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_6_1"]').on('change', function() {
				if ($(this).val() === '1') {
					$('input[name="1_S4_4_6_2"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_1"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_2"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_3"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_4"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_5"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_6"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_7"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_8"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_9"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_10"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_11"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_12"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_13"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_14"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_15"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_16"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_17"]').prop('checked', false);
					$('input[name="1_S4_4_6_2_18"]').prop('checked', false);

					$('input[name="1_S4_4_6_2_1"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_2"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_3"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_4"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_5"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_6"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_7"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_8"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_9"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_10"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_11"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_12"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_13"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_14"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_15"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_16"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_17"]').prop('disabled', true);
					$('input[name="1_S4_4_6_2_18"]').prop('disabled', true);

					$('input[name="1_S4_4_6_1_1"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_18_TEXT"]').prop('readonly', true);



				}
			});

			$('input[name="1_S4_4_6_2"]').on('change', function() {
				if ($(this).val() === '1') {
					$('input[name="1_S4_4_6_1"]').prop('checked', false);
					$('input[name="1_S4_4_6_1_1"]').prop('checked', false);
					$('input[name="1_S4_4_6_1_1_TEXT"]').prop('readonly', true);

					$('input[name="1_S4_4_6_2_1"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_2"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_3"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_4"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_5"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_6"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_7"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_8"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_9"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_10"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_11"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_12"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_13"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_14"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_15"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_16"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_17"]').prop('disabled', false);
					$('input[name="1_S4_4_6_2_18"]').prop('disabled', false);

					$('input[name="1_S4_4_6_1_1"]').prop('disabled', true);
				}
			});



			$('input[name="1_S4_4_6_1_1"]').on('change', function() {
				if ($(this).val() === '4') {
					$('input[name="1_S4_4_6_1_1_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_6_1_1_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_6_2_18"]').on('change', function() {
				if ($(this).prop("checked") == true) {
					$('input[name="1_S4_4_6_2_18_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_6_2_18_TEXT"]').prop('readonly', true);
				}
			});



			$('input[id="1_4{Num}62118"]').on('change', function() {
				if ($(this).is(":checked")) {
					$('input[name="1_S4_4_6_2_1_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_6_2_1_TEXT"]').prop('readonly', true);
				}
			});

			$('input[name="1_S4_4_7"]').on('change', function() {
				if ($(this).val() === '0') {
					$('input[name="1_S4_4_7_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_S4_4_7_TEXT"]').prop('readonly', true);
				}
			});

			function checkId(id) {
				if (id != null) {
					id.checked = true;
				}
			};
		</script>