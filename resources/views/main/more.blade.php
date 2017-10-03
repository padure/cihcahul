@extends('layouts.home')
@section('content')

		<!--=== Blog Posts ===-->
		<div class="bg-color-light">
			<div class="container content-sm">
				<div class="row">
					<!-- Blog All Posts -->
					<div class="col-md-9">
                                            @if($article)
						<!-- News v3 -->
						<div class="news-v3 bg-color-white margin-bottom-30">
                                                    <h2><a href="#">{{$article->title}}</a></h2>
                                                    <ul class="list-inline posted-info">
								
									<li>Postat {{$article->date}}</li>
									<li>Vazut {{$article->views}}</li>
								</ul>
							<img class="img-responsive full-width" src="{{URL::asset($article->image)}}" alt="">
							<div class="news-v3-in">
								
								
								<p>{!!$article->content!!}</p>
							</div>
						</div>
						<!-- End News v3 -->

						
					</div>
					<!-- End Blog Sidebar -->
                                        @include("main.sidebar")
				</div>
			</div><!--/end container-->
                        @endif

		</div>
		<!--=== End Blog Posts ===-->
@endsection
