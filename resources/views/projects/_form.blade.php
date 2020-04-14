

@csrf

<div class="form-group">
<label  for="title">Titulo del proyecto </label>
  <input class="form-control border-0 bg-light shadow-sm"
   type="text" name="title" id="tile" value="{{old('title' , $project->title )}}">

</div>

<div class="form-group">
<label for="url" >Url del proyecto</label>
  <input class="form-control border-0 bg-light shadow-sm"
   type="text" name="url" id="url"  value="{{old('url' , $project->url)}}">

</div>

<div class="form-group">
<label for="description" >Descripción del proyecto</label>
<textarea  class="form-control border-0 bg-light shadow-sm"
name="description" id="description" >{{old('description', $project->description)}}</textarea>
</div>
<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>

