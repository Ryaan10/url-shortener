import Profile from './components/ProfileComponent.vue'
import Dashboard from './components/DashboardComponent.vue'
import Edit from './components/EditComponent.vue'
import BaseTimer from './components/BaseTimer.vue'

export const routes = [
    {
        path: '/profile',
        name: 'Profile',
        component: Profile
    },
    {
        path: '/',
        name: 'Dashboard',
        component: Dashboard
    },
    {
        path: '/edit/:id',
        name: 'Edit',
        component: Edit
    },
    {
        path: '/base_timer',
        name: 'Timer',
        component: BaseTimer
    }


]