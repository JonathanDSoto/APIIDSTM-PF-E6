<script>
    import DefaultTemplate from "@/layouts/DefaultTemplate.vue";
    export default {
        components: {
            DefaultTemplate,
        },
        props:{
          success: null,
          product: Object,
        }
    }
</script>

<template>
    <DefaultTemplate>
        <div class="flex-1">
                  <div class="grid grid-cols-1 gap-5">
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
                    <div class="card p-6">
                      
                      <div class="space-y-5" style="height: 400px; overflow-y: auto;">
                        <div style="display: flex; flex-direction: column;">
                          <img v-for="image in product.images" class="h-full" style="height: 100px; flex: 0 0 auto;" :src="'/images/' + image.file_name">
                        </div>
                      </div>

                      <div class="flex justify-between mb-4">
                        <a href="#" class="inline-flex leading-5 text-slate-500 dark:text-slate-500 text-sm font-normal">
                          <span>
                                <iconify-icon icon="heroicons-outline:calendar" class="text-slate-400 dark:text-slate-500 ltr:mr-2 rtl:ml-2 text-lg"></iconify-icon>
                            </span>
                          <p>Creation Date</p>
                          <p>-11/29/2023</p>
                        </a>
                        <div class="flex space-x-4 rtl:space-x-reverse">
                          <a href="#">
                            <span class="inline-flex leading-5 text-slate-500 dark:text-slate-500 text-sm font-normal">
                                    <iconify-icon icon="heroicons-outline:chat" class="text-slate-400 dark:text-slate-500 ltr:mr-2 rtl:ml-2 text-lg"></iconify-icon> 3
                                </span>
                          </a>
                          <a href="#">
                            <span class="inline-flex leading-5 text-slate-500 dark:text-slate-500 text-sm font-normal">
                                    <iconify-icon icon="heroicons-outline:share" class="text-slate-400 dark:text-slate-500 ltr:mr-2 rtl:ml-2 text-lg"></iconify-icon> 4
                                </span>
                          </a>
                        </div>
                      </div>
                      <h5 class="card-title text-slate-900">
                        <p>{{ product.name }}</p>
                      </h5>
                      <div class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100
                            dark:border-slate-700 pb-6">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,
                          consectetur adipiscing eli.
                        </p>
                        <p class="font-medium text-base">
                          More Product Description
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla mco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehende rit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla mco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehende rit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam.
                        </p>
                      </div>
                      <div class="mt-6">
                        <ul class="lg:flex items-center lg:space-x-3 lg:rtl:space-x-reverse mt-4 border-b border-slate-100 dark:border-slate-700 pb-6">
                          <li class="dark:text-slate-300">Categories</li>
                          <li>
                            <a href="#" class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full
                                            hover:bg-slate-900 hover:text-white transition duration-150">
                              <span>Food</span>
                            </a>
                          </li>
                        </ul>
                        <ul class="lg:flex items-center lg:space-x-3 lg:rtl:space-x-reverse mt-4 border-b border-slate-100 dark:border-slate-700 pb-6">
                          <li class="dark:text-slate-300">Raw Material</li>
                          <li>
                            <a href="#" class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full
                                            hover:bg-slate-900 hover:text-white transition duration-150">
                              <span>Food</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
    </DefaultTemplate>
</template>