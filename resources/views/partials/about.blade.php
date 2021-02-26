<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            @foreach ($aboutTitle as $item)
                <span>{{$item->ombreTitre}}</span>
                <h2>{{$item->titre}}</h2>
                <p>{{$item->sousTitre}}</p>
            @endforeach
        </div>

        <div class="row">
            <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            </div>
            <div class="col-lg-8 d-flex flex-column align-items-stretch">
                <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                @foreach ($aboutDescription as $item)
                                    <li><i class="icofont-rounded-right"></i> <strong>{{$item->description}}</strong> {{$item->content}}</li>
                                    @if ($loop->iteration %4 == 0)
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-n4">
                        @foreach ($aboutProject as $item)
                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="{{$item->icon}}" style="color: {{$item->color}}"></i>
                                    <span data-toggle="counter-up">{{$item->number}}</span>
                                    <p><strong>{{$item->description}}</strong> {{$item->content}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- End .content-->

                <div class="skills-content pl-lg-4">
                    @foreach ($aboutProgress as $item)
                        <div class="progress">
                            <span class="skill">{{$item->language}} <i class="val">{{$item->pourcentage}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->pourcentage}}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
