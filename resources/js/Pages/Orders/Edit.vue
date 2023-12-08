<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Edit',
  components: { DefaultTemplate },
  props: {
    order: Object,
    errors: Object
  },
  data () {
    return {
      form: {
        name: this.brand.name,
        website: this.brand.websites[0] !== undefined ? this.brand.websites[0].website : null,
        email: this.brand.emails[0] !== undefined ? this.brand.emails[0].email : null,
        phone: this.brand.phone_numbers[0] !== undefined ? this.brand.phone_numbers[0].phone_number : null,
        logo: null
      }
    }
  },
  methods: {
    submit () {
      router.put('/orders/' + this.brand.id, this.form)
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
          Order
          <span class="inline-block align-[0px]">
            <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
          </span>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Modify Order Information
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Modify Order</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Customer</label>
                <input type="text" class="form-control" placeholder="" v-model="form.name" required>
                <p v-if="errors.name" style="color: red;">{{ errors.name }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Total Price</label>
                <input type="text" class="form-control" placeholder="" v-model="form.website">
                <p v-if="errors.website" style="color: red;">{{ errors.website }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Total Tax</label>
                <input type="text" class="form-control" placeholder="" v-model="form.phone">
                <p v-if="errors.phone" style="color: red;">{{ errors.phone }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Total Discount</label>
                <input type="email" class="form-control" placeholder="" v-model="form.email">
                <p v-if="errors.email" style="color: red;">{{ errors.email }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Coupon</label>
                <input type="email" class="form-control" placeholder="" v-model="form.coupon">
                <p v-if="errors.email" style="color: red;">{{ errors.email }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Status</label>
                <input type="email" class="form-control" placeholder="" v-model="form.email">
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Notes</label>
                <input type="email" class="form-control" placeholder="" v-model="form.email">
              </div>
              <button class="btn btn-dark ml-28 inline-flex justify-center">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </DefaultTemplate>
</template>
