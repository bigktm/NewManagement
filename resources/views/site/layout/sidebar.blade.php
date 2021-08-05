<div class="col-md-3 col-sm-4 col-xs-12">
	<div class="sidebar sidebar-right">
		<div id="s7upf_category_list-2" class="sidebar-widget widget widget_s7upf_category_list">
			<h3 class="widget-title">Danh Mục Sản Phẩm</h3>
			<ul class="list-none">	
				@foreach($category_list as $key => $category)
				<li class="cat-item">
					@if($category->category_parent == 0)
					<a href="{{URL::to('danh-muc/'.$category->category_slug)}}">{{$category->category_name}}</a>
					@foreach($category_list as $key => $cate_sub)
						@if($cate_sub->category_parent==$category->category_id)
							<ul class="children">
								<li class="cat-item">
									<a href="{{URL::to('danh-muc/'.$cate_sub->category_slug)}}">{{$cate_sub->category_name}}</a>
								</li>
							</ul>
						@endif
					@endforeach
					@endif
				</li>
				@endforeach
			</ul>
		</div>
		<div id="-1" class="sidebar-widget widget">
			<h3 class="widget-title">Thương Hiệu</h3>
			<ul class="list-none">
				@foreach($brands_list as $key => $brand)
				<li class="cat-item">
					<a class="" href="{{URL::to('thuong-hieu/'.$brand->brand_slug)}}">
						<span>{{$brand->brand_name}}</span>
					</a>
				</li>
				@endforeach                       
			</ul>
		</div>
		{{-- <div id="" class="sidebar-widget widget">
			<h3 class="widget-title">Lọc Size</h3>                            
			<ul class="tawcvs-swatches attribute-type-label">
				<li>
					<a title="L" data-value="l" href="#">XL</a> <span class="count silver">(2)</span>
				</li>
				<li>
					<a title="L" data-value="l" href="#">L</a> <span class="count silver">(2)</span>
				</li>
				<li>
					<a title="M" data-value="m" href="#">M</a> <span class="count silver">(2)</span>
				</li>
				<li>
					<a title="S" data-value="s" href="#">S</a> <span class="count silver">(2)</span>
				</li>                                
			</ul>
		</div>		 --}}
	</div>
</div>