<!DOCTYPE html>
<html>
  <head>
    <title>Order Form </title>
    <link href="2-theme.css" rel="stylesheet">
  </head>
  <body>
    <?php
    // (A) PROCESS ORDER FORM
    if (isset($_POST["name"])) {
      require "3-process.php";
      echo $result == ""
        ? "<div class='notify'>Thank You!We have received your order</div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>

    <!-- (B) ORDER FORM -->
    <form id="orderform" method="post" target="_self">
      <label for="name">Name:</label>
      <input type="text" name="name" />
           <label for="email">Email:</label>
      <input type="email" name="email"/>
      <label for="email">Adress:</label>
      <input type="address" name="address"/>

      <input type="submit" value="Place Order"/>
    </form>
  </body>
  
</html>
