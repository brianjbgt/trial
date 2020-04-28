@extends('layouts.app')
@section('activeHeroes','active')
@section('url_home',url('/home'))
@section('url_heroes','#2b')

@section('content')
	@include('layouts.loggedin')
 
	{{csrf_field()}}
	<script type="text/javascript">
		$(document).ready(function() {	
			$('.bio').click(function(){
				var id = $(this).attr('id');
				var heroname = $(this).attr('name');
				$(".modal-title").prop("disabled", "disabled");	
				$.ajax({
		            type: "POST",
		            url: $(location).attr("href"),
		            data: {'heroid':id, '_token':$('input[name=_token]').val()},
		            dataType: 'JSON',
		            success: function( response ) {
		          			$(".modal-title").text(heroname);
		          			$(".real_name").text(response.real_name);
		          			$(".age").text(response.age);
		          			$(".occupation").text(response.occupation);
		          			$(".base").text(response.base);
		          			$(".affiliation").text(response.affiliation);
		          			$(".quote").text(response.quote);
		          			$(".story").text(response.story);

		            },error: function(){
		                alert("error");
		            }
		        });
			});
		});					
	</script>
@endsection