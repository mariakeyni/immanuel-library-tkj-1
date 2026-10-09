<?php

function getBooks() {
<<<<<<< HEAD
    $books = [
        [
            "id" => 1,
            "title" => "Laskar Pelangi",
            "category_id" => 1,
            "category" => "Fiksi",
            "year" => 2005,
            "stock" => 12,
            "authors" => ["Andrea Hirata"],
            "author_ids" => [1],
        ],
        [
            "id" => 2,
            "title" => "Bumi",
            "category_id" => 1,
            "category" => "Fiksi",
            "year" => 2014,
            "stock" => 8,
            "authors" => ["Tere Liye"],
            "author_ids" => [2],
        ],
        [
            "id" => 3,
            "title" => "Harry Potter dan Batu Bertuah",
            "category_id" => 1,
            "category" => "Fiksi",
            "year" => 1997,
            "stock" => 5,
            "authors" => ["J.K. Rowling"],
            "author_ids" => [3],
        ],
        [
            "id" => 4,
            "title" => "Bumi Manusia",
            "category_id" => 2,
            "category" => "Sejarah",
            "year" => 1980,
            "stock" => 6,
            "authors" => ["Pramoedya Ananta Toer"],
            "author_ids" => [4],
        ],
        [
            "id" => 5,
            "title" => "Antologi Rasa Nusantara",
            "category_id" => 1,
            "category" => "Fiksi",
            "year" => 2021,
            "stock" => 4,
            "authors" => [
                "Pramoedya Ananta Toer",
                "Sapardi Djoko Damono"
            ],
            "author_ids" => [4, 5],
        ],
    ];

    return $books;
}

function getBook($id = 5) {
    $books = getBooks();

    foreach ($books as $book) {
        if ($book['id'] == $id) {
            $book['isbn'] = "978-602-1234-56-7";
            $book['description'] = "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.";

            return $book;
        }
    }

    return null;
}

function updateBook($id, $data) {
    return true;
}

function deleteBook($id) {
    return true;
}
=======
  return [
    ["id" => 1, "title" => "Laskar Pelangi", "category" => "Fiksi", "year" => 2005, "stock" => 12, "authors" => ["Andrea Hirata"]],
    ["id" => 2, "title" => "Bumi", "category" => "Fiksi", "year" => 2014, "stock" => 8, "authors" => ["Tere Liye"]],
    ["id" => 3, "title" => "Harry Potter dan Batu Bertuah", "category" => "Fiksi", "year" => 1997, "stock" => 5, "authors" => ["J.K. Rowling"]],
    ["id" => 4, "title" => "Bumi Manusia", "category" => "Sejarah", "year" => 1980, "stock" => 6, "authors" => ["Pramoedya Ananta Toer"]],
    ["id" => 5, "title" => "Antologi Rasa Nusantara", "category" => "Fiksi", "year" => 2021, "stock" => 4, "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"]],
  ];
}

function getBook() {
  return [
    "id" => 5,
    "title" => "Antologi Rasa Nusantara",
    "isbn" => "978-602-1234-56-7",
    "year" => 2021,
    "stock" => 4,
    "category" => "Fiksi",
    "category_id" => 1,
    "description" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.",
    "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
    "author_ids" => [4, 5],
  ];
}
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
