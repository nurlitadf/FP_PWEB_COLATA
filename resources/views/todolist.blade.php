<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>

@extends('layouts.master')
@section('content')
	@include('layouts.nav')
	
	<div class="container" style="margin-top: 65px;">
		<div class="row">
    		<button type="button" id="boardtitlenow" class="btn btn-sm btn-light" data-toggle="modal" data-target="#changeboardtitle">
                {{$board->title}}
            </button>

            <div class="modal fade" id="changeboardtitle" tabindex="-1" role="dialog" aria-labelledby="changeboardtitlelabel" aria-hidden="true">
		        <div class="modal-dialog modal-sm" role="document">
		            <div class="modal-content">
		                <form id="changetitleform" method="POST">
					     {{csrf_field()}}
		                    <div class="modal-header" style="flex-direction: row;">
		                    	<h5 class="modal-title">Rename Board</h5>
		                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                            <span aria-hidden="true">&times;</span>
		                        </button>
		                    	
		                    </div>
		                    <div class="modal-body">
		                    	<input class="form-control form-control-sm" id="changeboardtitlelabel" type="text" placeholder="Change Board Title" style="width: 100%;" name="title">
		                    	<input type="hidden" name="board_id" value="{{$board->id}}">
		                    </div>
		                    <div class="modal-footer">
		                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                        <button class="btn btn-primary" type="submit" name="submit" id="submitchangetitle">Save</button>
		                    </div>
		                </form>
		            </div>
		        </div>
        	</div>
		</div>
	</div>

	<div class="container" style="margin-top: 7px;">
		<div class="row">
			<div class="col typeboard">
				<div class="row">
					<div class="ui cards">
						@foreach($todolist1 as $t1)
					  	<div class="card">
					    	<div class="content">
					      		{{-- <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg"> --}}
					      		<div class="header-ui">
					        		{{$t1->title}}
					      		</div>
					      		<div class="meta">
					       			{{$t1->deadline}}
					  			</div>
					      		
					      		<div class="description">
					        		{{$t1->keterangan}}
					      		</div>
					    	</div>
					    	<div class="extra content">
					    		<i class="circular icon somecircle"></i>
					    		<i class="circular inverted tasks icon"></i>
					        	<i class="circular inverted blue check icon"></i>
					    	</div>
					  	</div>
					  	@endforeach
					</div>
				</div>
			</div>

			<div class="col typeboard">
				<div class="row">
					<div class="ui cards">
						@foreach($todolist2 as $t2)
					  	<div class="card">
					    	<div class="content">
					      		{{-- <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg"> --}}
					      		<div class="header-ui">
					        		{{$t2->title}}
					      		</div>
					      		<div class="meta">
					       			{{$t2->deadline}}
					  			</div>
					      		
					      		<div class="description">
					        		{{$t2->keterangan}}
					      		</div>
					    	</div>
					    	<div class="extra content">
					    		<i class="circular icon somecircle"></i>
					    		<i class="circular inverted tasks icon"></i>
					        	<i class="circular inverted blue check icon"></i>
					    	</div>
					  	</div>
					  	@endforeach
					</div>
				</div>
			</div>

			<div class="col typeboard">
				<div class="row">
					<div class="ui cards">
						@foreach($todolist3 as $t3)
					  	<div class="card">
					    	<div class="content">
					      		{{-- <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg"> --}}
					      		<div class="header-ui">
					        		{{$t3->title}}
					      		</div>
					      		<div class="meta">
					       			{{$t3->deadline}}
					  			</div>
					      		
					      		<div class="description">
					        		{{$t3->keterangan}}
					      		</div>
					    	</div>
					    	<div class="extra content">
					    		<i class="circular icon somecircle"></i>
					    		<i class="circular small inverted tasks icon"></i>
					        	<i class="circular small inverted blue check icon"></i>
					    	</div>
					  	</div>
					  	@endforeach
					</div>
				</div>
			</div>
			<div class="addtodolist satisfying">
				<div class="wrapper">
				    <a class="button" data-toggle="modal" data-target="#addnewtodo">New TodoList</a>
				</div>

				<!-- Filter: https://css-tricks.com/gooey-effect/ -->
				<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
				    <defs>
				        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
				            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
				            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
				        </filter>
				    </defs>
				</svg>
			</div>

			
			<div class="modal fade" id="addnewtodo" tabindex="-1" role="dialog" aria-labelledby="addnewtodolabel" aria-hidden="true">
			    <div class="modal-dialog" role="document">
			        <div class="modal-content">
			            <form action="/addtodolist" method="POST">
						{{csrf_field()}}
			                <div class="modal-header" style="flex-direction: row;">
			                   	<h5 class="modal-title">Add New TodoList</h5>
			                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                        <span aria-hidden="true">&times;</span>
			                    </button>
			                    	
			                </div>
			                <div class="modal-body">
			                    <input class="form-control form-control-sm" id="addnewtodolabel" type="text" placeholder="TodoList Title" style="width: 75%;" name="title">
			                    <input class="form-control form-control-sm" type="datetime" placeholder="Deadline" name="deadline">
			                    <input class="form-control form-control-sm" type="text" placeholder="Description" name="keterangan">
			                    <input type="hidden" name="board_id" value={{$id}} >
								<input type="hidden" name="status" value="1">
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			                    <button class="btn btn-primary" type="submit" name="submit">Save</button>
			                </div>
			           	</form>
			        </div>
			    </div>
	       	</div>

			{{-- USER YANG JOIN: <br>
				@foreach($user as $u)
				{{$u->username}}
				@endforeach
				<br>
			<div class="col-md-2">
				<form action="/addtodolist" method="POST">
					{{csrf_field()}}
					Title :<input type="text" name="title"><br>
					Deadline :<input type="datetime" name="deadline"><br>
					Ket :<input type="text" name="keterangan"><br>
					<input type="hidden" name="board_id" value={{$id}} >
					<input type="hidden" name="status" value="1">
					<button type="submit">Submit</button>
				</form><br>
				<form action="/invite" method="POST">
					{{csrf_field()}}
					Invite User : <input type="text" name="username">
					<input type="hidden" name="board_id" value={{$id}} >
					<button type="submit">Invite</button>
				</form>
			</div> --}}
		</div>
	</div>
@endsection

<script type="text/javascript">
	$(document).ready(function() {
		$('body').css("background-color", "{{$board->background}}");
		$('.header').css("background-color", "transparent");

		$('#submitchangetitle').click(function(){
			var changetitleform = $('#changetitleform');
			changetitleform.submit(function(e){
				e.preventDefault();
				var formdata = changetitleform.serialize();

				$.ajax({
					url:'/changes',
					type:'POST',
					data:formdata,
					success: function(data){
						
						$('#changeboardtitle').modal('hide');
						$('.modal-backdrop').remove();
						$('#boardtitlenow').html(data['msg']);
					},
				});
			})
		});


	});


</script>