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
        website: null,
        email: null,
        phone: null,
        logo: null
      }
    }
  },
  props: {
    errors: Object
  },
  methods: {
    submit () {
      router.post('/brands', this.form)
    },
    onFileChange (e) {
      this.form.logo = e.target.files[0]
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
            Shipment
          <span class="inline-block align-[0px]">
            <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
          </span>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Create Shipment
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Create Shipment</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
              <div class="flex justify-evenly gap-4">
                <div class="w-full flex flex-col gap-4">                   
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.tracking_number">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.tracking_number }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Tracking Num.*</label>
                    <input type="text" class="form-control" placeholder="" required v-model="form.tracking_number" @keypress="isNumber($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.status">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.status }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Status*</label>
                    <div class="input-area relative">
                        <div class="alert alert-danger light-mode" v-if="errors.role">
                            <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                <div class="flex-1">
                                {{ errors.status }}
                                </div>
                            </div>
                        </div>
                        <select class="form-control" v-model="form.status" required>
                            <option value="pending">Pending</option>
                            <option value="sent">Sent</option>
                            <option value="delivered">Delivered</option>
                            <option value="returned">Returned</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.profile_photo">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.profile_photo }}
                            </div>
                        </div>
                    </div>
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
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.email">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.email }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Email*</label>
                    <input type="email" class="form-control" placeholder="" v-model="form.email" required>
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.password">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.password }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Password*</label>
                    <input type="password" class="form-control" placeholder="" v-model="form.password" required>
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.phone">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.phone }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Phone</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.phone_number" @keypress="isNumber($event)"> 
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.zip_code">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.zip_code }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Zip Code</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.zip_code">
                  </div>
                </div>
                <div class="w-full flex flex-col gap-4">
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.country">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.country }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Country</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.country" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.state">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.state }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">State</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.state" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.city">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.city }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">City</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.city" @keypress="isLetter($event)">
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.address_line_1">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.address_line_1 }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Address 1</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_1">
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.address_line_2">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.address_line_2 }}
                            </div>
                        </div>
                    </div>
                    <label for="largeInput" class="inline-inputLabel">Address 2</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.address_line_2">
                  </div>
                  <div class="input-area relative pl-28">
                    <div class="alert alert-danger light-mode" v-if="errors.address_line_3">
                        <div class="flex items-start space-x-3 rtl:space-x-reverse">
                            <div class="flex-1">
                            {{ errors.address_line_3 }}
                            </div>
                        </div>
                    </div>
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