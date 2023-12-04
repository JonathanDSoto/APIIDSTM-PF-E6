<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";

    export default {
        components: {
            DefaultTemplate,
        },
        data() {
            return {
            };
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
            Coupons
            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
            </li>
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
            Modify Coupons Information</li>
        </ul>
    </div>
    <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white" >Modify Coupon</div>
                        </div>
                    </header>
                <div class="card-text h-full ">
                    <form class="space-y-4">
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Code</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">End Date</label>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Amount</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Times Used</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Discount</label>
                            <input type="text" class="form-control" placeholder="">
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
                    <h4 class="card-title">Rules to Modify a Coupon</h4>
                </div>
                <div class="card-body p-6">
                    <div>
                      <ul>
                        <li><strong>Editable Coupon Code:</strong> Allow modification of the coupon's code if necessary.</li>
                        <li><strong>Amount:</strong> Permit changes to the specific value or amount associated with the coupon.</li>
                        <li><strong>Discount:</strong> Enable updates to the discount percentage or rate for the coupon.</li>
                        <li><strong>Change History:</strong> Record and track modifications made to the coupon over time.</li>
                        <li><strong>Impact Check:</strong> Review how modifications might affect coupon application or related data.</li>
                        <li><strong>Validation Testing:</strong> Ensure the modified coupon details align with the system's requirements and constraints.</li>
                      </ul>
                      <br>
                      <p><strong>Warning:</strong> Adhering to these rules is crucial to maintain accuracy and functionality when editing coupons. Failure to comply might result in incorrect discount application, inconsistencies, or disruptions in coupon usage within the system.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>