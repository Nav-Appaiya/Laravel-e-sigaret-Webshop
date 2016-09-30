@extends('layouts.master')

@section('titel', 'Primera shop')
@section('breadcrumbs', Breadcrumbs::render('category.show', $category))

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(!$property->isEmpty())
            @if(count($property) != 1)
                <p>
                    <h1></h1>
                    Er zijn {{count($property)}} producten gevonden
                </p>
                 <hr>
            @else
                <p>Er is één product gevonden</p>
                <hr>
        @endif
    </div>

    <div class="col-md-2">
    {{--{{()}}aa--}}
        <div class="filter-sec">
            <label>CATEGORIEËN</label>

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
                    width: 100%;
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
            </div>

            <div class="filter-sec">
            <label>Prijs</label>
            <form action="{{URL::current()}}">

                <style>
                    .sliderone{
                        margin-top: 10px;
                    }
                    .unibox-price-min{
                        display: inline-block;
                        width: 50px;
                        text-align: center;
                        float: left;
                        margin-top: 30px;
                    }
                    .unibox-price-max{
                       display: inline-block;
                        width: 50px;
                        text-align: center;
                        float: right;
                        margin-top: 30px;
                    }
                </style>

                <input type="text" class="unibox-price-min" placeholder="Min Price" onfocus="uniboxResetHint('Min Price',false,this);" onblur="uniboxResetHint('Min Price',true,this);" value="Min Price" onkeyup="uniboxKeyUp(event,this)" onkeydown="uniboxKeyDown(event,this)" disabled/>
                <input type="text" class="unibox-price-max" placeholder="Max Price" onfocus="uniboxResetHint('Max Price',false,this);" onblur="uniboxResetHint('Max Price',true,this);" value="Max Price" onkeyup="uniboxKeyUp(event,this)" onkeydown="uniboxKeyDown(event,this)" disabled/>

                <div id="sliderone" style="width: 100%"></div>
                {{--<div id="slider"></div>--}}
                {{--<div class="unibox-quick-summary-line">--}}
                    {{--<span class="unibox-quick-summary"></span><span>&nbsp;</span>--}}
                {{--</div>--}}
            {{--<input value="{{$property->first()->product->min('price')}}">--}}
            {{--<input value="{{$property->first()->product->max('price')}}">--}}
            {{--<input id="slider-snap" type="text" class="span2" name="price" value="" data-slider-min="{{$property->first()->product->min('price')}}" data-slider-max="{{$property->first()->product->max('price')}}" data-slider-step="5" data-slider-value="[{{ \Illuminate\Support\Facades\Input::get('price') == null ? $property->first()->product->min('price').','.$property->first()->product->max('price') : \Illuminate\Support\Facades\Input::get('price')}}]"/>--}}
                {{--<span class="example-val" id="slider-snap-value-upper">800.00</span>--}}
                {{--<span class="example-val" id="slider-snap-value-lower">0.00</span>--}}
            {{--</form>--}}
            {{--Filter by price interval: <b>€ 10</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b>€ 1000</b>--}}
            </div>

            <div class="filter-sec">
                <label>Merken</label>
                <select class="form-control">
                    <option>Merk1</option>
                    <option>Merk2</option>
                    <option>Merk3</option>
                </select>
            </div>
</div>
<div class="col-lg-10">
            {{--asd--}}
                    @foreach($property as $product)
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <img src="{{$product->product->productimages->first() ? '/images/product/'.$product->product->productimages->first()->imagePath : 'http://www.inforegionordest.ro/assets/images/default.jpg' }}" width="100%" height="220xp" class="">
                                    <p class="text">{{$product->product->name}}</p>
                                    <p class="text">
                                        @if($product->product->discount != 0)
                                            <small style="text-decoration:line-through;">{{$product->product->price}}</small>
                                            <b style="">{{$product->product->price - $product->product->discount}}</b>
                                        @else
                                            {{$product->product->price}}
                                        @endif
                                    </p>
                                </div>
                                <div class="panel-footer">
                                    <a href="{{route('product.show', [str_replace(' ', '-', $product->product->name), $product->product->id])}}">bekijken</a>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p>Er zijn geen product(en) gevonden</p>
                            <hr>
                        @endif
                     </div>
 </div>
@stop

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            var min = {!! (count( $property) == 0 ? 0 : $property->first()->product->min('price') ) !!};
            var max = {!! (count( $property) == 0 ? 0 : $property->first()->product->max('price') ) !!};
            {{--var max = {!! ($property->first()->product->max('price')) !!};--}}

            $("#sliderone").noUiSlider({
                start: [{!! (count( $property) == 0 ? 0 : $property->first()->product->min('price') ) !!}, {!! (count( $property) == 0 ? 0 : $property->first()->product->max('price') ) !!}],
                step: 1,
                connect: true,
                range: {
                    'min': [ {!! (count( $property) == 0 ? 0 : $property->first()->product->min('price') ) !!} ],
                    'max': [ {!! (count( $property) == 0 ? 0 : $property->first()->product->max('price') ) !!} ]
                }
            });

            $("input.unibox-price-min").val(min);
            $("input.unibox-price-max").val(max);

            $("#sliderone").on('slide', function(event, values) {
                $("input.unibox-price-min").val(values[0]);
                $("input.unibox-price-max").val(values[1]);
            });
        });
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.css">
@endpush