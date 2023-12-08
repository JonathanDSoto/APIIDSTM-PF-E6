<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Show',
  components: { DefaultTemplate },
  props: {
    customer: Object,
    errors: Object,
    success: null
  },
  methods: {
  }
}
</script>

<template>
  <div id="deletepopup" v-if=popUpDelete style="width: 400px; height: 150px; background-color: #f1f5f9; padding: 20px; border-radius: 20px; display: flex;
    justify-content: center; align-items: center; position: fixed; z-index: 10; top: 50%; left: 50%; transform: translate(-50%,-50%);">
      <div style="padding: 2px; display: flex; justify-content: center; flex-direction: column; align-items: center; gap: 20px">
        <p>
          Are you sure you want to delete this element?
        </p>
        <div style="display: flex; gap: 20px;">
          <button style="background-color: #50C793; padding: 5px; border-radius: 10px; color: white; font-weight: bold;" @click="confirmElimination">
            Confirm
          </button>
          <button style="background-color: #F1595C; padding: 5px; border-radius: 10px; color: white; font-weight: bold;" @click="cancelElimination">
            Cancel
          </button>
        </div>
      </div>
  </div>
  <DefaultTemplate>
    <div class="mb-5">
      <ul class="m-0 list-none p-0 flex gap-2">
        <li class="text-primary-500 font-Inter relative top-[3px] inline-block text-base ">
          <a href="/" class="flex gap-2">
            <Icon icon="heroicons-outline:home" />
            <Icon icon="heroicons-outline:chevron-right" class="relative text-sm text-slate-500 rtl:rotate-180" />
          </a>
        </li>
        <li class="text-primary-500 font-Inter relative text-sm flex gap-2">
          Customer
          <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Show Customer
        </li>
      </ul>
    </div>
    <div class="alert alert-success" v-if="$page.props.flash.success">
        <div class="flex items-start space-x-3 rtl:space-x-reverse">
            <div class="flex-1">
                {{$page.props.flash.success}}
            </div>
        </div>
    </div>
    <div v-if="$page.props.flash.success">
        <br>
    </div>
    <div class="card p-6">
      <div class="grid grid-cols-1 place-content-center gap-5 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
        <div class="flex h-full items-center space-x-4 rtl:space-x-reverse">
          <div class="flex-1">
            <h4 class="mb-2 text-xl font-medium">
              <span class="block font-light">You are seeing</span>
              <span class="block">{{ customer.name }}</span>
            </h4>
            <p class="text-sm dark:text-slate-300">With the id: {{ customer.id }}</p>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Creation Date
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white">
            {{ new Date(customer.created_at).toISOString().slice(0, 10)  }}
          </div>
          <div class="ml-auto max-w-[124px]">
            <div id="clmn_chart_1" v-if="customer.create_author">By: {{ customer.create_author.name}}</div>
            <div id="clmn_chart_1" v-else>By: -</div>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Modification Date
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white">
            {{ new Date(customer.updated_at).toISOString().slice(0, 10) }}
          </div>
          <div class="ml-auto max-w-[124px]">
            <div id="clmn_chart_2" v-if="customer.update_author">By: {{ customer.update_author.name }}</div>
            <div id="clmn_chart_2" v-else>By: -</div>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Website
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-if="customer.websites[0]">
            <a>{{ customer.websites[0].website }}</a>
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-else>
            -
          </div>
          <div class="ml-auto max-w-[124px]">
            <div id="clmn_chart_2"></div>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Email
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-if="customer.emails[0]">
            {{ customer.emails[0].email }}
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-else>
            -
          </div>
          <div class="ml-auto max-w-[124px]">
            <div id="clmn_chart_2"></div>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Logo
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-if="customer.logo_file_name">
            <img :src="'/images/' + customer.logo_file_name" alt="">
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-else>
            -
          </div>
          <div class="ml-auto max-w-[124px]">
            <div id="clmn_chart_2"></div>
          </div>
        </div>
      </div>
    </div>
  </DefaultTemplate>
</template>
