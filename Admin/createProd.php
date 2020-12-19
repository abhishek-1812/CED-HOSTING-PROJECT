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
require 'header1.php';
require 'Productclass.php';
require '../dbcon.php';
$obj = new dbcons();
$data = $obj->connect();
$prodobjects = new Productclass();
$msg  = $prodobjects->displayService($data);
?>
<div class="container-fluid mt-3 ">
        <div class="row justify-content-center">
    <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header ">
              <div class="row align-items-center ">
                <div class="col-8 text-center ml-8">
                  <h4 class="mb-0  " style="font-size:35px">ADD PRODUCT</h4>
                </div>
               
              </div>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"><span>Select Product Category <label style="color:red">*</label></span></label>
                        <select class="form-control" id="sel">
                        <option value="CHOOSE" SELECTED>CHOOSE</option>
                        <?php foreach($msg as $key) : ?>
                        <option value="<?php echo $key['id'];?>"><?php echo $key['prod_name'];?></option>
                        <?php endforeach;?>
                         
                        </select>
                        <!-- <input type="text" id="input-username" class="form-control" placeholder="Category"> -->
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="pname"><span>Enter Product Name <label style="color:red">*</label></span></label>
                        <input type="text" id="pname" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="url"><span>Page URL</span></label>
                        <input type="text" id="url" class="form-control" placeholder="URL">
                      </div>
                    </div>
                    
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Product Description </h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="monthprice"><span>Enter Monthly Price <label style="color:red">*</label></span></label>
                        <input type="text" id="monthprice" class="form-control" placeholder="Price">
                           <h5 class="text-muted">This would be Monthly Plan </h5>
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="annualprice"><span>Enter Annual Price<label style="color:red">*</label></span></label>
                        <input type="text" id="annualprice" class="form-control" placeholder="Price">
                        <h5 class="text-muted">This would be Annual Price</h5>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="sku"><span>SKU<label style="color:red">*</label></span></label>
                        <input type="text" id="sku" class="form-control" placeholder="SKU">

                    </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Features</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="space">
                        <span>Web Space(in GB)<label style="color:red">*</label>
                        </span></label>
                        <input type="text" id="space" class="form-control" placeholder="IN GB">
                        <h5 class="text-muted">Enter 0.5 for 512 MB</h5>

                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="band"><span>Bandwidth (in GB) <label style="color:red">*</label></span></label>
                        <input type="text" id="band" class="form-control" placeholder="IN GB">
                        <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="domain"><span>Free Domain <label style="color:red">*</label></span></label>
                        <input type="text" id="domain" class="form-control" placeholder="Domain">
                        <h5 class="text-muted">Enter 0 if no domain available in this service</h5>

                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="tech"><span>Language / Technology Support<label style="color:red">*</label></span></label>
                        <input type="text" id="tech" class="form-control" placeholder="Technology">
                        <h5 class="text-muted"> Separate by (,) Ex: PHP, MySQL, MongoDB </h5>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="mailbox"><span>Mailbox <label style="color:red">*</label></span></label>
                        <input type="text" id="mailbox" class="form-control" placeholder="Mail">
                        <h5 class="text-muted">Enter Number of mailbox will be provided, enter 0 if none </h5>

                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4"/>
                <input type="submit" id="submit" class="btn btn-success" value="CREATE NOW"></input>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
      <script>
        $(document).ready(function(){

          //$('#submit').attr("disabled", true);

          var pname;
          var select;
          var url;
          var monthprice;
          var annualprice;
          var sku;
          var space;
          var band;
          var domain;
          var tech;
          var mailbox;

          // var fields = "#sel, #pname, #url, #monthprice, #annualprice, #sku, #space,\
          // #band, #domain, #tech, #mailbox";

          // $(fields).on('change', function() {
          //     if (allFilled()) {
          //         $('#submit').removeAttr('disabled');
          //     } else {
          //         $('#submit').attr('disabled', 'disabled');
          //     }
          // });

          // function allFilled() {
          //     var filled = true;
          //     $(fields).each(function() {
          //         if ($(this).val() == '') {
          //             filled = false;
          //         }
          //     });
          //     return filled;
          // } 

          $("#submit").click(function(event){

            event.preventDefault();
          
            sel = $("#sel").val();
            pname = $("#pname").val();
            url = $("#url").val();
            monthprice = $("#monthprice").val();
            annualprice = $("#annualprice").val();
            sku = $("#sku").val();
            space = $("#space").val();
            band = $("#band").val();
            domain = $("#domain").val();
            tech = $("#tech").val();
            mailbox = $("#mailbox").val();

            if (sel=="") {
              alert("Please Select Category !");
              $("#sel").focus();

            } else if (pname=="") {
              alert("Please Enter Product Name !");
              $("#pname").focus();

            }  else if (url=="") {
              alert("Please Enter Page URL !");
              $("#url").focus();

            }  else if (monthprice=="") {
              alert("Please Enter Monthly Price !");
              $("#monthprice").focus();

            } else if (annualprice=="") {
              alert("Please Enter Annual Price !");
              $("#annaulprice").focus();

            }  else if (annualprice=="") {
              alert("Please Enter Annual Price !");
              $("#annaulprice").focus();

            }  else if (sku=="") {
              alert("Please Enter SKU !");
              $("#sku").focus();

            } else if (space=="") {
              alert("Please Enter Space !");
              $("#sku").focus();

            } else if (band=="") {
              alert("Please Enter Bandwidth !");
              $("#band").focus();

            } else if (domain=="") {
              alert("Please Enter Domain !");
              $("#domain").focus();

            } else if (tech=="") {
              alert("Please Enter Technology !");
              $("#tech").focus();

            } else if (mailbox=="") {
              alert("Please Enter Mail !");
              $("#mailbox").focus();

            } else {

              var action = "InsertProduct";

              $.ajax({
                url: '../ajaxaction.php',
                type:'POST',
                // dataType:'json',
                data:{
                    sel:sel,
                    pname: pname,
                    monthprice: monthprice,
                    url: url,
                    annualprice: annualprice,
                    sku: sku,
                    space: space,
                    band: band,
                    domain: domain,
                    tech: tech,
                    mailbox: mailbox,
                    action:action   
                },              
               success: function(data)
                {
                      alert(data);  
                }
            }); 
            }
          });     
          
})
      </script>
<?php
require 'footer1.php';
?>
