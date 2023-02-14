<label for="wight">ส่วนที่ 2 ความเชื่อมั่นต่อความปลอดภัยในชีวิตละทรัพย์สิน</label>
</br>
<div class="row">
	<label for="21" class="col-form-label">2.1 ท่านมีความเชื่อมั่นต่อความปลอดภัยในชีวิตละทรัพย์สินในระดับใด เมื่ออยู่ในบริเวณที่พักอาศัย</label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="4_215" name="4_S2_2_1" value="5"> (5) เชื่อมั่นมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_214" name="4_S2_2_1" value="4"> (4) เชื่อมั่นค่อนข้างมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_213" name="4_S2_2_1" value="3"> (3) เชื่อมั่นปานกลาง
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_212" name="4_S2_2_1" value="2"> (2) เชื่อมั่นค่อนข้างน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_211" name="4_S2_2_1" value="1"> (1) เชื่อมั่นน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_210" name="4_S2_2_1" value="0"> (0) ไม่เชื่อมั่นเลย
		</label>
	</div>
</div>

<div class="row">
	<label for="22" class="col-form-label">2.2 ในภาพรวมท่านมีความเชื่อมั่นต่อความปลอดภัยในชีวิตและทรัพย์สิน เมื่ออยู่ในพื้นที่อื่นที่ไม่ใช่บริเวณที่พักอาศัย</label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="4_225" name="4_S2_2_2" value="5"> (5) เชื่อมั่นมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_224" name="4_S2_2_2" value="4"> (4) เชื่อมั่นค่อนข้างมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_223" name="4_S2_2_2" value="3"> (3) เชื่อมั่นปานกลาง
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_222" name="4_S2_2_2" value="2"> (2) เชื่อมั่นค่อนข้างน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_221" name="4_S2_2_2" value="1"> (1) เชื่อมั่นน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_220" name="4_S2_2_2" value="0"> (0) ไม่เชื่อมั่นเลย
		</label>
	</div>
</div>

<div class="row">
	<label for="23" class="col-form-label">2.3 ในภาพรวมท่านมีความเชื่อมั่นต่อความปลอดภัยในชีวิตและทรัพย์สินในระดับใด</label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="4_235" name="4_S2_2_3" value="5"> (5) เชื่อมั่นมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_234" name="4_S2_2_3" value="4"> (4) เชื่อมั่นค่อนข้างมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_233" name="4_S2_2_3" value="3"> (3) เชื่อมั่นปานกลาง
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_232" name="4_S2_2_3" value="2"> (2) เชื่อมั่นค่อนข้างน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_231" name="4_S2_2_3" value="1"> (1) เชื่อมั่นน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_230" name="4_S2_2_3" value="0"> (0) ไม่เชื่อมั่นเลย
		</label>
	</div>
</div>

<script>
	if('<?=$u_check_new_survey_trust_for_security?>'!='0'){
			$(function() {
				document.getElementById("4_21<?=$d_surveyTrustForSecurity->S2_2_1?>").checked = true;
				document.getElementById("4_22<?=$d_surveyTrustForSecurity->S2_2_2?>").checked = true;
				document.getElementById("4_23<?=$d_surveyTrustForSecurity->S2_2_3?>").checked = true;

			});
		};
</script>