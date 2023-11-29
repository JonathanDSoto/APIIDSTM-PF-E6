<template>
  <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
          <a href="index.html">
            <img src="images/logo/logo.svg" alt="" class="mb-10 dark_logo">
            <img src="images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
          </a>
          <h4>
            Unlock your Project
            <span class="text-slate-800 dark:text-slate-400 font-bold">
              performance
            </span>
          </h4>
        </div>
        <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
          <img src="images/auth/ils1.svg" alt="" class=" h-full w-full object-contain">
        </div>
      </div>
      <div class="right-column  relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index.html">
                <img src="images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                <img src="images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-4">
              <h4 class="font-medium">Sign in</h4>
              <div class="text-slate-500 text-base">
                Sign in to your account to start using Dashcode
              </div>
            </div>
            <!-- BEGIN: Registration Form -->
            <form class="space-y-4" action='/' @submit.prevent="handleSubmit">
              <div class="fromGroup">
                <label class="block capitalize form-label">Name</label>
                <div class="relative ">
                  <input v-model="formData.name" type="text" name="name" class="  form-control py-2" placeholder="Enter your name">
                  <span v-if="formData.errors.name" class="text-red-500">{{ formData.errors.name }}</span>
                </div>
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Email</label>
                <div class="relative ">
                  <input v-model="formData.email" type="email" name="email" class="form-control py-2" placeholder="Enter your email">
                  <span v-if="formData.errors.email" class="text-red-500">{{ formData.errors.email }}</span>
                </div>
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Password</label>
                <div class="relative ">
                  <input v-model="formData.password" type="password" name="password" class="  form-control py-2" placeholder="Enter your password">
                  <span v-if="formData.errors.password" class="text-red-500">{{ formData.errors.password }}</span>
                </div>
              </div>
              <div class="checkbox-area">
                <label class="inline-flex items-center cursor-pointer">
                  <input type="checkbox" class="hidden" name="checkbox">
                  <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img src="images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                  <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">You accept our Terms and Conditions and Privacy Policy</span>
                </label>
              </div>
              <button type="submit" class="btn btn-dark block w-full text-center">Create an account</button>
            </form>
            <!-- END: Registration Form -->
            <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
              <div class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                    px-4 min-w-max text-sm text-slate-500 font-normal">
                Or continue with
              </div>
            </div>
            <div class="max-w-[242px] mx-auto mt-8 w-full">
              <!-- BEGIN: Social Log in Area -->
              <ul class="flex">
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="images/icon/tw.svg" alt="">
                  </a>
                </li>
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="images/icon/fb.svg" alt="">
                  </a>
                </li>
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="images/icon/in.svg" alt="">
                  </a>
                </li>
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="images/icon/gp.svg" alt="">
                  </a>
                </li>
              </ul>
              <!-- END: Social Log In Area -->
            </div>
            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-8 uppercase text-sm">
              <span>ALREADY REGISTERED?</span>
              <a href="/login" class="text-slate-900 dark:text-white font-medium hover:underline">
                Sign In
              </a>
            </div>
          </div>
          <div class="auth-footer text-center">
            Copyright 2021, Dashcode All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const formData = {
  name: '',
  email: '',
  password: '',
  errors: {
    name: null,
    email: null,
    password: null,
  },
};

const handleSubmit = () => {
  formData.errors.name = null;
  formData.errors.email = null;
  formData.errors.password = null;

  // Validar el nombre
  if (!/^[a-zA-Z]+$/.test(formData.name)) {
    formData.errors.name = 'Name must contain only letters.';
  }

  // Validar el correo electrónico
  if (!formData.email.includes('@')) {
    formData.errors.email = 'Enter a valid email.';
  }

  // Validar la contraseña
  if (formData.password.length < 6) {
    formData.errors.password = 'Password must be at least 6 characters.';
  }

  // Si no hay errores, puedes enviar el formulario
  if (!formData.errors.name && !formData.errors.email && !formData.errors.password) {
    router.visit('/index');
  }
};
</script>
