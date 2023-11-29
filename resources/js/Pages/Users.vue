<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";
    export default {
        data() {
          return {
            selectedId: 0,
            popUpDelete: false,
            administratorsArray: [],
            regularUsersArray: [],
            moderatorsArray: []
          };
        },
        components: {
            DefaultTemplate,
        },
        mounted() {
          const storedUsers = localStorage.getItem('usersArray');
          if (storedUsers) {
            const users = JSON.parse(storedUsers);
            
            const administrators = users.filter(user => user.userType === 'Administrator');
            const regularUsers = users.filter(user => user.userType === 'User');
            const moderators = users.filter(user => user.userType === 'Moderator');
            
            // Store these categorized arrays in separate variables or properties
            this.administratorsArray = administrators;
            this.regularUsersArray = regularUsers;
            this.moderatorsArray = moderators;
          }
        },
        methods: {
          deleteConfirmation(userId){
            this.selectedId = userId;
            this.popUpDelete = true;
          },
          cancelElimination(){
            this.popUpDelete = false;
          },
          confirmElimination() {
            const userIdToDelete = parseInt(this.selectedId);
            
            let usersArray = JSON.parse(localStorage.getItem('usersArray')) || [];
            
            // Encontrar el índice del usuario que coincida con el ID proporcionado
            const indexToDelete = usersArray.findIndex(user => user.userID === userIdToDelete);
            
            if (indexToDelete !== -1) {
              // Eliminar el usuario del array usando splice()
              usersArray.splice(indexToDelete, 1);
              
              // Actualizar el array en el localStorage
              localStorage.setItem('usersArray', JSON.stringify(usersArray));
              
              // Luego puedes redirigir a otra página, mostrar un mensaje, etc.
              // Dependiendo de tus necesidades
            }
            window.location.reload();
          }
        }
    }
</script>

