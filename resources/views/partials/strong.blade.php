<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <span>{{$title[3]->title}}</span>
            <h2>{{$title[3]->title}}</h2>
            <p>{{$title[3]->sousTitle}}</p>
        </div>
        
        <div class="row">
            @foreach ($strongCard as $item)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="{{$item->icon}}"></i></div>
                        <h4 class="title"><a href="">{{$item->title}}</a></h4>
                        <p class="description">{{$item->content}}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
