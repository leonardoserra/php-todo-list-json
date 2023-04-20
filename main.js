const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: []
        }
    },
    methods: {
        getList() {
            axios.get('server.php')
                .then(response => {
                    this.todoList = response.data;
                    console.log(this.todoList);
                })
        }
    },
    mounted() {
        this.getList();
    }

}).mount('#app')