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
    <title>{{ $title }}</title>
</head>
<body class="box-border font-[Open_Sans]">
    <main class="flex w-screen h-screen justify-center">
        <div class="grow-1 text-left mx-25 flex flex-col items-center">
            <img src="{{ asset('images/Logo Digital Posyandu Type Right 1.png') }}" alt="Logo" class="mt-10 w-60">
            <div class="w-full mt-18">
                <h1 class="font-bold text-3xl">{{ $title }}</h1>
                <p class="mt-2 text-[#606060]">Selamat Datang, harap masukkan username dan password anda.</p>
            </div>
            <x-loginform method="POST" class="w-full mt-[2rem] mx-5"/>
        </div>
        <div class="grow-1 basis-5xl bg-[url(/public/images/cover.png)] bg-cover bg-bottom-right"></div>
    </main>
</body>
</html>