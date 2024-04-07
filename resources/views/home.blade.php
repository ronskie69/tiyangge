@extends('layouts.layout')

@section('content')

<div class="container-fluid my-4">
    <div class="row p-0 narrow g-2">
        <div class="col-md-8 col-sm-12">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="item1">
                    <img src="{{ asset('images/discount1.jpg') }}" alt="">
                </div>
                <div class="item1">
                    <img src="{{ asset('images/discount2.jpg') }}" alt="">
                </div>
                <div class="item1">
                    <img src="{{ asset('images/discount3.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <div class="item2">
                        <img src="{{ asset('images/promo1.jpg') }}" alt="">
                    </div>
                    <div class="item2">
                        <img src="{{ asset('images/promo2.png') }}" alt="">
                    </div>
                    <div class="item2">
                        <img src="{{ asset('images/promo3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card p-2 shadow-0 border-0">
                    <div class="card-header d-flex justify-content-between border-0">
                        <strong>Flash Sale</strong>
                        <span class="timer text-warning"><strong></strong></span>
                    </div>
                    <div class="card-body p-2">
                        <div class="owl-carousel owl-carousel3 owl-theme">
                            <div class="item3">
                                <img src="{{ asset('images/ginamos.jpg') }}" alt="">
                                <div class="item-caption">
                                    <div>
                                        <span><p class="me-2 text-warning"><i class="fa-solid fa-peso-sign me-1"></i>1,699.00</p></span>
                                        <small>2,499.00</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item3">
                                <img src="{{ asset('images/durian.jpg') }}" alt="">
                                <div class="item-caption">
                                    <div>
                                        <span><p class="me-2 text-warning"><i class="fa-solid fa-peso-sign me-1"></i>745.00</p></span>
                                        <small>1,299.00</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item3">
                                <img src="{{ asset('images/latundan.webp') }}" alt="">
                                <div class="item-caption">
                                    <div>
                                        <span><p class="me-2 text-warning"><i class="fa-solid fa-peso-sign me-1"></i>500.00</p></span>
                                        <small>645.00</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item3">
                                <img src="{{ asset('images/papaya.webp') }}" alt="">
                                <div class="item-caption">
                                    <div>
                                        <span><p class="me-2 text-warning"><i class="fa-solid fa-peso-sign me-1"></i>500.00</p></span>
                                        <small>945.00</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    let opts = { 
        loop:true,
        autoplay: true,
        margin:10,
        responsiveClass:true,
        items: 1,
        dots: false,
        nav: false,
    };
    $('.owl-carousel1').owlCarousel({
        ...opts,
        smartSpeed: 600,   
    })
    $('.owl-carousel2').owlCarousel({
        ...opts,
        smartSpeed: 1200,
        animateOut: 'fadeOut'
    })
    $('.owl-carousel3').owlCarousel({
        loop:true,
        autoplay: true,
        margin:10,
        responsiveClass:true,
        items: 2,
        dots: true,
        nav: false,
    })

    var countDownDate = new Date("May 22, 2024 11:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        $('.timer strong').html(days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ");

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            $('.timer strong').html("EXPIRED");
        }
    }, 1000);
</script>
@endsection