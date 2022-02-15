<head>
  <?php include './inc/depends.php';
        $conn = OpenCon();
        session_start();?>
      <!-- Meta Data -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name='description' content="Belfast-Kaiapoi Rotary Club, a group making the community better.">
  <?php
  $current_page = get_active_page();
  echo "<meta name='keywords' content='".$current_page." Belfast Kaiapoi Rotary, Rotary Belfast Kaiapoi ".$current_page."'>";
  ?> <!--Meta data done on page changes-->
  <meta name="keywords" content="Rotary New Zealand, Belfast, Kaiapoi, Belfast Kaiapoi Rotary, Rotary Club of Belfast Kaiapoi">
  <meta name="author" content="Andrew Grant">

  <!--Linking Sheets-->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> <!--Font Style load-->
  <link rel="stylesheet" href="./css/style.css"> <!--Stylesheet for all-->
  <link rel="stylesheet" type="text/css" href="./chosen_lib/chosen.css"> <!--Stylesheet for the select boxes-->
  <link rel="icon" type="image/png" href="media/rotary_logo.png"> <!--Favicon-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!--Ajax Jquery Lib-->
  <script type="text/javascript" src="./chosen_lib/chosen.jquery.js"></script> <!--Jquery full-->
  <script type="text/javascript" src="./chosen_lib/chosen.jquery.min.js"></script> <!--Jquery Min-->
  <!--DDSLick things-->
  <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
  <script type="text/javascript" src="./ddslick/jquery.ddslick.js"></script> <!--Jquery full-->
  <script type="text/javascript" src="./ddslick/jquery.ddslick.min.js"></script> <!--Jquery Min-->
  <!-- Link in cookie maker file -->
  <script type="text/javascript" src="./js/cookies.js"></script>
  <!-- Dynamic Title - based off page name -->
  <title><?php echo ucwords(get_active_page()); ?> | Belfast-Kaiapoi Rotary</title>
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PSFR2KS');
  </script>
<!-- End Google Tag Manager -->
</head>
