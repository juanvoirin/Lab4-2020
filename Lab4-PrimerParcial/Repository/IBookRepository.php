<?php

    namespace Repository;

    use Model\Book as Book;

    interface IBookRepository{

        function add(Book $Book);
        function getAll();


    }

?>