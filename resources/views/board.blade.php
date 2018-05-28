<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>

@extends('home')
@section('boardcontent')
	<div class="personalboard">
		<h3>Personal Board</h3>
		
		<div class="card-columns my-container">
		@foreach($boards as $p)
			<div class="card text-xs-center" id="board{{$p->id}}">
				<div class="card-block">
					<blockquote class="card-blockquote">
						<p>{{$p->title}}</p>
					</blockquote>
				</div>
				<div class="card-block">
					<a class="btn red" href='{{ URL::to('/board/'.$p->id) }}'></a>
				</div>

			</div>
		@endforeach
		</div>
	</div>
@endsection


<script type="text/javascript">
	$(document).ready(function() {
		$('#v-pills-home-tab').removeClass('active');
		$('#v-pills-home-tab').removeClass('show');
		$('#v-pills-home-tab').attr("aria-selected", "false");
		$('#v-pills-boards-tab').addClass('active');
		$('#v-pills-boards-tab').addClass('show');
		$('#v-pills-boards-tab').attr("aria-selected", "true");
		$('.homecontent').hide();
	});
</script>