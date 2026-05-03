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

<body class="min-h-screen flex flex-col bg-[#0a0f1a] font-sans">
    <x-layout>
        <x-slot:tittle>
            Welcome
        </x-slot:tittle>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 max-w-8xl mx-2 mt-5">
            
            <div class="overflow-hidden rounded-[32px] mx-3">
                <div class="p-9 bg-gradient-to-br from-[#6283cb] to-[#121629] border-t border-x border-[#b8c1ec]/20 rounded-t-[32px]">
                    <h1 class="text-3xl font-['Poppins'] font-bold text-[#fffffe]">Welcome to Chirper!</h1>
                    <p class="mt-1 text-[#b8c1ec] font-['Quicksand'] text-sm">Now this is live on the internet! 🎉</p>
                </div>
                <div class="bg-[#0a0f1a] p-8 border border-[#b8c1ec]/20 rounded-b-[32px]">
                    <p class="mb-4 text-justify text-[#b8c1ec] font-['Quicksand'] text-sm leading-6">This is your brand new Laravel application. Time to make it sing (or chirp)!</p>
                    <p class="text-justify text-[#b8c1ec] font-['Quicksand'] text-sm leading-6">Here you can jot down your little ideas, read chirps from other users, and interact with the community directly. Let's start chirping!</p>
                    <hr class="border border-[#b8c1ec]/25 my-7">
                    <a href="#" class="btn btn-ghost font-['poppins'] bg-[#b8c1ec] text-[#0a0f1a] hover:bg-[#6283cb]/20 hover:text-[#fffffe] transition-all duration-600 active:translate-y-0.5 active:scale-105 border border-[#b8c1ec]/25 py-7 rounded-xl w-full text-center text-base font-semibold tracking-wide">Explore Now</a>
                </div>
            </div>
            <div class="lg:col-span-2 space-y-6 mr-3">
                <h2 class="text-2xl font-['Poppins'] font-bold text-[#fffffe] mb-6 border-b-2 border-[#b8c1ec]/30 pb-2">Latest Chirps ‎ ⋆˚࿔</h2>
                @foreach ($chirps as $chirp)
                    <div class="card shadow-xl backdrop-blur-lg bg-[#6283cb]/20 rounded-2xl border border-[#b8c1ec]/20 transition-all hover:scale-[1.01] hover:border-[#b8c1ec] duration-400 cursor-pointer">
                        <div class="card-body">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#b8c1ec] to-[#6283cb] flex items-center justify-center text-[#0a0f1a] font-bold font-['Poppins'] text-sm shadow-md">
                                    {{ substr($chirp['author'], 0, 1) }}
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold text-[#fffffe] font-['Quicksand']">{{ $chirp['author'] }}</div>
                                    <div class="mt-1 text-xs text-[#b8c1ec]/70 font-['Quicksand']">{{ $chirp['time'] }}</div>
                                    <div class="mt-3 text-[#b8c1ec] font-['Quicksand']">{{ $chirp['message'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </x-layout>

</body>

</html>