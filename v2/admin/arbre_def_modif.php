<?
	include("connexion.php");

	// Chopage de la arbre
	$sql = "select * from arbre_param";
	$qry = mysql_query($sql);
	$rec = mysql_fetch_array($qry);
	
	if (isset($_POST['post'])) {
		
		$sql = "update arbre_param set biblio = '".$_POST['biblio']."'";
		$qry = mysql_query($sql);
//		echo $sql;
		header("location:arbre.php");
	}

	// Chopage de la arbre
	$sql = "select * from arbre_param";
	$qry = mysql_query($sql);
	$rec = mysql_fetch_array($qry);

	mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
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
			<form action="arbre_def_modif.php?id=<? echo $_REQUEST['id']?>" method="post" enctype="multipart/form-data">
			<table width="100%" border="0" cellspacing="1" cellpadding="1">

              <tr>
                <td align="left"><strong>Affichage de la bibliographie ? </strong></td>
              </tr>
              <tr>
                <td align="left"><input type="radio" name="biblio" value="O" <? if ($rec['biblio'] == 'O') echo "checked=checked"; ?>/>
                  Oui
                  <input type="radio" name="biblio" value="N" <? if ($rec['biblio'] == 'N') echo "checked=checked"; ?>/>
                  Non</td>
              </tr>
              <tr>
                <td align="center"><br /><p>
                  <input name="post" type="hidden" id="post" value="true" />
                  <input name="Submit" type="submit" class="text" value="Enregistrer" />
                <p></td>
              </tr>
            </table>
			</form></td>
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