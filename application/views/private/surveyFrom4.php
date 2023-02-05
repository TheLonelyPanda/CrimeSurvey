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
					<label for="wight">ส่วนที่ 2 ความรู้สึกหวาดกลัวภัยอาชญากรรม</label>
					<label for="wight">2.1 ท่านมีความรู้สึกปลอดภัยมากน้อยเพียงใดในกรณีต่าง ๆ ต่อไปนี้</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
								<table class="tg">
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
											<td class="tg-0lax">2.1.1 การเดินตามลำพังในละแวกที่พักอาศัยในตอนกลางวัน</td>
											<td class="tg-0laa"><input type="radio" id="2111" name="S2_1_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2112" name="S2_1_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2113" name="S2_1_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2114" name="S2_1_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2115" name="S2_1_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.1.2 การเดินตามลำพังในละแวกที่พักอาศัยในตอนกลางคืน</td>
											<td class="tg-0laa"><input type="radio" id="2121" name="S2_1_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2122" name="S2_1_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2123" name="S2_1_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2124" name="S2_1_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2125" name="S2_1_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.1.3 เมื่อต้องอยู่บ้านคนเดียวในเวลากลางวัน </td>
											<td class="tg-0laa"><input type="radio" id="2131" name="S2_1_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2132" name="S2_1_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2133" name="S2_1_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2134" name="S2_1_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2135" name="S2_1_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.1.4 เมื่อต้องอยู่บ้านคนเดียวในเวลากลางคืน</td>
											<td class="tg-0laa"><input type="radio" id="2141" name="S2_1_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2142" name="S2_1_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2143" name="S2_1_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2144" name="S2_1_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2145" name="S2_1_4" value="1"></td>
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

	</script>
</body>

</html>