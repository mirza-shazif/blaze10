@extends('frontend.inc.app')

@section('title', 'Join Now')

@section('content')
@include('frontend.inc.navbar')


<section class="join">
	<center>
		<h3 class="get">Get More Exposure!!</h3>
		<p>Have the chance to have your video footage and your talent exposed to more viewers. Email your video footage<br> and content to<b> blaze10network@gmail.com</b></p>
		<span class="email"><button class="button1" onclick="window.location.href='/blaze10/contactUs.php'">EMAIL YOUR CONTENT NOW</button></span>
	</center>
</section>
<section class="form">
	<center>
		<h1 class="head11">NEW MEMBER APPLICATION</h1>
		<h3> New members, please fill out the following</h3>
	</center>
	<!--Join Now form-->
	<div class="container">
		<form role="form" action="{{route('user.register') }}" method="post" class="form11">
			<div class="row">
				@csrf
                    <div class="form-group float-label-control">
                        <label for="">Full Name*</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Nickname/Alias*</label>
                        <input type="text" name="nickname" class="form-control">
                    </div>
                    </div>
										<div class="row">
                    <div class="form-group float-label-control">
                        <label for="">User Name*</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    </div>
										<div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Email*</label>
                        <input type="email" name="email" class="form-control">
                    </div>
									</div>
                    <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Date of birth*</label>
                        <input type="text" class="form-control" name="dob">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Country*</label>
												<select id="country" name="country_id" class="form-control">
													<option value="">Select Country</option>
													@foreach($countries as $country)
														<option value="{{ $country->id }}">{{ $country->country_name }}</option>
													@endforeach
												</select>
                    </div>
                    </div>



										<div class="row state_field" style="display: none;">
                    <div class="form-group float-label-control">
                        <label for="">State*</label>
												<select id="state" name="state_id" class="form-control"></select>
                    </div>
                    </div>


										<div class="row city_field" style="display: none;">
                    <div class="form-group float-label-control">
                        <label for="">City*</label>
												<select id="city" name="city_id" class="form-control">
												</select>
                    </div>
                    </div>


                    <div class="row">
                    <div class="form-group float-label-control">

                        <select name="gender" class="form-control">
													<option value="">Select Gender</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
													<option value="other">Other</option>
												</select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group float-label-control">

												<select name="race_id" class="form-control">
													<option value="">Select Race</option>
													@foreach($races as $races)
													<option value="{{$races->id}}">{{$races->name}}</option>
													@endforeach
												</select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group float-label-control">

												<select name="category_id" class="form-control">
													<option value="">Select Category</option>
													@foreach($categories as $category)
													<option value="{{$category->id}}">{{$category->category_name}}</option>
													@endforeach
												</select>
                    </div>
                    </div>
										<div class="row">
                    <div class="form-group float-label-control">

												<select name="experience_id" class="form-control">
													<option value="">Select Experience</option>
													@foreach($experience as $experience)
													<option value="{{$experience->id}}">{{$experience->name}}</option>
													@endforeach
												</select>
                    </div>
                    </div>
                    <div class="row sponsor_field">
                    <div class="form-group float-label-control">
                        <label for="">Sponsors *</label>
					<select name="sponsor" id="sponsor" class="form-control">
<option value="">Select Sponsors</option>
<option value="none">None</option>
<option value="in_process">In Process</option>
<option value="yes">Yes</option>

					</select>


                    </div>
                    </div>


										<div class="row sponsor_details_field" style="display: none;">
                    <div class="form-group float-label-control">
                        <label for="">Sponsor Details</label>

													<textarea name="sponsor_details" placeholder="Sponsor Details" class="form-control" rows="3"></textarea>

                    </div>
                    </div>




                    <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" name="facebook">
                    </div>
                    </div>
										<div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" name="instagram">
                    </div>
                    </div>
										<div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control" name="twitter">
                    </div>
                    </div>
										<div class="row">
                    <div class="form-group float-label-control">
                        <label for="">SnapChat</label>
                        <input type="text" class="form-control" name="snapchat">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Number of followers on social sites*</label>
                        <input type="text" class="form-control" name="no_of_followers">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Awards, credits, publications etc*</label>
                        <input type="text" class="form-control" name="acp">
                    </div>
                    </div>
                  <center>
                  	<button type="submit" class="button1">SEND</button>
                  </center>
                </form>
	</div>
	<!--Join Now form-->
</section>
<section>
	<center>
		<h2 class="joinh">blaze10</h2>
		</center>
		<div class="icon">
		<center>
				<span class="fa fa-twitter"></span>
				<span class="fa fa-instagram"></span>
				<span class="fa fa-youtube-play"></span>
			</center>
			</div>
</section>
 @include ('frontend.inc.footer')
@endsection
@section('scripts')
<script>
	$("#country").on("change", function() {
		let countryElement = this, countryID = $(this).val();
		if(countryID !== "") {
			$.ajax({
				beforeSend: function() {
					$("#state").html("");
					$(".city_field").fadeOut();
				},
				data: {
					'country_id': countryID
				},
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: 'POST',
				url: '{{ route("get.states") }}',
				success: function(response) {
					if(response !== undefined) {
						$("#state").append('<option value="">Select State</option>');
						for (var state in response) {
							$("#state").append('<option value="' + response[state].id + '">' + response[state].state_name + '</option>');
							$(".state_field").fadeIn();
						}
					}
				}
			});
		} else {
			$("#state").html("");
			$(".state_field, .city_field").fadeOut();
		}
	});

	///for city
	$("#state").on("change", function() {
		let stateElement = this, stateID = $(this).val();
		if(stateID !== "") {
			$.ajax({
				beforeSend: function() {
					$("#city").html("");
				},
				data: {
					'state_id': stateID
				},
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: 'POST',
				url: '{{ route("get_cities") }}',
				success: function(response) {
					if(response !== undefined) {
						for (var city in response) {
							$("#city").append('<option value="' + response[city].id + '">' + response[city].city_name + '</option>');
							$(".city_field").fadeIn();
						}
					}
				}
			});
		} else {
			$("#city").html("");
			$(".city_field").fadeOut();
		}
	});



	///for Sponsors

	$("#sponsor").on("change", function() {
		let sponsorElement = this, sponsorValue = $(this).val();
		if(sponsorValue == "yes") {
			$(".sponsor_details_field").fadeIn();
		} else {
			$(".sponsor_details_field").fadeOut();
		}
	});
</script>
<script type="text/javascript">
    /* Float Label Pattern Plugin for Bootstrap 3.1.0 by Travis Wilson
**************************************************/

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
@endsection
