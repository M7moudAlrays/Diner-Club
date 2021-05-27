@extends('front.master')
@section('style') @endsection

<link href="{{asset('css/details.css')}}" rel="stylesheet">

@section('content')
<section id="details_main">
    <div class="details_inner clearfix container">
      <div class="row">
          <div class="details_main_1 col-sm-12">
               <h1>Recipe Detail</h1>
               <ul>
                    <li><a href="{{route('homePage.index')}}">Home</a></li>
                    <li><i class="fa fa-angle-double-right"></i></li>
                    <li>Details</li>
               </ul>
          </div>
      </div>
    </div>
</section>

<section class="details-section">
     <div class="container">
          <div class="text-center header">
               <h3> The Recipe Story  </h3>
               <h3> ـــــــــــ O ـــــــــــ </h3>
          </div>

          <div class="row two-div-details">
               <div class="col-sm-12 col-md-6">
                    <div class="alldetails">
                         <div class="div_name">
                              <h4 class=""><ins> Recipe Name </ins></h4>
                              <p> {{$rc_data->name}} </p>
                         </div>

                         <div class="div_descrip">
                              <h4 class=""><ins> About Recipe </ins></h4>
                              <p> {{$rc_data->description}} </p>

                         </div>

                         <div class="div_ingreds">
                              <h4 class=""><ins> Ingredients List </ins></h4>
                              <p> {{$rc_data->ingrediens}} </p>
                         </div>

                    </div>
               </div>

               <div class="col-sm-12 col-md-6">
				   <div class="div_img-price">
                         <div class="div_img">
                              <img src="{{asset('images')}}/{{$rc_data->image}}" alt="Card image"
                              class="" height="60%" width="100%">
                         </div>
                         <div class="div_price">
                              <p class="text-center alert-danger price1">List Price : <s>{{$rc_data->price+($rc_data->price*0.2)}}</s></p>
                              <p class="text-center alert-success price2">After Discount : {{$rc_data->price}} </p>
                         </div>

						 <div class="cart">
							<p class="bi bi-cart pull-right btn">
									  <a href="{{route ('rcps.addToCart',['id'=>$rc_data->id])}}" class="button"> Cart
								 <svg xmlns="http://www.w3.org/2000/svg"
								 width="16" height="16"
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
              
          </div>
     </div>
</section>

@endsection
