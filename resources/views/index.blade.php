@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  

@posts
@include('partials.content-'.get_post_type())

@endposts
