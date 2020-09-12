import Vue from 'vue';
import Router from 'vue-router';
import Login from './views/Auth/Login.vue';
import MainNav from './components/MainNav.vue';
import App from './components/App.vue';
import Registration from './views/Auth/Registration.vue';
import Dashboard from './views/Dashboard/Dashboard.vue';

Vue.use(Router);

const routes =[

    {
        path: '/',
        name: 'LandPage',
        component: MainNav
    },

    {
        path: '/login',
        name: 'Login',
        component: Login
    },

    {
        path: '/registration',
        name: 'Registration',
        component: Registration
    },

    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard
    }
]

const router = new Router({
    routes: routes,
    linkActiveClass: 'active'
});


export default router;
