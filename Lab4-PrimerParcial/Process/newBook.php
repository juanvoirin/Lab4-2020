<?php
    namespace Process;

    //require_once("Config/Autoload.php");

    use Model\Book as Book;
    use Repository\BookRepository as BookRepository;

    if($_GET){

        $newbook = new Book();
        $newbook->setId($_GET["id"]);
        $newbook->setTitle($_GET["title"]);
        $newbook->setAuthor($_GET["author"]);
        $newbook->setGenre($_GET["genre"]);
        $newbook->setFormat($_GET["format"]);

        $bookRepository = new BookRepository();

        if(!$bookRepository->ExistId($newbook->getId())){

            $bookRepository->Add($newbook);

            echo "<script> alert('El libro se agrego correctamente.');";  
            echo "window.location = '../list.php'; </script>";
        
        }else {
            echo "<script> if(confirm('Ya hay un libro con el mismo id, ingrese otro.'));";  
            echo "window.location = '../add-form.php'; </script>";
        }
    }else{
        echo "<script> if(confirm('No es posible procesar la informacion, intente nuevamente.'));";  
        echo "window.location = '../add-form.php'; </script>";
    }
?>