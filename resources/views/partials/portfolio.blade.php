<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <span>{{$title[4]->title}}</span>
            <h2>{{$title[4]->title}}</h2>
            <p>{{$title[4]->sousTitle}}</p>
        </div>

        <div class="row portfolio-container bg-grey">
            @foreach ($portfolioGallery as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="{{asset('storage/'.$item->img)}}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>{{$item->title}}</h4>
                        <a href="{{asset('storage/'.$item->img)}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="{{$item->title}}"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
