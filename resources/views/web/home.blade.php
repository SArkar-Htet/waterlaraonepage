@extends('layouts.master')
@section('content')
    <!-- topmenubar -->
  
  <section class="masthead p-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-5 py-5">
          <h1 class="f-ab text-danger">#WaterLara</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="#" class="btn btn-default color-main text-white hvr-grow">More detail </a>
        </div>
        <div class="col-md-7">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/shopping.svg" class="d-block " alt="..." style="width:550px; height:400px;">
              </div>
              <div class="carousel-item">
                <img src="images/complete.svg" class="d-block " alt="..." style="width:550px; height:400px;">
              </div>
              <div class="carousel-item">
                <img src="images/ladychoice.svg" class="d-block " alt="..." style="width:550px; height:400px;">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="f-ab text-center my-3 text-color-main">Choose Your Items</h1>
        </div>
        <div class="col-md-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Shoes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Clothes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Spot Wear</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-2" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="card-deck">
                <div class="card">
                  <img src="images/shoes/item (1).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
                <div class="card">
                  <img src="images/shoes/item (2).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
                <div class="card">
                  <img src="images/shoes/item (3).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="card-deck">
                <div class="card">
                  <img src="images/shoes/item (6).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
                <div class="card">
                  <img src="images/shoes/item (7).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
                <div class="card">
                  <img src="images/shoes/item (8).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="card-deck">
                <div class="card">
                  <img src="images/shoes/item (3).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
                <div class="card">
                  <img src="images/shoes/item (4).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  
                  </div>
                  <div class="card-footer">
                    <a href="#" class=" a btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="a btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
                <div class="card">
                  <img src="images/shoes/item (5).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-color-main">Product Title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-sm btn-default color-main w-100 mb-1 text-white"><i class="fas fa-shopping-cart text-white mr-5"></i> Shop Now!</a>
                    <a href="#" class="btn btn-sm btn-danger w-100 text-white"><i class="fas fa-money-check-alt mr-5"></i> Check Price</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-success py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-4">
          <h1 class="f-ab text-center text-white ">They said..</h1>
        </div>
        <div class="card-columns">
          <div class="card">
            <div class="text-center">
              <img src="images/user1.svg" class="card-img-top w-50" alt="..." >
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title that wraps to a new line</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
          <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">
                <small class="text-muted">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
              </footer>
            </blockquote>
          </div>
          <div class="card">
            <div class="text-center">
              <img src="images/user2.svg" class="card-img-top w-50" alt="..." >
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card bg-primary text-white text-center p-3">
            <blockquote class="blockquote mb-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
              <footer class="blockquote-footer text-white">
                <small>
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
              </footer>
            </blockquote>
          </div>
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img src="images/user3.svg" class="card-img-top" alt="...">
          </div>
          <div class="card p-3 text-right">
            <blockquote class="blockquote mb-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">
                <small class="text-muted">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
              </footer>
            </blockquote>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection