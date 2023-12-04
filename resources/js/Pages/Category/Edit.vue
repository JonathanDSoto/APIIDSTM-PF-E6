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
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                    <a href="/">
                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                    Categories
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
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
            <div class="xl:col-span-5 col-span-12 lg:col-span-7">
                <div class="card h-full">
                    <div class="card-header">
                        <h4 class="card-title">Rules to Edit a Category</h4>
                    </div>
                    <div class="card-body p-6">
                        <div>
                            <p class="text-sm text-slate-600 dark:text-slate-300">
                                Category names must not contain any numbers.
                            </p>
                            <br/>
                            <ul class="flex flex-col gap-3">
                                <li><strong>Editable Name:</strong> Allow modification of the category name.</li>
                                <li><strong>New Name Validation:</strong> Apply similar constraints as category creation rules.</li>
                                <li><strong>Change History:</strong> Record who and when the modification was made.</li>
                                <li><strong>Impact Check:</strong> Verify how the modification will affect other areas of the system.</li>
                                <li><strong>Change Notification:</strong> Inform users or stakeholders about the modification.</li>
                                <li><strong>Authorization and Permissions:</strong> Limit modification to authorized users.</li>
                                <li><strong>Update Consistency:</strong> Update connections related to the category.</li>
                                <li><strong>Validity Testing:</strong> Ensure the modified category still serves its original purpose.</li>
                            </ul>
                            <br>
                            <p>Adhering to these rules is crucial to maintain system integrity and consistency. Failure to follow these guidelines may lead to confusion among users, inconsistencies in data, and disruptions in system functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>
