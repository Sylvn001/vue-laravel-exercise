import Vue from 'vue'
import Router from 'vue-router'

import list from '@/pages/list'
import form from '@/pages/form'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'list',
      component: list
    },
    {
      path: '/form',
      name: 'form',
      component: form
    }
    
  ]
})
