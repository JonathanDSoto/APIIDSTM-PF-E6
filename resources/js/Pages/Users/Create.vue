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
            form: {
                firstName: '',
                lastName: '',
                age: '',
                email: '',
                password: '',
                address: '',
                phoneNumber: '',
                userType: '',
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
            router.post('/categories',this.form)
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
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white" v-if=$page.props.flag>
                    Modify User Information</li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white" v-else>
                    Create User</li>
                </ul>
            </div>
            <div>
                <div class="card">
                    <div class="card-body flex flex-col p-6">
                        <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white" v-if=$page.props.flag>Change User Information</div>
                                <div class="card-title text-slate-900 dark:text-white" v-else>Create New User</div>
                            </div>
                        </header>
                        <div class="card-text h-full space-y-4">
                            <div class="input-area">
                                <label for="name" class="form-label">First Name</label>
                                <input id="name" type="text" class="form-control" v-model="form.firstName" placeholder="Guadalupe Victoria" v-on:keypress="isLetter($event)" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Last Name</label>
                                <input id="name" type="text" class="form-control" v-model="form.lastName" placeholder="Rodriguez Barajas" v-on:keypress="isLetter($event)" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Age</label>
                                <input id="name" type="number" class="form-control" v-model="form.age" placeholder="23" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Email</label>
                                <input id="name" type="email" class="form-control" v-model="form.email" placeholder="rovique44@hotmail.com" required>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Address</label>
                                <input id="name" type="text" class="form-control" v-model="form.address" placeholder="Biznaga 108 Indeco Col. el cajoncito" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">Phone Number</label>
                                <input id="readonly" type="number" class="form-control" v-model="form.phoneNumber" placeholder="6122309430" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">Password</label>
                                <input id="readonly" type="password" class="form-control" v-model="form.password" placeholder="1a3d55d3a1" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">Country</label>
                                <input id="readonly" type="text" class="form-control" v-model="form.country" placeholder="Mexico" v-on:keypress="isLetter($event)" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">State</label>
                                <input id="readonly" type="text" class="form-control" v-model="form.state" placeholder="Baja California Sur" v-on:keypress="isLetter($event)" required>
                            </div>
                            <div class="input-area">
                                <label for="readonly" class="form-label">City</label>
                                <input id="readonly" type="text" class="form-control" v-model="form.city" placeholder="La Paz" v-on:keypress="isLetter($event)" required>
                            </div>
                            <div class="input-area">
                                <label for="select" class="form-label">Select User Type*</label>
                                <select id="select" class="form-control" v-model="form.userType" required>
                                    <option value="Administrator" class="dark:bg-slate-700">Administrator</option>
                                    <option value="User" class="dark:bg-slate-700">User</option>
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
        <br>
        <div class="xl:col-span-5 col-span-12 lg:col-span-7">
                <div class="card h-full">
                    <div class="card-header">
                        <h4 class="card-title">Rules to Create a User</h4>
                    </div>
                    <div class="card-body p-6">
                        <div>
                          <ul>
                            <li><strong>Name and Last Name:</strong> Collect the user's full name.</li>
                            <li><strong>Age:</strong> Gather the user's age or date of birth.</li>
                            <li><strong>Email:</strong> Request a unique and valid email address for user identification.</li>
                            <li><strong>Address:</strong> Capture the complete address information of the user.</li>
                            <li><strong>Phone Number:</strong> Collect a valid contact number for the user.</li>
                            <li><strong>Password:</strong> Set a secure password for user authentication.</li>
                            <li><strong>Country, State, City:</strong> Record the user's location details for geographical reference.</li>
                            <li><strong>Role (User or Administrator):</strong> Define the user's role in the system (user or administrator).</li>
                          </ul>
                          <br>
                          <p><strong>Warning:</strong> Adhering to these rules is crucial to ensure accurate user information and secure system access. Failure to follow these guidelines may result in incorrect user identification, compromised security, or improper system permissions.</p>
                        </div>
                    </div>
                </div>
            </div>
    </DefaultTemplate>
</template>