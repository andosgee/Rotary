<head>
  <?php include './inc/depends.php';
        $conn = OpenCon();
        session_start();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" href="media/rotary_logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Dynamic Title - based off page name -->
  <title><?php echo ucwords(get_active_page()); ?> | Belfast-Kaiapoi Rotary</title>
</head>
