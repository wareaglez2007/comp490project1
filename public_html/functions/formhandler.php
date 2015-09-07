<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function data_validator(array $field_data){

   global $error_message;
   global $flag;
   $flag =0;
  if($field_data['password']!= $field_data['re-password']){
             $error_message[]='<ul class="errors"><li>Passwords did not match</li></ul>';
            $flag =1;
        }
    foreach ($field_data as $key=> $vars){
     
        if(empty($vars) && $key != "reffer"){
            $error_message[]='<ul class="errors"><li>'.$key.' is empty!</li></ul>';
            $flag =1;
        }
      
    }
   
       return $error_message; 

   

}