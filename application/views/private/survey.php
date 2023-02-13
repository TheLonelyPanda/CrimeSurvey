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

	<link href="<?php echo base_url() .'assets/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css'  ?>" rel='stylesheet'/>
	<link href="<?php echo base_url() .'assets/css/animate.min.css'  ?>" rel='stylesheet'/>
	<link href="<?php echo base_url() .'assets/css/style.min.css'  ?>" rel='stylesheet'/>
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
					<a href="<?= site_url('main/index') ?>" class="navbar-brand"><img src="<?php echo base_url() .'/img/logo.png'?>" class="logo" alt="" />สํานักงานกิจการยุติธรรม</a>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="hidden-xs"><?= $u_disp ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<? if($u_level == 'ADMIN'){ ?>
								<li><a href="<?= site_url('admin/addMember')?>">แก้ไข User</a></li>
							<?}?>
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
					<div class="line" style="float: right;">
							<label for="2" class="col-form-label nText">แบบสอบถามลำดับที่</label>
							<div class="col-lg-4 " >
								<input type="text" class="form-control" name="1_TEXT" value=<?=$u_now_id?> readonly />
							</div>
					</div>
					</br>

					<label for="wight">ส่วนที่ 1 ข้อมูลเกี่ยวกับผู้ตอบแบบสอบถาม</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
									<label for="A1" class="col-form-label">A1 ข้อมูลส่วนบุคคล</label></br>
							</div>
							<div class="row indent">
									<label for="A2" class="col-form-label nText">A2 บ้านเลขที่</label>
									<div class="col-lg-3 " >
										<input type="text" class="form-control" id="A2" name="A2"/>
									</div>
							</div>
							<div class="row indent">
									<label for="A3_1" class="col-form-label nText">A3 พิกัดบ้าน (NS)</label>
									<div class="col-lg-3 " >
										<input type="text" class="form-control" id="A3_1" name="A3_1" />
									</div>
									<label for="A3_2" class="col-form-label nText">พิกัดบ้าน (EW)</label>
									<div class="col-lg-3 " >
										<input type="text" class="form-control" id="A3_2" name="A3_2" />
									</div>
							</div>
							<div class="row">
									<label for="A1" class="nText">หมายเหตุ : ข้อมูลที่จัดเก็บจากการสำรวจครั้งนี้จะถูกเก็บไว้เป็นความลับ และถูกนำมาใช้วิเคราะห์ในภาพรวมเพื่อประโยชน์สำหรับการดำเนินงานของสำนักงานกิจการยุติธรรม กระทรวงยุติธรรม เท่านั้น</label></br>
							</div>

							<div class="row">
								<label for="A4" class="col-form-label">A4 พื้นที่</label>
								<div class="col-lg-12">
									<div style="width: 50%; float:left;">
										<div class="row" style="margin-left: 10px; padding-top: 13px;">
											<input type="radio" id="A41" name="A4" value="1">
											<label class="radio-inline " style="align-self: center; style=" margin-left: 10px;>(A4.1) กรุงเทพมหานคร</label>
										</div>
										<div class="row" style=" padding-top: 13px;">
											<label class="radio-inline " style="align-self: center;">เขต</label>
											<label class="radio-inline col-form-label  col-lg-5">
											<select name="amphure_id_1" id="amphure_1" class="form-control" readonly>
													<option value="">เลือกเขต</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">แขวง</label>
											<label class="radio-inline col-form-label  col-lg-5">
											<select name="district_id_1" id="district_1" class="form-control" readonly>
													<option value="">เลือกแขวง</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">เขตสถานีตำรวจ</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" id="A4_41" name="A4_1_TEXT_3" readonly />
											</label>
										</div>
									</div>

									<div style="width: 50%; float:right;">
										<div class="row" style="margin-left: 10px;">
											<input type="radio" id="A42" name="A4" value="2">
											<label class="radio-inline" style="align-self: center;">(A4.2) จังหวัดอื่นๆ (ระบุ)</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="province_id" id="province" class="form-control" readonly>
													<option value="">เลือกจังหวัด</option>
													<?foreach ($d_province as $result){?>
														<option value="<?=$result->id?>"><?=$result->name_th?></option>
													<?}?>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">อำเภอ</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="amphure_id" id="amphure" class="form-control" readonly>
													<option value="">เลือกอำเภอ</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">ตำบล</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="district_id" id="district" class="form-control" readonly>
													<option value="">เลือกตำบล</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">เขตสถานีตำรวจ</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" id="A4_42" name="A4_2_TEXT_4" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline" style="align-self: center;">อบต./ท.ตำบล/ท.เมือง/ท.นคร</label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" id="A4_52" name="A4_2_TEXT_5" readonly />
											</label>
										</div>
									</div>

								</div>
							</div>


							<label for="wight">1.1 ข้อมูลบุคคลของผู้ตอบแบบสอบถาม (ผู้แทนครัวเรือน)</label>

							<div class="row">
								<label for="1111" class="col-form-label">1.1.1 เพศ &nbsp</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11111" name="1_1_1" value="1"> (1) ชาย
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11112" name="1_1_1" value="2"> (2) หญิง
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11113" name="1_1_1" value="3"> (3) เพศทางเลือก
								</label>
							</div>

							<div class="row">
								<label for="1112" class="col-form-label">1.1.2 อายุ</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="1112" name="1_1_2" />
								</div>
								<div class="col-form-label inputTextFix">
									ปี (เต็มปีบริบูรณ์)
								</div>
							</div>

							<div class="row">
								<label for="1113" class="col-form-label">1.1.3 รายได้</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11131" name="1_1_3" value="1"> (1) ต่ำกว่า 15,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11132" name="1_1_3" value="2"> (2) 15,001-25,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11133" name="1_1_3" value="3"> (3) 25,001-35,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11134" name="1_1_3" value="4"> (4) 35,001-45,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11135" name="1_1_3" value="5"> (5) 45,001-55,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11136" name="1_1_3" value="6"> (6) 55,001-65,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11137" name="1_1_3" value="7"> (7) 65,001-75,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11138" name="1_1_3" value="8"> (8) มากกว่า 75,000 บาท
									</label>
								</div>
							</div>

							<div class="row">
								<label for="1114" class="col-form-label">1.1.4 อาชีพ</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11141" name="1_1_4" value="1"> (1) ข้าราชการ พนักงานรัฐวิสาหกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11142" name="1_1_4" value="2"> (2) พนักงานเอกชน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11143" name="1_1_4" value="3"> (3) นักเรียน/นักศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11144" name="1_1_4" value="4"> (4) รับจ้างทั่วไป
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11145" name="1_1_4" value="5"> (5) เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11146" name="1_1_4" value="6"> (6) ประกอบธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11147" name="1_1_4" value="7"> (7) ไม่ได้ประกอบอาชีพ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11148" name="1_1_4" value="8"> (8) อื่น ๆ...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="1114_text" name="1_1_4_TEXT" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1115" class="col-form-label">1.1.5 การศึกษาระดับสูงสุด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11151" name="1_1_5" value="1"> (1) ไม่เคยเข้ารับการศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11152" name="1_1_5" value="2"> (2) การศึกษานอกระบบ (กศน.)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11153" name="1_1_5" value="3"> (3) ประถมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11154" name="1_1_5" value="4"> (4) มัธยมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11155" name="1_1_5" value="5"> (5) ปวช.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11156" name="1_1_5" value="6"> (6) ปวส.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11157" name="1_1_5" value="7"> (7) ปริญญาตรี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11158" name="1_1_5" value="8"> (8) ปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11159" name="1_1_5" value="9"> (9) สูงกว่าปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="111510" name="1_1_5" value="10"> (10) การศึกษาในรูปแบบอื่น...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="1115_text" name="1_1_5_TEXT" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1116" class="col-form-label">1.1.6 ท่านเห็นการปฏิบัติงานของเจ้าหน้าที่ตำรวจ หรือเจ้าหน้าที่ของหน่วยงานด้านยุติธรรม </br>เช่น เจ้าหน้าที่คุมประพฤติ เจ้าหน้าที่ราชทัณฑ์ เจ้าหน้าที่ยุติธรรมจังหวัด เจ้าหน้าที่ยุติธรรมชุมชน เป็นต้น </br>ในการปฏิบัติงานในพื้นที่ชุมชนของท่านมากน้อยเพียงใด</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11161" name="1_1_6" value="1"> (1) สัปดาห์ละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11162" name="1_1_6" value="2"> (2) เดือนละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11163" name="1_1_6" value="3"> (3) ปีละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11164" name="1_1_6" value="4"> (4) มากกว่า 1 ครั้ง/ปี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11165" name="1_1_6" value="5"> (5) ไม่เคยพบ
									</label>
								</div>
							</div>
							</br>
							<div class="row">
								<label for="112" class="col-form-label">1.2 สถานะของท่านในครัวเรือน (ท่านมีความเกี่ยวข้องสัมพันธ์กับเจ้าของบ้านอย่างไร)</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="1121" name="1_2" value="1"> (1) เจ้าของบ้าน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1122" name="1_2" value="2"> (2) คู่สมรส
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1123" name="1_2" value="3"> (3) บิดามารดา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1124" name="1_2" value="4"> (4) บุตร
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1125" name="1_2" value="5"> (5) ปู่/ย่า/ตา/ยาย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1126" name="1_2" value="6"> (6) หลาน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1127" name="1_2" value="7"> (7) พี่/น้อง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1128" name="1_2" value="8"> (8) ลุง/ป้า/น้า/อา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1129" name="1_2" value="9"> (9) อื่นๆ...
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="112_text" name="1_2_TEXT" readonly />
								</div>
							</div>


							<div class="row">
								<label for="113" class="col-form-label">1.3 ลักษณะบริเวณที่อยู่อาศัย</label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-8" style="margin-left: 10px;">
										<input type="radio" id="1131" name="1_3" value="1"> (1) เขตที่พักอาศัยทั่วไป เช่น หมู่บ้านจัดสรร บ้านเดี่ยว
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1132" name="1_3" value="2"> (2) เขตธุรกิจ เช่น เขตที่มีบริษัท ห้าง ร้าน อยู่รวมกันเป็นบริเวณกว้าง
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1133" name="1_3" value="3"> (3) เขตชุมชนแออัด หรือชุมชนที่มีลักษณะบ้านเรือนหนาแน่น และประชากรอยู่อย่างแออัด
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1134" name="1_3" value="4"> (4) เขตอุตสาหกรรม หรือชุมชนที่อยู่ในบริเวณที่มีโรงงานอุตสาหกรรมหรือนิคมอุตสาหกรรมตั้งอยู่
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1135" name="1_3" value="5"> (5) เขตเกษตรกรรม หรือชุมชนที่อยู่ในบริเวณพื้นที่เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1136" name="1_3" value="6"> (6) อื่นๆ...
									</label>

								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="113_text" name="1_3_TEXT" readonly />
								</div>
							</div>

							</br>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion" href="#form1">
											<i class="fa fa-plus-circle pull-right"></i>
											1. แบบสำรวจข้อมูลสถิติอาชญากรรมภาคประชาชน
										</a>
									</h3>
								</div>
								<div id="form1" class="panel-collapse collapse in collapseForm">
									<div data-include="../surveyFrom1"></div>
								</div>
							</div>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form2">
											<i class="fa fa-plus-circle pull-right"></i>
											2. แบบสอบถามความรู้เกี่ยวกับกฎหมายและกระบวนการยุติธรรม งานตัวชี้วัด
										</a>
									</h3>
								</div>
								<div id="form2" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom2"></div>
								</div>
							</div>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form3">
											<i class="fa fa-plus-circle pull-right"></i>
											3. แบบสอบถามความรู้สึกหวาดกลัวภัยอาชญากรรม
										</a>
									</h3>
								</div>
								<div id="form3" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom3"></div>
								</div>
							</div>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form4">
											<i class="fa fa-plus-circle pull-right"></i>
											4. แบบสอบถามความเชื่อมั่นฯ
										</a>
									</h3>
								</div>
								<div id="form4" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom4"></div>
								</div>
							</div>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form5">
											<i class="fa fa-plus-circle pull-right"></i>
											5. แบบสอบถามSDGs
										</a>
									</h3>
								</div>
								<div id="form5" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom5"></div>
								</div>
							</div>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form6">
											<i class="fa fa-plus-circle pull-right"></i>
											6. แบบสอบถามความเชื่อมั่น งานตัวชี้วัด
										</a>
									</h3>
								</div>
								<div id="form6" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom6"></div>
								</div>
							</div>

							</br></br>

							<div class="row">
								<div class="col-lg-1.5" style="margin-left: auto; margin-right: 0;">
									<a value="Save" data-url="<?= site_url('main/saveSurvey')?>" class="ui basic green button btn-form-save"><i class="save icon large"></i> บันทึก</a>
								</div>
								<div class="col-lg-1.5">
									<a href="<?= site_url('/main/index/') ?>" class="ui basic red button "><i class="cancel  icon large"></i> ยกเลิก</a>
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
	<script src="<?php echo base_url() .'/assets/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js'?>"></script>

	<script src="<?php echo base_url() .'/assets/plugins/slimscroll/jquery.slimscroll.min.js'?>"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->

	<script src="<?php echo base_url() .'/assets/js/apps.min.js'?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			
		});

		
		$('input[name="A4"]').on('change', function() {
				if ($(this).val() === '1') {
					$('select[name="amphure_id_1"]').prop('readonly', false);
					$('select[name="district_id_1"]').prop('readonly', false);
					$('input[name="A4_1_TEXT_3"]').prop('readonly', false);
					$('select[name="province_id"]').prop('readonly', true);
					$('select[name="amphure_id"]').prop('readonly', true);
					$('select[name="district_id"]').prop('readonly', true);
					$('input[name="A4_2_TEXT_4"]').prop('readonly', true);
					$('input[name="A4_2_TEXT_5"]').prop('readonly', true);
				} else {
					$('select[name="amphure_id_1"]').prop('readonly', true);
					$('select[name="district_id_1"]').prop('readonly', true);
					$('input[name="A4_1_TEXT_3"]').prop('readonly', true);
					$('select[name="province_id"]').prop('readonly', false);
					$('select[name="amphure_id"]').prop('readonly', false);
					$('select[name="district_id"]').prop('readonly', false);
					$('input[name="A4_2_TEXT_4"]').prop('readonly', false);
					$('input[name="A4_2_TEXT_5"]').prop('readonly', false);
				}
			});

		$(function() {
			var includes = $('[data-include]')
			$.each(includes, function() {
				var file = $(this).data('include')
				$(this).load(file)
			})
		});

		$('#form1').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
		})

		$('#form2').on('shown.bs.collapse', function() {
			$('#form1').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
		})

		$('#form3').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form1').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
		})

		$('#form4').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form1').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
		})

		$('#form5').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form1').collapse('hide');
			$('#form6').collapse('hide');
		})

		$('#form6').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form1').collapse('hide');
		})

		$('input[name="1_1_4"]').on('change', function() {
			if ($(this).val() === '8') {
				$('input[name="1_1_4_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="1_1_4_TEXT"]').prop('readonly', true);
			}
		});

		$('input[name="1_1_5"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="1_1_5_TEXT"]').prop('readonly', false);
			} else {
				$('input[name="1_1_5_TEXT"]').prop('readonly', true);
			}
		});
		
		$('input[name="1_2"]').on('change', function() {
				if ($(this).val() === '9') {
					$('input[name="1_2_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_2_TEXT"]').prop('readonly', true);
				}
			});


			$('input[name="1_3"]').on('change', function() {
				if ($(this).val() === '6') {
					$('input[name="1_3_TEXT"]').prop('readonly', false);
				} else {
					$('input[name="1_3_TEXT"]').prop('readonly', true);
				}
			});

		$(function() {
			var provinceObject = $('#province');
			var amphureObject = $('#amphure');
			var districtObject = $('#district');

			// on change province
			provinceObject.on('change', function() {
				var provinceId = $(this).val();
				amphureObject.html('<option value="">เลือกอำเภอ</option>');
				<?foreach ($d_amphures as $resultamp){?>
					if(provinceId == <? echo $resultamp->province_id ?>){
						amphureObject.append('<option value="<?=$resultamp->id?>"><?=$resultamp->name_th?></option>')
					}
				<?}?>
				districtObject.html('<option value="">เลือกตำบล</option>');

			});

			// on change amphure amphure_id
			amphureObject.on('change', function() {
				var amphureId = $(this).val();

				districtObject.html('<option value="">เลือกตำบล</option>');
				<?foreach ($d_districts as $resultdis){?>
					if(amphureId == <? echo $resultdis->amphure_id ?>){
						districtObject.append('<option value="<?=$resultdis->id?>"><?=$resultdis->name_th?></option>')
					}
				<?}?>
			});
		});

		$(function() {
			var amphureObject = $('#amphure_1');
			var districtObject = $('#district_1');

			// on change province
			amphureObject.html('<option value="">เลือกอำเภอ</option>');
				<?foreach ($d_amphures as $resultamp){?>
					if(1 == <? echo $resultamp->province_id ?>){
						amphureObject.append('<option value="<?=$resultamp->id?>"><?=$resultamp->name_th?></option>')
					}
				<?}?>
				districtObject.html('<option value="">เลือกตำบล</option>');

			// on change amphure amphure_id
			amphureObject.on('change', function() {
				var amphureId = $(this).val();

				districtObject.html('<option value="">เลือกตำบล</option>');
				<?foreach ($d_districts as $resultdis){?>
					if(amphureId == <? echo $resultdis->amphure_id ?>){
						districtObject.append('<option value="<?=$resultdis->id?>"><?=$resultdis->name_th?></option>')
					}
				<?}?>
			});
		});

		$(function() {
			document.getElementById("A2").value = '<?=$d_surveyProfile->A2?>';
			document.getElementById("A3_1").value = '<?=$d_surveyProfile->A3_1?>';
			document.getElementById("A3_2").value = '<?=$d_surveyProfile->A3_2?>';
			document.getElementById("A4<?=$d_surveyProfile->A4?>").checked = true;
			$('input[name="A4"]').val('<?=$d_surveyProfile->A4?>').change();
			if('<?=$d_surveyProfile->A4?>'== '2'){
				<?foreach ($d_province as $resultampa){
					if($resultampa->name_th == $d_surveyProfile->A4_1){
						$pv = $resultampa->id;
					}
				}?>
				$("#province").val('<?=$pv?>').change();
				<?foreach ($d_amphures as $resultampb){
					if($resultampb->name_th == $d_surveyProfile->A4_2){
						$ap = $resultampb->id;
					}
				}?>
				$("#amphure").val('<?=$ap?>').change();
				<?foreach ($d_districts as $resultampc){
					if($resultampc->name_th == $d_surveyProfile->A4_3){
						$dt = $resultampc->id;
					}
				}?>
				$("#district").val('<?=$dt?>').change();
				document.getElementById("A4_42").value = '<?=$d_surveyProfile->A4_4?>';
				document.getElementById("A4_52").value = '<?=$d_surveyProfile->A4_5?>';
			}else{
				<?foreach ($d_amphures as $resultampb){
					if($resultampb->name_th == $d_surveyProfile->A4_2){
						$ap = $resultampb->id;
					}
				}?>
				$("#amphure_1").val('<?=$ap?>').change();
				<?foreach ($d_districts as $resultampc){
					if($resultampc->name_th == $d_surveyProfile->A4_3){
						$dt = $resultampc->id;
					}
				}?>
				$("#district_1").val('<?=$dt?>').change();
				document.getElementById("A4_41").value = '<?=$d_surveyProfile->A4_4?>';
			}

			document.getElementById("1111<?=$d_surveyProfile->{'1_1_1'}?>").checked = true;
			document.getElementById("1112").value = '<?=$d_surveyProfile->{'1_1_2'}?>';
			document.getElementById("1113<?=$d_surveyProfile->{'1_1_3'}?>").checked = true;
			document.getElementById("1114<?=$d_surveyProfile->{'1_1_4'}?>").checked = true;
			$('input[name="1_1_4"]').val('<?=$d_surveyProfile->{'1_1_4'}?>').change();
			document.getElementById("1114_text").value = '<?=$d_surveyProfile->{'1_1_4_text'}?>';
			document.getElementById("1115<?=$d_surveyProfile->{'1_1_5'}?>").checked = true;
			$('input[name="1_1_5"]').val('<?=$d_surveyProfile->{'1_1_5'}?>').change();
			document.getElementById("1115_text").value = '<?=$d_surveyProfile->{'1_1_5_text'}?>';
			document.getElementById("1116<?=$d_surveyProfile->{'1_1_6'}?>").checked = true;

			document.getElementById("112<?=$d_surveyProfile->{'1_2'}?>").checked = true;
			$('input[name="1_2"]').val('<?=$d_surveyProfile->{'1_2'}?>').change();
			document.getElementById("112_text").value = '<?=$d_surveyProfile->{'1_2_text'}?>';

			document.getElementById("113<?=$d_surveyProfile->{'1_3'}?>").checked = true;
			$('input[name="1_3"]').val('<?=$d_surveyProfile->{'1_3'}?>').change();
			document.getElementById("113_text").value = '<?=$d_surveyProfile->{'1_3_text'}?>';
			
		});
	</script>
</body>

</html>