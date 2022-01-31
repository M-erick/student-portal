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
                                        href="{{ route('registration') }}">Register</a>
                                </li>
                                <li>
                                    <a class="flex items-center justify-center p-2 mx-auto mb-3 cursor-pointer hover:underline"
                                        href="{{ route('registration') }}">RESULTS</a>


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
                <div class="flex flex-col flex-1 ">
                    <!--Start Topbar -->
                    <!--End Topbar -->
                    <main class="flex-1 px-2 pb-3 bg-white ">

                        @include('layouts.dashboard')
                    </main>

                </div>
            </div>
        </div>
    </main>
@endsection
