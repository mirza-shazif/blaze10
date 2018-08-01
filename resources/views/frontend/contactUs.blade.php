@extends('frontend.inc.app')

@section('title', 'Contact Us')

@section('content')

@include('frontend.inc.navbar')
<center>
	<h1 class="Mymusic">CONTACT US</h1>
	<h3>Your Contact Info</h3>
</center>
<section>
	<div class="container">
		<form role="form" class="form12">
			<div class="row">
                   <div class="form-group float-label-control">
                    <label for="">Full Name*</label>
                   <input type="text" class="form-control">
                 </div>
              </div>
              <div class="row">
                   <div class="form-group float-label-control">
                    <label for="">Email*</label>
                   <input type="email" class="form-control">
                 </div>
              </div>
               <div class="row">
                    <div class="form-group float-label-control">
                        <label for="">Message*</label>
                          <textarea class="form-control" rows="2"></textarea>
                    </div>
                    </div>
                    <center>
                    	<button class="button1">SEND</button>
                    </center>
           </form>
           <section>
           	<center>
           		<h2 class="contact">Needing assistance?</h2>
           		<h5 class="h15">You've came to the right page!</h5>
           		<h2 class="contact">Blaze10</h2>
           		<h5 class="h15">Email: Blaze10network@gmail.com</h5>
           		<h5 class="h15">Office Number: (629) 867-9030</h5>
           		<h2 class="contact">Hours</h2>
               <button class="button1" href="#demo" data-toggle="collapse">Today</button>
             <ul id="demo" class="collapse">
             <li>Mon 9:00 am – 5:00 pm</li>
             <li>Tue 9:00 am – 5:00 pm</li>
             <li>Wed 9:00 am – 5:00 pm</li>
             <li>Thu  9:00 am – 5:00 pm</li>
             <li>Fri 9:00 am – 5:00 pm</li>
             <li><spsn>Sat</spsn>  Closed</li>
             <li><span>Sun</span>  Closed</li>
             </ul>
             <div class="day"></div>
           	</center>
           </section>
	</div>
</section>
</div>
 @include ('frontend.inc.footer')
 @endsection
 @section('scripts')
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
</script>
@endsection
