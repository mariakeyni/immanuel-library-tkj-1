<?php

function getCategories($search = '') {
    $categories = [
        ["id" => 1, "name" => "Fiksi",     "description" => "Novel dan cerita rekaan",        "total_books" => 3],
        ["id" => 2, "name" => "Sains",     "description" => "Buku ilmu pengetahuan alam",      "total_books" => 0],
        ["id" => 3, "name" => "Sejarah",   "description" => "Buku sejarah dan biografi",       "total_books" => 1],
        ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi",  "total_books" => 0],
    ];

    if ($search !== '') {
        $filtered = [];
        foreach ($categories as $category) {
            if (
                stripos($category['name'], $search) !== false || 
                stripos($category['description'], $search) !== false
            ) {
                $filtered[] = $category;
            }
        }
        return $filtered;
    }

    return $categories;
}

function getCategory($id) {
    $categories = getCategories();

    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category;
        }
    }

    return null;
}

function createCategory($data) {
    return true;
}

function updateCategory($id, $data) {
    return true;
}

function deleteCategory($id) {
    return true;
}