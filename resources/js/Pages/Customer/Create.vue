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
          last_name: null,
          email: null,
          password: null,
          phone_number: null,
          country: null,
          city: null,
          state: null,
          profile_photo: null,
          zip_code: null,
          address_line_1: null,
          address_line_2: null,
          address_line_3: null,
        }
      }
    },
    props: {
        errors: Object
    },
    methods: {
      submit () {
        router.post('/customers', this.form)
      },
      onFileChange (e) {
        this.form.profile_photo = e.target.files[0]
      },
      isNumber(e) {
        let char = String.fromCharCode(e.keyCode);
        if (/^[0-9-]+$/.test(char)) return true;
        else e.preventDefault();
      },
      isLetter(e) {
        let char = String.fromCharCode(e.keyCode);
        if (/^[A-Za-z\s]+$/.test(char)) return true;
        else e.preventDefault();
      },
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
              <div style="display: flex; gap: 10px; height: 50px;">
                  <div  v-for="(error, key) in errors" :key="key" class="alert-danger"
                  style="padding: 5px; border-radius: 10px;" >
                      <div class="flex items-start">
                          <div>
                                  {{ error }}
                          </div>
                      </div>
                  </div>
              </div>
              <div class="flex justify-evenly gap-4">
                <div class="w-full flex flex-col gap-4">
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Name*</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.name" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Last Name*</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.last_name" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Picture</label>
                    <input type="file" class="form-control" placeholder="" v-on:change="onFileChange">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Email*</label>
                    <input type="email" class="form-control" placeholder="" v-model="form.email" required>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Password*</label>
                    <input type="password" class="form-control" placeholder="" v-model="form.password" required>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Phone</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.phone_number" @keypress="isNumber($event)"> 
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Zip Code</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.zip_code">
                  </div>
                </div>
                <div class="w-full flex flex-col gap-4">
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Country</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.country" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">State</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.state" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">City</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.city" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 1</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_1">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 2</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_2">
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 3</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_3">
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
