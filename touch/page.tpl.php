<html>
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/bootstrap.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/main.css" rel="stylesheet">
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/style.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/plugins/timeline.css" rel="stylesheet">
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/fudge.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/sb-admin-2.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- jQuery Version 1.11.0 -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/jquery.min.js"></script>
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/jquery-1.11.0.js"></script>
   

    <!-- Bootstrap Core JavaScript -->

   <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/bootstrap.min.js"></script>
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/smoothscroll.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/plugins/metisMenu/metisMenu.min.js"></script> 
    <!-- Custom Theme JavaScript -->
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/sb-admin-2.js"></script>
    

    <script type="text/javascript" src="https://addthisevent.com/libs/1.5.8/ate.min.js"></script>
    <script type="text/jQuery">
        $("#owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
        });      
    </script>   

</head>

  <body>
<nav  role="navigation" style="margin-bottom: 0">
            
            <!-- /.navbar-top-links -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
             <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div>
   <a href="http://www.dwsim.fossee.in/" target="_blank"> <img src="sites/all/themes/touch/images/DWsim_logo.png" > </a>
    
                        </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="<?php print $front_page; ?>"><i class="fa fa-home"></i> Home</a>
                        </li>
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
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
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
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
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>


  

   <!-- <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> 
    <?php endif; ?><!-- /#secondary-menu -->

  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages" style="margin-left: 259px;margin-top: 84px;">
      <div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
<br/><br/>
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->
<div id="footer">
                <a href='http://fossee.in/' target="_blank" ><img class="img" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/images/fossee.png"  class="icons" height="60px" width="150px" /></a>
                    
                <!-- Copyright -->
                    <ul class="copyright">
                        
                        <li>&copy;2014 Scilab India.</li><li>Developed by <a href="http://fossee.in">FOSSEE</a></li>
                    
                    </ul>
            <div style="margin-top:-80px;margin-left:780px">
                <a href='http://www.iitb.ac.in/' target="_blank" ><img class="img" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/images/iitb_logo.png"  class="icons" width="60px"/></a>
                <h6>IIT Bombay</h6>
            </div>
            </div>
  
  
</div></div> <!-- /#page, /#page-wrapper -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://analytics.spoken-tutorial.org/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 16]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://analytics.spoken-tutorial.org/piwik.php?idsite=16" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56936284-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
