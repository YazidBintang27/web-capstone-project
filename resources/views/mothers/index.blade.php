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
    <title>Data Ibu</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>
    <main class="grow-5 mx-5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Manajemen Data Ibu</h2>

        <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('mothers.create') }}"
               class="flex shadow-sm py-2 px-3 rounded-lg bg-green-400 items-center">
                <img src="{{ asset('images/icon/Add.png') }}" alt="icon4" class="w-8">
                <span class="ml-3 text-lg font-medium text-white">Tambah Data Ibu</span>
            </a>
        </div>
        <x-table>
            <thead class="bg-[#33ccff]">
                <tr>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Nama</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Nik</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Tanggal Lahir</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">No. Telepon</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Alamat</td>
                    <td class="border border-black px-5 py-1 text-lg text-gray-800 font-medium text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($mothers as $mother)
                    <tr>
                        <td class="border px-5 py-1 text-center">{{ $mother->name }}</td>
                        <td class="border px-5 py-1 text-center">{{ $mother->nik }}</td>
                        <td class="border px-5 py-1 text-center">
                            {{ \Carbon\Carbon::parse($mother->birthdate)->format('d-m-Y') }}
                        </td>
                        <td class="border px-5 py-1 text-center">{{ $mother->phone }}</td>
                        <td class="border px-5 py-1 text-center">{{ $mother->address }}</td>

                        <td class="border px-5 py-1 text-center">
                            <div class="flex justify-center my-1">
                                <a href="{{ route('mothers.edit', $mother->id) }}"
                                   class="bg-yellow-400 font-medium text-center px-6 py-2 rounded-lg text-white flex items-center">
                                    <img src="{{ asset('images/icon/Edit.png') }}" alt="icon5" class="w-5">
                                    <span class="ml-2">Edit</span>
                                </a>

                                <form action="{{ route('mothers.destroy', $mother->id) }}" method="POST" class="ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                                            class="bg-red-400 font-medium text-center px-6 py-2 rounded-lg text-white flex items-center">
                                        <img src="{{ asset('images/icon/Trash.png') }}" alt="icon6" class="w-5">
                                        <span class="ml-2">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="border px-5 py-3 text-center text-gray-500 italic">
                            Tidak ada data ibu.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </x-table>
        <div class="mt-4 flex justify-end">
            {{ $mothers->links() }}
        </div>
    </main>
</body>
</html>
