@if(isset($audio))
		<footer class="footer fixed-bottom">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="{{route('detail' , ['id' => $audio->id])}}"><img src="{{asset("image/thumbnail/" . $thumb->thumbnail)}}" alt="" id="album_art">
					</a>
					</div>
					<div class="col">
						<p>{{$audio->file_name}}</p>
					</div>
					<div class="col">
						<audio id="song" src="{{asset('audio/'.$audio->file_name . '.mp3')}}" ontimeupdate="initProgressBar()"></audio>
						<span>
							<progress id="seek-time" value="0" max="1"></progress>
						</span>
						<small style="float:left; position: relative; left:20px;" id="start-time"></small>
						<small style="float:right; position: relative; right:20px;" id="end-time"></small>
					</div>
					<div class="col">
						<a href="{{route('select',['id'=>$audio->id,'ask'=>"backward"])}}" ><i class="fas fa-backward"></i></a>
						<i id="fa-pp" class="fas fa-play" onclick="playPause()"></i>
						<a href="{{route('select',['id'=>$audio->id,'ask'=>"forward"])}}" id="forward"><i class="fas fa-forward"></i></a>
					</div>
				</div>
				</div>		
		 </footer>
@endif