<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    import { router } from '@inertiajs/vue3'
    export default {
        components: {
            DefaultTemplate,
        },
        data() {
          return{
              form:{
                  name: '',
              }
          }
        },
        methods: {
            submit(){
                router.post('/brands',this.form)
                .catch(error => {
                    this.errors = error.response.data;
                })
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
                Brand
            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
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
                      <label for="largeInput" class="inline-inputLabel">Brand Name</label>
                      <input type="text" class="form-control" placeholder="" >
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">Serial Number</label>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">Email</label>
                      <input type="email" class="form-control" placeholder="">
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">Logo</label>
                      <input type="file" class="form-control" placeholder="">
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">URL 1</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">URL 2</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">Phone 1</label>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <div class="input-area relative pl-28">
                      <label for="largeInput" class="inline-inputLabel">Phone 2</label>
                      <input type="number" class="form-control" placeholder="">
                  </div>
                  <button class="btn inline-flex justify-center btn-dark ml-28">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <br>
        <div class="xl:col-span-5 col-span-12 lg:col-span-7">
            <div class="card h-full">
                <div class="card-header">
                    <h5>Rules for Creating a Brand:</h5>
                </div>
                <div class="card-body p-6">
                    <div>
                      <ul class="flex flex-col gap-2">
                        <li><strong>Brand Name:</strong> Provide a unique and descriptive name for the brand.</li>
                        <li><strong>Serial Number:</strong> Ensure a unique identifier for the brand without duplications.</li>
                        <li><strong>Email:</strong> Collect a valid and unique email address associated with the brand.</li>
                        <li><strong>Logo:</strong> Accept a high-quality logo representing the brand's identity.</li>
                        <li><strong>URL1 and URL2:</strong> Verify and store valid URLs relevant to the brand.</li>
                        <li><strong>Phone 1 and Phone 2:</strong> Collect accurate phone numbers associated with the brand.</li>
                      </ul>
                      <br>
                      <p><strong>Warning:</strong> Adhering to these rules is crucial to ensure accurate brand information and proper functionality. Failure to follow these guidelines may result in inaccurate data representation, miscommunication, or improper brand representation within the system.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>