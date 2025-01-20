@extends("layouts.main")

@section("bottom_section")
@include("components.mobile_nav")
@endsection

@section("event_showed")
@php
  function random_id(){
    return strval(rand(1,100));
  }
@endphp
@foreach($event_data as $i)
  @php
    $tittle= $i->tittle;
    $desc= $i->description;
    $location= $i->location;
    $time= $i->time;
    $date= $i->date;
    $tag= $i->tag->tag_name;
    $id= $i->id;
    $random_id= random_id();
    $params=  [
      "tittle" => $tittle,
      "description" => $desc,
      "location"=> $location,
      "time"=> $time,
      "date"=> $date,
      "tag"=> $tag,
      "id"=> $id,
      "image" => "https://picsum.photos/id/$random_id/600/600)"
    ];
    
    
    
  @endphp
  
  @include("components.event_card", $params)
@endforeach
@endsection