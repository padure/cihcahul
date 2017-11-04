<!-- Right Sidebar -->
				<div class="col-md-3 magazine-page">
					
					<!-- Posts -->
					<div class="posts margin-bottom-40 slideanim">
						<div class="headline headline-md"><h2>Top vizualizări</h2></div>
						@foreach($recent as $rec)
                                                <dl class="dl-horizontal">
							<dt><a href="{{route('ShowArticle',['id'=>$rec->id])}}"><img src="{{URL::asset($rec->image)}}"></a></dt>
							<dd>
								<p><a href="{{route('ShowArticle',['id'=>$rec->id])}}">{{$rec->title}}</a></p>
                                                                <ul class="list-unstyled list-inline blog-info">
                                                                    <li><i class="fa fa-calendar"></i> {{$rec->date}}</li>
                                                                  
                                                                </ul>
							</dd>
						</dl>
						@endforeach
					</div><!--/posts-->
					<!-- End Posts -->
                                        
					<!-- Blog Tags -->
					
				<!-- End Right Sidebar -->
                                </div>