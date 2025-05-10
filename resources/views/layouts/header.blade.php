<div class="fixed top-0 left-0 right-0 z-50 border-b bg-white border-[#D4D4D4] shadow-sm h-15">
    <div class="mx-auto w-9/12 px-4 py-4 sm:px-6 lg:px-6">
        <div class="flex h-15 items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset('image/MEDILOGO.png') }}" alt="MEDILOGO" class="w-[60px] h-auto">
            </div>

            <div class="relative w-full">
            <div class="flex items-center mx-4 w-1/4 justify-start">
                <div class="absolute">
                    <i class="absolute left-3 top-1/2 transform -translate-y-1/2 opacity-60">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                            viewBox="0 0 30 30">
                            <path
                                d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
                            </path>
                        </svg>
                    </i>
                
                </div>
                <input type="text" class="text-[#151515] text-sm   pl-10 border border-[#D4D4D4] focus:outline-none ring-0 font-light bg-[#f1f1f1] rounded-xl  bordershadow-md border-InputGray shadow-sm peer block min-h-[auto] w-full px-3 py-[.4rem] leading-[.05 rem] outline-none" id="" name="" placeholder="Search" />
              
            </div>
        </div>

        <div class="flex justify-end items-end relative mr-4">
            <a href="{{ route('cart') }}" class="relative">

                {{-- Ammount of items in cart --}}
                <div class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 border-2 border-[#50bcff] z-20 bg-[#007AC2] text-xs font-semibold w-6 h-6 rounded-full flex items-center justify-center text-white">
                    1 
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007AC2" class="size-7">
                    <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                </svg>
            </a>
        </div>
        
            <ul class="p-1 w-auto font-semibold">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>


