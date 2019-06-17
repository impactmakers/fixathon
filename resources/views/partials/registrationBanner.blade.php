<!-- REGISTER SECTION -->
<section class="bg-primary py-5 px-5 text-white bg-gradient-success">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 text-center col-md-7">
        <h2>Have an idea that you like to enter? Join us!</h2>
      </div>
      <div class='col-12 text-center col-md-5 mt-4 mt-md-0 px-0'>
       <form action="/register" method="POST" name="registerUser" class="registerUserForm">
          <input type="text" placeholder="Join with email" name="email" class="col-6 form-control mr-1 col-md-12 col-lg-6" style="display:inline-block;" required="">
          <button type="submit" class="btn btn-success btn-inner--text col-3 col-md-12 mt-md-2 col-lg-5 mt-lg-0">Register</button>
          <div class="form-error" col-8=""></div>      
        </form> 
      </div>
    </div>
  </div>
</section>
<!-- END REGISTER SECTION -->