<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $kategori_list = [
        [
            'id' => 1,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding',
            'jumlah_buku' => 25
        ],
        [
            'id' => 2,
            'nama' => 'Database',
            'deskripsi' => 'Buku database dan SQL',
            'jumlah_buku' => 18
        ],
        [
            'id' => 3,
            'nama' => 'Jaringan',
            'deskripsi' => 'Buku jaringan komputer',
            'jumlah_buku' => 15
        ],
        [
            'id' => 4,
            'nama' => 'Desain',
            'deskripsi' => 'Buku desain grafis',
            'jumlah_buku' => 12
        ],
        [
            'id' => 5,
            'nama' => 'AI',
            'deskripsi' => 'Buku Artificial Intelligence',
            'jumlah_buku' => 20
        ]
    ];

    public function index()
    {
        $kategori_list = $this->kategori_list;

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori = collect($this->kategori_list)->firstWhere('id', $id);

        $buku_list = [
            [
                'judul' => 'Laravel Dasar',
                'penulis' => 'Ahmad',
                'tahun' => 2023
            ],
            [
                'judul' => 'PHP OOP',
                'penulis' => 'Budi',
                'tahun' => 2022
            ],
            [
                'judul' => 'Mastering MySQL',
                'penulis' => 'Charlie',
                'tahun' => 2021
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $hasil = collect($this->kategori_list)->filter(function ($item) use ($keyword) {
            return stripos($item['nama'], $keyword) !== false;
        });

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}