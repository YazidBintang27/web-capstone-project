<aside class="w-[300px] py-5 px-3 shadow-md h-screen overflow-y-auto">
    <img src="{{asset("images/Logo Digital Posyandu Type Right 1.png")}}" alt="Logo" class="w-55">
    <hr class="my-5 border-gray-300"/>
    <ul>
        <li class="font-medium text-xl mb-4"><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('dashboard') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="/dashboard"><div class="flex"> <img src="{{asset('images/icon/Menu.svg')}}" alt="icon" class="w-7"><span class="ml-2">Dashboard</span></div></a></li>
        <li class="mt-10"><span class="font-bold text-lg">Menu</span>
            <ul class="ml-5">
                <li class="mt-3 text-base mt-5 w-full"><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('mothers') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="{{ route('mothers.index') }}">Data Ibu</a></li>
                <li class="mt-3 text-base mt-5 w-full"><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('childs') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="{{ route('childs.index') }}">Data Balita</a></li>
                <li class="mt-3 text-base mt-5 w-full"><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('immunizations') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="{{ route('immunizations.index') }}">Data Imunisasi</a></li>
                <li class="mt-3 text-base mt-5 w-full"><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('weighings') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="{{ route('weighings.index') }}">Data Penimbangan</a></li>
                <li class="mt-3 text-base mt-5 w-full"><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('users') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="{{ route('users.index') }}">Data Pengguna</a></li>
            </ul>
            <li class="mt-8"> <span class="font-bold text-xl">Sistem</span>
                <ul class="my-4 ml-5 text-base">
                    <li><a class="flex items-center px-3 py-2 rounded-md 
               {{ request()->is('profile') ? 'bg-[#33ccff] text-white' : 'hover:bg-[#33ccff] hover:text-white' }}" href="{{route('profile.update')}}"><div class="flex items-center"><img src="{{asset('images/icon/User.png')}}" alt="icon2"><span class="ml-2">Profil</span></div></a></li>
                </ul>
            </li>
            <li class="mt-8 mb-2 border py-2 rounded-md px-2 border-2 border-red-400 hover:bg-red-400">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left text-red-400 font-medium hover:text-white flex items-center hover:bg-red-400">
                        <img src="{{asset('images/icon/Turn off.png')}}" alt="icon3">
                        <span class="ml-2">Logout</span>
                    </button>
                </form>
            </li>
        </li>
    </ul>
</aside>