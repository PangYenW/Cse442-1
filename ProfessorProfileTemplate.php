<?php
	include 'database.php';
?>

<!DOCTYPE html>

<html>
<head>
  <title>Professor's Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="ScheduleMatching.css">
    <meta charset = "utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  </head>
  <body>
    <nav>
      <div class = "logo" href="homepage.html">
        <h3> UBStalking'-' </h3>
      </div>

      <form action="" method="post">
          <input type = "text" name = "search" id = "search-bar" placeholder = "Search for your professors!" value ="" maxlength ="50"
          autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" name = "submit-search"  id = "search-btn" value="Go!"/>
      </form>

      <input type="checkbox" id="nav-toggle" class="nav-toggle"/>

        <div class="menu">
          <ul>
          <li>
          <a href="homepage.php">Home</a></li>
          <li>
          <a href="OfficeNavigation.html">Office Navigation</a></li>
          <li>
          <a href="ScheduleMatching.html">Schedule Matching</a></li>
          <li>
          <a href="#">Report Bugs</a></li>
          </ul>
      </div>

      <label for="nav-toggle" class="burger"><span></span></label>
    </nav>

<h2>Find the professors:<h2>

<div class = "professor-container">
  <?php
  	if(isset($_POST['submit-search'])){
  		$search = mysqli_real_escape_string($con, $_POST['search']);
  		$sql = "SELECT * FROM message WHERE name LIKE '%$search%'";
    	$result = mysqli_query($con, $sql);
    	$queryResults = mysqli_num_rows($result);

    	if($queryResults >0){
    		while($row = mysqli_fetch_assoc($result)){
      		echo "<div>
        	<h2>".$row['name']."</h2>
        	<p>".$row['Office']."</p>
        	<p>".$row['Hours']."</p>
        	<p>".$row['Current course']."</p>
      		</div>";
    }

    	}else{
    		echo "There are no result matching your search!";
    	}
  	}

  ?>
</div>

<h2>Rate this Professor</h2>
    <input type='text' id='messageInput'  placeholder='Enter comments here...'>
    <button type="button" onclick="savedata()">Post & Save</button>
    <br><br><br>
    <hr>
    <h2>Comments</h2>
    <textarea rows="10" cols="50" id="results" readonly></textarea>
    <script>
    var messagesRef = new Firebase('https://ubstalking-19cf2.firebaseio.com/');
    var messageField = document.getElementById('messageInput');
    var messageResults = document.getElementById('results');
    // Save data to firebase
    function savedata(){
      var message = messageField.value;
      messagesRef.push({fieldName:'messageField', text:message});
      messageField.value = '';
    }
    // Update results when data is added
    messagesRef.limitToLast(10).on('child_added', function (snapshot) {
        var data = snapshot.val();
        console.log(snapshot.val());
        var message = data.text;
        if (message != undefined)
        {
          messageResults.value += '\n' + message;
        }
    });
    </script>
    </body>
</html>
