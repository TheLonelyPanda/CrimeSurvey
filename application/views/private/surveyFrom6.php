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
    <link rel="stylesheet" href="<?php echo base_url() . 'css/addMember.css' ?>">
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
							<span class="hidden-xs"><?=$u_disp ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0)" class="item btn-form-logout" data-url="<?= site_url('main/submitLogout')?>">Log Out</a></li>
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
		<h1 class="page-header" style="margin-top : 10px;">แก้ไข User</h1>
			<div class="body">
				<form class="a form app form-horizontal" id="form-data" method="post" >
					<label for="wight"><u>ส่วนที่ 1 ข้อมูลเกี่ยวกับผู้ตอบแบบสอบถาม</u></label>
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
								<div class="col-lg-3" >
									<input type="text" class="form-control" name="S1_1_1_2" />
								</div>
								<div class="col-form-label inputTextFix" >
									ปี (เต็มปีบริบูรณ์)
								</div>
							</div>

							<div class="row">
								<label for="1113" class="col-form-label">1.1.3 รายได้</label>
								<div class="col-lg-12" >
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
								<div class="col-lg-12" >
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
								<div class="col-lg-4" >
									<input type="text" class="form-control" name="S1_1_1_4_TEXT" disabled/>
								</div>
							</div>

							<div class="row">
								<label for="1115" class="col-form-label">1.1.5 การศึกษาระดับสูงสุด</label>
								<div class="col-lg-12" >
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
								<div class="col-lg-4" >
									<input type="text" class="form-control" name="S1_1_1_5_TEXT" disabled/>
								</div>
							</div>

							<div class="row">
								<label for="1116" class="col-form-label">1.1.6 ในช่วงระยะเวลา 5 ปี ท่านเคยมาติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรม หน่วยงานใด</label>
								<div class="col-lg-12" >
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
								<div class="col-lg-4" >
									<input type="text" class="form-control" name="S1_1_1_6_TEXT" disabled/>
								</div>
							</div>

							<div class="row">
								<label for="11161" class="col-form-label" style="margin-left: 15px;">1.1.6.1 ท่านเคยมาติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรมในสถานะใด </label>
								<div class="col-lg-12" >
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 20px;">
										<input type="radio" id="111611" name="S1_1_1_6_1" value="1" disabled> (1) ผู้มาติดต่อหรือรับบริการโดยตรง ได้แก่ ผู้เสียหาย ผู้กระทำผิด
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 20px;">
										<input type="radio" id="111612" name="S1_1_1_6_1" value="2" disabled> (2) ผู้มาติดต่อหรือรับบริการโดยอ้อม ได้แก่ ญาติ ผู้เกี่ยวข้องกับผู้เสียหายหรือผู้กระทำผิด
									</label>
								</div>
							</div>
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

		$('input[name="S1_1_1_4"]').on('change', function(){
			if($(this).val() === '8') {
				$('input[name="S1_1_1_4_TEXT"]').prop('disabled', false);  
			}
			else {
				$('input[name="S1_1_1_4_TEXT"]').prop('disabled', true);  
			}
		});

		$('input[name="S1_1_1_5"]').on('change', function(){
			if($(this).val() === '10') {
				$('input[name="S1_1_1_5_TEXT"]').prop('disabled', false);  
			}
			else {
				$('input[name="S1_1_1_5_TEXT"]').prop('disabled', true);  
			}
		});

		$('input[name="S1_1_1_6"]').on('change', function(){
			if($(this).val() === '1') {
				$('input[name="S1_1_1_6_TEXT"]').prop('disabled', false); 
				$('input[name="S1_1_1_6_1"]').attr('disabled', false);
			}
			else {
				$('input[name="S1_1_1_6_TEXT"]').prop('disabled', true);  
				$('input[name="S1_1_1_6_1"]').attr('disabled', true);
			}
		});

		

	</script>
</body>
</html>
