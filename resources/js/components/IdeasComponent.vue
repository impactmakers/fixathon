<template>
    <div class="row text-center pt-2 justify-content-center">
        <div v-for='idea in ideas' class='col-4 col-sm-3 col-md-4 col-lg-2 mb-3 min-height-100'>
            <div class='card text-center p-3 shadow-sm shadow-lg--hover min-height-100' style='min-height: 150px;'>
                <p class='my-auto'>{{idea}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
          return {
            ideas:[
                'Make easier to move to renowable energy',
                'Create a marketplace for CO2',
                'Improve deliveries inside cities',
                'Reuse food waste',
                'Help protect & extend mangrooves',
                'Raise awareness about Climate Emergency',
                'create platforms for reforestation',
                'help bees',
                'drones that plant trees',
                'technology to detect water leaks',
                'Green your commute',
                'ways to invest in coral saving',
                'enable recycling and conversion of food waste',
                'development of green roofs',
                'climate education projects',
            ]
          }
        }        
    }
</script>
