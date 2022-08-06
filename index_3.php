 <?php 

@$system_name=$_POST[system_name];
@$level1=$_POST[level1];
@$level2=$_POST[level2];
@$level3=$_POST[level3];
$zongshu="$level1"+"$level2"+"$level3";

$hobby = $_REQUEST['VALUE'];
$okvalue=implode(",",$hobby);
//print_r($okvalue);
//echo array_values($hobby);





/*
include "config/config.php";
$Query = 'select count(*) as level from message where id in(1,2,3,4,5,6) group by level';
$a     = mysqli_query( $conn, $Query );
//$b = mysqli_fetch_array($a);
//print_r($a);
while ($b = mysqli_fetch_array($a));
{
$tr_list[$b['id']] .="$b[level]";
}

echo "$tr_list[0]";
echo "$tr_list[2]";

//print_r($b['level']) ;
echo '<br>11111111111111111111111111111111111111';

有时间再写吧
这个功能是查询不同level然后输出各个分组条数的
这样就能第一步的时候不再输入高中低数量，全面实现自动化
*/




 ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="generator" content="Aspose.Words for .NET 15.1.0.0" />
    <title></title>
</head>

<body>
    <div>
        <p style="font-size:16pt; line-height:115%; margin:24pt 0pt 0pt"><a name="_Toc522131618"><span
                    style="font-family:黑体; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt"><h3>附录</h3></span></a><span
                style="font-family:'Times New Roman'; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt">F</span>
        </p>
        <p style="font-size:16pt; line-height:115%; margin:0pt"><span
                style="font-family:黑体; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt"><h3>测试情况</h3></span>
        </p>
        <table cellspacing="0" cellpadding="0" style="border-collapse:collapse; margin-left:0pt; width:426.85pt">
			<tr style="height:26.65pt">
			<td
                    style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:116.55pt">
                    <p style="margin:0pt; orphans:0; text-align:center; widows:0"><span
                            style="font-family:宋体; font-size:10.5pt; font-weight:bold">系统名称</span></p>
                </td>
                <td
                    style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:60.05pt">
                    <p style="margin:0pt; orphans:0; text-align:center; widows:0"><span
                            style="font-family:宋体; font-size:10.5pt; font-weight:bold">高危风险</span></p>
                </td>
                <td
                    style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:67.2pt">
                    <p style="margin:0pt; orphans:0; text-align:center; widows:0"><span
                            style="font-family:宋体; font-size:10.5pt; font-weight:bold">中</span><span
                            style="font-family:宋体; font-size:10.5pt; font-weight:bold">危风险</span></p>
                </td>
                <td
                    style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:67.15pt">
                    <p style="margin:0pt; orphans:0; text-align:center; widows:0"><span
                            style="font-family:宋体; font-size:10.5pt; font-weight:bold">低危风险</span></p>
                </td>
                <td
                    style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:61.15pt">
                    <p style="margin:0pt; orphans:0; text-align:center; widows:0"><span
                            style="font-family:宋体; font-size:10.5pt; font-weight:bold">合计</span></p>
                </td></tr>
	<?php
echo "     
<tr style='height:26.65pt'>
<td
	style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:116.55pt'>
	<p style='margin:0pt; orphans:0; text-align:center; widows:0'><span
			style='font-family:宋体; font-size:10.5pt; font-weight:bold'>$system_name</span></p>
</td>
<td
	style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:60.05pt'>
	<p style='margin:0pt; orphans:0; text-align:center; widows:0'><span
			style='font-family:Calibri; font-size:10.5pt; font-weight:bold'>$level1</span></p>
</td>
<td
	style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:67.2pt'>
	<p style='margin:0pt; orphans:0; text-align:center; widows:0'><span
			style='font-family:Calibri; font-size:10.5pt; font-weight:bold'>$level2</span></p>
</td>
<td
	style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:67.15pt'>
	<p style='margin:0pt; orphans:0; text-align:center; widows:0'><span
			style='font-family:Calibri; font-size:10.5pt; font-weight:bold'>$level3</span></p>
</td>
<td
	style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:61.15pt'>
	<p style='margin:0pt; orphans:0; text-align:center; widows:0'><span
			style='font-family:Calibri; font-size:10.5pt; font-weight:bold'>$zongshu</span></p>
</td>
</tr>
	  ";?>
</table>
<p style="font-size:16pt; line-height:115%; margin:24pt 0pt 10pt 21pt; text-indent:-21pt"><span
                style="font-family:'Times New Roman'; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt"><h3>F.1</span><span
                style="font:7.0pt 'Times New Roman'">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><span
                style="font-family:黑体; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt">漏洞统计列表</h3></span>
        </p>
		<div style="text-align:center">
		<table cellspacing="0" cellpadding="0" style="border-collapse:collapse; margin:0 auto; width:425.75pt">
                <tr>
                    <td
                        style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:top; width:52.75pt">
                        <p
                            style="font-size:10.5pt; line-height:150%; margin:0pt; orphans:0; text-align:center; widows:0">
                            <span style="font-family:宋体; font-size:10.5pt; font-weight:bold">序号</span></p>
                    </td>
                    <td
                        style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:top; width:244.35pt">
                        <p
                            style="font-size:10.5pt; line-height:150%; margin:0pt; orphans:0; text-align:center; widows:0">
                            <span style="font-family:宋体; font-size:10.5pt; font-weight:bold">漏洞名称</span></p>
                    </td>
                    <td
                        style="background-color:#a6a6a6; border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:top; width:95.5pt">
                        <p
                            style="font-size:10.5pt; line-height:150%; margin:0pt; orphans:0; text-align:center; widows:0">
                            <span style="font-family:宋体; font-size:10.5pt; font-weight:bold">风险级别</span></p>
                    </td>
                </tr>

			<?php 

