<label for="wight">ส่วนที่ 2 ความรู้สึกหวาดกลัวภัยอาชญากรรม</label></br>
<label for="wight">2.1 ท่านมีความรู้สึกปลอดภัยมากน้อยเพียงใดในกรณีต่าง ๆ ต่อไปนี้</label>
<div class="p-fluid p-formgrid p-grid">
	<div class="p-field p-col">

		<div class="row" >
			<table class="tg" style="margin-left : 10px;">
				<thead>
					<tr>
						<th class="tg-9wq8 bg" rowspan="2">สถานการณ์<br></th>
						<th class="tg-c3oa bg" colspan="5">ความรู้สึกปลอดภัย</th>
					</tr>
					<tr>
						<th class="tg-c3ow bg">5<br><br>มาก</th>
						<th class="tg-c3ow bg">4<br><br>ค่อนข้าง<br>มาก</th>
						<th class="tg-c3ow bg">3<br><br>ปานกลาง</th>
						<th class="tg-c3ow bg">2<br><br>ค่อนข้างน้อย</th>
						<th class="tg-c3ow bg">1<br><br>น้อย</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tg-0laq bg" colspan="7">ภาพรวมของความปลอดภัยในละแวกที่พักอาศัย</td>
					</tr>
					<tr>
						<td class="tg-0lax">2.1.1 การเดินตามลำพังในละแวกที่พักอาศัยในตอน<u>กลางวัน</u></td>
						<td class="tg-0laa"><input type="radio" id="3_2115" name="3_S2_2_1_1" value="5"></td>
						<td class="tg-0laa"><input type="radio" id="3_2114" name="3_S2_2_1_1" value="4"></td>
						<td class="tg-0laa"><input type="radio" id="3_2113" name="3_S2_2_1_1" value="3"></td>
						<td class="tg-0laa"><input type="radio" id="3_2112" name="3_S2_2_1_1" value="2"></td>
						<td class="tg-0laa"><input type="radio" id="3_2111" name="3_S2_2_1_1" value="1"></td>
					</tr>
					<tr>
						<td class="tg-0lax">2.1.2 การเดินตามลำพังในละแวกที่พักอาศัยในตอน<u>กลางคืน</u></td>
						<td class="tg-0laa"><input type="radio" id="3_2125" name="3_S2_2_1_2" value="5"></td>
						<td class="tg-0laa"><input type="radio" id="3_2124" name="3_S2_2_1_2" value="4"></td>
						<td class="tg-0laa"><input type="radio" id="3_2123" name="3_S2_2_1_2" value="3"></td>
						<td class="tg-0laa"><input type="radio" id="3_2122" name="3_S2_2_1_2" value="2"></td>
						<td class="tg-0laa"><input type="radio" id="3_2121" name="3_S2_2_1_2" value="1"></td>
					</tr>
					<tr>
						<td class="tg-0lax">2.1.3 เมื่อต้องอยู่บ้านคนเดียวในเวลา<u>กลางวัน</u> </td>
						<td class="tg-0laa"><input type="radio" id="3_2135" name="3_S2_2_1_3" value="5"></td>
						<td class="tg-0laa"><input type="radio" id="3_2134" name="3_S2_2_1_3" value="4"></td>
						<td class="tg-0laa"><input type="radio" id="3_2133" name="3_S2_2_1_3" value="3"></td>
						<td class="tg-0laa"><input type="radio" id="3_2132" name="3_S2_2_1_3" value="2"></td>
						<td class="tg-0laa"><input type="radio" id="3_2131" name="3_S2_2_1_3" value="1"></td>
					</tr>
					<tr>
						<td class="tg-0lax">2.1.4 เมื่อต้องอยู่บ้านคนเดียวในเวลา<u>กลางคืน</u></td>
						<td class="tg-0laa"><input type="radio" id="3_2145" name="3_S2_2_1_4" value="5"></td>
						<td class="tg-0laa"><input type="radio" id="3_2144" name="3_S2_2_1_4" value="4"></td>
						<td class="tg-0laa"><input type="radio" id="3_2143" name="3_S2_2_1_4" value="3"></td>
						<td class="tg-0laa"><input type="radio" id="3_2142" name="3_S2_2_1_4" value="2"></td>
						<td class="tg-0laa"><input type="radio" id="3_2141" name="3_S2_2_1_4" value="1"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


<script>
	if('<?=$u_check_new_survey_panic_in_crimes?>'!='0'){
			$(function() {
				checkId(document.getElementById("3_211<?=$d_surveyPanicInCrimes->S2_2_1_1?>"));
				checkId(document.getElementById("3_212<?=$d_surveyPanicInCrimes->S2_2_1_2?>"));
				checkId(document.getElementById("3_213<?=$d_surveyPanicInCrimes->S2_2_1_3?>"));
				checkId(document.getElementById("3_214<?=$d_surveyPanicInCrimes->S2_2_1_4?>"));

			});
		};

		function checkId(id){
				if(id != null){
					id.checked = true;
				}
			};
</script>