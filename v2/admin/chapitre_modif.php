<?
	include("connexion.php");

	if (isset($_REQUEST['id'])) {
		$sql = "select * from chapitre where id_chapitre =".$_REQUEST['id'];
		$qry = mysql_query($sql);
		$rec = mysql_fetch_array($qry);
	}
	
	if (isset($_POST['update'])) {

		$photo1 = $_POST['foto1'];
		if (isset($_FILES['fto1'])) {
			if ($_FILES['fto1']['size'] > 0) {
				$savefile = "../images/village/".$_FILES['fto1']['name'];
				$temp = $_FILES['fto1']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo1 = $_FILES['fto1']['name'];
				}
			}
		}
		$photo2 = $_POST['foto2'];
		if (isset($_FILES['fto2'])) {
			if ($_FILES['fto2']['size'] > 0) {
				$savefile = "../images/village/".$_FILES['fto2']['name'];
				$temp = $_FILES['fto2']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo2 = $_FILES['fto2']['name'];
				}
			}
		}
		$photo3 = $_POST['foto3'];
		if (isset($_FILES['fto3'])) {
			if ($_FILES['fto3']['size'] > 0) {
				$savefile = "../images/village/".$_FILES['fto3']['name'];
				$temp = $_FILES['fto3']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo3 = $_FILES['fto3']['name'];
				}
			}
		}
				
		$sql = "update chapitre set nom_chapitre = '".$_POST['nom']."', idvillage_chapitre = '".$_POST['numero']."', texte_chapitre = '".$_POST['texte']."', photo1_chapitre = '".$photo1."', photo2_chapitre = '".$photo2."', photo3_chapitre = '".$photo3."' WHERE id_chapitre = ".$_REQUEST['id'];
		$qry = mysql_query($sql);
//		echo $sql;
		header("location:chapitre.php?village=$_REQUEST[village]");
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
            <td align="left"><img src="../decoup/titre_village.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td>
			<p align="right"><a href="chapitre.php?id=<? echo $_REQUEST['id']; ?>&village=<? echo $_REQUEST['village']; ?>" class="text">Retour</a></p>
			<form action="chapitre_modif.php?id=<? echo $_REQUEST['id']; ?>&village=<? echo $_REQUEST['village']; ?>" method="post" onsubmit="MM_validateForm('nom','','R');return document.MM_returnValue" enctype="multipart/form-data">
			<table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="150" align="left"><strong>Rubrique : </strong></td>
                    <td align="left">
                      <input name="nom" type="text" class="text" id="nom" value="<? echo $rec['nom_chapitre']; ?>"/>
                      <input name="numero" type="hidden" id="numero" value="<? echo $_REQUEST['village']; ?>" /></td>
                    </tr>
                </table>                  </td>
              </tr>

              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                    <tr>
                      <td width="50%" align="left"><strong>Contenu : </strong></td>
                      </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                  <tr>
                    <td width="50%"><textarea name="texte" cols="100" rows="10" class="text" id="texte"><? echo $rec['texte_chapitre']; ?></textarea></td>
                    </tr>
                </table></td>
              </tr>

              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="150" align="left"><strong>Photo 1 : </strong></td>
                    <td align="left"><input name="fto1" type="file" class="text" id="fto1" size="20" />
                        <input name="foto1" type="hidden" id="foto1"  value="<? echo $rec['photo1_chapitre'];?>" /></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Photo 2 : </strong></td>
                    <td align="left"><input name="fto2" type="file" class="text" id="fto2" size="20" />
                        <input name="foto2" type="hidden" id="foto2" value="<? echo $rec['photo2_chapitre'];?>" /></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Photo 3 : </strong></td>
                    <td align="left"><input name="fto3" type="file" class="text" id="fto3" size="20" />
                        <input name="foto3" type="hidden" id="foto3" value="<? echo $rec['photo3_chapitre'];?>" /></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center"><br /><p>
                  <input name="update" type="hidden" id="update" value="true" />
                  <input name="Submit" type="submit" class="text" value="Enregistrer" />
                <p></td>
              </tr>
            </table>
			</form>
			</td>
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