@extends('layouts.home')
@section('content')
 <!--=== Content Part ===-->
		<div class="container content">
			<div class="row blog-page">
				<!-- Left Sidebar -->
				<div class="col-md-9 md-margin-bottom-40">
					<!--Blog Post-->
                                        @foreach($articles as $article)
					<div class="row blog blog-medium margin-bottom-40">
						<div class="col-md-6 description-evets">
							<h2><a href="{{route('ShowArticle',['id'=>$article->id])}}">{{$article->title}}</a></h2>
							<ul class="list-unstyled list-inline blog-info">
								<li><i class="fa fa-calendar"></i>{{$article->date}}</li>
							</ul>
                                                        <p class="description-evets"> {!!str_limit($article->content, 400)!!}</p>
							<p><a class="btn-u btn-u-sm" href="{{route('ShowArticle',['id'=>$article->id])}}">Read More <i class="fa fa-angle-double-right margin-left-5"></i></a></p>
						</div>
                                                <div class="col-md-6">
							<img class="img-responsive" src="{{$article->image}}" alt="">
						</div>
					</div>
                                        
					<!--End Blog Post-->
                                        @endforeach
					<hr class="margin-bottom-40">
                                        
                                        <!--Pagination-->
					<div class="text-center">
						{{$articles->links()}}
					</div>
					<!--End Pagination-->
                                        
				</div>
				<!-- End Left Sidebar -->
@include("main.sidebar")
				
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->

@endsection