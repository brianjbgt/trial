@foreach($heroes as $hero)
	<section>
		<div class="hero-container content-box">
			<div class="hero-header">
				<a data-toggle="modal" data-target="#bioModal" name="{{$hero->heroname}}" class="bio" id="{{$hero->he_id}}"><h3 class="heroname">{{$hero->heroname}}</h3>
				<h1 class="herotype">-{{$hero->type}}</h1></a>
			</div>
			<div class="img-container">
				<a data-toggle="modal" data-target="#bioModal" name="{{$hero->heroname}}" class="bio" id="{{$hero->he_id}}">
					<img class="portrait" src="{{asset('css/images/heroes/'.$hero->heroname.".png")}}">
				</a>
			</div>
			<div class="hero-details">
				<p class="hero-overview">{{$hero->overview}}</p>
			</div>
			<div class="abilities">
				<ul class="list-inline">
				 @foreach($abilities as $ability)
				 	@if("{{$hero->he_id}}" === "{{$ability->hero_id}}")
						<li class="list-inline-item">
							<img class="abico" src="{{asset("css/images/abilities/". $hero->heroname."/".$ability->ability.".png")}}">
							<h3 class="ability">{{$ability->ability}}</h3>
							<p class="ab_desc">{{$ability->description}}</p>
						</li>
				 	@endif
				 @endforeach
				</ul>
			</div>
		</div>	
	</section>
@endforeach

<div id="bioModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				{{-- modal-body content --}}
				<div class="block"><h3 class="herolabel">Real Name: </h3><p class="real_name" id="details"></p></div>
				<div class="block"><h3 class="herolabel">Age: </h3><p class="age" id="details"></p></div>
				<div class="block"><h3 class="herolabel">Occupation: </h3><p class="occupation" id="details"></p></div>
				<div class="block"><h3 class="herolabel">Base of Operations: </h3><p class="base" id="details"></p></div>

				<div class="block"><h3 class="herolabel">Affiliation: </h3><div id="details"><p class="affiliation fixer"></p></div></div>
				<div class="block"><h3 class="quote"></h3></div>
				<div class="block"><h3 class="herolabel">Story: </h3><p class="story"></p></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<link href="{{ asset('css/heroes.css') }}" rel="stylesheet">