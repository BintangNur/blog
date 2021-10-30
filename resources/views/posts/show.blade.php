@extends('template') 
@section('content') 
<div class="row mt-5 mb-5"> 
<div class="col-lg-12 margin-tb"> 
<div class="float-left"> 
<h2> Show Post</h2> 
</div> 
<div class="float-right"> 
<a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a> 
</div> 
</div> 
</div> 
<div>
          <iframe style="width: 950px;"src="{{ $post->location }} " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
></iframe>
<div class="row"> 
<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>NAMA TEMPAT:</strong> 
{{ $post->title }} 
</div> 
</div> 
<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>KETERANGAN:</strong> 
{{ $post->content }} 
</div> 
</div> 
</div> 
@endsection 
 