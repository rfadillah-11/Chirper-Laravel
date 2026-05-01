<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Dzaky Akbar Pratama',
                'message' => 'Just deployed my first Laravel app! 🚀',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'Adzkiya Dwi Arumi',
                'message' => 'Laravel makes web development fun again!',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Faizan Jazib Abqory',
                'message' => 'Working on something cool with Chirper.',
                'time' => '3 hours ago'
            ]
        ];

        return view('welcome', ['chirps' => $chirps]);
    }
}