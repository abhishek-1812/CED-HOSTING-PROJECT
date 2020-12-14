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
require '../dbcon.php';
require 'Productclass.php';
$obj = new dbcon();
$data = $obj->connect();
?>
<div class="conatiner-fluid mt-3">
<h1 class="text-center mb-4">ADD-CATEGORY</h1>

<form action="" method="POST" class="ml-5 mr-5">

  <div class="form-group">
    <input type="text" class="form-control text-center mb-3" id="a" aria-describedby="emailHelp" value="HOSTING" disabled>
  </div>

  <div class="form-group">
    <input type="text" class="form-control text-center mb-3" id="name" placeholder="Enter Product Name here!" required> 
  </div>

  <div class="form-group">  
    <input type="text" class="form-control text-center mb-3" id="link" placeholder="Link" required>
  </div>

  <div class="form-group">
    <input type="text" class="form-control text-center mb-3" id="avail" placeholder="Product Available" required>
  </div>

  <button type="submit" id="submit" class="btn btn-primary btn-block mb-5">Submit</button>

</form>
</div>
<div class="conatiner text-center">  
<table id="example" class="table table-striped" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>PARENT ID</th>
                <th>PRODUCT NAME</th>
                <th>LINK</th>
                <th>AVAILABILTY</th>
                <th>LAUNCH DATE</th>
                <th>ACTION</th> 
            </tr>
        </thead>
    </table>
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
      </div>
     
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        var name;
        var link;
        var available;
        var pname;
        var plink;
        var pavailable;

        $("#submit").click(function(){
        
            var letter = /^([a-zA-Z]+\s?)*$/;

            name = $("#name").val();
            link = $("#link").val();
            available = $("#avail").val();

           
            if (name=="") {
                alert('Please Enter Product Name !');
                $("#name").focus();
                return false;

            } else if (link=="") {
                alert("Please Enter Link !");
                $("#link").focus();
                return false;

            } else if (available =="") {
                alert("Please Enter Availabilty !");
                $("#avail").focus();
                return false;
            } else {
                var action = "enterProduct";
                $.ajax({
                    url : '../ajaxaction.php',
                    type: 'POST',
                    data: {
                    name: name,
                    link: link,
                    available: available,
                    action : action 
                },
                success:function(data){
                    alert(data);
                } 

                });
            }

        })
        $('#example').on("click",'.delete', function(){
            if(confirm("Are you sure you want to delete Product?")==true){
            var id = $(this).data("did");
            // alert(id);
            var element = $(this).val();
            var action ='deleteProduct';
            $.ajax({
                url : '../ajaxaction.php',
                type : "POST",
                data : {id:id, action:action},
                success : function (data) {
                  if(data==1){
                    window.location.reload(true);
                    $(element).closest("tr").fadeOut();
                   } else {
                     alert(data);
                   }
                }
            });
        }
        });

        $('#example').on("click",'.edit', function(){
            var id = $(this).data("eid");
            // alert(id);
            var element = $(this).val();
            var action ='editProduct';
            $.ajax({
                url : '../ajaxaction.php',
                type : "POST",
                dataType : 'json',
                data : {id:id, action:action},
                success : function (data) {
                  var output;
                  for(var i=0;i<data.length;i++) {
                  output='';
                  output+= '<form action="" method="POST" autocomplete="off">\
                      <div class="form-group">\
                      <input type="text" class="form-control text-center mb-3" id="a" aria-describedby="emailHelp" value="HOSTING" disabled></div>\
                      <div class="form-group">\
                      <input type="text" class="form-control text-center mb-3" id="pname" value="'+data[i]["prod_name"]+'"></div>\
                      <div class="form-group"><input type="text" class="form-control text-center mb-3" id="plink" value="'+data[i]['html']+'">\
                      </div>\
                      <div class="form-group">\
                      <input type="text" class="form-control text-center mb-3" id="pavail" value="'+data[i]['prod_available']+'">\
                      </div>\
                      <div class="modal-footer">\
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>\
                      <button type="button" class="btn btn-success update" data-uid="'+data[i]["id"]+'" >UPDATE</button>\
                      </div>\
                    </form>';
                  }
                $('.insert').html(output); 
                }
            });
          });
            $('#example').DataTable({
            "ajax": '../ajaxaction.php?fetchData=1'
            });

            $(document).on('click','.update',function(){
              var id = $(this).data("uid");

              pname = $("#pname").val();
              plink = $("#plink").val();
              pavailable = $("#pavail").val();
              //alert(id);
              var action ='UpdateProduct';
            $.ajax({
                url : '../ajaxaction.php',
                type : "POST",
                data : {id:id, pname:pname, plink:plink, pavailable:pavailable, action:action},
                success : function (data) {
                   if(data==1){       
                    alert("Updated Successfully !");
                    window.location.reload(true);
                   } 
                }
            });
            });
        
});

</script>

<?php
require 'footer1.php';
?>
