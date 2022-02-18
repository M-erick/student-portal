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
                <x-sidebar/>
                <!-- Start Open Menu -->

                <!-- End Open Menu -->

                <!-- End Sidebar -->
                <div class="flex flex-col flex-1 ">
                    <!--Start Topbar -->
                    <!--End Topbar -->
                    <main class="flex-1 px-2 pb-3 bg-white ">

                        {{-- @include('layouts.dashboard') --}}


                        <div class="grid pb-10 mt-4 ">
                            <div
                                class="grid grid-cols-1 gap-2 mt-3 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
                                <div class="relative w-full overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg h-52 group"
                                    style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                                    <div
                                        class="absolute inset-0 transition duration-300 ease-in-out bg-pink-900 bg-opacity-75">
                                    </div>
                                    <div
                                        class="relative flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-4">
                                        <div>
                                            <h3 class="text-lg text-center text-white">
                                                Total Billed
                                            </h3>
                                            <h3 class="mt-2 text-3xl font-bold text-center text-white">
                                                Ksh 227,580.00
                                            </h3>

                                        </div>
                                    </div>
                                </div>

                                <div class="relative w-full overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg h-52 group"
                                    style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                                    <div
                                        class="absolute inset-0 transition duration-300 ease-in-out bg-yellow-600 bg-opacity-75">
                                    </div>
                                    <div class="relative flex items-center w-full h-full px-4 sm:px-6 lg:px-4">
                                        <div>
                                            <div class="flex items-center space-x-2 text-lg text-white">
                                                <div class="flex items-center p-2 bg-white rounded-md">
                                                    <i class="text-yellow-300 fas fa-toggle-off fa-sm"></i>
                                                </div>
                                                <p>Balance</p>
                                            </div>
                                            <h3 class="mt-2 text-3xl font-bold text-white">
                                                Ksh 136,794.00
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="relative w-full overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg h-52 group"
                                    style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                                    <div
                                        class="absolute inset-0 transition duration-300 ease-in-out bg-blue-900 bg-opacity-75">
                                    </div>

                                    <div class="relative flex items-center w-full h-full px-4 sm:px-6 lg:px-4">
                                        <div>
                                            <div class="flex items-center space-x-2 text-lg text-white">
                                                <div class="flex items-center p-2 bg-white rounded-md">
                                                    <i class="text-blue-800 fas fa-clipboard-check fa-sm"></i>
                                                </div>
                                                <p>Total Paid</p>
                                            </div>
                                            <h3 class="mt-2 text-3xl font-bold text-white">
                                                Ksh 90,786.00
                                            </h3>

                                        </div>
                                    </div>
                                </div>


                                <div>

                                    <div class="max-w-2xl mx-auto mt-5">

                                        <div
                                            class="max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                            <div class="flex items-center justify-between mt-3 ">
                                                <h3
                                                    class="text-xl font-bold leading-none text-center gray-900 cente dark:text-white">
                                                    User Profile</h3>

                                            </div>
                                            <div class="flow-root ">
                                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                                    @foreach ($students as $student)
                                                        <li class="py-3 sm:py-4">
                                                            <div class="flex items-center space-x-4">

                                                                <div class="flex-1 min-w-0">
                                                                    <p
                                                                        class="text-sm font-bold text-gray-900 truncate dark:text-white">
                                                                        Admission No
                                                                    </p>

                                                                </div>
                                                                <div
                                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                                    {{ $student->admission }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="py-3 sm:py-4">
                                                            <div class="flex items-center space-x-4">

                                                                <div class="flex-1 min-w-0">
                                                                    <p
                                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                        FULL NAME:
                                                                    </p>

                                                                </div>
                                                                <div
                                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                                    {{ $student->name }}
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="py-3 sm:py-4">
                                                            <div class="flex items-center space-x-4">

                                                                <div class="flex-1 min-w-0">
                                                                    <p
                                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                        University Email :
                                                                    </p>

                                                                </div>
                                                                <div
                                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                                    {{ $student->email }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pt-3 pb-0 sm:pt-4">
                                                            <div class="flex items-center space-x-4">

                                                                <div class="flex-1 min-w-0">
                                                                    <p
                                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                        University Email Password
                                                                    </p>

                                                                </div>
                                                                <div
                                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                                    MaseNO12Kh
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>




                                    </div>

                                    <!-- End Content-->
                                </div>

                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </main>
@endsection
