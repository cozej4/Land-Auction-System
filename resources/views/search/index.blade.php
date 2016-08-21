@extends('layouts.app')

@section('page_title', 'Search')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
        <div id="carousel-299058" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel-299058" data-slide-to="0" class=""> </li>
            <li data-target="#carousel-299058" data-slide-to="1" class="active"> </li>
            <li data-target="#carousel-299058" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item">
              <!-- <img class="img-responsive" src="/img/1920x500.gif" alt="thumb"> -->
              <img class="img-responsive" src="http://lorempixel.com/1920/500/city/8" alt="thumb">
              <div class="carousel-caption"> Carousel caption. Here goes slide description. Lorem ipsum dolor set amet. </div>
            </div>
            <div class="item active"> 
              <!-- <img class="img-responsive" src="/img/1920x500.gif" alt="thumb"> -->
              <img class="img-responsive" src="http://lorempixel.com/1920/500/city/9" alt="thumb">
              <div class="carousel-caption"> Carousel caption 2. Here goes slide description. Lorem ipsum dolor set amet. </div>
            </div>
            <div class="item"> 
              <!-- <img class="img-responsive" src="/img/1920x500.gif" alt="thumb"> -->
              <img class="img-responsive" src="http://lorempixel.com/1920/500/city/10" alt="thumb">
              <div class="carousel-caption"> Carousel caption 3. Here goes slide description. Lorem ipsum dolor set amet. </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-299058" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel-299058" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
    </div>
    <hr>
  <div class="row">
    <div class="col-lg-9 col-md-12">

    <div class="row">
        <div class="col-md-12">



<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Search Results</h3>
  </div>
  <div class="panel-body">
    <div id="searchResults"></div>
</div>
</div>
          

          

{{--			<div id="plotPanel2" class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Plots</h3>
				</div>
				<ul class="list-group">
					<table id="plotDataTable" class="table table-hover display" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Area</th>
								<th>Type</th>
								<th>Block</th>
								<th>Plot#</th>
								<th>Size</th>
								<th>Price (TZS)</th>
							</tr>
						</thead>
						<tbody>

						</tbody>

					</table>
				</ul>
			</div>

            --}}
          

        </div>
    </div>


    </div>

   <div class="col-lg-3 col-md-6 col-md-offset-3 col-lg-offset-0">
  <div class="alert alert-info">
    <h3 class="text-center">Find Your Plot</h3>
    <form class="form-horizontal">
      <div class="form-group">
        <label for="area_id" class="control-label">Area</label>
        <select class="form-control" name="area_id" id="area_id">
          <option value="0">Any</option>
          @foreach($areas as $area)
						<option class="list-group-item" value="{{ $area->area_id }}">{{ $area->name }}</<option>
			  @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="area_type_id" class="control-label">Area Type</label>
        <select class="form-control" name="area_type_id" id="area_type_id">
          <option value="0">Any</option>
          @foreach($area_types as $area_type)
						<option value="{{ $area_type->areas_type_id }}">{{ $area_type->name }}</option>	
			  @endforeach
  
        </select>
      </div>
{{--      <div class="form-group">
        <label for="min_size" class="control-label">Min Size</label>
        <div class="input-group">
          <input type="text" class="form-control" id="min_size">
          <div class="input-group-addon">Sqrm</div>
        </div>
      </div>
      <div class="form-group">
        <label for="max_size" class="control-label">Max Size</label>
        <div class="input-group">
          <input type="text" class="form-control" id="max_size">
          <div class="input-group-addon">Sqrm</div>
        </div>
      </div>--}}
      <p class="text-center"><button type="button" id="btn-search" class="btn btn-primary btn-block">Search</button> </p>
    </form>
    <br><br><br><br>
  </div>
  <hr>
</div>
    </div>
  </div>
</div>
<hr>


@endsection