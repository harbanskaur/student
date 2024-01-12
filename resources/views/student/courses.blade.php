@include('student.layout.header')
        
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <h1><strong>Courses</strong></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          {{-- <div class="row mb-5 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <form action="#" class="d-flex search-form">
                <span class="icon-"></span>
                <input type="search" class="form-control mr-2" placeholder="Search subjects">
                <input type="submit" class="btn btn-primary px-4" value="Search">
              </form>
            </div>
            <div class="col-lg-6 text-lg-right">
              <div class="d-inline-flex align-items-center ml-auto">
              <span class="mr-4">Share:</span>
              <a href="#" class="mx-2 social-item"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2 social-item"><span class="icon-twitter"></span></a>
              <a href="#" class="mx-2 social-item"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div> --}}
          <div class="row  ">
            <div class="col-12">
              <div class="heading mb-4">
                <span class="caption">ALL</span>
                <h2>Tutorials</h2>
              </div>
            </div>
            <div class="col-lg-8 tutorials">
              <div class="d-flex tutorial-item mb-4 cards">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('student/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Learning React Native</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                  
                  <p class="mb-0">
                    <span class="brand-react h5"></span>
                    
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>
                  
                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>

              <div class="d-flex tutorial-item mb-4 cards">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('student/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Learning Angular 101</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>

                  <p class="mb-0">
                    <span class="brand-angular h5"></span>
                    <span class="brand-javascript h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>
                  
                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>

              <div class="d-flex tutorial-item mb-4 cards">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('student/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Learning Photoshop</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                  <p class="mb-0">
                    <span class="brand-adobephotoshop h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>
                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>

              <div class="d-flex tutorial-item mb-4 cards">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset('student/images/img_4.jpg')}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">Advance Illustrator</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                  <p class="mb-0">
                    <span class="brand-adobeillustrator h5"></span>
                  </p>
                  <p class="meta">
                    <span class="mr-2 mb-2">1hr 24m</span>
                    <span class="mr-2 mb-2">Advanced</span>
                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                  </p>
                  <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
@include('student.layout.footer')