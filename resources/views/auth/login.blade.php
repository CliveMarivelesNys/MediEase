@extends('auth.layouts.app')

@section('webtitle')
    Login
@endsection

@section('content')
    <section class="h-screen bg-white flex">
        {{-- LEFT COL --}}
        <div class="w-1/2 flex items-center justify-center bg-white" 
             style="background-image: url('{{ asset('image/loginBG.png') }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="text-center absolute top-40">
                <div class="z-20">
                    <img src="{{ asset('image/MEDILOGO.png') }}" alt="MEDILOGO" style="width: 170px; height: auto;">
                </div>
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="w-1/2 flex items-center justify-center bg-white text-white">
            <div class="text-start flex flex-col w-5/12">
                <div class="text-black w-auto px-5 pt-6 pb-6">
                    <div class="text-3xl font-bold mb-8 text-[#007AC2]">Welcome Back!</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-black mb-2">
                            Email
                            <div class="relative mt-2 mb-10">
                                <input type="text" class="text-[#151515] text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full px-3 py-1 leading-[2.15] outline-none" id="email" name="email" placeholder="Enter your Email" />
                            </div>

                            <div class="text-[#151515] mb-2">
                                Password
                                <div class="relative mt-2">
                                    <input type="password" class="text-[#151515] text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full px-3 py-1 leading-[2.15] outline-none" id="password" name="password" placeholder="Enter your Password" />
                                </div>
                                <button class="text-sm mt-8 mb-8 font-semibold hover:text-[#007AC2]">
                                    <a href="#">Forgot Password?</a>
                                </button>
                                <button type="submit" class="inline-block rounded-md bg-[#007AC2] px-7 pb-2.5 pt-3 text-sm font-medium leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-300 ease-in-out hover:bg-[#004F7D] focus:bg-[#004F7D] focus:outline-none w-full">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-sm mt-6">
                        Don't have an account? 
                        <button class="font-semibold text-[#007AC2] hover:text-[#004F7D]">
                            <a href="{{ route('register') }}">Sign Up now!</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection