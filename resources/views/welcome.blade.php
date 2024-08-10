<x-app-layout>
    <x-navbar-layout />
    <main>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4 px-10">
            @foreach ($kursuses as $kursus)
                <div>
                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $kursus->judul }}</h2>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $kursus->deskripsi }}</p>
                            <a href="{{ route('kursus.landing', $kursus->id) }}"
                                class="flex items-center justify-between mt-3 text-blue-600 hover:underline dark:text-blue-400">
                                <span>Lihat Detail</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</x-app-layout>
