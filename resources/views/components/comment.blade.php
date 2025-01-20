<!-- props= name, content, image-->
<div style="" class="fow alen p-2 gap-2">

  <div style="min-height:40px; min-width: 40px; background-image: url({{$image ?? 'https://avatar.iran.liara.run/public/16'}})" class="rounded-circle align-self-start bg-img"></div>
  <div style="background-color: #F1F4F9" class="fol f-12 rounded-2 ">
    <p class="fw-bold purple">
      {{$name ?? "name"}}
    </p>
    <p style="color: #56587F" class="px-1">
      {{$content ?? "content"}}
    </p>
  </div>
</div>