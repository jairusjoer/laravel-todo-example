import axios from 'axios';
import {
    Livewire,
    Alpine,
} from '../../vendor/livewire/livewire/dist/livewire.esm.js';
import { Todo } from './components/Todo';

/**
 * Axios
 */

declare global {
    interface Window {
        axios: typeof axios;
    }
}
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Alpine
 */

Alpine.data('todo', Todo);

Livewire.start();
