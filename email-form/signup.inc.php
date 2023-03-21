<?php

  if(isset($_POST['submit'])) //check if form submitted
     {
         //include_once 'connect.php';

         $name = $_POST["name"];//one of these for each input
         $company = $_POST["company"];
         $email = $_POST["email"];
         $telephone = $_POST["telephone"];
         $subject = $_POST["subject"];
         $message = $_POST["message"];

    
         if(empty($name) || empty($company)|| empty($email)|| empty($telephone)|| empty($subject)
         || empty($message)) //error handling , if user misses input
         {
            header("Location: ../contact.php?signup=empty");// tells page what to do 
            exit();//if not go back to main index  ,? placeholder 
         }

         else
        {
            if(!preg_match("/^[a-zA-Z]*$/", $name))//check if name is legit 
            {
                header("Location: ../contact.php?signup=char");
                exit();
            }

            if(!preg_match("/^[0-9]*$/", $telephone))//
            {
                header("Location: ../contact.php?signup=invalidtelephone");
                exit();
            }
               
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))//check if email is legit 
            {
                header("Location: ../contact.php?signup=invalidemail");
                exit();
            }
            else
            {
                header("Location: ../contact.php?signup=success");
                exit();
            };
            
       
      
        }
         
   }   

  /* else 
    {
        header("Location: index.php?signup=error");//if not go back to main index  ,? placeholder 
    }*/
