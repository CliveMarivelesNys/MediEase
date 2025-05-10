@extends('layouts.app')

@section('webtitle')
    Dashboard
@endsection

@section('content')
    <section class="h-full bg-white flex">
        <div class="mx-auto w-full max-w-auto flex items-start justify-start">
            <div class="w-full flex">
                <div class="mt-10 mb-32 mx-auto flex items-start justify-start text-start w-[85rem] py-4">

                  

                    <div class="relative overflow-x-auto w-full">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Item Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        
                                        <div class="container w-full flex items-center">
                                            <img src="/image/Bottle.png" alt="Product 1" class="object-contain w-16 h-16 ">
                                            <div class="ml-4">Product 1</div>
                                        </div>
                                      
                                    </th>
                                    <td class="px-6 py-4">
                                        $10.00
                                    </td>
                                    <td class="px-6 py-4">
                                        3
                                    </td>
                                    <td class="px-6 py-4">
                                        $30.00
                                    </td>
                                </tr>
                               
                              
                            </tbody>
                        </table>

                        <div class="flex mx-auto">
                            <div class="py-4 ml-auto">
                                <button class="text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Purchase
                                </button>
                            </div>
                        </div>
                    
                </div>

                    </div>

              

                </div>
            </div>
        </div>
    </section>
@endsection
