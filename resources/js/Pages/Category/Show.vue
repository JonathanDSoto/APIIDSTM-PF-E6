<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    export default {
        data() {
          return {
                name: this.$page.props.category,
                creationDate: this.$page.props.category.created_at,
                creator: this.$page.props.category.creator,
          };
        },
        components: {
            DefaultTemplate,
        },    
        props:{
            errors: Object,
            success: null
        },
        methods: {
        }
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
                    Categories
                </li>
            </ul>
        </div>
        <br>
        <br>
        <div>
            <div>
                <div>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Activity</h4>
                      <div>...</div>
                    </div>
                    <div class="card-body p-6">
                      <!-- BEGIN: Activity Card -->
                        <ul class="relative ltr:pl-2 rtl:pr-2">
                                <li class="ltr:border-l-2 rtl:border-r-2 border-slate-100 dark:border-slate-700 pb-4 
                                    last:border-none ltr:pl-[22px] rtl:pr-[22px] relative before:absolute ltr:before:left-[-8px] 
                                    rtl:before:-right-2 before:top-[0px] before:rounded-full before:w-4 before:h-4
                                    before:bg-slate-900 dark:before:bg-slate-600 before:leading-[2px] 
                                    before:content-[url('../images/all-img/ck.svg')]">
                                        <div class="p-[10px] relative top-[-20px]">
                                            <h2 class="text-sm font-medium dark:text-slate-400-900 mb-1 text-slate-600">
                                                Changed
                                            </h2>
                                            <p class="text-xs capitalize dark:text-slate-400">
                                                12-01-2002
                                            </p>
                                        </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                        <div id="content_layout">
                            <div class="xl:col-span-4 lg:col-span-5 col-span-12">
                                <div class="card h-full">
                                    <div class="card-header">
                                        <h4 class="card-title">Category Name</h4>
                                        <div>...</div>
                                    </div>
                                    <div class="card-body p-6">
                                        <ul class="divide-y divide-slate-100 dark:divide-slate-700">
                                            <li class="block py-[8px]">
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                    <div class="flex-none">
                                                        <div class="h-8 w-8">
                                                            <img src=/images/icon/scr-1.svg alt="" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <span class="block text-slate-600 text-sm dark:text-slate-300">
                                                            Screenshot.jpg
                                                        </span>
                                                        <span class="block font-normal text-xs text-slate-500 mt-1">
                                                            06 June 2021 / 155MB
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex-none">
                                                    <button type="button" class="text-xs text-slate-900 dark:text-white">
                                                        Download
                                                    </button>
                                                </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- END: FIles Card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>