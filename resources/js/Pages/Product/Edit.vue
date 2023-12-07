<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Edit',
  components: { DefaultTemplate },
  props: {
    errors: Object,
    product: Object
  },
  data () {
    return {
      form: {
        name: this.product.name !== undefined ? this.product.name : null,
        sku: this.product.sku !== undefined ? this.product.sku : null,
        description: this.product.description !== undefined ? this.brand.description : null,
        stock: this.product.stock !== undefined ? this.brand.stock : null,
        price: this.product.price !== undefined ? this.brand.price : null,
        brand: this.product.brand !== undefined ? this.brand.brand : null,
        logo: null
      }
    }
  },
  methods: {
    submit () {
      router.put('/brands/' + this.brand.id, this.form)
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
          Brand
          <span class="inline-block align-[0px]">
            <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
          </span>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Modify Brand Information
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Modify Brand</div>
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
                <label for="largeInput" class="inline-inputLabel">Brand Name</label>
                <input type="text" class="form-control" placeholder="" v-model="form.name" required>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Sku</label>
                <input type="text" class="form-control" placeholder="" v-model="form.sku">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Description</label>
                <input type="text" class="form-control" placeholder="" v-model="form.description">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Stock</label>
                <input type="email" class="form-control" placeholder="" v-model="form.stock">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Price</label>
                <input type="email" class="form-control" placeholder="" v-model="form.price">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Brand</label>
                <input type="email" class="form-control" placeholder="" v-model="form.brand">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Logo</label>
                <input type="image" class="form-control" placeholder="" v-on:change="onFileChange">
              </div>
              <button class="btn btn-dark ml-28 inline-flex justify-center">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </DefaultTemplate>
</template>
