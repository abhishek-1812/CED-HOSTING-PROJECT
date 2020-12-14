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
$obj = new dbcon();
$data = $obj->connect();
$prodobjects = new Productclass();
$msg  = $prodobjects->displayService($data);
?>

<div class="container-fluid mt-5">
      <div class="row">
      <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <table id="product" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Product Parent id</th>
                        <th>Product Name</th>
                        <th>link</th>
                        <th>Monthly Price</th>
                        <th>Annual Price</th>
                        <th>SKU</th>
                        <th>Available</th>
                        <th>Date</th>
                        <th>Web Space</th>
                        <th>Bandwidth</th>
                        <th>Free Domain</th>
                        <th>Technology</th>
                        <th>Mail Box</th>
                        <th>Action</th>
                    </tr>
                </thead>              
             </table>
           </div>
         </div>
       </div>       
     </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT PRODUCT DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body insert">
      <form action="" method="POST">
                <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"><span>Select Product Category <label style="color:red">*</label></span></label>
                        <select class="form-control" id="sel">
                        <option value="CHOOSE" SELECTED>CHOOSE</option>
                        <?php foreach($msg as $key=>$val) : ?>
                        <option value="<?php echo $val['prod_name'];?>"><?php echo $val['prod_name'];?></option>
                        <?php endforeach;?>
                         
                        </select>
    
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
                <input type="hidden" id="abhisak">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                
                <button type="button" id="updated" class="btn btn-success">UPDATE</button>
             
              </form>
      </div>     
    </div>
  </div>
</div>

</body>

<script>
    $(document).ready(function(){


      $('#product').on("click",'#editcategory', function(){
     
        var id = $(this).data("eid");
        var element = $(this).val();
        var action ='editAllProduct';
        $.ajax({
                url : '../ajaxaction.php',
                type : "POST",
                dataType : 'json',
                data : {id:id, action:action},
                success : function (data) {
                    //console.log(data);
                    $('#pname').val(data[0]['prod_name']);
                    $('#url').val(data[0]['html']);
                    $('#monthprice').val(data[0]['mon_price']);
                    $('#annualprice').val(data[0]['annual_price']);
                    $('#sku').val(data[0]['sku']);
                    $('#space').val(data[0]['webspace']);
                    $('#band').val(data[0]['bandwidth']);
                    $('#domain').val(data[0]['domain']);
                    $('#tech').val(data[0]['lang']);
                    $('#mailbox').val(data[0]['mail']);
                    $('#abhisak').val(data[0]['prod_id']);
                }
            });      
      })

      $('#updated').click(function(){
             
        var pid = $('#abhisak').val();
        var name = $('#prod_name').val();
        var url = $('#url').val();
        var monthprice = $('#monthprice').val();
        var annualprice = $('#annualPrice').val();
        var sku = $('#sku').val();
        var webspace = $('#space').val();
        var bandwidth = $('#band').val();
        var domain = $('#domain').val();
        var language = $('#tech').val();
        var mail = $('#mail').val();
      
        // alert(cid);
       
        var action = 'updateProduct';
        $.ajax({
            url : '../ajaxaction.php',
            type : 'POST',
            data : {
                pid : pid,
                name : name,
                url : url,
                monthprice : monthprice,
                annualprice : annualprice,
                sku : sku,
                webspace : webspace,
                band : band,
                domain : domain,
                language : language,
                mail : mail,              
                action : action
            },
            success : function(data)
            {
                alert(data);
                window.location.reload();
            }
        });

    });

    


});
  $('#product').DataTable({
    "ajax": "../ajaxaction.php?viewProduct=1"
  });


</script>
<?php
require 'footer1.php';
?>