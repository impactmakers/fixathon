




<template>
	<div class="inner products__inner">
	    <div class="centered__header products__header">
	      <h1 class="brush__title brush__title--large centered__title products__title">
	        <span v-if='totalProducts !== 0'>{{totalProducts}}</span> Products
	      </h1>
	      <p class="centered__intro products__intro">
	        Check out what participants are building for The Climate Fixathon.
	      </p>
	    </div>      
	    <products-component @totals="onTotalProducts"></products-component>           
	</div>
</template>

<script>
export default {
  data() {
    return {
      totalProducts: 0
    };
  },
  methods: {
    onTotalProducts (value) {
      this.totalProducts = value;
      this.totalProducts--;
    }
  }
};
</script>