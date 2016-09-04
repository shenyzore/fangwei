<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>琿</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangeAutoField(f)
{
	var tbname="<?=$mytbname?>";
	var chstr=tbname+"."+f;
	var r;
	var dh=",";
	var a;
	a=opener.document.<?=$form?>.autofield.value;
	r=a.split(chstr);
	if(r.length!=1)
	{return true;}
	if(a=="")
	{
		dh="";
	}
	opener.document.<?=$form?>.autofield.value+=dh+chstr;
	window.close();
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>竚<b>
      <?=$mydbname?>
      .
      <?=$mytbname?>
      </b> 琿&nbsp;<font color="#666666">(翴阑琿埃糤琿)</font></td>
  </tr>
</table>
<br>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
  <tr> 
    <td height="27"> <div align="center"><font color="#FFFFFF">琿</font></div></td>
    <td><div align="center"><font color="#FFFFFF">琿摸</font></div></td>
    <td><div align="center"><font color="#FFFFFF">琿妮┦</font></div></td>
    <td><div align="center"><font color="#FFFFFF">纐粄</font></div></td>
    <td><div align="center"><font color="#FFFFFF">妮┦</font></div></td>
  </tr>
  <?php
  while($r=$empire->fetch($sql))
  {
	$r[Field]="<a href='#ebak' onclick=\"ChangeAutoField('".$r[Field]."');\" title='埃糤琿'>$r[Field]</a>";
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td height="27"> <div align="center">
        <?=$r[Field]?>
      </div></td>
    <td> <div align="center">
        <?=$r[Type]?>
      </div></td>
    <td> <div align="center">
        <?=$r[Key]?>
      </div></td>
    <td> <div align="center">
        <?=$r['Default']?>
      </div></td>
    <td> <div align="center">
        <?=$r[Extra]?>
      </div></td>
  </tr>
  <?
  }
  ?>
</table>
<br>
</body>
</html>