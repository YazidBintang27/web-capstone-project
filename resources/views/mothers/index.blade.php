<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/Logo Digital Posyandu.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Data Ibu</title>
</head>
<body class="flex overflow-auto box-border">
    <x-sidebar/>
    <main class="grow-5 mx-5">
        <h2 class="font-extrabold text-5xl mb-2 mt-10">Manajemen Data Ibu</h2>
        <div class="flex w-inherit justify-end mt-16 mx-5">
            <button class="flex shadow-sm py-2 px-3 rounded-lg bg-green-400 items-center"><img src="{{asset('images/icon/Add.png')}}" alt="icon4" class="w-8"><span class="ml-3 text-lg font-medium text-white">Tambah Data Ibu</span></button>
        </div>
        <x-table>
            <thead class="bg-gray-500">
                <tr>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">Nama</td>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">Nik</td>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">Tanggal Lahir</td>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">No.Telepon</td>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">Alamat</td>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">Status Hamil</td>
                    <td class="border border-black px-5 py-1 text-lg text-white font-medium text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-5 py-1 text-center">Sarijem</td>
                    <td class="border px-5 py-1 text-center">12345679793749</td>
                    <td class="border px-5 py-1 text-center">18-08-1959</td>
                    <td class="border px-5 py-1 text-center">08123456789</td>
                    <td class="border px-5 py-1 text-center">Tangerang</td>
                    <td class="border px-5 py-1 text-center">Ya</td>
                    <td class="border px-5 py-1 text-center">
                        <div class="flex justify-center my-1">
                            <button class="bg-yellow-400 font-medium text center px-8 py-2 rounded-lg text-white flex items-center"><img src="{{asset('images/icon/Edit.png')}}" alt="icon5"><span class="ml-2">Edit</span></button>
                            <button class="bg-red-400 font-medium text center px-8 py-2 rounded-lg text-white ml-8 flex items-center"><img src="{{asset('images/icon/Trash.png')}}" alt="icon6"><span class="ml-2">Delete</span></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </x-table>
    </main>
</body>
</html>