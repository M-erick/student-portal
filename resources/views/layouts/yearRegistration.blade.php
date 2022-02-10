@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex w-full h-screen bg-gray-800 " x-data="{openMenu:1}">
                <!--Start SideBar-->
                <aside class="relative z-20 flex-shrink-0 w-20 px-2 overflow-y-auto bg-indigo-600 sm:block">
                    <div class="mb-6">
                        <!--Start logo -->
                        <div class="flex justify-center">
                            <div class="mt-2 bg-gray-300 border-2 border-white rounded-full w-14 h-14">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxhAxJ4D7MOeTTj6kR9PBeZonW5HM7giKjTbEmR-HMBwf3G1VqGnlwpO1kWrdyIZu8_U&usqp=CAU"
                                    class="w-auto rounded-full" />
                            </div>
                        </div>
                        <!--End logo -->
                        <!--Start NavItem -->
                        <div>
                            <ul class="px-4 mt-6 leading-10">
                                <li>
                                    <a class="flex items-center justify-center p-2 mx-auto mb-3 cursor-pointer hover:underline"
                                        href="{{ route('home') }}">Home</a>


                                </li>
                                <li class="flex items-center justify-center p-2 mb-3 bg-pink-400 rounded-md cursor-pointer">
                                    <i class="text-white fas fa-question-circle fa-sm"></i>
                                </li>
                                <li
                                    class="flex items-center justify-center p-2 mb-3 bg-yellow-400 rounded-md cursor-pointer">
                                    <i class="text-white fas fa-headphones fa-sm"></i>
                                </li>

                            </ul>
                        </div>
                        <!--End NavItem -->
                    </div>
                </aside>
                <!-- Start Open Menu -->

                <!-- End Open Menu -->

                <!-- End Sidebar -->
                <div class="flex flex-col flex-1 w-full overflow-y-auto">
                    <!--Start Topbar -->
                    <!--End Topbar -->
                    <main class="relative z-0 flex-1 px-6 pb-8 bg-white">

                        <div
                            class="w-full pt-2 overflow-hidden text-3xl font-bold text-center text-white bg-gray-700 shadow h-14 sm:rounded-md ">
                            Academic Registration Form

                        </div>
                        <div class="container mx-auto mt-4">
                            <div class="mt-10 md:mt-0 md:col-span-2">

                                <form action="/registration" method="POST">
                                    @csrf
                                    <div class="overflow-hidden shadow sm:rounded-md">
                                        <div class="px-2 py-8 bg-white sm:p-6">

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="country" class="block text-sm font-medium text-gray-700">
                                                    Department</label>
                                                <select id="country" name="country" autocomplete="country"
                                                    class="block w-full px-3 py-2 mt-3 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option class="mt-2"> COMPUTER SCIENCE</option>
                                                    {{-- <option>COMPUTER TECHNOLOGY</option>
                                                    <option>INFORMATION TECHNOLOGY</option> --}}
                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="country" class="block text-sm font-medium text-gray-700">
                                                    Year Registration</label>
                                                <select id="country" name="country" autocomplete="country"
                                                    class="block w-full px-3 py-2 mt-3 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option class="mt-2"> YEAR 1</option>
                                                    <option>YEAR 2</option>
                                                    <option>YEAR 3</option>
                                                    <option>YEAR 4</option>

                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="country" class="block text-sm font-medium text-gray-700">
                                                    Semester Registration </label>
                                                <select id="country" name="country" autocomplete="country"
                                                    class="block w-full px-3 py-2 mt-3 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option class="mt-2">SEM 1</option>
                                                    <option>SEM 2</option>
                                                </select>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="px-4 py-3 text-right bg-white sm:px-6">
                                        {{-- <a href='{{ route('pdf') }}'
                                            class="inline-flex justify-center w-24 px-4 py-2 mr-4 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm ring ring-gray-500 ring-offset-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            result
                                        </a> --}}
                                        <button type="submit"
                                            class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-500 ring-offset-4 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            Save
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>


                        {{-- <x-unitregistration/> --}}
                    </main>

                </div>
            </div>
        </div>
    </main>
@endsection
