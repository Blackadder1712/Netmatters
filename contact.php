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

        <div class= "Main-page">
          <?php
            foreach($maps as $map)
            {
                echo' <div class="map-card">
                        <img class="map-image" src='.$map["map_images"].' alt="benefits of modern intranet">
                        <div class="map-type">
                          <div class="map-body">
                            <a href = "#"<h5 class="card-title-'.$map["map_class"].'">'.$map["map_title"]. '</h5></a>
                            <p class="card-text" id="card-text">'.$map["map_info"].'
                          </p>
                            <a href="#" class="map-phone-'.$map["map_class"].'">'.$map["map_number"].'</a>
                            <a href="#" class="btn btn-map-card">READ MORE</a>
                            <div href="#" class="location">
                            '.$map["location"].'
                            </div>
                            
                          
                          </div>
                        </div>
                
                      </div>';

              }     
                  
          ?>

            
        
        </div>
      </div>
      <?php include 'Reusable/footer.php';?>
      
    </body>


</html>