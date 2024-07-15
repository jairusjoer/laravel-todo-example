export const Todo = () => ({
    edit: false,

    focus() {
        let { input } = this.$refs;

        this.edit = true;

        this.$nextTick(() => {
            input.focus();
            input.select();
        });
    },

    blur() {
        let { input, output } = this.$refs;

        output.textContent = input.value;

        this.edit = false;
    },
});
