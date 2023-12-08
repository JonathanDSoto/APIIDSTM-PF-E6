<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'

    export default {
        components: {
            DefaultTemplate,
        },
        props: {
            coupon: Object,
            errors: Object
        },
        data() {
            return {
                form:{
                    code: this.coupon.code,
                    is_active: this.coupon.is_active,
                    uses: this.coupon.uses,
                    description: this.coupon.description,
                    max_uses: this.coupon.max_uses,
                    discount: this.coupon.discount,
                    start_date: this.coupon.start_date,
                    end_date: this.coupon.end_date,
                }
            };
        },
        methods: {
            submit(){
                this.form.code = this.form.code.toString();
                router.put(`/coupons/${this.coupon.id}`, this.form)
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
            Modify Coupons Information</li>
        </ul>
    </div>
    <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white" >Modify Coupon</div>
                        </div>
                    </header>
                <div class="card-text h-full ">
                    <form class="space-y-4"  @submit.prevent="submit">
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.code">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.code }}
                                    </div>
                                </div>
                            </div>
                            <label for="largeInput" class="inline-inputLabel">Code*</label>
                            <input type="number" class="form-control" placeholder="" v-model="form.code" required>
                        </div>
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.end_date">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.end_date }}
                                    </div>
                                </div>
                            </div>
                            <label for="largeInput" class="inline-inputLabel">End Date*</label>
                            <div class="form-control">
                                <div>
                                    <input type="date" class="" placeholder="" v-model="form.end_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.uses">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.uses }}
                                    </div>
                                </div>
                            </div>
                            <label for="largeInput" class="inline-inputLabel">Uses*</label>
                            <input type="number" class="form-control" placeholder=""  v-model="form.uses" required>
                        </div>
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.max_uses">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.email }}
                                    </div>
                                </div>
                            </div>
                            <label for="largeInput" class="inline-inputLabel">Max Uses*</label>
                            <input type="number" class="form-control" placeholder="" v-model="form.max_uses" required>
                        </div>
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.discount">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.discount }}
                                    </div>
                                </div>
                            </div>
                            <label for="largeInput" class="inline-inputLabel">Discount*</label>
                            <input type="number" class="form-control" placeholder="" v-model="form.discount" required>
                        </div>
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.description">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.description }}
                                    </div>
                                </div>
                            </div>
                            <label for="largeInput" class="inline-inputLabel">Description</label>
                            <input type="text" class="form-control" placeholder="" v-model="form.description">
                        </div>
                        <div class="input-area relative pl-28">
                            <div class="alert alert-danger light-mode" v-if="errors.is_active">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                    {{ errors.is_active }}
                                    </div>
                                </div>
                            </div>
                            <label for="booleanInput" class="inline-inputLabel">Is Active*</label>
                            <select class="form-control" v-model="form.is_active" required>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                        <button class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        
        </div>
    </DefaultTemplate>
</template>