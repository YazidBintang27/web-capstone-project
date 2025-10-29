<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/Logo Digital Posyandu.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="flex overflow-auto box-border font-[Open_Sans]">
    <x-sidebar/>

    <main class="grow-5 mx-5">
        <h2 class="font-bold text-4xl text-gray-800 mb-2 mt-10">Dashboard</h2>
        <p class="text-lg text-gray-500">
            Selamat Datang {{ Auth::user()->role == 'admin' ? 'Admin' : (Auth::user()->role == 'kepala_posyandu' ? 'Kepala Posyandu' : 'Kader') }}!
        </p>

        <div class="flex mt-10">
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-cyan-400 w-16 h-16 flex-shrink-0 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p class="font-semibold text-gray-600">Total Ibu</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalMothers }}</p>
                </div>
            </div>
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-pink-400 w-16 h-16 flex-shrink-0 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p class="font-semibold text-gray-600">Total Balita</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalChildren }}</p>
                </div>
            </div>
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-teal-400 w-16 h-16 flex-shrink-0 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p class="font-semibold text-gray-600">Total Imunisasi</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalImmunizations }}</p>
                </div>
            </div>
            <div class="grow-1 shadow-md w-50 h-28 ml-5 rounded-lg flex items-center px-5 py-5">
                <div class="rounded-full bg-red-400 w-16 h-16 flex-shrink-0 grow-1"></div>
                <div class="grow-120 ml-5">
                    <p class="font-semibold text-gray-600">Total Penimbangan</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalWeighings }}</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
