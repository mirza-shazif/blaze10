@extends('frontend.inc.app')

@section('title', 'Home')

@section('content')
 <div class="wrapper">
@include('frontend.inc.navbar')
 	<section id="sec1" >
 		<div id="title1">
 			<div class="row">
 	<h1 class="blaze11">BLAZE10</h1>
<p class="blaze12"> Wanna know who's hot? </p>
<button class="button1">MAKE AN ACCOUNT NOW</button>
</div>
</div>
 	</section >
 	<section id="heading">
 	<div class="row" >
 		<div class="col-sm-9 col-sm-offset-2">
 	<center>	<h1 class="h22">HAVE YOU EVER WANTED THAT CHANCE FOR YOUR HARD WORK AND TALENT TO BE DISCOVERED?</h1></center>
 	</div>
 	</div>
</section>
 	<section class="content">

	<h1>Welcome To Blaze10</h1>
	<p>Blaze10 is a social media competition and promotion website. The purpose of the site is to see who are the best of the best and who's going to be the next up and coming star in their industry. We've chosen the top categories in regards to following. They include but aren't limited to: Acting, Dance, Film, Modeling, and Sports. Our site will display the Top 20 in regards to numbers of followers in each category. This will allow our members to see who's on the rise. It also creates an opportunity for members to: appreciate, collaborate or hate. It's all about the number of followers.  </p>
	<div class="row m-0">
		<div class="center">
			<button class="button1" >FIND OUT MORE</button>
		</div>
	</div>
</section>
<!--WATCH VIDEO--->
<section id="watch">

	<div id="row1" class="row">
			<center><h1 class="h1 video">WATCH VIDEO OF THE DAY</h1></center>
		</div>
		<!--Videos-->
		<div class="row">
			<div class="col-md-12">
			<div class="col-sm-3">
				<img class="video11" src="{{asset('user/images/video1.png')}}">
			</div>
			<div class="col-sm-3 cl">
				<img class="video11" src="{{asset('user/images/video2.png')}}">
			</div>
			<div class="col-sm-3">
				<img class="video11" src="{{asset('user/images/video1.png')}}">
			</div>
			<div class="col-sm-3">
				<img class="video11" src="{{asset('user/images/video2.png')}}">
			</div>
			</div>
		</div>
		<!--Videos-->
		<div class="row">
			<div class="col-sm-3 col-sm-offset-8">
			<button class="button1 watch" onclick="window.location.href='/blaze10/topVideo.php'">WATCH NOW</button>
			</div>
		</div>
</section>
<!--WATCH VIDEO--->
<!---Send Now-->
<section id="send">
	<div class="container">
	<div id="row2" class="row">
		<div class="col-sm-6" >
			<h1 class="h1">EMAIL VIDEO FOOTAGE</h1>
		</div>
		<div class="col-sm-3 col-sm-offset-3" >
			<button class="button1">SEND NOW</button>
		</div>
		</div>
	</div>
</div>
</section>
<!---Send Now-->
<!---Contact us--->
<section id="contact">
	<div class="container">
	<div id="row3" class="row">

			<center><h1 class="h1 contact">CONTACT US</h1></center>
	</center>
	<div class="container">
		<form role="form" class="form12 margin">
			<div class="row">
                   <div class="form-group">
                    <label for="">Full Name*</label>
                   <input type="text" class="form-control" >
                 </div>
              </div>
              <div class="row">
                   <div class="form-group">
                    <label for="">Email*</label>
                   <input type="email" class="form-control">
                 </div>
              </div>
               <div class="row">
                    <div class="form-group">
                        <label for="">Message*</label>
                          <textarea class="form-control" rows="2"></textarea>
                    </div>
                    </div>
                    <div class="row">
                   <button class="button1 contact">Contact US</button>
                  </div>
           </form>
       </div>
       <center>
		</div>
	</div>
</div>
</section>
<!---Contact us-->
<!--icon section-->
<section>

		<center>
				<span class="fa fa-twitter"></span>
				<span class="fa fa-instagram"></span>
				<span class="fa fa-youtube-play"></span>
			</center>
</section>
<!--icon section-->

<section class="signUp">
		   <center>
			<h2>SUBSCRIBE</h2>
			<p id="sign">Sign up to hear from us about who's on the rise and latest news from our top 20 members.</p>
			</center>
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-sm-5 col-sm-offset-3">
		<form role="form">
                    <div class="form-group float-label-control">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                </form>
                </div>
			<div class="col-sm-2">
			<button class="button1 sign">SIGN UP</button>
		</div>
	</div>


</section>
 </div>
  @include ('frontend.inc.footer')

  @endsection

@section('scripts')
<script type="text/javascript">
	(function ($) {
    $.fn.floatLabels = function (options) {

        // Settings
        var self = this;
        var settings = $.extend({}, options);


        // Event Handlers
        function registerEventHandlers() {
            self.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        $('.float-label-control').floatLabels();
    });
})(jQuery);
</script>
@endsection
