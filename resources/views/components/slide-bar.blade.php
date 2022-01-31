<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->


    <aside
    class="animate__animated animate__fadeInLeft w-52 relative z-0 flex-shrink-0 hidden px-4 overflow-y-auto bg-gray-100 sm:block "
    x-show="openMenu ==  1" @click.away="openMenu = null" style="display: none;">
    <div class="mb-6">
        <!--Start Sidebar for open menu -->
        <div class="grid grid-cols-1 gap-4 grid-cols-2 mt-6">
            <!-- Start Navitem -->
            <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
            </div>
            <!-- End Navitem -->
            <!-- Start Navitem -->
            <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-calculator fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Calculator</p>
            </div>
            <!-- End Navitem -->
            <!-- Start Navitem -->
            <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Wallet</p>
            </div>
            <!-- End Navitem -->
            <!-- Start Navitem -->
            <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-archive fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Saving</p>
            </div>
            <!-- End Navitem -->
            <!-- Start Navitem -->
            <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-money-bill-wave-alt fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Currencies</p>
            </div>
            <!-- End Navitem -->
            <!-- Start Navitem -->
            <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-shopping-basket fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Expenses</p>
            </div>
            <!-- End Navitem -->
        </div>
        <!--End Sidebar for open menu -->

    </div>
</aside>
</div>
