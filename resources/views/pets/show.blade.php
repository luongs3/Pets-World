@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">{{ trans('label.show_pet') }}</div>

                <div class="panel-body form-horizontal">
                    @include('common.errors')
                    @include('common.flash_message')
                    <div class="form-group">
                        {!! Form::label('name', trans('label.name'), ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('name', isset($pet['name']) ? $pet['name'] : '', ['class' => 'form-control', 'disabled']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('avatar', trans('label.avatar'), ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            <img src="{{ isset($pet['avatar']) ? url($pet['avatar']) : '#'}}" class="img-thumbnail img-row">
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('disease', trans('label.disease'), ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('disease', isset($pet['disease']) ? $pet['disease'] : '', ['class' => 'form-control', 'disabled']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', trans('label.description'), ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::textarea('description', isset($pet['description']) ? $pet['description'] : '', ['class' => 'form-control', 'disabled']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
