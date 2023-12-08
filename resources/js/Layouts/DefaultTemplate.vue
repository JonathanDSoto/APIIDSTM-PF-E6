<template>
  <!-- [if IE]>
  <p class="browserupgrade">
  You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a>
  to improve your experience and security.
  </p>
  <![endif] -->

  <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group hidden w-0 xl:block xl:w-[248px]">
      <div id="bodyOverlay"
           class="fixed top-0 z-10 hidden h-screen w-screen bg-slate-900 bg-opacity-50 backdrop-blur-sm"></div>
      <div class="logo-segment">
        <Link class="flex items-center" href="/">
          <img src="/images/logo/logo-c.svg" class="black_logo" alt="logo">
          <img src="/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
          <span class="font-Inter text-xl font-bold text-slate-900 ltr:ml-3 rtl:mr-3 dark:text-white">DashBanana</span>
        </Link>
        <div id="sidebar_type" class="cursor-pointer text-lg text-slate-900 dark:text-white">
          <Icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle" />
          <Icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline" />
        </div>
        <button class="sidebarCloseIcon inline-block text-2xl md:hidden">
          <Icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line" />
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow nav-shadow pointer-events-none absolute top-[80px] z-[1] h-[60px] w-full opacity-0 transition-all
                duration-200"></div>
      <div class="sidebar-menus z-50 h-[calc(100%-80px)] bg-white px-4 py-2 dark:bg-slate-800" id="sidebar_menus">
        <ul class="sidebar-menu">
          <li class="sidebar-menu-title">MENU</li>
          <!-- Charts -->
          <li class="">
            <Link href="/" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:dashboard-rounded"/>
                <span>Dashboard</span>
              </span>
            </Link>
          </li>
          <li class="">
            <Link href="/products" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:local-mall"/>
                <span>Products</span>
              </span>
            </Link>
          </li>
          <li>
            <Link href="/inventory" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:inventory-2"/>
                <span>Inventory</span>
              </span>
            </Link>
          </li>
          <li>
            <Link href="/orders" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:sticky-note-2"/>
                <span>Orders</span>
              </span>
            </Link>
          </li>
          <li class="sidebar-menu-title">SHIPPING</li>
          <li>
            <Link href="/shipments" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:check-box"/>
                <span>Shipments</span>
              </span>
            </Link>
          </li>
          <li>
            <Link href="/shipping-companies" class="navItem whitespace-nowrap">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:apartment-rounded"/>
                <span>Companies</span>
              </span>
            </Link>
          </li>
          <li class="sidebar-menu-title">PEOPLE</li>
          <li>
            <Link href="/users" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:person"/>
                <span>Users</span>
              </span>
            </Link>
          </li>
          <li>
            <Link href="/customers" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:group"/>
                <span>Customers</span>
              </span>
            </Link>
          </li>
          <li class="sidebar-menu-title">OTHER</li>
          <li>
            <Link href="/brands" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:brightness-empty-rounded"/>
                <span>Brands</span>
              </span>
            </Link>
          </li>
          <li>
            <Link href="/categories" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:event-list-rounded"/>
                <span>Categories</span>
              </span>
            </Link>
          </li>
          <li>
            <Link href="/coupons" class="navItem">
              <span class="flex items-center">
                <Icon class=" nav-icon" icon="material-symbols:more-rounded"/>
                <span>Coupons</span>
              </span>
            </Link>
          </li>
        </ul>
      </div>
    </div>
    <!-- End: Sidebar -->

    <div class="flex min-h-screen flex-col justify-between">
      <div>
        <!-- BEGIN: Header -->
        <div class="z-[9]" id="app_header">
          <div class="app-header z-[999] bg-white shadow-sm dark:bg-slate-800 dark:shadow-slate-700">
            <div class="flex h-full items-center justify-between">
              <div class="vertical-box flex items-center space-x-4 rtl:space-x-reverse md:space-x-4">
                <a href="/" class="mobile-logo inline-block xl:hidden">
                  <!--                  <img src="/images/logo/uabcs-logo.png" style="width: 10%" class="black_logo" alt="logo">-->
                  <!--                  <img src="/images/logo/uabcs-logo.png" style="width: 10%" class="white_logo" alt="logo">-->
                  <img src="/images/logo/logo-c.svg" class="black_logo" alt="logo">
                  <img src="/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                </a>
                <button class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
                  <Icon class="relative top-[2px] bg-transparent text-xl leading-none text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"/>
                </button>
                <button class="sidebarOpenButton !ml-0 hidden text-xl text-slate-900 rtl:rotate-180 dark:text-white">
                  <Icon icon="ph:arrow-right-bold"/>
                </button>
              </div>
              <!-- end vertcial -->
              <div class="horizental-box items-center space-x-4 rtl:space-x-reverse">
                <a href="/" class="leading-0">
                  <span class="hidden xl:inline-block">
