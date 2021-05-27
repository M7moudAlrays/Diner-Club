@extends('front.master')
@section('style') @endsection

<link href="{{asset('css/index.css')}}" rel="stylesheet">

@section('content')
  <section id="center" class="center_home h-50">
     <div class="banner">
        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"><!-- First-Slide -->
                    <img src="{{asset('images/bg45.jpg')}}" alt="" class="img-responsive">
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h1 data-animation="animated flipInX" class="">Dinner Club Restaurant</h1>
                        <p data-animation="animated flipInX" class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
						<h4><a href="{{route('contact.create')}}"class="button hvr-shutter-out-horizontal">Contact Us</a></h4>
                    </div>
                </div>
              @foreach($posts as $post)
                <div class="item"><!-- Third-Slide -->
                    <img src="{{asset('images/bg51.jpg')}}" alt="" class="img-responsive">
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h1 data-animation="animated fadeInDown">{{$post->title}}</h1>
                        <p data-animation="animated fadeInUp">{{$post->body}}</p>
						<h4><a href="{{route('contact.create')}}"class="button">Contact Us</a></h4>
                    </div>
                </div>
			  @endforeach
            </div>
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
	</div>
  </section>

<section class="first-section">
  <div class="container">
    <div class="text-center header">
		<h3>  The Top Three Meals </h3>
        <h3> ـــــــــــ O ـــــــــــ </h3>
	</div>
	<div class="row div_row">
		@foreach($rc_data as $item)
		<div class="col-xs-12  col-sm-6 col-md-4">
			<div class="card">

				<img src="{{asset('images')}}/{{$item->image}}" alt="Card image"
				class=" img-responsive"  style="height: 300px ;  width: 100% ">

				<p class="text-center alert-danger price1">List Price : <s>{{$item->price+($item->price*0.2)}}</s></p>
				<p class="text-center alert-success price2">After Discount : {{$item->price}} </p>
				<p class="detls"><a href="{{route ('reciepes.show',$item)}}"class="button"> Details  </a></p>
				<p class="bi bi-cart">
					<a href="{{route ('rcps.addToCart',$item->id)}}"
					   class="button"> Cart
					<svg xmlns="http://www.w3.org/2000/svg" 
					width="50" height="16" 
					fill="currentColor" class="bi bi-cart " viewBox="0 0 50 16">
					<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 
							0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 
							1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 
							1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2  
							1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg></a>
				</p>
			</div>
		</div>
		@endforeach
	</div>
</div>
</section>


<section class="second-section">
<div class="container">
    <div class="row text-center header">
		<h3> The Fastest Meal  </h3>
        <h3> ـــــــــــ O ـــــــــــ </h3>
	</div>

	<div class="row div_row2">
		@foreach($rc_data2 as $item)
			 <div class="col-sm-6">
				<div class="card2">
					<img src="{{asset('images')}}/{{$item->image}}" alt="Card image"
					     height="350px" width="100%" >
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card3">
					<h2 class="rec_name">{{$item->name}}</h2>
					<p class="rec_desc">{{$item->description}}</p>
					<p class="text-center alert-danger price1">List Price : <s>{{$item->price+($item->price*0.2)}}</s></p>
					<p class="text-center alert-success price2">After Discount : {{$item->price}} </p>
					<p class="detls">
						<a href="{{route ('reciepes.show',$item)}}"class="button"> Details  </a>
					</p>
					<p class="bi bi-cart">
						<a href="{{route ('rcps.addToCart',$item->id)}}" class="button"> Cart
						<svg xmlns="http://www.w3.org/2000/svg" 
						width="40" height="16" 
						fill="currentColor" class="bi bi-cart " viewBox="0 0 16 16">
						<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5
								0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607
								1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0
								1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2
								1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
						  </svg></a>
					</p>
				</div>
			</div>
		@endforeach


	</div>
</div>
</section>


<section class="third-section">
	<div class="container">
		<div class="row text-center header">
			<h3> The cheapest Meals </h3>
			<h3> ـــــــــــ O ـــــــــــ </h3>
		</div>

		<div class="row div_row4">
			@foreach($rc_data3 as $item)
				<div class="col-sm-6">
					<div class="card4">
						<img src="{{asset('images')}}/{{$item->image}}" alt="Card image">
						<p class="text-center alert-danger price1">List Price : <s>{{$item->price+($item->price*0.2)}}</s></p>
						<p class="text-center alert-success price2">After Discount : {{$item->price}} </p>
						<p class="detls"><a href="{{route ('reciepes.show',$item)}}"class="button"> Details  </a></p>
						<p class="bi bi-cart">
							<a href="{{route ('rcps.addToCart',$item->id)}}" class="button"> Cart
							<svg xmlns="http://www.w3.org/2000/svg" 
							width="40" height="16" 
							fill="currentColor" class="bi bi-cart " viewBox="0 0 16 16">
							<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5
									0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607
									1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0
									1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2
									1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							  </svg></a>
						</p>
					</div>

				</div>
			@endforeach
		</div>
</section>

@endsection

