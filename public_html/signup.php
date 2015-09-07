<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL & ~E_NOTICE);
include 'functions/header.php';
include 'functions/formhandler.php';
if(isset($_GET['signup'])){

    $variables= array();
    $variables['Name'] = $_GET['name'];
    $variables['Email'] =$_GET['email'];
    $variables['Username'] = $_GET['uname'];
    $variables['Password'] = $_GET['pass1'];
    $variables['Re-password'] = $_GET['pass2'];
    $variables['Reffer'] = $_GET['reffer'];
    
 $message = data_validator($variables);
 if(isset($message)){
      echo '<div class="content">';
   foreach($message as $err){
      
       echo $err;
       
   }
      echo '</div>'; 
   }else{
       header("Location: cgi-bin/read.cgi?name=".$_GET['name']."&email=".$_GET['email']."&username=".$_GET['uname']);
 }
}
if(isset($_GET['name'])){
    $name = $_GET['name'];
}

$signup_form ='<fieldset>
                    <legend>Sign up</legend>
                    <form action="signup.php" method="GET">
                        
                            
                     <label for="name">Name</label>
                
                 <input type="text" name="name" id="name" value="'.$_GET['name'].'"/>
                     
               <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="'.$_GET['email'].'"/>
                            
                            
                            <label for="uname">Username</label>
                            <input type="text" name="uname" id="uname" value="'.$_GET['uname'].'"/>
                            
                            
                            <label for="password">password</label>
                            <input type="password" name="pass1" id="pass1" value="'.$_GET['pass1'].'"/>
                            
                            
                            <label for="pass2">Confirm password</label>
                            <input type="password" name="pass2" id="pass2" value="'.$_GET['pass2'].'"/>
                            
                            
                                <label for="refer">Where did you hear about us?</label>
                                <select name="reffer">
                                    <option value="--Select--">--Select--</option>
                                    <option value="google">Goolge</option>
                                    <option value="friends">Friends</option>
                                    <option value="other">Other</option>

                                </select>
                                <label for="newsletter">
                                    <input type="checkbox" name="newsletter" value="1" checked="checked">
                                    Would you like to subscribe to our monthly newsletter?
                                </label>
                                
                                <input type="submit" name="signup" value="Sign up!" id="signup">
                                 
                        
                    </form>
                </fieldset>';


$form = $mypage->pg_content($signup_form);