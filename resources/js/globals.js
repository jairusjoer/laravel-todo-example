import axios from "axios";
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import { Todo } from './components/Todo';

/**
 * Axiox
 */
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Alpine
 */

Alpine.data('todo', Todo);

Livewire.start()