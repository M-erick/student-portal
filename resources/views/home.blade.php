@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
                <!--Start SideBar-->
                <aside class="w-20 relative z-20 flex-shrink-0  px-2 overflow-y-auto bg-indigo-600 sm:block">
                    <div class="mb-6">
                        <!--Start logo -->
                        <div class="flex justify-center">
                            <div class="w-14 h-14 rounded-full bg-gray-300 border-2 border-white mt-2">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxhAxJ4D7MOeTTj6kR9PBeZonW5HM7giKjTbEmR-HMBwf3G1VqGnlwpO1kWrdyIZu8_U&usqp=CAU"
                                    class="rounded-full w-auto" />
                            </div>
                        </div>
                        <!--End logo -->
                        <!--Start NavItem -->
                        <div>
                            <ul class="mt-6 leading-10 px-4">
                                <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-blue-400 cursor-pointer"
                                    @click="openMenu !== 1 ? openMenu = 1 : openMenu = null">
                                    <i class="fas fa-align-left fa-sm text-white"></i>
                                </li>
                                <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-pink-400 cursor-pointer">
                                    <i class="fas fa-question-circle fa-sm text-white"></i>
                                </li>
                                <li
                                    class="mb-3 p-2 rounded-md flex items-center justify-center bg-yellow-400 cursor-pointer">
                                    <i class="fas fa-headphones fa-sm text-white"></i>
                                </li>
                                <li
                                    class="absolute bottom-0 mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer">
                                    <i class="fas fa-power-off fa-sm text-indigo-600"></i>
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
                    <main class="relative z-0 flex-1 pb-8 px-6 bg-white">

                        @include('layouts.dashboard')
                    </main>

                </div>
            </div>
        </div>
    </main>
@endsection
