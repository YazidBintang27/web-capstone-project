<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/Logo Digital Posyandu.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Data Penimbangan Balita</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>
    <main class="grow-5 mx-5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Data Riwayat Penimbangan Balita</h2>
        <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('weighings.create') }}"
               class="flex shadow-sm py-2 px-3 rounded-lg bg-green-400 hover:bg-green-700 transition-all items-center">
                <img src="{{ asset('images/icon/Add.png') }}" alt="add" class="w-8">
                <span class="ml-3 text-lg font-medium text-white">Tambah Data Penimbangan</span>
            </a>
        </div>
        <x-table>
            <thead class="bg-[#33ccff]">
                <tr>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Nama Balita</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Tinggi Badan (cm)</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Berat Badan (kg)</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Lingkar Kepala (cm)</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Lingkar Badan (cm)</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Tanggal Timbang</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Nama Ibu</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Aksi</td>
                </tr>
            </thead>

            <tbody>
                @forelse ($weighings as $weighing)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="border px-5 py-2 text-center">{{ $weighing->child->name ?? '-' }}</td>
                        <td class="border px-5 py-2 text-center">{{ $weighing->height }}</td>
                        <td class="border px-5 py-2 text-center">{{ $weighing->weight }}</td>
                        <td class="border px-5 py-2 text-center">{{ $weighing->lingkar_kepala ?? '-' }}</td>
                        <td class="border px-5 py-2 text-center">{{ $weighing->lingkar_badan ?? '-' }}</td>
                        <td class="border px-5 py-2 text-center">
                            {{ \Carbon\Carbon::parse($weighing->weighing_date)->format('d-m-Y') }}
                        </td>
                        <td class="border px-5 py-2 text-center">{{ $weighing->mother->name ?? '-' }}</td>
                        <td class="border px-5 py-2 text-center">
                            <div class="flex justify-center my-1">
                                <a href="{{ route('weighings.edit', $weighing->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-600 font-medium text-center px-6 py-2 rounded-lg text-white flex items-center transition">
                                    <img src="{{ asset('images/icon/Edit.png') }}" alt="edit">
                                    <span class="ml-2">Edit</span>
                                </a>
                                <form action="{{ route('weighings.destroy', $weighing->id) }}" method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-400 hover:bg-red-700 font-medium text-center px-6 py-2 rounded-lg text-white ml-4 flex items-center transition">
                                        <img src="{{ asset('images/icon/Trash.png') }}" alt="delete">
                                        <span class="ml-2">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-5 text-gray-500 italic">
                            Tidak ada data penimbangan
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </x-table>
        <div class="mt-5">
            {{ $weighings->links() }}
        </div>
    </main>
</body>
</html>
