<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>確计沮</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>竚<a href="ReData.php">確计沮</a></td>
  </tr>
</table>
<form name="ebakredata" method="post" action="phomebak.php" onsubmit="return confirm('絋粄璶確');">
  <table width="70%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
    <tr> 
      <td width="34%" height="25"><strong><font color="#FFFFFF">確计沮</font></strong> 
        <input name="phome" type="hidden" id="phome" value="ReData"></td>
      <td width="66%" height="25">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">確计沮方ヘ魁</td>
      <td height="25"> 
        <?=$bakpath?>
        / 
        <input name="mypath" type="text" id="mypath" value="<?=$mypath?>"> <input type="button" name="Submit2" value="匡拒ヘ魁" onclick="javascript:window.open('ChangePath.php?change=1','','width=750,height=500,scrollbars=yes');"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" valign="top">璶旧计沮畐</td>
      <td height="25"> <select name="add[mydbname]" size="23" id="add[mydbname]" style="width=260">
          <?=$db?>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">確匡兜</td>
      <td height="25">–舱確丁筳 
        <input name="add[waitbaktime]" type="text" id="add[waitbaktime]" value="0" size="2">
        </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="2"> <div align="left"> 
          <input type="submit" name="Submit" value="秨﹍確">
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>