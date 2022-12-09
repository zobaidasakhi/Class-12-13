<?php

include "./inc/header.php";
include "../Database/env.php";
$query = "SELECT * FROM benners";
$store = mysqli_query($connection,$query);
$fetch = mysqli_fetch_all($store, 1);

?>

<h2>All Banners</h2>
<table class ="table  w-100">

<tr>
<th>#</th>
<th>Banner Title</th>
<th>Banner Detail</th>
<th>Banner Image</th>
<th>Status</th>
<th>Action</th>
</tr>


<?php

foreach($fetch as $key=>$banner){
    ?>
    <tr>
    <td><?=++$key?></td>
    <td><?=$banner['title']?></td>
    <td><?=$banner['detail']?></td>
    <td>
    
    <img src="<?= "../uploads/banners/" . $banner['banner_img'] ?>" alr="" style="height:100px;">
    </td>
    <td>
<span class="badge <?= $banner['status'] == 0 ? 'bg-danger' : 'bg-success' ?> text-light"><?= $banner['status'] == 0 ? 'De-acvtive' : 'Active' ?></span>

    </td>
    <td>
    <a href="../controller/banner_status_update.php?id=<?= $banner['id'] ?>" class="btn btn-warning">
       <?=$banner['status'] != 0 ? 'De-active' : 'Active' ?> 
</a>
    <a href="#" class="btn btn-primary">Edit</a>
    <a href="../controller/banner_delete.php?id=<?= $banner['id'] ?>" class="btn btn-danger bannerDelete"> Delete</a>
</td>
    
    </tr>
<?php
}
?>



</table>

<?php

include "./inc/footer.php";

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let DeleteBtn = document.querySelectorAll(".bannerDelete")

for( i = 0; i < DeleteBtn.length; i++){

    DeleteBtn[i].addEventListener('click', function(e) {
     
        e.preventDefault();
        let url = e.target.href

        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location = url
  }

})

    

    });
}


</script>
   