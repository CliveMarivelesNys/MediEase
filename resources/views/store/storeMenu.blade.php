<div class="absolute  py-2  ">
    <h2 class="font-semibold mb-4">All Categories</h2>
    <ul class="list-disc list-inside">
        <li class="mb-2 hover:text-[#007AC2] cursor-pointer  {{ request()->routeIs('storeMedicine') ? 'text-[#007AC2]' : 'text-[#4e4e4e]' }}">
            <a href="{{ route('storeMedicine') }}">Medicine</a>
        </li>

        <li class="mb-2 hover:text-[#007AC2] cursor-pointer  {{ request()->routeIs('storeSkinCare') ? 'text-[#007AC2]' : 'text-[#4e4e4e]' }}">
            <a href="{{ route('storeSkinCare') }}">Skin Care</a>
        </li>

        <li class="mb-2 hover:text-[#007AC2] cursor-pointer  {{ request()->routeIs('storeSup')? 'text-[#007AC2]' : 'text-[#4e4e4e]' }}">
            <a href="{{ route('storeSup') }}">Supplements</a>
        </li>
    </ul>
</div>