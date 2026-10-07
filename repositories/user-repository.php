<?php

function getUsers($search = '') {
    $users = [
        ["id" => 1, "name" => "Admin Utama",     "email" => "admin@ski.sch.id",               "role" => "admin"],
        ["id" => 2, "name" => "Budi Santoso",    "email" => "budi.santoso@siswa.ski.sch.id",  "role" => "member"],
        ["id" => 3, "name" => "Siti Aminah",     "email" => "siti.aminah@siswa.ski.sch.id",   "role" => "member"],
        ["id" => 4, "name" => "Richard Marcell", "email" => "richard.m@ski.sch.id",           "role" => "admin"],
    ];

    if ($search !== '') {
        $filtered = [];
        foreach ($users as $user) {
            if (
                stripos($user['name'], $search) !== false || 
                stripos($user['email'], $search) !== false
            ) {
                $filtered[] = $user;
            }
        }
        return $filtered;
    }

    return $users;
}

function getUser($id = 1) {
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }

    return null;
}

function getProfile($userId = 1) {
    $profiles = [
        1 => [
            "phone"   => "0812-3456-7890",
            "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat",
            "bio"     => "Administrator utama perpustakaan digital."
        ],
        2 => [
            "phone"   => "0898-7654-3210",
            "address" => "Jl. Ahmad Yani No. 45, Pontianak",
            "bio"     => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri."
        ],
        3 => [
            "phone"   => "0852-1122-3344",
            "address" => "Jl. Gajah Mada No. 12, Pontianak",
            "bio"     => "Penyuka buku sejarah dan sains."
        ],
        4 => [
            "phone"   => "0813-9988-7766",
            "address" => "Jl. Tanjungpura No. 88, Pontianak",
            "bio"     => "Tim IT Pengelola Perpustakaan."
        ]
    ];

    return $profiles[$userId] ?? [
        "phone"   => "-",
        "address" => "-",
        "bio"     => "-"
    ];
}

function createUser($data) {
    return true;
}

function updateUser($id, $data) {
    return true;
}

function deleteUser($id) {
    return true;
}