<script>
    import DefaultTemplate from "@/layouts/DefaultTemplate.vue";
    export default {
        components: {
            DefaultTemplate,
        },    
        props:{
            category: Object,
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
            <ul class="m-0 p-0 list-none flex gap-2">
                <li class="relative top-[3px] text-base text-primary-500 font-Inter flex gap-2">
                    <a href="/" class="flex gap-2">
                        <Icon icon="heroicons-outline:home"></Icon>
                        <Icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></Icon>
                    </a>
                </li>
                <li class="flex gap-2 relative text-sm text-primary-500 font-Inter ">
                    Categories
                    <Icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></Icon>
                </li>
                <li class="flex gap-2 relative text-sm text-slate-500 font-Inter dark:text-white">
                    Show Category
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
            <div class="grid xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 place-content-center">
                <div class="flex space-x-4 h-full items-center rtl:space-x-reverse">
                    <div class="flex-1">
                        <h4 class="text-xl font-medium mb-2">
                            <span class="block font-light">You are seeing</span>
                            <span class="block">{{ category.name }}</span>
                        </h4>
                        <p class="text-sm dark:text-slate-300">With the id: {{ category.id }}</p>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Creation Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                        {{ new Date(category.created_at).toISOString().slice(0, 10) }}
                    </div>
                    <div>
                        <div v-if="category.create_author">By: {{ category.create_author.name }}</div>
                        <div v-else>By: Unknown author</div>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                        Modification Date
                    </div>
                    <div class="text-slate-900 dark:text-white text-lg font-medium" >
                        {{ new Date(category.updated_at).toISOString().slice(0, 10) }}
                    </div>
                    <div>
                        <div v-if="category.update_author">By: {{ category.update_author.name }}</div>
                        <div v-else>By: Unknown author</div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>