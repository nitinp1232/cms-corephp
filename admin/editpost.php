<?php

include "sidebar.php";

$sno = $_GET['sno'];
$sql = "SELECT * FROM `posts` WHERE `sno` = '$sno'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
  $title =    $row['title'];
  $sno =    $row['sno'];
  $des =    $row['des'];
  $cats =    $row['cats'];
  $dt =    $row['dt'];
  $admin =    $row['admin'];
  $img =    $row['img'];
}



?>

<div style="margin-top:-30px;">
<div class="alert alert-primary" role="alert"><button type="button" class="btn btn-outline-primary btn-lg" style="width:100%;">Editor Section</button></div>
 </div> <div class="container">

 <div class="row">
 <div class="col-9 border">
  <form action="updatepost.php" enctype="multipart/form-data" method="post" class="form-group">
  <center><h4 class="btn btn-success  my-2" style="width:100%">Title</h4></center> 
  <input type="text" id="title" name="title" value="<?php echo $title; ?>" placeholder="Add title..." class="form-control" required>
  <input type="hidden" name="sno" value="<?php echo $sno; ?>">
  <br>
  <center><h4 class="btn btn-success" style="width:100%">Post Body</h4></center>
    <textarea class="form-control ckeditor" name="des" id="ckeditor"><?php echo $des; ?></textarea>
    
    </div>


<div class="col-3">
<div class="container border">
<label class="btn btn-success my-2" style="width:100%;" >Choose Date</label>
         
<input type='datetime-local'  placeholder="jmj" name="dt" id="dt" class="form-control">


<br>
<label class="btn btn-success" style="width:100%;" >Choose Category</label>
<select class="form-control" name="cats">
<option value="<?php echo $cats; ?>"><?php echo $cats; ?></option>
<?php
                        $sql = "SELECT * FROM `cats`";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $catname =    $row['catname'];

                            echo '<option value="'.$catname.'">'.$catname.'</option>';
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
    <script>
function myFunction() {
  document.getElementById("dt").value = "2014-02-09:05:06";
}
</script>

    <?php
    include "footer.php";
    ?>