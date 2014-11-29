@extends('frontend.layouts.main')
@section('content')
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">IC-E <span class="font-thin">A70202</span></h1>
					<h4 class="font-thin">We are bunch of <span class="font-semibold">informatics student</span> based in <span class="font-semibold">RPL Laboratory A70202</span>.</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4">
				{{HTML::image('assets/img/s02.png')}}</div><span class="font-thin">PROFESSIONAL</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="3">
				{{HTML::image('assets/img/s01.png')}}</div><span class="font-thin">FRIENDLY</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5">
				{{HTML::image('assets/img/s03.png')}}</div><span class="font-thin">SUITABLE</span></div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12">Start from the same interests, formed a community of <span class="font-semibold">IC-E A70202</span>.</div><div class="col-12"><button class="btn btn-danger btn-flat">More Detail...</button></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-12 font-thin">This is what <span class="font-semibold">we do best</span></div>
			</div><!-- /row -->
			<div class="row ">
				<div class="col-12 col-sm-6 col-lg-2">
					<p><i class="fa fa-signal"></i></p>
					<h2 class=""><span class="font-thin">Network</span> <span class="font-semibold">Engineering</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-6 col-lg-3">
					<p><i class="fa fa-database"></i></p>
					<h2 class="font-thin">Database <span class="font-semibold">Processing</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-6 col-lg-2">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Web <span class="font-semibold">Design</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-6 col-lg-3">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Mobile <span class="font-semibold">Apps</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-6 col-lg-2">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-semibold">Development</h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->
	
	<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" 
			href="{{URL::asset('assets/img/portfolio/p01-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p01-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p02-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p02-small.jpg', '', array('class' => 'thumb')) }}
			</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p09-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p09-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p010-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p10-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p05-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p05-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p06-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p06-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p07-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p07-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p08-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p08-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p03-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p03-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p04-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p04-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p11-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p11-small.jpg', '', array('class' => 'thumb')) }}</a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="{{URL::asset('assets/img/portfolio/p12-large.jpg')}}">{{ HTML::image('assets/img/portfolio/p12-small.jpg', '', array('class' => 'thumb')) }}</a></div>
		</div><!-- /row -->
	</div><!-- /slide3 -->
	
	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">See us <span class="font-semibold">at work</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-bolt"></i></p>
					<h2 class="font-thin">Listening to<br><span class="font-semibold" >your needs</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cog"></i></p>
					<h2 class="font-thin">Project<br><span class="font-semibold">discovery</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cloud"></i></p>
					<h2 class="font-thin">Storming<br><span class="font-semibold">our brains</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-map-marker"></i></p>
					<h2 class="font-thin">Getting<br><span class="font-semibold">there</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-gift"></i></p>
					<h2 class="font-thin">Delivering<br><span class="font-semibold">the product</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->
	
	<!-- === Slide 5 === -->
	<div class="slide story" id="slide-5" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Clients</span> we’ve worked with</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br/><br/> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2">{{ HTML::image('assets/img/client01.png', '') }}</div>
				<div class="col-12 col-sm-2">{{ HTML::image('assets/img/client02.png', '') }}</div>
				<div class="col-12 col-sm-2">{{ HTML::image('assets/img/client03.png', '') }}</div>
				<div class="col-12 col-sm-2">{{ HTML::image('assets/img/client04.png', '') }}</div>
				<div class="col-12 col-sm-2">{{ HTML::image('assets/img/client05.png', '') }}</div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide5 -->
	
	<!-- === Slide 6 / Contact === -->
	<div class="slide story" id="slide-6" data-slide="6">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light">Leave us a <span class="font-semibold">message</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">You can find us literally anywhere, just push a button and we’re there</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div id="contact-row-4" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-phone"></i></a></p>
					<span class="hover-text font-light ">+62 1234-5678</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-envelope"></i></a></p>
					<span class="hover-text font-light ">ice.a70202@gmail.com</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-home"></i></a></p>
					<span class="hover-text font-light ">RPL Laboratory A70202. <br>UNESA, East Java, Indonesia</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-facebook"></i></a></p>
					<span class="hover-text font-light ">facebook/ice_a70202</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-twitter"></i></a></p>
					<span class="hover-text font-light ">@ic-eA70202</span></a>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Slide 6 -->
@stop