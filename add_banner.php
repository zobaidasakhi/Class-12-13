<?php

include "./inc/header.php";
?>



<h2>Add Banners</h2>
<div class="card">
    <div class="card-header bg-primary text-light">
        Add New Banner
</div>

    <div class= "card-body">
<form action="../controller/banner_store.php" method="POST" enctype="multipart/form-data">

<div class="row align-items-center">
<div class="col-lg-3">
<label for="bannerImg">
    <img  class="imagePlaceHolder" src="https://www.decoratinghub.co.uk/wp-content/uploads/2022/05/product-placeholder.gif" alt="" style="width: 100%; display:block;">
</label>
<?php
   if(isset($_SESSION['errors']['banner_img'])){
             ?>
    <span class="text-danger">            
       <?=$_SESSION['errors']['banner_img'] ?>
       </span>
                                               
      <?php
          } 
         ?>
<input type="file"class="d-none bannerInputImage" id="bannerImg" name="banner_img">

</div>
<div class="col-lg-9">
    <label class="w-100">
        Insert a Banner Title <span class="text-danger">*</span>

<input type="text" name="title" class="form-control">
<?php
   if(isset($_SESSION['errors']['title'])){
             ?>
    <span class="text-danger">            
       <?=$_SESSION['errors']['title'] ?>
       </span>
                                               
      <?php
          } 
         ?>
    </label>
    <label class="w-100">
        Insert a Banner Title Video Link<span class="text-danger">*</span>

<input type="text" name="video" class="form-control">
<?php
   if(isset($_SESSION['errors']['video'])){
             ?>
    <span class="text-danger">            
       <?=$_SESSION['errors']['video'] ?>
       </span>
                                               
      <?php
          } 
         ?>
    </label>
    <label class="w-100">
        Insert a Banner Description<span class="text-danger">*</span>

<textarea name="detail" class="form-control" ></textarea>
<?php
   if(isset($_SESSION['errors']['detail'])){
             ?>
    <span class="text-danger">            
       <?=$_SESSION['errors']['detail'] ?>
       </span>
                                               
      <?php
          } 
         ?>
    </label>
</div>


</div>
<button name="submit" class="btn btn-primary float-right" >Insert Banner</button>

</form>

    </div>
</div>


<?php

include "./inc/footer.php";
unset($_SESSION['errors']);
?>
<script>
    let inputImage = document.querySelector('.bannerInputImage')
let imagePlaceholder = document.querySelector('.imagePlaceHolder')
inputImage.addEventListener('change', function(e) {
let objectUrl = window.URL.createObjectURL(e.target.files[0])
imagePlaceholder.src = objectUrl
})



</script>