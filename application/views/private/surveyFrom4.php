<label for="wight">ส่วนที่ 2 ความเชื่อมั่นต่อความปลอดภัยในชีวิตและทรัพย์สิน</label>
</br>
<div class="row">
	<label for="21" class="col-form-label">2.1 ท่านมีความเชื่อมั่นต่อความปลอดภัยในชีวิตและทรัพย์สินในระดับใด เมื่ออยู่ในบริเวณที่พักอาศัย<span class="star"> *</span></label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="4_215" name="4_S2_2_1" value="5" > (5) เชื่อมั่นมาก
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
			<input type="radio" id="4_210" name="4_S2_2_1" value="0" data-parsley-required="true"> (0) ไม่เชื่อมั่นเลย
		</label>
	</div>
</div>

<div class="row">
	<label for="22" class="col-form-label">2.2 ในภาพรวมท่านมีความเชื่อมั่นต่อความปลอดภัยในชีวิตและทรัพย์สิน เมื่ออยู่ในพื้นที่อื่นที่ไม่ใช่บริเวณที่พักอาศัย<span class="star"> *</span></label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="4_225" name="4_S2_2_2" value="5" > (5) เชื่อมั่นมาก
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
			<input type="radio" id="4_220" name="4_S2_2_2" value="0" data-parsley-required="true"> (0) ไม่เชื่อมั่นเลย
		</label>
	</div>
</div>

<div class="row">
	<label for="23" class="col-form-label">2.3 ในภาพรวมท่านมีความเชื่อมั่นต่อความปลอดภัยในชีวิตและทรัพย์สินในระดับใด<span class="star"> *</span></label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="4_235" name="4_S2_2_3" value="5" data-parsley-required="true"> (5) เชื่อมั่นมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_234" name="4_S2_2_3" value="4" data-parsley-required="true"> (4) เชื่อมั่นค่อนข้างมาก
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_233" name="4_S2_2_3" value="3" data-parsley-required="true"> (3) เชื่อมั่นปานกลาง
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_232" name="4_S2_2_3" value="2" data-parsley-required="true"> (2) เชื่อมั่นค่อนข้างน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_231" name="4_S2_2_3" value="1" data-parsley-required="true"> (1) เชื่อมั่นน้อย
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="4_230" name="4_S2_2_3" value="0" data-parsley-required="true"> (0) ไม่เชื่อมั่นเลย
		</label>
	</div>
</div>

<script>
	if('<?=$u_check_new_survey_trust_for_security?>'!='0'){
			$(function() {
				checkId(document.getElementById("4_21<?=$d_surveyTrustForSecurity->S2_2_1?>"));
				checkId(document.getElementById("4_22<?=$d_surveyTrustForSecurity->S2_2_2?>"));
				checkId(document.getElementById("4_23<?=$d_surveyTrustForSecurity->S2_2_3?>"));

			});
		};

		function checkId(id){
				if(id != null){
					id.checked = true;
				}
			};
			$('input[type="radio"]').mousedown(function() { 
			// if it was checked before
			if(this.checked) {
				// bind event to reset state after click is completed
				$(this).mouseup(function() {  
					// bind param, because "this" will point somewhere else in setTimeout
					var radio = this;
					// apparently if you do it immediatelly, it will be overriden, hence wait a tiny bit
					setTimeout(function() { 
						radio.checked = false; 
					}, 5); 
					// don't handle mouseup anymore unless bound again
					$(this).unbind('mouseup');
				});
			}
		});
</script>