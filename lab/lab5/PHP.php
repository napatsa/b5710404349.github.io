<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	background-color:black;
}
button {
    background-color: #FF0;
    border: none;
    color: #000;
    padding: 5px 27px;
    text-align: center;
    text-decoration: none;
    border: 2px solid #555555;
    font-size: 10px;
    cursor: pointer;
	font-weight: bold;
}



</style>
</head>

<body>
<?php
$firstLast="";
$text="";
$picture="";
if(isset($_POST['submit']))
{
	$maker = $_POST['province']; // get the selected text
	$gender = $_POST['gender'];
	$provinceTxt = "Province/motto/$maker.txt";
	$provincePng = "Province/sign/$maker.png";
    $tis620 = iconv("utf-8", "tis-620", $provinceTxt);
	$myfile = fopen($tis620, "r") or die("Unable to open file!");
	$context = fread($myfile,filesize($tis620));
	$text=$context;
	fclose($myfile);
	$picture = $provincePng;
	$date=date("Y")-13;
	$birth=$_POST['birth'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	if(substr($birth,0,4)>$date){
		$firstLast = "Welcome . . ".$first."  ".$last;
		echo '<style> 
		body {
		background:url(BG.jpg);
		background-size: 100% 100%;
    	background-repeat: no-repeat;
		text-align:center;
		min-height: 800px;
		}
		div {
    	color: #000;
		background-color: white;
		text-align:center;
		opacity: 0.9;
		border: 2px solid #555555;
		}
		</style>';
	}
	if($gender=="male"){
		echo '<style> 
		body {
		background-color:black;
		text-align:center;
		}
		div {
    	color: black;
		background-color: white;
		text-align:center;
		opacity: 0.6;
		}
		</style>';
	}
	if($gender=="female"){
		echo '<style> 
		body {
		background-color: #FCF;
		text-align:center;
		}
		div {
    	color: #FF4040;
		background-color: white;
		text-align:center;
		opacity: 0.6;
		}
		</style>';
	}
}
?>
<h2 id="div0"><?php echo $firstLast; ?></h2><br style="display:none"/>
<h3 id="namePrv"></h3><br style="display:none"/>
<div id="div1"><img src ="<?php echo $picture; ?>" /></div><br style="display:none"/>

<form id="frm1" method="POST">
<div id="page" <?php if (isset($_POST['submit'])){ echo 'style="display:none;"'; } ?>>
<div style="color:white">Firstname: <input type="text" id="first" name="first" /></div><br />
<div style="color:white">Lastname: <input type="text" id="last" name="last" /></div><br />
<div style="color:white">Birthday: <input type="date" id="birth" name="birth" /></div><br />
<div style="color:white">Gender: <select id="gender" name="gender">
<option id="male">male</option>
<option id="female">female</option>
</select>
</div><br />
<div style="color:white">จังหวัด: <select name="province" id="จังหวัด" ><br />
  	  <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่</option>
      <option value="กาญจนบุรี">กาญจนบุรี </option>
      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
      <option value="กำแพงเพชร">กำแพงเพชร</option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
      <option value="ชัยนาท">ชัยนาท </option>
      <option value="ชัยภูมิ">ชัยภูมิ </option>
      <option value="ชุมพร">ชุมพร </option>
      <option value="ชลบุรี">ชลบุรี </option>
      <option value="เชียงใหม่">เชียงใหม่ </option>
      <option value="เชียงราย">เชียงราย </option>
      <option value="ตรัง">ตรัง </option>
      <option value="ตราด">ตราด </option>
      <option value="ตาก">ตาก </option>
      <option value="นครนายก">นครนายก </option>
      <option value="นครปฐม">นครปฐม </option>
      <option value="นครพนม">นครพนม </option>
      <option value="นครราชสีมา">นครราชสีมา </option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
      <option value="นครสวรรค์">นครสวรรค์ </option>
      <option value="นราธิวาส">นราธิวาส </option>
      <option value="น่าน">น่าน </option>
      <option value="นนทบุรี">นนทบุรี </option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
      <option value="ปทุมธานี">ปทุมธานี </option>
      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
      <option value="ปัตตานี">ปัตตานี </option>
      <option value="พะเยา">พะเยา </option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
      <option value="พังงา">พังงา </option>
      <option value="พิจิตร">พิจิตร </option>
      <option value="พิษณุโลก">พิษณุโลก </option>
      <option value="เพชรบุรี">เพชรบุรี </option>
      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
      <option value="แพร่">แพร่ </option>
      <option value="พัทลุง">พัทลุง </option>
      <option value="ภูเก็ต">ภูเก็ต </option>
      <option value="มหาสารคาม">มหาสารคาม </option>
      <option value="มุกดาหาร">มุกดาหาร </option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
      <option value="ยโสธร">ยโสธร </option>
      <option value="ยะลา">ยะลา </option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
      <option value="ระนอง">ระนอง </option>
      <option value="ระยอง">ระยอง </option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี </option>
      <option value="ลำปาง">ลำปาง </option>
      <option value="ลำพูน">ลำพูน </option>
      <option value="เลย">เลย </option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา </option>
      <option value="สมุทรสาคร">สมุทรสาคร </option>
      <option value="สมุทรปราการ">สมุทรปราการ </option>
      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
      <option value="สระแก้ว">สระแก้ว </option>
      <option value="สระบุรี">สระบุรี </option>
      <option value="สิงห์บุรี">สิงห์บุรี </option>
      <option value="สุโขทัย">สุโขทัย </option>
      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
      <option value="สุรินทร์">สุรินทร์ </option>
      <option value="สตูล">สตูล </option>
      <option value="หนองคาย">หนองคาย </option>
      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
      <option value="อุดรธานี">อุดรธานี </option>
      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
      <option value="อุทัยธานี">อุทัยธานี </option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
      <option value="อ่างทอง">อ่างทอง </option>
</select>

</div><br />
<button id="submit" type="submit" name="submit" >Submit</button> &ensp;
<button type="button" id="cancel" onclick="reset()">Cancel</button> &ensp;

</div><br /><br />
</form>

<div id="div2"><?php echo $text;?></div>


</body>
</html>