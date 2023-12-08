<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'

    export default {
        components: {
            DefaultTemplate,
        },
        props:{
            errors: Object,
        },
        data() {
            return {
                form:{
                    code: '',
                    is_active: '',
                    max_uses: '',
                    discount: '',
                    end_date: '',
                    start_date: '',
                    description: '',
                }
            };
        },
        methods: {
            submit(){
                this.form.code = this.form.code.toString();
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
                            <label for="largeInput" class="inline-inputLabel">Code*</label>
                            <input type="number" class="form-control" placeholder="" v-model="form.code" required>
                            <p v-if="errors.code" style="color: red;">{{ errors.code }}</p>
                        </div>
                        
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Start Date*</label>
                            <div class="form-control">
                                <div>
                                    <input type="date" class="" placeholder="" v-model="form.start_date" required>
                                    <p v-if="errors.start_date" style="color: red;">{{ errors.start_date }}</p>
                                </div>
                            </div>
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
                                    <p v-if="errors.end_date" style="color: red;">{{ errors.end_date }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Max Uses*</label>
                            <input type="number" class="form-control" placeholder="" v-model="form.max_uses" required>
                            <p v-if="errors.max_uses" style="color: red;">{{ errors.max_uses }}</p>
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Discount*</label>
                            <input type="number" class="form-control" placeholder="" v-model="form.discount" title="Ingresa un número válido" required>
                            <p v-if="errors.discount" style="color: red;">{{ errors.discount }}</p>
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Description</label>
                            <input type="text" class="form-control" placeholder="" v-model="form.description">
                            <p v-if="errors.description" style="color: red;">{{ errors.description }}</p>
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="booleanInput" class="inline-inputLabel">Is Active*</label>
                            <select class="form-control" v-model="form.is_active" required>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                            <p v-if="errors.is_active" style="color: red;">{{ errors.is_active }}</p>
                        </div>

                        <button class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </DefaultTemplate>
</template>