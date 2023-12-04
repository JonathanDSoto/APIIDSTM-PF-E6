<script>
import DefaultTemplate from '../../layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
    components: {
        DefaultTemplate
    },
    props:{
        errors: Object,
    },
    data() {
        return{
            form:{
                name: '',
            }
        }
    },
    methods: {
        submit(){
            router.post('/categories',this.form)
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
                    Categories
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    Create Category
                </li>
            </ul>
        </div>
        <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white" v-if=$page.props.flag>Modify Category</div>
                            <div class="card-title text-slate-900 dark:text-white" v-else>Create Category</div>
                        </div>
                    </header>
                    <div class="card-text h-full ">
                        <form class="space-y-4" @submit.prevent="submit">
                            <ul v-for="(error, key) in errors" :key="key" class="w-1/2">
                                <li>
                                    <div class="alert alert-danger">
                                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                            <div class="flex-1">
                                                
                                                    {{ error }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="input-area relative pl-28">
                                <label for="largeInput" class="inline-inputLabel">Category Name</label>
                                <input type="text" class="form-control" placeholder="Sabritas" v-model="form.name" pattern="[a-zA-Z]*">
                            </div>
                            <button type="submit" class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="xl:col-span-5 col-span-12 lg:col-span-7">
                <div class="card h-full">
                    <div class="card-header">
                        <h4 class="card-title">Rules to Create a Category</h4>
                    </div>
                    <div class="card-body p-6">
                        <div>
                            <p class="text-sm text-slate-600 dark:text-slate-300">
                                Category names must not contain any numbers.
                            </p>
                            <br/>
                            <ul class="text-sm text-slate-600 dark:text-slate-300 flex flex-col gap-4">
                                <li><b>Clear and Descriptive Name:</b> The category name must be clear and accurately represent the type of items or content it will contain.</li>

                                <li><b>Name Length Limit:</b> Limit the length of the name to ensure readability and easy visualization within the interface.</li>

                                <li><b>Avoid Duplicates:</b> Users cannot create categories with names identical to existing ones to prevent confusion or redundancy.</li>

                                <li><b>Character Restrictions:</b> Implement constraints on the characters allowed in the category name, such as avoiding special symbols or non-alphanumeric characters.</li>

                                <li><b>Review and Approval:</b> Consider implementing a review and approval process by an administrator or authorized user before the category is published or available for use.</li>

                                <li><b>Appropriate Naming Policy:</b> Ensure that category names are appropriate and respectful, avoiding offensive, discriminatory, or inappropriate language.</li>

                                <li><b>Consistency in Naming Convention:</b> Encourage consistency in category naming conventions to facilitate user understanding and searchability.</li>
                            </ul>
                            <br>
                            <p>Adherence to these rules is crucial to maintain uniformity, clarity, and user-friendliness within the system. Consistency in naming conventions ensures a streamlined and organized structure, preventing confusion among users and facilitating efficient navigation. By following these guidelines, users contribute to a cohesive platform experience, enabling smoother interactions and better comprehension of the content. Straying from these rules can lead to disorder, duplication, or misunderstandings, ultimately compromising the functionality and usability of the system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>
