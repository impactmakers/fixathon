<template>
    <div class="row text-center pt-2 justify-content-center">
        <div v-for='idea in ideas' class='col-4 col-sm-3 col-md-4 col-lg-2 mb-3'>
            <div class='card text-center p-3 shadow-sm shadow-lg--hover'>
                {{idea}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
          return {
            ideas:[
                'Make easier for everybody to move to renowable energy',
                'Create a marketplace for CO2',
                'Improve deliveries inside cities',
                'Reuse food waste',
                'Help protect & extend mangrooves',
                'Raise awareness about Climate Emergency',
                'create platforms for reforestation',
                'help bees',
                'drones that plant trees'
            ]
          }
        }        
    }
</script>
