const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            newTask: {
                'item': '',
                'done': false,
            }

        }
    },

    methods: {
        //funzione che chiama in GET i valori del server 
        //e li aggiunge all array todoList
        getList() {
            axios.get('server.php')
                .then(response => {
                    this.todoList = response.data;
                    console.log(this.todoList);
                })
        },
        //funzione che tramite chiamata post con axios crea una nuova
        //proprietà dentro una var data e la va a inserire nell array
        //todoList in server.php, il valore di item viene preso dall input
        //su index.php che tramite v-model lo inserisce nella proprieta
        //new task di main.js data
        addTask() {
            if (this.newTask.item != '') {
                // console.log(this.newTask);

                const data = {
                    item: this.newTask,
                }
                // console.log(this.newTask);

                axios.post('server.php', data,
                    {
                        headers: { 'Content-Type': 'multipart/form-data' }
                    }
                ).then(response => {
                    // console.log(this.newTask);

                    this.todoList = response.data;
                    this.newTask = {
                        'item': '',
                        'done': false,
                    };
                });
            }
        },

        // setDone(index) {
        //     console.log(index);
        //con questa funzione passo al back end l'index in modo da
        //poter lavorare e modificare esattamente i dati dell'elemento corrente
        // const data = {
        //     done: index,
        // }
        // console.log(this.newTask);

        // axios.post('server.php', data,
        //     {
        //         headers: { 'Content-Type': 'multipart/form-data' }
        //     }
        // ).then(response => {
        //     // console.log(this.newTask);

        //     this.todoList = response.data;

        // });

        // }
    },
    mounted() {
        //invoco al mounted la funzione che prende i dati dal server
        this.getList();
    }


}).mount('#app')