<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const formData = {
  email: '',
  errors: {
    email: null,
  },
  isFormValid: true,
};

const handleSubmit = () => {
  // Restablecer mensajes de error y estado de formulario
  formData.errors.email = null;
  formData.isFormValid = true;

  // Validar el correo electrónico
  if (!formData.email.includes('@') || formData.email.length === 0) {
    formData.errors.email = 'Ingresa un correo electrónico válido.';
    formData.isFormValid = false;
  }

  // Si no hay errores puedes enviar el formulario
  if (formData.isFormValid) {
    router.visit('/');
  }
};

console.log(formData.email);
</script>

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
      <div class="right-column relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box2 flex flex-col justify-center h-full">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index.html">
                <img src="images/logo/logo.svg" alt="" class="mx-auto">
                <img src="images/logo/logo-white.svg" alt="" class="mx-auto">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-5">
              <h4 class="font-medium mb-4">Forgot Your Password?</h4>
              <div class="text-slate-500 dark:text-slate-400 text-base">
                Reset Password with Dashcode.
              </div>
            </div>
            <div class="font-normal text-base text-slate-500 dark:text-slate-400 text-center px-2 bg-slate-100 dark:bg-slate-600 rounded py-3 mb-4 mt-10">
              Enter your Email and instructions will be sent to you!
            </div>
            <!-- BEGIN: Forgot Password Form -->
            
            <form class="space-y-4" @submit.prevent="handleSubmit">
              <div class="fromGroup">
                <label class="block capitalize form-label">email</label>
                <div class="relative ">
                  <input type="email" v-model="formData.email" name="email" class="form-control py-2" placeholder="Enter your Email">
                  <span v-if="formData.errors.email" class="text-red-500">{{ formData.errors.email }}</span>
                </div>
              </div>
              <span v-if="!formData.isFormValid" class="text-red-500">Ingresa un correo electrónico válido.</span>
              <button class="btn btn-dark block w-full text-center">Send recovery email</button>
            </form>
            <!-- END: Forgot Password Form -->

            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-8 uppercase text-sm">
              Forget It,
              <a href="/logint" class="text-slate-900 dark:text-white font-medium hover:underline">
                Send me Back
              </a>
              to The Sign In
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
