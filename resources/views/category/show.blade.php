@extends('layouts.master')

@section('titel', 'Primera shop')
@section('breadcrumbs', Breadcrumbs::render('category', $category))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1>{{$category->title}}</h1>
                <hr>
                <br>
                @foreach($category->children as $child)
                    <a href="{{ route('product.index', [str_replace(' ', '-', $category->title), str_replace(' ', '-', $child->title), $child->id ]) }}">
                        <div class="col-lg-3 thumbnail">
                            <h1>{{$child->title}}</h1>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection