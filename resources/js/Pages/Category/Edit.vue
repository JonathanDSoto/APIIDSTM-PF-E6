<script>
import DefaultTemplate from '@/layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Edit',
  components: { DefaultTemplate },
  props: {
    category: Object,
    errors: Object
  },
  data () {
    return {
      form: {
        name: this.category.name
      }
    }
  },
  methods: {
    submit () {
      router.put(`/categories/${this.category.id}`, this.form)
    }
  }
}
</script>

<template>
  <DefaultTemplate>
    <div class="mb-5">
      <ul class="m-0 flex list-none gap-2 p-0">
        <li class="text-primary-500 font-Inter relative top-[3px] inline-block text-base ">
          <a href="/" class="flex gap-2">
            <Icon icon="heroicons-outline:home"></Icon>
            <Icon icon="heroicons-outline:chevron-right" class="relative text-sm text-slate-500 rtl:rotate-180"></Icon>
          </a>
        </li>
        <li class="text-primary-500 font-Inter relative flex gap-2 text-sm">
          Categories
          <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></Icon>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Modify Category
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Modify Category</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Name*</label>
                <input type="text" class="form-control" placeholder="" v-model="form.name" pattern="[a-zA-Z]*" required>
                <p v-if="errors.name" style="color: red;">{{ errors.name }}</p>
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
