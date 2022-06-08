<div class="card" style="width: 18rem;">
<?php
$numero = 1;
if ($numero == 0) {
  ?>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card 0</h5>
    <p class="card-text">Catalogo 0</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <?php
} elseif ($numero == 1) {
  ?>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card 1</h5>
    <p class="card-text">Catalogo 1</p>
    <a href="#" class="btn btn-danger">Go somewhere</a>
  </div>
  <?php
}
?>
</div>