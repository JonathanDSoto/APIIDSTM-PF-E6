<script>
    import DefaultTemplate from "@/layouts/DefaultTemplate.vue";
import UIAvatarSvg from 'ui-avatar-svg'

const avatar = new UIAvatarSvg()

    export default {
        components: {
            DefaultTemplate,
        },
        props:{
            customer: Object,
            errors: Object,
            success: null
        },
        methods: {
          getAvatar (name, lastname) {
            return avatar
              .text(name[0] + lastname[0])
              .size(186)
              .bgColor('#b8c0cc')
              .textColor('#342f2f')
              .generate()
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
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                Customers
                <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                Detailed Information</li>
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
        <div class="space-y-5 profile-page">
                <div class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0
                space-y-6 justify-between items-end relative z-[1]" >
                  <div class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg"></div>
                  <div class="profile-box flex-none md:text-start text-center" >
                    <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse" >
                      <div class="flex-none">
                        <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                          <img v-if="customer.profile_photo_file_name" class="w-full h-full object-cover rounded-full" :src="'/images/' + customer.profile_photo_file_name" alt="" >
                          <div v-else class="w-full h-full object-cover rounded-full" v-html="this.getAvatar(customer.name, customer.last_name)"></div>
                        </div>
                      </div>
                      <div class="flex-1">
                        <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                            {{ customer.name }}
                        </div>
                        <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                            {{ customer.last_name }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end profile box -->
                  
                  <div class="profile-info-500 md:flex md:text-start text-center flex-1 max-w-[516px] md:space-y-0 space-y-4 justify-end" > 
                    <div>
                        <Link :href="`/customers/${customer.id}/edit`" class="btn btn-dark m-1 inline-flex justify-center dark:bg-slate-700 dark:text-slate-300 ">
                            <span class="flex items-center">
                                <Icon class="text-xl ltr:mr-2 rtl:ml-2" icon="material-symbols:edit-square-outline"/>
                                <span>Modify Customer</span>
                            </span>
                        </Link>
                    </div>
                  </div>
                  <!-- profile info-500 -->
                </div>
                <div class="grid grid-cols-12 gap-6">
                  <div class="lg:col-span-4 col-span-12">
                    <div class="card h-full">
                      <header class="card-header">
                        <h4 class="card-title">Info</h4>
                      </header>
                      <div class="card-body p-6">
                        <ul class="list space-y-8">
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="heroicons:envelope"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                EMAIL
                              </div>
                              <a href="mailto:someone@example.com" class="text-base text-slate-600 dark:text-slate-50">
                                {{ customer.email }}
                              </a>
                            </div>
                          </li>
                          <!-- end single list -->
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="heroicons:phone-arrow-up-right"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                PHONE
                              </div>
                              <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                {{ customer.phone_number }}
                              </a>
                            </div>
                          </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="lets-icons:date-today"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    Creation Date
                                </div>
                                <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                    {{ new Date(customer.created_at).toISOString().slice(0, 10) }}
                                </a>
                                <div style="font-size: 13px" class="dark:text-slate-300">
                                    <div v-if="customer.create_author">By: {{ customer.create_author.name }}</div>
                                    <div v-else>By: Unknown author</div>
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="lets-icons:date-today"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    Updated Date
                                </div>
                                <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                    {{ new Date(customer.updated_at).toISOString().slice(0, 10) }}
                                </a>
                                <div style="font-size: 13px" class="dark:text-slate-300">
                                    <div v-if="customer.update_author">By: {{ customer.update_author.name }}</div>
                                    <div v-else>By: Unknown author</div>
                                </div>
                            </div>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- START OF THE TABLES -->
                  <div class="lg:col-span-8 col-span-12">
                    <div class="card h-full">
                      <header class="card-header">
                        <h4 class="card-title">Location</h4>
                      </header>
                      <div class="card-body p-6">
                        <ul class="list space-y-8">
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="material-symbols:map-outline"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                Country
                              </div>
                              <div href="mailto:someone@example.com" class="text-base text-slate-600 dark:text-slate-50">
                                {{ customer.country }}
                              </div>
                            </div>
                          </li>
                          <!-- end single list -->
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="material-symbols:location-city"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                City
                              </div>
                              <div href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                {{ customer.city }}
                              </div>
                            </div>
                          </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="material-symbols:real-estate-agent-outline"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    State
                                </div>
                                <div href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                    {{ customer.state }}
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="entypo:address"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    Addresses
                                </div>
                                <div href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                    <ol>
                                      <li>{{ customer.address_line_1 }}</li>
                                      <li>{{ customer.address_line_2 }}</li>
                                      <li>{{ customer.address_line_3 }}</li>
                                    </ol>
                                </div>
                            </div>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </DefaultTemplate>
</template>