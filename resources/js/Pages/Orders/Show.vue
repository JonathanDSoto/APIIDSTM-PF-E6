<script>
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue'
import { router } from '@inertiajs/vue3'

export default {
  name: 'Show',
  components: { DefaultTemplate },
  props: {
    order: Object,
    errors: Object,
    success: null
  },
  methods: {
  }
}
</script>

<template>
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
          Order
          <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180" />
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
          Show Order
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
              <span class="block">{{ order.name }}</span>
            </h4>
            <p class="text-sm dark:text-slate-300">With the id: {{ order.id }}</p>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Creation Date
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white">
            {{ new Date(order.created_at).toISOString().slice(0, 10)  }}
          </div>
          <div class="ml-auto max-w-[124px]">
            <div id="clmn_chart_1" v-if="order.create_author">By: {{ order.create_author.name}}</div>
            <div id="clmn_chart_1" v-else>By: -</div>
          </div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Modification Date
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white">
            {{ new Date(order.updated_at).toISOString().slice(0, 10) }}
          </div>
            <div v-if="order.create_author">By: {{ order.create_author.name }}</div>
            <div v-else>By: Unknown author</div>
        </div>

        <div class="rounded bg-slate-50 p-4 dark:bg-slate-900">
          <div class="mb-1 text-sm font-medium text-slate-600 dark:text-slate-400">
            Website
          </div>
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-if="order.websites[0]">
            <a>{{ order.websites[0].website }}</a>
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
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-if="order.emails[0]">
            {{ order.emails[0].email }}
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
          <div class="text-lg font-medium text-slate-900 dark:text-white" v-if="order.logo_file_name">
            <img :src="'/images/' + order.logo_file_name" alt="">
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
