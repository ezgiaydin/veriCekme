<?php include "inc/baglan.php"; 


$icek="SELECT * FROM iletisim";
$isorgu=mysqli_query($baglan,$icek);

$ayarlar="SELECT * FROM ayarlar";
$ayarsorgu=mysqli_query($baglan,$ayarlar);
$ayarcek=mysqli_fetch_assoc($ayarsorgu);


?>


<?php include "inc/navbar.php"; ?>

<section class="bg-white">
<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Ünvan</th>
      <th scope="col">Kayıtlı Oda</th>
      <th scope="col">Vergi Numarası</th>
      <th scope="col">Vergi Dairesi</th>
    </tr>
  </thead>
  <tbody>


    <?php  while($icek = mysqli_fetch_assoc($isorgu)) { ?>



    <tr>
      <th scope="row"><?php echo $icek['unvan'];?></th>
      <td>    <?php echo $icek['kayitli_oda'];?></td>
      <td>    <?php echo $icek['vergi_no'];?></td>
      <td>    <?php echo $icek['vergi_dairesi'];?></td>
    </tr>

   <?php } ?>
    

  </tbody>

</table>


</div>
</section>




<?php include "inc/footer.php"; ?>
