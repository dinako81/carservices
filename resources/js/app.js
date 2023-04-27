import 'bootstrap';
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const randColor = _ => {
    return '#' + Math.floor(Math.random() * 16777215).toString(16).padEnd(6, '0');
}

document.querySelectorAll('.--random--color')
    .forEach(div => div.style.backgroundColor = randColor());