    {{-- Navigation Bar --}}
    <nav class="flex flex-row p-3 justify-between items-center bg-slate-400 z-10 sticky top-0">
        <a href="#" class="w-12">
            <img src="{{ asset('assets/xiebag.png') }}" alt="Logo Xiebag" class="h-fit w-12">
        </a>
        <ul class="flex flex-row gap-10 justify-center w-5 text-white">
            <li><a href="#">About</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="{{ route('admin.data_product') }}">Data</a></li>
        </ul>
        <div class="px-8 flex items-center gap-x-4">
            <div class="w-12 h-12 rounded-full overflow-hidden">
                <img src="{{ 'https://avatars.githubusercontent.com/agustinadwimaharani' }}" alt="" class="object-cover">
            </div>
            <div>
                <p>{{ 'Tina' }}</p>
            </div>
            <div class="w-6 h-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                    <path
                        d="M480-362q-8 0-15-2.5t-13-8.5L268-557q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-373q-6 6-13 8.5t-15 2.5Z" />
                </svg>
            </div>
    </nav>


