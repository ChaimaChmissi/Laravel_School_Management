<x-AdminLayout>
    <x-slot name="header" class="main">
        <main slot="main">
            <br>
            <br>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
            
            <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="container">
                    <div class="row">
                        <!-- counter -->
                        <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                            <i class="fas fa-user medium-icon"></i>
                            <span id="anim-number-pizza" class="counter-number"></span>
                            <span class="timer counter alt-font appear" data-to="980" data-speed="7000">2800</span>
                            <p class="counter-title">Students</p>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                            <i class="fas fa-heart medium-icon"></i>
                            <span class="timer counter alt-font appear" data-to="980" data-speed="7000">980</span>
                            <span class="counter-title">Feedbacks</span>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                            <i class="fas fa-book medium-icon"></i>
                            <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span>
                            <span class="counter-title">Courses</span>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                            <i class="fas fa-award medium-icon"></i>
                            <span class="timer counter alt-font appear" data-to="550" data-speed="7000">550</span>
                            <span class="counter-title">Awards</span>
                        </div>
                        <!-- end counter -->
                    </div>
                </div>
            </section>
        
</x-AdminLayout>

<style>
    .counter-section i {
        display: block;
        margin: 0 0 10px;
    }

    .counter-section span.counter {
        font-size: 40px;
        color: #7963e5;
        line-height: 60px;
        display: block;
        font-family: "Oswald", sans-serif;
        letter-spacing: 2px;
    }

    .counter-title {
        font-size: 12px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .counter-icon {
        top: 25px;
        position: relative;
    }

    .counter-style2 .counter-title {
        letter-spacing: 0.55px;
        float: left;
    }

    .counter-style2 span.counter {
        letter-spacing: 0.55px;
        float: left;
        margin-right: 10px;
    }

    .counter-style2 i {
        float: right;
        line-height: 26px;
        margin: 0 10px 0 0;
    }

    .counter-subheadline span {
        float: right;
        color: #7963e5;
    }

    .medium-icon {
        font-size: 40px !important;
        margin-bottom: 15px !important;
    }

    .container {
        margin-top: 200px;
    }

    .counter-section {
        text-align: center;
        color: #7963e5;
    }
</style>

<script>
    $(document).ready(function () {
        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
