

@extends('layouts.master')
@section('content')
	@extends('layouts.nav')
	@section('navcontent')
		<button type="button" id="boardtitlenow" class="btn btn-sm btn-light" data-toggle="modal" data-target="#changeboardtitle">
            {{$board->title}}
        </button>
	@endsection

	<div class="container" style="margin-top: 65px;">
		<div class="row">
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

	<div class="container" style="margin-left: 20px;">
		<div class="col-md-3 card-columns-1 my-container-todo-nav">
			<h5>To Do</h5>
		</div>
		<div class="col-md-3 card-columns-1 my-container-todo-nav">
			<h5>Doing</h5>
		</div>
		<div class="col-md-3 card-columns-1 my-container-todo-nav">
			<h5>Done</h5>
		</div>
	</div>

	<div class="container" style="margin-left: 20px;">
		{{-- <div class="btn red" href='{{ URL::to('/board/') }}'></div> --}}
			<div class="col-md-3 card-columns-1 my-container-todo">
				@foreach($todolist1 as $t1)
				<div class="card text-xs-center todocard">
					<div class="card-header">
						{{$t1->deadline}}
					</div>
					<div class="card-block">
						<h5 class="card-title">{{$t1->title}}</h5>
						<p class="card-text">{{$t1->keterangan}}</p>
					</div>
					<div class="card-footer">
						<form action="{{route('update_status')}}" method='POST'>
					    	{{csrf_field()}}
					    	<input type="hidden" name="id" value={{$t1->id}}>
					   		<input type="hidden" name="status" value=2>
					    	<button type="submit">
					        	<i class="circular inverted tasks icon"></i>
					        </button>
					    </form>
					    <form action="{{route('update_status')}}" method='POST'>
					    	{{csrf_field()}}
					    	<input type="hidden" name="id" value={{$t1->id}}>
					   		<input type="hidden" name="status" value=3>
					    	<button type="submit">
					        	<i class="circular inverted blue check icon"></i>
					        </button>
					    </form>
					    <a href='{{ URL::to('/deletetodolist/'.$t1->id) }}'>DELETE</a>
					</div>
				</div>
				@endforeach
			</div>

			<div class="col-md-3 card-columns-1 my-container-todo">
				@foreach($todolist2 as $t2)
				<div class="card text-xs-center todocard">
					<div class="card-header">
						{{$t2->deadline}}
					</div>
					<div class="card-block">
						<h5 class="card-title">{{$t2->title}}</h5>
						<p class="card-text">{{$t2->keterangan}}</p>
					</div>
					<div class="card-footer">
						<form action="{{route('update_status')}}" method='POST'>
					    	{{csrf_field()}}
					    	<input type="hidden" name="id" value={{$t2->id}}>
					   		<input type="hidden" name="status" value=2>
					    	<button type="submit">
					        	<i class="circular inverted tasks icon"></i>
					        </button>
					    </form>
					    <form action="{{route('update_status')}}" method='POST'>
					    	{{csrf_field()}}
					    	<input type="hidden" name="id" value={{$t2->id}}>
					   		<input type="hidden" name="status" value=3>
					    	<button type="submit">
					        	<i class="circular inverted blue check icon"></i>
					        </button>
					    </form>
					    <a href='{{ URL::to('/deletetodolist/'.$t2->id) }}'>DELETE</a>
					</div>
				</div>
				@endforeach
			</div>
			
			<div class="col-md-3 card-columns-1 my-container-todo">
				@foreach($todolist3 as $t3)
				<div class="card text-xs-center todocard">
					<div class="card-header">
						{{$t3->deadline}}
					</div>
					<div class="card-block">
						<h5 class="card-title">{{$t3->title}}</h5>
						<p class="card-text">{{$t3->keterangan}}</p>
					</div>
					<div class="card-footer">
						<form action="{{route('update_status')}}" method='POST'>
					    	{{csrf_field()}}
					    	<input type="hidden" name="id" value={{$t3->id}}>
					   		<input type="hidden" name="status" value=2>
					    	<button type="submit">
					        	<i class="circular inverted tasks icon"></i>
					        </button>
					    </form>
					    <form action="{{route('update_status')}}" method='POST'>
					    	{{csrf_field()}}
					    	<input type="hidden" name="id" value={{$t3->id}}>
					   		<input type="hidden" name="status" value=3>
					    	<button type="submit">
					        	<i class="circular inverted blue check icon"></i>
					        </button>
					    </form>
					    <a href='{{ URL::to('/deletetodolist/'.$t3->id) }}'>DELETE</a>
					</div>
				</div>
				@endforeach
			</div>

			<div class="addtodolist satisfying">
				<div class="wrapper">
				    <a class="button" data-toggle="modal" data-target="#addnewtodo">New TodoList</a>
				</div>
				<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
				    <defs>
				        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
				            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
				            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
				        </filter>
				    </defs>
				</svg>
			</div>

	</div>



	<div class="modal fade" id="addnewtodo" tabindex="-1" role="dialog" aria-labelledby="addnewtodolabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			    <form action="{{route('addtodolist')}}" method="POST">
				{{csrf_field()}}
			         <div class="modal-header" style="flex-direction: row;">
			            <h5 class="modal-title">Add New TodoList</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			            </button>
			                    	
			        </div>
			        <div class="modal-body">
			            <input class="form-control form-control-sm" id="addnewtodolabel" type="text" placeholder="TodoList Title" style="width: 75%;" name="title">
			            <div class="ui calendar" id="deadlinecal">
						    <div class="ui input left icon">
						      	<i class="calendar icon"></i>
						      	<input type="text" class="form-control form-control-sm" name="deadline" placeholder="Deadline">
						    </div>
						</div>
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
						url:'{{route('changes')}}',
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

			$('#deadlinecal').calendar({
				monthFirst: false,
				ampm: false,
				formatter: {
					date: function (date, settings) {
				    	if (!date) return '';
				    	var day= date.getDate();
				    	var month= date.getMonth()+1;
				    	var year= date.getFullYear();
				    	return year+'-'+month+'-'+day;
				    }
				}
			});
		});
	</script>

	
@endsection