include "config/config.php";
			
$sql = "SELECT * FROM message where id in($okvalue) ORDER BY level ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// 输出数据
	$i=1;$i<$zongshu+1;
    while($row = mysqli_fetch_assoc($result)) {	
		switch ($row["level"]) {
			case 1:
				$level_color='#FF0000';
				$level_text='高危';
				break;
			case 2:
				$level_color='#ffc000';
				$level_text='中危';
				break;
			case 3:
				$level_color='#00CD00';
				$level_text='低危';
				break;
			
		}
		echo "
		<tr>
		<td
			style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:top; width:52.75pt'>
			<p
				style='font-size:10.5pt; line-height:150%; margin:0pt; orphans:0; text-align:center; widows:0'>
				<span style='font-family:Calibri; font-size:10.5pt; font-weight:bold'>$i</span></p>
		</td>
		<td
			style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:middle; width:244.35pt'>
			<p
				style='font-size:12pt; line-height:150%; margin:0pt; orphans:0; text-align:justify; widows:0'>
				<span style='font-family:宋体; font-size:12pt'>{$row["name"]}</span></p>
		</td>
		<td
			style='border-bottom-color:#000000; border-bottom-style:solid; border-bottom-width:0.75pt; border-left-color:#000000; border-left-style:solid; border-left-width:0.75pt; border-right-color:#000000; border-right-style:solid; border-right-width:0.75pt; border-top-color:#000000; border-top-style:solid; border-top-width:0.75pt; padding-left:5.03pt; padding-right:5.03pt; vertical-align:top; width:95.5pt'>
			<p
				style='font-size:10.5pt; line-height:150%; margin:0pt; orphans:0; text-align:center; widows:0'>
				<span style='color:$level_color; font-family:宋体; font-size:10.5pt'>$level_text</span></p>
		</td>
	</tr>
";
$i++;
		//echo '</tr>';
				
    }
}else {
    echo "数据库中无结果";
}
	
			?>

</table>
</div>
        <p style="font-size:16pt; line-height:115%; margin:24pt 0pt 0pt 21pt; text-indent:-21pt"><span
                style="font-family:'Times New Roman'; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt"><h3>F.2</span><span
                style="font:7.0pt 'Times New Roman'">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><span
                style="font-family:黑体; font-size:16pt; font-variant:small-caps; font-weight:bold; letter-spacing:0.25pt">测试结果详述</h3></span>
        </p>
<?php
   $sql = "SELECT * FROM message where id in($okvalue) ORDER BY level";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// 输出数据
	$i=1;$i<5;
    while($row = $result->fetch_assoc()) {

		switch ($row["level"]) {
			case 1:
				$level_color='#FF0000';
				$level_text='高危';
				break;
			case 2:
				$level_color='#EEEE00';
				$level_text='中危';
				break;
			case 3:
				$level_color='#00CD00';
				$level_text='低危';
				break;								
		}
		
echo "
<p style='font-size:15pt; line-height:113%; margin:0pt 0pt 10pt; text-indent:0pt'><span
                style='font-family:'Times New Roman'; font-size:15pt; font-style:normal; font-variant:small-caps; font-weight:bold'><h3>F.2.$i</span><span
                style='font:7.0pt 'Times New Roman''>&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><a name='_Toc522131629'><span
                    style='background-color:#ffffff; font-family:黑体; font-size:15pt; font-weight:normal;font-weight:bold;'>{$row["name"]}</span><span
                    style='font-family:黑体; font-size:15pt; font-variant:small-caps; font-weight:bold'>（$level_text ）</h3></span></a>
        </p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt; font-weight:bold'>问题描述：</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='background-color:#ffffff; font-family:宋体; font-size:12pt'>{$row["miaoshu"]}</span>
        </p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt; font-weight:bold'>风险等级：</span><span
                style='color:$level_color; font-family:宋体; font-size:12pt; font-weight:bold'>$level_text</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt; font-weight:bold'>风险分析：</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='background-color:#ffffff; font-family:宋体; font-size:12pt'>{$row["fenxi"]}</span>
        </p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt; font-weight:bold'>测试过程：</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt'>漏洞url：</span><span
                style='font-family:宋体; font-size:12pt'>{$row["url"]}</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt'>测试流程：</span><span
                style='font-family:宋体; font-size:12pt'>@@@@流程@@@@</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='font-family:宋体; font-size:12pt; font-weight:bold'>安全建议：</span></p>
        <p style='font-size:12pt; line-height:150%; margin:0pt; text-indent:21pt'><span
                style='background-color:#ffffff; font-family:宋体; font-size:12pt'>{$row["jianyi"]}</span></p>
        <p style='margin:0pt; orphans:0; text-align:justify; widows:0'><span
                style='font-family:宋体; font-size:12pt; font-weight:bold'>&#xa0;</span></p>




";
	$i++;

}
}else {
    echo "数据库中无结果";
}

?>
</div>


</body>
<style>
		.bg {
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			position: fixed;
			top: 0;
			left: 0;
			z-index: -1;
			height: 100vh;
			width: 100vw;
		}

</style>
<script>

	alert("报告生成完毕，请ctrl+a全选复制到word内。注意，此报告并不可直接作为最终文档使用，请结合实际情况进行修改。");
	
</script>
</html>