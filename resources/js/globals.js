import axios from "axios";

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const actions = () => {
    const buttons = document.querySelectorAll("button[action]");

    buttons.forEach((button) => {
        button.addEventListener("click", async () => {
            const action = button.getAttribute("action");

            try {
                await axios.post(action);
                location.reload();
            } catch (error) {
                console.error(error);
            }
        });
    });
};

actions();
