<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'
    export default {
        data() {
          return {
            popUpDelete: false,
          };
        },
        components: {DefaultTemplate},
        props: {
          coupons: {
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
                router.delete(`/categories/${this.selectedId}`)
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
        <div class="mb-5 flex justify-between">
            <ul class="m-0 p-0 list-none flex gap-2">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                <a href="/" class="flex gap-2">
                    <Icon icon="heroicons-outline:home"></Icon>
                    <Icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></Icon>
                </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                Coupons
                </li>
            </ul>
            <div>
              <Link href="/coupons/create" class="btn btn-dark m-1 inline-flex justify-center dark:bg-slate-700 dark:text-slate-300 ">
                <span class="flex items-center">
                  <Icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"/>
                  <span>Add Coupon</span>
                </span>
              </Link>
            </div>
        </div>
        <div id="content_layout">
            <div class=" space-y-5">
            <div class="card">
                <header class=" card-header noborder">
                <h4 class="card-title">Coupons</h4>
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
                                    CODE
                                </th>
                                <th scope="col" class=" table-th ">
                                    START DATE
                                </th>
                                <th scope="col" class=" table-th ">
                                    FINISHED DATE
                                </th>
                                <th scope="col" class=" table-th ">
                                    DISCOUNT
                                </th>
                                <th scope="col" class=" table-th ">
                                    TIMES USED
                                </th>
                                <th scope="col" class=" table-th ">
                                    MAX USES
                                </th>
                                <th scope="col" class=" table-th ">
                                    IS ACTIVE
                                </th>
                                <th scope="col" class=" table-th ">
                                    DISCOUNT
                                </th>
                                <th scope="col" class=" table-th ">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                          <tr v-for="coupon in coupons">
                              <td class="table-td">{{ coupon.id }}</td>
                              <td class="table-td table-td-website">{{ coupon.code }}</td>
                              <td class="table-td" >{{ new Date(coupon.created_at).toISOString().slice(0, 10) }}</td>
                              <td class="table-td" >{{ new Date(coupon.end_date).toISOString().slice(0, 10) }}</td>
                              <td class="table-td" >{{ coupon.discount }}</td>
                              <td class="table-td" >{{ coupon.uses }}</td>
                              <td class="table-td" >{{ coupon.max_uses }}</td>
                              <td class="table-td" >{{ coupon.is_active }}</td>
                              <td class="table-td">
                                <div class="dropstart relative">
                                  <button class="inline-flex justify-center items-center" type="button" id="tableDropdownMenuButton"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                    <Icon class="text-xl ltr:ml-2 rtl:mr-2" icon="heroicons-outline:dots-vertical"/>
                                  </button>
                                  <ul class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                    <li>
                                      <Link :href="`/coupons/${coupon.id}`"
                                        class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300  last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize  rtl:space-x-reverse">
                                        <Icon icon="heroicons-outline:eye"/>
                                        <span>View</span>
                                      </Link>
                                    </li>
                                    <li>
                                      <Link :href="`/coupons/${coupon.id}/edit`"
                                        class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                                        <Icon icon="clarity:note-edit-line"/>
                                        <span>Edit</span>
                                      
                                      </Link>
                                    </li>
                                    <li>
                                      <button @click="deleteConfirmation(category.id)"
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
    </DefaultTemplate>
</template>