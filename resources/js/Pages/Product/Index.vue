<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Index',
  components: { DefaultTemplate },
  data () {
    return {
      popUpDelete: false,
      selectedId: 0,
      selectedElement: null
    }
  },
  props: {
    success: null,
    products: {
      type: Array,
      required: true
    }
  },
  methods: {
    deleteConfirmation (product) {
      this.selectedElement = product
      this.selectedId = product.id
      this.popUpDelete = true
    },
    cancelElimination () {
      this.popUpDelete = false
    },
    confirmElimination () {
      this.popUpDelete = false
      router.delete(`/products/${this.selectedId}`)
    }
  }
}
</script>

<template>
  <div class="relative rounded-lg shadow " id="deletepopup" v-if=popUpDelete style="border-radius: 20px; background-color: white;
      justify-content: center; align-items: center; position: fixed; z-index: 10; top: 50%; left: 50%; transform: translate(-50%,-50%);">
      <div class="bg-danger-500 flex items-center justify-between rounded-t border-b p-5 dark:border-slate-600">
          <h3 class="text-base font-medium capitalize text-white dark:text-white">
              Delete Element
          </h3>
          <button type="button" class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-slate-400 hover:text-slate-900
                                  dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal" @click="cancelElimination">
              <svg aria-hidden="true" class="h-5 w-5" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                          11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Close modal</span>
          </button>
      </div>
      <div class="space-y-4 p-6">
      <p class="text-base leading-6 text-black dark:text-black">
          Are you sure to delete this element?
      </p>
      <p class="text-base leading-6 text-slate-600">
          Once the element gets deleted, there is no possible way to recover <br> the data without calling an administrator.<br><br>
          Please confirm the element you choose is the one listed below:
          <ul>
              <li><strong>ID: {{ selectedElement.id }}</strong></li>
              <li><strong>Name: {{ selectedElement.name }}</strong></li>
              <li><strong>Creation Date: {{ selectedElement.created_at }}</strong></li>
          </ul>
      </p>
      </div>
          <div class="flex items-center space-x-2 rounded-b border-t border-slate-200 p-6 dark:border-slate-600">
          <button data-bs-dismiss="modal" class="btn bg-danger-500 inline-flex justify-center text-white"  @click="confirmElimination">Accept</button>
          <button data-bs-dismiss="modal" class="btn inline-flex justify-center bg-green-500 text-white"  @click="cancelElimination">Cancel</button>
      </div>
  </div>
  <DefaultTemplate>
    <div class="items-center justify-between md:flex">
      <!-- BEGIN: Breadcrumb -->
      <div class="mb-5">
        <ul class="m-0 list-none p-0">
          <li class="text-primary-500 font-Inter relative top-[3px] inline-block text-base">
          <a href="index.html">
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:home" />
            </span>
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:chevron-right" class="relative text-sm text-slate-500 rtl:rotate-180"/>
            </span>
          </a>
          </li>
          <li class="text-primary-500 font-Inter relative inline-block text-sm ">
            Products
          </li>
        </ul>
      </div>
      <!-- END: Breadcrumb -->

      <!-- BEGIN: Action Area -->
      <div>
        <Link href="/products/create" class="btn btn-dark m-1 inline-flex justify-center dark:bg-slate-700 dark:text-slate-300 ">
        <span class="flex items-center">
          <Icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"/>
          <span>Add Product</span>
        </span>
        </Link>
      </div>
      <!-- END: Action Area -->
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
    <!-- BEGIN: Card Table  -->
    <!--    <div class="grid grid-cols-1 gap-5">-->
    <div class="card mt-6">
      <header class=" card-header noborder">
        <h4 class="card-title">Products</h4>
      </header>
      <div class="card-body px-6 pb-6">
        <div class="overflow-x-auto">
          <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full table-fixed divide-y divide-slate-100 dark:divide-slate-700">
                <thead class=" border-t border-slate-100 dark:border-slate-800">
                <tr>
                  <th scope="col" class="table-th">
                    ID
                  </th>
                  <th scope="col" class="table-th">
                    Brand
                  </th>
                  <th scope="col" class="table-th">
                    Image
                  </th>
                  <th scope="col" class="table-th">
                    Name
                  </th>
                  <th scope="col" class="table-th">
                    SKU
                  </th>
                  <th scope="col" class="table-th">
                    Stock
                  </th>
                  <th scope="col" class="table-th">
                    Price
                  </th>
                  <th scope="col" class="table-th">
                    Action
                  </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white dark:divide-slate-700 dark:bg-slate-800">
                <tr v-for="product in products" v-bind:key="product.id">
                  <td class="table-td">{{ product.id }}</td>
                  <td class="table-td">{{ product.brand.name }}</td>
                  <td class="table-td" v-if="product.images[0]">
                    <img class="w-10 rounded-full object-cover" style="height: 42px; width: 42px" :src="'/images/' + product.images[0].file_name" alt="">
                  </td>
                  <td class="table-td" v-else>Undefined</td>
                  <td class="table-td">{{ product.name }}</td>
                  <td class="table-td whitespace-nowrap uppercase">{{ product.sku }}</td>
                  <td class="table-td table-td-website whitespace-nowrap">{{ product.inventories.reduce((sum, current) => sum + Number(current.stock), 0) }}</td>
                  <td class="table-td table-td-website whitespace-nowrap">{{ product.price }}</td>
                  <td class="table-td">
                    <div class="dropstart relative">
                      <button class="inline-flex items-center justify-center" type="button" id="tableDropdownMenuButton"
                              data-bs-toggle="dropdown" aria-expanded="false">
                        <Icon class="text-xl ltr:ml-2 rtl:mr-2" icon="heroicons-outline:dots-vertical"/>
                      </button>
                      <ul class="dropdown-menu absolute z-[2] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-sm text-slate-700 shadow dark:bg-slate-700 dark:text-white">
                        <li>
                          <Link :href="'/products/' + product.id"
                             class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize  first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600  dark:hover:bg-opacity-70">
                            <Icon icon="heroicons-outline:eye"/>
                            <span>View</span>
                          </Link>
                        </li>
                        <li>
                          <Link :href="'/products/' + product.id + '/edit'"
                             class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                            <Icon icon="clarity:note-edit-line"/>
                            <span>Edit</span>
                          </Link>
                        </li>
                        <li>
                          <Button @click="deleteConfirmation(product)"
                             class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                            <Icon icon="fluent:delete-28-regular"/>
                            <span>Delete</span>
                          </Button>
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
    <!--    </div>-->
    <!-- END: Card Table  -->
  </DefaultTemplate>
</template>

<style scoped>
  .table-td-website {
    text-transform: lowercase;
  }
</style>
