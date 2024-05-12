<!DOCTYPE html>
<html>
  <head>
    <title>Order Form </title>
    <link href="2-theme.css" rel="stylesheet">
  </head>
  <body>
    <?php
    // (A) PROCESS ORDER FORM
   if (isset($_POST['name']) ) {
      require "process.php";
      echo $result == ""
        ? "<div class='notify'> order cancellation request has been sent </div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>

    <!-- (B) ORDER FORM -->
    <form id="orderform" method="post" target="_self">
      <label for="name">Name:</label>
      <input type="text" name="name" />
           <label for="email">Email:</label>
      <input type="email" name="email"/>

      <input type="submit" value="Cancel Order"/>
    </form>
  </body>
  
</html>