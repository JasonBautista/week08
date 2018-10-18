<?php 

$newContent = array ("Jason", "16", "Blue");
$newContent = array ("Jorge", "23", "alyssa");

/* multidimentional array */

$newContent = array(
    $newContent = array ("Jason", "16", "Blue"),
    $newContent = array ("Jorge", "23", "alyssa"),
    $newContent = array ("sterling", "16", "purp")
    );




for ($i=0; $i<3; $i++){
 // echo $i."<br>";
  //echo "Hello my name is ". $newContent[$i][0]."<br>";
  //echo "I am ". $newContent[$i][1]. " years old<br>";
  //echo "My favorite color is ". $newContent[$i][2]."<br>";
}

//echo "<select>";
      for ($i=0; $i<3; $i++){
        //echo "<option> ". $newContent[$i][0]."</option>";
      }
//echo "</select>";

//echo "<br><br>";

// associative rays

$myContent = array(
    "name"=>"Jason",
    "age"=> "16",
    "color"=>"Blue"
  );
  
  //echo $myContent["name"]."<br>";

$myContent = array(
  "Jason"=>array(
    "age"=>"16",
    "color"=>"blue"
    ),
    "Jorge"=>array(
      "age"=>"23",
      "color"=>"alyssa"
      ),
      "sterling"=>array(
        "age"=>"16",
        "color"=>"purp"
        )
  );
  
  //echo $myContent["sterling"]["age"]."<br><br>";
  
  /* Index Multidimensional array */
  $myContent = array(
    array(
      "name"=>"Jason",
      "age"=>"16",
      "color"=>"blue"
      ),
      array(
        "name"=>"Jorge",
        "age"=>"23",
        "color"=>"alyssa"
        ),
        array(
          "name"=>"sterling",
          "age"=>"16",
          "color"=>"purp"
          )
  );
  
  //echo $myContent[1]["age"]."<br>";
  
  $myNav = array(
      array(
        "title"=>"Home",
        "page"=>"index.php"
        ),
          array(
            "title"=>"Contact",
            "page"=>"contact.php"
            ),
        array(
          "title"=>"About",
          "page"=>"about.php"
          ),
          array(
            "title"=>"bob",
            "page"=>"bob.php"
            )
    );
    
    $myNavCount = count($myNav); 
    
   echo  "<ul class='nav'>";
   for($i=0;$i<count($myNav);$i++){
   echo "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
   }
  echo  "</ul>";
  
?>
