import Dashboard from '../views/Dashboard';
import CustomerAdd from '../views/CustomerAdd';
import CustomerFind from '../views/CustomerFind';
import ServiceFind from '../views/ServiceFind';
import ServiceAdd from '../views/ServiceAdd';
import Finances from '../views/Finances';
import Stats from '../views/Stats';
import Task from '../views/Task';
import Profile from '../views/Profile';
import Users from '../views/Users';

import Service from '../views/Service';
import ServiceProfile from '../views/ServiceProfile';

export default
    [
        { path: '/', component: Dashboard },
        { path: '/customer/add', component: CustomerAdd },
        { path: '/customer/find', component: CustomerFind },
        { path: '/service', component: Service,
            children: [
                { path:'find', component: ServiceFind },
                { path:'add', component: ServiceAdd },
                { path:':type/:id', component: ServiceProfile, props:true }
            ]
        },
        { path: '/finances', component: Finances },
        { path: '/stats', component: Stats },
        { path: '/task', component: Task },
        { path: '/profile', component: Profile },
        { path: '/users', component: Users},
    ];

