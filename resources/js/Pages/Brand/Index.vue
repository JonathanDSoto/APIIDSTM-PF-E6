<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'

export default {
  name: 'Index',
  components: {DefaultTemplate},
  props: {
    brands: {
      type: Array,
      required: true
    }
  },
}
</script>

<template>
  <DefaultTemplate>
    <div class="md:flex justify-between items-center">
      <!-- BEGIN: Breadcrumb -->
      <div class="mb-5">
        <ul class="m-0 p-0 list-none flex gap-2">
          <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter">
            <a href="index.html" class="flex gap-2">
              <Icon icon="heroicons-outline:home"/>
              <Icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"/>
            </a>
          </li>
          <li class="inline-block relative text-sm text-primary-500 font-Inter ">
            Brands
          </li>
        </ul>
      </div>
      <!-- END: Breadcrumb -->

      <!-- BEGIN: Action Area -->
      <div>
        <Link href="/brands/create" class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
        <span class="flex items-center">
          <Icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"/>
          <span>Add Brand</span>
        </span>
        </Link>
      </div>
      <!-- END: Action Area -->
    </div>

    <!-- BEGIN: Card Table  -->
    <!--    <div class="grid grid-cols-1 gap-5">-->
    <div class="card mt-6">
      <header class=" card-header noborder">
        <h4 class="card-title">Brands</h4>
      </header>
      <div class="card-body px-6 pb-6">
        <div class="overflow-x-auto -mx-6">
          <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                <thead class=" border-t border-slate-100 dark:border-slate-800">
                <tr>
                  <th scope="col" class="table-th">
                    ID
                  </th>
                  <th scope="col" class="table-th">
                    Name
                  </th>
                  <th scope="col" class="table-th">
                    Website
                  </th>
                  <th scope="col" class="table-th">
                    Phone Number
                  </th>
                  <th scope="col" class="table-th">
                    Action
                  </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                <tr v-for="brand in brands">
                  <td class="table-td">{{ brand.id }}</td>
                  <td class="table-td">{{ brand.name }}</td>
                  <td class="table-td table-td-website">{{ brand.websites[0].website }}</td>
                  <td class="table-td" v-if="brand.phone_numbers[0]">{{ brand.phone_numbers[0].phone_number }}</td>
                  <td class="table-td" v-else>-</td>
                  <td class="table-td">
                    <div class="dropstart relative">
                      <button class="inline-flex justify-center items-center" type="button" id="tableDropdownMenuButton"
                              data-bs-toggle="dropdown" aria-expanded="false">
                        <Icon class="text-xl ltr:ml-2 rtl:mr-2" icon="heroicons-outline:dots-vertical"/>
                      </button>
                      <ul class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                        <li>
                          <a href="project-details.html"
                             class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300  last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize  rtl:space-x-reverse">
                            <Icon icon="heroicons-outline:eye"/>
                            <span>View</span></a>
                        </li>
                        <li>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#editModal"
                             class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                            <Icon icon="clarity:note-edit-line"/>
                            <span>Edit</span></a>
                        </li>
                        <li>
                          <a href="#"
                             class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                            <Icon icon="fluent:delete-28-regular"/>
                            <span>Delete</span></a>
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