<!--                    <img src="/images/logo/uabcs-logo.png" style="width: 20%" class="black_logo " alt="logo">-->
                    <!--                    <img src="/images/logo/uabcs-logo.png" style="width: 20%" class="white_logo" alt="logo">-->
          <img src="/images/logo/logo-c.svg" class="black_logo" alt="logo">
          <img src="/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                  </span>
                  <span class="inline-block xl:hidden">
<!--                    <img src="/images/logo/uabcs-logo.png" style="width: 20%" class="black_logo " alt="logo">-->
                    <!--                    <img src="/images/logo/uabcs-logo.png" style="width: 20%" class="white_logo " alt="logo">-->
          <img src="/images/logo/logo-c.svg" class="black_logo" alt="logo">
          <img src="/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                  </span>
                </a>
                <button class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
                  <Icon class="relative top-[2px] bg-transparent text-xl leading-none text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"/>
                </button>
                <button
                    class="search-modal inline-flex items-center space-x-3 px-1 text-lg text-slate-800 focus:shadow-none focus:outline-none rtl:space-x-reverse dark:text-slate-300 xl:hidden xl:text-sm xl:text-slate-400"
                    data-bs-toggle="modal" data-bs-target="#searchModal">
                  <Icon icon="heroicons-outline:search"/>
                  <span class="hidden xl:inline-block">Search...</span>
                </button>
              </div>
              <!-- end horizental -->
              <!-- end top menu -->
              <!-- TOP RIGHT NAVBAR ICONS -->
              <div class="nav-tools leading-0 flex items-center space-x-3 rtl:space-x-reverse lg:space-x-5">
                <!-- BEGIN: Profile Dropdown -->
                <div>
                  <button id="themeMood"
                          class="lg:bg-gray-500-f7 flex h-[28px] w-[28px] cursor-pointer flex-col items-center justify-center rounded-full bg-slate-50 text-[20px] text-slate-900 dark:bg-slate-900 dark:text-white lg:h-[32px] lg:w-[32px] lg:dark:bg-slate-900">
                    <Icon class="hidden text-xl text-slate-800 dark:block dark:text-white" id="moonIcon"
                          icon="line-md:sunny-outline-to-moon-alt-loop-transition" />
                    <Icon class="block text-xl text-slate-800 dark:hidden dark:text-white" id="sunIcon"
                          icon="line-md:moon-filled-to-sunny-filled-loop-transition" />
                  </button>
                </div>
                <!-- Profile DropDown Area -->
                <div class="hidden w-full md:block">
                  <button class="inline-flex items-center rounded-lg text-center text-sm font-medium text-slate-800 focus:outline-none
                                        focus:ring-0 dark:text-white" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false" style="display: flex; gap: 10px;">
                    <div class="h-7 w-7 flex-1 rounded-full ltr:mr-[10px] rtl:ml-[10px] lg:h-8 lg:w-8">
                      <img src="/images/all-img/user.png" alt="user" class="block h-full w-full rounded-full object-cover">
                    </div>
                    <span class="hidden flex-none items-center truncate text-sm font-normal text-slate-600 dark:text-white lg:flex">Albert Flores</span>
                    <svg aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div class="dropdown-menu !top-[23px] z-10 hidden w-44 divide-y divide-slate-100 overflow-hidden rounded-md border bg-white shadow dark:border-slate-700
                                        dark:bg-slate-800">
                    <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                      <li>
                        <a href="/" class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white
                                                    dark:hover:bg-slate-600 dark:hover:text-white">
                          <span class="font-Inter">Dashboard</span>
                        </a>
                      </li>
                      <li>
                        <a href="/users/detailed-information/1" class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white
                                                    dark:hover:bg-slate-600 dark:hover:text-white">
                          <span class="font-Inter">Profile</span>
                        </a>
                      </li>
                      <li>
                        <Link href="/logout" method="post" as="button" type="button" class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white
                                                    dark:hover:bg-slate-600 dark:hover:text-white">Logout
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- END: Header -->
                <button class="smallDeviceMenuController leading-0 block md:hidden">
                  <Icon class="cursor-pointer text-2xl text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"/>
                </button>
                <!-- end mobile menu -->
              </div>
              <!-- end nav tools -->
            </div>
          </div>
        </div>
        <!-- BEGIN: Search Modal -->
        <div
            class="modal fade backdrop-brightness-10 fixed inset-0 hidden h-full w-full overflow-y-auto overflow-x-hidden bg-slate-900/40 outline-none backdrop-blur-sm"
            id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
          <div class="modal-dialog pointer-events-none relative top-1/4 w-auto">
            <div
                class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-slate-900">
              <form>
                <div class="relative">
                  <button
                      class="absolute left-0 top-1/2 flex h-full w-9 -translate-y-1/2 items-center justify-center text-xl dark:text-slate-300">
                    <Icon icon="heroicons-solid:search"/>
                  </button>
                  <input type="text" class="form-control !py-[14px] !pl-10" placeholder="Search" autofocus>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END: Search Modal -->
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
        <div
            class="site-footer bg-white px-6 py-4 text-slate-500 rtl:mr-[248px] dark:bg-slate-800 dark:text-slate-300">
          <div class="grid grid-cols-1 md:grid-cols-2 md:gap-5">
            <div class="text-center text-sm ltr:md:text-start rtl:md:text-right">
              COPYRIGHT ©
              <span id="thisYear"></span>
              MonkeyDevs, All rights Reserved
            </div>
            <div class="text-center text-sm ltr:md:text-right rtl:md:text-end">
              Hand-crafted &amp; Made by
              <a href="#" target="_blank" class="text-primary-500 font-semibold">
                MonkeyDevs
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- END: Footer For Desktop and tab -->
      <div
          class="custom-dropshadow footer-bg bothrefm-0 fixed bottom-0 left-0 z-[9999] flex w-full items-center justify-around bg-white bg-no-repeat px-4 py-[12px] backdrop-blur-[40px] dark:bg-slate-700 md:hidden">
        <a href="chat.html">
          <div>
            <span
                class="relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white ">
              <Icon icon="heroicons-outline:mail"/>
              <span
                  class="lg:hrefp-0 -hrefp-2 absolute right-[5px] z-[99] flex h-4 w-4 flex-col items-center justify-center rounded-full bg-red-500 text-[8px] font-semibold text-white">
                10
              </span>
            </span>
            <span class="block text-[11px] text-slate-600 dark:text-slate-300">
              Messages
            </span>
          </div>
        </a>
        <a href="profile.html"
           class="footer-bg relative z-[-1] -mt-[40px] flex h-[65px] w-[65px] items-center justify-center rounded-full bg-white bg-no-repeat backdrop-blur-[40px] dark:bg-slate-700">
          <div class="hrefp-[0px] custom-dropshadow relative left-[0px] h-[50px] w-[50px] rounded-full">
            <img src="/images/users/user-1.jpg" alt="" class="h-full w-full rounded-full border-2 border-slate-100">
          </div>
        </a>
        <a href="#">
          <div>
            <span
                class=" relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white">
              <Icon icon="heroicons-outline:bell"/>
              <span
                  class="lg:hrefp-0 -hrefp-2 absolute right-[17px] z-[99] flex h-4 w-4 flex-col items-center justify-center rounded-full bg-red-500 text-[8px] font-semibold text-white">
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
<script setup>
</script>
