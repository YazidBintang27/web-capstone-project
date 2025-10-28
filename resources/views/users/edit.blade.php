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
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
    <title>Edit Data User</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>

    <main class="grow-5 mx-7.5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Edit Data User</h2>

        <div class="flex w-inherit justify-end mt-16 mx-5">
            <a href="{{ route('users.index') }}"
                class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out bg-gray-700 stroke-white px-6 text-white hover:bg-gray-950 h-[42px] min-w-[42px] gap-2">
                <span class="material-symbols-outlined text-white">arrow_back</span>
                <div class="text-base">Kembali</div>
            </a>
        </div>

        <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" class="w-inherit mt-10">
            @csrf
            @method('PUT')
            <fieldset class="w-inherit flex gap-10">
                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black" for="name">Nama</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" placeholder="Masukan Nama..."
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 focus:border-blue-600">
                </fieldset>

                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black" for="username">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" placeholder="Masukan Username..."
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 focus:border-blue-600">
                </fieldset>
            </fieldset>
            <fieldset class="w-inherit flex mt-5 gap-10">
                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black" for="nik">NIK</label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik', $user->nik) }}" placeholder="Masukan NIK..."
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 focus:border-blue-600">
                </fieldset>

                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black" for="phone_number">Nomor Telepon</label>
                    <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}" placeholder="Masukan Nomor Telepon..."
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 focus:border-blue-600">
                </fieldset>
            </fieldset>
            <fieldset class="inline-flex flex-col items-start gap-1.5 w-full mt-5">
                <label class="font-medium text-xs text-black" for="address">Alamat</label>
                <textarea name="address" id="address" rows="5" placeholder="Masukan Alamat..."
                    class="w-full rounded-lg border border-slate-200 p-3 text-sm placeholder-slate-500 focus:border-blue-600">{{ old('address', $user->address) }}</textarea>
            </fieldset>
            <fieldset class="w-inherit flex mt-5 gap-10">
                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black" for="password">Password Baru (Opsional)</label>
                    <input type="password" name="password" id="password" placeholder="Masukan Password baru..."
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 focus:border-blue-600">
                </fieldset>

                <fieldset class="grow-1">
                    <label class="font-medium text-xs text-black" for="password_confirmation">Re-Enter Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Masukan ulang Password..."
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 focus:border-blue-600">
                </fieldset>
            </fieldset>
            <fieldset class="w-inherit mt-5">
                <label class="font-medium text-xs text-black" for="role">Peran</label>
                <select name="role" id="role"
                    class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium text-gray-700 focus:border-blue-600">
                    <option value="">-- Pilih Peran --</option>
                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="kepala_posyandu" {{ old('role', $user->role) == 'kepala_posyandu' ? 'selected' : '' }}>Kepala Posyandu</option>
                    <option value="kader" {{ old('role', $user->role) == 'kader' ? 'selected' : '' }}>Kader</option>
                </select>
            </fieldset>
            <fieldset class="w-inherit mt-5">
                <label class="font-medium text-xs text-black" for="profile_picture">Foto Profil (Opsional)</label>
                <input type="file" name="profile_picture" id="profile_picture"
                    class="block w-full text-sm text-gray-700 border border-slate-200 rounded-lg cursor-pointer focus:border-blue-600">
            </fieldset>
            <div class="inline-flex gap-5">
                <button type="submit"
                    class="group inline-flex mt-8.5 items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold transition-all duration-300 ease-in-out bg-blue-700 stroke-white px-6 text-white hover:bg-blue-950 h-[38px] gap-2">
                    <div class="text-base">Simpan Perubahan</div>
                </button>

                <a href="{{ route('users.index') }}"
                    class="group inline-flex mt-8.5 items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold transition-all duration-300 ease-in-out bg-green-400 px-6 text-white hover:bg-green-500 h-[38px] min-w-[38px] gap-2">
                    <div class="text-base">Batal</div>
                </a>
            </div>
        </form>
    </main>
</body>
</html>
