<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/Logo Digital Posyandu.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
    <title>Data User</title>
</head>
<body class="flex overflow-auto box-border">
    <x-sidebar/>
    <main class="grow-5 mx-7.5">
        <h2 class="font-extrabold text-5xl mb-2 mt-10">Tambah Data User</h2>
        <div class="flex w-inherit justify-end mt-16 mx-5">
            <button type="button" aria-disabled="false"
                class="group inline-flex items-center justify-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed bg-gray-700 stroke-white px-6 text-white hover:bg-gray-950 h-[42px] min-w-[42px] gap-2 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                <span class="material-symbols-outlined text-white">arrow_back</span>
                <div class="text-base">Kembali</div>
            </button>
        </div>
        <form method="post" class="w-inherit mt-10">
            <fieldset class="w-inherit flex gap-10">
                <fieldset class="grow-1">
                    <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="mothersName">Nama</label>
                    <div class="relative w-full">
                        <input
                        class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600 py-2 mb-0.5"
                        aria-disabled="false" aria-describedby=":S2:" id="mothersName" placeholder="Masukan Nama...">
                    </div>
                </fieldset>
                <fieldset class="grow-1">
                    <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="mothersNik">Username</label>
                    <div class="relative w-full">
                        <input
                        class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600 py-2 mb-0.5"
                        aria-disabled="false" aria-describedby=":S2:" id="mothersNik" placeholder="Masukan Username...">
                    </div>
                </fieldset>
            </fieldset>
            <fieldset class="w-inherit flex mt-5 gap-5">
                <fieldset class="grow-1">
                    <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="mothersBirth">Tanggal Lahir</label>
                    <input class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600 py-2 mb-0.5" aria-disabled="false" aria-describedby=":S2:" id="mothersBirth" placeholder="Text field" type="date">
                </fieldset>
                <fieldset class="grow-1 ml-10">
                    <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="telNumber">Nomor Telepon</label>
                    <input class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600 py-2 mb-0.5" aria-disabled="false" aria-describedby=":S2:" id="telNumber" placeholder="Masukan Nomor Telepon..." type="tel">
                </fieldset>
            </fieldset>
            <fieldset class="inline-flex flex-col items-start gap-1.5 stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700 w-full">
                <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="address">Alamat</label>
                <textarea
                    class="w-full resize rounded-lg border border-slate-200 p-3 pb-5 text-xs font-normal placeholder-slate-500 outline-none transition-colors duration-300 ease-in-out scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thin scrollbar-track-transparent scrollbar-thumb-slate-300 hover:scrollbar-thumb-slate-500 active:scrollbar-thumb-slate-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600"
                    aria-disabled="false" maxlength="100" id="address" aria-describedby=":raq:" placeholder="Masukan Alamat..." rows="5" cols="50"></textarea>
            </fieldset>
            <fieldset class="w-inherit flex mt-5 gap-5">
                <fieldset class="grow-1">
                    <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="mothersBirth">Password</label>
                    <input class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600 py-2 mb-0.5" aria-disabled="false" aria-describedby=":S2:" id="mothersBirth" placeholder="Masukan Password..." type="password">
                </fieldset>
                <fieldset class="grow-1 ml-10">
                    <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="telNumber">Re-Enter Password</label>
                    <input class="w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400 focus:border-blue-600 py-2 mb-0.5" aria-disabled="false" aria-describedby=":S2:" id="telNumber" placeholder="Masukan Ulang Password..." type="password">
                </fieldset>
            </fieldset>
            <div class="inline-flex gap-5">
                <button type="submit" aria-disabled="false"
                    class="group inline-flex mt-8.5 items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed bg-blue-700 stroke-white px-6 text-white hover:bg-blue-950 h-[38px] min-w-[38px] gap-2 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                    <div class="text-base">Simpan</div>
                </button>
                <button type="submit" aria-disabled="false"
                    class="group inline-flex mt-8.5 items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed bg-red-700 stroke-white px-6 text-white hover:bg-red-950 h-[38px] min-w-[38px] gap-2 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                    <div class="text-base">Batal</div>
                </button>
            </div>
        </form>
    </main>
</body>
</html>