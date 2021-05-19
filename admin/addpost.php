<?php
include "sidebar.php";

if(isset($_POST['title']))
{
$title = $_POST['title'];
$des = $_POST['des'];
$catid = $_POST['catid'];
$dt = $_POST['dt'];
$img = $_FILES['img'];
$imgname = $_FILES['img']['name'];
$imgtmp = $_FILES['img']['tmp_name'];
$tm = time();
$filext = explode('.',$imgname);
$ext = end($filext);
$tm = time();
$upname = 'cms'.$tm.'.'.$ext;
$uploadfolder = "uploads/".$upname;
move_uploaded_file($imgtmp, $uploadfolder);

 
$sqlct = "SELECT * FROM `cats` WHERE `sno` = $catid";
$resultct = mysqli_query($con, $sqlct);
$rowct = mysqli_fetch_array($resultct);
$catname =    $rowct['catname'];



$sql ="INSERT INTO `posts` (`admin`, `title`, `des`,`cats`, `catid`, `dt`, `img`) 
VALUES ('$username', '$title', '$des', '$catname', '$catid', '$dt', '$upname');";

$result = mysqli_query($con,$sql);

echo "done";

    
}

?>


<div style="margin-top:-30px;">
<div class="alert alert-primary" role="alert"><button type="button" class="btn btn-outline-primary btn-lg" style="width:100%;">Editor Section</button></div>
 </div> <div class="container">
 <div class="row">
 <div class="col-9 border">
  <form action="addpost.php" method="post" enctype="multipart/form-data" class="form-group">
  <center><h4 class="btn btn-success  my-2" style="width:100%">Title</h4></center> 
  <input type="text" name="title" placeholder="Add title..." class="form-control" required>
  <br>
  <center><h4 class="btn btn-success" style="width:100%">Post Body</h4></center>
    <textarea class="form-control ckeditor" name="des" id="ckeditor"></textarea>
    
    </div>


<div class="col-3">
<div class="container border">
<label class="btn btn-success my-2" style="width:100%;" >Choose Date</label>
         
                    <input type='datetime-local' name="dt" class="form-control" />
                    

<br>
<label class="btn btn-success" style="width:100%;" >Choose Category</label>
<select class="form-control" name="catid">
<option value="null">Select Category</option>
<?php
                        $sql = "SELECT * FROM `cats`";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $catname =    $row['catname'];
                          $catid =    $row['sno'];

                            echo '<option value="'.$catid.'">'.$catname.'</option>';
                        }
                        ?>
  
</select>
<br>
<label class="btn btn-success" style="width:100%;" >Feature Image</label>
<input type="file" class="form-control" name="img"  id="">

<br><button type="submit" class="btn btn-primary btn-lg btn-block">Publish</button> 

</form>
</div>



</div>

    </div>

    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="ckeditor/ckeditor.js"></script>

    <?php
    include "footer.php";
    ?>