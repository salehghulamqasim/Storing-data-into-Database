<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <title>myDatabaseProject</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
  <form action="Myphp.php" method="get">
      <center>
        <fieldset>
          <legend>	
          <img src="https://cdn-icons-png.flaticon.com/512/2906/2906206.png" style="width:50px;height:50px";>
          </legend>
               <label for="myNumber" name="myNumber"> Enter a Number</label>
               <input type="number" id="myNumber"  name="myNumber" placeholder=" integer " ></input>  
               <br>
               <button class="button-17" id="button" type="submit" value="send" > Submit </button>
        </fieldset>
    </center>
    </form>
    <div id="bottom"> Made by Saleh Ghulam </div>
    </body> 

</html>

<!-- 
  1-first we made a form to use our sql in html
  2-then we wrote a label to tell user what the box is about
  3-below the label we made a input box where user will type his integer
  4-after that by clicking 'submit' button the data will be sent to the DB
  5-another php page will show up ensuring the data have been inserted successfuly
 -->