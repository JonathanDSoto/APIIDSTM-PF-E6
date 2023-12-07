<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Create',
  components: { DefaultTemplate },
  data () {
    return {
      form: {
        name: null,
        lastName: null,
        email: null,
        password: null,
        phone: null,
        country: null,
        city: null,
        state: null,
        logo: null,
        postalCode: null,
        addressOne: null,
        addressTwo: null,
        addressThree: null,
      }
    }
  },
  methods: {
    submit () {
      router.post('/customers', this.form)
    },
    onFileChange (e) {
      this.form.logo = e.target.files[0]
    }
  }
}
</script>

<template>
  <DefaultTemplate>
    <div class="mb-5">
      <ul class="m-0 list-none p-0">
        <li class="text-primary-500 font-Inter relative top-[3px] inline-block text-base ">
          <a href="/">
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:home" />
            </span>
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:chevron-right" class="relative text-sm text-slate-500 rtl:rotate-180" />
            </span>
          </a>
        </li>
        <li class="text-primary-500 font-Inter relative inline-block text-sm ">
            Customer
          <span class="inline-block align-[0px]">
            <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
          </span>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Add Customer
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Add Customer</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
              <div class="flex justify-evenly gap-4">
                <div class="w-full flex flex-col gap-4">
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Name</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.name">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Last Name</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.lastName">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Picture</label>
                    <input type="file" class="form-control" placeholder="" v-on:change="onFileChange">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Email</label>
                    <input type="email" class="form-control" placeholder="" v-model="form.email">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Password</label>
                    <input type="password" class="form-control" placeholder="" v-model="form.password" required>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Phone</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.phone">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Postal Code</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.postalCode">
                  </div>
                </div>
                <div class="w-full flex flex-col gap-4">
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Country</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.country">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">State</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.state">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">City</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.city">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 1</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.addressOne">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 2</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.addressTwo">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 3</label>
                    <input type="number" class="form-control" placeholder="" v-model="form.addressThree">
                  </div>
                </div>
              </div>
              <button class="btn btn-dark ml-28 inline-flex justify-center">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <br>
    </div>
  </DefaultTemplate>
</template>
