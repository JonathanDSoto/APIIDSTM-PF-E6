<script>
import { router } from '@inertiajs/vue3'

export default {
  name: 'Login',
  props: {
    status: String,
    canResetPassword: Boolean,
    emailErrorMessage: String,
    passwordErrorMessage: String
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
      <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
          <a href="/">
            <!-- LOGO -->
          </a>
          <h4>
            <span v-if="emailErrorMessage" class="text-red-500">{{ emailErrorMessage }}</span><br><br>
            <span v-if="passwordErrorMessage" class="text-red-500">{{ passwordErrorMessage }}</span>
            <p v-else>You can do<span class="font-bold text-slate-800 dark:text-slate-400"> everything</span></p>
          </h4>
        </div>
        <div class="absolute bottom-[-130px] left-0 z-[-1] h-full w-full 2xl:bottom-[-160px]">
          <img src="images/auth/ils1.svg" alt="" class=" h-full w-full object-contain">
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
                Sign in to your account to start using our Dashboard
              </div>
            </div>
            <!-- BEGIN: Login Form -->
            <!--            <Head title="Log in" />-->
            <!--            <div v-if="status" class="mb-4 text-sm font-medium text-green-600">-->
            <!--              {{ status }}-->
            <!--            </div>-->
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
              <div class="flex justify-between">
                <div class="checkbox-area">
                  <label class="inline-flex cursor-pointer items-center">
                    <input type="checkbox" class="hidden" name="checkbox">
                    <span class="relative inline-flex h-4 w-4 flex-none rounded border border-slate-100 bg-slate-100 transition-all duration-150 ltr:mr-3 rtl:ml-3 dark:border-slate-800 dark:bg-slate-900">
                    <img src="assets/images/icon/ck-white.svg" alt="" class="m-auto block h-[10px] w-[10px] opacity-0"></span>
                    <span class="text-sm leading-6 text-slate-500 dark:text-slate-400">Keep me signed in</span>
                  </label>
                </div>
                <a class="text-sm font-medium leading-6 text-slate-800 dark:text-slate-400" href="forget-password-one.html">Forgot Password?</a>
              </div>
              <button class="btn btn-dark block w-full text-center">Sign in</button>
            </form>
            <!-- END: Login Form -->
            <div class="mx-auto mt-12 text-sm font-normal uppercase text-slate-500 dark:text-slate-400 md:max-w-[345px]">
              Don’t have an account?
              <a href="/signup" class="font-medium text-slate-900 hover:underline dark:text-white">
                Sign up
              </a>
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
