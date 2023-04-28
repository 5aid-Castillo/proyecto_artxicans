<?php
  /* session_start(); */
  include 'global/conexion.php';
  include 'templates/cabecera.php'
?>

    
    <!-- Modal user-mobile -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Mi Cuenta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           <div class="mobs">
            <button class="btn-mob-1" onclick="location.href='pages/login.php'">Inicio de sesion</button>
            <button class="btn-mob-2" onclick="location.href='pages/signup.php'">Regístrate</button>
          </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Aqui empieza el body -->

    <!-- SearchBox -->
    <form action="" class="searchContainer">
      <div class="searchBox">
        <input type="text" class="searchInput" placeholder="Buscar producto" />
        <button class="material-symbols-outlined searchButton">search</button>
      </div>
      <div class="user">
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
          <img src="./assets/utilities/usuario.png" alt="icon" class="icon" />
        </a>
      </div>
    </form>

   <!-- LIST OF PRODUCTS -->



   <section class='container-products'>
  
   <div class='mainContent grid'>    
   <?php 
        $result = $conn ->query("SELECT * FROM products ORDER BY rand() LIMIT 12") or die ($conn->error);
        while($row = mysqli_fetch_array($result)){
  ?>    

    
        <div class="single-product">
        <a href="pages/product.php?id_product=<?php echo $row['id_product'];?>" class='referencia'>
             <div class='imgDiv'>
                <img src="assets/products/<?php echo $row['image'];?>"  alt="<?php echo $row['name']?>">
            </div>
            <div class="card-info">
                <span class="product-title"><?php echo $row['name'];?></span>
                <span class="price">$<?php echo $row['price'];?></span>
                <span class="shipping">Más envio de importación</span>
                <!--  <div className="">
                            <span>Estrellas</span>
                            <span>120</span>
                        </div>
                        <span className="">Vendido por:</span><span className="">Said Castillo</span> 
            </div> -->
            </div>
           </a>
        </div>
        <?php }?>
      </div>
    </section>
    
<!--  -->

   
<?php 
  include('templates/pie.php');
?>