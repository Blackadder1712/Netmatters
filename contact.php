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
              <div class= "con-info">
                <h1>Email us on:</h1>
                <div class= "email-con">sales@netmatters.com</div>
                <h1>Business hours:</h1>
                <h1>Monday - Friday 07:00-18:00</h1>
                <h1>Out of Hours IT Support <a class="arrow"><i class="fa-solid fa-chevron-down"></i></a></h1>
              </div>

                    <!--The Email-form-->
              <div class="email-box-2">
                <div class="holder">
                  <div class="email-form-2" id="email-form">

                   

                    <div class= "email-sec">
                        <div class="nameandemail-2" id="emails">
                          <div class="email-3">
                            <label for="exampleFormControlInput1" class="form-label">Your Name <i
                                class="fa-solid fa-asterisk"></i></label>
                            <input type="email" class="form-control-email" id="exampleFormControlInput1">


                          </div>

                          <div class="email-3">

                            <label for="exampleFormControlInput2" class="form-label">Company Name </label>
                            <input type="email" class="form-control-email" id="exampleFormControlInput2">



                          </div>

                          <div class="email-3">

                            <label for="exampleFormControlInput2" class="form-label">Your Email <i
                                class="fa-solid fa-asterisk"></i></label>
                            <input type="email" class="form-control-email" id="exampleFormControlInput2">



                          </div>

                          <div class="email-3">

                            <label for="exampleFormControlInput2" class="form-label">Your Telephone Number  <i
                                class="fa-solid fa-asterisk"></i></label>
                            <input type="email" class="form-control-email" id="exampleFormControlInput2">
                          </div>  
                    </div> 

                      <div class="email-3">

                        <label for="exampleFormControlInput2" class="form-label">Subject <i
                            class="fa-solid fa-asterisk"></i></label>
                        <input type="email" class="form-control-email" id="exampleFormControlInput2">
                      </div>  

                      <div class="email-3">

                          <label for="exampleFormControlInput2" class="form-label">Message <i
                              class="fa-solid fa-asterisk"></i></label>
                          <input type="email" class="form-control-email" id="exampleFormControlInput2">
                      </div>  

                      






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
                      <button type="button" class="btn btn-primary-subscribe" id="contact-sub">SEND ENQUIRY</button>
                      <h1 class="required"><i class="fa-solid fa-asterisk"></i> Fields Required</h1>
                    </div>



                  </div>
                </div>
              </div>
          </div>    




                 

              
          
        
        </div>
      </div>
      <?php include 'Reusable/footer.php';?>
      
    </body>


</html>