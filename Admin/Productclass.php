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
 * This is a "Docblock Comment," also known as a "docblock."  The class'
 * docblock, below, contains a complete description of how to write these.
 */

class Productclass
{
    public $name;
    public $link;
    public $avail;

    public function EnterProduct($name, $link, $avail, $data)
    {
        $sql = "INSERT INTO `tbl_product` (`prod_name`,`html`,`prod_available`) 
            VALUES ('".$name."','".$link."','".$avail."')";

        if ($data->query($sql) === true) {    
            $msg = 'Product Added Succesfully';  
        } else {
            $msg =  'Error';
        } 
        return $msg;       
    }   
    public function fetchProduct($data)
    {
        $row['data'] = array();
        $sql = "SELECT * FROM `tbl_product` WHERE `id` <> '1'";
        $result = $data->query($sql);
        // $i = 1;
        if ($result->num_rows>0) {
            while ($data = $result->fetch_assoc()) {
                $row['data'][] = array($data['id'], $data['prod_parent_id'], $data['prod_name'], $data['html'], $data['prod_available'], $data['prod_launch_date'],"<input type='submit' class='btn btn-danger delete' data-did='$data[id]' value='DELETE'><input type='submit' class='btn btn-success edit' data-eid='$data[id]' value='EDIT' data-toggle='modal' data-target='#exampleModal'>");
            }
            return json_encode($row);
        } else {
            return false;
        }       
    }
    public function deleteProduct($id, $data)
    {
        $sql = "DELETE FROM `tbl_product` WHERE `id` = '$id'";

        if ($data->query($sql) === true) {
            $out = 1;
        } else {
            $out =  "Error deleting record: " . $data->error;
        }
        return $out;
    }
    public function EditProduct($id, $data)
    {

        $sql = "SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $result = $data->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dat[]=$row;
            }
            return json_encode($dat);
        } else {
            return 'No data Found';
        }
    }
    public function UpdateProduct($id, $name, $link, $avail, $data)
    {
        $output;
        $sql = "UPDATE `tbl_product` SET `prod_name`= '$name' ,`html`='$link',`prod_available`='$avail' WHERE `id`='$id'";
        if ($data->query($sql) === true) {
            $output =  1;
        } else {
            $output =  "Error updating record: " . $data->error;
        }
          return $output;
    }

    public function InsertProduct($sel, $pname, $url, $monthprice, $annualprice, $sku, $desc, $data)
    {
        $sql = "INSERT INTO `tbl_product`(`prod_parent_id`,`prod_name`,`html`,`prod_available`,`prod_launch_date`) VALUES 
        ('$sel','$pname','$url','1',NOW())";

        if ($data->query($sql) === true) {

            $last_id=$data->insert_id;

            $sql1 = "INSERT INTO `tbl_product_description`(`prod_id`,`description`,`mon_price`,`annual_price`,`sku`) VALUES('$last_id',
            '$desc','$monthprice','$annualprice','$sku')";

            if ($data->query($sql1) === true) {
                $output = "Product Added Successfully";
            }
        } else {
                $output =  "Error updating record: " . $data->error;
        }
          return $output;
    }
    public function viewProduct($data)
    {       
        $row['data'] = array();
        $sql="SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON tbl_product.id = tbl_product_description.prod_id";
        $dat=$data->query($sql);
        if ($dat->num_rows>0) {
            while ($row=$dat->fetch_assoc()) {
                // if ($row['prod_available']=='1') {

                //     $available="available";
                // }
                // else {
                //     $available="unavailable";
                // }
                $desc=json_decode($row['description']);

                $webs=$desc->{'webspace'};
                $band=$desc->{'bandwidth'};
                $domain=$desc->{'domain'};
                $language=$desc->{'lang'};
                $mail=$desc->{'mail'};

        

                $arr['data'][] = array($row['prod_parent_id'], $row['prod_name'], $row['html'], $row['mon_price'],
                $row['annual_price'],$row['sku'],$row['prod_available'],$row['prod_launch_date'], $webs, $band, $domain, $language, $mail, "<a href='javascript:void(0)' class='btn btn-success'
                data-eid='".$row['prod_id']."' id='editcategory' data-toggle='modal' data-target='#exampleModal'>EDIT</a> <a href='javascript:void(0)' 
                class='btn btn-danger' data-did='".$row['prod_id']."' id='deletecategory'>DELETE</a>"); 
            }
    
            return json_encode($arr);
        
        } else {
            return false;
        }
   
    }
    public function displayService($data)
    {
        $sql = "SELECT * FROM  `tbl_product` WHERE `prod_parent_id`=1";
        $result = $data->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dat[]=$row;
            }
            return $dat;
        } else {
            return 'No data Found';
        }
    }
    public function editAllProduct($id, $data)
    {     
        $arr = array();  
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`id` = '$id' ";
        $result =$data->query($sql);
        while ($dat = $result->fetch_assoc()) {
        
            $decoded = json_decode($dat['description']);
            $web = $decoded->{'webspace'};
            $band = $decoded->{'bandwidth'};
            $domain = $decoded->{'domain'};
            $lang = $decoded->{'lang'};
            $mail = $decoded->{'mail'};

            $arr[] = array("prod_id"=>$dat['prod_id'], "prod_parent_id"=>$dat['prod_parent_id'], "prod_name"=>$dat['prod_name'], "html"=>$dat['html'], "prod_available"=>$dat['prod_available'], "prod_launch_date"=>$dat['prod_launch_date'],"webspace"=>$web, "bandwidth"=>$band, "domain"=>$domain, "lang"=>$lang, "mail"=>$mail, "mon_price"=>$dat['mon_price'], "annual_price"=>$dat['annual_price'], "sku"=>$dat['sku'], "id"=>$dat['id']);
        }
        return json_encode($arr);
    }
    public function UpdatedProduct($sel, $pname, $url, $monthprice, $annualprice, $sku, $space, $domain, $band, $tech, $mail, $pid, $data)
    {
        $description = array(
            'webspace'=>$space,
            'bandwidth'=>$band,
            'domain'=>$domain,
            'lang'=>$tech,
            'mail'=>$mail
        );
        $jsonDesc = json_encode($description);


        $sql = "UPDATE `tbl_product` SET `prod_parent_id` = '$sel', `prod_name` = '$pname', `html` = '$url'
        WHERE `id` = '$pid' ";
        if ($data->query($sql) === true) {
          
            $sql1 = "UPDATE `tbl_product_description` SET `description` = '$jsonDesc', `mon_price` = '$monthprice', `annual_price` = '$annualprice', `sku` = '$sku'
            WHERE `prod_id` = '$pid' ";

            if ($data->query($sql1) === true) {

                $msg = "Record updated successfully";
                
            } else {
                $msg = "Error updating record: " .$data->error;
            }
        } else {
            $msg = "Error updating record: " . $data->error;
        }
        return $msg;
    }
    public function deleteAllProduct($id, $data)
    {      
        $sql = "DELETE `tbl_product`,`tbl_product_description` FROM `tbl_product`
        INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`
        WHERE `prod_id`='$id'";

        if ($data->query($sql) == true) {

            $msg=1;
           
        } else {
            $msg =  "Error deleting record: " . $data->error;
        }
        return $msg;
    }
    public function FetchHosting($id, $data)
    {
        $sql = "SELECT * FROM `tbl_product` WHERE `id`='$id'";
        $result = $data->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        } else {
            echo "0 results";
        }

    }
}
?>