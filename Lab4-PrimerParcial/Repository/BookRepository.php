<?php

    namespace Repository;

    use Model\Book as Book;
    


    class BookRepository implements IBookRepository{

        public function Add(Book $book){
            
            $this->retrieveData();

            array_push($this->booksList, $book);

            $this->saveData();

        }

        public function getAll(){

            $this->retrieveData();

            return $this->booksList;

        }

        public function ExistId($id){

            $this->retrieveData();
            $exist = false;

            foreach($this->bookList as $book){
                if($book->getId == $id){
                    $exist = true ;
                }
            }

            return $exist;

        }

        private function saveData(){

            $arrayToEncode = array();

            foreach($this->bookList as $book){
                $valuesArray["id"] = $book->getId();
                $valuesArray["title"] = $book->getTitle();
                $valuesArray["author"] = $book->getAuthor();
                $valuesArray["genre"] = $book->getGenre();
                $valuesArray["format"] = $book->getFormat();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            $jsonPath = $this->GetJsonFilePath();

            file_put_contents('Data/books.json', $jsonContent);

        }

        private function retrieveData(){

            $this->booksList = array();

            $jsonPath = $this->GetJsonFilePath();

            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray){

                $book = new Book();
                $book->setId($valuesArray["id"]);
                $book->setTitle($valuesArray["title"]);
                $book->setAuthor($valuesArray["author"]);
                $book->setGenre($valuesArray["genre"]);
                $book->setFormat($valuesArray["format"]);

                array_push($this->booksList, $book);
            }
        

        }

        function GetJsonFilePath(){

            $initialPath = "Data/books.json";
            
            if(file_exists($initialPath)){
                $jsonFilePath = $initialPath;
            }else{
                $jsonFilePath = "../".$initialPath;
            }

            return $jsonFilePath;
        }


    }


?>