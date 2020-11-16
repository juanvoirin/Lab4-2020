<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <form>
          <div class="container">
               <h3 class="mb-3">Agregar Libro</h3>
               <form action="Process/newBook.php" method="GET">
               <div class="bg-light p-4">
                    <div class="row">
                         <div class="col-lg-4">
                              <label for="">Id</label>
                              <input type="number" name="" class="form-control form-control-ml" required value="">
                         </div>                         

                         <div class="col-lg-4">
                              <label for="">Titulo</label>
                              <input type="text" name="" class="form-control form-control-ml" requiredvalue="">
                         </div>

                         <div class="col-lg-4">
                              <label for="">Autor</label>
                              <input type="tex" name="" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4" >
                              <label for="">Genero</label>

                              <div class="form-group">
                                   <select name="" id="genre"  class="custom-select" required>
                                        <option>Informática</option>
                                        <option>Novela</option>
                                        <option>Historia</option>
                                   </select>
                              </div>                              
                         </div>                         

                         <div class="col-lg-4">
                              <label for="">Formato</label>
                              <input type="radio" name="format" class="form-control form-control-ml" required value="Papel">Papel
                              <input type="radio" name="format" class="form-control form-control-ml" required value="Digital">Digital
                              <input type="radio" name="format" class="form-control form-control-ml" required value="Ambas">Ambas
                         </div>

                         <div class="col-lg-4">
                              <span>&nbsp;</span>
                              <button type="submit" name="" class="btn btn-primary ml-auto d-block">Agregar</button>
                         </div>

                    </div>                    
               </div>
          </div>
          </form>
     </section>
</main>

<?php include('footer.php') ?>
