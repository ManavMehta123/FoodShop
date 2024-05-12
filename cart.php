<?php 
if (isset($_POST['submit'])) {
    foreach($_POST['quantity'] as $key => $val) {
        if($val==0) {
            unset($_SESSION['cart'][$key]);
        }else{
            $_SESSION['cart'][$key]['quantity']=$val;
        }
    }
}
?> 
   
<h1>View cart</h1> 
<a href="menu3.html">Go back to the products page.</a>
<form method="post" action="menu3.php?page=cart">
    <table>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Items Price</th>
        </tr>
        <?php 
        
           
          //  $stmt = $mysqli->prepare("SELECT * FROM products WHERE id_product IN (?)");
          //  $stmt->bind_param("s", $strIds);
          //  $stmt->execute();
          //  $result = $stmt->get_result();
 
         //   $totalprice=0; 
           
          //   $subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price']; 
           //  $totalprice+=$subtotal; 
            ?>
               <tr> 
                   <td><?php echo $row['name'] ?></td> 
                    <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td> 
                    <td><?php echo $row['price'] ?>$</td> 
                 
                </tr> 
            <?php 
            
        ?> 
        <tr> 
            <td colspan="4">Total Price: <?php echo $totalprice ?></td> 
        </tr> 
    </table> 

    <button type="submit" name="submit">Update Cart</button> 
</form> 
<br /> 
<p>To remove an item set its quantity to 0. </p>