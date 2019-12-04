<template>
    <div class='input-group'>
        <date-picker v-model="date" :config="options" :id="id"></date-picker>
    </div>
</template>

<script>
import datePicker from 'vue-bootstrap-datetimepicker';
import { isString } from 'util';

export default {
    props: {
        defaultDate: { type: String, required: false },
        id: { type: String, required: true }
    },
    data () {
        return {
            date: new Date(),
            options: {
                format: 'MM/DD/YYYY h:mm:ss',
                useCurrent: false,
                showClear: true,
                showClose: true,
                collapse: true,
            }
        }
    },
    components: {
        datePicker
    },
    methods: {
        defaultDateToString: function () {
            if(isString(this.$props.defaultDate)) {
                this.date =  new Date(this.$props.defaultDate)
            }
        }
    },
    mounted() {
        this.defaultDateToString()
    }
}
</script>
