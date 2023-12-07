<script>
import DefaultTemplate from '../../layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'
import { defineComponent } from 'vue'

export default {
    components: {
        DefaultTemplate
    },
    props:{
        errors: Object,
    },
    data() {
        return{
            category: this.$page.props.category,
            form:{
                name: this.$page.props.category.name,
                id: this.$page.props.category.id,
            }
        }
    },
    methods: {
    submit() {
        const data = {
            name: this.form.name,
            description: this.form.description,
        };

        router.put(`/categories/${this.form.id}`, data)
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
            <ul class="m-0 p-0 list-none flex gap-2">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                    <a href="/" class="flex gap-2">
                        <Icon icon="heroicons-outline:home"></Icon>
                        <Icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></Icon>
                    </a>
                </li>
                <li class="relative text-sm text-primary-500 font-Inter flex gap-2">
                    Categories
                    <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></Icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    Modify Category
                </li>
            </ul>
        </div>
        <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Modify Category</div>
                        </div>
                    </header>
                    <div class="card-text h-full ">
                        <form class="space-y-4" @submit.prevent="submit">
                            <ul v-for="(error, key) in errors" :key="key">
                                <li>
                                    {{ error }}
                                </li>
                            </ul>
                            <div class="input-area relative pl-28">
                                <label for="largeInput" class="inline-inputLabel">Category Name</label>
                                <input type="text" class="form-control" placeholder="" v-model="form.name" pattern="[a-zA-Z]*" required>
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
