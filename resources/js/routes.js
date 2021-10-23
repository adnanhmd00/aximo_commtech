import Router from "vue-router";
import IndexComponent from './components/IndexComponent.vue';

export const router = new Router({
    routes: [{
        path: '/',
        component: IndexComponent,
        name: 'index'
    }]
})