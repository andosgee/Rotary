<?php
declare(strict_types=1); // All variables must be the declared type


function OpenCon(){ #Opens the connction
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "Rotary";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);

  return $conn;
}


function get_active_page(){ //Get active page as 'example' instead of '/pharcourts/example.php'
  $address = $_SERVER['PHP_SELF']; // Get as /pharcourts/example.php
  $components = explode('/', $address); //Get as array
  return str_replace('.php', '', end($components)); //Return last element
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

  while($item = $query_result-> fetch_assoc()){ //Iterate through items
    $results[] = $item; //Append to array
  }

  return $results; //Returns as array of associated arrays
}


function display_article($article=array(),$style="card"){ //Style is card or marquee
  echo "
    <div class=\"{$style}-card column\">
      <img class=\"{$style}-card__image\" src=\"./media/{$article['AID']}.jpg\" alt=\"{$style} Image\">
      <h2 class=\"{$style}-card__title\">{$article['Title']}</h2>
      <p class=\"{$style}-card__desc\">{$article['Description']}</p>
    </div>
  ";
}


function display_marquee_nav($item_count){ //Echo $item_count nav dots
  echo "<div class=\"marquee__nav\">";
  for ($i=1; $i < $item_count; $i++) {
    echo "<span class=\"marquee__nav-dot\" onclick=\"currentSlide({$i})\"></span>";
  }
  echo "</div>";
}
 ?>
