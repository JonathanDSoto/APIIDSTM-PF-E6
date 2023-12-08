<script>
import DefaultTemplate from '../../layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'
import UIAvatarSvg from 'ui-avatar-svg'

const avatar = new UIAvatarSvg()

export default {
  data () {
    return {
      popUpDelete: false,
      selectedId: 0,
      selectedElement: null
    }
  },
  components: { DefaultTemplate },
  props: {
    customers: {
      type: Array,
      required: true
    }
  },
  methods: {
    deleteConfirmation (customer) {
      this.selectedElement = customer
      this.selectedId = this.selectedElement.id
      this.popUpDelete = true
    },
    cancelElimination () {
      this.popUpDelete = false
    },
    confirmElimination () {
      this.popUpDelete = false
      router.delete(`/customers/${this.selectedId}`)
    },
    numberFormat (numero) {
      const numeroLimpio = numero.replace(/\D/g, '')
      return numeroLimpio.replace(/^(\d{3})(\d{3})(\d+)/, '$1-$2-$3')
    },
    getAvatar (name, lastname) {
      return avatar
        .text(name[0] + lastname[0])
        .size(40)
        .bgColor('#b8c0cc')
        .textColor('#342f2f')
        .generate()
    }
  }
}
</script>

<template>
  <div class="relative rounded-lg bg-white shadow dark:bg-slate-700" id="deletepopup" v-if=popUpDelete style="background-color: #f1f5f9; border-radius: 20px;
          justify-content: center; align-items: center; position: fixed; z-index: 10; top: 50%; left: 50%; transform: translate(-50%,-50%);">
          <!-- Modal header -->
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
      <!-- Modal body -->
      <div class="space-y-4 p-6">
      <h6 class="text-base leading-6 text-slate-900 dark:text-white">
          Are you sure to delete this element?
      </h6>
      <p class="text-base leading-6 text-slate-600 dark:text-slate-400">
          Once the element gets deleted, there is no possible way to recover <br> the data without calling an administrator.<br><br>
          Please confirm the element you choose is the one listed below:
          <ul>
          <li><strong>ID: {{ selectedElement.id }}</strong></li>
          <li><strong>Name: {{ selectedElement.name }}</strong></li>
          <li><strong>Creation Date: {{ selectedElement.created_at }}</strong></li>
          </ul>
      </p>
      </div>
      <!-- Modal footer -->
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
            Customers
          </li>
        </ul>
      </div>
      <!-- END: Breadcrumb -->

      <!-- BEGIN: Action Area -->
      <div>
        <Link href="/customers/create" class="btn btn-dark m-1 inline-flex justify-center dark:bg-slate-700 dark:text-slate-300 ">
        <span class="flex items-center">
          <Icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"/>
          <span>Add Customer</span>
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
    <div class="card mt-6">
      <header class=" card-header noborder">
        <h4 class="card-title">Customer</h4>
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
                    Photo
                  </th>
                  <th scope="col" class="table-th">
                    Name
                  </th>
                  <th scope="col" class="table-th">
                    Last Name
                  </th>
                  <th scope="col" class="table-th">
                    Email
                  </th>
                  <th scope="col" class="table-th">
                    Phone
                  </th>
                  <th scope="col" class="table-th">
                    Action
                  </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white dark:divide-slate-700 dark:bg-slate-800">
                <tr v-for="customer in customers" v-bind:key="customer.id">
                  <td class="table-td">{{ customer.id }}</td>
                  <td class="table-td" v-if="customer.profile_photo_file_name">
                    <img class="w-10 rounded-full" :src="'/images/' + customer.profile_photo_file_name" alt="">
                  </td>
                  <td class="table-td" v-else>
                    <div v-html="this.getAvatar(customer.name, customer.last_name)"></div>
                  </td>
                  <td class="table-td">{{ customer.name}}</td>
                  <td class="table-td ">{{ customer.last_name }}</td>
                  <td class="table-td table-td-website whitespace-nowrap">{{ customer.email }}</td>
                  <td class="table-td table-td-phone_number whitespace-nowrap" v-if="customer.phone_number">{{ numberFormat(customer.phone_number) }}</td>
                  <td class="table-td table-td-phone_number whitespace-nowrap" v-else>Undefined</td>
                  <td class="table-td">
                    <div class="dropstart relative">
                      <button class="inline-flex items-center justify-center" type="button" id="tableDropdownMenuButton"
                              data-bs-toggle="dropdown" aria-expanded="false">
                        <Icon class="text-xl ltr:ml-2 rtl:mr-2" icon="heroicons-outline:dots-vertical"/>
                      </button>
                      <ul class="dropdown-menu absolute z-[2] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-sm text-slate-700 shadow dark:bg-slate-700 dark:text-white">
                        <li>
                          <Link :href="'/customers/' + customer.id"
                             class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize  first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600  dark:hover:bg-opacity-70">
                            <Icon icon="heroicons-outline:eye"/>
                            <span>View</span>
                          </Link>
                        </li>
                        <li>
                          <Link :href="'/customers/' + customer.id + '/edit'"
                             class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                            <Icon icon="clarity:note-edit-line"/>
                            <span>Edit</span>
                          </Link>
                        </li>
                        <li>
                            <button @click="deleteConfirmation(customer)"
                                class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                                <Icon icon="fluent:delete-28-regular"/>
                                <span>Delete</span>
                            </button>
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
