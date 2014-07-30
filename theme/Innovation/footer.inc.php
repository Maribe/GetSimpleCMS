<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site footer -->
	<footer id="site-footer" class="clearfix">
	<h1 class="hidden"><?php get_site_name(); ?>: content info (site footer)</h1>
		
		<?php get_footer(); ?>
		
		<!-- 
			Theme Credits
			Please consider keeping the links to the developer and GetSimple if you use this theme
		-->
	 	<div class="wrapper">
			<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
			<div class="right">Innovation Theme by <a href="http://www.cagintranet.com" >Cagintranet</a> &middot; <?php get_site_credits(); ?></div>
		</div>
	</footer>
	 
</body>
</html>
