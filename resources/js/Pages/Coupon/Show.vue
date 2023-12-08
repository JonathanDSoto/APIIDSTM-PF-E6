<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'
    export default {
        components: {
            DefaultTemplate,
        },    
        props:{
            coupon: Object,
            errors: Object,
            success: null
        },
        methods: {
          deleteConfirmation(userId){
            this.selectedId = userId;
            this.popUpDelete = true;
                console.log("Ey");
                console.log(this.success);
          },
          cancelElimination(){
            this.popUpDelete = false;
          },
          confirmElimination() {
                this.popUpDelete = false;
                router.delete(`/categories/${this.selectedId}`)
                .then(() => {
                })
                .catch(error => {
                    this.errors = error.response.data;
                });
            }
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
                    Coupons
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    Show Coupon
                </li>
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
        <div class="card p-6">
            <div class="grid xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 place-content-center">
                <div class="flex space-x-4 h-full items-center rtl:space-x-reverse">
                    <div class="flex-1">
                        <h4 class="text-xl font-medium mb-2">
                            <span class="block font-light">You are seeing</span>
                            <span class="block">{{ coupon.code }}</span>
                        </h4>
                        <p class="text-sm dark:text-slate-300">With the id: {{ coupon.id }}</p>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Creation Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(coupon.created_at).toISOString().slice(0, 10) }}
                    </div>
                    <div class="ml-auto max-w-[124px]" v-if="coupon.created_by">
                        <div>By: {{ coupon.created_by }}</div>
                    </div>
                    <div class="ml-auto max-w-[124px]" v-else>
                        <div>By: Unknow</div>
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Modification Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(coupon.updated_at).toISOString().slice(0, 10) }}
                    </div>
                    <div class="ml-auto max-w-[124px]" v-if="coupon.updated_by">
                        <div>By: {{ coupon.updated_by }}</div>
                    </div>
                    <div class="ml-auto max-w-[124px]" v-else>
                        <div>By: Unknow</div>
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Start Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(coupon.start_date).toISOString().slice(0, 10) }}
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        End Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(coupon.end_date).toISOString().slice(0, 10) }}
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Description
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ coupon.description }}
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Discount
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ coupon.discount }}
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Is Active
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        <p v-if="coupon.is_active == 1">True</p>
                        <p v-else>False</p>
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Max uses
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ coupon.max_uses }}
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Uses
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ coupon.uses }}
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>