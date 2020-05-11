@extends('layout.navbar')
@section('navbar')
<br><br><br><br>
<!-- <section class="site-section cta-big-image"> -->
    <div class="container">
        <!-- <div class="row mb-1"> -->
            <!-- <div class="col-12 text-center">
                <h2 class="section-title mb-3">Testimonials</h2>
            </div> -->
        <!-- </div>
    </div> -->
    <div class="slide-one-item home-slider owl-carousel">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <figure class="circle-bg">
                    <img src="{{ asset('dist/images/hero_1.jpg') }}" alt="Image" class="img-fluid rounded">
                </figure>
            </div>
            <div class="col-lg-5 ml-auto">
                <div class="mb-4">
                    <h3 class="h3 mb-4 text-black">For the next great business</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.</p>
                    <!-- <img src="{{ asset('dist/images/hero_1.jpg') }}" alt="Image" class="img-fluid rounded" width="300" height="200"> -->
                </div>
                    
                <div class="mb-4">
                    <ul class="list-unstyled ul-check success">
                        <li>Officia quaerat eaque neque</li>
                        <li>Possimus aut consequuntur incidunt</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                    </ul>
                    <!-- <img src="{{ asset('dist/images/hero_1.jpg') }}" alt="Image" class="img-fluid rounded" width="300" height="200"> -->
                
                </div>

                <p><a href="#contact-section" class="smoothscroll btn btn-primary">Get In Touch</a></p>

                
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <figure class="circle-bg">
                    <img src="{{ asset('dist/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-5 ml-auto">
                <div class="mb-4">
                    <h3 class="h3 mb-4 text-black">For the next great business</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.</p>
                </div>
                
                <div class="mb-4">
                    <ul class="list-unstyled ul-check success">
                        <li>Officia quaerat eaque neque</li>
                        <li>Possimus aut consequuntur incidunt</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                    </ul>
                
                </div>

                <p><a href="#contact-section" class="smoothscroll btn btn-primary">Get In Touch</a></p>

            </div>
        </div>
    </div>
    <!-- </div> -->
    </div>
<!-- </section> -->

<section class="site-section" id="about-section">
    <div class="container">
        <div class="row justify-content-center mb-4" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <button class="btn btn-primary active" data-filter="*">ทั้งหมด</button>
                <button class="btn btn-primary" data-filter=".news">มาใหม่</button>
                <button class="btn btn-primary" data-filter=".hot">ยอดนิยม</button>
            </div>
        </div>
        <div id="posts" class="row">
            <div class="item news row">
                <div class="col-lg-4 mb-2" data-aos="fade" data-aos="fade-up" data-aos-delay="">
                    <img src="section/picture_game/csgo.jpg" alt="Image" class="img-fluid rounded" width="300" height="200">
                </div>
                <div class="col-lg-6 mb-2" data-aos="fade" data-aos="fade-up" data-aos-delay="100">
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-2 mb-2" data-aos="fade" data-aos="fade-up" data-aos-delay="200">
                    <button>Download</button>
                    
                </div>
            </div>

            <div class="item hot row">
                <div class="col-lg-4 mb-2">
                    <img src="section/picture_game/fifa.jpg" alt="Image" class="img-fluid rounded" width="300" height="200">
                </div>
                <div class="col-lg-6 mb-2">
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-2 mb-2">
                    <button>Download</button>
                    
                </div>
                
            </div>
            <div class="item news row">
                <div class="col-lg-4 mb-2">
                    <img src="section/picture_game/csgo.jpg" alt="Image" class="img-fluid rounded" width="300" height="200">
                </div>
                <div class="col-lg-6 mb-2" data-aos="fade" data-aos="fade-up" data-aos-delay="100">
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-2 mb-2" data-aos="fade" data-aos="fade-up" data-aos-delay="200">
                    <button>Download</button>
                    
                </div>
            </div>

            <div class="item hot row">
                <div class="col-lg-4 mb-2">
                    <img src="section/picture_game/fifa.jpg" alt="Image" class="img-fluid rounded" width="300" height="200">
                </div>
                <div class="col-lg-6 mb-2">
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-2 mb-2">
                    <button>Download</button>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection