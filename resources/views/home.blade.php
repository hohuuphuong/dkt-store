@extends('layouts.main')
@section('content')
<div class="special-collection">
    <div class="tabs-container">
      <div class="clearfix">
        <h2>Sản phẩm Hot</h2>
      </div>
    </div>
    <div class="tabs-content row">
      <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
        <div class="clearfix"> 
          
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
              <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="{{ asset('assets/thumb/medium/100/products/66s706a.jpg') }}" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
              <div class="info">
                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                <div class="action-btn">
                  <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                    <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end box product --> 
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
              <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="{{ asset('assets/thumb/medium/100/products/66s706a.jpg') }}" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
              <div class="info">
                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                <div class="action-btn">
                  <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                    <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end box product --> 
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
              <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="{{ asset('assets/thumb/medium/100/products/66s706a.jpg') }}" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
              <div class="info">
                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                <div class="action-btn">
                  <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                    <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end box product --> 
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
              <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="{{ asset('assets/thumb/medium/100/products/66s706a.jpg') }}" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
              <div class="info">
                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                <div class="action-btn">
                  <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                    <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end box product --> 
          
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper-tab-collections" style="margin-top:0px;">
    <div class="tabs-container">
      <ul class="list-unstyled">
        <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
          <h2>Sản phẩm mới</h2>
          </a></li>
      </ul>
    </div>
    <div class="tabs-content row">
      <div id="content-taba4" class="content-tab content-tab-proindex"> 
        @foreach ($newProducts as $newProduct)
            <!-- box product -->
            <div class="col-xs-6 col-sm-4 col-md-3 ">
              <div class="product-grid product-loop" id="product-{{ $newProduct->id }}">
                  <div class="image"> <a href="#"><img src="{{ asset(data_get($newProduct->images, '0.path')) }}" title="{{ $newProduct->name }}" alt="{{ $newProduct->name }}" class="img-responsive"></a> </div>
                  <div class="info">
                      <h3 class="name"><a href="#">{{ $newProduct->name }}</a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price">{{ $newProduct->price }}</span> </span> </p>
                      <div class="action-btn">
                          <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-{{ $newProduct->id }}">
                              <input type="hidden" name="variantId" value="{{ $newProduct->id }}" />
                              <button class="button add-cart">Chọn sản phẩm</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end box product -->
        @endforeach
      </div>
    </div>
  </div>
  @endsection