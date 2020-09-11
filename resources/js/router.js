import Vue from 'vue';
import Router from 'vue-router';
import Login from './views/Auth/Login.vue';

Vue.use(Router);

const routes =[
    {
        path: '/login',
        name: 'Login',
        component: Login
    }
]

const router = new Router({
    routes: routes
});


export default router;
