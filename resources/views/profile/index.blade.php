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
    <title>Profile</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>
    <main class="grow-5">
        <div>
            <div class="w-inherit h-65 bg-[url(/public/images/bg-banner.png)] bg-no-repeat bg-cover"></div>
            <div class="mt-[-5rem] ml-20 flex items-center">
                 <div class="size-50 rounded-full bg-no-repeat bg-cover border-[.1em]"
                    style="background-image: url('{{ $user->profile_picture 
                        ? asset('storage/' . $user->profile_picture) 
                        : asset('images/noimage.jpg') }}')">
                </div>
                <div class="ml-5 relative">
                    <h4 class="text-4xl font-bold mt-10">
                        {{ auth()->user()->name }}
                        <span class="text-sm absolute ml-2 top-[1.8rem] bg-pink-600 py-[0.5em] px-[0.8em] rounded-full text-center text-white border-[.1em] border-black">
                            {{ ucfirst(auth()->user()->role) }}
                        </span>
                    </h4>
                    <p class="text-gray-600 mt-1">{{ auth()->user()->username }}</p>
                </div>
            </div>
        </div>
        <section class="mt-16 px-20">
            <h2 class="text-2xl font-bold mb-5">Edit Profil</h2>

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="font-medium text-sm text-gray-700" for="name">Nama</label>
                        <input type="text" name="name" id="name"
                            value="{{ old('name', auth()->user()->name) }}"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">
                    </div>

                    <div>
                        <label class="font-medium text-sm text-gray-700" for="username">Username</label>
                        <input type="text" name="username" id="username"
                            value="{{ old('username', auth()->user()->username) }}"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="font-medium text-sm text-gray-700" for="nik">NIK</label>
                        <input type="text" name="nik" id="nik"
                            value="{{ old('nik', auth()->user()->nik) }}"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">
                    </div>

                    <div>
                        <label class="font-medium text-sm text-gray-700" for="phone_number">Nomor Telepon</label>
                        <input type="text" name="phone_number" id="phone_number"
                            value="{{ old('phone_number', auth()->user()->phone_number) }}"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">
                    </div>
                </div>
                <div>
                    <label class="font-medium text-sm text-gray-700" for="address">Alamat</label>
                    <textarea name="address" id="address" rows="4"
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">{{ old('address', auth()->user()->address) }}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="font-medium text-sm text-gray-700" for="password">Password Baru (Opsional)</label>
                        <input type="password" name="password" id="password"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">
                    </div>

                    <div>
                        <label class="font-medium text-sm text-gray-700" for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-blue-600">
                    </div>
                </div>
                <div>
                    <label class="font-medium text-sm text-gray-700" for="profile_picture">Foto Profil (Opsional)</label>
                    <input type="file" name="profile_picture" id="profile_picture"
                        class="block w-full text-sm text-gray-700 border border-slate-300 rounded-lg cursor-pointer focus:border-blue-600">
                </div>
                <div class="flex gap-4 mt-6">
                    <button type="submit"
                        class="px-6 py-2 bg-green-400 text-white font-semibold rounded-lg hover:bg-green-500 transition">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('dashboard') }}"
                        class="px-6 py-2 bg-gray-500 text-white font-semibold rounded-lg hover:bg-gray-700 transition">
                        Batal
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
