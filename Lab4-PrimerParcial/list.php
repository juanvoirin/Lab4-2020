<?php
include('header.php');
include('nav.php');

use Model\Book as Book;
use Repository\BookRepository as BookRepository;

$bookRepository = new BookRepository();     
$bookList = $bookRepository->GetAll();
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Libros</h2>

               <table class="table bg-light">
                    <thead class="bg-dark text-white">
                         <th>Id</th>
                         <th>Titulo</th>
                         <th>Autor</th>
                         <th>Genero</th>
                         <th>Formato</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($bookList as $key => $value) { ?>
                         <tr>
                              <td><?php echo $value->getId(); ?></td>
                              <td><?php echo $value->getTitle(); ?></td>
                              <td><?php echo $value->getAuthor(); ?></td>
                              <td><?php echo $value->getGenre(); ?></td>
                              <td><?php echo $value->getFormat(); ?></td>
                         </tr>                        
                              <?php } ?>       
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
