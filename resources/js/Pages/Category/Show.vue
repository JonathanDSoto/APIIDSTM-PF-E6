<script>
    import DefaultTemplate from "../../layouts/DefaultTemplate.vue";
    export default {
        data() {
          return {
                name: this.$page.props.category.name,
                id: this.$page.props.category.id,
                creationDate: this.$page.props.category.created_at,
                updatedDate: this.$page.props.category.updated_at,
                creator: this.$page.props.category.creator,
          };
        },
        components: {
            DefaultTemplate,
        },    
        props:{
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
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                    <a href="/">
                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                    Categories
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    Show Category
                </li>
            </ul>
        </div>
        <div class="card p-6">
            <div class="grid xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 place-content-center">
                <div class="flex space-x-4 h-full items-center rtl:space-x-reverse">
                    <div class="flex-1">
                        <h4 class="text-xl font-medium mb-2">
                            <span class="block font-light">You are seeing</span>
                            <span class="block">{{ name }}</span>
                        </h4>
                        <p class="text-sm dark:text-slate-300">With the id: {{ id }}</p>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Creation Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(creationDate).toISOString().slice(0, 10) }}
                    </div>
                    <div class="ml-auto max-w-[124px]">
                        <div id="clmn_chart_1">By: Alexby11</div>
                    </div>
                </div>

                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Modification Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(updatedDate).toISOString().slice(0, 10) }}
                    </div>
                    <div class="ml-auto max-w-[124px]">
                        <div id="clmn_chart_2">By: Willyrex</div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>