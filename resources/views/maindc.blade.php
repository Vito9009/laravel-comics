@extends('layout.app')
 
@section('content')
<div>
    <div class="my_main-container">
      <div class="jumbo">
  
      </div>
  
       <button class="top-btn">current series</button>
  
      <div class="main-showcase">
        <div class="showcase-content">
            <div class="preview-container">
              @foreach ($comics as $item)
                  <div class="my_thumb">
                    <div class="img-thumb-container">
                      <img src="{{$item['thumb']}}" alt="">
                    </div>
                    <h4>{{$item['series']}}</h4>
                  </div>
              @endforeach

            </div>
        </div>
      </div>

      <div class="bottom-btn-container">
         <button class="bottom-btn">load more</button>
      </div>
    </div>
  </div>

@endsection