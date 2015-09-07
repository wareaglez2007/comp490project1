<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions/header.php';

$about_content ='  <p>This is a simple program created by Rostom Sahakian. I have used php as the programming language.HTML and CSS have also been used.'
        . '<b> Click the Sign up tab to enter your information and after evrything has been entered I pass the values to the read.cgi file where the $QUERY_STRING is echoed.</b></p>';
$home = $mypage->pg_content($about_content);
