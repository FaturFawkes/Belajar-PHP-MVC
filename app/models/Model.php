<?php
    include_once ("model/Book.php");

    class Model {
        public function getBookList(){
            // kode array simulasi dari database
            return array("Harry Potter" => new Book("Harry Potter", "J.K. Rowling", "A Fiction Book"),
            "Eclipse" => new Book("Eclipse", "Stephen Meyer", "A Fantasy Book"),
            "Programming Pearls" => new Book("Programming Pearls", "Jon Bently", "An Educational Book"));
        }
        public function getBook($title){
            // menggunakan function yang telah dibuat untuk mengambil data
            $allBooks = $this->getBookList();
            return $allBooks;
        }
    }
?>