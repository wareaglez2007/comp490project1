<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class html{
    
    var $header_content ='';
  
    ///Construct the html type
    function html_pageType(){
        
     echo "<!DOCTYPE html>\n<html>\n";

    }
    
    function head_constructor(){
        
        echo "<head>";
        
        echo "<title>Comp490</title>";
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>";
        echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
        echo '</head>';
    }
    
    function body_constructor(){
        
        echo "<body>";
    }
    //NAVIGATION 
    function nav_generator(array $nav_links){
      // echo $_SERVER['SCRIPT_NAME'];
          echo '<div class="mainWrapper">';
          echo     '<div class="navigation">';
          echo    '<ul>';
        foreach ($nav_links as $key=>$nav_link){
         $isActive = ($_SERVER['PHP_SELF']== "/~rs399660/".$nav_link['link']? "active" : "" );
          echo    '<li id="'.$isActive.'" ><a href="'.$nav_link['link'].'" title="About" >'.$nav_link['title'].'</a></li>';
            
        } 
            echo    '</ul>';
            echo    '</div>';
    }
    
    
    ///DIV CLASS CONTENT
    function pg_content($html_content){
        
        echo '<div class="content">';
        echo $html_content;
        echo '</div>';
        echo '</div>';
        $this->html_page_type_end();

    }
    function footer(){
        
    }
            
    function html_page_type_end(){
        echo "</body>";
        echo "</html>";
    }
    
    function display_html(){
        $this->html_pageType();
        $this->head_constructor();
        $this->body_constructor();
        
   $nav_links =array(
    
    array('title' => 'About us',
          'link'  => 'index.php'
          
    ),
     array('title' => 'Sample CGI',
          'link'  => 'cgi-bin/simple.cgi?simple.cgi'
        
    ),
        array('title' => 'Sign up',
          'link'  => 'signup.php'
        
    )
    
);
        $this->nav_generator($nav_links);
        
    }
    
    
}

$mypage = new html();
$mypage->display_html();

        

