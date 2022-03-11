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
                <x-sidebar />
                <!-- Start Open Menu -->

                <!-- End Open Menu -->

                <!-- End Sidebar -->
                <div class="flex flex-col flex-1 w-full overflow-y-auto">
                    <!--Start Topbar -->
                    <!--End Topbar -->
                    <main class="relative z-0 flex-1 px-6 pb-8 bg-white">


                        <div>

                            <div
                                class="w-full pt-2 overflow-hidden text-3xl font-bold text-center text-white bg-gray-700 shadow h-14 sm:rounded-md ">
                                Unit Registration Form

                            </div>



                            <div class="container mx-auto mt-4">
                                <div class="mt-10 md:mt-0 md:col-span-2">

                                    <form action="/student" method="POST">
                                        @csrf
                                        <div class="overflow-hidden shadow sm:rounded-md">
                                            <div class="px-2 py-8 bg-white sm:p-6">

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                                        Department</label>

                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                                        Year Registration</label>

                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                                        Semester Registration </label>

                                                </div>

                                            </div>


                                        </div>
                                        <fieldset class="mt-8 ">
                                            <legend class=" text-base  text-1.5xl font-medium text-gray-900">Units</legend>
                                            <div class="mt-2 space-y-4">
                                                {{-- {{ $data->course }} --}}
                                                {{-- @forelse ($data as $item)
                                                {{ $item['Course_code'] }}

                                                @empty
                                                <p>
                                                    Empty
                                                </p>

                                                @endforelse --}}


                                                @foreach ($data as $datas)
                                                    <div class="flex place-items-center">
                                                        <div class="flex items-center h-5">

                                                            {{-- retreiving the unit code  --}}

                                                            <input id="comments" name="units[]" type="checkbox"
                                                                value="{{ $datas->Unit_code }}"
                                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                        </div>

                                                        <div class="ml-3 text-sm">
                                                            <label for="comments" class="text-gray-700 font-regular"> <span
                                                                    class="font-bold">
                                                                    {{ $datas->Unit_code }}</span>
                                                                {{ $datas->Unit_name }}
                                                            </label>

                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>



                                        </fieldset>



                                        <div class="px-4 py-3 text-right bg-white sm:px-6">
                                            {{-- deal with pdf button later --}}

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

                        </div>
                    </main>
                </div>


            </div>
        </div>

    </main>
@endsection
