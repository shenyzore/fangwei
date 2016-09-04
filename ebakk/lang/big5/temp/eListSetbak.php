<?php
if(!defined('InEmpireBak'))
{
	exit();
}
$onclickword='(翴阑锣称计沮)';
$change=(int)$_GET['change'];
if($change==1)
{
	$onclickword='(翴阑匡拒)';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>恨瞶称玂砞竚</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangeSet(filename)
{
	var ok=confirm("絋粄璶旧?");
	if(ok)
	{
		opener.parent.ebakmain.location.href='ChangeTable.php?mydbname=<?=$mydbname?>&savefilename='+filename;
		window.close();
	}
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>竚<a href="ListSetbak.php">恨瞶称砞竚</a>&nbsp;(ヘ魁<b>setsave</b>)</td>
  </tr>
</table>
<br>
<table width="500" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#0472BC"> 
    <td width="63%" height="25" bgcolor="#0472BC"> <div align="center"><strong><font color="#FFFFFF">玂砞竚ゅン<?=$onclickword?></font></strong></div></td>
    <td width="37%"><div align="center"><font color="#FFFFFF">巨</font></div></td>
  </tr>
  <?php
  while($file=@readdir($hand))
  {
  	if($file!="."&&$file!=".."&&is_file("setsave/".$file))
	{
		if($change==1)
		{
			$showfile="<a href='#ebak' onclick=\"javascript:ChangeSet('$file');\" title='$file'>$file</a>";
		}
		else
		{
			$showfile="<a href='phome.php?phome=SetGotoBak&savename=$file' title='$file'>$file</a>";
		}
		//纐粄砞竚
		if($file=='def')
		{
			if(empty($change))
			{
				$showfile=$file;
			}
			$showdel="<b>纐粄砞竚</b>";
		}
		else
		{
			$showdel="<a href=\"phome.php?phome=DoDelSave&mydbname=$mydbname&change=$change&savename=$file\" onclick=\"return confirm('絋粄璶埃');\">埃砞竚</a>";
		}
  ?>
  <tr bgcolor="#DBEAF5"> 
    <td height="25"> <div align="left"><img src="images/txt.gif" width="19" height="16">&nbsp; 
        <?=$showfile?> </div></td>
    <td><div align="center">&nbsp;[<?=$showdel?>]</div></td>
  </tr>
  <?
     }
  }
  ?>
  <tr> 
    <td height="25" colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>