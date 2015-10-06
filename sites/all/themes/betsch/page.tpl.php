<?php
/**
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<?php print $messages; ?>

		<div id="page">
			<div id="leftsidebar">
				<div class="header">
					<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					</a>
					<?php endif; ?>
				</div><!-- /.header -->
				<div class="header-greybar">
				</div>
				<div id="main-copy">
					<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
					<?php print render($title_prefix); ?>
					<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
					<?php print render($title_suffix); ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
					<?php print render($page['content-left']); ?>
					<?php print $feed_icons; ?>
					
				</div><!-- /#main-copy -->
			</div><!-- /#leftsidebar -->
			<div id="divider">
			</div>	
			<div id="main">
				<div class="header">
					<?php if ($site_name || $site_slogan): ?>
					<div id="name-and-slogan">
					<?php if ($site_name): ?>
					<?php if ($title): ?>
					<div id="site-name">
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><strong>Betsch</strong>Associates</a>
					</div>
					<?php else: /* Use h1 when the content title is empty */ ?>
					<h1 id="site-name">
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
					</h1>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ($site_slogan): ?>
				<div id="site-slogan">
					<?php print $site_slogan; ?></div>
					<?php endif; ?>
				</div> <!-- /#name-and-slogan -->
				<?php endif; ?>
				</div><!-- /.header -->
				<div class="header-greybar">
					<div id="navigation">
						<?php print render($page['navigation_bar']); ?>
					</div> <!-- /#navigation -->
				</div><!-- /.header-greybar -->
				<div id="main-content">
					<div id="content">
						<?php print render($page['content-right']); ?>
					</div><!-- /#content -->
					<div id="content-bottom">
							<?php print render($page['content_bottom']); ?>
					</div>
					
				</div><!-- /#main-content -->
				<div class="footer-greybar">
				<?php print render($page['footer-menu']); ?>
				</div>
			</div><!-- /#main -->
			<div id="footer">
				<?php print render($page['footer']); ?>
			</div> <!-- /#footer -->

			<div id="ending">
				<?php print render($page['ending']); ?>
			</div>
		</div><!-- /#page -->

<script type="text/javascript">
(function() {
	$ = jQuery;
	$('#block-block-7 .content').html('<h3>' + $('.views-content-field-image img').attr('title') + '</h3><p>' 
		+ $('.views-content-field-image img').attr('alt') + '</p>');
	$('.views-content-field-image img').click(function() {
		$('#block-block-7 .content').html('<h3>' + $(this).attr('title') + '</h3><p>' + $(this).attr('alt') + '</p>');
	});
})();
</script>