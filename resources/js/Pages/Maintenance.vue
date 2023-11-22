<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";
    export default {
        components: {
            DefaultTemplate,
        }
    }
</script>

<template>
    <DefaultTemplate>
        <div class="min-h-screen">
            <div class="container">
                <div class="flex justify-center flex-wrap items-center min-h-screen flex-col text-center">
                    <img src="/images/svg/img-2.svg" alt="">
                        <h4 class="text-3xl font-medium text-slate-900 dark:text-white mb-2">
                            We are under maintenance.
                        </h4>
                        <p class="font-normal text-base text-slate-500 dark:text-slate-300">
                            We’re making the system more awesome.
                            <br/> We’ll be back shortly.
                        </p>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>