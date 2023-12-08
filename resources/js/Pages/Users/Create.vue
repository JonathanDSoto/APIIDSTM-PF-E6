<script>
    import DefaultTemplate from "@/layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3';
     export default {
         components: {
             DefaultTemplate,
         },
         props:{
            errors: Object,
        },
        data() {
         return {
            form: {
                password: '',
                name: '',
                role: '',
                email: '',
            },
         };
     },
     methods: {
        isNumber(e) {
            let char = String.fromCharCode(e.keyCode);
            if (/^[0-9-]+$/.test(char)) return true;
            else e.preventDefault();
        },
        isLetter(e) {
            let char = String.fromCharCode(e.keyCode);
            if (/^[A-Za-z\s]+$/.test(char)) return true;
            else e.preventDefault();
        },
        submit(){
            router.post('/users',this.form)
            .catch(error => {
                this.errors = error.response.data;
            })
        }
     },
 };
</script>

<template>
    <DefaultTemplate>
        <form @submit.prevent="submitForm">
            <div class="mb-5">
                <ul class="m-0 p-0 list-none">
                    <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                        <a href="/">
                            <iconify-icon icon="heroicons-outline:home"/>
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"/>
                        </a>
                    </li>
                    <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                        Users
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"/>
                    </li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">Create User</li>
                </ul>
            </div>
            <div>
                <div class="card">
                    <div class="card-body flex flex-col p-6">
                        <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Create New User</div>
                            </div>
                        </header>
                        
                        <div class="card-text h-full space-y-4">
                            <div class="input-area">
                                <div class="alert alert-danger light-mode" v-if="errors.name">
                                    <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                        <div class="flex-1">
                                        {{ errors.name }}
                                        </div>
                                    </div>
                                </div>
                                <label for="name" class="form-label">Name*</label>
                                <input id="name" type="text" class="form-control" v-model="form.name" @keypress="isLetter($event)" required>
                            </div>
                            
                            <div class="input-area">
                                <div class="alert alert-danger light-mode" v-if="errors.email">
                                    <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                        <div class="flex-1">
                                        {{ errors.email }}
                                        </div>
                                    </div>
                                </div>
                                <label for="name" class="form-label">Email*</label>
                                <input id="name" type="text" class="form-control" v-model="form.email" required>
                            </div>                            
                            <div class="input-area">
                                <div class="alert alert-danger light-mode" v-if="errors.password">
                                    <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                        <div class="flex-1">
                                        {{ errors.password }}
                                        </div>
                                    </div>
                                </div>
                                <label for="name" class="form-label">Password*</label>
                                <input id="name" type="password" class="form-control" v-model="form.password required>
                            </div>
                            <div class="input-area relative pl-28">
                                <div class="alert alert-danger light-mode" v-if="errors.role">
                                    <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                        <div class="flex-1">
                                        {{ errors.role }}
                                        </div>
                                    </div>
                                </div>
                                <label for="booleanInput" class="inline-inputLabel">Role*</label>
                                <select class="form-control" v-model="form.role" required>
                                    <option value="admin">Administrator</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-group-example btn-group p-2">
                            <button type="submit" class="btn inline-flex justify-center btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </DefaultTemplate>
</template>