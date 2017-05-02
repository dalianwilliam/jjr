<div class="left_dh">
    <div class="dh xbiaozhi"> <a href='index.php'><img src="images/logo_c.png" width="50%" height="auto" /></a></div>
    <div class="dh"><i class="icon-home"></i> <a href='index.php'> <?php echo DH_HOME;?></a></div>
    <div class="dh"><i class="icon-search"></i><a href='###' class="se_dh"> <?php echo DH_SEARCH;?></a></div>
    
	<?php require("lib/public_huiyuan.php");
		public_huiyuan::myhuiyuan();
	?>
    
	<div class="dh"><div class="xiana"> </div></div>
    <?php public_huiyuan::mycpdh();?>
    <div class="dh"><div class="xiana"> </div></div>
    <?php public_huiyuan::mywebdh();?>
    
    <div class="dh">
    <div class="fl pda"><a href='yuyan.php?la=en'><img src="images/en.jpg" width="28" height="18" /></a></div>
    <div class="fl pda"><a href='yuyan.php?la=cn'><img src="images/cn.jpg" width="28" height="18" /></a></div>
    <div class="ld"></div>
  </div>
</div>
