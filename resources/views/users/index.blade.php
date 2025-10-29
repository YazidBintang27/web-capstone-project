<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/Logo Digital Posyandu.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Data Pengguna</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>

    <main class="grow-5 mx-5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Manajemen Data Pengguna</h2>
        <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('users.create') }}"
                class="flex shadow-sm py-2 px-3 rounded-lg bg-green-400 hover:bg-green-700 items-center transition">
                <img src="{{ asset('images/icon/Add.png') }}" alt="icon-add" class="w-8">
                <span class="ml-3 text-lg font-medium text-white">Tambah Data Pengguna</span>
            </a>
        </div>
        <x-table>
            <thead class="bg-[#33ccff]">
                <tr>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">Nama</th>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">Username</th>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">NIK</th>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">No. Telepon</th>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">Alamat</th>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">Peran</th>
                    <th class="border border-black px-5 py-2 text-gray-800 text-center text-lg">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="border px-5 py-2 text-center">{{ $user->name }}</td>
                        <td class="border px-5 py-2 text-center">{{ $user->username }}</td>
                        <td class="border px-5 py-2 text-center">{{ $user->nik }}</td>
                        <td class="border px-5 py-2 text-center">{{ $user->phone_number }}</td>
                        <td class="border px-5 py-2 text-center">{{ $user->address }}</td>
                        <td class="border px-5 py-2 text-center capitalize">{{ str_replace('_', ' ', $user->role) }}</td>
                        <td class="border px-5 py-2 text-center">
                            <div class="flex justify-center gap-3">
                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-700 text-white font-medium px-4 py-2 rounded-lg flex items-center transition">
                                    <img src="{{ asset('images/icon/Edit.png') }}" alt="icon-edit" class="w-5 mr-2">
                                    Edit
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-400 hover:bg-red-700 text-white font-medium px-4 py-2 rounded-lg flex items-center transition">
                                        <img src="{{ asset('images/icon/Trash.png') }}" alt="icon-delete" class="w-5 mr-2">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="border px-5 py-3 text-center text-gray-500 italic">
                            Tidak ada data pengguna.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </x-table>
        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </main>
</body>
</html>
