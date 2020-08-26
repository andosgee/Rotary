<?php
declare(strict_types=1); // All variables must be the declared type

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


function display_article_card($article){ //$article=array()
  echo $article;
  // echo "
  //   <div class=\"article-card column\">
  //     <img class=\"article-card__image\" src=\"./media/{$article['AID']}.jpg\" alt=\"Article Image\">
  //     <h2 class=\"article-card__title\">{$article['Title']}</h2>
  //     <p class=\"article-card__desc\">{$article['Description']}</p>
  //   </div>
  // ";
};
 ?>
