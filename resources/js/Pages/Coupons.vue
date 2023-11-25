<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";
    export default {
        data() {
          return {
            popUpDelete: false,
          };
        },
        components: {
            DefaultTemplate,
        },
        methods: {
          deleteConfirmation(){
            this.popUpDelete = true;
          },
          cancelElimination(){
            this.popUpDelete = false;
          },
          confirmElimination(){
            
          },
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
                Coupons
                </li>
            </ul>
        </div>
        <div class="xl:col-span-8 col-span-12">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-3">
                <!-- BEGIN: Group Chart5 -->
                <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Total Coupons
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        3
                    </span>
                </div>
                <div class=" bg-warning-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div class="text-warning-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:chart-pie></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Total Uses
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        191
                    </span>
                </div>
                <div class=" bg-primary-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div class="text-primary-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:clock></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Saved
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        $13,380
                    </span>
                </div>
                <div class=" bg-success-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div class="text-success-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:calculator></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Amount
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        340
                    </span>
                </div>
            </div>
        </div>
        <br>
        <a href="/coupons/create-coupon">
            <button class="btn inline-flex justify-center btn-primary w-full">Create new coupon</button>
        </a>
        <br><br>
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
                                    AMOUNT
                                </th>
                                <th scope="col" class=" table-th ">
                                    USED
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
                            <tr v-for="(user, index) in $page.props.coupons" :key="index">
                                <td class="table-td">{{ user[0] }}</td>
                                    <td class="table-td">
                                        <span class="flex">
                                            <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ user[1] }}</span>
                                        </span>
                                    </td>
                                <td class="table-td ">{{ user[2] }}</td>
                                <td class="table-td ">
                                    <div>
                                        {{ user[3] }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div>
                                        {{ user[4] }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div>
                                        {{ user[5] }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div>
                                        {{ user[6] }}
                                    </div>
                                </td>
                                <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <!-- PASS THE COUPON ID -->
                                        <a href="/coupons/modify-coupons-information/1">
                                            <button class="action-btn" type="button">
                                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                            </button>
                                        </a>
                                        <button class="action-btn" type="button" @click="deleteConfirmation">
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
    </DefaultTemplate>
</template>