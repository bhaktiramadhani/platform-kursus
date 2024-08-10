<x-app-layout>
    <x-header-layout />
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            <div class="grid grid-cols-2">
                <form class="bg-white rounded-lg p-4 max-w-sm" action="{{ route('kursus.store') }}" method="post">
                    <h1 class="font-bold text-2xl mb-2">Tambah Kursus</h1>
                    @csrf
                    <div class="mb-5">
                        <label for="judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="judul" id="judul" name="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Judul..." required />
                    </div>
                    <div class="mb-5">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Deskripsi..."></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="durasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi
                            Kursus (Menit)</label>
                        <input type="number" name="durasi" id="durasi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="xx..." required />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
                        Kursus</button>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            testing
        </script>
    @endpush
</x-app-layout>
