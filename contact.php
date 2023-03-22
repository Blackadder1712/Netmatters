<!DOCTYPE html>
<html lang="en" id="html">

    <head>
    <script src="https://kit.fontawesome.com/271f4647db.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Netmatters|Full Service Digital Agency|Cambridgeshire & Norfolk| Netmatters </title>

    <link href="css/normalize.css" rel="stylesheet">
    <link href="javascript/animsition/animsition.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="javascript/slick/slick-theme.css" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="javascript/slick/slick.css">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="javascript/slick/slick-theme.css">

    <?php 
        require_once ("db/connect.php"); //connect to database 
        try
        {
          $results = $db->query('SELECT * from netmatters_maps');// get the data from table 
        }
        catch(Exception $e)
        {
          echo $e->getMessage();
          die();
        }
    
        $maps = $results->fetchAll(PDO::FETCH_ASSOC); //extract table data, indexed by column name , place in variable
   



    ?>

    </head>
    <body>
      <?php include 'Reusable/header.php';?>
      <?php include 'email-form/signup.inc.php';?>

      
      <div class="scrolling">

        <nav class="nav">

          <div class="inner-nav">
            <div class="nav-item">
              <div class="nav-link" id="bespoke"></div>


              <i class="fa-solid fa-table-cells" id="small-table"></i>

              <small>BESPOKE</small>
              SOFTWARE

            </div> 

            <div class="nav-item">

              <div class="nav-link" id="desktop"></div>

              <i class="fa-solid fa-desktop" id="small-desktop"></i>

              <small>IT</small>
              SUPPORT

            </div>

            <div class="nav-item">
              <div class="nav-link" id="chart"></div>
              <i class="fa-solid fa-chart-simple" id="small-chart"></i>

              <small>DIGITAL</small>

              MARKETING

            </div>

            <div class="nav-item">
              <div class="nav-link" id="phone"></div>
              <i class="fa-solid fa-phone" id="small-phone"></i>

              <small>TELECOMS</small>
              SERVICES


            </div>

            <div class="nav-item">
              <div class="nav-link"></div>
              <i class="fa-solid fa-code" id="small-code"></i>
              <small>WEB</small>
              DESIGN

            </div>

            <div class="nav-item">
              <div class="nav-link"></div>
              <i class="fa-solid fa-shield-halved" id="small-shield"></i>
              <small>CYBER</small>
              SECURITY

            </div>




            <div class="nav-item">
              <div class="nav-link" id="cap"></div>
              <i class="fa-solid fa-graduation-cap" id="small-cap"></i>
              <small>DEVELOPER</small>
              COURSE

            </div>
          </div>

        </nav>

       
          
          <div class= "Main-page-contact">
           <div class="contact-top">
                <div class="nav-button">
                    <a href="#" class=" btn-map-home">Home /</a>
                    <div class="home">  Our Offices</div>
                </div>
                <div class = "contact-header">Our Offices</div>
              </div>
           </div>
        
    
        
          
      
          
          <div class="map-deck">
            <?php
              
              foreach($maps as $map)
               {
                  echo' <div class="map-card" >
                          <img class="map-image" src='.$map["map_images"].' >
                          <div class="map-type">
                            <div class="map-body">
                              <a href = "#" class ="map-title">'.$map["map_title"]. '</a>
                              <p class="map-text" id="map-text">'.$map["map_info"].'
                            </p>
                              <a href="#" class="map-phone-'.$map["map_class"].'">'.$map["map_number"].'</a>
                              <div class "btn-box">
                               <a href="#" class="btn btn-map-card">VIEW MORE</a>
                              </div>
                        
                             
                              
                            
                            </div>
                            <div href="#" class="location">
                            '.$map["location"].'
                            </div>
                          </div>
                        </div>  
                  
                      ';

                }     


                    
            ?>
          </div>

          <div class= "contact-all"> 
              <div class= "con-info" id="con-info">
                <h1>Email us on:</h1>
                <div class= "email-con">sales@netmatters.com</div>
                <h1>Business hours:</h1>
                <h1>Monday - Friday 07:00-18:00</h1>
                <h1>Out of Hours IT Support <a class="arrow"><i class="fa-solid fa-chevron-down"></i></a></h1>
              </div>

                    <!--The Email-form-->
              <?php
              /* $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";//get url to identify error
               
               if(strpos($fullUrl, "signup=empty") == true )//check url for string 
               {
                  echo "<p class='pop'>Not all fields completed</p>"; //display error 
                  //exit();
               }

               if(strpos($fullUrl, "signup=char") == true )//check url for string 
               {
                  echo "<p class='pop'>Please enter valid name</p>"; //display error 
                 // exit();
               }

               else if(strpos($fullUrl, "signup=invalidtelephone") == true )//check url for string 
               {
                  echo "<p class='pop'>Please enter valid phone number</p>"; //display error 
                  //exit();
               }*/

               if(!isset($_GET['signup']))
               {
                //exit(); // exit if user not submitted form 
               }
               else
               {
                $signupCheck = $_GET['signup']; //check url
                
                if($signupCheck == "empty")
                {
                  echo "<p class='pop'>Not all fields completed</p>"; //display error // if form has empty url
                
                }
                elseif($signupCheck == "char")
                {
                  echo "<p class='pop'>Please enter valid name</p>"; //display error 
                }
                elseif($signupCheck == "invalidtelephone")
                {
                  echo "<p class='pop'>Please enter valid phone number</p>"; //display error 
                }

                elseif($signupCheck == "email")
                {
                  echo "<p class='pop'>Please enter valid email</p>"; //display error 
                }

                elseif($signupCheck == "success")
                {
                  echo "<p class='pop'>Thankyou for your query! We shall contact you shortly !</p>"; //display error 
                }


               }
              ?>
              <div class="email-box-2">
                <div class="holder">                 
                  <form action= "email-form/signup.inc.php" method="POST">
                   
                    <div class="email-form-2" id="email-form">

                    

                      <div class= "email-sec">
                          <div class="nameandemail-2" id="emails">
                            <?php 
                              if(isset($_GET['name']))
                              {
                                
                                $name = $_GET['name'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Name <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="name" class="form-control-email" id="exampleFormControlInput1" value="'.$name.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo' <div class="email-3">
                                         <label for="exampleFormControlInput1" class="form-label">Your Name <i
                                            class="fa-solid fa-asterisk"></i></label>
                                          <input  name="name" class="form-control-email" id="exampleFormControlInput1">
   
   
                                        </div>';
                              }

                              if(isset($_GET['company']))
                              {
                                
                                $company = $_GET['company'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Company Name <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="company" class="form-control-email" id="exampleFormControlInput1" value="'.$company.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Your Company Name <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="company" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              
                              if(isset($_GET['email']))
                              {
                                
                                $email = $_GET['email'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Email <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="email" class="form-control-email" id="exampleFormControlInput1" value="'.$email.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Your Email <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="email" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              if(isset($_GET['telephone']))
                              {
                                
                                $telephone = $_GET['telephone'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Telephone Number <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="telephone" class="form-control-email" id="exampleFormControlInput1" value="'.$telephone.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Your Telephone Number <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="telephone" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              if(isset($_GET['subject']))
                              {
                                
                                $subject = $_GET['subject'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Subject<i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="subject" class="form-control-email" id="exampleFormControlInput1" value="'.$subject.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Subject <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="subject" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              
                              if(isset($_GET['message']))
                              {
                                
                                $message = $_GET['message'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Message <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="message" class="form-control-email" id="exampleFormControlInput1" value="'.$message.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Message <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="message" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }
                            ?>
                        


                   
                      </div>

                      <div class="form-check">


                        <div class="box">
                          <label class="tick">

                          <input type="checkbox">
                          <span class="checkmark"></span> 

                          </label>
                        </div>



                        <div class="email-text">



                          Please tick this box if you wish to recieve marketing information from us. Please see our <a
                            href="#">Privacy
                            Policy</a>
                          for more information on how we keep your data safe.
                        </div>

                      </div>


                      <!--Subscribe Button-->
                      <div class="sub">
                        <button type="submit" name ="submit" class="btn btn-primary-subscribe" id="contact-sub">SEND ENQUIRY</button>
                        <h1 class="required"><i class="fa-solid fa-asterisk"></i> Fields Required</h1>
                      </div>



                    </div>
                 </form>  
                </div>
              </div>


          </div>    




                 

              
          
        
        </div>
      </div>
      <?php include 'Reusable/footer.php';?>
      
    </body>


</html>