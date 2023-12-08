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
        website: null,
        logo: null
      }
    }
  },
  props:{
      errors: Object,
  },
  methods: {
    submit () {
      router.post('/brands', this.form)
    },
    onFileChange (e) {
      const file = event.target.files[0];
        if (file) {
          this.selectedFileName = file.name;
        } else {
          this.selectedFileName = '';
        }
        
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
          <Link href="/">
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:home" />
            </span>
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:chevron-right" class="relative text-sm text-slate-500 rtl:rotate-180" />
            </span>
          </Link>
        </li>
        <li class="text-primary-500 font-Inter relative inline-block text-sm ">
          <Link href="/brands">
            Brands
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
            </span>
          </Link>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Create Brand
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Create Brand</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
              <div style="display: flex; gap: 10px;">
                  <div  v-for="(error, key) in errors" :key="key" class="alert-danger"
                  style="padding: 5px; border-radius: 10px;" >
                      <div class="flex items-start">
                          <div>
                                  {{ error }}
                          </div>
                      </div>
                  </div>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Name*</label>
                <input type="text" class="form-control" placeholder="" required v-model="form.name" @keypress="isLetter($event)">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Website</label>
                <input type="text" class="form-control" placeholder="" v-model="form.website">
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
              <button class="btn btn-dark ml-28 inline-flex justify-center">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <br>
    </div>
  </DefaultTemplate>
</template>
