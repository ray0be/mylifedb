/**
 * components.js
 */

const routes = [
    {
        path: '/',
        component: {template: '#Page-Home'}
    },
    {
        path: '/settings',
        component: {template: '#Page-Settings'}
    },
    {
        path: '/create-collection',
        component: {template: '#Page-AddCollection'}
    },
    {
        path: '/credits',
        component: {template: '#Page-Credits'}
    }
];

const router = new VueRouter({routes});

const app = new Vue({
    router: router,
    data: {
        db: db_data,
        other: other_data
    },
    methods: {
        last_save_update: function() {
            var now = (new Date()).getTime();
            var when = this.db.stats.last_save;
            var elapsed_time = (now - when) / 1000;
            var msg = 'Saved ';

            if (elapsed_time < 10) { // < 10 sec
                msg += 'just now';
            }
            else if (elapsed_time < 60) { // less than a minute
                msg += parseInt(elapsed_time) + 's ago';
            }
            else if (elapsed_time < 3600) { // < 1 hour
                msg += parseInt(elapsed_time / 60) + 'm ago';
            }
            else if (elapsed_time < 86400) { // < 1 day
                msg += parseInt(elapsed_time / 3600) + 'h ago';
            }
            else {
                msg += parseInt(elapsed_time / 86400) + 'd ago';
            }

            other_data.last_save_message = msg;
        }
    }
}).$mount('#root');

app.last_save_update();
setInterval(app.last_save_update, 30000);