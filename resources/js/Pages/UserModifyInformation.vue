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
        <form action="/">
            
        <div class="mb-5">
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                    <a href="/">
                        <iconify-icon icon="heroicons-outline:home"/>
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"/>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                    Users
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"/>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white" v-if=$page.props.flag>
                Modify User Information</li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white" v-else>
                Create User</li>
            </ul>
        </div>
        <div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white" v-if=$page.props.flag>Change User Information</div>
                            <div class="card-title text-slate-900 dark:text-white" v-else>Create New User</div>
                        </div>
                    </header>
                    <div class="card-text h-full space-y-4">
                        <div class="input-area">
                            <label for="name" class="form-label">First Name</label>
                            <input id="name" type="text" class="form-control" placeholder="Guadalupe Victoria" :value="$page.props.userName">
                        </div>
                        <div class="input-area">
                            <label for="name" class="form-label">Last Name</label>
                            <input id="name" type="text" class="form-control" placeholder="Rodriguez Barajas" :value="$page.props.userLastName">
                        </div>
                        <div class="input-area">
                            <label for="name" class="form-label">Age</label>
                            <input id="name" type="text" class="form-control" placeholder="Rodriguez Barajas" :value="$page.props.userAge">
                        </div>
                        <div class="input-area">
                            <label for="name" class="form-label">Email</label>
                            <input id="name" type="email" class="form-control" placeholder="Rodriguez Barajas" :value="$page.props.userEmail">
                        </div>
                        <div class="input-area">
                            <label for="name" class="form-label">Address</label>
                            <input id="name" type="text" class="form-control" placeholder="Rodriguez Barajas" :value="$page.props.userAddress">
                        </div>
                        <div class="input-area">
                            <label for="readonly" class="form-label">Creation Date</label>
                            <input id="readonly" type="text" class="form-control" :value="$page.props.userCreationDate" placeholder="12/23/2023" :disabled=$page.props.flag>
                        </div>
                        <div class="input-area">
                            <label for="readonly" class="form-label">Phone Number</label>
                            <input id="readonly" type="text" class="form-control" :value="$page.props.userPhoneNumber" placeholder="6122309430" :disabled=$page.props.flag>
                        </div>
                        <div class="input-area">
                            <label for="description" class="form-label">Change Reasons</label>
                            <textarea id="description" rows="5" class="form-control" placeholder="Type Here"></textarea>
                        </div>
                        <div class="input-area" v-if=$page.props.flag>
                            <label for="select" class="form-label">Select Option*</label>
                            <select id="select" class="form-control" required>
                                <option value="option1" class="dark:bg-slate-700">User petition</option>
                                <option value="option2" class="dark:bg-slate-700">Moderator Choice</option>
                                <option value="option3" class="dark:bg-slate-700">Administrator Choice</option>
                            </select>
                        </div>
                        <div class="input-area" v-if=!$page.props.flag>
                            <label for="select" class="form-label">Select Option*</label>
                            <select id="select" class="form-control" required>
                                <option value="option1" class="dark:bg-slate-700">Administrator</option>
                                <option value="option2" class="dark:bg-slate-700">User</option>
                                <option value="option3" class="dark:bg-slate-700">Moderator</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-group-example btn-group p-2">
                        <button class="btn inline-flex justify-center btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </DefaultTemplate>
</template>