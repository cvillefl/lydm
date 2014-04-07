<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Untitled-4.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php $thisSiteTitle="Les Yeux du Monde Art Gallery"; ?>

<!-- InstanceBeginEditable name="head" -->
<?php $thisSection="Current Exhibition"; ?>
<?php $thisSubSection="SubSection"; ?>
<?php $thisYear="2010"; ?>
<?php $thisArtist="Jaclyn"; ?>
<?php $thisShow="My Show"; ?>
<?php $thisArtistSection="Images"; ?>
<?php $thisPageNumber="1"; ?>
<?php $thisDetails="Details"; ?>
<?php $thisCookieCrumbVisible=""; /* Cookie Crumb will be displayed UNLESS the variable is set to "no" */ ?>
<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo "$thisSiteTitle"; ?>
<?php if ($thisSection!="") echo " - $thisSection"; ?>
<?php if ($thisSubSection!="") echo " - $thisSubSection"; ?>
<?php if ($thisYear!="") echo " - $thisYear"; ?>
<?php if ($thisArtist!="") echo " - $thisArtist"; ?>
<?php if ($thisShow!="") echo " - $thisShow"; ?>
<?php if ($thisArtistSection!="") echo " - $thisArtistSection"; ?>
<?php if ($thisPageNumber!="") echo " - $thisPageNumber"; ?>
<?php if ($thisDetails!="") echo " - $thisDetails"; ?></title>
<!-- InstanceEndEditable -->

<link href="/css/lesyeuxdumonde_css.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="/css/lesyeuxdumonde_css.css" />
</head>

<body>

<table width="785" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="179" rowspan="2" align="left" valign="top" bgcolor="#FFFFFF"><table width="180" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" valign="top"><div align="right"><?php if ($thisSection=="Current Exhibition") echo '<img src="/images/logo_large.jpg" alt="Les Yeux du Monde logo" width="179" height="190" />'; else echo '<img src="/images/logo_small.jpg" alt="Les Yeux du Monde logo" width="179" height="190" border="0" usemap="#map_logo" />'; ?></div></td>
      </tr>
      <tr>
        <td width="20" valign="top" bgcolor="#FFFFFF"><img src="/images/20_pixel_spacer.jpg" width="20" height="20" /></td>
        <td width="125" valign="top" bgcolor="#FFFFFF"><?php require_once('php_includes/navigation.php'); ?>
</td>
        <td width="35" valign="top" bgcolor="#FFFFFF"><img src="/images/spacer.gif" width="30" height="30" /></td>
      </tr>
    </table></td>
    <td height="97" colspan="3" valign="top" bgcolor="#FFFFFF"><?php if ($thisSection=="Current Exhibition") echo '<img src="/images/header_2.jpg" width="606" height="97" align="top" />'; else echo '<img src="/images/header_3.jpg" width="606" height="97" align="top" />'; ?></td>
  </tr>
  <tr>
    <td width="361" align="left" valign="top" bgcolor="#FFFFFF"><table width="361" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top">

<?php if ($thisCookieCrumbVisible!=="no") echo '<p class="cookie_crumb">'; ?>
<?php if ($thisCookieCrumbVisible!=="no" And $thisSection!="") echo "$thisSubSection"; ?>
<?php if ($thisCookieCrumbVisible!=="no" And $thisYear!="") echo " &gt; $thisYear"; ?>
<?php if ($thisCookieCrumbVisible!=="no" And $thisArtist!="") echo " &gt; $thisArtist"; ?>
<?php if ($thisCookieCrumbVisible!=="no" And $thisShow!="") echo " | $thisShow"; ?>
<?php if ($thisCookieCrumbVisible!=="no" And $thisArtistSection!="") echo " &gt; $thisArtistSection"; ?>
<?php if ($thisCookieCrumbVisible!=="no" And $thisPageNumber!="") echo " $thisPageNumber"; ?>
<?php if ($thisCookieCrumbVisible!=="no") echo '</p>'; ?>           
<!-- InstanceBeginEditable name="Editable_Body" -->EditBody<!-- InstanceEndEditable --></td>
      </tr>
    </table></td>
    <td width="68" rowspan="2" valign="top" background="/images/shade_bar.jpg"><img src="/images/shade_bar.jpg" width="63" height="332" /></td>
    <td width="178" align="left" valign="top" bgcolor="#FFFFFF"><?php require_once('php_includes/right_column.php'); ?></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>

  <?php require_once('php_includes/footer.php'); ?>

</table>

<map name="map_logo" id="map_logo"><area shape="rect" coords="61,26,143,109" href="/" alt="Click here to return to main page" /></map>


<?php require_once('php_includes/google_analytics_code.php'); ?>




</body>
<!-- InstanceEnd --></html>
