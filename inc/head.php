<head>
  <?php include './inc/depends.php';
        $conn = OpenCon();
        session_start();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name='description' content="Website for Belfast-Kaiapoi Rotary Club">
  <meta name="keywords" content="Rotary New Zealand, Belfast, Kaiapoi, Belfast Kaiapoi Rotary, Rotary Club of Belfast Kaiapoi">
  <meta name="author" content="Andrew Grant">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" href="media/rotary_logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Dynamic Title - based off page name -->
  <title><?php echo ucwords(get_active_page()); ?> | Belfast-Kaiapoi Rotary</title>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PSFR2KS');</script>
<!-- End Google Tag Manager -->
</head>
