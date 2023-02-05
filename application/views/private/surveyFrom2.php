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
					<label for="wight">ส่วนที่ 2   ความรู้เกี่ยวกับกฎหมายและกระบวนการยุติธรรม</label>
					<label for="wight"><u>คำชี้แจง</u> โปรดอ่านข้อความแต่ละข้อ และใส่เครื่องหมาย √ ในช่องคำถามที่ตรงกับความรู้สึกของท่านมากที่สุด</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
								<table class="tg">
									<thead>
										<tr>
											<th class="tg-9wq8 bg" rowspan="2">ข้อ<br></th>
											<th class="tg-lboi bg" rowspan="2">ความรู้เกี่ยวกับกฎหมายและกระบวนการยุติธรรม<br></th>
											<th class="tg-c3oa bg" colspan="5">ระดับความรู้</th>
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
											<td class="tg-0laq bg" colspan="7">1. ท่านมีความรู้เกี่ยวกับ “กฎหมายและกระบวนการยุติธรรมขั้นพื้นฐาน” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">1.1</td>
											<td class="tg-0lax">กฎหมายที่เกี่ยวข้องกับกระบวนการยุติธรรมทางอาญาทั้งระบบตั้งแต่ชั้นพนักงานสอบสวน พนักงานอัยการ การพิพากษาคดีชั้นศาล</td>
											<td class="tg-0laa"><input type="radio" id="2111" name="S2_1_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2112" name="S2_1_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2113" name="S2_1_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2114" name="S2_1_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2115" name="S2_1_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.2</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับปัญหาที่ดินทำกิน และทรัพยากรธรรมชาติ ที่ประชาชนเข้าไปใช้ประโยชน์</td>
											<td class="tg-0laa"><input type="radio" id="2121" name="S2_1_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2122" name="S2_1_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2123" name="S2_1_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2124" name="S2_1_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2125" name="S2_1_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.3</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับหนี้ นิติกรรมสัญญา การไม่ชำระหนี้ และการขอระงับข้อพิพาท </td>
											<td class="tg-0laa"><input type="radio" id="2131" name="S2_1_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2132" name="S2_1_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2133" name="S2_1_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2134" name="S2_1_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2135" name="S2_1_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.4</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับการบังคับคดีและล้มละลาย</td>
											<td class="tg-0laa"><input type="radio" id="2141" name="S2_1_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2142" name="S2_1_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2143" name="S2_1_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2144" name="S2_1_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2145" name="S2_1_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.5</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับการปกครอง เช่น ความผิดต่อเจ้าพนักงานและ ต่อตำแหน่งหน้าที่ การร้องเรียนกล่าวโทษเจ้าหน้าที่รัฐ</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_5" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_5" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_5" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_5" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_5" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.6</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับความมั่นคงแห่งราชอาณาจักร เช่น.ความผิดเกี่ยวกับพระมหากษัตริย์ ความมั่นคงของรัฐ การก่อการร้าย</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_6" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_6" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_6" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_6" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_6" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.7</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับทรัพย์ เช่น ลักทรัพย์.ยักยอกทรัพย์.รับของโจร</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_7" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_7" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_7" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_7" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_7" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.8</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับชีวิตและร่างกาย เช่น ฆ่า ทอดทิ้งเด็ก ทำแท้ง</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_8" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_8" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_8" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_8" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_8" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.9</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับเพศ เช่น ข่มขืน อนาจาร การค้าประเวณี</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_9" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_9" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_9" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_9" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_9" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.10</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับความสงบสุขของประชาชน เช่น อั้งยี่ ซ่องโจร</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_10" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_10" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_10" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_10" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_10" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.11</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับการก่อให้เกิดภยันตรายต่อประชาชน เช่น วางเพลิง เผาทรัพย์ ปลอมปนอาหารหรือยา</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_11" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_11" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_11" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_11" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_11" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">1.12</td>
											<td class="tg-0lax">กฎหมายเกี่ยวกับการค้า เช่น เครื่องชั่งตวงวัดที่ผิดอัตรา การขายของโดยการหลอกลวง การลอกเลียนแบบสินค้า/เครื่องหมายการค้า</td>
											<td class="tg-0laa"><input type="radio" id="2151" name="S2_1_12" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2152" name="S2_1_12" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2153" name="S2_1_12" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2154" name="S2_1_12" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2155" name="S2_1_12" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">2.ท่านมีความรู้เกี่ยวกับ “ช่องทางการเข้าถึงกระบวนการยุติธรรม” ในประเด็นต่อไปนี้ อยู่ในระดับใด </td>
										</tr>
										<tr>
											<td class="tg-0lax">2.1</td>
											<td class="tg-0lax">การขอรับความช่วยเหลือผ่านช่องทาง สายด่วนยุติธรรม 1111 กด 77</td>
											<td class="tg-0laa"><input type="radio" id="2211" name="S2_2_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2212" name="S2_2_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2213" name="S2_2_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2214" name="S2_2_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2215" name="S2_2_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.2</td>
											<td class="tg-0lax">การบริการให้ความช่วยเหลือทางกฎหมายและกระบวนการยุติธรรม ผ่านศูนย์ยุติธรรมจังหวัด/ชุมชน </td>
											<td class="tg-0laa"><input type="radio" id="2221" name="S2_2_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2222" name="S2_2_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2223" name="S2_2_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2224" name="S2_2_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2225" name="S2_2_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.3</td>
											<td class="tg-0lax">เมื่อต้องตกเป็นผู้ต้องหาในคดีอาญา กฎหมายได้กำหนดให้รัฐ มีหน้าที่จัดหาทนายความ</td>
											<td class="tg-0laa"><input type="radio" id="2231" name="S2_2_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2232" name="S2_2_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2233" name="S2_2_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2234" name="S2_2_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2235" name="S2_2_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.4</td>
											<td class="tg-0lax">การขอรับความช่วยเหลือทางการเงินในการต่อสู้คดีจากกองทุนยุติธรรม</td>
											<td class="tg-0laa"><input type="radio" id="2241" name="S2_2_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2242" name="S2_2_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2243" name="S2_2_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2244" name="S2_2_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2245" name="S2_2_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.5</td>
											<td class="tg-0lax">การร้องขอให้หน่วยงานของรัฐทำหน้าที่ไกล่เกลี่ยคดีให้เมื่อมีคดีความเกิดขึ้น </td>
											<td class="tg-0laa"><input type="radio" id="2241" name="S2_2_5" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2242" name="S2_2_5" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2243" name="S2_2_5" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2244" name="S2_2_5" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2245" name="S2_2_5" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.6</td>
											<td class="tg-0lax">การรับหรือให้ข้อมูลข่าวสารผ่านทนายความหรือผู้ให้คำปรึกษาทางกฎหมาย</td>
											<td class="tg-0laa"><input type="radio" id="2241" name="S2_2_6" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2242" name="S2_2_6" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2243" name="S2_2_6" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2244" name="S2_2_6" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2245" name="S2_2_6" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.7</td>
											<td class="tg-0lax">การรับหรือให้ข้อมูลข่าวสารผ่านโฆษกหน่วยงานภาครัฐหรือเจ้าหน้าที่รัฐผู้รับผิดชอบคดี</td>
											<td class="tg-0laa"><input type="radio" id="2241" name="S2_2_7" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2242" name="S2_2_7" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2243" name="S2_2_7" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2244" name="S2_2_7" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2245" name="S2_2_7" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">2.8</td>
											<td class="tg-0lax">การรับหรือให้ข้อมูลข่าวสารผ่านมูลนิธิหรือองค์กรให้ความช่วยเหลือในกระบวนการยุติธรรม</td>
											<td class="tg-0laa"><input type="radio" id="2241" name="S2_2_8" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2242" name="S2_2_8" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2243" name="S2_2_8" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2244" name="S2_2_8" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2245" name="S2_2_8" value="1"></td>
										</tr>

										<tr>
											<td class="tg-0laq bg" colspan="7">3.ท่านมีความรู้เกี่ยวกับ “สิทธิขั้นพื้นฐานของประชาชน” ในประเด็นต่อไปนี้ อยู่ในระดับใด</td>
										</tr>
										<tr>
											<td class="tg-0lax">3.1</td>
											<td class="tg-0lax">ท่านจะได้รับการแจ้งข้อกล่าวหาจากตำรวจ เมื่อต้องถูกดำเนินคดี</td>
											<td class="tg-0laa"><input type="radio" id="2311" name="S2_3_1" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2312" name="S2_3_1" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2313" name="S2_3_1" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2314" name="S2_3_1" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2315" name="S2_3_1" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.2</td>
											<td class="tg-0lax">ท่านมีสิทธิในการที่จะพบหรือมีทนายความ เมื่อต้องตกเป็นผู้ต้องหาหรือจำเลยในคดีอาญา</td>
											<td class="tg-0laa"><input type="radio" id="2321" name="S2_3_2" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2322" name="S2_3_2" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2323" name="S2_3_2" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2324" name="S2_3_2" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2325" name="S2_3_2" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.3</td>
											<td class="tg-0lax">ท่านมีสิทธิที่จะร้องให้มีการขอปล่อยตัวชั่วคราว (ประกันตัว) เมื่อต้องตกเป็นผู้ต้องหาหรือจำเลยในคดีอาญา</td>
											<td class="tg-0laa"><input type="radio" id="2331" name="S2_3_3" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2332" name="S2_3_3" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2333" name="S2_3_3" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2334" name="S2_3_3" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2335" name="S2_3_3" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.4</td>
											<td class="tg-0lax">หากท่านเป็นผู้ถูกกล่าวหา/ผู้เสียหาย ท่านสามารถรับทราบความคืบหน้าในการสอบสวนจากเจ้าหน้าที่</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_4" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_4" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_4" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_4" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_4" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.5</td>
											<td class="tg-0lax">ท่านมีสิทธิเข้าถึงและใช้พยานหลักฐานต่าง ๆ ได้โดยสะดวก เมื่อต้องเข้าสู่กระบวนการยุติธรรม</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_5" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_5" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_5" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_5" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_5" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.6</td>
											<td class="tg-0lax">บุคคลจะต้องได้การสันนิษฐานไว้ก่อนว่าเป็น “ผู้บริสุทธิ์” ก่อนคดีจะถึงที่สุด</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_6" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_6" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_6" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_6" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_6" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.7</td>
											<td class="tg-0lax">ผู้ต้องหา/จำเลย/ผู้เสียหายมีสิทธิได้รับการคุ้มครองระหว่างการดำเนินคดี และการพิจารณาคดีของคู่กรณีทุกฝ่าย</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_7" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_7" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_7" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_7" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_7" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.8</td>
											<td class="tg-0lax">ท่านมีสิทธิขอรับการอุทธรณ์คำตัดสินของศาลต่อศาลที่สูงกว่า เพื่อโอกาสในการได้รับการพิจารณาคดีใหม่</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_8" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_8" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_8" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_8" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_8" value="1"></td>
										</tr>
										<tr>
											<td class="tg-0lax">3.9</td>
											<td class="tg-0lax">ท่านมีสิทธิได้รับการเยียวยาจากรัฐ หากเป็นผลมาจากความบกพร่องหรือผิดพลาดจากการดำเนินการของกระบวนการยุติธรรม</td>
											<td class="tg-0laa"><input type="radio" id="2341" name="S2_3_9" value="5"></td>
											<td class="tg-0laa"><input type="radio" id="2342" name="S2_3_9" value="4"></td>
											<td class="tg-0laa"><input type="radio" id="2343" name="S2_3_9" value="3"></td>
											<td class="tg-0laa"><input type="radio" id="2344" name="S2_3_9" value="2"></td>
											<td class="tg-0laa"><input type="radio" id="2345" name="S2_3_9" value="1"></td>
										</tr>
										
									</tbody>
								</table>
							</div>

							<div class="row">
								<label for="25" class="col-form-label">4.ท่านคิดว่าประเด็นเกี่ยวกับกฎหมายหรือกระบวนการยุติธรรมในเรื่องใดที่หน่วยงานในกระบวนการยุติธรรมต้องมีการพัฒนา/ปรับปรุง เพื่อสร้างความเชื่อมั่นให้กับประชาชน  </label>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<textarea type="text" id="24" class="form-control" rows="3" name="S2_4_TEXT"></textarea>
								</div>
							</div>
							<div class="row">
								<label for="25" class="col-form-label">5.กฎหมายใดที่ท่านเห็นว่าจำเป็น และมีความต้องการรับรู้ </label>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<textarea type="text" id="25" class="form-control" rows="3" name="S2_5_TEXT"></textarea>
								</div>
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