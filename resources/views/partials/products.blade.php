	    	
<!-- PRODUCTS -->
<section class="container products__container" id="products">
  @if(isset($loadAll))
  	<div class="products-page-top"></div>
  @endif
  <products-section @if(isset($loadAll)) v-bind:load-all='true' @endif></products-section>
</section>
<div class="border-img__bot border-img__bot--gray-light"></div>
<!-- END PRODUCTS -->