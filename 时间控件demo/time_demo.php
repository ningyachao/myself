<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>测试</title>
    <script type="text/javascript" src="/WdatePicker.js"></script>
    <script src="/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<body>
<form action="" method="post" id="subform"">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="46" height="40">&nbsp;</td>
                    <td onclik="test()">交货日期：</td>
                    <td colspan="4">
                        <input class="Wdate" type="text" readonly='readonly' name="put_time" id="delivery" value="2015-12-12"/>
                        &nbsp;

                    </td>
                </tr>
                <tr>
                    <td width="46" height="40">&nbsp;</td>
                    <td>测量日期：</td>
                    <td colspan="4">
                        <input  class="Wdate" type="text" readonly='readonly' name="measure_time" id="survey"/>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="46" height="40">&nbsp;</td>
                    <td>安装日期：</td>
                    <td colspan="4">
<input id="d411" name="install" class="Wdate" type="text" readonly='readonly' onfocus="WdatePicker({skin:'whyGreen',dateFmt: 'yyyy-MM-dd HH:mm:ss' })"/>
                    </td>
                </tr>
		<tr>
		<td colspan="4">
		<input type="submit">
		</td>
		</tr>
    </table>
</form>
</body>
<script type="text/javascript">
/*单击交货文本框弹出时间控件
起始时间:今天
终止时间:当前时间30天后
*/
$("#delivery").click(function(){
WdatePicker({ minDate:'%y-%M-%d',maxDate: '%y-%M-#{%d+30}'});
});
/*单击测量文本框弹出控件
起始时间:以交货时间为准
终止时间:交货时间30天后
*/
$("#survey").click(function(){
var mintime = $dp.$('delivery');
WdatePicker({ minDate:'#F{$dp.$D(\'delivery\');}',maxDate: '#F{$dp.$D(\'delivery\',{d:30});}'});
});
</script>
</html>
<?php
//查看 页面提交的数据是否有误
if(!empty($_POST))
{
	foreach($_POST as $val)
	{
		echo $val."<br/>";
	}
}
?>



