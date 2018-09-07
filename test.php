
<!doctype html>
<html class="">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>เพื่อนชุมชน</title>
    <!-- Insert to your webpage before the </head> -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-ical.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="js/master.css" type="text/css">
    <!-- End of head section HTML codes -->
    <script type="text/javascript">
$(document).ready(function(){	
	$("#ical").ical({
	eventdates: [
			{'date' : 'yyyy-01-01','title' : 'วันขึ้นปีใหม่','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-04-06','title' : 'วันจักรี','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-04-13','title' : 'วันสงกรานต์','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-04-14','title' : 'วันสงกรานต์','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-04-15','title' : 'วันสงกรานต์','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-05-01','title' : 'วันแรงงานแห่งชาติ','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-05-05','title' : 'วันฉัตรมงคล','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-05-13','title' : 'วันพืชมงคล','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-08-12','title' : 'วันแม่','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-10-23','title' : 'วันปิยมหาราช','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-12-05','title' : 'วันพ่อแห่งชาติ','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-12-10','title' : 'วันพระราชทานรัฐธรรมนูญ','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : 'yyyy-12-31','title' : 'วันสิ้นปี','desc' : '','type' : '','time' : '','place' : ''},
			{'date' : '2018-03-04','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'วัดหนองผักหนาม   '},
			{'date' : '2018-03-11','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : '','type' : '1','time' : '08.30  -  12.00','place' : 'เทศบาลตำบลทับมา'},
			{'date' : '2018-03-18','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'ศูนย์บริการสาธารณสุขห้วยโป่ง'},
			{'date' : '2018-04-29','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'ศาลเจ้าแม่จันเท มาบตาพุด'},
			{'date' : '2018-05-06','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'โรงเรียนวัดบ้านฉาง'},
			{'date' : '2018-05-27','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'วัดหนองแฟบ '},
			{'date' : '2018-06-10','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'โรงเรียนวัดชากลูกหญ้า'},
			{'date' : '2018-06-24','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ณ ศูนย์พัฒนาเด็กเล็กเทศบาลต.มาบข่าพัฒนา','type' : '1','time' : '08.30  -  12.00','place' : 'ศูนย์พัฒนาเด็กเล็กเทศบาลมาบข่า'},
			{'date' : '2018-07-01','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : ' ณ ศูนย์บริการสาธารณสุขตากวน','type' : '1','time' : '08.30  -  12.00','place' : 'ศูนย์บริการสาธารณสุขตากวน'},
			{'date' : '2018-07-22','title' : 'หน่วแพทย์เคลื่อนที่','desc' : 'ณ วัดกรอกยายชา','type' : '1','time' : '08.30  -  12.00','place' : 'วัดกรอกยายชา'},
			{'date' : '2018-08-05','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ณ โรงเรียนวัดเนินพระ','type' : '1','time' : '08.30  -  12.00','place' : 'โรงเรียนวัดเนินพระ'},
			{'date' : '2018-09-02','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ด้านสุขภาพ','type' : '1','time' : '08.30  -  12.00','place' : 'วัดประชุมมิตรบำรุง'},
		
			{'date' : '2018-09-09','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ณ มัสยิดยามี้อุลมุตาดี','type' : '1','time' : '08.30  -  12.00','place' : 'มัสยิดยามี้อุลมุตาดี'},
		
			{'date' : '2018-06-28','title' : 'ปฐมนิเทศพยาบาลรุ่น4','desc' : 'ปฐมนิเทศพยาบาลทุนเพือนชุมชนรุ่น 4','type' : '1','time' : '08.30  -  16.00','place' : 'โรงแรมโนโวเทล ระยอง'},
			{'date' : '2018-08-06','title' : 'เพื่อนชุมชนนติวเตอร์','desc' : '','type' : '1','time' : '','place' : 'อ.เมืองระยอง,อ.บ้านค่าย'},
			{'date' : '2018-08-20','title' : 'เพื่อนชุมชนนติวเตอร์','desc' : '','type' : '1','time' : '','place' : 'อ.นิคมพัฒนา,อ.ปลวกแดง'},
			{'date' : '2018-10-07','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ณ วัดภูดร','type' : '1','time' : '08.30  -  12.00','place' : 'วัดภูดร'},
			{'date' : '2018-11-11','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ณ วัดพลา','type' : '1','time' : '08.30  -  12.00','place' : 'วัดพลา'},
			{'date' : '2018-11-18','title' : 'หน่วยแพทย์เคลื่อนที่','desc' : 'ณ ศูนย์อภิบาลผู้สูงอายุวัดมาบชลูด','type' : '1','time' : '08.30  -  12.00','place' : 'ศูนย์อภิบาลผู้สูงอายุวัดมาบชลู'},							
				]
			});
		});
</script>
</head>
<body >
	<div class="main-sub">
		 <div class="content-body"><!-- กว้าง 960  -->
			<div class="news-cal">
				<div id="ical"></div>	
			</div>
		</div>	<!-- content-body -->
	</div>	<!-- main-sub -->


</body>
</html>