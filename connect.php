<?php
 $mysqli = new mysqli('localhost', 'root', 'root', 'todo');
 if ($mysqli -> connect_error){
     die('Connection Error('. $mysqli->connect_errno.')'
     . $mysqli->connect_error);
 }
 else{
     echo "Connection made";
 }
 $mysqli->close();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

