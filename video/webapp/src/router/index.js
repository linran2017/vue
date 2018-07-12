import Vue from 'vue'
import Hello from '@/components/Hello'
import Home from '@/components/Home'
import Video from '@/components/Video'
import Page from '@/components/Page'

import Router from 'vue-router'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
      {
          path: '/video/:tid?',
          name: 'Video',
          component: Video
      },
      {
          path: '/page/:lessonId',
          name: 'Page',
          component: Page
      }
  ]
})
