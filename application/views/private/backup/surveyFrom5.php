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
					<label for="wight">ส่วนที่ 2 ข้อมูลเกี่ยวกับการข่มเหง การแสวงหาประโยชน์อย่างไม่ถูกต้อง การค้ามนุษย์ และความรุนแรงและการทรมานทุกรูปแบบที่มีต่อเด็ก</label>
					</br>
					<div class="row">
						<label for="21" class="col-form-label">2.1 ท่านเคยถูกกระทำความรุนแรงทางเพศ โดยตกเป็นเหยื่ออาชญากรรมก่อนอายุ 18 ปี</label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
								<input type="radio" id="211" name="S2_1" value="1"> (1) ใช่
							</label>
							<label class="radio-inline col-form-label  col-lg-3">
								<input type="radio" id="212" name="S2_1" value="2"> (2) ไม่ใช่
							</label>
						</div>
					</div>

					<label for="wight"><u>หมายเหตุ :</u></label>
					<p>1. <b>ความรุนแรงทางเพศ</b> ในที่นี้หมายถึง การข่มเหง การแสวงหาประโยชน์อย่างไม่ถูกต้อง การค้ามนุษย์ 
						และความรุนแรงและการทรมานทุกรูปแบบที่มีต่อเด็ก อันได้แก่ การบังคับ ชักจูงเด็ก ให้มีกิจกรรมทางเพศโดยไม่ยิมยอม 
						การใช้เด็กเป็นเครื่องมือแสวงหาผลประโยชน์ทางเพศ ในรูปแบบสื่อลามก โสเภณีเด็ก ทาส การค้ามนุษย์ การซื้อขายเด็กด้วยจุดประสงค์ทางเพศ หรือการบังคับแต่งงาน
					</p>
					<p >2. <b>กิจกรรมทางเพศ</b> ในที่นี้หมายถึง การมีเพศสัมพันธ์ทั้งที่มีการร่วมประเวณีและไม่มีการร่วมประเวณี เช่น ให้สำเร็จความใคร่ 
						การทำอนาจาร และรวมทั้งกิจกรรมทางเพศอื่นที่ไม่ได้มีการร่วมประเวณีหรือมีเพศสัมพันธ์ด้วย เช่น การบันทึกภาพลามกอนาจาร ล่อลวงให้เป็นผู้ให้บริการในธุรกิจทางเพศ จัดทำสื่อโฆษณาลามกอนาจาร
					</p>
					

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

		$('input[name="S1_1_2"]').on('change', function() {
			if ($(this).val() === '9') {
				$('input[name="S1_1_2_text"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_2_text"]').prop('readonly', true);
			}
		});

		$('input[name="S1_1_3"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S1_1_3_1_text_1"]').prop('readonly', false);
				$('input[name="S1_1_3_1_text_2"]').prop('readonly', false);
				$('input[name="S1_1_3_1_text_3"]').prop('readonly', false);
				$('input[name="S1_1_3_2_text_1"]').prop('readonly', true);
				$('input[name="S1_1_3_2_text_2"]').prop('readonly', true);
				$('input[name="S1_1_3_2_text_3"]').prop('readonly', true);
				$('input[name="S1_1_3_2_text_4"]').prop('readonly', true);
				$('input[name="S1_1_3_2_text_5"]').prop('readonly', true);
			} else {
				$('input[name="S1_1_3_1_text_1"]').prop('readonly', true);
				$('input[name="S1_1_3_1_text_2"]').prop('readonly', true);
				$('input[name="S1_1_3_1_text_3"]').prop('readonly', true);
				$('input[name="S1_1_3_2_text_1"]').prop('readonly', false);
				$('input[name="S1_1_3_2_text_2"]').prop('readonly', false);
				$('input[name="S1_1_3_2_text_3"]').prop('readonly', false);
				$('input[name="S1_1_3_2_text_4"]').prop('readonly', false);
				$('input[name="S1_1_3_2_text_5"]').prop('readonly', false);
			}
		});

		$('input[name="S1_1_4"]').on('change', function() {
			if ($(this).val() === '6') {
				$('input[name="S1_1_4_text"]').prop('readonly', false);
			} else {
				$('input[name="S1_1_4_text"]').prop('readonly', true);
			}
		});

		$('input[name="S3_4"]').on('change', function() {
			if ($(this).val() === '8') {
				$('input[name="S3_4_text"]').prop('readonly', false);
			} else {
				$('input[name="S3_4_text"]').prop('readonly', true);
			}
		});

		$('input[name="S3_5"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="S3_5_text"]').prop('readonly', false);
			} else {
				$('input[name="S3_5_text"]').prop('readonly', true);
			}
		});

		$('input[name="S4_1"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S4_1_text"]').prop('readonly', false);
			} else {
				$('input[name="S4_1_text"]').prop('readonly', true);
			}
		});

		$('input[name="S4_2"]').on('change', function() {
			if ($(this).val() === '6') {
				$('input[name="S4_2_text"]').prop('readonly', false);
			} else {
				$('input[name="S4_2_text"]').prop('readonly', true);
			}
		});

		$('input[name="S4_3_2"]').on('change', function() {
			if ($(this).val() === '2') {
				$('input[name="S4_3_2_text"]').prop('readonly', false);
			} else {
				$('input[name="S4_3_2_text"]').prop('readonly', true);
			}
		});

		$('input[name="S4_3_3"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="S4_3_3_1_text"]').prop('readonly', false);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			} else if ($(this).val() === '2') {
				$('input[name="S4_3_3_2_text"]').prop('readonly', false);
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			} else if ($(this).val() === '3') {
				$('input[name="S4_3_3_3_text"]').prop('readonly', false);
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			} else if ($(this).val() === '4') {
				$('input[name="S4_3_3_4_text"]').prop('readonly', false);
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			} else if ($(this).val() === '5') {
				$('input[name="S4_3_3_5_text"]').prop('readonly', false);
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			} else if ($(this).val() === '6') {
				$('input[name="S4_3_3_6_text"]').prop('readonly', false);
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			} else if ($(this).val() === '7') {
				$('input[name="S4_3_3_7_text"]').prop('readonly', false);
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
			} else  {
				$('input[name="S4_3_3_1_text"]').prop('readonly', true);
				$('input[name="S4_3_3_2_text"]').prop('readonly', true);
				$('input[name="S4_3_3_3_text"]').prop('readonly', true);
				$('input[name="S4_3_3_4_text"]').prop('readonly', true);
				$('input[name="S4_3_3_5_text"]').prop('readonly', true);
				$('input[name="S4_3_3_6_text"]').prop('readonly', true);
				$('input[name="S4_3_3_7_text"]').prop('readonly', true);
			}
		});

		$('input[name="S4_6_1_1"]').on('change', function() {
			if ($(this).val() === '4') {
				$('input[name="S4_6_1_1_text"]').prop('readonly', false);
			} else {
				$('input[name="S4_6_1_1_text"]').prop('readonly', true);
			}
		});

		$('input[Id="462118"]').on('change', function () {
			if ($(this).is(":checked")) {
				$('input[name="S4_6_2_1_text"]').prop('readonly', false);
			} else {
				$('input[name="S4_6_2_1_text"]').prop('readonly', true);
			}
		});

		$('input[name="S4_7"]').on('change', function() {
			if ($(this).val() === '0') {
				$('input[name="S4_7_text"]').prop('readonly', false);
			} else {
				$('input[name="S4_7_text"]').prop('readonly', true);
			}
		});




	</script>
</body>

</html>