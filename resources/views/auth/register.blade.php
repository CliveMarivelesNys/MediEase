@extends('auth.layouts.app')

@section('webtitle')
    Register
@endsection

@section('content')
    <section class=" bg-[#efefef] ">

        <div class=" fixed inset-0 flex justify-center items-center">

            <div
                class="  z-auto mx-auto max-y-md max-w-sm w-full flex items-center justify-center  rounded-2xl  p-7 ">

                

                <form method="POST" action="{{ route('register') }} " class="w-full">
                    @csrf <!-- {{ csrf_field() }} -->
                    <!--Sign in section-->
                    <!--<img src='/image/logo.png' class="mx-auto size-20 mr-24"/>-->
                    <div class="flex">
                    <div class="mx-auto my-auto items-center justify-center">
                        <img src="{{ asset('image/MEDILOGO.png') }}" alt="MEDILOGO" style="width: 130px; height: auto;">
                    </div>
                </div>
                    <h2 class="items-center text-center text-2xl font-bold text-[#007AC2]">Registration</h2>
                    <p class="text-black text-center text-sm mb-4">Be part of the family</p>


                    <!-- Name input -->
                    <div class="text-sm">
                        Name
                        <div class="relative mb-3 ">
                            <input type="text"
                            class="text-[#151515]  text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full   px-3 py-[.02rem] leading-[2.15] outline-none  @error('email') border-2 border-red-500 @enderror"
                                id="name" name="name" placeholder="" />
                        </div>
                    </div>
                    <!-- Email input -->
                    <div class="text-sm">
                        Email
                        <div class="relative mb-3">
                            <input type="text"
                            class="text-[#151515]  text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full   px-3 py-[.02rem] leading-[2.15] outline-none  @error('email') border-2 border-red-500 @enderror"
                                id="email" name="email" placeholder="" />
                        </div>
                    </div>



                    <!-- Full Address input -->
                    <div class="text-sm">
                        

                        <!-- Password input -->
                        <div class="text-sm">
                            Password
                            <div class="relative mb-3">
                                <input type="password"
                                class="text-[#151515]  text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full   px-3 py-[.02rem] leading-[2.15] outline-none " @error('password') border-2 border-red-500 @enderror"
                                    id="password" name="password" placeholder="" />

                            </div>

                            <!-- Confirmation Password input -->
                            <div class="text-sm">
                                Confirm Password
                                <div class="relative mb-3">
                                    <input type="password"
                                    class="text-[#151515]  text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full   px-3 py-[.02rem] leading-[2.15] outline-none @error('password_confirmation') border-2 border-red-500 @enderror"
                                        id="password_confirmation" name="password_confirmation" placeholder="" />

                                        <div class="flex flex-row mb-3 mt-3">
                                            <!-- Birthdate input -->
                                            <div class="text-sm">
                                                Birthday
                                                <div class="relative mr-3">
                                                    <input type="date"
                                                    class="text-[#151515]  text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full   px-3 py-[.02rem] leading-[2.15] outline-none "
                                                        id="" name="" placeholder="" />
                                                </div>
                                            </div>
        
                                            <!-- Sex input -->
                                            <div class="text-sm">
                                                Sex
                                                <div class="relative mr-3">
                                                    <input type="date"
                                                    class="text-[#151515]  text-sm font-light rounded-md shadow-md border-InputGray border bg-[#e7e7e7] border-[#e6e6e6] peer block min-h-[auto] w-full   px-3 py-[.02rem] leading-[2.15] outline-none "
                                                        id="" name="" placeholder="" />
                                                </div>
                                            </div>
        

                                </div>


                            <!-- Register button -->
                            <div class="text-center lg:text-left">
                              
                            <button class="inline-block rounded-md bg-[#007AC2] px-7 pb-2.5 pt-3 text-sm font-medium  leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-300 ease-in-out hover:bg-[#004F7D] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-[#004F7D] focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-[#004F7D] active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] w-full"
                            >
                                    Register
                                </button>


                              
                            </div>
                            <div class="text-sm mt-6">
                                Already have an account?
                                <button class="font-semibold text-[#007AC2] hover:text-[#004F7D] ">
                                    <a href="{{ route('login') }}">
                                    Sign In now!
                                </a>
                                </button>
                            </div>
    
            </form>
        </div>
    </div>
</div>





</section>
@endsection