<?
	include("connexion.php");

	// Chopage de l'arbre
	if (isset($_REQUEST['id'])) {
		$sql = "select * from arbre where id_arbre =".$_REQUEST['id'];
		$qry = mysql_query($sql);
		$rec = mysql_fetch_array($qry);
	}
	
	if (isset($_POST['post'])) {
		
		$photo1 = $_POST['foto1'];
		if (isset($_FILES['fto1'])) {
			if ($_FILES['fto1']['size'] > 0) {
				$savefile = "../images/arbre/".$_FILES['fto1']['name'];
				$temp = $_FILES['fto1']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo1 = $_FILES['fto1']['name'];
				}
			}
		}
		$photo2 = $_POST['foto2'];
		if (isset($_FILES['fto2'])) {
			if ($_FILES['fto2']['size'] > 0) {
				$savefile = "../images/arbre/".$_FILES['fto2']['name'];
				$temp = $_FILES['fto2']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo2 = $_FILES['fto2']['name'];
				}
			}
		}
		$photo3 = $_POST['foto3'];
		if (isset($_FILES['fto3'])) {
			if ($_FILES['fto3']['size'] > 0) {
				$savefile = "../images/arbre/".$_FILES['fto3']['name'];
				$temp = $_FILES['fto3']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo3 = $_FILES['fto3']['name'];
				}
			}
		}
		$photo4 = $_POST['foto4'];
		if (isset($_FILES['fto4'])) {
			if ($_FILES['fto4']['size'] > 0) {
				$savefile = "../images/arbre/".$_FILES['fto4']['name'];
				$temp = $_FILES['fto4']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo4 = $_FILES['fto4']['name'];
				}
			}
		}
		$photo5 = $_POST['foto5'];
		if (isset($_FILES['fto5'])) {
			if ($_FILES['fto5']['size'] > 0) {
				$savefile = "../images/arbre/".$_FILES['fto5']['name'];
				$temp = $_FILES['fto5']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo5 = $_FILES['fto5']['name'];
				}
			}
		}
		
		$sql = "update arbre set nom_arbre = '".$_POST['nom']."', nomsc_arbre = '".$_POST['nomsc']."', intro_arbre = '".$_POST['intro']."', desc_arbre = '".$_POST['desc']."', eco_arbre = '".$_POST['eco']."', util_arbre = '".$_POST['util']."', photo1_arbre = '".$photo1."', photo2_arbre = '".$photo2."', photo3_arbre = '".$photo3."', photo4_arbre = '".$photo4."', photo5_arbre = '".$photo5."' where id_arbre = ".$_REQUEST['id'];
		$qry = mysql_query($sql);
//		echo $sql;
		header("location:arbre.php");
	}

	// Chopage de l'arbre
	if (isset($_REQUEST['id'])) {
		$sql = "select * from arbre where id_arbre =".$_REQUEST['id'];
		$qry = mysql_query($sql);
		$rec = mysql_fetch_array($qry);
	}

	mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function verif(e) { 
	alert(form.e.value);
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' doit �tre une adresse e-mail.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' doit �tre un nombre.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' doit �tre un nombre entre  '+min+' et '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' manquant.\n'; }
  } if (errors) alert('Les champs suivant sont manquants :\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><img src="../decoup/model_bande.jpg" width="100%" height="600" /></td>
    <td width="780" align="center" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="38">
          <param name="movie" value="../flash/barre.swf" />
          <param name="quality" value="high" />
          <embed src="../flash/barre.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="38"></embed>
        </object></td>
      </tr>
      <tr>
        <td align="center"><img src="../decoup/model_visu.jpg" width="780" height="126" /></td>
      </tr>
      <tr>
        <td width="780" height="36" align="center" class="text"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="36">
          <param name="movie" value="../flash/menu.swf" />
          <param name="quality" value="high" />
          <embed src="../flash/menu.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="36"></embed>
        </object></td>
      </tr>
      <tr>
        <td background="../decoup/model_fond.jpg"><table width="95%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
          <tr>
            <td align="left"><img src="../decoup/titre_arbre.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td>
			<p align="right"><a href="arbre.php" class="text">Retour</a></p>
			<form action="arbre_modif.php?id=<? echo $_REQUEST['id']?>" method="post" onsubmit="MM_validateForm('nom','','R','nomsc','','R');return document.MM_returnValue" enctype="multipart/form-data">
			<table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="150" height="25" align="left"><strong>Nom commun : </strong></td>
                    <td align="left">
                      <input name="nom" type="text" class="text" id="nom" value="<? echo $rec['nom_arbre']?>">
                    </td>
                    <td width="150" align="left"><strong>Nom scientifique : </strong></td>
                    <td><input name="nomsc" type="text" class="text" id="nomsc" value="<? echo $rec['nomsc_arbre']?>"></td>
                  </tr>
                </table>                  </td>
              </tr>

              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                    <tr>
                      <td width="50%" align="left"><strong>Introduction : </strong></td>
                      <td width="50%" align="left"><strong>Description : </strong></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                  <tr>
                    <td width="50%"><textarea name="intro" cols="50" rows="10" class="text" id="intro"><? echo $rec['intro_arbre']?></textarea></td>
                    <td width="50%"><textarea name="desc" cols="50" rows="10" class="text" id="desc"><? echo $rec['desc_arbre']?></textarea></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                  <tr>
                    <td width="50%" align="left"><strong>Ecologie - R&eacute;partition  : </strong></td>
                    <td width="50%" align="left"><strong>Utilisation : </strong></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                  <tr>
                    <td width="50%"><textarea name="eco" cols="50" rows="10" class="text" id="eco"><? echo $rec['eco_arbre']?></textarea></td>
                    <td width="50%"><textarea name="util" cols="50" rows="10" class="text" id="util"><? echo $rec['util_arbre']?></textarea></td>
                  </tr>
                </table></td>
              </tr>

              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="150" align="left"><strong>Photo 1 : </strong></td>
                    <td align="left">
                      <input name="fto1" type="file" class="text" id="fto1" size="20" />
                      <input name="foto1" type="hidden" id="foto1"  value="<? echo $rec['photo1_arbre'];?>">                    </td>
                    <td width="150" align="left"><strong>Photo 2 : </strong></td>
                    <td align="left"><input name="fto2" type="file" class="text" id="fto2" size="20" />
                      <input name="foto2" type="hidden" id="foto2" value="<? echo $rec['photo2_arbre'];?>"></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Photo 3 : </strong></td>
                    <td align="left"><input name="fto3" type="file" class="text" id="fto3" size="20">
                      <input name="foto3" type="hidden" id="foto3"  value="<? echo $rec['photo3_arbre'];?>"></td>
                    <td align="left"><strong>Photo 4 : </strong></td>
                    <td align="left"><input name="fto4" type="file" class="text" id="fto4" size="20" />
                      <input name="foto4" type="hidden" id="foto4" value="<? echo $rec['photo4_arbre'];?>"></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Photo 5 : </strong></td>
                    <td align="left"><input name="fto5" type="file" class="text" id="fto5" size="20" />
                      <input name="foto5" type="hidden" id="foto5" value="<? echo $rec['photo5_arbre'];?>"></td>
                    <td align="left">&nbsp;</td>
                    <td align="left">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center"><br /><p>
                  <input name="post" type="hidden" id="post" value="true" />
                  <input name="Submit" type="submit" class="text" value="Enregistrer" />
                <p></td>
              </tr>
            </table></form></td>
          </tr>
        </table>
		
		</td>
      </tr>
      <tr>
        <td><img src="../decoup/model_pied.jpg" width="780" height="53" /></td>
      </tr>
    </table></td>
    <td valign="top"><img src="../decoup/model_bande.jpg" width="100%" height="600" /></td>
  </tr>
</table>
</body>
</html>