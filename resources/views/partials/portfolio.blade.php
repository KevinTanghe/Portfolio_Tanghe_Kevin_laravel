<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            @foreach ($portfolioTitle as $item)
                <span>{{$item->ombreTitle}}</span>
                <h2>{{$item->title}}</h2>
                <p>{{$item->sousTitle}}</p>
            @endforeach
        </div>

        <div class="row portfolio-container bg-grey">
            @foreach ($portfolioGallery as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="{{asset($item->img)}}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>{{$item->title}}</h4>
                        <a href="{{asset($item->img)}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="{{$item->title}}"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
