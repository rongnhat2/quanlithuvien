@extends('user.layout')
@section('body')

	<div class="I-body_list_category">
		<div class="wrapper">
			<div class="title">
				Các Danh Mục Sách Hiện Có
			</div>
			<div class="content">
				<ul>
					<?php foreach ($categories as $key => $category): ?>
						<li><a href="/danh-muc/<?php echo $category->id ?>"><?php echo $category->category_name ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="I-body_list_book">
		<div class="wrapper">
			<div class="title">
				Sách Mới
			</div>
			<div class="content">
				<?php foreach ($new_item as $key => $value): ?>
					<div class="book_wrapper">
						@if($value->book_amount - $value->book_borrow <= 0)
							<div class="book_status">
								Hết sách
							</div>
						@endif
						<a href="sach/<?php echo $value->id ?>" class="I-book">
							<div class="book_image">
								<img src="{{ asset($value->book_image) }}">
							</div>
							<div class="book_title">
								<?php echo $value->book_name ?>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

@endsection()


