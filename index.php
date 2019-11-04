<?php
require_once "app.init.php";
require_once APP_BASE_INC;
\TymFrontiers\HTTP\Header::badRequest(true, "No relative path here");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="./site.webmanifest">
  <head>
    <meta charset="utf-8">
    <title>fancybox for the 7 OS Web</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="robots" content='nofollow'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-theme/css/web-theme.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-theme/css/web-theme-<?php echo PRJ_THEME; ?>.min.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-plugin/css/web-plugin.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-dnav/css/web-dnav.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/web-fader-box/css/web-fader-box.min.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <?php include PRJ_INC_HEADER; ?>
    <section id="main-content">
      <div class="view-space">
        <div class="sec-div padding -p20">
          <h1>jQuery for the 7 OS Web</h1>
          <h2>Resource list</h2>
          <ul>
            <li>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <?php include PRJ_INC_FOOTER; ?>
    <!-- Required scripts -->
    <script src="<?php echo WHOST; ?>/7os/jquery/js/jquery.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/js-generic/js/js-generic.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/web-theme/js/web-theme.min.js"></script>
    <!-- optional plugins -->
    <script src="<?php echo WHOST; ?>/7os/web-plugin/js/web-plugin.min.js"></script>
    <script src="<?php echo WHOST; ?>/7os/web-dnav/js/web-dnav.min.js"></script>
    <script src="<?php echo WHOST; ?>/7os/web-fader-box/js/web-fader-box.min.js"></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>"></script>
    <script type="text/javascript">
      console.log(sos);
    </script>
  </body>
</html>
