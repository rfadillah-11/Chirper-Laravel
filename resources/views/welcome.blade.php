<x-layout>
    <x-slot:title>
        Welcome
    </x-slot :title>
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp)
            <div class="card shadow-xl mt-8 backdrop-blur-lg bg-[#eebbc3]/25 rounded-2xl border-2 border-[#121629]">
                <div class="card-body">
                    <div>
                        <div class="text-justify text-[#232946] font-bold font-['Quicksand']">{{ $chirp['author' ] }}</div>
                        <div class="mt-1 text-[#232946] font-['Quicksand']">{{ $chirp['message' ] }}</div>
                        <div class="mt-2 text-justify text-[#232946]">{{ $chirp['time' ] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>