<script>
  import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
  import { router } from '@inertiajs/vue3'

  export default {
    name: 'Create',
    components: { DefaultTemplate },
    data () {
      return {
        selectedFileName: '',
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
        const file = event.target.files[0];
        if (file) {
          this.selectedFileName = file.name;
        } else {
          this.selectedFileName = '';
        }

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
              <div class="flex justify-evenly gap-4">
                <div class="w-full flex flex-col gap-4">             
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Name*</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.name" @keypress="isLetter($event)">
                    <p v-if="errors.name" style="color: red;">{{ errors.name }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Last Name*</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.last_name" @keypress="isLetter($event)">
                    <p v-if="errors.last_name" style="color: red;">{{ errors.last_name }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Photo</label>
                    <div class="input-area">
                      <div class="filegroup">
                        <label>
                          <span class="w-full h-[40px] file-control flex items-center custom-class">
                            <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                              <div class="custom-file-input">
                                <input type="file" class="w-full" ref="fileInput" name="basic" @change="onFileChange" style="display: none;">
                                <p v-if="!selectedFileName">Choose a file or drop it here...</p>
                                <span v-if="selectedFileName">{{ selectedFileName }}</span>
                              </div>
                            </span>
                            <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <p v-if="errors.profile_photo" style="color: red;">{{ errors.profile_photo }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Email*</label>
                    <input type="email" class="form-control" placeholder="" v-model="form.email" required>
                    <p v-if="errors.email" style="color: red;">{{ errors.email }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Password*</label>
                    <input type="password" class="form-control" placeholder="" v-model="form.password" required>
                    <p v-if="errors.password" style="color: red;">{{ errors.password }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Phone</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.phone_number" @keypress="isNumber($event)"> 
                    <p v-if="errors.phone_number" style="color: red;">{{ errors.phone_number }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Zip Code</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.zip_code">
                    <p v-if="errors.zip_code" style="color: red;">{{ errors.zip_code }}</p>
                  </div>
                </div>
                <div class="w-full flex flex-col gap-4">
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Country</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.country" @keypress="isLetter($event)">
                    <p v-if="errors.country" style="color: red;">{{ errors.country }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">State</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.state" @keypress="isLetter($event)">
                    <p v-if="errors.state" style="color: red;">{{ errors.state }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">City</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.city" @keypress="isLetter($event)">
                    <p v-if="errors.city" style="color: red;">{{ errors.city }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 1</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_1">
                    <p v-if="errors.address_line_1" style="color: red;">{{ errors.address_line_1 }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 2</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_2">
                    <p v-if="errors.address_line_2" style="color: red;">{{ errors.address_line_2 }}</p>
                  </div>
                  <div class="input-area relative pl-28">
                    <label for="largeInput" class="inline-inputLabel">Address 3</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_3">
                    <p v-if="errors.address_line_3" style="color: red;">{{ errors.address_line_3 }}</p>
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
