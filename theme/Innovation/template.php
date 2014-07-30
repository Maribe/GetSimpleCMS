<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/


# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php
$innov_settings = Innovation_Settings();

# Include the header template
include('header.inc.php');
?>

	<main id="main" class="wrapper clearfix" role="main">

	<h1 class="hidden"><?php get_site_name(); ?>: this page's contents</h1>

		<article>
		<div id="pgpadding">

			<!-- page title -->
			<h2 id="pgtitle"><?php get_page_title(); ?></h2>

			<!-- page content -->
			<?php get_page_content(); ?>

			<!-- page footer -->
			<footer class="footer">
			<h6 class="hidden">Publication date</h6>
			<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>"><?php get_page_date('F jS, Y'); ?></time></p>
			</footer>

		</div>
		</article>

		<!-- include the sidebar template -->
		<?php include('sidebar.inc.php'); ?>

	</main>


<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
