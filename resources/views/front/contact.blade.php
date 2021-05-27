@extends('front.master')
@section('style')
@endsection

<link href="{{asset('css/contact.css')}}" rel="stylesheet">

@section('content')
<section id="contact_main">
 <div class="contact_inner clearfix">
  <div class="container">
   <div class="row">
    <div class="contact_main_1">
     <h1>Contact</h1>
	<ul>
	     <li><a href="{{route('homePage.index')}}">Home</a></li>
		 <li><i class="fa fa-angle-double-right"></i></li>
		 <li>Contact</li>
	</ul>
   </div>
  </div>
 </div>
 </div>
</section>


<section id="contact">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
	 <div class="col-sm-8">
	  <div class="col-sm-12 padding_left_1">
	   <div class="contact_3">
	   <h2> Send Your Feedback To Us  </h2>
	   <div class=" content-top2">
		<h4 class="text-center">O</h4>
	   </div>
	   <p></p>
	  </div>
	  </div>
<section id="f1">

    <form method="POST"  action="{{route('contact.store')}}">
		@csrf



    

        <div class="form-group ">
			<label> Enter Your Message: </label>
            <textarea name="message" class="form-control"
			          placeholder="Enter Your Message" style="width: 450px; height: 130px" >
			</textarea>
        </div>
	  <div class="col-sm-12">
	   <div class="contact_6">
	       <ul>
	            <li>
					<button class="button hvr-shutter-out-horizontal "
					          id="b1" name="submit"  type="submit" class="button">SEND
					</button></li>
	      </ul>
	   </div>
	  </div>
	 </div>
	 </form>

	 <div class="col-sm-4">
	  <div class="contact_8 clearfix">
	   <div class="contact_7">
	   <h2>Connect Us</h2>

	   <div class=" content-top2">
	   <h4 class="text-center">O</h4>
	   </div>
	  </div>
	  <div class="contact_2 ">
	   <h4>Address:</h4>
	   {{-- <h5><i class="fa fa-home"></i><span class="media_1">Visit Us IN</span></h5> --}}
	   <section id="contact_inner">
		{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3635689.793072721!2d78.6421709625!3d27.141236999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1531201517392 " height="600" style="border:0; width:100%;" allowfullscreen=""></iframe> --}}
		<iframe width="425" height="150" frameborder="0" scrolling="no" marginheight="0"
		marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mumbai&amp;aq=&amp;sll=19.056545,72.853394&amp;sspn=0.010121,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Mumbai,+Maharashtra&amp;t=m&amp;z=10&amp;ll=19.075984,72.877656&amp;output=embed">
	   </iframe>
	   <br />
	   <small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Mumbai&amp;aq=&amp;sll=19.056545,72.853394&amp;sspn=0.010121,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Mumbai,+Maharashtra&amp;t=m&amp;z=10&amp;ll=19.075984,72.877656"
		style="color: #0000FF; text-align: left">View Larger Map</a></small>

	   </section>
	  </div>
	  <div class="contact_2">
	   <h4>Phones:</h4>
	   <h5><i class="fa fa-phone"></i><span class="media_1">123-4567-1234</span></h5>
	   <h5><i class="fa fa-calculator"></i><span class="media_1">432-5456-7658</span></h5>
	  </div>
	  <div class="contact_2">
	   <h4>E-mail:</h4>
	   <h5><i class="fa fa-envelope"></i><a href="#"><span class="media_2">team@gmail.com</span></a></h5>
	   {{-- <h5>Sed Dignissim Lacinia:<a href="#"><span class="media_3"> cairo</span></a></h5> --}}
	  </div>
	  </div>
	 </div>
	</div>
  </div>
 </div>

</section>

@endsection



</section>



