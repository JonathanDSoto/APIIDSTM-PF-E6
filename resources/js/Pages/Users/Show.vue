<script>
    import DefaultTemplate from "@/layouts/DefaultTemplate.vue";
    export default {
        components: {
            DefaultTemplate,
        },
        props:{
            user: Object,
            errors: Object,
            success: null
        },
    }
</script>

<template>
    <DefaultTemplate>
        <div class="mb-5">
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                <a href="/">
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                Users
                <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                Detailed Information</li>
            </ul>
        </div>
        <div class="alert alert-success" v-if="$page.props.flash.success">
            <div class="flex items-start space-x-3 rtl:space-x-reverse">
                <div class="flex-1">
                    {{$page.props.flash.success}}
                </div>
            </div>
        </div>
        <div v-if="$page.props.flash.success">
            <br>
        </div>
        <div class="space-y-5 profile-page">
                <div class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0
                space-y-6 justify-between items-end relative z-[1]">
                  <div class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg"></div>
                  <div class="profile-box flex-none md:text-start text-center">
                    <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                      <div class="flex-none">
                        <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                          <img src="/images/users/user-1.jpg" alt="" class="w-full h-full object-cover rounded-full">
                          <a href="https://dashcode-html.codeshaper.tech/profile-setting" class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center
                                    justify-center md:top-[140px] top-[100px]">
                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                          </a>
                        </div>
                      </div>
                      <div class="flex-1">
                        <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                            {{ user.firstName }}
                        </div>
                        <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                            {{ user.lastName }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end profile box -->
                  <div class="profile-info-500 md:flex md:text-start text-center flex-1 max-w-[516px] md:space-y-0 space-y-4">
                    <div class="flex-1">
                      <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        {{ user.userTotalShipments }}
                      </div>
                      <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Purchases
                      </div>
                    </div>
                    <!-- end single -->
                    <div class="flex-1">
                      <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        {{ user.userCartItems }}
                      </div>
                      <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Cart Items
                      </div>
                    </div>
                    <!-- end single -->
                    <div class="flex-1">
                      <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        {{ user.userWishlistItems }}
                      </div>
                      <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Wishlist Items
                      </div>
                    </div>
                    <!-- end single -->
                  </div>
                  <!-- profile info-500 -->
                </div>
                <div class="grid grid-cols-12 gap-6">
                  <div class="lg:col-span-4 col-span-12">
                    <div class="card h-full">
                      <header class="card-header">
                        <h4 class="card-title">Info</h4>
                      </header>
                      <div class="card-body p-6">
                        <ul class="list space-y-8">
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="heroicons:envelope"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                EMAIL
                              </div>
                              <a href="mailto:someone@example.com" class="text-base text-slate-600 dark:text-slate-50">
                                {{ user.email }}
                              </a>
                            </div>
                          </li>
                          <!-- end single list -->
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="heroicons:phone-arrow-up-right"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                PHONE
                              </div>
                              <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                {{ user.phoneNumber }}
                              </a>
                            </div>
                          </li>
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="lets-icons:date-today"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                Creation Date
                              </div>
                              <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                {{ user.creationDate }}
                              </a>
                            </div>
                          </li>
                          <!-- end single list -->
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="heroicons:map"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                LOCATION
                              </div>
                              <div class="text-base text-slate-600 dark:text-slate-50">
                                {{ user.country }}, {{ user.state }}, {{ user.city }}
                              </div>
                            </div>
                          </li>
                          <!-- end single list -->
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- START OF THE TABLES -->
                  <div class="lg:col-span-8 col-span-12">
                    <div class="card ">
                        <div class="card-body">
                          <div class="card">
                            <header class=" card-header noborder">
                              <h4 class="card-title">Purchases
                              </h4>
                            </header>
                            <div class="card-body px-6 pb-6">
                              <div class="overflow-x-auto -mx-6">
                                <div class="inline-block min-w-full align-middle">
                                  <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                      <thead class=" border-t border-slate-100 dark:border-slate-800">
                                        <tr>
                                          <th scope="col" class=" table-th ">
                                            ID
                                          </th>
                                          <th scope="col" class=" table-th ">
                                            Total
                                          </th>
                                          <th scope="col" class=" table-th ">
                                            Products
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <tr v-for="(item, index) in user.userPurchases" :key="index">
                                          <td class="table-td">{{ item[0] }}</td>
                                          <td class="table-td">{{ item[1] }}</td>
                                          <td class="table-td ">
                                            <li v-for="(item, index) in item[2]" :key="index">
                                              {{ item }}
                                            </li>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <br>
                    <div class="card-body">
                          <div class="card">
                            <header class=" card-header noborder">
                              <h4 class="card-title">Payment History
                              </h4>
                            </header>
                            <div class="card-body px-6 pb-6">
                              <div class="overflow-x-auto -mx-6">
                                <div class="inline-block min-w-full align-middle">
                                  <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                      <thead class=" border-t border-slate-100 dark:border-slate-800">
                                        <tr>
                                          <th scope="col" class=" table-th ">
                                            ID
                                          </th>
                                          <th scope="col" class=" table-th ">
                                            Date
                                          </th>
                                          <th scope="col" class=" table-th ">
                                            Method
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <tr v-for="(item, index) in user.userPayment" :key="index">
                                          <td class="table-td">{{ item[0] }}</td>
                                          <td class="table-td">{{ item[1] }}</td>
                                          <td class="table-td ">{{ item[2] }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
    </DefaultTemplate>
</template>