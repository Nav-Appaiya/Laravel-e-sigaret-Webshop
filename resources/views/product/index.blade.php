@extends('layouts.master')

@section('titel', 'Primera shop')
@section('seotags', 'seotags')

@section('sidebar')
    @parent
@endsection

@section('content')


<ol class="breadcrumb">
    <li><a href="{{ URL::route('homepage') }}">Homepage</a></li>
    <li>End</li>
    <li>Somethings</li>
    <li class="active">Products</li>
</ol>

<div class="content">

    <h3>Filter</h3>

{{--{{($category->product)}}aa--}}

        <div class="col-lg-3">
            filter<br>

            <style>
                .active > a{
                    color: green;
                }
                .list > li > .active{
                    display: block !important;
                }
                .list ul {
                    display: none;
                }
                /*!
                 * Slider for Bootstrap
                 *
                 * Copyright 2012 Stefan Petre
                 * Licensed under the Apache License v2.0
                 * http://www.apache.org/licenses/LICENSE-2.0
                 *
                 */
                .slider {
                    display: inline-block;
                    vertical-align: middle;
                    position: relative;
                }
                .slider.slider-horizontal {
                    width: 210px;
                    height: 20px;
                }
                .slider.slider-horizontal .slider-track {
                    height: 10px;
                    width: 100%;
                    margin-top: -5px;
                    top: 50%;
                    left: 0;
                }
                .slider.slider-horizontal .slider-selection {
                    height: 100%;
                    top: 0;
                    bottom: 0;
                }
                .slider.slider-horizontal .slider-handle {
                    margin-left: -10px;
                    margin-top: -5px;
                }
                .slider.slider-horizontal .slider-handle.triangle {
                    border-width: 0 10px 10px 10px;
                    width: 0;
                    height: 0;
                    border-bottom-color: #0480be;
                    margin-top: 0;
                }
                .slider.slider-vertical {
                    height: 210px;
                    width: 20px;
                }
                .slider.slider-vertical .slider-track {
                    width: 10px;
                    height: 100%;
                    margin-left: -5px;
                    left: 50%;
                    top: 0;
                }
                .slider.slider-vertical .slider-selection {
                    width: 100%;
                    left: 0;
                    top: 0;
                    bottom: 0;
                }
                .slider.slider-vertical .slider-handle {
                    margin-left: -5px;
                    margin-top: -10px;
                }
                .slider.slider-vertical .slider-handle.triangle {
                    border-width: 10px 0 10px 10px;
                    width: 1px;
                    height: 1px;
                    border-left-color: #0480be;
                    margin-left: 0;
                }
                .slider input {
                    display: none;
                }
                .slider .tooltip-inner {
                    white-space: nowrap;
                }
                .slider-track {
                    position: absolute;
                    cursor: pointer;
                    background-color: #f7f7f7;
                    background-image: -moz-linear-gradient(top, #f5f5f5, #f9f9f9);
                    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#f9f9f9));
                    background-image: -webkit-linear-gradient(top, #f5f5f5, #f9f9f9);
                    background-image: -o-linear-gradient(top, #f5f5f5, #f9f9f9);
                    background-image: linear-gradient(to bottom, #f5f5f5, #f9f9f9);
                    background-repeat: repeat-x;
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);
                    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                }
                .slider-selection {
                    position: absolute;
                    background-color: #f7f7f7;
                    background-image: -moz-linear-gradient(top, #f9f9f9, #f5f5f5);
                    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f9f9f9), to(#f5f5f5));
                    background-image: -webkit-linear-gradient(top, #f9f9f9, #f5f5f5);
                    background-image: -o-linear-gradient(top, #f9f9f9, #f5f5f5);
                    background-image: linear-gradient(to bottom, #f9f9f9, #f5f5f5);
                    background-repeat: repeat-x;
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9f9f9', endColorstr='#fff5f5f5', GradientType=0);
                    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
                    -moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
                    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                }
                .slider-handle {
                    position: absolute;
                    width: 20px;
                    height: 20px;
                    background-color: #0e90d2;
                    background-image: -moz-linear-gradient(top, #149bdf, #0480be);
                    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#149bdf), to(#0480be));
                    background-image: -webkit-linear-gradient(top, #149bdf, #0480be);
                    background-image: -o-linear-gradient(top, #149bdf, #0480be);
                    background-image: linear-gradient(to bottom, #149bdf, #0480be);
                    background-repeat: repeat-x;
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
                    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
                    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
                    box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
                    opacity: 0.8;
                    border: 0px solid transparent;
                }
                .slider-handle.round {
                    -webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;
                }
                .slider-handle.triangle {
                    background: transparent none;
                }
            </style>

            <ul class="list">
                @foreach(\App\Category::where('category_id', 0)->get() as $parent)
                    <li>
                        <a href="{{route('product.index', [str_replace(' ', '-', $category->parent->title), str_replace(' ', '-', $parent->children()->first()->title), $parent->children()->first()->id])}}">{{$parent->title}}</a>
                        <ul class="{{ $parent->id == $category->parent->id ? 'active' : '' }}">
                            @foreach($parent->children as $children)
                               <li class="{{$children->id == str_replace('c-', '', Request::segment(3)) ? 'active' : '' }}">
                                    <a href="{{route('product.index', [ str_replace(' ', '-', $category->parent->title),  str_replace(' ', '-', $children->title), $children->id])}}">{{$children->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>

            prijs<br>
            <form action="{{URL::current()}}">

            {{--<input value="{{$property->first()->product->min('price')}}">--}}
            {{--<input value="{{$property->first()->product->max('price')}}">--}}
            <input id="ex2" type="text" class="span2" name="price" value="" data-slider-min="{{$property->first()->product->min('price')}}" data-slider-max="{{$property->first()->product->max('price')}}" data-slider-step="5" data-slider-value="[{{ \Illuminate\Support\Facades\Input::get('price') == null ? $property->first()->product->min('price').','.$property->first()->product->max('price') : \Illuminate\Support\Facades\Input::get('price')}}]"/>


            </form>
            {{--Filter by price interval: <b>€ 10</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b>€ 1000</b>--}}
        </div>
</div>
<div class="content">
        <div class="col-lg-9">
            <div class="row">
                @if(!$property->isEmpty())
                    @if(count($property) != 1)
                        <p>Er zijn {{count($property)}} producten gevonden</p>
                    @else
                        <p>Er is één product gevonden</p>
                    @endif
                    @foreach($property as $product)
                        <div class="col-lg-3">
                            <img src="{{$product->product->productimages->first() ? '/images/product/'.$product->product->productimages->first()->imagePath : 'http://www.inforegionordest.ro/assets/images/default.jpg' }}" width="100%" height="220xp" class="">
                            <p class="text">{{$product->product->name}}</p>
                            <p class="text">{{$product->product->price}}</p>
                            <a href="{{route('product.show', [str_replace(' ', '-', $product->product->name), $product->product->id])}}">bekijken</a>
                        </div>
                    @endforeach
                @else
                  <p>Er zijn geen product(en) gevonden</p>
                @endif

            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.1.3/bootstrap-slider.js"></script>
    {{--<script type="text/javascript">--}}
        {{--$(function() {--}}
            {{--$( "#datepicker" ).datepicker();--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.0/bootstrap-slider.js"></script>--}}
    <script type="text/javascript">
        // Instantiate a slider
        var mySlider = $("#ex2").bootstrapSlider();

        // Call a method on the slider
        var value = mySlider.bootstrapSlider('getValue');

//        <!--
//        $(document).ready(function () {
//            window.setTimeout(function() {
//                $(".alert").fadeTo(1500, 0).slideUp(500, function(){
//                    $(this).remove();
//                });
//            }, 5000);
//        });
        //-->
        // With JQuery
//        $("#ex2").slider({
//            tooltip: 'always'
//        });
//        // Without JQuery
//        var slider = new Slider('#ex2', {
//            tooltip: 'always'
//        });
//        / With JQuery
//        $("#ex2").bootstrapSlider ({});
//
//        // Without JQuery
//        var slider = new bootstrapSlider ('#ex2', {});
    </script>
<style>
    #ex1Slider .slider-selection {
        background: #BABABA;
    }

</style>

@endsection

