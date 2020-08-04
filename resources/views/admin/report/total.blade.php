@extends('layouts.base')
@section('title', '總表清單')
@section('content')
    <div class="container">
    碩士
    <table class="table table-sm table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th class="text-center align-middle">班級</th>
          
            @foreach($color as $color)
                <th class="text-center align-middle">{{ $color->tassel_and_shawl_color }}</th>
            @endforeach
            </tr>
        </thead>

        <tbody>
        @foreach($personal_data as $data)
        <tr>
            <th class="text-center align-middle">{{ $data->class_name }}</th>
            @foreach($color_2 as $color)
                @if($color->tassel_and_shawl_color === $data->tassel_and_shawl_color)
                    <th class="text-center align-middle">{{ $data->total }}</th>
                @else
                    <th class="text-center align-middle">0</th>
                @endif
            @endforeach
        </tr>
        @endforeach
        </tbody>
    </table>
    學士
    <table class="table table-sm table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th class="text-center align-middle">班級</th>
          
            @foreach($color_master as $color)
                <th class="text-center align-middle">{{ $color->scarf_color }}</th>
            @endforeach
            </tr>
        </thead>
      
        <tbody>
        @foreach($personal_master_data as $data)
        <tr>
            <th class="text-center align-middle">{{ $data->class_name }}</th>
            @foreach($color_master_2 as $color)
                @if($color->scarf_color === $data->scarf_color)
                    <th class="text-center align-middle">{{ $data->total }}</th>
                @else
                    <th class="text-center align-middle">0</th>
                @endif
            @endforeach
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
