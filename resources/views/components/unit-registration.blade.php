<div>
    <!-- Well begun is half done. - Aristotle -->

    <!-- component -->
    <!-- This is an example component -->
    <div
        class="w-full pt-2 overflow-hidden text-3xl font-bold text-center text-white bg-gray-700 shadow h-14 sm:rounded-md ">
        Unit Registration Form

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
                                <option>COMPUTER TECHNOLOGY</option>
                                <option>INFORMATION TECHNOLOGY</option>
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
                <fieldset class="mt-8 ">
                    <legend class=" text-base  text-1.5xl font-medium text-gray-900">Units</legend>
                    <div class="mt-2 space-y-4">

                        <div class="flex place-items-center">
                            <div class="flex items-center h-5">
                                <input id="comments" name="comments" type="checkbox"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" class="text-gray-700 font-regular"> <span class="font-bold">
                                        CCS301 </span> Principle Of Programming Language
                                </label>

                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="comments" name="comments" type="checkbox"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" class="text-gray-700 font-regular"> <span class="font-bold">
                                        CCS303 </span>Design And Analysis Of
                                    Algorithm</label>

                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="comments" name="comments" type="checkbox"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" class="text-gray-700 font-regular"> <span class="font-bold">
                                        CCS305 </span>Intro To Compiler Construction And
                                    Design</label>

                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="comments" name="comments" type="checkbox"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" class="text-gray-700 font-regular"> <span class="font-bold">
                                        CCS307 </span>Computer Network</label>

                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="comments" name="comments" type="checkbox"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" class="text-gray-700 font-regular"> <span class="font-bold">
                                        CCS315 </span>Intelligent System</label>

                            </div>
                        </div>


                        <div class="mt-2 space-y-4">

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="text-gray-700 font-mediuregular"> <span
                                            class="font-bold"> CCS317 </span>Computer Networks Lab
                                        1(CISCO)</label>

                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="text-gray-700 font-mediuregular"> <span
                                            class="font-bold"> CCS323 </span>Group Project</label>

                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="text-gray-700 font-mediuregular"> <span
                                            class="font-bold"> CCS313 </span>Unix Operating System</label>

                                </div>
                            </div>

                        </div>
                    </div>



                </fieldset>



                <div class="px-4 py-3 text-right bg-white sm:px-6">
                    <a href='{{ route('pdf') }}'
                        class="inline-flex justify-center w-24 px-4 py-2 mr-4 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm ring ring-gray-500 ring-offset-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        result
                    </a>
                    <button type="submit"
                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-500 ring-offset-4 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Save
                    </button>

                </div>
            </form>
        </div>
    </div>

</div>
</div>
</section>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class=""></div>
    </div>
</div>
</div>
