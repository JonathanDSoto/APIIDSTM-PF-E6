<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";

    export default {
        components: {
            DefaultTemplate,
        }
    }
</script>

<template>
    <DefaultTemplate>
          <div class="page-content">
            <div id="content_layout">
                <div class="space-y-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="lg:col-span-10 col-span-12 space-y-5">
                            <div class="card p-6">
                                <div class="grid grid-cols-8 gap-5">
                                    <div class="xl:col-span-8 col-span-12">
                                        <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                            <div class=" bg-info-700 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Shipment
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    231
                                                </span>
                                            </div>
                                            <div class=" bg-warning-700 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Total Income of the Month
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    $232,232
                                                </span>
                                            </div>
                                            <div class=" bg-primary-800 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Today Activity
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    231
                                                </span>
                                            </div>
                                            <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Users
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    1,232
                                                </span>
                                            </div>
                                            <div class=" bg-warning-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-warning-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:chart-pie></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Coupons 
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    3
                                                </span>
                                            </div>
                                            
                                            <div class=" bg-primary-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-primary-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:clock></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Orders
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    2,231
                                                </span>
                                            </div>
                                            <div class=" bg-success-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-success-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:calculator></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Products
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    24
                                                </span>
                                            </div>
                                            
                                            <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                                                <div class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                                                    <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                                                </div>
                                                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                                                    Total Income of the dayMonth
                                                </span>
                                                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                                                    $12,923
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid xl:grid-cols-3 grid-cols-1 gap-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Orders</h4>
                                <div>
                                    <!-- BEGIN: Card Dropdown -->
                                    <div class="relative">
                                        <div class="dropdown relative">
                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                                    rounded dark:text-slate-400">
                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                </span>
                                            </button>
                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                            <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                    dark:hover:text-white">
                                                Last 28 Days</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                    dark:hover:text-white">
                                                Last Month</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                    dark:hover:text-white">
                                                Last Year</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END: Card Droopdown -->
                                </div>
                            </div>
                            <div class="card-body p-6">
                                <div>
                                    <ul class="divide-y divide-slate-100 dark:divide-slate-700 -mx-6 -mb-6">
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                            <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                        <input type="checkbox" class="hidden" name="tasklist">
                                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                                transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex bar-active">
                                                <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                    La Paz BCS, 11/22/2023, 2302 categories, Biznaga 108 Col. Indeco, value $3,123
                                                </span>
                                                <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                    <button type="button" class="transition duration-150 hover:text-danger-500">
                                                        <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                            <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                        <input type="checkbox" class="hidden" name="tasklist">
                                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                                transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex bar-active">
                                                <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                    Amet minim mollit no...
                                                </span>
                                                <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                    <button type="button" class="transition duration-150 hover:text-danger-500">
                                                        <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                            <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                        <input type="checkbox" class="hidden" name="tasklist">
                                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                                transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex bar-active">
                                                <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                    Amet minim mollit no...
                                                </span>
                                                <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                    <button type="button" class="transition duration-150 hover:text-danger-500">
                                                        <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                        <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="tasklist">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                            transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex bar-active">
                                            <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                Amet minim mollit no...
                                            </span>
                                            <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                <button type="button" class="transition duration-150 hover:text-danger-500">
                                                    <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                </button>
                                            </span>
                                        </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                        <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="tasklist">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                            transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex bar-active">
                                            <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                Amet minim mollit no...
                                            </span>
                                            <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                <button type="button" class="transition duration-150 hover:text-danger-500">
                                                    <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                </button>
                                            </span>
                                        </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                        <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="tasklist">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                            transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex bar-active">
                                            <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                Amet minim mollit no...
                                            </span>
                                            <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                <button type="button" class="transition duration-150 hover:text-danger-500">
                                                    <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                </button>
                                            </span>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <a href="/users">
                                <div class="bg-no-repeat bg-cover bg-center p-5 rounded-[6px] relative" style="background-image: url(images/all-img/widget-bg-2.png)">
                                    <div class="max-w-[180px]">
                                    <h4 class="text-xl font-medium text-white mb-2">
                                        <span class="block font-normal">Check the Users</span>
                                        <span class="block">Mr. Dianne Russell</span>
                                    </h4>
                                    <p class="text-sm text-white font-normal">
                                        Remember to stay calm while still working;)!
                                    </p>
                                    </div>
                                </div>
                            </a>
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Recent User Activity</h4>
                                    <div>
                                        <div class="relative">
                                            <div class="dropdown relative">
                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                                        rounded dark:text-slate-400">
                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                </span>
                                            </button>
                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                        shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                    dark:hover:text-white">
                                                    Last 28 Days</a>
                                                </li>
                                                <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                    dark:hover:text-white">
                                                    Last Month</a>
                                                </li>
                                                <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                    dark:hover:text-white">
                                                    Last Year</a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-6">
                                    <div>
                                        <ul class="list-item space-y-3 h-full overflow-x-auto">
                                            <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                <div>
                                                    <div class="w-8 h-8 rounded-[100%]">
                                                    <img src=images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                    </div>
                                                </div>
                                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                    <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                    Finance KPI Mobile app launch preparion meeting.
                                                    </div>
                                                </div>
                                                <div class="flex-1 ltr:text-right rtl:text-left">
                                                    <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                    1 hours
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                <div>
                                                    <div class="w-8 h-8 rounded-[100%]">
                                                    <img src=images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                    </div>
                                                </div>
                                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                    <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                    Finance KPI Mobile app launch preparion meeting.
                                                    </div>
                                                </div>
                                                <div class="flex-1 ltr:text-right rtl:text-left">
                                                    <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                    1 hours
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                <div>
                                                    <div class="w-8 h-8 rounded-[100%]">
                                                    <img src=images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                    </div>
                                                </div>
                                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                    <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                    Finance KPI Mobile app launch preparion meeting.
                                                    </div>
                                                </div>
                                                <div class="flex-1 ltr:text-right rtl:text-left">
                                                    <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                    1 hours
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                <div>
                                                    <div class="w-8 h-8 rounded-[100%]">
                                                    <img src=images/users/user-4.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                    </div>
                                                </div>
                                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                    <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                    Finance KPI Mobile app launch preparion meeting.
                                                    </div>
                                                </div>
                                                <div class="flex-1 ltr:text-right rtl:text-left">
                                                    <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                    1 hours
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="/users">
                                <div class="bg-no-repeat bg-cover bg-center p-5 rounded-[6px] relative flex items-center" style="background-image: url(images/all-img/widget-bg-5.png)">
                                    <div class="flex-1">
                                    <div class="max-w-[200px]">
                                        <div class="text-xl font-medium text-white dark:text-slate-800 mb-2">
                                            <span class="block font-normal">Add a new coupon!</span>
                                        </div>
                                        <p class="text-sm text-wgite text-white dark:text-slate-800 font-normal">
                                            Wathc out for the coupon rules!
                                        </p>
                                    </div>
                                    </div>
                                    <div class="flex-none">
                                    <img src=assets/images/svg/widgetvector2.svg alt="" class="ml-auto">
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Activity</h4>
                                <div>
                                    <div class="relative">
                                        <div class="dropdown relative">
                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                                    rounded dark:text-slate-400">
                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                </span>
                                            </button>
                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                <li>
                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                        dark:hover:text-white">
                                                    Last 28 Days</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                        dark:hover:text-white">
                                                    Last Month</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                        dark:hover:text-white">
                                                    Last Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-6">
                                <ul class="relative ltr:pl-2 rtl:pr-2">
                                    <li class="ltr:border-l-2 rtl:border-r-2 border-slate-100 dark:border-slate-700 pb-4 
                                            last:border-none ltr:pl-[22px] rtl:pr-[22px] relative before:absolute ltr:before:left-[-8px] 
                                            rtl:before:-right-2 before:top-[0px] before:rounded-full before:w-4 before:h-4
                                            before:bg-slate-900 dark:before:bg-slate-600 before:leading-[2px] 
                                            before:content-[url('../images/all-img/ck.svg')]">
                                        <div class="p-[10px] relative top-[-20px]">
                                            <h2 class="text-sm font-medium dark:text-slate-400-900 mb-1 text-slate-600">
                                                Sended order for the 11/20/2023
                                            </h2>
                                            <p class="text-xs capitalize dark:text-slate-400">
                                                Nov 01, 2023
                                            </p>
                                        </div>
                                    </li>
                                    <li class="ltr:border-l-2 rtl:border-r-2 border-slate-100 dark:border-slate-700 pb-4 
                                            last:border-none ltr:pl-[22px] rtl:pr-[22px] relative before:absolute ltr:before:left-[-8px] 
                                            rtl:before:-right-2 before:top-[0px] before:rounded-full before:w-4 before:h-4
                                            before:bg-slate-900 dark:before:bg-slate-600 before:leading-[2px] 
                                            before:content-[url('../images/all-img/ck.svg')]">
                                        <div class="p-[10px] relative top-[-20px]">
                                            <h2 class="text-sm font-medium dark:text-slate-400-900 mb-1 text-slate-600">
                                                Accomplished goal of $100,000
                                            </h2>
                                            <p class="text-xs capitalize dark:text-slate-400">
                                                Nov 07, 2023
                                            </p>
                                        </div>
                                    </li>
                                    <li class="ltr:border-l-2 rtl:border-r-2 border-slate-100 dark:border-slate-700 pb-4 
                                            last:border-none ltr:pl-[22px] rtl:pr-[22px] relative before:absolute ltr:before:left-[-8px] 
                                            rtl:before:-right-2 before:top-[0px] before:rounded-full before:w-4 before:h-4
                                            before:bg-slate-900 dark:before:bg-slate-600 before:leading-[2px] 
                                            before:content-[url('../images/all-img/ck.svg')]">
                                        <div class="p-[10px] relative top-[-20px]">
                                            <h2 class="text-sm font-medium dark:text-slate-400-900 mb-1 text-slate-600">
                                                Accomplished goal of $200,000
                                            </h2>
                                            <p class="text-xs capitalize dark:text-slate-400">
                                                Sep 13, 2023
                                            </p>
                                        </div>
                                    </li>
                                    <li class="ltr:border-l-2 rtl:border-r-2 border-slate-100 dark:border-slate-700 pb-4 
                                            last:border-none ltr:pl-[22px] rtl:pr-[22px] relative before:absolute ltr:before:left-[-8px] 
                                            rtl:before:-right-2 before:top-[0px] before:rounded-full before:w-4 before:h-4
                                            before:bg-slate-900 dark:before:bg-slate-600 before:leading-[2px] 
                                            before:content-[url('../images/all-img/ck.svg')]">
                                        <div class="p-[10px] relative top-[-20px]">
                                            <h2 class="text-sm font-medium dark:text-slate-400-900 mb-1 text-slate-600">
                                                Finished the background code optimization
                                            </h2>
                                            <p class="text-xs capitalize dark:text-slate-400">
                                                Sep 18, 2023
                                            </p>
                                        </div>
                                    </li>
                                    <li class="ltr:border-l-2 rtl:border-r-2 border-slate-100 dark:border-slate-700 pb-4 
                                            last:border-none ltr:pl-[22px] rtl:pr-[22px] relative before:absolute ltr:before:left-[-8px] 
                                            rtl:before:-right-2 before:top-[0px] before:rounded-full before:w-4 before:h-4
                                            before:bg-slate-900 dark:before:bg-slate-600 before:leading-[2px] 
                                            before:content-[url('../images/all-img/ck.svg')]">
                                        <div class="p-[10px] relative top-[-20px]">
                                            <h2 class="text-sm font-medium dark:text-slate-400-900 mb-1 text-slate-600">
                                                Finished the future development for phone 
                                            </h2>
                                            <p class="text-xs capitalize dark:text-slate-400">
                                                Sep 21, 2023
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <div class="grid xl:grid-cols-3 grid-cols-1 gap-5">
                    <div class="card xl:col-span-1 col-span-2">
                        <header class=" card-header noborder">
                            <h4 class="card-title">Shipment
                            </h4>
                        </header>
                        <div class="card-body px-6 pb-6">
                            <div class="overflow-x-auto -mx-6">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="bg-slate-200 dark:bg-slate-700">
                                    <tr>
                                        <th scope="col" class=" table-th ">
                                        ID
                                        </th>
                                        <th scope="col" class=" table-th ">
                                        Shipment Value
                                        </th>
                                        <th scope="col" class=" table-th ">
                                        Date
                                        </th>
                                        <th scope="col" class=" table-th ">
                                        Address
                                        </th>
                                        <th scope="col" class=" table-th ">
                                        Country
                                        </th>
                                        <th scope="col" class=" table-th ">
                                        Value
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">82</td>
                                        <td class="table-td">Dorelle</td>
                                        <td class="table-td ">dharling0@rediff.com</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>

                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">89</td>
                                        <td class="table-td">Bendicty</td>
                                        <td class="table-td ">bllewellin1@example.com</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>

                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">28</td>
                                        <td class="table-td">Remy</td>
                                        <td class="table-td ">rcarbry2@prlog.org</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>

                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">20</td>
                                        <td class="table-td">Bernardo</td>
                                        <td class="table-td ">bhacun3@xinhuanet.com</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>

                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">2</td>
                                        <td class="table-td">Emelia</td>
                                        <td class="table-td ">egarstang4@miitbeian.gov.cn</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>

                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">98</td>
                                        <td class="table-td">Dian</td>
                                        <td class="table-td ">ddopson5@examiner.com</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>

                                    <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                        <td class="table-td">17</td>
                                        <td class="table-td">Coretta</td>
                                        <td class="table-td ">cponter6@loc.gov</td>
                                        <td class="table-td ">Vicente Guerrero 411</td>
                                        <td class="table-td ">Mexico</td>
                                        <td class="table-td ">$23,200</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Most Wanted Products (Wishlist)</h4>
                                <div>
                                    <div class="relative">
                                        <div class="dropdown relative">
                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                                    rounded dark:text-slate-400">
                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                </span>
                                            </button>
                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                            <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                    dark:hover:text-white">
                                                Last 28 Days</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                    dark:hover:text-white">
                                                Last Month</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                    dark:hover:text-white">
                                                Last Year</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-6">
                                <div>
                                    <ul class="divide-y divide-slate-100 dark:divide-slate-700 -mx-6 -mb-6">
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                            <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                        <input type="checkbox" class="hidden" name="tasklist">
                                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                                transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex bar-active">
                                                <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                    Products 23, value $2,302, type "restock", shipment Ace
                                                </span>
                                                <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                    <button type="button" class="transition duration-150 hover:text-danger-500">
                                                        <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                            <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                        <input type="checkbox" class="hidden" name="tasklist">
                                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                                transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex bar-active">
                                                <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                    Amet minim mollit no...
                                                </span>
                                                <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                    <button type="button" class="transition duration-150 hover:text-danger-500">
                                                        <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                            <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                        <input type="checkbox" class="hidden" name="tasklist">
                                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                                transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex bar-active">
                                                <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                    Products 23, value $2,302, type "restock", shipment Ace
                                                </span>
                                                <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                    <button type="button" class="transition duration-150 hover:text-danger-500">
                                                        <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                        <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="tasklist">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                            transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex bar-active">
                                            <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                Amet minim mollit no...
                                            </span>
                                            <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                <button type="button" class="transition duration-150 hover:text-danger-500">
                                                    <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                </button>
                                            </span>
                                        </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                        <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="tasklist">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                            transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex bar-active">
                                            <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                Amet minim mollit no...
                                            </span>
                                            <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                <button type="button" class="transition duration-150 hover:text-danger-500">
                                                    <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                </button>
                                            </span>
                                        </div>
                                        </li>
                                        <li class="flex items-center px-6 space-x-4 py-4 rtl:space-x-reverse">
                                        <div class="flex-none flex space-x-2 items-center rtl:space-x-reverse">
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="tasklist">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                                            transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex bar-active">
                                            <span class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                Amet minim mollit no...
                                            </span>
                                            <span class="flex-none space-x-2 text-base text-secondary-500 rtl:space-x-reverse">
                                                <button type="button" class="transition duration-150 hover:text-danger-500">
                                                    <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                                                </button>
                                            </span>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Best Selling Products</h4>
                        <div>
                          <!-- BEGIN: Card Dropdown -->
                          <div class="relative">
                            <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                            rounded dark:text-slate-400">
                                        <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                    </span>
                                </button>
                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                        shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                    <li>
                                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                dark:hover:text-white">
                                        Last 28 Days</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                dark:hover:text-white">
                                        Last Month</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                dark:hover:text-white">
                                        Last Year</a>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-6">
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
                          <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded text-center">
                            <div class="h-12 w-12 rounded-full mb-4 mx-auto">
                              <img src=images/all-img/p-1.png alt="" class="w-full h-full rounded-full">
                            </div>
                            <span class="text-slate-500 dark:text-slate-300 text-sm mb-1 block font-normal">
                                $150.00
                            </span>
                            <span class="text-slate-600 dark:text-slate-300 text-sm mb-4 block">
                                Car engine oil
                            </span>
                            <a href="#" class="btn btn-secondary dark:bg-slate-800 dark:hover:bg-slate-600 block w-full text-center btn-sm">
                              View More
                            </a>
                          </div>
                          <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded text-center">
                            <div class="h-12 w-12 rounded-full mb-4 mx-auto">
                                <img src=images/all-img/p-2.png alt="" class="w-full h-full rounded-full">
                            </div>
                            <span class="text-slate-500 dark:text-slate-300 text-sm mb-1 block font-normal">
                                $150.00
                            </span>
                            <span class="text-slate-600 dark:text-slate-300 text-sm mb-4 block">
                                Car engine oil
                            </span>
                            <a href="#" class="btn btn-secondary dark:bg-slate-800 dark:hover:bg-slate-600 block w-full text-center btn-sm">
                              View More
                            </a>
                          </div>
                          <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded text-center">
                            <div class="h-12 w-12 rounded-full mb-4 mx-auto">
                              <img src=images/all-img/p-3.png alt="" class="w-full h-full rounded-full">
                            </div>
                            <span class="text-slate-500 dark:text-slate-300 text-sm mb-1 block font-normal">
                                $150.00
                            </span>
                            <span class="text-slate-600 dark:text-slate-300 text-sm mb-4 block">
                                Car engine oil
                            </span>
                            <a href="#" class="btn btn-secondary dark:bg-slate-800 dark:hover:bg-slate-600 block w-full text-center btn-sm">
                              View More
                            </a>
                          </div>
                          <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded text-center">
                            <div class="h-12 w-12 rounded-full mb-4 mx-auto">
                              <img src=images/all-img/p-4.png alt="" class="w-full h-full rounded-full">
                            </div>
                            <span class="text-slate-500 dark:text-slate-300 text-sm mb-1 block font-normal">
                                $150.00
                            </span>
                            <span class="text-slate-600 dark:text-slate-300 text-sm mb-4 block">
                                Car engine oil
                            </span>
                            <a href="#" class="btn btn-secondary dark:bg-slate-800 dark:hover:bg-slate-600 block w-full text-center btn-sm">
                              View More
                            </a>
                          </div>
                          <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded text-center">
                            <div class="h-12 w-12 rounded-full mb-4 mx-auto">
                              <img src=images/all-img/p-5.png alt="" class="w-full h-full rounded-full">
                            </div>
                            <span class="text-slate-500 dark:text-slate-300 text-sm mb-1 block font-normal">
                                $150.00
                            </span>
                            <span class="text-slate-600 dark:text-slate-300 text-sm mb-4 block">
                                Car engine oil
                            </span>
                            <a href="#" class="btn btn-secondary dark:bg-slate-800 dark:hover:bg-slate-600 block w-full text-center btn-sm">
                              View More
                            </a>
                          </div>
                          <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded text-center">
                            <div class="h-12 w-12 rounded-full mb-4 mx-auto">
                              <img src=images/all-img/p-6.png alt="" class="w-full h-full rounded-full">
                            </div>
                            <span class="text-slate-500 dark:text-slate-300 text-sm mb-1 block font-normal">
                                $150.00
                            </span>
                            <span class="text-slate-600 dark:text-slate-300 text-sm mb-4 block">
                                Car engine oil
                            </span>
                            <a href="#" class="btn btn-secondary dark:bg-slate-800 dark:hover:bg-slate-600 block w-full text-center btn-sm">
                              View More
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- TABLE END BEST PRODUCTS -->
                </div>
            </div>
          </div>
    </DefaultTemplate>
</template>
