<x-layout>
    <x-slot:title>
        Welcome
    </x-slot :title>
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp)
            <div class="card shadow-xl mt-8 backdrop-blur-lg bg-[#b8c1ec]/25 rounded-2xl border-2 border-[#121629]">
                <div class="card-body">
                    <div>
                        <div class="font-bold text-[#fffffe] font-['Quicksand']">{{ $chirp['author' ] }}</div>
                        <div class="mt-1 text-[#b8c1ec] font-['Quicksand']">{{ $chirp['message' ] }}</div>
                        <div class="mt-2 text-xs text-[#b8c1ec] font-['Quicksand']">{{ $chirp['time' ] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>