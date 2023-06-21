<template>
    <div class="addItem">
        <input type="text" v-model="item.name"/>
        <font-awesome-icon
        icon="plus-square"
        @click="addItem()"
        :class="[item.name ? 'active' : 'inactive', 'plus']"
        />
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data: function() {
        return {
            item: {
                name: ""
            }
        }
    },
    methods: {
        addItem() {
            if (this.item.name == '') {
                return;
            }

            axios.post('api/tasks/store', {
                item: this.item
            }).then(response => {
                if (response.status == 201) {
                    this.item.name == "";
                }
        }).catch (error => {
            console.log(error);
        })
        }
    }
}
</script>

<style>
.addItem {
    display: flex;
    justify-content: center;
    align-items: center;
}
input {
    background: white;
    border: 0px;
    outline: none;
    padding: 5px;
    margin-right: 10px;
    width: 100%;
}

.plus {
    font-size: 20px;
}
.active {
    color:green
}
.inactive {
    color:brown
}
</style>
