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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
    <title>Tambah Data Balita</title>
</head>

<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar />
    <main class="grow-5 mx-7.5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Tambah Data Balita</h2>
        <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('childs.index') }}">
                <button type="button"
                    class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out bg-gray-700 stroke-white px-6 text-white hover:bg-gray-950 h-[42px] min-w-[42px] gap-2">
                    <span class="material-symbols-outlined text-white">arrow_back</span>
                    <div class="text-base">Kembali</div>
                </button>
            </a>
        </div>

        <form action="{{ route('childs.store') }}" method="POST" class="w-inherit mt-10">
            @csrf
            <fieldset class="w-inherit flex gap-10">
                <fieldset class="grow-1">
                    <label for="child_name" class="font-medium text-xs text-black">Nama Balita</label>
                    <input type="text" name="name" id="child_name"
                        value="{{ old('name') }}"
                        placeholder="Masukan Nama Balita..."
                        class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none focus:border-blue-600 py-2 mb-0.5" required>
                </fieldset>

                <fieldset class="grow-1">
                    <label for="height" class="font-medium text-xs text-black">Tinggi Badan (cm)</label>
                    <input type="number" name="height" id="height"
                        value="{{ old('height') }}"
                        placeholder="Masukan TB..."
                        class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none focus:border-blue-600 py-2 mb-0.5">
                </fieldset>
            </fieldset>
            <fieldset class="w-inherit flex mt-5 gap-5">
                <fieldset class="grow-1">
                    <label for="birthdate" class="font-medium text-xs text-black">Tanggal Lahir Balita</label>
                    <input type="date" name="birthdate" id="birthdate"
                        value="{{ old('birthdate') }}"
                        class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none focus:border-blue-600 py-2 mb-0.5">
                </fieldset>

                <fieldset class="grow-1 ml-10">
                    <label for="weight" class="font-medium text-xs text-black">Berat Badan (kg)</label>
                    <input type="number" step="0.1" name="weight" id="weight"
                        value="{{ old('weight') }}"
                        placeholder="Masukan BB..."
                        class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none focus:border-blue-600 py-2 mb-0.5">
                </fieldset>
            </fieldset>
            <fieldset class="mt-5">
                <label for="nutritional_status" class="font-medium text-xs text-black">Status Gizi</label>
                <select name="nutritional_status" id="nutritional_status"
                    class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium outline-none focus:border-blue-600 py-2 mb-0.5">
                    <option value="">-- Pilih Status Gizi --</option>
                    <option value="Gizi Baik" {{ old('nutritional_status') == 'Gizi Baik' ? 'selected' : '' }}>Gizi Baik</option>
                    <option value="Gizi Kurang" {{ old('nutritional_status') == 'Gizi Kurang' ? 'selected' : '' }}>Gizi Kurang</option>
                    <option value="Gizi Buruk" {{ old('nutritional_status') == 'Gizi Buruk' ? 'selected' : '' }}>Gizi Buruk</option>
                    <option value="Gizi Lebih" {{ old('nutritional_status') == 'Gizi Lebih' ? 'selected' : '' }}>Gizi Lebih</option>
                </select>
            </fieldset>
            <fieldset class="mt-5">
                <label for="gender" class="font-medium text-xs text-black">Gender</label>
                <select name="gender" id="gender"
                    class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium outline-none focus:border-blue-600 py-2 mb-0.5" required>
                    <option value="">-- Pilih Gender --</option>
                    <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </fieldset>
            <fieldset class="mt-5">
                <label for="mother_id" class="font-medium text-xs text-black">Nama Ibu</label>
                <select name="mother_id" id="mother_id"
                    class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium outline-none focus:border-blue-600 py-2 mb-0.5" required>
                    <option value="">-- Pilih Ibu --</option>
                    @foreach ($mothers as $mother)
                        <option value="{{ $mother->id }}" {{ old('mother_id') == $mother->id ? 'selected' : '' }}>
                            {{ $mother->name }}
                        </option>
                    @endforeach
                </select>
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
