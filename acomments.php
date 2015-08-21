<?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dsalgo";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        session_start();
        // define variables and set to empty values
        $flag=1;
        $comment="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["comment"])) {
//                $nameErr = "Name is required";
                $flag=0;
            } 
            else {
                $comment = test_input($_POST["comment"]);
                    }
            }
       

        function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        
        if($flag==1)
        {
          if(isset($_POST['comment'])) 
        {
            date_default_timezone_set('Asia/Calcutta'); 
            $date1 = date("Y-m-d H:i:s"); 
            
            $sql = "INSERT INTO acomment (ID,Name, Comment,Time )
            VALUES ('$_SESSION[ID]','$_SESSION[user]','$_POST[comment]','$date1')";
            $result = $conn->query($sql);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        }
        ?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

