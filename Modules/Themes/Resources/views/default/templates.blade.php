@extends('themes::default.layout')
@section('title', __('Templates'))
@section('content')
@include('themes::default.nav')
<section class="section-sm" id="pricing">
        <div class="container">
<div class="row">
  <div class="col-12 text-center">
      <h3 class="">@lang('Välj CV-mall eller en mall för ditt personliga brev')</h3>
  </div>
</div>

<div class="row mt-4">
  <div class="col-sm-8">
      @php
        $route_id = request()->route('id');
      @endphp
      <a href="{{ url('templates')}}" class="btn @if(empty($route_id)) btn-secondary @else btn-light @endif btn-sm">@lang("Alla mallar")</a>
      @foreach($categories as $category)
          <div class="btn-group" role="group">
            <a class="btn @if($route_id == $category->id) btn-secondary @else btn-light @endif btn-sm" href="{{ url('templates/'). '/' .$category->id}}">{{$category->name}}</a>
          </div>
      @endforeach
  </div>
</div>
@if($data->count() > 0)

<div class="row row_blog_responsive pt-4 clearfix">
    @foreach($data as $item)
      <div class="col-md-4 itembb">
          <div class="clearfix blog-bottom blog blogitemlarge">
              <a href="#" data-id="{{$item->id}}" data-toggle="modal" data-target="#createModal" title="{{$item->name}}" class="btn_builder_template image-blog date clearfix">
                  <img src="{{ URL::to('/') }}/storage/thumb_templates/{{ $item->thumb }}" alt="{{$item->name}}" data-was-processed="true" class="" />
                  @if($item->is_premium)
                        <span class="post-date badge badge-danger"><i class="fas fa-star"></i> @lang("Premium")</span>
                  @else
                        <span class="post-date badge badge-success"><i class="fas fa-star"></i> @lang("Gratis")</span>
                  @endif
              </a>
              <div class="content_blog clearfixflex flex-column flex-lg-row">
                  <div class="p-1">
                    {{ $item->name }}
                  </div>
                  <div class="d-flex pt-1">
                      <a href="#" class="btn btn-sm btn-primary mr-2 btn_builder_template" data-id="{{$item->id}}" data-toggle="modal" data-target="#createModal">@lang("Använd mall")</a>
                  </div>
              </div>
          </div>
      </div>
    @endforeach
</div>
<div class="row mt-2 ml-1">
    {{ $data->appends( Request::all() )->links() }}
</div>

@else
<div class="row mt-4">
  <div class="col-lg-12">
        <div class="text-center">
              <div class="error mx-auto mb-3"><i class="far fa-window-maximize"></i></div>
              <p class="lead text-gray-800">@lang('Inga mallar hittas')</p>
            </div>
  </div>
</div>
@endif

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">@lang('Skapa CV eller personligt brev')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form id="" action="{{route('resumecv.save')}}" method="post" enctype='multipart/form-data'>
          @csrf
      <div class="modal-body">
          <div class="form-group">
            <input type="number" class="form-control" name="template_id" hidden="" required="" id="template_id_builder">
            <label for="name" class="col-form-label">@lang('Name'):</label>
            <input type="text" class="form-control" name="name" required="" id="page-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">@lang('Close')</button>
        <button type="submit" class="btn btn-primary btn-sm" id="saveandbuilder">@lang('Spara & skapa')</button>
      </div>
      </form>
    </div>
  </div>
</div>

@push('scripts')
<script src="{{ Module::asset('resumecv:js/templates.js') }}"></script>
@endpush
</div>
</section>
@stop

