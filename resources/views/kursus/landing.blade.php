<x-app-layout>
    <x-navbar-layout />
    <main class="w-full flex flex-col items-center mt-10">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4 px-10">
            @if ($materis->count() > 0)
                @foreach ($materis as $materi)
                    <div>
                        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                            @php
                                $regex = preg_match(
                                    '/(?:https?:\/\/)?(?:www\.)?youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
                                    $materi->video,
                                    $matches,
                                );
                                $urlthumbnail = $regex ? $matches[1] : null;
                            @endphp
                            <img src="https://img.youtube.com/vi/{{ $urlthumbnail }}/maxresdefault.jpg" alt="">
                            <div class="p-4">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $materi->judul }}</h2>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $materi->deskripsi }}</p>
                                <a href="{{ route('materi.landing', $materi->id) }}"
                                    class="flex items-center justify-between mt-3 text-blue-600 hover:underline dark:text-blue-400">
                                    <span>Lihat Detail</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Tidak ada kursus</h1>
                </div>
            @endif
        </div>
    </main>
</x-app-layout>
