<label for="wight">ส่วนที่ 2 ข้อมูลลสมาชิกในครัวเรือน</label>
</br>
<label for="wight">จำนวนสมาชิกในครัวเรือนที่อยู่อาศัยในห้วง พ.ศ. 2565 มากกว่า 6 เดือนขึ้นไป รวมทั้งสิ้น</label>
<label class="radio-inline col-form-label  col-lg-1">
	<input type="text" class="form-control" id="1_S2_text" name="1_S2_text" value="1" readonly />

</label>
<label for="wight">คน</label>
</br>
<label for="wight">(นับรวมผู้ตอบและสมาชิกทุกคน (ทุกช่วงอายุ) ในรอบ 1 ปีที่ผ่านมา)</label>
<div class="p-fluid p-formgrid p-grid">
	<div class="p-field p-col">
		</br>
		<div class="col-lg-1.5" style="margin-left: 10px;">
			<a onclick="addFamily('front','0')" class="ui green button "><i class="plus icon small"></i> เพิ่มสมาชิกในครัวเรือน</a>
		</div>
		</br>
		<div class="row" style="margin-left: 10px;">
			<table class="tg">
				<thead>
					<tr>
						<th>ลำดับที่สมาชิก</br>ในครัวเรือน</th>
						<th>เพศ<span class="star"> *</span></th>
						<th>อายุ<span class="star"> *</span></th>
						<th>การตกเป็นเหยื่อ</br>อาชญากรรม</br>(1 ม.ค. – 31 ธ.ค. 65)<span class="star"> *</span></th>
						<th><u>หมายเหตุ</u></br>(กรณีไม่ระบุคำตอบ)</th>
						<th>กรอกข้อมูลและรายละเอียด</br>การตกเป็นเหยื่ออาชญากรรม</th>
					</tr>
				</thead>
				<tbody id="familyTable">
					<tr>
						<td>1. (ตัวผู้ตอบ)</td>
						<td><input type="radio" id="1_2111" name="1_S2_1_1" value="1" data-parsley-required="true"> ชาย <input type="radio" id="1_2112" name="1_S2_1_1" value="2"> หญิง <input type="radio" id="1_2113" name="1_S2_1_1" value="3"> ทางเลือก</td>
						<td><input type="number" class="form-control age" oninput="maxLengthCheck(this)" maxlength="3" id="1_212" name="1_S2_1_2" data-parsley-required="true" /></td>
						<td><input type="radio" id="1_2131" name="1_S2_1_3" value="1"> เคย <input type="radio" id="1_2132" name="1_S2_1_3" value="2" data-parsley-required="true"> ไม่เคย</td>
						<td><input type="text" class="form-control" id="1_214" name="1_S2_1_4" /></td>
						<td>
							<a href="<?= site_url('main/goVictims/'. $u_now_id.'/master') ?>" data-url="<?= site_url('main/saveSurvey/true') ?>" id="1_2151_a" name="1_S2_1_5_BUTTON" type="button" class="ui basic black button btn-form-hiddend-save-go disabled"><i id="1_2151_i" class="edit icon large readonly"></i></a>
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
				<td><input type="radio" id="1_2{Num}11" name="1_S2_{Num}_1" value="1" data-parsley-required="true"> ชาย <input type="radio" id="1_2{Num}12" name="1_S2_{Num}_1" value="2"> หญิง <input type="radio" id="1_2{Num}13" name="1_S2_{Num}_1" value="3"> ทางเลือก</td>
				<td><input type="number" class="form-control age" oninput="maxLengthCheck(this)" maxlength="3" id="1_2{Num}2" name="1_S2_{Num}_2" data-parsley-required="true" /></td>
				<td><input type="radio" id="1_2{Num}31" name="1_S2_{Num}_3" value="1" data-parsley-required="true"> เคย <input type="radio" id="1_2{Num}32" name="1_S2_{Num}_3" value="2" > ไม่เคย</td>
				<td><input type="text" class="form-control" id="1_2{Num}4" name="1_S2_{Num}_4" /></td>
				<td>
					<a href="<?= site_url('main/goVictims/{profileId}/' . $u_now_id) ?>" data-url="<?= site_url('main/saveSurvey/true') ?>" id="1_2{Num}51_a" name="1_S2_{Num}_5_BUTTON" type="button"  class="ui basic black button btn-form-hiddend-save-go disabled"><i id="1_2{Num}51_i" class="edit icon large readonly"></i></a>
					<a href="javascript:void(0)" data-url="<?= site_url('main/deleteVictims/{profileId}/' . $u_now_id) ?>" name="1_S2_1_5_Delete" type="button" class="ui basic red button btn-form-save-delete readonly"><i id="1_2151_i" class="delete icon large readonly"></i></a>
				</td>
			</tr>
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
							<a value="Save" class="close btn width-100 btn-default btn-form-hiddend-save" data-url="<?= site_url('main/saveSurvey/true') ?>" data-dismiss="modal" aria-hidden="true">Save</a>
						</div>
					</div>
				</div>
			</div>
		</template>


		<script>
			var i = 1;
			var countCrimeIn = 0;
			
			$(document).ready(function() {
				const place = document.querySelector("#placeTemplate");
				const tModal = document.querySelector('#templateModal');
				const cloneModal = tModal.content.cloneNode(true);
				let div = cloneModal.querySelectorAll("div.modal, div.fade");
				div[0].removeAttribute('modal-edit-{Num}')
				div[0].id = 'modal-edit-1';
				let a = cloneModal.querySelectorAll("div");
				a.forEach(element => {
					element.innerHTML = replaceAll(element.innerHTML,"{Num}", '1');
				});

				place.appendChild(cloneModal);
			

			});

			if ('<?= $u_check_new_survey_victims ?>' != '0') {
				$(function() {
					localStorage.setItem('countCrimeIn1','0');
					checkId(document.getElementById("1_211<?= $d_surveyVictims->S2_1 ?>"));
					document.getElementById("1_212").value = '<?= $d_surveyVictims->S2_2 ?>';
					checkId(document.getElementById("1_213<?= $d_surveyVictims->S2_3 ?>"));
					document.getElementById("1_214").value = '<?= $d_surveyVictims->S2_4 ?>';

					if ('<?= $d_surveyVictims->S2_3 ?>' == '1') {
						countCrimeFunction('add');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
					} else {
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
					}


					<? for ($index = 2; $index <= count($d_surveyVictimslist) + 1; $index++) { ?>
						addFamily('back', '<?= $d_surveyVictimslist[$index - 2]->profile_id ?>');
						checkId(document.getElementById("1_2" + <?= $index ?> + "1<?= $d_surveyVictimslist[$index - 2]->S2_1 ?>"));
						document.getElementById("1_2" + <?= $index ?> + "2").value = '<?= $d_surveyVictimslist[$index - 2]->S2_2 ?>';
						checkId(document.getElementById("1_2" + <?= $index ?> + "3<?= $d_surveyVictimslist[$index - 2]->S2_3 ?>"));
						document.getElementById("1_2" + <?= $index ?> + "4").value = '<?= $d_surveyVictimslist[$index - 2]->S2_4 ?>';

						if ('<?= $d_surveyVictimslist[$index - 2]->S2_3 ?>' == '1') {
							countCrimeFunction('add');
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
						countCrimeFunction('add');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
					} else {
						countCrimeFunction('odd');
						document.getElementById("1_2" + i + "51_a").className = document.getElementById("1_2" + i + "51_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
						document.getElementById("1_2" + i + "51_i").className = document.getElementById("1_2" + i + "51_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
					}
				})

			};

			function addFamily(checkFront, profileId) {
				i = i + 1;
				var newProfileId = '';


				if (checkFront == 'front') {
					getProfileId(function(data) {
						saveSurvey();
						newProfileId = data;
						cloneTable(profileId, newProfileId);
					});

				} else {
					cloneTable(profileId, newProfileId);
				}




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

			function cloneTable(profileId, newProfileId) {
				if(newProfileId != ''){
					profileId = newProfileId;
				}
				const tbody = document.querySelector("#familyTable");
				const template = document.querySelector('#familyTemplate');

				const clone = template.content.cloneNode(true);
				let td = clone.querySelectorAll("td");
				td[0].innerHTML = replaceAll(td[0].innerHTML,"{No.}", i + ".");
				td[1].innerHTML = replaceAll(td[1].innerHTML,"{Num}", i);
				td[2].innerHTML = replaceAll(td[2].innerHTML,"{Num}", i);
				td[3].innerHTML = replaceAll(td[3].innerHTML,"{Num}", i);
				td[4].innerHTML = replaceAll(td[4].innerHTML,"{Num}", i);
				td[5].innerHTML = replaceAll(td[5].innerHTML,"{Num}", i);
				td[5].innerHTML = replaceAll(td[5].innerHTML,"{profileId}", profileId);

				tbody.appendChild(clone);

				const place = document.querySelector("#placeTemplate");
				const tModal = document.querySelector('#templateModal');
				const cloneModal = tModal.content.cloneNode(true);
				let div = cloneModal.querySelectorAll("div.modal, div.fade");
				div[0].removeAttribute('modal-edit-{Num}')
				div[0].id = "modal-edit-" + i;
				let a = cloneModal.querySelectorAll("div");
				a.forEach(element => {
					element.innerHTML = replaceAll(element.innerHTML,"{Num}", i);
				});
				place.appendChild(cloneModal);

				createDetech(i);

				document.getElementById("1_S2_text").value = <?= count($d_surveyVictimslist) + 1 ?> + (i - <?= count($d_surveyVictimslist) + 1 ?>);
			}

			function getProfileId(callback) {
				$.ajax({
					url: '../queryProfileIdNext',
					data: $(FormSeletor).serialize(),
					dataType: 'json',
					type: 'post',
					success: function(data) {
						callback(data);
					},
					error: function() {
						alert('Error find profileId');
					}
				});
			};

			function saveAll(){
				var restUrl = '../saveSurvey/true';
				if (validBlank()) {
					$.ajax({
						url: restUrl,
						data: $(FormSeletor).serialize(),
						dataType: 'json',
						type: 'post'
					});
				} else {
					formMessageValidator('กรอกข้อมูลไม่ครบถ้วน', 'กรุณากรอกข้อมูลที่เป็น <span class="star">* สีแดง</span>ให้ครบก่อนบันทึกข้อมูล');
				}
			};

			function saveSurvey() {
				var restUrl = '../saveSurvey1/' + '<?= $u_now_id ?>' + '/' + i;
				if (validBlank()) {
					$.ajax({
						url: restUrl,
						data: $(FormSeletor).serialize(),
						dataType: 'json',
						type: 'post'
					});
				} else {
					formMessageValidator('กรอกข้อมูลไม่ครบถ้วน', 'กรุณากรอกข้อมูลที่เป็น <span class="star">* สีแดง</span>ให้ครบก่อนบันทึกข้อมูล');
				}
			};


			$('input[name="1_S2_1_3"]').on('change', function() {
				if ($(this).val() === '1') {
					countCrimeFunction('add');
					document.getElementById("1_2151_a").className = document.getElementById("1_2151_a").className.replace(/(?:^|\s)disabled(?!\S)/g, '');
					document.getElementById("1_2151_a").className = document.getElementById("1_2151_a").className.replace(/(?:^|\s)black(?!\S)/g, ' green ');
					document.getElementById("1_2151_i").className = document.getElementById("1_2151_i").className.replace(/(?:^|\s)disabled(?!\S)/g, ' green ');
				} else {
					countCrimeFunction('odd');
					document.getElementById("1_2151_a").className = document.getElementById("1_2151_a").className.replace(/(?:^|\s)green(?!\S)/g, ' black disabled ');
					document.getElementById("1_2151_i").className = document.getElementById("1_2151_i").className.replace(/(?:^|\s)green(?!\S)/g, ' disabled ');
				}
			});

			function countCrimeFunction(diff) {
				
				if(diff=='add'){
					countCrimeIn = countCrimeIn+1;
				}else if(diff=='odd'){
					countCrimeIn = countCrimeIn-1;
				}
				localStorage.setItem('countCrimeIn1',countCrimeIn.toString());
				
			};


			function checkId(id) {
				if (id != null) {
					id.checked = true;
				}
			};

			function checkIdnCheckBOX(id, value) {
				if (id != null) {
					if (value == 1) {
						id.checked = true;
					}
				}
			};

			function checkIdbox(id, value) {
				if (id != null) {
					id.value = value;
				}
			};

			function maxLengthCheck(object) {
				if (object.value.length > object.maxLength)
					object.value = object.value.slice(0, object.maxLength)
			}

			$(".floatNumberField").change(function() {
				$(this).val(parseFloat($(this).val()).toFixed(2));
			});

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
							if("1_2131,1_2231,1_2331,1_2431,1_2531,1_2631,1_2731,1_2831,1_2931".includes(radio.id)){
								countCrimeFunction('odd');
							}
						}, 5); 
						// don't handle mouseup anymore unless bound again
						$(this).unbind('mouseup');
					});
				}
			});
			function escapeRegExp(string) {
				return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); // $& means the whole matched string
			}
				function replaceAll(str, match, replacement){
				return str.replace(new RegExp(escapeRegExp(match), 'g'), ()=>replacement);
			}
		</script>