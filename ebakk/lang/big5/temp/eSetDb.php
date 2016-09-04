<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>把计砞竚</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangeSet(cset){
	if(cset=="setuser")
	{
		setdb.style.display="none";
		setuser.style.display="";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
	}
	else if(cset=="setck")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="";
		//setlang.style.display="none";
		setother.style.display="none";
	}
	else if(cset=="setlang")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="";
		setother.style.display="none";
	}
	else if(cset=="setother")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="";
	}
	else
	{
		setdb.style.display="";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
	}
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>竚<a href="SetDb.php">把计砞竚</a></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
  <tr bgcolor="#FFFFFF"> 
    <td width="20%" height="23" id="dbtd" onmouseover="this.style.backgroundColor='#DBEAF5'" onmouseout="this.style.backgroundColor='#ffffff'"> 
      <div align="center"><strong><a href="#ebak" onclick="javascript:ChangeSet('setdb');">计沮畐砞竚</a></strong></div></td>
    <td width="20%" onmouseover="this.style.backgroundColor='#DBEAF5'" onmouseout="this.style.backgroundColor='#ffffff'"> 
      <div align="center"><strong><a href="#ebak" onclick="javascript:ChangeSet('setuser');">眀腹砞竚</a></strong></div></td>
    <td width="20%" onmouseover="this.style.backgroundColor='#DBEAF5'" onmouseout="this.style.backgroundColor='#ffffff'"> 
      <div align="center"><strong><a href="#ebak" onclick="javascript:ChangeSet('setck');">COOKIE砞竚</a></strong></div></td>
    <td width="20%" onmouseover="this.style.backgroundColor='#DBEAF5'" onmouseout="this.style.backgroundColor='#ffffff'"> 
      <div align="center"><strong><a href="#ebak" onclick="javascript:ChangeSet('setother');">ㄤウ砞竚</a></strong></div></td>
  </tr>
