<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'

    export default {
        components: {
            DefaultTemplate,
        },
        data() {
            return {
                form:{
                    Code: '',
                    endDate: '',
                    Uses: '',
                    Discount: '',
                }
            };
        },
        methods: {
            submit(){
                router.post('/coupons',this.form)
                .catch(error => {
                    this.errors = error.response.data;
                })
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
            Create Coupon</li>
        </ul>
    </div>
    <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Create Coupon</div>
                        </div>
                    </header>
                <div class="card-text h-full ">
                    <form class="space-y-4" @submit.prevent="submit">
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Code</label>
                            <input type="text" class="form-control" placeholder="" v-model="form.Code">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">End Date</label>
                            <input type="date" class="form-control" placeholder="" v-model="form.endDate">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Uses</label>
                            <input type="text" class="form-control" placeholder="" v-model="form.Uses">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Discount</label>
                            <input type="text" class="form-control" placeholder="" v-model="form.Discount">
                        </div>
                        <button class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </DefaultTemplate>
</template>