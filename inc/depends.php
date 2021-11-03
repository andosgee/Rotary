<?php


function OpenCon(){ #Opens the connction
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "rotary";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);

  return $conn;
}


function AdminOnlyAccess(){ #Restrict page to admin access
  if(!$_SESSION['ISADMIN']){
    header("location: ./index.php");
  }
}

function GuestOnly(){
  if(!empty($_SESSION['USER'])){
    header("location: ./index.php");
  }
}


function UserOnlyAccess(){ #Restrict page to user (or higher) access
  if(!isset($_SESSION['USER'])){
    header("location: ./index.php");
  }
}


function get_active_page(){ //Get active page as 'example' instead of '/pharcourts/example.php'
  $address = $_SERVER['PHP_SELF']; // Get as /pharcourts/example.php
  $components = explode('/', $address); //Get as array
  $page_name = str_replace('.php', '', end($components));
  $page_name = str_replace('_',' ',$page_name);
  return $page_name; //Return last element
}


function get_from_table($table_name,$condition=1,$sort=1,$sort_direction='ASC'){
  global $conn;
  $query = "SELECT *
            FROM {$table_name}
            WHERE {$condition}
            ORDER BY {$sort} {$sort_direction}";
  $results = []; //Empty Array
  $query_result = $conn -> query($query); //Get items

  $count = $query_result -> num_rows; //Check if empty
  if($count == 0){ //If no results
    return false;
  }

  while($item = $query_result-> fetch_assoc()){
    $results[] = $item; //Iterate through items Append to array

  }

  return $results; //Returns as array of associated arrays
}


function secure($string){ //Injection security
  global $conn;
  // Add escape character to problematic characters eg. " ' \
  $string = $conn -> real_escape_string($string);
  //Remove HTML, PHP, JS tags to prevent injection
  $string = strip_tags($string);
  //Remove leading/trailing whitespace
  $string = trim($string);
  return $string;
}


function display_article($article=array(),$style="article"){ //Style is article or marquee
  echo "
    <div class=\"{$style}-card column\" onclick=(window.location.href='./article.php?AID={$article['AID']}')>
      <h2 class=\"{$style}-card__title\">{$article['Title']}</h2>
      <div class=\"{$style}-card__head\">
        <img class=\"{$style}-card__image\" src=\"./media/articles/{$article['AID']}.jpg\" alt=\"{$style} Image\">
      </div>
      <div class=\"{$style}-card__body\">
        <p class=\"{$style}-card__desc\">{$article['Description']}</p>
      </div>
    </div>
  ";
}


function display_marquee_nav($item_count){ //Echo $item_count nav dots
  echo "<div class=\"marquee__nav row\">";
  for ($i=1; $i <= $item_count; $i++) {
    echo "<span class=\"marquee__nav-dot\" onclick=\"currentSlide({$i})\"></span>";
  }
  echo "</div>";
}


function format_date(string $date){ //Date in format YYYY-MM-DD
  list($year, $month, $day) = explode('-',$date);
  $new_date = "{$day}/{$month}/{$year}"; //Convert to DD/MM/YYYY
  return $new_date; //Return reformatted date
}

function get_extensionless_filename(string $filename){ //Gets the filename minus the extension
	return explode(".", $filename)[0];
}

function get_files(string $directory, string $extension="pdf")
{
	$result = [];

	if(is_dir($directory))
	{
		$files = scandir($directory);

		foreach($files as $file)
		{
			if(strpos($file, $extension))
			{
				$result[] = get_extensionless_filename($file);
			}
		}
	}

	return $result;
}


?>
