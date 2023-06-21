<template>
    <div class="todoListContainer">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <addItemForm/> 
        </div>
        <listView :items="items"/>
    </div>
</template>

<script>
import addItemForm from "./addItemForm.vue";
import listView from "./listView.vue";
export default {
    components: {
     addItemForm,
     listView
    },
    data: function () {
        return {
            items: []
        }
    },
    methods: {
        getList() {
            axios.get('api/tasks')
            .then( response => {
                this.item = response.data
            })
            .catch( error => {
                console.log(error)
            })
        }
    },
    created() {
        this.getList();
    },
}
</script>

<style scoped>
.todoListContainer {
    width: 350px;
    margin:auto;
}

.heading {
    background: white;
    padding: 10px;
}

#title {
    text-align: center;
}

</style>
