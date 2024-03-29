
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs
         ============================================ -->
    <title>TopDeal</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <!-- Mobile specific metas
         ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon
         ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('website/ico/favicon-16x16.png') }}" />
    <!-- Libs CSS
         ============================================ -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('website/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/minicolors/miniColors.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/slick-slider/slick.css') }}" rel="stylesheet">
    <!-- Theme CSS
         ============================================ -->
    <link href="{{ asset('website/css/themecss/so_searchpro.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/so-newletter-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/footer/footer3.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/header/header6.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('website/css/home6.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/quickview/quickview.css') }}  " rel="stylesheet">
    <!-- Google web fonts
         ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: Roboto, sans-serif;
        }
    </style>
</head>

<body class="loaded page-quickview">

    <div id="wrapper">

	<!-- Main Container  -->


	<div class="product-detail">
		<div id="product-quick" class="product-info">
			<div class="product-view row">
				<div class="left-content-product ">


							<div class="content-product-left class-honizol col-sm-5">

								<div class="large-image">
									<div class="box-label">
										<span class="label-product label-sale">
										- {{ $product->discount_option }}%
										</span>
									</div>
									<img class="product-image-zoom" src="{{ asset($product->productimage) }}" data-zoom-image="{{ asset($product->productimage) }}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
								</div>
								<div id="thumb-slider" class="full_slider category-slider-inner products-list yt-content-slider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
										  <div class="image-additional">
											 <a data-index="0" class="img thumbnail" data-image="{{ asset('website/image/catalog/demo/product/travel/2.jpg')}}" title="Canada Travel One or Two European Facials at  Studio">
											 <img src="{{ asset('website/image/catalog/demo/product/travel/2.jpg')}}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
											 </a>
										  </div>
										  <div class="image-additional">
											 <a data-index="1" class="img thumbnail " data-image="{{ asset('website/image/catalog/demo/product/travel/12.jpg')}}" title="Canada Travel One or Two European Facials at  Studio">
											 <img src="{{ asset('website/image/catalog/demo/product/travel/12.jpg')}}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
											 </a>
										  </div>
										  <div class="image-additional">
											 <a data-index="2" class="img thumbnail " data-image="{{ asset('website/image/catalog/demo/product/travel/13.jpg')}}" title="Canada Travel One or Two European Facials at  Studio">
											 <img src="{{ asset('website/image/catalog/demo/product/travel/13.jpg')}}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
											 </a>
										  </div>
                                          <div class="image-additional">
                                            <a data-index="2" class="img thumbnail " data-image="{{ asset('website/image/catalog/demo/product/travel/13.jpg')}}" title="Canada Travel One or Two European Facials at  Studio">
                                            <img src="{{ asset('website/image/catalog/demo/product/travel/13.jpg')}}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
                                            </a>
                                         </div>
								</div>
							</div>
						   <div class="content-product-right col-sm-7">
								<div class="title-product">
									<h1>{{ $product->product_name }}</h1>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="box-review">
											<div class="rating">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
												<a class="reviews_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>
											</div>

										</div>
										<div class="product_page_price price" itemscope="" itemtype="http://data-vocabulary.org/Offer">
											<span class="price-new"><span id="price-special">${{ $product->discount_price }}</span></span>
											<span class="price-old" id="price-old">${{ $product->original_price }}</span>
											<div class="price-tax"><span>Ex Tax:</span> ${{ $product->tax }}</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="product-box-desc">
											<div class="inner-box-desc">
												<div class="model"><span>Product Code: </span> {{ $product->product_code }}</div>
												<div class="stock"><span>Stock</span> <i class="fa fa-check-square-o"></i>{{ $product->stock }}</div>
											</div>
										</div>
									</div>
								</div>

								<div class="short_description form-group">
									<h3>OverView</h3><p>Product 8</p>
								</div>
								<div id="product">
									<h3>Available Options </h3>
									<div class="form-group required ">
										<label class="control-label">Size</label>
										<div id="input-option224">
											<div class="radio  radio-type-button">
												<label>
													<input type="radio" name="option[224]" value="13">
													<span class="option-content-box active" data-title="M +$12.00" data-toggle="tooltip" data-original-title="" title="">
														<span class="option-name">M </span>
													</span>
												</label>
											</div>
											<div class="radio  radio-type-button">
												<label>
													<input type="radio" name="option[224]" value="14">
													<span class="option-content-box" data-title="L +$18.00" data-toggle="tooltip" data-original-title="" title="">
														<span class="option-name">L </span>
													</span>
												</label>
											</div>
										</div>
									</div>

								</div>
								<div class="box-cart clearfix">
									<div class="form-group box-info-product">
									   <div class="option quantity">
										  <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
											 <input class="form-control" type="text" name="quantity" value="1">
											 <input type="hidden" name="product_id" value="108">
											 <span class="input-group-addon product_quantity_down fa fa-caret-down"></span>
											 <span class="input-group-addon product_quantity_up fa fa-caret-up"></span>
										  </div>
									   </div>
									   <div class="cart">
										  <input type="button" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg ">
									   </div>
									   <div class="add-to-links wish_comp">
										  <ul class="blank">
											 <li class="wishlist">
												<a onclick="wishlist.add(108);"><i class="fa fa-heart"></i></a>
											 </li>
											 <li class="compare">
												<a onclick="compare.add(108);"><i class="fa fa-random"></i></a>
											 </li>
										  </ul>
									   </div>
									</div>
									<div class="clearfix"></div>
								 </div>

						   </div>


				</div>
			</div>
		</div>
	</div>

	<!-- //Main Container -->


</div>

   <!-- End Color Scheme
       ============================================ -->
  <!-- Include Libs & Plugins
       ============================================ -->

  <!-- Include Libs & Plugins
       ============================================ -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="{{ asset('website/js/jquery-2.2.4.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/so_megamenu.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/owl-carousel/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/slick-slider/slick.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/libs.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/unveil/jquery.unveil.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/countdown/jquery.countdown.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/datetimepicker/moment.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/jquery-ui/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/modernizr/modernizr-2.6.2.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/minicolors/jquery.miniColors.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/jquery.nav.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/quickview/jquery.magnific-popup.min.js')}}"></script>
  <!-- Theme files
       ============================================ -->
  <script type="text/javascript" src="{{ asset('website/js/themejs/application.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/homepage.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/custom_h3.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/addtocart.js')}}"></script>
</body>

</html>
