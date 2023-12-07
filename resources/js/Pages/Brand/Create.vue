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
  props:{
      errors: Object,
  },
  methods: {
    submit () {
      router.post('/brands', this.form)
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
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Name</label>
                <input type="text" class="form-control" placeholder="" required v-model="form.name">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Website</label>
                <input type="text" class="form-control" placeholder="" v-model="form.website">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Email</label>
                <input type="email" class="form-control" placeholder="" v-model="form.email">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Phone</label>
                <input type="number" class="form-control" placeholder="" v-model="form.phone">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Logo</label>
                <input type="file" class="form-control" placeholder="" v-on:change="onFileChange">
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
