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
    <title>Tambah Data Penimbangan Balita</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>

    <main class="grow-5 mx-7.5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Tambah Data Penimbangan Balita</h2>
       <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('weighings.index') }}"
                class="group inline-flex items-center justify-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed bg-gray-700 stroke-white px-6 text-white hover:bg-gray-950 h-[42px] min-w-[42px] gap-2 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                <span class="material-symbols-outlined text-white">arrow_back</span>
                <div class="text-base">Kembali</div>
            </a>
        </div>
        <form action="{{ route('weighings.store') }}" method="POST" class="w-full mt-10">
            @csrf
            <div class="flex gap-10">
                <div class="w-1/2">
                    <label for="mother_id" class="block text-sm font-medium text-gray-700 mb-1">Nama Ibu</label>
                    <select name="mother_id" id="mother_id" required
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
                        <option value="">-- Pilih Ibu --</option>
                        @foreach ($mothers as $mother)
                            <option value="{{ $mother->id }}">{{ $mother->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-1/2">
                    <label for="child_id" class="block text-sm font-medium text-gray-700 mb-1">Nama Balita</label>
                    <select name="child_id" id="child_id" required
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
                        <option value="">-- Pilih Balita --</option>
                        @foreach ($childs as $child)
                            <option value="{{ $child->id }}">{{ $child->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex gap-10 mt-5">
                <div class="w-1/2">
                    <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Berat Badan (kg)</label>
                    <input type="number" step="0.01" name="weight" id="weight" required
                        placeholder="Masukkan berat badan..."
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
                </div>

                <div class="w-1/2">
                    <label for="height" class="block text-sm font-medium text-gray-700 mb-1">Tinggi Badan (cm)</label>
                    <input type="number" step="0.01" name="height" id="height" required
                        placeholder="Masukkan tinggi badan..."
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
                </div>
            </div>
            <div class="flex gap-10 mt-5">
                <div class="w-1/2">
                    <label for="lingkar_kepala" class="block text-sm font-medium text-gray-700 mb-1">Lingkar Kepala (cm)</label>
                    <input type="number" step="0.01" name="lingkar_kepala" id="lingkar_kepala"
                        placeholder="Masukkan lingkar kepala..."
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
                </div>

                <div class="w-1/2">
                    <label for="lingkar_badan" class="block text-sm font-medium text-gray-700 mb-1">Lingkar Badan (cm)</label>
                    <input type="number" step="0.01" name="lingkar_badan" id="lingkar_badan"
                        placeholder="Masukkan lingkar badan..."
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
                </div>
            </div>
            <div class="mt-5">
                <label for="weighing_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Timbang</label>
                <input type="date" name="weighing_date" id="weighing_date" required
                    class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-blue-600">
            </div>
            <div class="mt-10 flex gap-5">
                <button type="submit"
                    class="group inline-flex mt-8.5 items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold transition-all duration-300 ease-in-out bg-green-400 px-6 text-white hover:bg-green-500 h-[38px] min-w-[38px] gap-2">
                    Simpan Data
                </button>
            </div>
        </form>
    </main>
</body>
</html>
