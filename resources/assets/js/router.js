import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./components/pages/Home'),
    },
    {
        path: '/register',
        component: require('./components/register/Register'),
    },
    {
        path: '/posts/:id',
        name: 'posts',
        component: require('./components/posts/Post'),
    },
    {
        path: '/confirm',
        name: 'confirm',
        component: require('./components/confirm/Email'),
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});