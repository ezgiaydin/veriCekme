<?php 
include "inc/baglan.php"; 
$ayarlar="SELECT * FROM ayarlar WHERE ayar_id=1"; 
$sorgu=mysqli_query($baglan,$ayarlar);
$ayarcek=mysqli_fetch_assoc($sorgu);/* while kullanırken fetch assoc olan kullanılır.*/

$mcek="SELECT * FROM musteriler";
$msorgu=mysqli_query($baglan,$mcek); 
?>


<?php include "inc/navbar.php"; ?>

<section class="bg-white">
<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Adı</th>
      <th scope="col">E-posta</th>
      <th scope="col">Durum</th>
    </tr>
  </thead>
  <tbody>


    <?php  while($mcek = mysqli_fetch_assoc($msorgu)) { ?>



    <tr>
      <th scope="row"><?php echo $mcek['id'];?></th>
      <td>    <?php echo $mcek['adi'];?></td>
      <td>    <?php echo $mcek['eposta'];?></td>
      <td>    
      <?php  if ($mcek['durum']== 1){
                echo "aktif";
              }
              else {
                echo "pasif";
              }?>
              </td>
      
      
              
    </tr>

   <?php } ?>
    

  </tbody>

</table>


</div>
</section>

<?php include "inc/footer.php"; ?>	