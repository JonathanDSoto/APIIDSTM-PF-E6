<script>
    import DefaultTemplate from "../layouts/DefaultTemplate.vue";
    export default {
        components: {
            DefaultTemplate,
        },
        data() {
         return {
            categoryData: {
                categoryID: 0,
                categoryName: '',
                creationDate: '',
                description: '',
            },
         };
     },
     mounted() {
        if (this.$page.props.flag) {
                const categoryIdToModify = this.$page.props.categoryId;

                let categoriesArray = JSON.parse(localStorage.getItem('categoriesArray')) || [];
                const categoryToUpdate = categoriesArray.find(category => category.categoryID === parseInt(categoryIdToModify));
                console.log(categoryIdToModify);
                if (categoryToUpdate) {
                // Inicializar userData con los datos encontrados en el localStorage
                    this.categoryData = { ...categoryToUpdate };
                    console.log(this.categoryData);
                }   
        }
    },
     methods: {
        isLetter(e) {
            let char = String.fromCharCode(e.keyCode);
            if(/^[A-Za-z]+$/.test(char)) return true;
            else e.preventDefault(); 
        },
        submitForm() {
            let categoryID = JSON.parse(localStorage.getItem('categoryID')) || 0;
            let categoriesArray = JSON.parse(localStorage.getItem('categoriesArray')) || [];

            if(!this.$page.props.flag){
                let newCategoryData = {
                    categoryID: categoryID,
                    categoryName: this.categoryData.categoryName,
                    creationDate: this.categoryData.creationDate,
                    description: this.categoryData.description,
                }
                categoriesArray.push(newCategoryData);
                localStorage.setItem('categoriesArray', JSON.stringify(categoriesArray));
                categoryID++;
                localStorage.setItem('categoryID',JSON.stringify(categoryID));
            }else{
                const categoryIdToModify = this.$page.props.id;
                let newCategoryData = {
                    categoryID: parseInt(categoryIdToModify),
                    categoryName: this.categoryData.categoryName,
                    creationDate: this.categoryData.creationDate,
                    description: this.categoryData.description,
                }
                const index = categoriesArray.findIndex(user => user.userID === parseInt(categoryIdToModify));
                if (index !== -1) {
                    categoriesArray[index] = newCategoryData;
                    localStorage.setItem('categoriesArray', JSON.stringify(usersArray));
                }
            }
            window.location.href = '/categories';
        },
     },
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
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white" v-if=$page.props.flag>
                Modify Category Information
            </li>
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white" v-else>
                Create Category
            </li>
        </ul>
    </div>
    <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white" v-if=$page.props.flag>Modify Category</div>
                            <div class="card-title text-slate-900 dark:text-white" v-else>Create Category</div>
                        </div>
                    </header>
                <div class="card-text h-full ">
                    <form class="space-y-4" @submit.prevent="submitForm">
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel" v-if=$page.props.flag>ID</label>
                            <input type="text" class="form-control" v-model="categoryData.categoryID" placeholder=""  :disabled=$page.props.flag v-if=$page.props.flag>
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Category Name</label>
                            <input type="text" class="form-control" v-model="categoryData.categoryName" placeholder="">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Creation Date</label>
                            <input type="date" class="form-control" v-model="categoryData.creationDate" placeholder="">
                        </div>
                        <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Description</label>
                            <input type="" class="form-control" v-model="categoryData.description" placeholder="">
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
                    <h4 class="card-title" v-if=$page.props.flag >Rules to Modify a Category</h4>
                    <h4 class="card-title" v-else>Rules to Create a Category</h4>
                </div>
                <div class="card-body p-6">
                    <div>
                        <div class="text-base font-medium text-slate-800 dark:text-slate-100 mb-3">
                            Pricinig, amount and other things
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-300">
                            The coupons should pass al these requirement before sending the form.
                        </p>
                        <br/>
                        <p class="text-sm text-slate-600 dark:text-slate-300">
                            Coupons should not discount more that 2 of our lowest price products.<br>
                            The max ammount of coupons should no surpass the limit stablished by the administrator (100).
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </DefaultTemplate>
</template>