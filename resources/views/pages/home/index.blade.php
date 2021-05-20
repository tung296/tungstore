@extends('pages.layouts.index')
@section('content')
<div class="fullwidthbanner-container">
   <div class="fullwidthbanner">
      <div class="bannercontainer" >
         <div class="banner" >
            <ul>
               <!-- THE FIRST SLIDE -->
			   @foreach($banners as $banner)
               <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                  <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                     <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{ URL::asset('storage/'.$banner->image) }}" data-src="{{ URL::asset('storage/'.$banner->image) }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{ URL::asset('storage/'.$banner->image) }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                     </div>
                  </div>
               </li>
			   @endforeach

            </ul>
         </div>
      </div>
      <div class="tp-bannertimer"></div>
   </div>
</div>
<!--slider-->
</div>
<div class="container">
   <div id="content" class="space-top-none">
      <div class="main-content">
         <div class="space60">&nbsp;</div>
         <div class="row">
            <div class="col-sm-12">
               <div class="beta-products-list">
                  <h4>New Products</h4>
                  <div class="beta-products-details">
                     <p class="pull-left">{{ count($new_products) }} product</p>
                     <div class="clearfix"></div>
                  </div>
                  <div class="row">
					  @foreach($new_products as $new_product)
                     <div class="col-sm-3 mb-2">
                        <div class="single-item ">
                           <div class="single-item-header">
                              <a class="new_product-image" href="{{route('product_detail',$new_product->id)}}"><img src="{{ URL::asset('storage/'.$new_product->images) }}" alt=""></a>
                           </div>
                           <div class="single-item-body">
                              <p class="single-item-title">{{ $new_product->name }}</p>
                              <p class="single-item-price">
                                 <span>{{ number_format($new_product->price) }}</span>
                              </p>
                           </div>
                           <div class="single-item-caption">
                              <a class="add-to-cart pull-left" href="{{ route('shop.add_cart', ['product' => $new_product->id]) }}"><i class="fa fa-shopping-cart"></i></a>
                              <a class="beta-btn primary" href="{{route('product_detail',['id' => $new_product->id])}}">Details <i class="fa fa-chevron-right"></i></a>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
					 @endforeach
                  </div>
                  <div class="row">{{$new_products->links()}}</div>
               </div>
               <!-- .beta-products-list -->
               <div class="space50">&nbsp;</div>
               <div class="beta-products-list">
                  <h4>Second-hand Products</h4>
                  <div class="beta-products-details">
                     <p class="pull-left">{{ count($old_products) }} product</p>
                     <div class="clearfix"></div>
                  </div>
                  <div class="row">
                  @foreach($old_products as $old_product)
                     <div class="col-sm-3">
                        <div class="single-item">
                           <div class="single-item-header">
                              <a class="new_product-image" href="{{route('product_detail',$old_product->id)}}"><img src="{{ URL::asset('storage/'.$old_product->images) }}" alt=""></a>
                           </div>
                           <div class="single-item-body">
                              <p class="single-item-title">{{ $old_product->name }}</p>
                              <p class="single-item-price">
                                 <span>{{ number_format($old_product->price) }}đ</span>
                              </p>
                           </div>
                           <div class="single-item-caption">
                              <a class="add-to-cart pull-left" href="{{ route('shop.add_cart', ['product' => $old_product->id]) }}"><i class="fa fa-shopping-cart"></i></a>
                              <a class="beta-btn primary" href="{{route('product_detail',$old_product->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  @endforeach
                  </div>
                  <div class="row">{{$old_products->links()}}</div>
                  <div class="space40">&nbsp;</div>
                  </div>
               </div>
               <!-- .beta-products-list -->
            </div>
         </div>
         <!-- end section with sidebar and main content -->
      </div>
      <!-- .main-content -->
   </div>
   <!-- #content -->
</div>
@endsection