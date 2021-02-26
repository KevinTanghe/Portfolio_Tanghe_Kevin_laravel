<footer id="footer">
    <div class="container">
        @foreach ($footerTitle as $item)
            <h3>{{$item->title}}</h3>
        @endforeach
        <div class="social-links">
            @foreach ($footerLink as $item)
                <a href="{{$item->lien}}" class="{{$item->name}}"><i class="{{$item->icon}}"></i></a>
            @endforeach
        </div>
        @foreach ($footerCopyright as $item)
            <div class="copyright">{{$item->copyright}}<strong><span>{{$item->name}}</span></strong>{{$item->droit}}</div>
            
        @endforeach

    </div>
</footer>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
