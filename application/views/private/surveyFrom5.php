<label for="wight">ส่วนที่ 2 ข้อมูลเกี่ยวกับการข่มเหง การแสวงหาประโยชน์อย่างไม่ถูกต้อง การค้ามนุษย์ และความรุนแรงและการทรมานทุกรูปแบบที่มีต่อเด็ก</label>
</br>
<div class="row">
	<label for="21" class="col-form-label">2.1 ท่านเคยถูกกระทำความรุนแรงทางเพศ โดยตกเป็นเหยื่ออาชญากรรมก่อนอายุ 18 ปี</label>
	<div class="col-lg-12">
		<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
			<input type="radio" id="5_211" name="5_S2_2_1" value="1"> (1) ใช่
		</label>
		<label class="radio-inline col-form-label  col-lg-3">
			<input type="radio" id="5_212" name="5_S2_2_1" value="2"> (2) ไม่ใช่
		</label>
	</div>
</div>
<div class="row">
	<label for="22" class="col-form-label">2.2 ท่านตกเป็นเหยื่ออาชญากรรมครั้งแรกในขณะที่มีอายุ </label>
	<div class="col-lg-1">
		<input type="text" class="form-control" id="5_22" name="5_S2_2_2" readonly/>
	</div>
	<div class="col-form-label inputTextFix">
		ปี
	</div>
</div>

<label for="wight"><u>หมายเหตุ :</u></label>
<p>1. <b>ความรุนแรงทางเพศ</b> ในที่นี้หมายถึง การข่มเหง การแสวงหาประโยชน์อย่างไม่ถูกต้อง การค้ามนุษย์
	และความรุนแรงและการทรมานทุกรูปแบบที่มีต่อเด็ก อันได้แก่ การบังคับ ชักจูงเด็ก ให้มีกิจกรรมทางเพศโดยไม่ยิมยอม
	การใช้เด็กเป็นเครื่องมือแสวงหาผลประโยชน์ทางเพศ ในรูปแบบสื่อลามก โสเภณีเด็ก ทาส การค้ามนุษย์ การซื้อขายเด็กด้วยจุดประสงค์ทางเพศ หรือการบังคับแต่งงาน
</p>
<p>2. <b>กิจกรรมทางเพศ</b> ในที่นี้หมายถึง การมีเพศสัมพันธ์ทั้งที่มีการร่วมประเวณีและไม่มีการร่วมประเวณี เช่น ให้สำเร็จความใคร่
	การทำอนาจาร และรวมทั้งกิจกรรมทางเพศอื่นที่ไม่ได้มีการร่วมประเวณีหรือมีเพศสัมพันธ์ด้วย เช่น การบันทึกภาพลามกอนาจาร ล่อลวงให้เป็นผู้ให้บริการในธุรกิจทางเพศ จัดทำสื่อโฆษณาลามกอนาจาร
</p>

<script>
	$('input[name="5_S2_2_1"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="5_S2_2_2"]').prop('readonly', false);
			} else {
				$('input[name="5_S2_2_2"]').prop('readonly', true);
			}
		});

	if('<?=$u_check_new_survey_sdgs?>'!='0'){
			$(function() {
				document.getElementById("5_21<?=$d_surveySdgs->S2_2_1?>").checked = true;
				if (<?= $d_surveySdgs->S2_2_1 ?> == '1') {
					$('input[name="5_S2_2_2"]').prop('readonly', false);
				} else {
					$('input[name="5_S2_2_2"]').prop('readonly', true);
				}
				document.getElementById("5_22").value = '<?=$d_surveySdgs->S2_2_2?>';

			});
		};
</script>