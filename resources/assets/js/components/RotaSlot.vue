<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <rota-table></rota-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import RotaTable from '../app/rota/components/RotaTable.vue'
    export default {
        components: {
            'rota-table' : RotaTable
        }
    }
</script>
