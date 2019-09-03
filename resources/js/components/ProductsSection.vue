<template>
  <div class="inner products__inner">
    <div class="centered__header products__header">
      <h1 class="brush__title brush__title--large centered__title products__title">
        <span v-if="totalProducts !== 0">{{totalProducts}}</span> Products
      </h1>
      <p class="centered__intro products__intro">
        Check out what our participants built for The Climate Fixathon.
        <span v-if="!loadAll">
          <a href="entries">View all</a>
        </span>
      </p>
    </div>
    <products-component @totals="onTotalProducts" v-bind:load-all="loadAll"></products-component>
  </div>
</template>

<script>
export default {
  props: {
    loadAll: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      totalProducts: 0
    };
  },
  methods: {
    onTotalProducts(value) {
      this.totalProducts = value;
      this.totalProducts--;
    }
  }
};
</script>