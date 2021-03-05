<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <span>{{$title[5]->title}}</span>
            <h2>{{$title[5]->title}}</h2>
            <p>{{$title[5]->sousTitle}}</p>
        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="{{$contactTitle[0]->icon}}"></i>
                            <h3>{{$contactTitle[0]->title}}</h3>
                            <div class="social-links">
                                @foreach ($contactSocialLink as $item)
                                    <a href="{{$item->lien}}" class="{{$item->name}}"><i class="{{$item->icon}}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="{{$contactTitle[1]->icon}}"></i>
                            <h3>{{$contactTitle[1]->title}}</h3>
                            @foreach ($contactEmailLink as $item)
                                <a href="mailto:{{$item->mail}}">{{$item->mail}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="{{$contactTitle[2]->icon}}"></i>
                            <h3>{{$contactTitle[2]->title}}</h3>
                            @foreach ($contactCallLink as $item)
                                <a href="tel:{{$item->phone}}">{{$item->phone}}</a>  
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="6" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
