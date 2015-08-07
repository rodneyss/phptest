<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <title>PHP test</title>
</head>
<body>
  <div id="container">

    <header>
      <h1>My awesome website</h1>
      <nav>
          <ul>
            <li>Home</li>
            <li>Members</li>
            <li>Photos</li>
            <li>pages</li>
            <li>Discussions</li>
            <li>More</li>
          </ul>
      </nav>
    </header>

    <div id="content">

      <div id="left-container" class="content-cont">
        
          <h3>Top five posts</h3>
            <?php
              $data = file_get_contents("data.json");
                $json = json_decode($data, true);
           

              for($i = 0 ; $i < 5 ; $i++){

                $url =  $json[$i][url];
                $title = "<a href=" . $url . "><h4>" . $json[$i][title] . "</h4></a>";
                $thumb = "<img src=" . $json[$i][thumbnail] . ">";
                $desc = "<p>" . $thumb . $json[$i][description] . "</p>";
                $htmlStr = "<div class='posts'>" . $title . $desc . "</div>";


                echo $htmlStr;
              }
            ?>
        
      </div> <!-- left container end -->


      <div id="right-container" class="content-cont">
       
          <div id="imageWeek">
            <h4>Image of the week</h4>
            <img id="picWeek" src="">
            <button id="picture">See more</button>
          </div>


          <div id="quoteWeek">
            <h4>Quote of the week</h4>

            <div>
              <p id="qWeek"></p>
              <p id="qAuthor"></p>
            </div>
            <button id="quote">More quotes</button>
          </div>

       
      </div> <!-- right container end -->
    </div> <!-- content end -->
  </div> <!-- container end -->
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
  <script src="js/main.js"></script> 
</body>
</html>