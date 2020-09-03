@if (isset($photos) & count($photos) !== 0)
    <section class="home-gallery">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-0">Customer gallery</h3>
                </div>
                <div class="col-12 home-gallery-inner">
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-12 gallery-item col-md-6 col-lg-3 overflow-hidden">
                                <a href="{{$photo->img_lg}}" class="glightbox" style="background-image:url('{{$photo->img_sm}}')">
                                    <img src="{{$photo->img_sm}}" alt="Gallery image">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" title="View more" class="btn btn-mtc-primary">View more</a>
                </div>
            </div>
        </div>
    </section>
@endif