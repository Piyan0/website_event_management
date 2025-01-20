@extends("layouts.main")

@section("event_showed")
@php
  $data=[
    "tittle" => $event_data->tittle,
    "desc"=> $event_data->description,
    "location"=> $event_data->location,
    "time"=> $event_data->time,
    "date"=> $event_data->date,
    "tag"=> $event_data->tag->tag_name,
    "id"=> $event_data->id
    ];
@endphp
@include("components.event_card", $data)
<div class="fol p-lg-2 overflow-scrcoll">
  @php
  function x(){
    return rand(0, 10);
  }
  $y= "3";
  
    function random_avatar(){
      return "https://avatar.iran.liara.run/public/".strval(rand(1, 30));
    }
  
  @endphp
  @php
    $sample_comments= [
      ["name"=> "Salwa(bot)", "content" => "Halo, aku sample komen."],
      ["name"=> "Fangky(bot)", "content" => "Aku sangat menantikan event ini."],
    ];
  @endphp
  
  @foreach($comments as $i)
    @include("components.comment", ["name" => $i["name"], "content" => $i["content"]])
  @endforeach
  
  @foreach($sample_comments as $i)
    @include("components.comment", ["name" => $i["name"], "content" => $i["content"], "image" => random_avatar()])
  @endforeach
</div>
@endsection

@section("bottom_section")
@include("components.comment_input")
@endsection