<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";
     export default {
         components: {
             DefaultTemplate,
         },
        data() {
         return {
             userData: {
                 firstName: '',
                 lastName: '',
                 age: '',
                 email: '',
                 password: '',
                 address: '',
                 creationDate: '',
                 phoneNumber: '',
                 userType: '',
                 country: '',
                 state: '',
                 city: '',
             },
         };
     },
     mounted() {
        if (this.$page.props.flag) {
                const userIdToModify = this.$page.props.id;

                let usersArray = JSON.parse(localStorage.getItem('usersArray')) || [];
                const userToUpdate = usersArray.find(user => user.userID === parseInt(userIdToModify));

                if (userToUpdate) {
                // Inicializar userData con los datos encontrados en el localStorage
                this.userData = { ...userToUpdate };
            }
        }
    },
     methods: {
        isLetter(e) {
            let char = String.fromCharCode(e.keyCode);
            if(/^[A-Za-z]+$/.test(char)) return true;
            else e.preventDefault(); 
        },
         submitForm() {
            let userID = JSON.parse(localStorage.getItem('userID')) || 0;
            let usersArray = JSON.parse(localStorage.getItem('usersArray')) || [];

            if(!this.$page.props.flag){
                let newUserData = {
                    userID: userID,
                    firstName: this.userData.firstName,
                    lastName: this.userData.lastName,
                    age: this.userData.age,
                    email: this.userData.email,
                    password: this.userData.password,
                    address: this.userData.address,
                    creationDate: this.userData.creationDate,
                    phoneNumber: this.userData.phoneNumber,
                    userType: this.userData.userType,
                    country: this.userData.country,
                    state: this.userData.state,
                    city: this.userData.city
                }
                usersArray.push(newUserData);
                localStorage.setItem('usersArray', JSON.stringify(usersArray));
                userID++;
                localStorage.setItem('userID',JSON.stringify(userID));
            }else{
                const userIdToModify = this.$page.props.id;
                let newUserData = {
                    userID: parseInt(userIdToModify),
                    firstName: this.userData.firstName,
                    lastName: this.userData.lastName,
                    age: this.userData.age,
                    email: this.userData.email,
                    password: this.userData.password,
                    address: this.userData.address,
                    creationDate: this.userData.creationDate,
                    phoneNumber: this.userData.phoneNumber,
                    userType: this.userData.userType,
                    country: this.userData.country,
                    state: this.userData.state,
                    city: this.userData.city
                }
                const index = usersArray.findIndex(user => user.userID === parseInt(userIdToModify));
                if (index !== -1) {
                    usersArray[index] = newUserData;
                    localStorage.setItem('usersArray', JSON.stringify(usersArray));
                }
            }
            window.location.href = '/users';
         },
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
                                <label for="readonly" class="form-label">Creation Date</label>
                                <input id="readonly" type="date" class="form-control" v-model="userData.creationDate" placeholder="12/23/2023" :disabled=$page.props.flag required>
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
                            <div class="input-area" v-if=$page.props.flag>
                                <label for="select" class="form-label">Select Option*</label>
                                <select id="select" class="form-control" required>
                                    <option value="User" class="dark:bg-slate-700">User petition</option>
                                    <option value="Moderator" class="dark:bg-slate-700">Moderator Choice</option>
                                    <option value="Administrator" class="dark:bg-slate-700">Administrator Choice</option>
                                </select>
                            </div>
                            <div class="input-area" v-if=!$page.props.flag>
                                <label for="select" class="form-label">Select User Type*</label>
                                <select id="select" class="form-control" v-model="userData.userType" required>
                                    <option value="Administrator" class="dark:bg-slate-700">Administrator</option>
                                    <option value="User" class="dark:bg-slate-700">User</option>
                                    <option value="Moderator" class="dark:bg-slate-700">Moderator</option>
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