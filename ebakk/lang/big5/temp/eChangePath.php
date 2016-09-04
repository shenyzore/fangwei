<?php
if(!defined('InEmpireBak'))
{
	exit();
}
$onclickword='(翴阑锣確计沮)';
$change=(int)$_GET['change'];
if($change==1)
{
	$onclickword='(翴阑匡拒)';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>恨瞶称ヘ魁</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangePath(pathname)
{
	opener.document.<?=$form?>.mypath.value=pathname;
	window.close();
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>竚<a href="ChangePath.php">恨瞶称ヘ魁</a>&nbsp;(ヘ魁<b><?=$bakpath?></b>)</td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#0472BC"> 
    <td width="42%" height="25" bgcolor="#0472BC"> <div align="center"><strong><font color="#FFFFFF">称ヘ魁<?=$onclickword?></font></strong></div></td>
    <td width="16%" height="25"> <div align="center"><strong><font color="#FFFFFF">琩弧ゅン</font></strong></div></td>
    <td width="42%"><div align="center"><font color="#FFFFFF">巨</font></div></td>
  </tr>
  <?php
  while($file=@readdir($hand))
  {
	if($file!="."&&$file!=".."&&is_dir($bakpath."/".$file))
	{
		if($change==1)
		{
			$showfile="<a href='#ebak' onclick=\"javascript:ChangePath('$file');\" title='$file'>$file</a>";
		}
		else
		{
			$showfile="<a href='phome.php?phome=PathGotoRedata&mypath=$file' title='$file'>$file</a>";
		}
  ?>
  <tr bgcolor="#DBEAF5"> 
    <td height="25"> <div align="left"><img src="images/dir.gif" width="19" height="15">&nbsp; 
        <?=$showfile?> </div></td>
    <td height="25"> <div align="center"> [<a href="<? echo $bakpath."/".$file."/readme.txt"?>" target=_blank>琩称弧</a>]</div></td>
    <td><div align="center">[<a href="#ebak" onclick="window.open('phome.php?phome=DoZip&p=<?=$file?>&change=<?=$change?>','','width=350,height=160');">ゴ更</a>]&nbsp;&nbsp;[<a href="RepFiletext.php?mypath=<?=$file?>">蠢传ゅンず甧</a>]&nbsp;&nbsp;[<a href="phome.php?phome=DelBakpath&path=<?=$file?>&change=<?=$change?>" onclick="return confirm('絋粄璶埃');">埃ヘ魁</a>]</div></td>
  </tr>
  <?
     }
  }
  ?>
  <tr> 
    <td height="25" colspan="3"><font color="#666666">(弧狦称ヘ魁ゅン耕某钡眖FTP更称ヘ魁)</font></td>
  </tr>
</table>
</body>
</html>