</table>
<form name="form1" method="post" action="phome.php">
  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC" id="setdb">
    <tr> 
      <td height="25" colspan="2"><font color="#FFFFFF"><strong>计沮畐砞竚 
        <input name="phome" type="hidden" id="phome" value="SetDb">
        </strong></font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><strong>MYSQLセ</strong></td>
      <td height="25" bgcolor="#FFFFFF"><p> 
          <input type="radio" name="mysqlver" value="5.0"<?=$phome_db_ver=='5.0'?' checked':''?>>
          MYSQL5.*&nbsp;&nbsp; 
          <input type="radio" name="mysqlver" value="4.1"<?=$phome_db_ver=='4.1'?' checked':''?>>
          MYSQL 4.1.*&nbsp;&nbsp; 
          <input type="radio" name="mysqlver" value="4.0"<?=$phome_db_ver=='4.0'?' checked':''?>>
          MYSQL 4.0.*/3.*&nbsp;&nbsp; 
          <input type="radio" name="mysqlver" value="auto"<?=$phome_db_ver==''?' checked':''?>>
          笆匡拒</p></td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF"><strong>计沮畐狝叭竟</strong></td>
      <td width="76%" height="25" bgcolor="#FFFFFF"><input name="dbhost" type="text" id="dbhost" value="<?=$phome_db_server?>"> 
        <font color="#666666">(ゑlocalhost)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">计沮畐狝叭竟狠</td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbport" type="text" id="dbport" value="<?=$phome_db_port?>"> 
        <font color="#666666">(薄猵)</font> </td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><strong>计沮畐ノめ</strong></td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbusername" type="text" id="dbusername" value="<?=$phome_db_username?>"> 
        <font color="#666666">(ゑroot)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><strong>计沮畐盞絏</strong></td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbpassword" type="password" id="dbpassword">
        (<font color="#FF0000">ぃ稱э叫痙礚盞絏ノnullボ</font>)</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">纐粄称计沮畐</td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbname" type="text" id="dbname" value="<?=$phome_db_dbname?>"> 
        <font color="#666666">(,块计沮畐,称钡锣硂畐.) </font></td>
    </tr>
	<tr>
      <td height="25" bgcolor="#FFFFFF">纐粄称计沮玡后</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sbaktbpre" type="text" id="sbaktbpre" value="<?=$baktbpre?>">
        <font color="#666666">(┮Τ计沮.)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">纐粄絪絏</td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbchar" type="text" id="dbchar" value="<?=$phome_db_char?>"> 
        <font color="#666666"> 
        <select name="selectchar" onchange="document.form1.dbchar.value=this.value">
          <option value="">匡拒</option>
          <?php
				echo Ebak_ReturnDbCharList('');
				?>
        </select>
        (薄猵) </font></td>
    </tr>
  </table>
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC" id="setuser" style="display:none">
    <tr> 
      <td height="25" colspan="2"><strong><font color="#FFFFFF">眀腹砞竚</font></strong></td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">ノめ</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="adminusername" type="text" id="adminusername" value="<?=$set_username?>">
        <font color="#666666">(э璶穝祅魁)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">盞絏</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="adminpassword" type="password" id="adminpassword"> 
        <font color="#666666">(ぃ稱э叫痙)</font></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">粄靡絏</td>
      <td height="25" bgcolor="#FFFFFF"><input name="adminloginauth" type="text" id="adminloginauth" value="<?=$set_loginauth?>">
        <font color="#666666">(盞絏,ぃ砞竚)</font></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">喷靡繦诀絏</td>
      <td height="25" bgcolor="#FFFFFF"><input name="adminloginrnd" type="text" id="adminloginrnd" value="<?=$set_loginrnd?>">
        <font color="#666666">
        <input type="button" name="Submit3" value="繦诀" onclick="document.form1.adminloginrnd.value='<?=$loginauthrnd?>';">
        (э璶穝祅魁)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">禬</td>
      <td height="25" bgcolor="#FFFFFF"><input name="outtime" type="text" id="outtime" value="<?=$set_outtime?>">
        だ牧</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">祅魁琌惠璶喷靡絏</td>
      <td height="25" bgcolor="#FFFFFF"><input type="radio" name="loginkey" value="0"<?=$set_loginkey==0?' checked':''?>>
        琌 
        <input type="radio" name="loginkey" value="1"<?=$set_loginkey==1?' checked':''?>>
        </td>
    </tr>
  </table>
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC" id="setck" style="display:none">
    <tr> 
      <td height="25" colspan="2"><font color="#FFFFFF"><strong>COOKIE砞竚(硄盽ぃ惠璶э)</strong></font></td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">COOKIEノ办</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckdomain" type="text" id="ckdomain" value="<?=$phome_cookiedomain?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">COOKIEノ隔畖</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckpath" type="text" id="ckpath" value="<?=$phome_cookiepath?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">COOKIE跑秖玡后</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckvarpre" type="text" id="ckvarpre" value="<?=$phome_cookievarpre?>"></td>
    </tr>
	</table>
	
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC" id="setother" style="display:none">
    <tr> 
      <td height="25" colspan="2"><strong><font color="#FFFFFF">ㄤウ砞竚</font></strong></td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">计沮称ヘ魁</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sbakpath" type="text" id="sbakpath" value="<?=$bakpath?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">溃罽ヘ魁</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sbakzippath" type="text" id="sbakzippath" value="<?=$bakzippath?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">ゅンネΘ舦砞竚</td>
      <td height="25" bgcolor="#FFFFFF"><input type="radio" name="sfilechmod" value="0"<?=$filechmod0?>>
        0777 
        <input type="radio" name="sfilechmod" value="1"<?=$filechmod1?>>
        ぃ<font color="#666666">(狦丁ぃや笲︽0777.phpゅン,匡拒ぃ.)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">PHP笲︽家Α</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sphpsafemod" type="checkbox" id="sphpsafemod" value="1"<?=$phpsafemod==1?' checked':''?>>
        琌<font color="#666666">(狦笲︽家Α┮Τ计沮А称bdata/safemodヘ魁)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">PHP禬丁砞竚</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sphp_outtime" type="text" id="sphp_outtime" value="<?=$php_outtime?>" size="6">
         <font color="#666666">(ぃ惠璶砞竚惠璶set_time_limit()やΤ)</font></td>
    </tr>
    <tr> 
      <td rowspan="2" bgcolor="#FFFFFF"> <p>MYSQLや琩高よΑ</p></td>
      <td height="25" bgcolor="#FFFFFF"><input name="slimittype" type="checkbox" id="slimittype" value="1"<?=$checklimittype?>>
        や <font color="#666666">(狦称瞷岿粇,叫盢ゴつ奔秆∕)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><font color="#FF0000">You have an error 
        in your SQL syntax; check the manual that corresponds to your MySQL server 
        version for the right syntax to use near '-1' at line 1</font></td>
    </tr>
	<tr>
      <td height="25" bgcolor="#FFFFFF">丁ぃや计沮畐</td>
      <td height="25" bgcolor="#FFFFFF"><input name="scanlistdb" type="checkbox" id="scanlistdb" value="1"<?=$canlistdb==1?' checked':''?>>
        ぃや<font color="#666666">(狦丁ぃす砛计沮畐,叫ゴつ璶砞竚纐粄称计沮畐)</font></td>
    </tr>
  </table>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
    <tr> 
      <td height="25" colspan="2" bgcolor="#FFFFFF"> <div align="left"> 
          <input type="submit" name="Submit" value="矗ユ">&nbsp;&nbsp;
          <input type="reset" name="Submit2" value="竚">
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>