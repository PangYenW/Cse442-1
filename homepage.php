<?php include 'database.php' ; ?>

<!DOCTYPE html>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> UBStalking'-' </title>
    <h1>UBStalking'-'</h1>
</head><!---->
<body>
  <!-- here is the search bar-->
  <div>
  <form action="ProfessorProfileTemplate.php" method="post">
    <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = "search"  maxlength ="50"
    autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" name = "submit-search" value="Go!"/>
  </form>
  </div>


  <nav>
    <div class = "logo" href="homepage.html">
      <h3> UBStalking'-' </h3>
    </div>
    <ul class = "nav-sub">
      <li><a href="ScheduleMatching.html">Schedule Matching</a>
      </li>
      <li><a href="OfficeNavigation.html">Office Navigation</a>
      </li>
      <li><a href="#">Report Bugs</a>
      </li>
    </ul>
  </nav>

</body>
</html>



