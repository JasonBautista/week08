<?php


$allContent = array(
    "home"=>array(
        "title"=>"Home",
        "content"=>"This is the content content"
        ),
    "about"=>array(
        "title"=>"About",
        "content"=>"This is About content."
        ),
    "buy"=>array(
        "title"=>"Buy Now!",
        "content"=>"Buy now content"
        ),
    "contact"=>array(
        "title"=>"Contact",
        "content"=>"Contact content"
        )
    );

$myNav = array(
      array(
        "title"=>"Home",
        "page"=>"home"
        ),
         array(
          "title"=>"About",
          "page"=>"about"
          ),
          array(
            "title"=>"Contact",
            "page"=>"contact"
            ),
           array(
            "title"=>"buy",
            "page"=>"buy"
            ),
          array(
            "title"=>"bob",
            "page"=>"bob"
            )
    );
    
    $myNavCount = count($myNav); 
    
    ?>