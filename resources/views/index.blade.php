@extends("template.main")
@section('title','Home')

@section('navigation')
    @parent
@endsection
@section('container')
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('/assets/images/1.jpg')}}" alt="First Slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('/assets/images/2.jpg')}}" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('/assets/images/3.jpg')}}" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>            
     
@endsection