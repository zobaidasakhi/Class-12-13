<?php
include "./inc/header.php";

?>
                    
                    <h1 class="h3 mb-4 text-gray-800">WELCOME TO DASHBOARD <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></h1>

                    <?php
include "./inc/footer.php";

?>