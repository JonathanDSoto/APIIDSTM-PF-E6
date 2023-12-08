<script>
    import DefaultTemplate from "@/layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'
    export default {
        data () {
            return {
                popUpDelete: false,
                selectedId: 0,
                selectedElement: null
            }
        },
        components: {DefaultTemplate},
        props:{
          users: {
                type: Array,
                required: true
            }
        },
        methods: {
          deleteConfirmation(userId){
            this.selectedId = userId;
            this.popUpDelete = true;
                console.log("Ey");
                console.log(this.success);
          },
          cancelElimination(){
            this.popUpDelete = false;
          },
          confirmElimination() {
                this.popUpDelete = false;
                router.delete(`/users/${this.selectedId}`)
                .then(() => {
                    const index = this.categoriesArray.findIndex(category => category.id === this.selectedId);
                    if (index !== -1) {
                        this.categoriesArray.splice(index, 1); 
                    }
                })
                .catch(error => {
                    this.errors = error.response.data;
                });
            }
        }
    }
</script>

<template>
    <div class="relative rounded-lg shadow " id="deletepopup" v-if=popUpDelete style="border-radius: 20px; background-color: white;
        justify-content: center; align-items: center; position: fixed; z-index: 10; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-danger-500">
            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                Delete Element
            </h3>
            <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                    dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal" @click="cancelElimination">
                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                            11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="p-6 space-y-4">
        <p class="text-base dark:text-black text-black leading-6">
            Are you sure to delete this element?
        </p>
        <p class="text-base text-slate-600 leading-6">
            Once the element gets deleted, there is no possible way to recover <br> the data without calling an administrator.<br><br>
            Please confirm the element you choose is the one listed below:
            <ul>
                <li><strong>ID: {{ selectedElement.id }}</strong></li>
                <li><strong>Name: {{ selectedElement.name }}</strong></li>
                <li><strong>Creation Date: {{ selectedElement.created_at }}</strong></li>
            </ul>
        </p>
        </div>
            <div class="flex items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
            <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-danger-500"  @click="confirmElimination">Accept</button>
            <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-green-500"  @click="cancelElimination">Cancel</button>
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
    <a href="/users/create">
        <button class="btn inline-flex justify-center btn-primary w-full">Create new User</button>
    </a>
    <br>
    <div class="alert alert-success" v-if="$page.props.flash.success">
        <div class="flex items-start space-x-3 rtl:space-x-reverse">
            <div class="flex-1">
                {{$page.props.flash.success}}
            </div>
        </div>
    </div>
    <div v-if="$page.props.flash.success">
        <br>
    </div>
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
                                  Name
                                </th>

                                <th scope="col" class=" table-th ">
                                  Email
                                </th>

                                <th scope="col" class=" table-th ">
                                   Role
                                </th>

                                <th scope="col" class=" table-th ">
                                  Action
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                              <tr v-for="(user, index) in users" :key="index">
                                <td class="table-td">{{ user.userID }}</td>
                                <td class="table-td">
                                    <span class="flex">
                                    <!-- <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                        Espacio para la imagen de usuario
                                        <img src="images/all-img/customer_1.png" alt="1" class="object-cover w-full h-full rounded-full">
                                    </span> -->
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ user.name }}</span>
                                    </span>
                                </td>
                                <td class="table-td ">{{ user.email }}</td>
                                <td class="table-td ">
                                    <div>
                                      {{ user.role }}
                                    </div>
                                </td>
                                <td class="table-td">
                                    <div class="dropstart relative">
                                      <button class="inline-flex justify-center items-center" type="button" id="tableDropdownMenuButton"
                                              data-bs-toggle="dropdown" aria-expanded="false">
                                          <Icon class="text-xl ltr:ml-2 rtl:mr-2" icon="heroicons-outline:dots-vertical"/>
                                      </button>
                                      <ul class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                          <li>
                                          <Link :href="`/users/${user.id}`"
                                              class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300  last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize  rtl:space-x-reverse">
                                              <Icon icon="heroicons-outline:eye"/>
                                              <span>View</span>
                                          </Link>
                                          </li>
                                          <li>
                                          <Link :href="`/users/${user.id}/edit`" 
                                              class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                                              <Icon icon="clarity:note-edit-line"/>
                                              <span>Edit</span>
                                          </Link>
                                          </li>
                                          <li>
                                          <button @click="deleteConfirmation(user.id)"
                                              class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                                              <Icon icon="fluent:delete-28-regular"/>
                                              <span>Delete</span></button>
                                          </li>
                                      </ul>
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
