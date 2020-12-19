<?php
/**
 * Short description for code
 * php version 7.2.10
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName
 * 
 * This is a "Docblock Comment," also known as a "docblock".
 */
require 'header.php';
$cart = array();
if (isset($_REQUEST['id'])) {

    $id = $_GET['id'];
    $monthprice = $_GET['mp'];
    $annualprice = $_GET['ap'];
    $space = $_GET['sp'];
    $domain = $_GET['dm'];
    $band = $_GET['bd'];
    $lang = $_GET['lg'];
    $mail = $_GET['ml'];

    $cart =  array('id'=>$id,'mon_price'=>$monthprice,'annualprice'=>$annualprice,'space'=>$space,'domain'=>$domain,'band'=>$band,'lang'=>$lang,'mail'=>$mail);
    $_SESSION['cart'][] = $cart;
    // echo '<pre>';
    // print_r($_SESSION['cart']);
    // session_destroy();
    ?>
<table class="table table-bordered">
    <!-- <caption>CART DATA</caption> -->
    <thead class="thead-dark ">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">MONTHLY PRICE</th>
            <th scope="col">ANNUALY PRICE</th>
            <th scope="col">WEB SPACE</th>
            <th scope="col">DOMAIN</th>
            <th scope="col">BANDWIDTH</th>
            <th scope="col">TECHNOLOGY</th>
            <th scope="col">MAILBOX</th>
            <th scope="col">ACTION</th>
            <!-- <th scope="col">QUANTITY</th> -->
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($_SESSION['cart'] as $row) {
        ?>
        <tr onclick="deleteRow(this)">           
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['mon_price'];?></td>
            <td><?php echo $row['annualprice'];?></td>
            <td><?php echo $row['space'];?></td>
            <td><?php echo $row['domain'];?></td>
            <td><?php echo $row['band'];?></td>
            <td><?php echo $row['lang'];?></td>
            <td><?php echo $row['mail'];?></td>
            <td><input type="submit" class="btn btn-danger" value="REMOVE"></td>
            <!--<td>1</td>-->
        </tr>
        <?php
        }
        ?>
    </tbody>
  </table>
  <div class="div text-center mt-5">
  <button type="button" class="btn btn-success">CHECKOUT</button>
  </div>
<?php
} else {
    //echo '<h3><center>0 PRODUCT IN CART</center></h3>';
    //header('Location:catpage.php');
}
?>
<?php
require 'footer.php';
?>
<script>
    function deleteRow(x)
    {
        //alert(x.rowIndex);
        var id = x.rowIndex;
        window.location.href="deletePage.php?id="+id;
    }

</script>