<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col font-sans bg-[#232946]">
    <nav class="navbar bg-[#121629] border-b border-[#fffffe]/25">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-2xl font-bold font-['Quicksand'] hover:bg-transparent hover:bg-transparent hover:border-transparent">🎐</span><span class="bg-gradient-to-r from-[#eebbc3] to-[#b8c1ec] bg-clip-text text-transparent"> ๋࣭ ࣪ ˖ Chirper</span></a>
        </div>
        <div class="navbar-end gap-2">
            <a href="#" class="btn btn-ghost btn-sm bg-[#628ecb] text-[#232946] hover:bg-[#232946] hover:text-[#fffffe] transition-all duration-300 active:translate-y-0.5 border border-[]">Sign In</a> 
            <a href="#" class="btn btn-primary btn-sm bg-[#232946]/25 text-[#628ecb] hover:bg-[#b8c1ec]/40 hover:text-[#fffffe] transition-all duration-300 border border-[#ffffff] active:translate-y-0.5">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-5 bg-[#121629] border-t border-[#fffffe]/25 text-base-content text-xs text-[#fffffe]">
        <div>
            <p>© {{ date('Y') }} Chirper - Built with Laravel and 💙 by <span class="font-bold text-[#fffffe] font-['quicksand']">Rahma Fadillah </span>(240170095)</php>
        </div>
    </footer>
</body>
</html>