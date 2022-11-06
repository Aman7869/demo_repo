<?php
session_start();
if(!isset($_SESSION['name'])){
    header("location: ../index.php");
    exit;
}
$print = "";
$desc = "";
$alert = "";
include_once ('../config/config.php');
include CONTROLLER_PATH."contentController.php";
?>
<html>
  <head>
    <title>Content Page</title>
    <?php include __DIR__.'/link/contentLink.php';?>
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  </head>
  <body class="bg-info">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav1">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
        <ul class="nav navbar-nav">
            <li><a href="<?php echo BASE_URL;?>index.php" style="color: white;"><span class="glyphicon glyphicon-home" href="#"></span> Home</a></li>
            <li><a href="<?php echo BASE_URL;?>views/profile.php" style="color: white;"><span class="glyphicon glyphicon-user" href="#"></span> Profile</a></li>
            
            
     <li ><a href="#" style="color: white;"><span class="glyphicon glyphicon-earphone" ></span> Contact</a></li>
            <li ><a href="#" style="color: white;">About_Us</a></li>
            <li class="active"><a href="<?php echo BASE_URL;?>views/contentPage.php" style="color: white;"><i class="fa fa-fw fa-envelope"></i> Content_Page</a></li>
            <li><a href="<?php echo BASE_URL;?>views/category.php" style="color: white;"><i class="fa fa-fw fa-envelope"></i>Article</a></li>
            <li style="margin-left: 27cm;"><a href="<?php echo BASE_URL;?>views/logout.php" style="color: white;"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
       
      </ul>
      
    </div>
  </div>
</nav>


    <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document"  style="max-width: 1450px!important;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Article</h5>
            <button type="button" id="closebtn" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="contentPage.php" id="form1" method = "POST" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="snoEdit" id="snoEdit">
              
              <div id="flex">
                <div class="form-group col-sm-4">
                  <label for="tittle">Tittle</label>
                  <span style="color: red;">*</span>
                  <input type="text" class="form-control" id="tittleEdit" name ="tittleEdit"  required>
                </div>
                <!-- <?php //info($id, $conn);?> -->
                <div class="form-group col-sm-4">
                  <label for="tittle">Alias</label>
                  <span style="color: red;">*</span>
                  <input type="text" class="form-control" id="aliasEdit" name ="aliasEdit"required>
                </div>
                <div class="form-group col-sm-4">
                  <label for="tittle">Status</label>
                  <span style="color: red;">*</span>
                  <select class="form-select" name="status" id ="status" aria-label="Default select example" required>
                    <option  value="active">Active</option>
                    <option  value="inactive">Inactive</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="desc">Discription</label>
                <span style="color: red;">*</span>
                <textarea class="form-control ckeditor" id="descriptionEdit" name = "descriptionEdit"  rows="3" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <div class="form-group imagebrowser">
                <label style="color: black;">Add image</label>
                <!-- <input type="file" value="" name="file" id="file" class="form-control"> -->
                <input type="file"  name="image" id="upload_image" class="form-control crop_image">
                <input type="hidden" name="img" id="img" value="">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

   
    <?php echo $alert;?>
    <div class="container my-4" id="d1">
      <h2>Article</h2>
      <div class="mb-3">
        <form action="contentPage.php" method = "POST">
          
          <!-- <input type="hidden" name="snoEdit" id="snoEdit"> -->
          <div class="form-group">
            <label for="tittle" style="color: black; margin-top: 50px; "> Add Tittle</label>
            <input type="text" class="form-control" id="tittle" name ="tittle" required>
            
          </div>
          
          <div class="form-group">
            <!--  <label for="desc">Discription</label>
            <textarea class="form-control" id="description" name = "description" rows="3"  required></textarea> -->
          </div>
          
          <button type="submit" class="btn btn-primary my-4">Submit</button>
        </form>
      </div>
    </div>
    <div class=" my-4">
      
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Tittle</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php echo $print; ?>
        </tbody>
      </table>
    </div>
    <!-- <script>
    CKEDITOR.replace( 'descriptionEdit' );
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/ckeditor/ckeditor.js" ></script>
    <script>
    $(document).ready( function () {
   $('#myTable').DataTable();
    } );
    var edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
    element.addEventListener("click", (e)=>{
    // e.preventDefault();
    tr  = e.target.parentNode.parentNode;
    tittle = tr.getElementsByTagName("td")[0].innerText;
    image = tr.getElementsByTagName("td")[0].getAttribute("data-image");
    console.log(image);
    description = tr.getElementsByTagName("td")[1].getAttribute("data-attr");
    statusVal = tr.getElementsByTagName("td")[4].innerText;
    // image = tr.getElementsByTagName("td")[5].innerText;
    // console.log(image);
    if( statusVal == "active" || statusVal =="") {
    document.getElementById("status").value = "active";
    
    } else {
    document.getElementById("status").value = "inactive";
    
    }
    // console.log(tittle,statusVal);
    tittleEdit.value = tittle;
    aliasEdit.value = tittle;
    img.value = image;
    // console.log(descriptionEdit);
    snoEdit.value = e.target.id;
    console.log(e.target.id);
    sno1 = parseInt(e.target.id);
    
    
    
    CKEDITOR.instances['descriptionEdit'].setData(description);
    
    $('#editModal').modal('toggle');
    $("#closebtn").click(function(){
    $('#editModal').modal('hide');
    });
    });
    });
    var deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
    element.addEventListener("click", (e)=>{
    tr  = e.target.parentNode.parentNode;
    tittle = tr.getElementsByTagName("td")[0].innerText;
    // description = tr.getElementsByTagName("td")[1].innerText;
    description = tr.getElementsByTagName("td")[1].innerText;
    sno = e.target.id.substr(1,);      //leave first character from the string
    if(confirm("Are you sure want to delete this record")) {
    console.log("yes");
    
    window.location = `contentPage.php?delete=${sno}`;
    //create a form and use post request to submit a form
    } else {
    console.log("no");
    }
    });
    });
    </script>
    <script>
    $("#form1").submit( function(e) {
            var totalcontentlength = CKEDITOR.instances['descriptionEdit'].getData().replace(/<[^>]*>/gi, '').length;
            if( totalcontentlength < 20 ) {
                alert( 'Please enter description at least 20 words' );
                e.preventDefault();
            }
        });

    </script>
    <script type="text/javascript" src = "../js/signup_validation.js"></script>
    <script type="text/javascript" src="../js/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/jquery-validation/dist/additional-methods.min.js"></script>
  </body>
</html>