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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#121629] font-sans">
    <x-layout>
        <x-slot:tittle>
            Welcome
        </x-slot:tittle>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-9 max-w-8xl mx-auto mt-5">
            
            <div class="border-2 border-[#121629] overflow-hidden rounded-t-[32px] ml-2">
                <div class="bg-gradient-to-br from-[#6283cb] to-[#121629] p-7 border-t border-x border-[#b8c1ec]/20 rounded-t-[32px]">
                    <h1 class="text-3xl font-['Poppins'] font-bold text-[#fffffe]">Welcome to Chirper!</h1>
                    <p class="mt-2 text-[#b8c1ec] font-['Quicksand'] text-sm">Now this is live on the internet! 🎉</p>
                </div>
                <div class="bg-[#0a0f1a] p-6 border border-[#b8c1ec]/20 rounded-b-[32px]">
                    <p class="text-justify text-[#b8c1ec] font-['Quicksand'] text-sm">This is your brand new Laravel application. Time to make it sing (or chirp)!</p>
                    <hr class="border border-[#b8c1ec]/25 my-3">
                    <p class="mt-2 text-justify text-[#b8c1ec] font-['Quicksand'] text-sm">Selamat datang di Chirper! Di sini kamu bisa menuliskan ide-ide kecilmu, membaca chirps dari pengguna lain, dan berinteraksi dengan komunitas secara langsung. Yuk, mulai berkicau!</p>
                </div>
            </div>
            <div class="lg:col-span-2 space-y-6 mr-3">
                <h2 class="text-2xl font-['Poppins'] font-bold text-[#fffffe] mb-6 border-b-2 border-[#b8c1ec]/30 pb-2">
                Latest Chirps 🔥
            </h2>
                @foreach ($chirps as $chirp)
                    <div class="card shadow-xl backdrop-blur-lg bg-[#b8c1ec]/25 rounded-2xl border-2 border-[#121629] transition-transform hover:scale-[1.02] hover:border-[#00ffff] hover:shadow-[0_0_15px_#00ffff] duration-300 cursor-pointer">
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