<section id="hero">
    <div class="hero-container">
        {{$hero[0]->titre}}
        @foreach ($hero as $item)
            <h1>{{$item->titre}}</h1>
            <h2>{{$item->sousTitre}}</h2>
        @endforeach
        <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
</section>