<template>
    <div id="deletepopup" v-if=popUpDelete style="width: 400px; height: 150px; background-color: #f1f5f9; padding: 20px; border-radius: 20px; display: flex;
      justify-content: center; align-items: center; position: fixed; z-index: 10; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <div style="padding: 2px; display: flex; justify-content: center; flex-direction: column; align-items: center; gap: 20px">
          <p>
            Are you sure you want to delete this element?
          </p>
          <div style="display: flex; gap: 20px;">
            <button style="background-color: #50C793; padding: 5px; border-radius: 10px; color: white; font-weight: bold;" @click="confirmElimination">
              Confirm
            </button>
            <button style="background-color: #F1595C; padding: 5px; border-radius: 10px; color: white; font-weight: bold;" @click="cancelElimination">
              Cancel
            </button>
          </div>
        </div>
    </div>
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
          Users
        </li>
      </ul>
    </div>
    <br>
        <a href="/users/create-user">
            <button class="btn inline-flex justify-center btn-primary w-full">Create new User</button>
        </a>
        <br><br>
    <div >
      <div>
        <!-- ROLLO -->
        <div >
          <div >
            <div id="content_layout">
              <div class=" space-y-5">
                <div class="card">
                  <header class=" card-header noborder">
                    <h4 class="card-title">Clients</h4>
                  </header>
                  <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                      <span class=" col-span-8  hidden"></span>
                      <span class="  col-span-4 hidden"></span>
                      <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                          <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                              <tr>
                                <th scope="col" class=" table-th ">
                                  Id
                                </th>

                                <th scope="col" class=" table-th ">
                                  First Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Last Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Country
                                </th>

                                <th scope="col" class=" table-th ">
                                   City
                                </th>

                                <th scope="col" class=" table-th ">
                                  Action
                                </th>

                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                              <tr v-for="(user, index) in regularUsersArray" :key="index">
                                <td class="table-td">{{ user.userID }}</td>
                                <td class="table-td">
                                    <span class="flex">
                                    <!-- <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                        Espacio para la imagen de usuario
                                        <img src="images/all-img/customer_1.png" alt="1" class="object-cover w-full h-full rounded-full">
                                    </span> -->
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ user.firstName }}</span>
                                    </span>
                                </td>
                                <td class="table-td ">{{ user.lastName }}</td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.country }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.city }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                  <div class="flex space-x-3 rtl:space-x-reverse">
                                    <!-- PASS THE USER ID -->
                                    <a :href="`/users/detailed-information/${user.userID}`">
                                        <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                        </button>
                                    </a>
                                    <a :href="`/users/modify-information/${user.userID}`">
                                        <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                        </button>
                                    </a>
                                    <button class="action-btn" type="button" @click="deleteConfirmation(user.userID)">
                                      <iconify-icon icon="heroicons:trash"></iconify-icon>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="card">
              <header class=" card-header noborder">
                <h4 class="card-title">Moderators</h4>
              </header>
              <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                      <span class=" col-span-8  hidden"></span>
                      <span class="  col-span-4 hidden"></span>
                      <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                          <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                              <tr>
                                <th scope="col" class=" table-th ">
                                  Id
                                </th>

                                <th scope="col" class=" table-th ">
                                  First Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Last Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Country
                                </th>

                                <th scope="col" class=" table-th ">
                                   City
                                </th>

                                <th scope="col" class=" table-th ">
                                  Action
                                </th>

                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                              <tr v-for="(user, index) in moderatorsArray" :key="index">
                                <td class="table-td">{{ user.userID }}</td>
                                <td class="table-td">
                                    <span class="flex">
                                    <!-- <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                        Espacio para la imagen de usuario
                                        <img src="images/all-img/customer_1.png" alt="1" class="object-cover w-full h-full rounded-full">
                                    </span> -->
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ user.firstName }}</span>
                                    </span>
                                </td>
                                <td class="table-td ">{{ user.lastName }}</td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.country }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.city }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                  <div class="flex space-x-3 rtl:space-x-reverse">
                                    <!-- PASS THE USER ID -->
                                    <a :href="`/users/detailed-information/${user.userID}`">
                                        <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                        </button>
                                    </a>
                                    <a :href="`/users/modify-information/${user.userID}`">
                                        <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                        </button>
                                    </a>
                                    <button class="action-btn" type="button" @click="deleteConfirmation(user.userID)">
                                      <iconify-icon icon="heroicons:trash"></iconify-icon>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <br>
            <div id="content_layout">
              <div class=" space-y-5">
                <div class="card">
                  <header class=" card-header noborder">
                    <h4 class="card-title">Clients</h4>
                  </header>
                  <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                      <span class=" col-span-8  hidden"></span>
                      <span class="  col-span-4 hidden"></span>
                      <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                          <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                              <tr>
                                <th scope="col" class=" table-th ">
                                  Id
                                </th>

                                <th scope="col" class=" table-th ">
                                  First Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Last Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Country
                                </th>

                                <th scope="col" class=" table-th ">
                                   City
                                </th>

                                <th scope="col" class=" table-th ">
                                  Action
                                </th>

                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                              <tr v-for="(user, index) in administratorsArray" :key="index">
                                <td class="table-td">{{ user.userID }}</td>
                                <td class="table-td">
                                    <span class="flex">
                                    <!-- <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                        Espacio para la imagen de usuario
                                        <img src="images/all-img/customer_1.png" alt="1" class="object-cover w-full h-full rounded-full">
                                    </span> -->
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ user.firstName }}</span>
                                    </span>
                                </td>
                                <td class="table-td ">{{ user.lastName }}</td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.country }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.city }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                  <div class="flex space-x-3 rtl:space-x-reverse">
                                    <!-- PASS THE USER ID -->
                                    <a :href="`/users/detailed-information/${user.userID}`">
                                        <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                        </button>
                                    </a>
                                    <a :href="`/users/modify-information/${user.userID}`">
                                        <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                        </button>
                                    </a>
                                    <button class="action-btn" type="button" @click="deleteConfirmation(user.userID)">
                                      <iconify-icon icon="heroicons:trash"></iconify-icon>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </DefaultTemplate>
</template>
