<!doctype html>
<html lang="sv"> 
<head>
  <meta charset="utf-8"/>
  <title><?=$title?></title>
  <link rel='stylesheet' type='text/css' href='style.php' /> 
 <!--  <link rel="stylesheet" href="<?=$stylesheet?>"/> -->
  <link rel="shortcut icon" href="<?=$favicon?>"/>
</head>
<body>
  <div id="header">
   <div id='login-menu'>
<?=login_menu()?>
</div>
    <div id='banner'>
  
<a href='<?=base_url()?>'><img class='site-logo' src='<?=$logo?>' alt='logo' width='<?=$logo_width?>' height='<?=$logo_height?>' /></a>
<p class='site-title'><a href='<?=base_url()?>'><?=$header?></a></p>
<p class='site-slogan'><?=$slogan?></p>
</div>
 </div> 
  
  <div id="main" role="main">
  <?=get_messages_from_session()?>
    <?=@$main?>
    <?=render_views()?>
 
  <div id="footer">
  
    <?=$footer?>
    <?=get_debug()?>
  </div> </div>
</body>
</html> 
