import './bootstrap'
// import '../css/app.css'

import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'
import { Icon } from '@iconify/vue'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel'

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup ({ el, App, props, plugin }) {
    import('../../public/js/store.js')
    import('../../public/js/jquery-3.6.0.min.js')
    import('../../public/js/rt-plugins.js')
    import('../../public/js/app.js')
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .component('Link', Link)
      .component('Icon', Icon)
      .mount(el)
  },
  progress: {
    color: '#4B5563'
  }
})
