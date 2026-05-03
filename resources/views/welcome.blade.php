<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Home</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#121629] font-sans">
    <x-layout>
        <x-slot:tittle>
            Welcome
        </x-slot:tittle>
        
        <!-- Grid dengan perbandingan 1:2 (kiri 1, kanan 2) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 max-w-5xl mx-auto mt-8">
            
            <!-- Kolom Kiri: Welcome Card (1 bagian) -->
            <div class="lg:col-span-1">
                <div class="card bg-gradient-to-br from-[#628ecb] to-[#0a1d39] rounded-2xl border-2 border-[#121629] shadow mt-8">
                    <div class="card-body">
                        <h1 class="text-3xl font-bold text-[#fffffe]">Welcome to Chirper!</h1>
                        <p class="mt-4 text-justify text-[#b8c1ec] font-['Quicksand'] text-sm">This is your brand new Laravel application. Time to make it sing (or chirp)!</p>
                        <p class="mt-2 text-justify text-[#b8c1ec] font-['Quicksand'] text-sm">Now this is live on the internet! 🎉 <br>Chirper adalah sebuah platform mikroblogging yang ramah, dimana pengguna dapat memposting pesan singkat yang disebut "chirps", melihat apa yang dikatakan orang lain, dan berinteraksi secara real time.</p>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: List Chirps (2 bagian) -->
            <div class="lg:col-span-2 space-y-4">
                @foreach ($chirps as $chirp)
                    <div class="card shadow-xl backdrop-blur-lg bg-[#b8c1ec]/25 rounded-2xl border-2 border-[#121629]">
                        <div class="card-body">
                            <div>
                                <div class="font-bold text-[#fffffe] font-['Quicksand']">{{ $chirp['author'] }}</div>
                                <div class="mt-1 text-[#b8c1ec] font-['Quicksand']">{{ $chirp['message'] }}</div>
                                <div class="mt-2 text-xs text-[#b8c1ec] font-['Quicksand']">{{ $chirp['time'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </x-layout>

</body>

</html>