<x-app-layout>
    <x-header-layout />
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            <div class="flex justify-between items-center mb-4">
                <h1 class="font-bold text-2xl">Kursus</h1>
                <a href="{{ route('kursus.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah
                    Kursus</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kursuses as $kursus)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $kursus->judul }}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="{{ route('kursus.edit', $kursus->id) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                    <form action="{{ route('kursus.destroy', $kursus->id) }}" method="post"
                                        class="inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm px-4 py-2 ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
