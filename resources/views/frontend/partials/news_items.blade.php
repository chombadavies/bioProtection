


@foreach ($news as $news)

<div class="col-md-4">
    <div class="card" style="width: 100%;border:none">
        <img class="card-img-top" src="{{asset('backend/uploads/'.$news->image)}}" alt="Card image cap" style="border-radius: 20px" height="60%">
        <br>
        <div class="card-body">
          <h5 class="card-title">{{$news->title}}</h5>
          <p class="card-text" style="text-align: justify"> {{strip_tags(str_limit($news->summery,$limit=250,$end='...'))}}</p>
          <br>
          <a href="{{route('news.details',$news->id)}}" class="btn btn-outline-success">Read More</a>
        </div>
      </div>
      <br>
</div>

@endforeach