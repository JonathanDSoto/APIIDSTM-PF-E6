<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Create',
  components: { DefaultTemplate },
  data () {
    return {
      form: {
        customer: null,
        totalPrice: null,
        totalTax: null,
        totalDiscount: null,
        coupon: null, 
        status: null,
        notes: null
      }
    }
  },
  props: {
    errors: Object
  },
  methods: {
    submit () {
      router.post('/orders', this.form)
      .catch(error => {
          this.errors = error.response.data;
      })
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
            Orders
            <span class="inline-block align-[0px]">
              <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
            </span>
          </Link>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Create Orders
        </li>
      </ul>
    </div>
    <div>
      <div class="card">
        <div class="card-body flex flex-col p-6">
          <header class="-mx-6 mb-5 flex items-center border-b border-slate-100 px-6 pb-5 dark:border-slate-700">
            <div class="flex-1">
              <div class="card-title text-slate-900 dark:text-white">Create Order</div>
            </div>
          </header>
          <div class="card-text h-full ">
            <form class="space-y-4" @submit.prevent="submit">
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Customer</label>
                <input type="number" class="form-control" placeholder="" required v-model="form.customer">
                <p v-if="errors.customer" style="color: red;">{{ errors.customer }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Total Price</label>
                <input type="text" class="form-control" placeholder="" required v-model="form.totalPrice">
                <p v-if="errors.totalPrice" style="color: red;">{{ errors.totalPrice }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Total Tax</label>
                <input type="text" class="form-control" placeholder="" v-model="form.totalTax">
                <p v-if="errors.totalTax" style="color: red;">{{ errors.totalTax }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Total Discount</label>
                <input type="email" class="form-control" placeholder="" v-model="form.totalDiscount">
                <p v-if="errors.totalDiscount" style="color: red;">{{ errors.totalDiscount }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Coupon</label>
                <input type="number" class="form-control" placeholder="" v-model="form.coupon">
                <p v-if="errors.coupon" style="color: red;">{{ errors.coupon }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Status</label>
                <input type="text" class="form-control" placeholder="" v-model="form.status">
                <p v-if="errors.status" style="color: red;">{{ errors.status }}</p>
              </div>
              <div class="input-area relative pl-28">
                <label for="largeInput" class="inline-inputLabel">Notes</label>
                <input type="text" class="form-control" placeholder="" v-model="form.notes">
                <p v-if="errors.notes" style="color: red;">{{ errors.notes }}</p>
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
