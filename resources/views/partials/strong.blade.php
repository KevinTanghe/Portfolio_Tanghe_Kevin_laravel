<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            @foreach ($strongTitle as $item)
                <span>{{$item->ombreTitle}}</span>
                <h2>{{$item->title}}</h2>
                <p>{{$item->sousTitle}}</p>
            @endforeach
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
