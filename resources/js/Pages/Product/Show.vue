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
                      <div class=" h-[248px] w-full mb-6 ">
                        <img src=/images/all-img/post-1.png alt="" class=" w-full h-full  object-cover">
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
                        <a href="#">Product Title</a>
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
                          <li>
                            <a href="#" class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full
                                            hover:bg-slate-900 hover:text-white transition duration-150">
                              <span>Plastic</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full
                                            hover:bg-slate-900 hover:text-white transition duration-150">
                              <span>Paper</span>
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
                          <li>
                            <a href="#" class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full
                                            hover:bg-slate-900 hover:text-white transition duration-150">
                              <span>Plastic</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full
                                            hover:bg-slate-900 hover:text-white transition duration-150">
                              <span>Paper</span>
                            </a>
                          </li>
                        </ul>
                        <ul class="comments mt-6 space-y-4">
                          <li class="block">
                            <div class="flex">
                              <div class="flex-none">
                                <div class="h-[56px] w-[56px] rounded-full ltr:mr-6 rtl:ml-6">
                                  <img src=/images/post/c1.png alt="" class="w-full block h-full object-contain rounded-full">
                                </div>
                              </div>
                              <div class="flex-1">
                                <div class="flex flex-wrap justify-between mb-2">
                                    <span class="text-slate-600 text-base dark:text-slate-300 font-normal">
                                        Marvin McKinney
                                    </span>
                                    <span class="text-sm text-slate-500 dark:text-slate-500 flex space-x-1 rtl:space-x-reverse items-center">
                                        <iconify-icon icon="heroicons:clock" class="text-base"></iconify-icon>
                                        <span>Oct 09, 2021</span>
                                    </span>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-400">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut lab ore et dolore magna
                                  aliqua.
                                </p>
                                <div class="mt-2">
                                  <a href="#" class="flex space-x-2 items-center dark:text-slate-500 text-xs font-medium rtl:space-x-reverse">
                                    <span>Reply</span>
                                    <iconify-icon icon="heroicons:arrow-right-20-solid" class="text-lg"></iconify-icon>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <ul class="comments mt-4 pl-8">
                              <li class="block">
                                <div class="flex">
                                  <div class="flex-none">
                                    <div class="h-[56px] w-[56px] rounded-full ltr:mr-6 rtl:ml-6">
                                      <img src=/images/post/c2.png alt="" class="w-full block h-full object-contain rounded-full">
                                    </div>
                                  </div>
                                  <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                      <span class="text-slate-600 text-base dark:text-slate-300 font-normal">
                                                        Marvin McKinney
                                                    </span>
                                      <span class="text-sm text-slate-500 dark:text-slate-500 flex space-x-1 items-center rtl:space-x-reverse">
                                                        <iconify-icon icon="heroicons:clock" class="text-base"></iconify-icon>
                                                        <span>Oct 09, 2021</span>
                                      </span>
                                    </div>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut lab ore et dolore magna
                                      aliqua.
                                    </p>
                                    <div class="mt-2">
                                      <a href="#" class="flex space-x-2 items-center dark:text-slate-500 text-xs font-medium rtl:space-x-reverse">
                                        <span>Reply</span>
                                        <iconify-icon icon="heroicons:arrow-right-20-solid" class="text-lg"></iconify-icon>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li class="block">
                            <div class="flex">
                              <div class="flex-none">
                                <div class="h-[56px] w-[56px] rounded-full ltr:mr-6 rtl:ml-6">
                                  <img src=/images/post/c3.png alt="" class="w-full block h-full object-contain rounded-full">
                                </div>
                              </div>
                              <div class="flex-1">
                                <div class="flex flex-wrap justify-between mb-2">
                                  <span class="text-slate-600 text-base dark:text-slate-300 font-normal">
                                                Marvin McKinney
                                            </span>
                                  <span class="text-sm text-slate-500 dark:text-slate-500 flex space-x-1 items-center rtl:space-x-reverse">
                                                <iconify-icon icon="heroicons:clock" class="text-base"></iconify-icon>
                                                <span>Oct 09, 2021</span>
                                  </span>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-400">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut lab ore et dolore magna
                                  aliqua.
                                </p>
                                <div class="mt-2">
                                  <a href="#" class="flex space-x-2 items-center dark:text-slate-500 text-xs font-medium rtl:space-x-reverse">
                                    <span>Reply</span>
                                    <iconify-icon icon="heroicons:arrow-right-20-solid" class="text-lg"></iconify-icon>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="post-comments bg-slate-100 dark:bg-slate-900 p-6 rounded-md mt-6">
                          <h4 class="text-lg font-medium text-slate-500 dark:text-slate-100 mb-4">
                            Leave a comment
                          </h4>
                          <form action="#">
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-3">
                              <div class="lg:col-span-2">
                                <div class="fromGroup">
                                  <label for="s" class="form-label">Comment</label>
                                  <textarea class="form-control" rows="5" id="s"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="text-right">
                              <button type="submit" class=" btn btn-dark mt-3 ">submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </DefaultTemplate>
</template>