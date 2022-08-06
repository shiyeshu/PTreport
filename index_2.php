<?php  
@$system_name=$_POST[system_name];
@$level1=$_POST[level1];
@$level2=$_POST[level2];
@$level3=$_POST[level3];
$zongshu="$_POST[level1]"+"$_POST[level2]"+"$_POST[level3]";

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>第二步骤</title>
<link href="./css/jquery.searchableselect.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.11.1.min.js"></script>
<script src="./js/jquery.searchableselect.js"></script>
<link rel="stylesheet" href="./css/layui.css">
</head>
<body>

<!--<form action="index_3.php" method="POST" id="form">-->

<div class="layui-row" style="margin-top: 10vh;margin-left: 10vw;">
  <div class="layui-col-md4">
<?php 
include "config/config.php";
				


	$sql = "SELECT * FROM message  ORDER BY id ";
	
	$result = mysqli_query($conn, $sql);
	echo '<select  id="value">';
	if (mysqli_num_rows($result) > 0) {

	    while($row = mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
			
			
			}
			
	}
	echo '<option value="999">无</option>';
	echo '</select><br><br>';	
	
	?>
<div class="layui-btn-container" style="margin: 30px;">
<input class="layui-btn"  onclick="tijiao()" value="提交"/>
<a src="#"  class="layui-btn" onclick="go()">添加</a></div>
<div class=""style="z-index: -999;">
  <div class="layui-bg-gray" style="padding: 20px;">
	 
说明：<br>
1、点击下拉栏，直接选择或搜索所需要的漏洞。<br>
2、点击添加，将所选漏洞添加到右侧待选区。<br>
3、点击提交，开始生成渗透报告。<br>
<p style="color: red;">4、如漏洞库中未搜索到数据，请在框内输入“未记录”并选择。系统将生成一个空白的模板。<p>
  </div>
</div>
 </div>
<div class="layui-col-md4 layui-col-md-offset4">	 
<form  class="layui-btn-container" action="index_3.php" method="POST" id="form1" name="VALUE[]" >	
<input name="level1" type="text" value="<?php echo $level1;?>" style="display:none">
<input  name="level2" type="text" value="<?php echo $level2;?>" style="display:none">
<input name="level3" type="text" value="<?php echo $level3;?>" style="display:none">
<input name="system_name" type="text" value="<?php echo $system_name;?>" style="display:none">
</form>
</div>


<script>
		$(function(){
			$('select').searchableSelect();
		});
    </script>
	
	
<script type="text/javascript">

			//var zhi=id.options[selectedIndex].value;
			function go() {
			var id=document.getElementById("value").value;
			var form1=document.getElementsByName("level1");
				var input= document.createElement("input");
				input.setAttribute("value", id);
				input.setAttribute("name", "VALUE[]");
				input.setAttribute("class", 'layui-btn layui-btn-warm');
				document.getElementById('form1').appendChild(input);
				//document.body.appendChild(input);

			}
	function tijiao(){
	    document.getElementById("form1").submit();  
	}

		</script>
</body>
</html>