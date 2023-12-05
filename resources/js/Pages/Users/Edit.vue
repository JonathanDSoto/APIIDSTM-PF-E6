<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";
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
            user: this.$page.props.user,
            form: {
                firstName: this.$page.props.user.name,
                lastName: this.$page.props.user.lastName,
                age: this.$page.props.user.age,
                email: this.$page.props.user.email,
                password: this.$page.props.user.password,
                address: this.$page.props.user.address,
                phoneNumber: this.$page.props.user.phoneNumber,
                userType: this.$page.props.user.role,
            },
         };
     },
     methods: {
        isLetter(e) {
            let char = String.fromCharCode(e.keyCode);
            if(/^[A-Za-z]+$/.test(char)) return true;
            else e.preventDefault(); 
        },
        submit(){
            router.put('/categories',this.form)
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
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    Modify User Information</li>
                </ul>
            </div>
            <div>
                <div class="card">
                    <form class="card-body flex flex-col p-6">
                        <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Change User Information</div>
                            </div>
                        </header>
                        <ul v-for="(error, key) in errors" :key="key">
                            <li>
                                {{ error }}
                            </li>
                        </ul>
                        <div class="card-text h-full space-y-4">
                            <div class="input-area">
                                <label for="name" class="form-label">First Name</label>
                                <input id="name" type="text" class="form-control" v-model="userData.firstName" placeholder="Guadalupe Victoria" v-on:keypress="isLetter($event)" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Last Name</label>
                                <input id="name" type="text" class="form-control" v-model="userData.lastName" placeholder="Rodriguez Barajas" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Age</label>
                                <input id="name" type="number" class="form-control" v-model="userData.age" placeholder="23" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Email</label>
                                <input id="name" type="email" class="form-control" v-model="userData.email" placeholder="rovique44@hotmail.com" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Address</label>
                                <input id="name" type="text" class="form-control" v-model="userData.address" placeholder="Biznaga 108 Indeco Col. el cajoncito" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">Phone Number</label>
                                <input id="readonly" type="text" class="form-control" v-model="userData.phoneNumber" placeholder="6122309430" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">Password</label>
                                <input id="readonly" type="text" class="form-control" v-model="userData.password" placeholder="1a3d55d3a1" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">Country</label>
                                <input id="readonly" type="text" class="form-control" v-model="userData.country" placeholder="Mexico" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">State</label>
                                <input id="readonly" type="text" class="form-control" v-model="userData.state" placeholder="Baja California Sur" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">City</label>
                                <input id="readonly" type="text" class="form-control" v-model="userData.city" placeholder="La Paz" required>
                            </div>
                            <div class="input-area">
                                <label for="select" class="form-label">Select User Type*</label>
                                <select id="select" class="form-control" v-model="userData.userType" required>
                                    <option value="Administrator" class="dark:bg-slate-700">Administrator</option>
                                    <option value="User" class="dark:bg-slate-700">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-group-example btn-group p-2">
                            <button type="submit" class="btn inline-flex justify-center btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </form>
    </DefaultTemplate>
</template>