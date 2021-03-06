@extends('admin-panel.layouts.admin')

@section('title', 'nieuwe product detail')
@section('breadcrumb', Breadcrumbs::render('dashboard.product.edit.property.create', Request::segment(3)))
{{--@section('breadcrumb', Breadcrumbs::render('dashboard.product.edit.property.edit',$property->product->id))--}}


@section('content')

    <div class="row">
        <div class="col-md-6">

        {!! Form::open(['route' => ['admin_product_property_store']]) !!}

            {!! Form::hidden('id', Request::segment(3)) !!}

            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('stock', 'voorraad') !!}
                {!! Form::number('stock', 0, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('serialNumber', 'serialNumber') !!}
                {!! Form::text('serialNumber', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                {{--{{ Form::select('serialNumber', ['color' => 'kleur', 'battery' => 'battery', 'nicotine' => 'nicotine'], null, ['class' => 'form-control']) }}--}}
            </div>

            @if(\App\Product::find(Request::segment(3))->property()->exists() != 0)

                <?php
                    //not clean fix later
                    $all = collect(\App\Details::where('type', \App\Product::find(Request::segment(3))->property->first()->detail->type)->get());
                    $used = \App\Property::where('product_id' ,Request::segment(3))->get();
                    $array = [];
                    foreach ($used as $item){
                        array_push($array, $item->detail);
                    }
                    $newCollection = collect($all)->diff($array)->flatten(1) ;
                ?>

                <div class="form-group">
                    {!! Form::label('detail', 'detail > '.\App\Product::find(Request::segment(3))->property->first()->detail->type) !!}
                    @if(count($used) == 1)
                        {{ Form::select('detail', $newCollection->pluck('value', 'id')->toArray(), null, ['class' => 'form-control']) }}
                    @else
                        {{ Form::select('detail', $newCollection->pluck('value', 'id')->toArray(), null, ['class' => 'form-control', count($newCollection) == 0 ? 'disabled' : '']) }}
                        @if (count($newCollection) == 0)
                            <label>Uw details zijn op. Maak <a href="{{route('admin_property_index')}}">hier</a> meer aan.</label>
                        @endif
                    @endif
                </div>
            @else
                <div class="form-group">
                    {!! Form::label('detail', 'detail') !!}
                    {{ Form::select('detail', array_merge(['null' => 'geen'], \App\Details::groupDetails()), null, ['class' => 'form-control']) }}
                </div>
            @endif

            {!! Form::submit('upload', ['class' => 'btn btn-primary pull-right'])!!}

            <div class="form-group">
                <a class="btn btn-default pull-right" style="margin-right: 10px;">stop</a>
            </div>

            {!! Form::close() !!}
        </div>


        <div class="col-md-2">
            <ul class="list-group">
                {{--<li class="list-group-item"><a href="{{route('admin_property_create')}}">new</a></li>--}}
                 {{--<li class="list-group-item"><a href="{{route('admin_property_create')}}">new</a></li>--}}
            </ul>
        </div>

    </div>

@stop
