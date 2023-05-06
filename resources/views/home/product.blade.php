
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         {{-- <h2>
            MY <span>Trends</span>
         </h2> --}}
         <section id="container">
            <div class="wrap-container">
              <section class="content-box boxstyle-2 box-2">
                <div class="zerogrid" style="width: 100%;">
                  <div class="row wrap-box">
                    <div class="header">
                      <div class="wrapper">
                        <h2 class="color-yellow">GALLERY</h2>
                        {{-- <hr class="line01"> --}}
                        <div class="intro">Top Products</div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </section>	    
               
      </div>
      <div class="row">


         @foreach ($product as $products)



         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{url('product_details',$products->id)}}" class="option2">
                     Product Details
                     </a>
                     {{-- <a href="" class="option2">
                     Buy Now
                     </a> --}}
                  </div>
               </div>
               <div class="img-box">
                  <img src="product/{{$products->image}}" alt="" width="200px" height="400px">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$products->title}}
                  </h5>

                  @if ($products->discount_price!=null)
                  <h6>
                     <span style="color:green">{{$products->discount_price}}$</span>
                     <span style="text-decoration:line-through;color:red" >{{$products->price}}$</span>
                  </h6>
                  @else
                     <h6 style="color:green">{{$products->price}}$</h6>
                  @endif
               </div>
            </div>
         </div>
      
      @endforeach
      {{-- <span style="padding-top: 20px;">
         {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
      </span> --}}
      
   </div>
   <div class="btn-box" style="">
      <a href="{{url('products')}}" class="btn1">
      More Options <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
       </svg>
      
      </a>
      
   </div>
</section>