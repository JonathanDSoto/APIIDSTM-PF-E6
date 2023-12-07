<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'

export default {
  name: 'Index',
  components: { DefaultTemplate },
  props: {
    customers: {
      type: Array,
      required: true
    }
  }
}
</script>

<template>
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

    <!-- BEGIN: Card Table  -->
    <!--    <div class="grid grid-cols-1 gap-5">-->
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
                    Name
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
                  <td class="table-td" v-if="customer.logo_file_name">
                    <img class="w-10 rounded-full" :src="'/images/' + customer.logo_file_name" alt="">
                  </td>
                  <td class="table-td" v-else>-</td>
                  <td class="table-td">{{ customer.name}}</td>
                  <td class="table-td table-td-website whitespace-nowrap" v-if="customer.websites[0]">{{ customer.websites[0].website }}</td>
                  <td class="table-td table-td-website" v-else>-</td>
                  <td class="table-td table-td-phone_number whitespace-nowrap" v-if="customer.phone_numbers[0]">{{ customer.phone_numbers[0].phone_number }}</td>
                  <td class="table-td" v-else>-</td>
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
                          <Link href="#"
                             class="flex w-full cursor-pointer items-center space-x-2 border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm capitalize first:rounded-t last:mb-0 last:rounded-b hover:bg-slate-900 hover:text-white rtl:space-x-reverse dark:text-slate-300 dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                            <Icon icon="fluent:delete-28-regular"/>
                            <span>Delete</span>
                          </Link>
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
