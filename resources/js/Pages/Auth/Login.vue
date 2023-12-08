<script>
import { router } from '@inertiajs/vue3'

export default {
  name: 'Login',
  props: {
    errors: Object,
    status: String,
    canResetPassword: Boolean
  },
  data () {
    return {
      form: {
        email: '',
        password: '',
        remember: false
      }
    }
  },
  methods: {
    submit () {
      router.post('/login', this.form)
    }
  }
}
</script>

<template>
  <body class=" font-inter skin-default">
  <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="left-column relative z-[1]" style="display: flex; justify-content: center;">
        <div class="h-1/2 w-1/2">
          <Icon icon="fluent-emoji-high-contrast:banana" class="light:text-gray-900 h-full w-full dark:text-white"/>
        </div>
      </div>
      <div class="right-column  relative">
        <div class="inner-content flex h-full flex-col bg-white dark:bg-slate-800">
          <div class="auth-box flex h-full flex-col justify-center">
            <div class="mobile-logo mb-6 block text-center lg:hidden">
              <a href="/">
                <img src="images/logo/logo.svg" alt="" class="dark_logo mb-10">
                <img src="images/logo/logo-white.svg" alt="" class="white_logo mb-10">
              </a>
            </div>
            <div class="mb-4 text-center 2xl:mb-10">
              <h4 class="font-medium">Sign in</h4>
              <div class="text-base text-slate-500">
                Sign in to your account to start using <span class="font-semibold text-gray-900 underline dark:text-white">DashBanana</span>
              </div>
            </div>
            <!-- BEGIN: Login Form -->
            <form class="space-y-4" @submit.prevent="submit">
              <div class="fromGroup">
                <label class="form-label block capitalize">email</label>
                <div class="relative">
                  <input type="email" name="email" class="form-control py-2" placeholder="Enter your email" required  autofocus  v-model="this.form.email">
                </div>
              </div>
              <div class="fromGroup">
                <label class="form-label block capitalize">password</label>
                <div class="relative">
                  <input type="password" name="password" class="form-control py-2" placeholder="Enter your password" v-model="this.form.password" required>
                </div>
              </div>
              <div v-if="errors.email" class="alert alert-danger light-mode">
                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                  <div class="flex-1">
                    {{ errors.email }}
                  </div>
                </div>
              </div>
              <div class="flex justify-between">
                <div class="checkbox-area">
                  <label class="inline-flex cursor-pointer items-center">
                    <input type="checkbox" class="hidden" name="remember" v-model="this.form.remember">
                    <span class="relative inline-flex h-4 w-4 flex-none rounded border border-slate-100 bg-slate-100 transition-all duration-150 ltr:mr-3 rtl:ml-3 dark:border-slate-800 dark:bg-slate-900">
                    <img src="/images/icon/ck-white.svg" alt="" class="m-auto block h-[10px] w-[10px] opacity-0"></span>
                    <span class="text-sm leading-6 text-slate-500 dark:text-slate-400">Keep me signed in</span>
                  </label>
                </div>
                <Link class="text-sm font-medium leading-6 text-slate-800 dark:text-slate-400" href="/forgot-password">Forgot Password?</Link>
              </div>
              <button class="btn btn-dark block w-full text-center">Sign in</button>
            </form>
            <!-- END: Login Form -->
            <div class="mx-auto mt-12 text-sm font-normal uppercase text-slate-500 dark:text-slate-400 md:max-w-[345px]">
              Don’t have an account?
              <Link href="/signup" class="font-medium text-slate-900 hover:underline dark:text-white">
                Sign up
              </Link>
            </div>
          </div>
          <div class="auth-footer text-center">
            Copyright 2021, MonkeyDevs All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</template>
