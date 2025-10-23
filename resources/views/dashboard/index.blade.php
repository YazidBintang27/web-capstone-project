<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/Logo Digital Posyandu.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="flex overflow-auto box-border">
    <x-sidebar/>
    <main class="grow-5 mx-5">
        <h2 class="font-extrabold text-5xl mb-2 mt-10">Dashboard</h2>
        <p class="text-lg text-gray-500">Selamat Datang Kepala Posyandu!</p>
        <div class="flex mt-10">
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-cyan-400 size-18 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p>Total Ibu</p>
                    <p>0</p>
                </div>
            </div>
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-pink-400 size-18 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p>Total Balita</p>
                    <p>0</p>
                </div>
            </div>
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-teal-400 size-18 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p>Total Imunisasi</p>
                    <p>0</p>
                </div>
            </div>
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-red-400 size-18 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p>Total Peserta</p>
                    <p>0</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>