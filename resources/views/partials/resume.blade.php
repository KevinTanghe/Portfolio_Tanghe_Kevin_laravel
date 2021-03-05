<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <span>{{ $title[2]->title }}</span>
            <h2>{{ $title[2]->title }}</h2>
            <p>{{ $title[2]->sousTitle }}</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">{{ $resumeTitle[0]->head }}</h3>
                <div class="resume-item pb-0">
                    <h4>{{ $resumeTitle[0]->title }}</h4>
                    <p><em>{{ $resumeTitle[0]->sousTitle }}</em></p>
                    <ul>
                        @foreach ($resumeSumaryContent as $item)
                            <li>{{ $item->content }}</li>
                        @endforeach
                    </ul>
                </div>
                <h3 class="resume-title">{{ $resumeTitle[1]->head }}</h3>
                <div class="resume-item">
                    <h4>{{ $resumeTitle[1]->title }}</h4>
                    <h5>{{ $resumeTitle[1]->years }}</h5>
                    <p><em>{{ $resumeTitle[1]->sousTitle }}</em></p>
                    <p>{{ $resumeTitle[1]->content }}</p>
                </div>
                <div class="resume-item">
                    <h4>{{ $resumeTitle[2]->title }}</h4>
                    <h5>{{ $resumeTitle[2]->years }}</h5>
                    <p><em>{{ $resumeTitle[2]->sousTitle }}</em></p>
                    <p>{{ $resumeTitle[2]->content }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">{{ $resumeTitle[3]->head }}</h3>
                <div class="resume-item">
                    <h4>{{ $resumeTitle[3]->title }}</h4>
                    <h5>{{ $resumeTitle[3]->years }}</h5>
                    <p><em>{{ $resumeTitle[3]->sousTitle }}</em></p>
                    <ul>
                        @foreach ($resumeFirstJob as $item)
                            <li>{{ $item->content }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="resume-item">
                    <h4>{{ $resumeTitle[4]->title }}</h4>
                    <h5>{{ $resumeTitle[4]->years }}</h5>
                    <p><em>{{ $resumeTitle[4]->sousTitle }}</em></p>
                    <ul>
                        @foreach ($resumeSecondJob as $item)
                            <li>{{ $item->content }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
