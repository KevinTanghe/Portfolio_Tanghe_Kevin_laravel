<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            @foreach ($resumeTitle as $item)
                <span>{{$item->ombreTitre}}</span>
                <h2>{{$item->titre}}</h2>
                <p>{{$item->sousTitre}}</p>
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-6">
                @foreach ($resumeSumary as $item)
                    <h3 class="resume-title">{{$item->mainTitre}}</h3>
                    <div class="resume-item pb-0">
                        <h4>{{$item->titre}}</h4>
                        <p><em>{{$item->description}}</em></p>
                @endforeach
                        <ul>
                            @foreach ($resumeSumaryContent as $item)
                                <li>{{$item->content}}</li>
                            @endforeach
                        </ul>
                    </div>
                
                @foreach ($resumeEducation as $item)
                    <h3 class="resume-title">{{$item->mainTitle}}</h3>
                @endforeach    
                @foreach ($resumeEducation as $item)
                    <div class="resume-item">
                        <h4>{{$item->title}}</h4>
                        <h5>{{$item->years}}</h5>
                        <p><em>{{$item->lieu}}</em></p>
                        <p>{{$item->content}}</p>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                @foreach ($resumeFirstPro as $item)
                    <h3 class="resume-title">{{$item->mainTitle}}</h3>
                    <div class="resume-item">
                        <h4>{{$item->title}}</h4>
                        <h5>{{$item->years}}</h5>
                        <p><em>{{$item->lieu}}</em></p>
                        <ul>
                            @foreach ($resumeFirstJob as $item)
                                <li>{{$item->content}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                <div class="resume-item">
                    @foreach ($resumeSecondPro as $item)
                        <h4>{{$item->title}}</h4>
                        <h5>{{$item->years}}</h5>
                        <p><em>{{$item->lieu}}</em></p>
                    @endforeach
                    <ul>
                        @foreach ($resumeSecondJob as $item)
                            <li>{{$item->content}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
