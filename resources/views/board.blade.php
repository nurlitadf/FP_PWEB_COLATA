<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>

@extends('home')
@section('boardcontent')
	<div class="personalboard">
		<h3>Personal Board</h3>
		@foreach($boards as $p)
		{{$p->id}}
		{{$p->title}}
		{{$p->background}}
		@endforeach
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