<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'
    export default {
        data() {
          return {
            popUpDelete: false,
            selectedId: 0,
            selectedElement: null
          };
        },
        components: {
            DefaultTemplate,
        },
        methods: {
            deleteConfirmation (brand) {
            this.selectedElement = brand
            this.selectedId = brand.id
            this.popUpDelete = true
            },
            cancelElimination () {
            this.popUpDelete = false
            },
            confirmElimination () {
            this.popUpDelete = false
            router.delete(`/brands/${this.selectedId}`)
            }
        },
        props: {
            orders: {
            type: Array,
            required: true
            }
        },
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
        <div class="mb-5 flex justify-between">
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                <a href="/">
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                    Order
                </li>
            </ul>
            <div>
            <Link href="/orders/create" class="btn btn-dark m-1 inline-flex justify-center dark:bg-slate-700 dark:text-slate-300 ">
                <span class="flex items-center">
                    <Icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"/>
                    <span>Add Order</span>
                </span>
            </Link>
        </div>
        </div>
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
        <div>
            <div>
                <div>
                    <div>
                        <div id="content_layout">
                            <div class=" space-y-5">
                                <div class="card">
                                    <header class=" card-header noborder">
                                        <h4 class="card-title">Clients Orders</h4>
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
                                                                    Customer ID
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Orden Number
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Total Price
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Taxes
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Status
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                            <tr v-for="(user, index) in $page.props.products" :key="index">
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
                                                                    <div>
                                                                    {{ user[7] }}
                                                                    </div>
                                                                </td>

                                                                <td class="table-td ">
                                                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                                                        <!-- PASS THE USER ID -->
                                                                        <!-- <a href="/raw/detailed-raw-information/1">
                                                                            <button class="action-btn" type="button">
                                                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                                            </button>
                                                                        </a> -->
                                                                        <a href="/order/modify-order-information/1">
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
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>
