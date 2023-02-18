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
			<h1 class="page-header" style="margin-top : 10px;">แบบสำรวจข้อมูลสถิติอาชญากรรมภาคประชาชน</h1>
			<div class="body">
				<form class="a form app form-horizontal" id="form-data" method="post">
					<label for="wight">ส่วนที่ 1 ข้อมูลเกี่ยวกับผู้ตอบแบบสอบถาม</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">
							<label for="wight">1.1 ข้อมูลบุคคลของผู้ตอบแบบสอบถาม (ผู้แทนครัวเรือน)</label>

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
									<input type="text" class="form-control" name="S1_1_1_4_TEXT" readonly />
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
									<input type="text" class="form-control" name="S1_1_1_5_TEXT" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1116" class="col-form-label">1.1.6 ท่านเห็นการปฏิบัติงานของเจ้าหน้าที่ตำรวจ หรือเจ้าหน้าที่ของหน่วยงานด้านยุติธรรม </br>เช่น เจ้าหน้าที่คุมประพฤติ เจ้าหน้าที่ราชทัณฑ์  เจ้าหน้าที่ยุติธรรมจังหวัด เจ้าหน้าที่ยุติธรรมชุมชน เป็นต้น </br>ในการปฏิบัติงานในพื้นที่ชุมชนของท่านมากน้อยเพียงใด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11161" name="S1_1_1_6" value="1"> (1) สัปดาห์ละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11162" name="S1_1_1_6" value="2"> (2) เดือนละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11163" name="S1_1_1_6" value="3"> (3) ปีละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11164" name="S1_1_1_6" value="4"> (4) มากกว่า 1 ครั้ง/ปี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11165" name="S1_1_1_6" value="5"> (5) ไม่เคยพบ
									</label>
								</div>
							</div>
							</br>

							<div class="row">
								<label for="112" class="col-form-label">1.2 สถานะของท่านในครัวเรือน (ท่านมีความเกี่ยวข้องสัมพันธ์กับเจ้าของบ้านอย่างไร)</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="1121" name="S1_1_2" value="1"> (1) เจ้าของบ้าน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1122" name="S1_1_2" value="2"> (2) คู่สมรส
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1123" name="S1_1_2" value="3"> (3) บิดามารดา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1124" name="S1_1_2" value="4"> (4) บุตร
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1125" name="S1_1_2" value="5"> (5) ปู่/ย่า/ตา/ยาย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1126" name="S1_1_2" value="6"> (6) หลาน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1127" name="S1_1_2" value="7"> (7) พี่/น้อง 
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1128" name="S1_1_2" value="8"> (8) ลุง/ป้า/น้า/อา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1129" name="S1_1_2" value="9"> (9) อื่นๆ...
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S1_1_2_TEXT" readonly />
								</div>
							</div>


							<div class="row">
								<label for="113" class="col-form-label">1.3 พื้นที่</label>
								<div class="col-lg-12">
									<div style="width: 50%; float:left;">
										<div class="row" style="margin-left: 10px; padding-top: 13px;">
											<input type="radio" id="1131" name="S1_1_3" value="1"> 
											<label class="radio-inline " style="align-self: center; style="margin-left: 10px;"">(1.3.1) กรุงเทพมหานคร</label>
										</div>
										<div class="row" style=" padding-top: 13px;">
											<label class="radio-inline " style="align-self: center;">เขต</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_1_TEXT_1" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">แขวง</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_1_TEXT_2" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">เขตสถานีตำรวจ</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_1_TEXT_3" readonly />
											</label>
										</div>
									</div>

									<div style="width: 50%; float:right;">
										<div class="row" style="margin-left: 10px;">
											<input type="radio" id="1132" name="S1_1_3" value="2"> 
											<label class="radio-inline" style="align-self: center;">(1.3.2) จังหวัดอื่นๆ (ระบุ)</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_2_TEXT_1" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">อำเภอ</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_2_TEXT_2" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">ตำบล</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_2_TEXT_3" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">เขตสถานีตำรวจ</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_2_TEXT_4" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">อบต./ท.ตำบล/ท.เมือง/ท.นคร</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" name="S1_1_3_2_TEXT_5" readonly />
											</label>
										</div>
									</div>
									
								</div>
							</div>

							<div class="row">
								<label for="114" class="col-form-label">1.4 ลักษณะบริเวณที่อยู่อาศัย</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-8" style="margin-left: 10px;">
										<input type="radio" id="1141" name="S1_1_4" value="1"> (1) เขตที่พักอาศัยทั่วไป เช่น หมู่บ้านจัดสรร บ้านเดี่ยว
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1142" name="S1_1_4" value="2"> (2) เขตธุรกิจ เช่น เขตที่มีบริษัท ห้าง ร้าน อยู่รวมกันเป็นบริเวณกว้าง
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1143" name="S1_1_4" value="3"> (3) เขตชุมชนแออัด หรือชุมชนที่มีลักษณะบ้านเรือนหนาแน่น และประชากรอยู่อย่างแออัด
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1144" name="S1_1_4" value="4"> (4) เขตอุตสาหกรรม หรือชุมชนที่อยู่ในบริเวณที่มีโรงงานอุตสาหกรรมหรือนิคมอุตสาหกรรมตั้งอยู่
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1145" name="S1_1_4" value="5"> (5) เขตเกษตรกรรม หรือชุมชนที่อยู่ในบริเวณพื้นที่เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1146" name="S1_1_4" value="6"> (6) อื่นๆ...
									</label>

								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S1_1_4_TEXT" readonly />
								</div>
							</div>
		
						</div>
					</div>
					</br></br>
					<label for="wight">ส่วนที่ 2 ข้อมูลลสมาชิกในครัวเรือน</label>
					</br>
					<label for="wight">จำนวนสมาชิกในครัวเรือนที่อยู่อาศัยในห้วง พ.ศ. 2565 มากกว่า 6 เดือนขึ้นไป รวมทั้งสิ้น</label> 
					<label class="radio-inline col-form-label  col-lg-1">
						<input type="text" class="form-control" name="S2_TEXT" />
					</label>
					<label for="wight">คน</label>
					</br>
					<label for="wight">(นับรวมผู้ตอบและสมาชิกทุกคน (ทุกช่วงอายุ) ในรอบ 1 ปีที่ผ่านมา)</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
							<table class="tg">
									<thead>
										<tr>
											<th>ลำดับที่</br>สมาชิก</br>ในครัวเรือน</th>
											<th>เพศ</th>
											<th>อายุ</th>
											<th>การตกเป็นเหยื่อ</br>อาชญากรรม</br>(1 ม.ค. – 31 ธ.ค. 65)</th>
											<th><u>หมายเหตุ</u></br>(กรณีไม่ระบุคำตอบ)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td >1. (ตัวผู้ตอบ)</td>
											<td ><input type="radio" id="2111" name="S2_1_1" value="1"> ชาย <input type="radio" id="2112" name="S2_1_1" value="2"> หญิง <input type="radio" id="2113" name="S2_1_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_1_2_TEXT" /></td>
											<td ><input type="radio" id="2131" name="S2_1_3" value="1"> เคย <input type="radio" id="2132" name="S2_1_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_1_4_TEXT" /></td>
										</tr>
										<tr>
											<td >2.</td>
											<td ><input type="radio" id="2211" name="S2_2_1" value="1"> ชาย <input type="radio" id="2212" name="S2_2_1" value="2"> หญิง <input type="radio" id="2213" name="S2_2_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_2_2_TEXT" /></td>
											<td ><input type="radio" id="2231" name="S2_2_3" value="1"> เคย <input type="radio" id="2232" name="S2_2_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_2_4_TEXT" /></td>
										</tr>
										<tr>
											<td >3.</td>
											<td ><input type="radio" id="2311" name="S2_3_1" value="1"> ชาย <input type="radio" id="2312" name="S2_3_1" value="2"> หญิง <input type="radio" id="2313" name="S2_3_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_3_2_TEXT" /></td>
											<td ><input type="radio" id="2331" name="S2_3_3" value="1"> เคย <input type="radio" id="2332" name="S2_3_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_3_4_TEXT" /></td>
										</tr>
										<tr>
											<td >4.</td>
											<td ><input type="radio" id="2411" name="S2_4_1" value="1"> ชาย <input type="radio" id="2412" name="S2_4_1" value="2"> หญิง <input type="radio" id="2413" name="S2_4_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_4_2_TEXT" /></td>
											<td ><input type="radio" id="2431" name="S2_4_3" value="1"> เคย <input type="radio" id="2432" name="S2_4_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_4_4_TEXT" /></td>
										</tr>
										<tr>
											<td >5.</td>
											<td ><input type="radio" id="2511" name="S2_5_1" value="1"> ชาย <input type="radio" id="2512" name="S2_5_1" value="2"> หญิง <input type="radio" id="2513" name="S2_5_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_5_2_TEXT" /></td>
											<td ><input type="radio" id="2531" name="S2_5_3" value="1"> เคย <input type="radio" id="2532" name="S2_5_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_5_4_TEXT" /></td>
										</tr>
										<tr>
											<td >6.</td>
											<td ><input type="radio" id="2611" name="S2_6_1" value="1"> ชาย <input type="radio" id="2612" name="S2_6_1" value="2"> หญิง <input type="radio" id="2613" name="S2_6_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_6_2_TEXT" /></td>
											<td ><input type="radio" id="2631" name="S2_6_3" value="1"> เคย <input type="radio" id="2632" name="S2_6_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_6_4_TEXT" /></td>
										</tr>
										<tr>
											<td >7.</td>
											<td ><input type="radio" id="2711" name="S2_7_1" value="1"> ชาย <input type="radio" id="2712" name="S2_7_1" value="2"> หญิง <input type="radio" id="2713" name="S2_7_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_7_2_TEXT" /></td>
											<td ><input type="radio" id="2731" name="S2_7_3" value="1"> เคย <input type="radio" id="2732" name="S2_7_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_7_4_TEXT" /></td>
										</tr>
										<tr>
											<td >8.</td>
											<td ><input type="radio" id="2811" name="S2_8_1" value="1"> ชาย <input type="radio" id="2812" name="S2_8_1" value="2"> หญิง <input type="radio" id="2813" name="S2_8_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_8_2_TEXT" /></td>
											<td ><input type="radio" id="2831" name="S2_8_3" value="1"> เคย <input type="radio" id="2832" name="S2_8_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_8_4_TEXT" /></td>
										</tr>
										<tr>
											<td >9.</td>
											<td ><input type="radio" id="2911" name="S2_9_1" value="1"> ชาย <input type="radio" id="2912" name="S2_9_1" value="2"> หญิง <input type="radio" id="2913" name="S2_9_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_9_2_TEXT" /></td>
											<td ><input type="radio" id="2931" name="S2_9_3" value="1"> เคย <input type="radio" id="2932" name="S2_9_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_9_4_TEXT" /></td>
										</tr>
										<tr>
											<td >10.</td>
											<td ><input type="radio" id="210_11" name="S2_10_1" value="1"> ชาย <input type="radio" id="210_12" name="S2_10_1" value="2"> หญิง <input type="radio" id="210_13" name="S2_10_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_10_2_TEXT" /></td>
											<td ><input type="radio" id="210_31" name="S2_10_3" value="1"> เคย <input type="radio" id="210_32" name="S2_10_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_10_4_TEXT" /></td>
										</tr>
										<tr>
											<td >11.</td>
											<td ><input type="radio" id="211_11" name="S2_11_1" value="1"> ชาย <input type="radio" id="211_12" name="S2_11_1" value="2"> หญิง <input type="radio" id="211_13" name="S2_11_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_11_2_TEXT" /></td>
											<td ><input type="radio" id="211_31" name="S2_11_3" value="1"> เคย <input type="radio" id="211_32" name="S2_11_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_11_4_TEXT" /></td>
										</tr>
										<tr>
											<td >12.</td>
											<td ><input type="radio" id="212_11" name="S2_12_1" value="1"> ชาย <input type="radio" id="212_12" name="S2_12_1" value="2"> หญิง <input type="radio" id="212_13" name="S2_12_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_12_2_TEXT" /></td>
											<td ><input type="radio" id="212_31" name="S2_12_3" value="1"> เคย <input type="radio" id="212_32" name="S2_12_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_12_4_TEXT" /></td>
										</tr>
										<tr>
											<td >13.</td>
											<td ><input type="radio" id="213_11" name="S2_13_1" value="1"> ชาย <input type="radio" id="213_12" name="S2_13_1" value="2"> หญิง <input type="radio" id="213_13" name="S2_13_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_13_2_TEXT" /></td>
											<td ><input type="radio" id="213_31" name="S2_13_3" value="1"> เคย <input type="radio" id="213_32" name="S2_13_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_13_4_TEXT" /></td>
										</tr>
										<tr>
											<td >14.</td>
											<td ><input type="radio" id="21411" name="S2_14_1" value="1"> ชาย <input type="radio" id="21412" name="S2_14_1" value="2"> หญิง <input type="radio" id="21413" name="S2_14_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_14_2_TEXT" /></td>
											<td ><input type="radio" id="21431" name="S2_14_3" value="1"> เคย <input type="radio" id="21432" name="S2_14_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_14_4_TEXT" /></td>
										</tr>
										<tr>
											<td >15.</td>
											<td ><input type="radio" id="21511" name="S2_15_1" value="1"> ชาย <input type="radio" id="21512" name="S2_15_1" value="2"> หญิง <input type="radio" id="21513" name="S2_15_1" value="3"> ทางเลือก</td>
											<td ><input type="text" class="form-control" name="S2_15_2_TEXT" /></td>
											<td ><input type="radio" id="21531" name="S2_15_3" value="1"> เคย <input type="radio" id="21532" name="S2_15_3" value="2"> ไม่เคย</td>
											<td ><input type="text" class="form-control" name="S2_15_4_TEXT" /></td>
										</tr>
									</tbody>
							</table>
							</div>
							</br>
							<label for="wight">ส่วนที่ 3 ข้อมูลทางประชากรศาสตร์ (ผู้ตกเป็นเหยื่อ)</label>
							</br>

							<div class="row">
								<label for="31" class="col-form-label">3.1 เพศ &nbsp</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="311" name="S3_1" value="1"> (1) ชาย
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="312" name="S3_1" value="2"> (2) หญิง
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="313" name="S3_1" value="3"> (3) เพศทางเลือก
								</label>
							</div>

							<div class="row">
								<label for="32" class="col-form-label">3.2 อายุ</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="S3_2" />
								</div>
								<div class="col-form-label inputTextFix">
									ปี (เต็มปีบริบูรณ์)
								</div>
							</div>

							<div class="row">
								<label for="33" class="col-form-label">3.3 รายได้</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="331" name="S3_3" value="1"> (1) ต่ำกว่า 15,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="332" name="S3_3" value="2"> (2) 15,001-25,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="333" name="S3_3" value="3"> (3) 25,001-35,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="334" name="S3_3" value="4"> (4) 35,001-45,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="335" name="S3_3" value="5"> (5) 45,001-55,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="336" name="S3_3" value="6"> (6) 55,001-65,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="337" name="S3_3" value="7"> (7) 65,001-75,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="338" name="S3_3" value="8"> (8) มากกว่า 75,000 บาท
									</label>
								</div>
							</div>

							<div class="row">
								<label for="34" class="col-form-label">3.4 อาชีพ</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="341" name="S3_4" value="1"> (1) ข้าราชการ พนักงานรัฐวิสาหกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="342" name="S3_4" value="2"> (2) พนักงานเอกชน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="343" name="S3_4" value="3"> (3) นักเรียน/นักศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="344" name="S3_4" value="4"> (4) รับจ้างทั่วไป
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="345" name="S3_4" value="5"> (5) เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="346" name="S3_4" value="6"> (6) ประกอบธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="347" name="S3_4" value="7"> (7) ไม่ได้ประกอบอาชีพ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="348" name="S3_4" value="8"> (8) อื่น ๆ...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S3_4_TEXT" readonly />
								</div>
							</div>

							<div class="row">
								<label for="35" class="col-form-label">3.5 การศึกษาระดับสูงสุด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="351" name="S3_5" value="1"> (1) ไม่เคยเข้ารับการศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="352" name="S3_5" value="2"> (2) การศึกษานอกระบบ (กศน.)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="353" name="S3_5" value="3"> (3) ประถมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="354" name="S3_5" value="4"> (4) มัธยมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="355" name="S3_5" value="5"> (5) ปวช.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="356" name="S3_5" value="6"> (6) ปวส.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="357" name="S3_5" value="7"> (7) ปริญญาตรี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="358" name="S3_5" value="8"> (8) ปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="359" name="S3_5" value="9"> (9) สูงกว่าปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="3510" name="S3_5" value="10"> (10) การศึกษาในรูปแบบอื่น...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S3_5_TEXT" readonly />
								</div>
							</div>

							<div class="row">
								<label for="36" class="col-form-label">3.6 ท่านเห็นการปฏิบัติงานของเจ้าหน้าที่ตำรวจ หรือเจ้าหน้าที่ของหน่วยงานด้านยุติธรรม </br>เช่น เจ้าหน้าที่คุมประพฤติ เจ้าหน้าที่ราชทัณฑ์  เจ้าหน้าที่ยุติธรรมจังหวัด เจ้าหน้าที่ยุติธรรมชุมชน เป็นต้น </br>ในการปฏิบัติงานในพื้นที่ชุมชนของท่านมากน้อยเพียงใด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="361" name="S3_6" value="1"> (1) สัปดาห์ละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="362" name="S3_6" value="2"> (2) เดือนละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="363" name="S3_6" value="3"> (3) ปีละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="364" name="S3_6" value="4"> (4) มากกว่า 1 ครั้ง/ปี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="365" name="S3_6" value="5"> (5) ไม่เคยพบ
									</label>
								</div>
							</div>

							</br>
							<label for="wight">ส่วนที่ 4 รายละเอียดผู้ประสบเหตุหรือตกเป็นเหยื่ออาชญากรรม</label>
							</br>

							<div class="row">
								<label for="41" class="col-form-label">4.1 ขณะเกิดเหตุผู้ประสบเหตุหรือเหยื่อจำหน้าผู้ก่อเหตุหรือรูปพรรณสัณฐานของผู้ก่อเหตุได้หรือไม่</label>
								<div class="col-lg-12">
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="411" name="S4_1" value="2" >จำได้ ระบุ
										</label>
										<label class="radio-inline col-form-label  col-lg-8">
											<input type="text" class="form-control" name="S4_1_TEXT" readonly />
										</label>
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="412" name="S4_1" value="2"> (2) จำไม่ได้
									</label>
								</div>
							</div>

							<div class="row">
								<label for="42" class="col-form-label">4.2 ความสัมพันธ์ระหว่างเหยื่อกับผู้ก่อเหตุ</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="421" name="S4_2" value="1"> (1) บิดา/มารดา
									</label>
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="422" name="S4_2" value="2"> (2) ผู้ปกครอง
									</label>
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="423" name="S4_2" value="3"> (3) สามี
									</label>
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="424" name="S4_2" value="4"> (4) ภรรยา
									</label>
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="425" name="S4_2" value="5"> (5) คู่ชีวิตรูปแบบอื่น
									</label>

									<label class=" col-form-label ">
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="426" name="S4_2" value="6" > (6) ความสัมพันธ์อื่นๆ (ระบุ)
										</label>
										<label class="radio-inline col-form-label  col-lg-6">
											<input type="text" class="form-control" name="S4_2_TEXT" readonly />
										</label>
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="427" name="S4_2" value="7"> (7) ไม่รู้จัก/ไม่เกี่ยวข้อง
									</label>
								</div>
								<p style="margin-left: 10px;">หมายเหตุ : สามี/ภรรยา หมายความรวมถึง คู่สมรสที่จดทะเบียนและไม่จดทะเบียนสมรส</p>
							</div>

							<div class="row">
								<label for="43" class="col-form-label">4.3 มีความเสียหายต่อชีวิต ร่างกาย หรือทรัพย์สินหรือไม่</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="431" name="S4_3" value="1"> (1) มี
									</label>
									<label class="radio-inline col-form-label  col-lg-2">
										<input type="radio" id="432" name="S4_3" value="2"> (2) ไม่มี
									</label>
									
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="431" class="col-form-label">4.3.1 ความเสียหายต่อชีวิต ร่างกาย</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="4311" name="S4_3_1" value="1"> (1) ไม่มี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4312" name="S4_3_1" value="2"> (2) ไม่ได้รับบาดเจ็บ
									</label>
									<label class="radio-inline col-form-label  col-lg-4">
										<input type="radio" id="4313" name="S4_3_1" value="3"> (3) ได้รับบาดเจ็บเล็กน้อย ไม่ถึงกับต้องรักษาตัว
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4314" name="S4_3_1" value="4"> (4) รักษาตัวไม่เกิน 7 วัน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4315" name="S4_3_1" value="5"> (5) รักษาตัว 8-20 วัน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4316" name="S4_3_1" value="6"> (6) รักษาตัวเกินกว่า 20 วัน (สาหัส)
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4317" name="S4_3_1" value="7"> (7) เสียโฉม พิการ หรือทุพลภาพเป็นกรถาวร 
									</label>
									<label class="radio-inline col-form-label  col-lg-12	">
										<input type="radio" id="4318" name="S4_3_1" value="8"> (8) ได้รับอันตรายทางจิตใจจนถึงขั้นเข้ารับการบำบัดทางจิต
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4319" name="S4_3_1" value="9"> (9) ได้รับอันตรายต่อสุขภาพ เจ็บป่วย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="43110" name="S4_3_1" value="10"> (10) เสียชีวิต
									</label>
									
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="432" class="col-form-label">4.3.2 ความเสียหายทรัพย์ถูกประทุษร้าย</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4321" name="S4_3_2" value="1"> (1) ไม่มี
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4322" name="S4_3_2" value="2" > (2) มี เป็นมูลค่า
										</label>
										<label class="radio-inline col-form-label  col-lg-6">
											<input type="text" class="form-control" name="S4_3_2_TEXT" readonly />
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

									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4331" name="S4_3_3" value="1" > (1) ค่ารักษาพยาบาล จำนวน
										</label>
										<label class="radio-inline col-form-label  col-lg-5">
											<input type="text" class="form-control" name="S4_3_3_1_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4332" name="S4_3_3" value="2" > (2) ต้องหยุดงานหรือขาดรายได้ (จำนวนวันที่หยุดงาน x รายได้เฉลี่ยโดยประมาณ) 
										</label>
										<label class="radio-inline col-form-label  col-lg-3">
											<input type="text" class="form-control" name="S4_3_3_2_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4333" name="S4_3_3" value="3" > (3) ค่าใช้จ่ายในการติดต่อหน่วยงานราชการหรือหน่วยงานกระบวนการยุติธรรม (เช่น ตำรวจ อัยการ ศาล ศูนย์ดำรงธรรม ฯลฯ)  จำนวน
										</label>
										<label class="radio-inline col-form-label  col-lg-2">
											<input type="text" class="form-control" name="S4_3_3_3_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4334" name="S4_3_3" value="4" > (4) ค่าใช้จ่ายในการติดต่อทนายความ จำนวน
										</label>
										<label class="radio-inline col-form-label  col-lg-4">
											<input type="text" class="form-control" name="S4_3_3_4_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4335" name="S4_3_3" value="5" > (5) ค่าใช้จ่ายในการติดต่อหน่วยงานเอกชน (เช่น บริษัทประกันภัย NGOs) จำนวน
										</label>
										<label class="radio-inline col-form-label  col-lg-3">
											<input type="text" class="form-control" name="S4_3_3_5_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4336" name="S4_3_3" value="6" > (6) ค่าใช้จ่ายในการแสวงหาพยานหลักฐาน จำนวน
										</label>
										<label class="radio-inline col-form-label  col-lg-4">
											<input type="text" class="form-control" name="S4_3_3_6_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="col-form-label" >
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="4337" name="S4_3_3" value="7" > (7) ค่าใช้จ่ายด้านค่าเดินทาง ที่พักและอื่น ๆในการติดต่อทางคดี จำนวน
										</label>
										<label class="radio-inline col-form-label  col-lg-3">
											<input type="text" class="form-control" name="S4_3_3_7_TEXT" readonly />
										</label>
										<label class="radio-inline" style="align-self: center;"> 
											บาท
										</label>
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4338" name="S4_3_3" value="8"> (8) ไม่มีความสูญเสีย/ค่าเสียหายจากมูลค่าที่เกิดขึ้น
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
										<input type="radio" id="4411" name="S4_4_1" value="1"> (1) ฆ่า
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4412" name="S4_4_1" value="2"> (2) พยายามฆ่า
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4413" name="S4_4_1" value="3"> (3) ก่อการร้าย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4414" name="S4_4_1" value="4"> (4) วางเพลิง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4415" name="S4_4_1" value="5"> (5) วางระเบิด
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4416" name="S4_4_1" value="6"> (6) อุบัติเหตุจราจร
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4417" name="S4_4_1" value="7"> (7) อุบัติเหตุอื่น ๆ
									</label>
									<label class="radio-inline col-form-label  col-lg-3	">
										<input type="radio" id="4418" name="S4_4_1" value="8"> (8) ชุลมุนต่อสู้
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="4419" name="S4_4_1" value="9"> (9) ทะเลาะวิวาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44110" name="S4_4_1" value="10"> (10) ความรุนแรงในครอบครัว
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44111" name="S4_4_1" value="11"> (11) ทำแท้งผิดกฎหมาย
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="44112" name="S4_4_1" value="12"> (12) ข่มขู่คุกคามว่าจะทำอันตรายต่อชีวิตร่างกาย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44113" name="S4_4_1" value="13"> (13) ข่มขู่คุกคามให้ตกใจกลัว
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44114" name="S4_4_1" value="14"> (14) ลักพาตัว
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44115" name="S4_4_1" value="15"> (15) หน่วงเหนี่ยวกักขัง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44116" name="S4_4_1" value="16"> (16) เอาคนเป็นทาส
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44117" name="S4_4_1" value="17"> (17) ความผิดต่อเสรีภาพ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44118" name="S4_4_1" value="18"> (18) ปลอมปนอาหาร
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="44119" name="S4_4_1" value="19"> (19) ปล่อยสารพิษ
									</label>
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="442" class="col-form-label">4.4.2 ความผิดต่อชีวิตร่างกาย</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-6" style="margin-left: 10px;">
										<input type="radio" id="4421" name="S4_4_2" value="1"> (1) ปล้น จี้ ชิงทรัพย์ในที่สาธารณะ
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4422" name="S4_4_2" value="2"> (2) ปล้น จี้ ชิงทรัพย์ในพื้นที่ส่วนบุคคล
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4423" name="S4_4_2" value="3"> (3) ปล้นชิงสินค้า
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4424" name="S4_4_2" value="4"> (4) ปล้นชิงรถยนต์/รถจักรยานยนต์
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4425" name="S4_4_2" value="5"> (5) ปล้นชิงโคกระบือหรือเครื่องมือเกษตร
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4426" name="S4_4_2" value="6"> (6) วิ่งราวทรัพย์
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4427" name="S4_4_2" value="7"> (7) ล้วงกระเป๋า
									</label>
									<label class="radio-inline col-form-label  col-lg-6	">
										<input type="radio" id="4428" name="S4_4_2" value="8"> (8) ลักทรัพย์สถานประกอบการ
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4429" name="S4_4_2" value="9"> (9) ลักพาหนะ (รวมถึงทรัพย์สินในพาหนะ)
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="44210" name="S4_4_2" value="10"> (10) ลักโคกระบือหรือเครื่องมือการเกษตร
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="44211" name="S4_4_2" value="11"> (11) ลักทรัพย์สินในบ้าน/ที่พักอาศัย
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="44212" name="S4_4_2" value="12"> (12) ลักทรัพย์รูปแบบอื่น ๆ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="44213" name="S4_4_2" value="13"> (13) ข่มขู่ว่าจะเปิดเผยความลับ เช่น แบล็คเมล์ ภาพลับ/คลิปลับ เป็นต้น
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="44214" name="S4_4_2" value="14"> (14) กรรโชกทรัพย์ (ขู่เข็ญว่าจะทำอันตรายต่อชีวิต/ร่างกายทรัพย์สินเพื่อแลกกับการเอาทรัพย์)
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="44215" name="S4_4_2" value="15"> (15) ทำให้เสียทรัพย์ (เช่น ทำลายทรัพย์สิน ยานพาหนะ)
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="44216" name="S4_4_2" value="16"> (16) บุกรุกทรัพย์สิน เช่น บ้าน ที่ดิน
									</label>
								</div>
							</div>


							<div class="row" style="margin-left: 10px;">
								<label for="443" class="col-form-label">4.4.3 ความผิดทางเพศ</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-4" style="margin-left: 10px;">
										<input type="radio" id="4431" name="S4_4_3" value="1"> (1) ข่มขืนโดยใช้กำลังบังคับ
									</label>
									<label class="radio-inline col-form-label  col-lg-4">
										<input type="radio" id="4432" name="S4_4_3" value="2"> (2) ข่มขืนขณะมึนเมา
									</label>
									<label class="radio-inline col-form-label  col-lg-4">
										<input type="radio" id="4433" name="S4_4_3" value="3"> (3) ถูกรุมโทรม
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4434" name="S4_4_3" value="4"> (4) ทารุณทางเพศ
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4435" name="S4_4_3" value="5"> (5) กระทำอนาจาร (มีการแตะเนื้อต้องตัว)
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4436" name="S4_4_3" value="6"> (6) พูดจาลวนลาม/ลอบแอบมอง
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4437" name="S4_4_3" value="7"> (7) พูดจาลวนลาม/ลอบแอบมอง (ในสถานที่ทำงาน)
									</label>
									<label class="radio-inline col-form-label  col-lg-6	">
										<input type="radio" id="4438" name="S4_4_3" value="8"> (8) สะกดรอย/ลอบติดตาม
									</label>
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="444" class="col-form-label">4.4.4 ความผิดฉ้อโกงการหลอกลวง</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="radio" id="4441" name="S4_4_4" value="1"> (1) แอบอ้างใช้ข้อมูล/เอกสารส่วนตัว
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4442" name="S4_4_4" value="2"> (2) ถูกหลอกลวงด้วยการใช้เงินปลอม
									</label>
									<label class="radio-inline col-form-label  col-lg-6">
										<input type="radio" id="4443" name="S4_4_4" value="3"> (3) แชร์ลูกโซ่
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4444" name="S4_4_4" value="4"> (4) หลอกลวงจัดหางานหรือให้ไปทำงานในประเทศหรือต่างประเทศ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4445" name="S4_4_4" value="5"> (5) หลอกลวงด้วยกลฉ้อฉลให้โอนเงินเข้าบัญชีธนาคารคนร้าย
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4446" name="S4_4_4" value="6"> (6) หลอกลวงให้สูญเสียทรัพย์สินให้คนร้าย โดยมีการแสดงเอกสารเท็จให้หลงเชื่อ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4447" name="S4_4_4" value="7"> (7) หลอกขายสินค้าปลอม
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4448" name="S4_4_4" value="8"> (8) หลอกประกาศขายสินค้าแต่ไม่จัดส่งสินค้าให้ หรือส่งให้แต่ไม่ตรงกับที่โฆษณา
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4449" name="S4_4_4" value="9"> (9) หลอกลวงให้สูญเสียทรัพย์สินให้คนร้ายด้วยวิธีการอื่น ๆ
									</label>
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="445" class="col-form-label">4.4.5 ความผิดเกี่ยวกับคอมพิวเตอร์</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="radio" id="4451" name="S4_4_5" value="1"> (1) ถูกลักลอบเข้าสู่ระบบคอมพิวเตอร์
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4452" name="S4_4_5" value="2"> (2) ถูกล่วงรู้พาสเวิร์ดสำหรับระบบคอมพิวเตอร์ และนำไปก่อให้เกิดความเสียหาย
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4453" name="S4_4_5" value="3"> (3) ถูกล้วงข้อมูลในระบบคอมพิวเตอร์
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4454" name="S4_4_5" value="4"> (4) ตกเป็นเหยื่ออาชญากรรมทางคอมพิวเตอร์กรณีอื่น ๆ 
									</label>
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="446" class="col-form-label">4.4.6 ความผิดรูปแบบอื่น</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="radio" id="4461" name="S4_4_6" value="1"> (1) ถูกเรียกสินบนโดยเจ้าหน้าที่ของรัฐ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4462" name="S4_4_6" value="2"> (2) ถูกเรียกรับสินบนโดยภาคธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4463" name="S4_4_6" value="3"> (3) ได้รับความเสียหายจากเจ้าหน้าที่รัฐที่ใช้อำนาจโดยมิชอบ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4464" name="S4_4_6" value="4"> (4) ตกเป็นเหยื่อในกระบวนการยุติธรรม เช่น ถูกคุกคามหรือไม่ได้รับความเป็นธรรมจากคดีอาญา (แพะรับบาป)
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4465" name="S4_4_6" value="5"> (5) ถูกเลือกปฏิบัติ โดยมิชอบ อันเนื่องมาจาก เพศ ความพิการ ศาสนา และเชื้อชาติ เป็นต้น
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4466" name="S4_4_6" value="6"> (6) ถูกดูหมิ่น หมิ่นประมาท หรือถูกเหยียดหยามเนื่องจากความแตกต่างในเรื่องเพศ เชื้อชาติ ศาสนา ความพิการ ชนกลุ่มน้อย
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4467" name="S4_4_6" value="7"> (7) ได้รับอันตรายจากการปล่อยมลภาวะตามเขตที่พักอาศัย
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="4468" name="S4_4_6" value="8"> (8) ถูกล่วงละเมิดความเป็นส่วนตัว
									</label>
								</div>
							</div>

							<div class="row">
								<label for="45" class="col-form-label">4.5 พฤติกรรมโดยย่อ (โดยสังเขป)</label>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<textarea type="text" class="form-control" id="45" rows="3" name="S4_5_TEXT"></textarea>
								</div>
							</div>

							<div class="row">
								<label for="46" class="col-form-label">4.6 การติดต่อและบริการจากหน่วยงานในกระบวนการยุติธรรม</label>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="461" class="col-form-label">
									<input type="radio" id="4611" name="S4_6_1" value="1"> 4.6.1 มีการแจ้งต่อเจ้าหน้าที่
								</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="radio" id="46111" name="S4_6_1_1" value="1"> (1) แจ้งต่อเจ้าหน้าที่ตำรวจ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="46112" name="S4_6_1_1" value="2"> (2) แจ้งต่อผู้แทนชุมชน เช่น ผู้ใหญ่บ้าน กำนัน ผู้นำชุมชน หรือบุคคลที่ตนนับถือ แต่ไม่ได้แจ้งต่อเจ้าหน้าที่ตำรวจ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="46113" name="S4_6_1_1" value="3"> (3) แจ้งต่อเจ้าหน้าที่หรือหน่วยงานภาครัฐอื่น ที่ไม่ใช่หน่วยงานตำรวจ เช่น สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์, ยุติธรรมชุมชน, ยุติธรรมจังหวัดศูนย์ดํารงธรรม, ศูนย์ดํารงธรรม, ศูนย์บริการข้อมูลภาครัฐเพื่อประชาชน สายด่วน 1111 หรือศูนย์รับเรื่องราวร้องทุกข์
									</label>
									<label class="col-form-label col-lg-12" style="margin-left: -5px;">
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="46114" name="S4_6_1_1" value="4" > (4) อื่นๆ  โปรดระบุ
										</label>
										<label class="radio-inline col-form-label  col-lg-8">
											<input type="text" class="form-control" name="S4_6_1_1_TEXT" readonly />
										</label>
									</label>
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="461" class="col-form-label"> 
									<input type="radio" id="4612" name="S4_6_2" value="1"> 4.6.2 มีการแจ้งต่อเจ้าหน้าที่
								</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="46211" name="S4_6_2_1" value="1"> (1) แจ้งต่อเจ้าหน้าที่ตำรวจ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46212" name="S4_6_2_1" value="2"> (2) แจ้งต่อผู้แทนชุมชน เช่น ผู้ใหญ่บ้าน กำนัน ผู้นำชุมชน หรือบุคคลที่ตนนับถือ แต่ไม่ได้แจ้งต่อเจ้าหน้าที่ตำรวจ
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46213" name="S4_6_2_1" value="3"> (3) แจ้งต่อเจ้าหน้าที่หรือหน่วยงานภาครัฐอื่น ที่ไม่ใช่หน่วยงานตำรวจ เช่น สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์, ยุติธรรมชุมชน, ยุติธรรมจังหวัดศูนย์ดํารงธรรม, ศูนย์ดํารงธรรม, ศูนย์บริการข้อมูลภาครัฐเพื่อประชาชน สายด่วน 1111 หรือศูนย์รับเรื่องราวร้องทุกข์
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46214" name="S4_6_2_1" value="4"> (4) ได้แจ้งเหตุต่อผู้มีหน้าที่รับผิดชอบที่เกี่ยวข้องแล้ว เช่น ฝ่ายรักษาความปลอดภัย หัวหน้างาน
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46215" name="S4_6_2_1" value="5"> (5) มีเจ้าหน้าที่หรือบุคคลอื่นมาให้การช่วยเหลือไกล่เกลี่ยสามารถตกลงกับผู้กระทำผิดได้
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46216" name="S4_6_2_1" value="6"> (6) ถูกข่มขู่ จากผู้กระทำผิดหรือผู้เกี่ยวข้อง
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46217" name="S4_6_2_1" value="7"> (7) กลัวว่าจะถูกแก้แค้น หรือถูกทำร้ายจากผู้กระทำผิดหรือผู้เกี่ยวข้อง
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46218" name="S4_6_2_1" value="8"> (8) เป็นคนกันเอง/สนิทสนมคุ้นเคยกับผู้กระทำผิด
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="46219" name="S4_6_2_1" value="9"> (9) เป็นเหตุการณ์ที่น่าอับอาย กลัวว่าจะเสื่อมเสียชื่อเสียง
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462110" name="S4_6_2_1" value="10"> (10) สงสาร/เห็นใจผู้กระทำผิด (เนื่องจากผู้กระทำผิดเป็นเด็ก/พิการ/ยากจน เป็นต้น)
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462111" name="S4_6_2_1" value="11"> (11) ยุ่งยาก ไม่อยากเป็นคดีความ ไม่อยากขึ้นโรงขึ้นศาล
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462112" name="S4_6_2_1" value="12"> (12) ไม่สะดวก ไม่มีเวลาแจ้งเหตุกับเจ้าหน้าที่
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462113" name="S4_6_2_1" value="13"> (13) ขาดพยานหลักฐาน
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462114" name="S4_6_2_1" value="14"> (14) คิดว่าเจ้าหน้าที่ตำรวจไม่สามารถติดตามผู้กระทำผิดมาดำเนินคดีได้
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462115" name="S4_6_2_1" value="15"> (15) มีความรู้สึกไม่ดีกับเจ้าหน้าที่ตำรวจหรือไม่ไว้วางใจเจ้าหน้าที่
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462116" name="S4_6_2_1" value="16"> (16) ไม่เชื่อมั่นในประสิทธิภาพการปฏิบัติงานของเจ้าหน้าที่
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="checkbox" id="462117" name="S4_6_2_1" value="17"> (17) ผู้กระทำผิดเป็นเจ้าหน้าที่รัฐหรือผู้มีอิทธิพล (รวมถึงลูกหลาน/ญาติ/คนใกล้ชิด)
									</label>
									<label class="col-form-label col-lg-12" style="margin-left: -5px;">
										<label class="radio-inline" style="align-self: center;"> 
											<input type="checkbox" id="462118" name="S4_6_2_1" value="18" > (18) อื่นๆ (ระบุ)
										</label>
										<label class="radio-inline col-form-label  col-lg-8">
											<input type="text" class="form-control" name="S4_6_2_1_TEXT" readonly />
										</label>
									</label>
								</div>
							</div>

							<div class="row">
								<label for="47" class="col-form-label">4.7 (เฉพาะกรณีที่แจ้งต่อเจ้าหน้าที่) ท่านมีความพึงพอใจต่อการดำเนินงานของเจ้าหน้าที่ต่อการรับแจ้งเหตุของท่านมากน้อยเพียงใด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="475" name="S4_7" value="5"> (5) เชื่อมั่นมาก
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="474" name="S4_7" value="4"> (4) เชื่อมั่นค่อนข้างมาก
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="473" name="S4_7" value="3"> (3) เชื่อมั่นปานกลาง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="472" name="S4_7" value="2"> (2) เชื่อมั่นค่อนข้างน้อย 
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="471" name="S4_7" value="1"> (1) เชื่อมั่นน้อย
									</label>

									<label class=" col-form-label ">
										<label class="radio-inline" style="align-self: center;"> 
											<input type="radio" id="470" name="S4_7" value="99" > (0) ไม่เชื่อมั่นเลย
										</label>
									</label>

									<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุเหตุผล
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="S4_7_TEXT" readonly />
								</div>
							</div>
									
								</div>
							</div>

							</br></br>
							<div class="panel panel-inverse overflow-hidden">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <i class="fa fa-plus-circle pull-right"></i> 
                                            คำอธิบายลักษณะความผิด
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
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
												<td >ถูกฆ่า</td>
												<td >มีบุคคลในครอบครอบเสียชีวิตจากการถูกผู้อื่นฆ่าโดยมุ่งจะเอาชีวิต เช่น ถูกยิง ถูกแทง</td>
											</tr>
											<tr>
												<td >พยายามฆ่า</td>
												<td >ถูกทำร้ายจากผู้อื่นในลักษณะมุ่งจะเอาชีวิต (เช่น ถูกยิง ถูกแทง) แต่ไม่เสียชีวิต</td>
											</tr>
											<tr>
												<td >ก่อการร้าย</td>
												<td >ตกเป็นเหยื่อการก่อเกิดที่ทำให้เกิดความสะพรึงกลัวโดยหวังผลการเมือง เช่น วางระเบิดสถานที่สาธารณะ (เป็นได้ทั้งกรณีข่มขู่ไม่มีผู้ได้รับอันตราย และมีเจตนาทำอันตรายแก่คนหมู่มาก) ลอบฆ่าคนโดยไม่รู้จักกันมาก่อน (เช่น กรณีลอบยิงเจ้าหน้าที่หรือผู้ให้ข้อมูลกับเจ้าหน้าที่) หรือก่อเหตุทำอันตรายคนจำนวนมากพร้อมๆ กันโดยหวังผลทางการเมือง</td>
											</tr>
											<tr>
												<td >วางเพลิง</td>
												<td >ตกเป็นเหยื่อในเหตุเพลิงไหม้ที่มีผู้ก่อเหตุโดยตั้งใจทำให้เกิดเพลิงไหม้ ไม่ใช่อุบัติเหตุเพลิงไหม้</td>
											</tr>
											<tr>
												<td >วางระเบิด</td>
												<td >ตกเป็นเหยื่อเหตุวางระเบิดเพื่อทำร้ายบุคคล ในลักษณะของการก่อเหตุต่อบุคคลไม่ใช่การก่อการร้าย ต้องเป็นการก่อเหตุโดยตั้งใจหรือวางแผนล่วงหน้าไม่นับรวมกรณีทะเลาะวิวาทแล้วมีการใช้วัตถุระเบิด</td>
											</tr>
											<tr>
												<td >อุบัติเหตุจราจร</td>
												<td >ตกเป็นเหยื่อการก่อเหตุที่เกิดจากความประมาทเลินเล่อของผู้อื่นจากอุบัติเหตุที่เกี่ยวกับการขับขี่ยานพาหนะ </td>
											</tr>
											<tr>
												<td >อุบัติเหตุอื่น ๆ </td>
												<td >ตกเป็นเหยื่อการก่อเหตุที่เกิดจากความประมาทเลินเล่อของผู้อื่นจากอุบัติเหตุอื่น ๆ ที่ไม่เกี่ยวกับการขับขี่ยานพาหนะ (เช่น อุบัติเหตุในที่ทำงาน ประมาทเลินเล่อในการดูแลเด็กเล็กจนเกิดอันตราย)</td>
											</tr>
											<tr>
												<td >ชุลมุนต่อสู้</td>
												<td >ได้รับอันตรายจากเหตุทะเลาะวิวาทต่อสู้กันในลักษณะเป็นกลุ่มจนเกิดความวุ่นวายไม่รู้ว่าใครทำร้ายใคร</td>
											</tr>
											<tr>
												<td >ทะเลาะวิวาท</td>
												<td >ตกเป็นเหยื่อจากเหตุทำร้ายกันด้วยความโกรธเคืองหรือทะเลาะมีปากเสียงกันจนถึงกับลงไม้ลงมือ (ต้องถึงกับลงมือทำร้าย แค่มีปากเสียงกันยังไม่นับเป็นเหตุทะเลาะวิวาทในความหมายนี้)</td>
											</tr>
											<tr>
												<td >ความรุนแรงในครอบครัว</td>
												<td >ตกเป็นเหยื่อเหตุทะเลาะวิวาทที่ก่อเหตุโดยบุคคลในครอบครัวหรือคนที่อยู่บ้านเดียวกัน</td>
											</tr>
											<tr>
												<td >ทำแท้งผิดกฎหมาย</td>
												<td >ไปทำแท้งเถื่อนนอกโรงพยาบาลหรือกับคลินิกนอกระบบ</td>
											</tr>
											<tr>
												<td >ข่มขู่คุกคามว่าจะทำอันตราย</td>
												<td >ถูกขู่ว่าจะทำอันตรายต่อชีวิตร่างกาย อาจเป็นแค่การขู่ไม่จำเป็นต้องบังคับให้ยอมตาม</td>
											</tr>
											<tr>
												<td >ข่มขู่คุกคามให้ตกใจกลัว</td>
												<td >ถูกขู่ให้ตกใจกลัวโดยคำขู่เป็นเรื่องอื่น (ไม่ได้ขู่จะทำร้าย หากขู่ว่าจะทำร้ายจะเป็น ‘ข่มขู่คุกคามว่าจะทำอันตราย’)</td>
											</tr>
											<tr>
												<td >ลักพาตัว</td>
												<td >ถูกเอาตัวเด็กไปจากบิดามารดาหรือผู้ปกครอง อาจเป็นได้ทั้งเรียกค่าไถ่หรือโดยญาติหรือพ่อแม่อีกฝั่ง (กรณีเลิกราหรือทะเลาะกัน)</td>
											</tr>
											<tr>
												<td >หน่วงเหนี่ยวกักขัง</td>
												<td >ถูกเอาตัวไปขัง หรือถูกล่ามไว้ไม่สามารถออกไปไหนได้</td>
											</tr>
											<tr>
												<td >เอาคนเป็นทาส</td>
												<td >ถูกบังคับใช้แรงงานหรือบังคับให้ทำงานโดยสิ้นเชิงโดยไม่จ่ายค่าจ้าง (หรือจ่ายน้อยมาก)และถูกกักขังจำกัดเสรีภาพออกไปไหนมาไหนไม่ได้</td>
											</tr>
											<tr>
												<td >ความผิดต่อเสรีภาพ</td>
												<td >ถูกบังคับให้จำยอมทำตามผู้ก่อเหตุในกรณีอื่นๆ (หากบังคับโดยข่มขู่ถือเป็นกรณี ‘ข่มขู่คุกคาม’ อาจเป็นกรณีขู่ว่าจะเปิดเผยความลับแลกกับเงินเป็น ‘รีดเอาทรัพย์’) </td>
											</tr>
											<tr>
												<td >ปลอมปนอาหาร</td>
												<td >ตกเป็นเหยื่อมีผู้ก่อเหตุเอาสารพิษหรือสารที่ไม่ปลอดภัยใส่ในอาหาร เช่น   ผสมสี ใส่สารกันบูด</td>
											</tr>
											<tr>
												<td >ปล่อยสารพิษ</td>
												<td >มีผู้ตั้งใจทิ้งวัตถุมีพิษหรือปล่อยสารพิษอันตรายไว้ในชุมชนจนมีคนใน ชุมชนได้รับอันตราย (นับเฉพาะกรณีตั้งใจทิ้งสารพิษในชุมชน กรณีโรงงานปล่อยมลภาวะเป็นความผิดกลุ่ม 5)</td>
											</tr>
											<tr>
												<td class="subhead">กลุ่ม 2 ความผิดต่อทรัพย์</td>
												<td class="subhead"></td>
											</tr>
											<tr>
												<td >ปล้น จี้ ชิงทรัพย์</td>
												<td >ถูกทำร้ายเพื่อให้ได้เอาทรัพย์ หรือข่มขู่ต่อหน้าว่าทำอันตรายให้ส่งมอบทรัพย์ให้ เช่น   ถูกปืนจี้ ถูกมีดจี้ จะรุมทำร้ายหากไม่ได้ทรัพย์ 
												มีลักษณะต่างๆ เช่น ปล้นจี้ในท้องถนน โจรเข้ามาปล้นบ้าน ปล้นชิงเอารถ ปล้นคนขับแท็กซี่ นักเรียนถูกนักเลงข่มขู่ให้จ่ายเงิน
												(ปล้นหมายความว่าผู้ก่อเหตุ 3 คน ขึ้นไป)
												</td>
											</tr>
											<tr>
												<td >วิ่งราวทรัพย์</td>
												<td >ถูกเอาทรัพย์ไปโดยฉกฉวยซึ่งหน้าหมายถึงต่อหน้าต่อตา (เอาไปด้วยความรวดเร็วจนไม่ทันขัดขืน ไม่ได้ข่มขู่ ถ้าข่มขู่จะเข้าปล้น จี้ ชิงทรัพย์)</td>
											</tr>
											<tr>
												<td >ล้วงกระเป๋า</td>
												<td >ตกเป็นเหยื่อแอบลักทรัพย์ในกระเป๋าที่พกติดตัวโดยเจ้าทรัพย์ไม่รู้ตัว กรีดกระเป๋า</td>
											</tr>
											<tr>
												<td >ลักทรัพย์</td>
												<td >ตกเป็นเหยื่อถูกขโมย ย่องเบา หรือการลักทรัพย์มีลักษณะต่างๆ เช่น ลักทรัพย์ในบ้านเรือนที่พักอาศัย ลักเครื่องมือเกษตร ลักรถ </td>
											</tr>
											<tr>
												<td >รีดเอาทรัพย์</td>
												<td >ถูกข่มขู่ว่าจะเปิดเผยความลับ เช่น แบล็กเมล์ ภาพลับ/คลิปลับ   เป็นต้น (ต้องแลกกับทรัพย์ ไม่งั้นจะเป็นข่มขู่คุกคามหรือความผิดต่อเสรีภาพ)</td>
											</tr>
											<tr>
												<td >กรรโชกทรัพย์</td>
												<td >ถูกขู่เข็ญว่าจะทำอันตรายต่อชีวิต/ร่างกายทรัพย์สินเพื่อแลกกับการเอาทรัพย์ (ต้องแลกกับทรัพย์ ไม่งั้นจะเป็นข่มขู่คุกคามหรือความผิดต่อเสรีภาพ)</td>
											</tr>
											<tr>
												<td >ทำให้เสียทรัพย์</td>
												<td >ถูกผู้อื่นทำลายทรัพย์สินโดยเจตนา</td>
											</tr>
											<tr>
												<td >บุกรุก</td>
												<td >มีผู้บุกเข้ามาในบ้านโดยมีเจตนาร้าย หรือมีผู้เข้าครอบครองที่ดินของตนโดยไม่ได้รับอนุญาต (รวมกรณีบุกรุกเข้ามาโดยไม่ทราบสาเหตุหรือไม่ทราบเจตนา รวมถึงกรณีเข้ามาเพื่อลักทรัพย์หรือทำร้ายแต่ยังไม่ได้ลงมือ)</td>
											</tr>
											<tr>
												<td class="subhead">กลุ่ม 3 ความผิดทางเพศ</td>
												<td class="subhead"></td>
											</tr>
											<tr>
												<td >ข่มขืนโดยใช้กำลังบังคับ</td>
												<td >ตกเป็นเหยื่อถูกบังคับให้มีเพศสัมพันธ์โดยเหยื่อไม่ยินยอมโดยใช้กำลังบังคับ </td>
											</tr>
											<tr>
												<td >ข่มขืนขณะมึนเมา</td>
												<td >ตกเป็นเหยื่อมีเพศสัมพันธ์โดยไม่ยินยอมเนื่องจากอยู่ในภาวะมึนเมาจนไม่สามารถขัดขืนได้</td>
											</tr>
											<tr>
												<td >ถูกรุมโทรม</td>
												<td >ตกเป็นเหยื่อถูกบังคับให้มีเพศสัมพันธ์โดยไม่ยินยอมโดยผู้ก่อเหตุมีตั้งแต่ 2 คน ขึ้นไป</td>
											</tr>
											<tr>
												<td >ทารุณทางเพศ</td>
												<td >ตกเป็นเหยื่อมีเพศสัมพันธ์โดยบังคับขืนใจในลักษณะใช้ความรุนแรงหรือทำอันตราย</td>
											</tr>
											<tr>
												<td >อนาจาร</td>
												<td >ถูกเนื้อต้องตัวในทางเพศโดยเหยื่อไม่ยินยอม (กอด จูบ ลูบ คลำ)</td>
											</tr>
											<tr>
												<td >พูดจาลวนลาม แอบมอง</td>
												<td >มีผู้ใช้วาจาโดยมีเนื้อหาทางเพศต่อเหยื่อ หรือลอบแอบมองจนเหยื่อรู้สึกไม่สบายใจ</td>
											</tr>
											<tr>
												<td >สะกดรอย/ลอบติดตาม</td>
												<td >ถูกสะกดรอย หรือลอบติดตาม แม้โดยไม่ทราบเจตนา จนเหยื่อรู้สึกไม่สบายใจ</td>
											</tr>
											<tr>
												<td class="subhead">กลุ่ม 4 ฉ้อโกง หลอกลวง</td>
												<td class="subhead"></td>
											</tr>
											<tr>
												<td >แอบอ้างใช้ข้อมูล/เอกสารส่วนตัว</td>
												<td >ถูกนำข้อมูลส่วนตัวไปใช้ในทางมิชอบ เช่น ลักลอบเอาข้อมูลบัตรเครดิตไปซื้อสินค้า เอาสำเนาบัตรประชาชนไปเปิดโทรศัพท์</td>
											</tr>
											<tr>
												<td >ใช้เงินปลอม</td>
												<td >ตกเป็นเหยื่อมีผู้ใช้เงินปลอมมาชำระหนี้/ซื้อขายสินค้า</td>
											</tr>
											<tr>
												<td >แชร์ลูกโซ่</td>
												<td >ถูกหลอกลวงทำธุรกิจที่มีผลตอบแทนจำนวนมากที่ไม่มีอยู่จริง (อาจมีการเชิญชวนให้สมัครสมาชิก)</td>
											</tr>
											<tr>
												<td >หลอกจัดหางานไปทำงานต่างประเทศ</td>
												<td >ถูกหลอกไปทำงานต่างประเทศโดยเรียกเก็บค่าบริการแล้วเอาเงินหนีไปโดยไม่ส่งไปทำงาน</td>
											</tr>
											<tr>
												<td >หลอกให้โอนเงินเข้าบัญชีคนร้าย</td>
												<td >ถูกหลอกลวง ล่อหลอกให้โอนเงินเข้าบัญชีคนร้าย เช่น แก๊ง Call Centre</td>
											</tr>
											<tr>
												<td >หลอกขายสินค้าปลอม</td>
												<td >ถูกหลอกขายสินค้าปลอม</td>
											</tr>
											<tr>
												<td >หลอกขายสินค้า</td>
												<td >ถูกหลอกประกาศขายสินค้า แต่ไม่จัดส่งสินค้าให้ หรือส่งให้แต่ไม่ตรงกับที่โฆษณา</td>
											</tr>
											<tr>
												<td >หลอกลวง</td>
												<td >ถูกทำให้หลงเชื่อให้ทรัพย์สินคนร้ายโดยวิธีการต่างๆ นอกจากที่กล่าวไว้</td>
											</tr>
											<tr>
												<td >เงินกู้นอกระบบ แก๊งทวงหนี้</td>
												<td >ถูกขูดรีดโดยแก๊งเงินกู้นอกระบบให้กู้เงินโดยคิดดอกเบี้ยในราคาสูงมาก (เกินกว่าร้อยละ 3 ต่อเดือน) หลอกให้ทำสัญญาเงินกู้เกินจริง โดยข่มขู่หรือทำอันตรายจากการทวงหนี้</td>
											</tr>
											<tr>
												<td >เรียกเก็บค่าคุ้มครอง</td>
												<td >ถูกเรียกเก็บเงินหรือทรัพย์สินเป็นค่าคุ้มครองโดยขู่ว่าหากไม่ให้จะทำอันตราย หรือไม่ให้ประกอบการค้าขายหรือประกอบอาชีพ</td>
											</tr>
											<tr>
												<td class="subhead">กลุ่ม 5 อาชญากรรมทางคอมพิวเตอร์</td>
												<td class="subhead"></td>
											</tr>
											<tr>
												<td >ถูกลักลอบเข้าสู่ระบบคอมพิวเตอร์</td>
												<td >เป็นเจ้าของบริษัท ห้างร้าน องค์กร หรือผู้รับผิดชอบระบบข้อมูลคอมพิวเตอร์ แล้วมีผู้ลักลอบแอบเข้าระบบโดยมิชอบ</td>
											</tr>
											<tr>
												<td >ถูกล่วงรู้พาสเวิร์ดสำหรับระบบคอมพิวเตอร์แล้วนำไปก่อให้เกิดความเสียหาย</td>
												<td >ถูกขโมยพาสเวิร์ดหรือมีผู้ล่วงรู้พาสเวิร์ดสำหรับเข้าบัญชีคอมพิวเตอร์ในทางมิชอบ แล้วมีการนำข้อมูลไปใช้ในทางมิชอบให้ได้รับความเสียหาย หรือมีการนำไปแอบอ้างบัญชีในทางมิชอบ</td>
											</tr>
											<tr>
												<td >ถูกล้วงข้อมูลในระบบคอมพิวเตอร์</td>
												<td >เป็นเจ้าของบริษัท ห้างร้าน องค์กร หรือผู้รับผิดชอบระบบข้อมูลคอมพิวเตอร์ หรือเป็นบุคคลผู้มีบัญชีข้อมูลคอมพิวเตอร์แล้วถูกผู้อื่นลักลอบเจาะข้อมูลเข้าระบบ (Hacker) เข้ามานำข้อมูลสำคัญไปใช้ให้เกิดความเสียหาย</td>
											</tr>
											<tr>
												<td >ตกเป็นเหยื่ออาชญากรรมทางคอมพิวเตอร์</td>
												<td >ถูกเข้าถึงข้อมูลคอมพิวเตอร์โดยมิชอบ หรือถูกทำให้เสียหายจากการนำข้อมูลทางคอมพิวเตอร์มาเผยแพร่หรือใช้ประโยชน์โดยมิชอบในกรณีอื่น ๆ </td>
											</tr>
											<tr>
												<td class="subhead">กลุ่ม 6 อาชญากรรมอื่นๆ</td>
												<td class="subhead"></td>
											</tr>
											<tr>
												<td >ถูกเรียกสินบน</td>
												<td >ถูกเรียกสินบนโดยเจ้าหน้าที่รัฐแลกกับการอำนวยความสะดวกหรือไม่จับกุม</td>
											</tr>
											<tr>
												<td >ถูกเรียกสินบนโดยธุรกิจ</td>
												<td >ถูกเรียกสินบนโดยพนักงานธุรกิจแลกกับการซื้อสินค้าหรือบริการ</td>
											</tr>
											<tr>
												<td >ได้รับเสียหายจากเจ้าหน้าที่รัฐโดยมิชอบ</td>
												<td >ถูกข่มขู่หรือบังคับโดยเจ้าหน้าที่ของรัฐโดยใช้อำนาจมิชอบ หรือถูกใช้อำนาจเกินขอบเขต</td>
											</tr>
											<tr>
												<td >ตกเป็นเหยื่อกระบวนการยุติธรรม</td>
												<td >ถูกข่มขู่ให้ยอมตามว่าจะจับกุม ถูกกระทำรุนแรงจากเจ้าหน้าที่เกินกว่าเหตุในขั้นตอนการจับกุม ตกเป็นแพะ (ถูกจับกุมคุมขังโดยไม่ได้กระทำผิด)</td>
											</tr>
											<tr>
												<td >ถูกเลือกปฏิบัติโดยไม่ชอบ</td>
												<td >ถูกเลือกปฏิบัติจากเจ้านาย คนที่ในที่งาน การให้บริการต่างๆ อันเนื่องมาจาก เพศ ความพิการ ศาสนา และเชื้อชาติ เป็นต้น</td>
											</tr>
											<tr>
												<td >ถูกดูหมิ่น หมิ่นประสาท เหยียดหยาม</td>
												<td >ถูกดูหมิ่น หมิ่นประมาท หรือถูกเหยียดหยามโดยผู้อื่นหรือคนไม่รู้จักเนื่องจากความแตกต่างในเรื่องเพศ เชื้อชาติ ศาสนา ความพิการ ชนกลุ่มน้อย</td>
											</tr>
											<tr>
												<td >ได้รับอันตรายจากการปล่อยมลภาวะ ตามเขตที่พักอาศัย</td>
												<td >ได้รับอันตรายจากการปล่อยสารพิษ น้ำเสีย อากาศเสีย กลิ่น จากโรงงาน หรือธุรกิจที่อาจเป็นอันตราย เช่น อู่ซ่อมรถ </td>
											</tr>
											<tr>
												<td >ล่วงละเมิดความเป็นส่วนตัว</td>
												<td >ถูกนำข้อมูลส่วนตัวไปใช้ในทางมิชอบหรือโดยไม่ได้รับอนุญาต (เว้นแต่การดำเนินการโดยเจ้าพนักงานตามกฎหมาย)</td>
											</tr>
											
										</tbody>
								</table>
                                    </div>
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
				$('input[name="S1_1_1_4_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_1_4_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S1_1_1_5"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="S1_1_1_5_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_1_5_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S1_1_2"]').on('change', function() {
			if ($(this).val() === '9') {
				$('input[name="S1_1_2_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_2_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S1_1_3"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S1_1_3_1_TEXT_1"]').prop('readonly', false);
				$('input[name="S1_1_3_1_TEXT_2"]').prop('readonly', false);
				$('input[name="S1_1_3_1_TEXT_3"]').prop('readonly', false);
				$('input[name="S1_1_3_2_TEXT_1"]').prop('readonly', true);
				$('input[name="S1_1_3_2_TEXT_2"]').prop('readonly', true);
				$('input[name="S1_1_3_2_TEXT_3"]').prop('readonly', true);
				$('input[name="S1_1_3_2_TEXT_4"]').prop('readonly', true);
				$('input[name="S1_1_3_2_TEXT_5"]').prop('readonly', true);
			} else {
				$('input[name="S1_1_3_1_TEXT_1"]').prop('readonly', true);
				$('input[name="S1_1_3_1_TEXT_2"]').prop('readonly', true);
				$('input[name="S1_1_3_1_TEXT_3"]').prop('readonly', true);
				$('input[name="S1_1_3_2_TEXT_1"]').prop('readonly', false);
				$('input[name="S1_1_3_2_TEXT_2"]').prop('readonly', false);
				$('input[name="S1_1_3_2_TEXT_3"]').prop('readonly', false);
				$('input[name="S1_1_3_2_TEXT_4"]').prop('readonly', false);
				$('input[name="S1_1_3_2_TEXT_5"]').prop('readonly', false);
			}
		});

		$('input[name="S1_1_4"]').on('change', function() {
			if ($(this).val() === '6') {
				$('input[name="S1_1_4_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_4_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S3_4"]').on('change', function() {
			if ($(this).val() === '8') {
				$('input[name="S3_4_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S3_4_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S3_5"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="S3_5_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S3_5_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S4_1"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S4_1_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S4_1_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S4_2"]').on('change', function() {
			if ($(this).val() === '6') {
				$('input[name="S4_2_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S4_2_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S4_3_2"]').on('change', function() {
			if ($(this).val() === '2') {
				$('input[name="S4_3_2_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S4_3_2_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S4_3_3"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			} else if ($(this).val() === '2') {
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			} else if ($(this).val() === '3') {
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			} else if ($(this).val() === '4') {
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			} else if ($(this).val() === '5') {
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			} else if ($(this).val() === '6') {
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			} else if ($(this).val() === '7') {
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', false);
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
			} else  {
				$('input[name="S4_3_3_1_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_2_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_3_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_4_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_5_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_6_TEXT"]').prop('readonly', true);
				$('input[name="S4_3_3_7_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S4_6_1_1"]').on('change', function() {
			if ($(this).val() === '4') {
				$('input[name="S4_6_1_1_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S4_6_1_1_TEXT"]').prop('readonly', true);
			}
		});

		$('input[Id="462118"]').on('change', function () {
			if ($(this).is(":checked")) {
				$('input[name="S4_6_2_1_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S4_6_2_1_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="S4_7"]').on('change', function() {
			if ($(this).val() === '0') {
				$('input[name="S4_7_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="S4_7_TEXT"]').prop('readonly', true);
			}
		});




	</script>
</body>

</html>