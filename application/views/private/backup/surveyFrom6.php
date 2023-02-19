<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Menu</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="stylesheet" href="<?php echo base_url() . 'css/formSurvey.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "js/css/cupertino/jquery-ui-1.9.2.custom.min.css" ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">

	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />

	<link href="../assets/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/style.min.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-1.12.3.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-ui-1.11.4.custom.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . "js/custom/app.custom.js" ?>"></script>
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->

	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<!-- ================== END BASE JS ================== -->

	<!--[if lt IE 9]>
	    <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer page-without-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top ">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?= site_url('main/index') ?>" class="navbar-brand"><img src="../img/logo.png" class="logo" alt="" />สํานักงานกิจการยุติธรรม</a>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="hidden-xs"><?= $u_disp ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0)" class="item btn-form-logout" data-url="<?= site_url('main/submitLogout') ?>">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end navbar-right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		</a>
		<!-- begin #content -->
		<div class="panel container" style="margin-top : 10px;">
			<h1 class="page-header" style="margin-top : 10px;">แบบสอบถามความเชื่อมั่นของประชาชนที่มีต่อกระบวนการยุติธรรม</h1>
			<div class="body">
				<form class="a form app form-horizontal" id="form-data" method="post">
					<label for="wight">ส่วนที่ 1 ข้อมูลเกี่ยวกับผู้ตอบแบบสอบถาม</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">
							<label for="wight">1.1 ข้อมูลบุคคลของผู้ตอบแบบสอบถาม </label>

							<div class="row">
								<label for="1111" class="col-form-label">1.1.1 เพศ &nbsp</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11111" name="S1_1_1_1" value="1"> (1) ชาย
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11112" name="S1_1_1_1" value="2"> (2) หญิง
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11113" name="S1_1_1_1" value="3"> (3) เพศทางเลือก
								</label>
							</div>

							<div class="row">
								<label for="1112" class="col-form-label">1.1.2 อายุ</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="S1_1_1_2" />
								</div>
								<div class="col-form-label inputTextFix">
									ปี (เต็มปีบริบูรณ์)
								</div>
							</div>

							<div class="row">
								<label for="1113" class="col-form-label">1.1.3 รายได้</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11131" name="S1_1_1_3" value="1"> (1) ต่ำกว่า 15,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11132" name="S1_1_1_3" value="2"> (2) 15,001-25,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11133" name="S1_1_1_3" value="3"> (3) 25,001-35,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11134" name="S1_1_1_3" value="4"> (4) 35,001-45,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11135" name="S1_1_1_3" value="5"> (5) 45,001-55,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11136" name="S1_1_1_3" value="6"> (6) 55,001-65,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11137" name="S1_1_1_3" value="7"> (7) 65,001-75,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11138" name="S1_1_1_3" value="8"> (8) มากกว่า 75,000 บาท
									</label>
								</div>
							</div>

							<div class="row">
								<label for="1114" class="col-form-label">1.1.4 อาชีพ</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11141" name="S1_1_1_4" value="1"> (1) ข้าราชการ พนักงานรัฐวิสาหกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11142" name="S1_1_1_4" value="2"> (2) พนักงานเอกชน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11143" name="S1_1_1_4" value="3"> (3) นักเรียน/นักศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11144" name="S1_1_1_4" value="4"> (4) รับจ้างทั่วไป
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11145" name="S1_1_1_4" value="5"> (5) เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11146" name="S1_1_1_4" value="6"> (6) ประกอบธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11147" name="S1_1_1_4" value="7"> (7) ไม่ได้ประกอบอาชีพ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11148" name="S1_1_1_4" value="8"> (8) อื่น ๆ...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S1_1_1_4_text" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1115" class="col-form-label">1.1.5 การศึกษาระดับสูงสุด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11151" name="S1_1_1_5" value="1"> (1) ไม่เคยเข้ารับการศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11152" name="S1_1_1_5" value="2"> (2) การศึกษานอกระบบ (กศน.)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11153" name="S1_1_1_5" value="3"> (3) ประถมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11154" name="S1_1_1_5" value="4"> (4) มัธยมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11155" name="S1_1_1_5" value="5"> (5) ปวช.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11156" name="S1_1_1_5" value="6"> (6) ปวส.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11157" name="S1_1_1_5" value="7"> (7) ปริญญาตรี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11158" name="S1_1_1_5" value="8"> (8) ปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11159" name="S1_1_1_5" value="9"> (9) สูงกว่าปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="111510" name="S1_1_1_5" value="10"> (10) การศึกษาในรูปแบบอื่น...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S1_1_1_5_text" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1116" class="col-form-label">1.1.6 ในช่วงระยะเวลา 5 ปี ท่านเคยมาติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรม หน่วยงานใด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-4" style="margin-left: 10px;">
										<input type="radio" id="11161" name="S1_1_1_6" value="1"> (1) เคย...
									</label>
									<label class="radio-inline col-form-label  col-lg-4">
										<input type="radio" id="11162" name="S1_1_1_6" value="2"> (2) ไม่เคย
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									เคย กรุณาระบุหน่วยงาน
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S1_1_1_6_text" readonly />
								</div>
							</div>

							<div class="row">
								<label for="11161" class="col-form-label" style="margin-left: 15px;">1.1.6.1 ท่านเคยมาติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรมในสถานะใด </label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 20px;">
										<input type="radio" id="111611" name="S1_1_1_6_1" value="1" readonly> (1) ผู้มาติดต่อหรือรับบริการโดยตรง ได้แก่ ผู้เสียหาย ผู้กระทำผิด
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 20px;">
										<input type="radio" id="111612" name="S1_1_1_6_1" value="2" readonly> (2) ผู้มาติดต่อหรือรับบริการโดยอ้อม ได้แก่ ญาติ ผู้เกี่ยวข้องกับผู้เสียหายหรือผู้กระทำผิด
									</label>
								</div>
							</div>
						</div>
					</div>
					</br></br>
					<label for="wight">ส่วนที่ 2 ความเชื่อมั่นต่อคุณภาพการให้บริการในภาพรวมของกระบวนการยุติธรรม</label>
					<label for="wight"><u>คำชี้แจง</u> โปรดอ่านข้อความแต่ละข้อ และใส่เครื่องหมาย √ ในช่องคำถามที่ตรงกับความรู้สึกของท่านมากที่สุด</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
								<table class="tg">
									<thead>
										<tr>
											<th class="tg-9wq8 bg" rowspan="2">ข้อ<br></th>
											<th class="tg-lboi bg" rowspan="2">ความเชื่อมั่นต่อคุณภาพการให้บริการในภาพรวมของกระบวนการยุติธรรม<br></th>
											<th class="tg-c3oa bg" colspan="5">ระดับความเชื่อมั่น</th>
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
											<td class="tg-0laq bg" colspan="7">1.ท่านมีความเชื่อมั่นต่อ "ความสะดวกในการรับบริการ" ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">1.1</td>
											<td class="tg-0lax">ขั้นตอนและระยะเวลาการดำเนินงานของหน่วยงานชัดเจน</td>
											<td class="tg-0laa"><input type="radio" id="2111" name="S2_1_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2112" name="S2_1_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2113" name="S2_1_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2114" name="S2_1_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2115" name="S2_1_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.2</td>
											<td class="tg-0lax">การให้คำแนะนำ/อธิบายขั้นตอนการให้บริการของหน่วยงานชัดเจนและเป็นประโยชน์</td>
											<td class="tg-0laa"><input type="radio" id="2121" name="S2_1_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2122" name="S2_1_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2123" name="S2_1_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2124" name="S2_1_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2125" name="S2_1_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.3</td>
											<td class="tg-0lax">ความสะดวกในการเข้าถึงข้อมูล/การติดตามการดำเนินงานของหน่วยงาน</td>
											<td class="tg-0laa"><input type="radio" id="2131" name="S2_1_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2132" name="S2_1_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2133" name="S2_1_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2134" name="S2_1_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2135" name="S2_1_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.4</td>
											<td class="tg-0lax">สิ่งอำนวยความสะดวกที่เอื้อต่อการให้บริการของหน่วยงาน</td>
											<td class="tg-0laa"><input type="radio" id="2141" name="S2_1_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2142" name="S2_1_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2143" name="S2_1_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2144" name="S2_1_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2145" name="S2_1_4" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">2.ท่านมีความเชื่อมั่นต่อ “สมรรถนะของผู้ให้บริการ” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">2.1</td>
											<td class="tg-0lax">เจ้าหน้าที่มีความเต็มใจที่จะช่วยเหลือและให้บริการ</td>
											<td class="tg-0laa"><input type="radio" id="2211" name="S2_2_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2212" name="S2_2_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2213" name="S2_2_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2214" name="S2_2_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2215" name="S2_2_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.2</td>
											<td class="tg-0lax">เจ้าหน้าที่มีความรู้ความสามารถในการให้บริการให้คำแนะนำในการแก้ไขปัญหาได้อย่างถูกต้อง</td>
											<td class="tg-0laa"><input type="radio" id="2221" name="S2_2_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2222" name="S2_2_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2223" name="S2_2_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2224" name="S2_2_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2225" name="S2_2_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.3</td>
											<td class="tg-0lax">เจ้าหน้าที่มีอัธยาศัยที่ดี สุภาพ และให้เกียรติผู้มารับบริการ</td>
											<td class="tg-0laa"><input type="radio" id="2231" name="S2_2_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2232" name="S2_2_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2233" name="S2_2_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2234" name="S2_2_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2235" name="S2_2_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.4</td>
											<td class="tg-0lax">เจ้าหน้าที่มีความซื่อสัตย์ ซื่อตรง ปฏิบัติงานตามระเบียบ กฎเกณฑ์ ข้อบังคับที่กำหนดอย่างเคร่งครัด</td>
											<td class="tg-0laa"><input type="radio" id="2241" name="S2_2_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2242" name="S2_2_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2243" name="S2_2_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2244" name="S2_2_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2245" name="S2_2_4" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">3.ท่านมีความเชื่อมั่นต่อ “ความรู้สึกมั่นคงปลอดภัย” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">3.1</td>
											<td class="tg-0lax">ข้อมูลของผู้รับบริการได้รับการจัดเก็บอย่างปลอดภัยและเป็นความลับ</td>
											<td class="tg-0laa"><input type="radio" id="2311" name="S2_3_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2312" name="S2_3_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2313" name="S2_3_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2314" name="S2_3_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2315" name="S2_3_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.2</td>
											<td class="tg-0lax">ความมั่นใจว่าจะไม่ได้รับอันตรายจากการเข้ามารับบริการ/เกี่ยวข้องกับหน่วยงานที่มารับบริการและเจ้าหน้าที่</td>
											<td class="tg-0laa"><input type="radio" id="2321" name="S2_3_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2322" name="S2_3_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2323" name="S2_3_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2324" name="S2_3_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2325" name="S2_3_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.3</td>
											<td class="tg-0lax">การปฏิบัติต่อผู้มารับบริการอยู่ในมาตรฐานระดับเดียวกัน</td>
											<td class="tg-0laa"><input type="radio" id="2331" name="S2_3_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2332" name="S2_3_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2333" name="S2_3_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2334" name="S2_3_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2335" name="S2_3_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.4</td>
											<td class="tg-0lax">ความมั่นใจว่าจะไม่ถูกเรียกรับทรัพย์สินหรือผลประโยชน์จากเจ้าหน้าที่ที่ให้บริการ</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_4" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">4.ท่านมีความเชื่อมั่นต่อ “ความไว้วางใจหรือประทับใจต่อการดำเนินงาน” ในประเด็นต่อไปนี้.อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">4.1</td>
											<td class="tg-0lax">หน่วยงานและเจ้าหน้าที่เห็นความสำคัญในความเดือดร้อนของท่าน</td>
											<td class="tg-0laa"><input type="radio" id="2411" name="S2_4_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2412" name="S2_4_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2413" name="S2_4_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2414" name="S2_4_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2415" name="S2_4_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.2</td>
											<td class="tg-0lax">หน่วยงานและเจ้าหน้าที่มีความมุ่งมั่นและเต็มใจที่จะดำเนินการให้ความช่วยเหลือท่านอย่างเต็มที่</td>
											<td class="tg-0laa"><input type="radio" id="2421" name="S2_4_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2422" name="S2_4_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2423" name="S2_4_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2424" name="S2_4_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2425" name="S2_4_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.3</td>
											<td class="tg-0lax">ความมั่นใจว่าจะไม่ได้รับความเสียหายหรือผลกระทบจากการดำเนินงานของหน่วยงาน </td>
											<td class="tg-0laa"><input type="radio" id="2431" name="S2_4_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2432" name="S2_4_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2433" name="S2_4_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2434" name="S2_4_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2435" name="S2_4_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.4</td>
											<td class="tg-0lax">การได้รับความยุติธรรมจากการดำเนินงานของหน่วยงานในกระบวนการยุติธรรม</td>
											<td class="tg-0laa"><input type="radio" id="2441" name="S2_4_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2442" name="S2_4_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2443" name="S2_4_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2444" name="S2_4_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2445" name="S2_4_4" value="1"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="row">
								<label for="25" class="col-form-label">5.ท่านคิดว่าคุณภาพการให้บริการในเรื่องใดที่หน่วยงานในกระบวนการยุติธรรมต้องมีการพัฒนา/ปรับปรุงเพื่อสร้างความเชื่อมั่นให้กับประชาชน </label>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<textarea type="text" id="25" class="form-control" rows="3" name="S2_5_text"></textarea>
								</div>
							</div>
						</div>
					</div>
					</br></br>

					<label for="wight">ส่วนที่ 3 ความเชื่อมั่นต่อการให้บริการด้านกระบวนการยุติธรรมทางอาญา</label>
					<label for="wight"><u>คำชี้แจง</u> โปรดอ่านข้อความแต่ละข้อ และใส่เครื่องหมาย √ ในช่องคำถามที่ตรงกับความรู้สึกของท่านมากที่สุด</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
								<table class="tg">
									<thead>
										<tr>
											<th class="tg-9wq8 bg" rowspan="2">ข้อ<br></th>
											<th class="tg-lboi bg" rowspan="2">ความเชื่อมั่นต่อการให้บริการด้านกระบวนการยุติธรรมทางอาญา<br></th>
											<th class="tg-c3oa bg" colspan="5">ระดับความเชื่อมั่น</th>
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
											<td class="tg-0laq bg" colspan="7">1.ท่านมีความเชื่อมั่นต่อ “กระบวนการสืบสวนสอบสวน” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">1.1</td>
											<td class="tg-0lax">การดำเนินคดีในชั้นสืบสวนสอบสวนโดยเจ้าหน้าที่รัฐดำเนินการได้ภายในเวลาที่กำหนด ไม่ล่าช้า</td>
											<td class="tg-0laa"><input type="radio" id="3111" name="S3_1_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3112" name="S3_1_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3113" name="S3_1_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3114" name="S3_1_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3115" name="S3_1_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.2</td>
											<td class="tg-0lax">การดำเนินคดีในชั้นสืบสวนสอบสวนมีความเป็นธรรม และปราศจากการเลือกปฏิบัติ (สถานะทางเศรษฐกิจ สังคม เพศ ความเชื่อ ศาสนา เชื้อชาติฯ)</td>
											<td class="tg-0laa"><input type="radio" id="3121" name="S3_1_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3122" name="S3_1_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3123" name="S3_1_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3124" name="S3_1_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3125" name="S3_1_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.3</td>
											<td class="tg-0lax">การดำเนินคดีในชั้นสืบสวนสอบสวนดำเนินการโดยปราศจากการคอรัปชั่น การรับสินบน และไม่อยู่ภายใต้อิทธิพลที่มิชอบขององค์กรอาชญากรรม</td>
											<td class="tg-0laa"><input type="radio" id="3131" name="S3_1_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3132" name="S3_1_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3133" name="S3_1_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3134" name="S3_1_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3135" name="S3_1_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.4</td>
											<td class="tg-0lax">การดำเนินคดีในชั้นสืบสวนสอบสวนดำเนินการตามกฎหมายอย่างเคร่งครัด</td>
											<td class="tg-0laa"><input type="radio" id="3141" name="S3_1_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3142" name="S3_1_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3143" name="S3_1_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3144" name="S3_1_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3145" name="S3_1_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.5</td>
											<td class="tg-0lax">การดำเนินคดีในชั้นสืบสวนสอบสวนเป็นไปตามสิทธิขั้นพื้นฐาน เช่น สิทธิในการให้ทนายความหรือผู้ซึ่งตนไว้วางใจเข้าฟังการสอบปากคำตนได้ในชั้นสอบสวน สิทธิที่จะให้การหรือไม่ก็ได้ เป็นต้น</td>
											<td class="tg-0laa"><input type="radio" id="3151" name="S3_1_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3152" name="S3_1_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3153" name="S3_1_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3154" name="S3_1_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3155" name="S3_1_4" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">2.ท่านมีความเชื่อมั่นต่อ “กระบวนการสั่งฟ้องคดี” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">2.1</td>
											<td class="tg-0lax">การสั่งฟ้องคดีสามารถดำเนินการได้ภายในเวลาที่กำหนด.ไม่ล่าช้า</td>
											<td class="tg-0laa"><input type="radio" id="3211" name="S3_2_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3212" name="S3_2_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3213" name="S3_2_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3214" name="S3_2_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3215" name="S3_2_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.2</td>
											<td class="tg-0lax">การสั่งฟ้องคดีได้ดำเนินการอย่างเป็นธรรม และปราศจากการเลือกปฏิบัติ (สถานะทางเศรษฐกิจ สังคม เพศ ความเชื่อ ศาสนา เชื้อชาติ ฯลฯ)</td>
											<td class="tg-0laa"><input type="radio" id="3221" name="S3_2_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3222" name="S3_2_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3223" name="S3_2_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3224" name="S3_2_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3225" name="S3_2_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.3</td>
											<td class="tg-0lax">การสั่งฟ้องคดีดำเนินการโดยปราศจากการคอรัปชั่น การรับสินบน และไม่อยู่ภายใต้อิทธิพลที่มิชอบ</td>
											<td class="tg-0laa"><input type="radio" id="3231" name="S3_2_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3232" name="S3_2_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3233" name="S3_2_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3234" name="S3_2_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3235" name="S3_2_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.4</td>
											<td class="tg-0lax">การสั่งฟ้องคดีมีการปฏิบัติตามกระบวนการและขั้นตอนทางกฎหมายอย่างเคร่งครัด</td>
											<td class="tg-0laa"><input type="radio" id="3241" name="S3_2_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3242" name="S3_2_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3243" name="S3_2_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3244" name="S3_2_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3245" name="S3_2_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.5</td>
											<td class="tg-0lax">การสั่งฟ้องคดีมีข้อมูลหรือพยานหลักฐานที่ชัดเจนและน่าเชื่อถือ</td>
											<td class="tg-0laa"><input type="radio" id="3251" name="S3_2_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3252" name="S3_2_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3253" name="S3_2_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3254" name="S3_2_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3255" name="S3_2_4" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">3.ท่านมีความเชื่อมั่นต่อ “กระบวนการพิจารณาคดี” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">3.1</td>
											<td class="tg-0lax">การพิจารณาคดีสามารถดำเนินการได้ภายในเวลาที่กำหนด ไม่ล่าช้า</td>
											<td class="tg-0laa"><input type="radio" id="3311" name="S3_3_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3312" name="S3_3_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3313" name="S3_3_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3314" name="S3_3_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3315" name="S3_3_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.2</td>
											<td class="tg-0lax">การพิจารณาคดีได้ดำเนินการอย่างเป็นธรรม เท่าเทียม และปราศจากการเลือกปฏิบัติ (สถานะทางเศรษฐกิจ สังคม เพศ ความเชื่อ ศาสนา เชื้อชาติฯ)</td>
											<td class="tg-0laa"><input type="radio" id="3321" name="S3_3_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3322" name="S3_3_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3323" name="S3_3_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3324" name="S3_3_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3325" name="S3_3_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.3</td>
											<td class="tg-0lax">การพิจารณาคดีดำเนินการโดยปราศจากการคอรัปชั่น การรับสินบน และไม่อยู่ภายใต้อิทธิพลที่มิชอบ</td>
											<td class="tg-0laa"><input type="radio" id="3331" name="S3_3_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3332" name="S3_3_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3333" name="S3_3_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3334" name="S3_3_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3335" name="S3_3_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.4</td>
											<td class="tg-0lax">การพิจารณาคดีมีการปฏิบัติตามกระบวนการและขั้นตอนทางกฎหมายอย่างเคร่งครัด</td>
											<td class="tg-0laa"><input type="radio" id="3341" name="S3_3_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3342" name="S3_3_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3343" name="S3_3_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3344" name="S3_3_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3345" name="S3_3_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.5</td>
											<td class="tg-0lax">ในการพิจารณาคดี ให้ความสำคัญในสิทธิของจำเลย เหยื่อ หรือผู้เสียหาย ได้รับการปฏิบัติที่เหมาะสมและมีโอกาสต่อสู้ในกระบวนการพิจารณาคดีได้อย่างเต็มที่</td>
											<td class="tg-0laa"><input type="radio" id="3351" name="S3_3_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3352" name="S3_3_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3353" name="S3_3_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3354" name="S3_3_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3355" name="S3_3_4" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">4.ท่านมีความเชื่อมั่นต่อ “กระบวนการบังคับโทษ” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">4.1</td>
											<td class="tg-0lax">การบังคับโทษดำเนินการอย่างเท่าเทียม เป็นธรรม และปราศจากการเลือกปฏิบัติ</td>
											<td class="tg-0laa"><input type="radio" id="3411" name="S3_4_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3412" name="S3_4_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3413" name="S3_4_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3414" name="S3_4_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3415" name="S3_4_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.2</td>
											<td class="tg-0lax">เจ้าหน้าที่ปราศจากการคอรัปชั่น การรับสินบน และไม่อยู่ภายใต้อิทธิพลที่มิชอบ</td>
											<td class="tg-0laa"><input type="radio" id="3421" name="S3_4_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3422" name="S3_4_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3423" name="S3_4_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3424" name="S3_4_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3425" name="S3_4_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.3</td>
											<td class="tg-0lax">การบังคับโทษมีการปฏิบัติตามกระบวนการและขั้นตอนทางกฎหมายอย่างเคร่งครัด </td>
											<td class="tg-0laa"><input type="radio" id="3431" name="S3_4_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3432" name="S3_4_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3433" name="S3_4_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3434" name="S3_4_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3435" name="S3_4_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.4</td>
											<td class="tg-0lax">ผู้กระทำผิดได้รับการพัฒนาพฤตินิสัยโดยการแก้ไขฟื้นฟูอย่างเหมาะสม เช่น การพัฒนาด้านการศึกษา การฝึกทักษะอาชีพ และการเรียนรู้ที่สอดคล้องกับความต้องการ</td>
											<td class="tg-0laa"><input type="radio" id="3441" name="S3_4_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3442" name="S3_4_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3443" name="S3_4_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3444" name="S3_4_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3445" name="S3_4_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">4.5</td>
											<td class="tg-0lax">ผู้กระทำผิดได้รับการปฏิบัติอย่างเหมาะสม สอดคล้องกับหลักศักดิ์ศรีความเป็นมนุษย์ โดยต้องไม่มีการถูกฆาตกรรม การถูกทรมาน </td>
											<td class="tg-0laa"><input type="radio" id="3451" name="S3_4_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3452" name="S3_4_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3453" name="S3_4_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3454" name="S3_4_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3455" name="S3_4_3" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">5.ท่านมีความเชื่อมั่นต่อ “กระบวนการคุ้มครองสิทธิและการอำนวยความยุติธรรมทางอาญา” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">5.1</td>
											<td class="tg-0lax">การคุ้มครองสิทธิและการอำนวยความยุติธรรมทางอาญาดำเนินการได้ภายในเวลาที่กำหนด ไม่ล่าช้า ทันต่อสถานการณ์</td>
											<td class="tg-0laa"><input type="radio" id="3511" name="S3_5_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3512" name="S3_5_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3513" name="S3_5_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3514" name="S3_5_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3515" name="S3_5_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">5.2</td>
											<td class="tg-0lax">มีช่องทางหรือการช่วยเหลือแก่จำเลย ผู้เสียหาย เหยื่อ ผู้มีส่วนได้เสีย หรือพยาน ให้ได้รับการดำเนินคดีตามกระบวนการยุติธรรมทางอาญาที่เหมาะสม เป็นธรรม และปราศจากการเลือกปฏิบัติ</td>
											<td class="tg-0laa"><input type="radio" id="3521" name="S3_5_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3522" name="S3_5_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3523" name="S3_5_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3524" name="S3_5_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3525" name="S3_5_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">5.3</td>
											<td class="tg-0lax">การคุ้มครองสิทธิและการอำนวยความยุติธรรมทางอาญาปราศจากการคอรัปชั่น การรับสินบน และไม่อยู่ภายใต้อิทธิพลที่มิชอบ </td>
											<td class="tg-0laa"><input type="radio" id="3531" name="S3_5_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3532" name="S3_5_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3533" name="S3_5_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3534" name="S3_5_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3535" name="S3_5_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">5.4</td>
											<td class="tg-0lax">การชดเชยค่าเสียหายแก่เหยื่อและผู้เสียหายในคดีอาญามีความเหมาะสมและเป็นธรรม</td>
											<td class="tg-0laa"><input type="radio" id="3541" name="S3_5_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3542" name="S3_5_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3543" name="S3_5_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3544" name="S3_5_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3545" name="S3_5_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">5.5</td>
											<td class="tg-0lax">จำเลยในคดีอาญา หากถูกจับกุมและเมื่อได้รับการพิสูจน์แล้วว่าเป็นผู้บริสุทธิ์ จะได้รับการชดเชยเยียวยาจากรัฐอย่างเหมาะสม</td>
											<td class="tg-0laa"><input type="radio" id="3551" name="S3_5_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="3552" name="S3_5_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="3553" name="S3_5_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="3554" name="S3_5_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="3555" name="S3_5_3" value="1"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="row">
								<label for="36" class="col-form-label">6.ท่านคิดว่าการให้บริการด้านกระบวนการยุติธรรมทางอาญาในเรื่องใดที่หน่วยงานในกระบวนการยุติธรรมต้องมีการพัฒนา/ปรับปรุง เพื่อสร้างความเชื่อมั่นให้กับประชาชน </label>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<textarea type="text" class="form-control" id="36" rows="3" name="S3_6_text"></textarea>
								</div>
							</div>
							</br></br>

							<div class="row">
								<div class="col-lg-1.5" style="margin-left: auto; margin-right: 0;">
									<a href="<?=site_url('/admin/qaChoiceForm/')?>" class="ui basic green button "><i class="save icon large"></i> บันทึก</a> 
								</div>
								<div class="col-lg-1.5">
									<a href="<?=site_url('/admin/qaChoiceForm/')?>" class="ui basic red button "><i class="cancel  icon large"></i> ยกเลิก</a> 
								</div>
							</div>
							</br></br></br></br>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- end #content -->

	</div>
	<!-- end page container -->



	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->

	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();

		});

		$('input[name="S1_1_1_4"]').on('change', function() {
			if ($(this).val() === '8') {
				$('input[name="S1_1_1_4_text"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_1_4_text"]').prop('readonly', true);
			}
		});

		$('input[name="S1_1_1_5"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="S1_1_1_5_text"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_1_5_text"]').prop('readonly', true);
			}
		});

		$('input[name="S1_1_1_6"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S1_1_1_6_text"]').prop('readonly', false);
				$('input[name="S1_1_1_6_1"]').attr('readonly', false);
			} else {
				$('input[name="S1_1_1_6_text"]').prop('readonly', true);
				$('input[name="S1_1_1_6_1"]').attr('readonly', true);
			}
		});
	</script>
</body>

</html>