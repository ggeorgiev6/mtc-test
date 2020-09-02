{{-- {{dd($testimonials)}} --}}
<section class="home-testimonials">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="home-testimonials-content">
                    <p class="text-complementary">Quality Craftmanship from build to delivery</p>
                    <h3>Over 35 years experience designing handmade kitchens</h3>
                </div>
            </div>
            <div class="col-8 offset-2 col-md-6 offset-md-3 home-testimonials-slider-inner">
                <div class="home-testimonials-slider">
                    @foreach ($testimonials as $testimonial)
                        <div class="slide">
                            <p class="message">{{$testimonial->message}}</p>
                            <p class="message">{{$testimonial->user}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-10 offset-md-1">
                <div class="home-testimonials-slider-controls d-flex justify-content-between">
                    <div class="control previous"></div>
                    <div class="control next"></div>
                </div>
            </div>
        </div>
    </div>
</section>