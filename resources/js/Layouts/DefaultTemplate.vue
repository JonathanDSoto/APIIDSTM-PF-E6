<script setup>
    import { Icon } from '@iconify/vue'
</script>

<template>
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a
    href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->
        <div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
            <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
            <div class="logo-segment">
                <a class="flex items-center" href="/">
                    <img src="images/logo/uabcs-logo.png" style="width: 25%" alt="logo">
                    <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">UABCS</span>
                </a>
            </div>
            <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
                opacity-0"></div>
            <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title">MENU</li>
                    <!-- Charts -->
                    <li class="">
                        <a href="/users" class="navItem">
                            <span class="flex items-center">
                                <Icon class=" nav-icon" icon="heroicons:user-group" />
                                <span>Users</span>
                            </span>
                        </a>
                        <a href="/coupons" class="navItem">
                            <span class="flex items-center">
                                <Icon class=" nav-icon" icon="teenyicons:star-circle-outline" />
                                <span>Coupons</span>
                            </span>
                        </a>
                        <a href="/categories" class="navItem">
                            <span class="flex items-center">
                                <Icon class=" nav-icon" icon="nimbus:accordion" />
                                <span>Categories</span>
                            </span>
                        </a>
                        <a href="/products" class="navItem">
                            <span class="flex items-center">
                                <Icon class=" nav-icon" icon="ep:sell" />
                                <span>Products</span>
                            </span>
                        </a>
                        <a href="/shipment" class="navItem">
                            <span class="flex items-center">
                                <Icon class=" nav-icon" icon="uil:ship" />
                                <span>Shipment</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- Upgrade Your Business Plan Card Start -->
                <!-- Upgrade Your Business Plan Card Start -->
            </div>
        </div>
        <!-- End: Sidebar -->
        <!-- End: Sidebar -->
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <!-- BEGIN: Header -->
                <!-- BEGIN: Header -->
                <div class="z-[9]" id="app_header">
                    <div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                        <div class="flex justify-between items-center h-full">
                            <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                                <a href="/" class="mobile-logo xl:hidden inline-block">
                                    <img src="images/logo/uabcs-logo.png" style="width: 20%" class="black_logo" alt="logo">
                                    <img src="images/logo/uabcs-logo.png" style="width: 20%" class="white_logo" alt="logo">
                                </a>
                                <button
                                    class="smallDeviceMenuController open-sdiebar-controller hidden xl:hidden md:inline-block">
                                    <Icon
                                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3" />
                                </button>
                                <button
                                    class="sidebarOpenButton text-xl text-slate-900 dark:text-white !ml-0 hidden rtl:rotate-180">
                                    <Icon icon="ph:arrow-right-bold" />
                                </button>
                                <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
                                    rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <Icon icon="heroicons-outline:search" />
                                    <span class="xl:inline-block hidden">Search...
                                    </span>
                                </button>
                            </div>
                            <!-- end vertcial -->
                            <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                                <a href="/" class="leading-0">
                                <span class="xl:inline-block hidden">
                                <img src="images/logo/uabcs-logo.png" style="width: 20%" class="black_logo " alt="logo">
                                <img src="images/logo/uabcs-logo.png" style="width: 20%" class="white_logo" alt="logo">
                                </span>
                                    <span class="xl:hidden inline-block">
                                <img src="images/logo/uabcs-logo.png" style="width: 20%" class="black_logo " alt="logo">
                                <img src="images/logo/uabcs-logo.png" style="width: 20%" class="white_logo " alt="logo">
                                </span>
                                </a>
                                <button
                                    class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
                                    <Icon
                                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3" />
                                </button>
                                <button class="items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
                                    rtl:space-x-reverse search-modal inline-flex xl:hidden" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <Icon icon="heroicons-outline:search" />
                                    <span class="xl:inline-block hidden">Search...
                                    </span>
                                </button>
                            </div>
                            <!-- end horizental -->
                            <!-- end top menu -->
                            <!-- TOP RIGHT NAVBAR ICONS -->
                            <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
                                <!-- BEGIN: Profile Dropdown -->
                                <!-- Profile DropDown Area -->
                                <div class="md:block hidden w-full">
                                    <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
                                        inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div
                                            class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                                            <img src="images/all-img/user.png" alt="user"
                                                 class="block w-full h-full object-cover rounded-full">
                                        </div>
                                        <span
                                            class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">Albert Flores</span>
                                        <svg
                                            class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]"
                                            aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
                                        overflow-hidden">
                                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                            <li>
                                                <a href="index.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:user"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="chat.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:chat"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Chat</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:mail"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Email</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="todo.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:clipboard-check"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Todo</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="settings.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:cog"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pricing.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:credit-card"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Price</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="signin-one.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <Icon icon="heroicons-outline:login"
                                                                  class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1" />
                                                    <span class="font-Inter">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END: Header -->
                                <button class="smallDeviceMenuController md:hidden block leading-0">
                                    <Icon class="cursor-pointer text-slate-900 dark:text-white text-2xl"
                                                  icon="heroicons-outline:menu-alt-3" />
                                </button>
                                <!-- end mobile menu -->
                            </div>
                            <!-- end nav tools -->
                        </div>
                    </div>
                </div>
                <!-- BEGIN: Search Modal -->
                <div
                    class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto inset-0 bg-slate-900/40 backdrop-filter backdrop-blur-sm backdrop-brightness-10"
                    id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
                        <div
                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
                            <form>
                                <div class="relative">
                                    <button
                                        class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full text-xl dark:text-slate-300 flex items-center justify-center">
                                        <Icon icon="heroicons-solid:search" />
                                    </button>
                                    <input type="text" class="form-control !py-[14px] !pl-10" placeholder="Search"
                                           autofocus>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Search Modal -->
                <!-- END: Header -->
                <!-- END: Header -->
                
                <!-- MAIN CONTENT CONTAINER -->
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                     id="content_wrapper">
                    <div class="page-content">
                        <div id="content_layout">
                            <slot/> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            <!-- BEGIN: Footer For Desktop and tab -->
            <footer id="footer">
                <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                        <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                            COPYRIGHT ©
                            <span id="thisYear"></span>
                            DashCode, All rights Reserved
                        </div>
                        <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                            Hand-crafted &amp; Made by
                            <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                                Codeshaper
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END: Footer For Desktop and tab -->
            <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
                backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
                <a href="chat.html">
                    <div>
                        <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                            text-slate-900 ">
                            <Icon icon="heroicons-outline:mail" />
                            <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                                justify-center rounded-full text-white z-[99]">
                            10
                            </span>
                        </span>
                        <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                        Messages
                        </span>
                    </div>
                </a>
                <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
                    h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                    <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                        <img src="images/users/user-1.jpg" alt=""
                             class="w-full h-full rounded-full border-2 border-slate-100">
                    </div>
                </a>
                <a href="#">
                    <div>
                        <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                            text-slate-900">
                            <Icon icon="heroicons-outline:bell" />
                            <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                                justify-center rounded-full text-white z-[99]">
                            2
                            </span>
                        </span>
                        <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                        Notifications
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </main>
</template>
