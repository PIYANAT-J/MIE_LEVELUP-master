@extends('layout\app')
@section('section')
<section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Testimonials</h2>
            </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
        <div>
            <div class="testimonial">
                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>

                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="dist/images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>John Smith</p>
                </figure>
            </div>
        </div>
        <div>
            <div class="testimonial">
                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="dist/images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>Christine Aguilar</p>
                </figure>
            </div>
        </div>
        <div>
            <div class="testimonial">
                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="dist/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>Robert Spears</p>
                </figure>
            </div>
        </div>
        <div>
            <div class="testimonial">
                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="dist/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>Bruce Rogers</p>
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="site-section" id="about-section">
    <div class="container">
        <div class="row justify-content-center mb-3" data-aos="fade-up">
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
                <div class="col-lg-6 mb-2">
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-2 mb-2">
                    <button>Download</button>
                    
                </div>
            </div>

            <div class="item hot row">
                <div class="col-lg-4 mb-2" data-aos="fade" data-aos="fade-up" data-aos-delay="">
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