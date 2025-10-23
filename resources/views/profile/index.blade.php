<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/Logo Digital Posyandu.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Profile</title>
</head>
<body class="flex overflow-auto box-border">
    <x-sidebar/>
    <main class="grow-5">
        <div>
            <div class="w-inherit h-65 bg-[url(/public/images/bg-banner.png)] bg-no-repeat bg-cover"></div>
            <div class="mt-[-5rem] ml-20 flex items-center">
                <div class="size-50 bg-[url(/public/images/dummy.png)] rounded-full bg-no-repeat bg-cover border-[.1em]"></div>
                <div class="ml-5 relative">
                    <h4 class="text-4xl font-bold mt-10">John Roberts <span class="text-sm absolute ml-2 top-[1.8rem] bg-pink-600 py-[0.5em] px-[0.8em] rounded-full text-center text-white border-[.1em] border-black">Admin</span></h4>
                    <p class="mt-2">15 Oktober 1957</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>