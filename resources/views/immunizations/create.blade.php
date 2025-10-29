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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" />
    <title>Tambah Data Imunisasi</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>
    <main class="grow-5 mx-7.5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Tambah Data Imunisasi</h2>
        <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('immunizations.index') }}"
               class="group inline-flex items-center justify-center rounded-lg py-2 px-6 bg-gray-700 text-white hover:bg-gray-950 gap-2">
                <span class="material-symbols-outlined text-white">arrow_back</span>
                <div class="text-base">Kembali</div>
            </a>
        </div>

        <form method="POST" action="{{ route('immunizations.store') }}" class="w-inherit mt-10">
            @csrf
            <fieldset class="w-inherit flex gap-10">
                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black mb-1 block">Nama Balita</label>
                    <div class="relative w-full">
                        <select name="child_id" id="child_id" required
                                class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium text-gray-700 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                            <option value="">-- Pilih Balita --</option>
                            @foreach ($childs as $child)
                                <option value="{{ $child->id }}">{{ $child->name }} ({{ $child->mother->name }})</option>
                            @endforeach
                        </select>
                        @error('child_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black mb-1 block">Tanggal Imunisasi</label>
                    <div class="relative w-full">
                        <input type="date" name="immunization_date" value="{{ old('immunization_date') }}" required
                               class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium text-gray-700 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        @error('immunization_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
            </fieldset>
            <fieldset class="mt-5">
                <label class="font-medium text-xs text-black mb-1 block">Jenis Vaksin</label>
                <div class="relative w-full">
                    <input type="text" name="vaksin_type" value="{{ old('vaksin_type') }}" placeholder="Masukkan jenis vaksin..." required
                           class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium text-gray-700 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    @error('vaksin_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </fieldset>
            <div class="inline-flex gap-5">
                <button type="submit"
                        class="group inline-flex mt-8.5 items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold transition-all duration-300 ease-in-out bg-green-400 px-6 text-white hover:bg-green-500 h-[38px] min-w-[38px] gap-2">
                    <div class="text-base">Simpan</div>
                </button>
            </div>
        </form>
    </main>
</body>
</html>
