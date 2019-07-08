<template>
    <div class="row text-center pt-2 justify-content-center">
        <div v-for='participant in participants' class='col-4 col-sm-3 col-md-4 col-lg-2 mb-3 min-height-100'>
            <div class='card text-center p-3 shadow-sm shadow-lg--hover min-height-100' style='min-height: 150px;'>
                <p class='my-auto'>{{participant}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ 'participants' ]
    }
</script>