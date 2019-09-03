<template>
  <div>
    <ul class="products__list" v-if="totalProducts !== 0">
      <li class="products__judge" v-for="product in filteredProducts">
        <img
          :alt="product.name"
          :class="[product.icon ? '' : 'no-product-icon', 'judge__img']"
          :src="product.icon || '/img/icons/question.png'"
          @error="imageLoadError"
        />
        <h3>{{product.name}}</h3>
        <p v-if="product.description.length<160">{{ product.description }}</p>
        <p v-else>{{ product.description.substring(0,160)+"..." }}</p>
        <ul class="product-members">
          <li v-for="member in product.teamMembers">
            <a
              :href="'https://getmakerlog.com/@'+member.username"
              target="_blank"
              style="margin-right:0px;"
            >
              <img
                :src="'img/avatars/'+member.username"
                :alt="member.username"
                class="product-member"
                @error="loadAvatarFromUrl($event,member.avatar)"
              />
            </a>
          </li>
        </ul>
        <a :href="product.website" :title="product.name" target="_blank" class="intro__next-cta">
          <button type="submit" class="btn-simple btn-sm btn-green btn-full-width">Visit Website</button>
        </a>
        <a
          :href="'https://getmakerlog.com/products/'+product.slug"
          :title="product.name"
          target="_blank"
          class="products__secondary-cta"
        >View on Makerlog</a>
      </li>
    </ul>

    <div v-if="!loadAll" style="text-align:center;margin-top:50px;width:100%;">
      <button
        style="margin:0px auto;"
        class="btn-simple btn-md btn-white-blue btn-mobile"
        v-if="more"
        @click="loadMore()"
      >Load More</button>

      <div class="intro__secondary-cta">
        <a href="/entries">View All Products</a>
      </div>
    </div>

    <div class="centered__intro participants__intro" v-if="totalProducts === 0">
      <b>No products yet. Create the first one!</b>
      <br />
      <br />

      <a class="intro__cta" href="https://getmakerlog.com/events/the-climate-fixathon/">
        <button
          type="submit"
          class="btn-simple btn-lg btn-white-blue btn-mobile centered__intro"
        >View the Event</button>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["loadAll"],
  data() {
    return {
      products: [],
      totalProducts: 0,
      page: 0,
      loadingProducts: false,
      filteredML: false
    };
  },
  methods: {
    loadMore: function(event) {
      this.loadingProducts = true;
      this.page = this.page + 1;
      console.log(this.page);
      axios
        .get("products/" + this.page)
        .then(resp => {
          this.products = this.products.concat(resp.data.results);
          this.totalProducts = resp.data.count;
          this.loadingProducts = false;
          this.getTeamMembers();
        })
        .catch(resp => {
          console.log("Could not load more products");
          this.loadingProducts = false;
        });
    },
    imageLoadError: function(event) {
      console.log("Image failed to load");
      //event.target.src = "./img/icons/question.png";
    },
    loadAvatarFromUrl: function(event, url) {
      event.target.src = url;
    },
    getTeamMembers: function() {
      this.products.map(p => {
        if (typeof p.teamMembers === "undefined" || p.teamMembers === null) {
          axios
            .get("teamMembers/" + p.slug)
            .then(resp => {
              Vue.set(p, "teamMembers", resp.data);
            })
            .catch(resp => {
              console.log("Could not load team members");
            });
        }
      });
    }
  },
  mounted() {
    axios
      .get("products")
      .then(resp => {
        this.products = resp.data.results;
        this.totalProducts = resp.data.count;
        this.$emit("totals", this.totalProducts);
        if (!this.loadAll) {
          this.getTeamMembers();
        }
      })
      .then(() => {
        if (this.loadAll == true) {
          this.loadMore(null);
        }
      
        if (this.loadAll == true) {
          this.loadMore(null);
        }
      })
      .catch(resp => {
        console.log("Could not load products" + resp);
      });
  },
  computed: {
    more: function() {
      return this.totalProducts > this.page * 20;
    },
    filteredProducts: function() {
      if (!this.filteredML) {
        this.products = this.products.filter(p => {
          if (p.name === "MakerlogApp") {
            this.filteredML = true;
            this.totalProducts--;
          }
          return p.name !== "MakerlogApp";
        });
      }

      return this.products;
    }
  }
};
</script>