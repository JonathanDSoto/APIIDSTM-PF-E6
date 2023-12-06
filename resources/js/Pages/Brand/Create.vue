<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  components: {
    DefaultTemplate
  },
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
      <ul class="m-0 p-0 list-none">
        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
          <a href="/">
            <Icon icon="heroicons-outline:home" />
            <Icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180" />
          </a>
        </li>
        <li class="inline-block relative text-sm text-primary-500 font-Inter ">
          Brand
          <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
        </li>
        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
          Create Brand
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Create Brand</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
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
              <button class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <br>
    </div>
  </DefaultTemplate>
</template>
