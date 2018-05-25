<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>

@extends('home')
@section('boardcontent')
	<div class="personalboard">
		<h3>Personal Board</h3>
		
		<div class="row">
		@foreach($boards as $p)
	  		<div class="col-md-4" style="padding-bottom: 20px;">
	    		<div class="card card-board" id="board{{$p->id}}" onclick="window.open('{{ URL::to('/board/'.$p->id) }}');" style="background-color: {{$p->background}}; height: 75px; cursor: pointer;">
	    	  		<div class="card-body">
	        			<h5 class="card-title">{{$p->title}}</h5>
	        			<div class="text-view transition">
	                    	<h4>View Details</h4>
	                	</div>
	      			</div>
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