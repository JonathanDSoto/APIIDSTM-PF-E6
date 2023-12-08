<script>
import DefaultTemplate from '@/layouts/DefaultTemplate.vue'
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
        },
        isLetter(e) {
            let char = String.fromCharCode(e.keyCode);
            if (/^[A-Za-z\s]+$/.test(char)) return true;
            else e.preventDefault();
        },
    }
}
</script>

<template>
    <DefaultTemplate>
        <div class="mb-5">
            <ul class="m-0 p-0 list-none flex gap-2">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter">
                    <a href="/" class="flex gap-2">
                        <Icon icon="heroicons-outline:home"></Icon>
                        <Icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"/>
                    </a>
                </li>
                <li class="flex gap-2 relative text-sm text-primary-500 font-Inter">
                    Categories
                    <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></Icon>
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
                            <div class="card-title text-slate-900 dark:text-white">Create Category</div>
                        </div>
                    </header>
                    <div class="card-text h-full ">
                        <form class="space-y-4" @submit.prevent="submit">
                            <div class="input-area relative pl-28">
                                <label for="nameInput" class="inline-inputLabel">Name*</label>
                                <input type="text" class="form-control" placeholder="Sabritas" v-model="form.name" @keypress="isLetter($event)" required>
                                <p v-if="errors.name" style="color: red;">{{ errors.name }}</p>
                            </div>
                            <button type="submit" class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>
