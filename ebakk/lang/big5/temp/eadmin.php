<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>舧ㄏノ瓣称</title>
<base onmouseover="window.status='瓣称';return true">
<link href="images/css.css" rel="stylesheet" type="text/css">
<SCRIPT>
function switchSysBar(){
if (switchPoint.innerText==3){
switchPoint.innerText=4
document.all("frmTitle").style.display="none"
}else{
switchPoint.innerText=3
document.all("frmTitle").style.display=""
}}
</SCRIPT>
</HEAD>
<BODY scroll="no" style="MARGIN:0px">
<TABLE border=0 cellPadding=0 cellSpacing=0 height="100%" width="100%">
  <TBODY>
    <TR> 
      <TD rowspan="2" align="middle" vAlign="center" noWrap id="frmTitle"> <IFRAME frameBorder=0 name="ebakleft" scrolling=auto src="left.php" style="HEIGHT:100%;VISIBILITY:inherit;WIDTH:190px;Z-INDEX:2"></IFRAME> 
      </TD>
      <TD rowspan="2" bgColor="C7D4F7"> <TABLE border=0 cellPadding=0 cellSpacing=0 height="100%">
          <TBODY>
            <tr> 
              <TD onclick="switchSysBar()" style="HEIGHT:100%;"> <font style="COLOR:666666;CURSOR:hand;FONT-FAMILY:Webdings;FONT-SIZE:9pt;"> 
                <SPAN id="switchPoint" title="ゴ秨/闽超オ娩旧逆">3</SPAN></font> 
          </TBODY>
        </TABLE></TD>
      <TD style=WIDTH:100%> <table border=0 cellPadding=0 cellSpacing=0 height="100%" width="100%">
          <tr height=30 bgcolor="C7D4F7"> 
            <td width="73%" bgcolor="C7D4F7"><strong>舧ㄏノ瓣称 [<a href="http://www.phome.net/" target="_blank">﹛よ</a>]</strong></td>
            <td width="27%" bgcolor="C7D4F7"> 
              <select name="select" onchange="parent.location.href='phome.php?phome=ChangeLanguage&from=admin.php&l='+this.value;" style="width:300">
			<?=Ebak_ReturnLang()?>
              </select></td>
          </tr>
          <tr>
            <td colspan="2"><IFRAME frameBorder=0 id="ebakmain" name="ebakmain" scrolling="yes" src="main.php" style="HEIGHT:100%;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:1"></IFRAME></td>
          </tr>
        </table></TD>
    </TR>
  </TBODY>
</TABLE>
</body>
</html>