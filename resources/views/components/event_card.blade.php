<!-- props= date, time, location, tittle, desc, tag, id, image-->

<div data-ec-main style="width: 100%; min-height: 140px; background-color: white; box-shadow: 4px 4px 12px #d9dfe9" class="rounded-2 gap-2 p-2 d-flex flex-column flex-md-row">
  <div image style="background-image:url({{ $image ?? 'https://picsum.photos/id/46/600/600)'}}" class="bg-img rounded-2"></div>
  <div text class="fol  flex-gro-1">
    <div style="color:#6482FE" class="fow f-8 fw-bold gap-2">
      <div class="fow ">
        <img class="purple" width=8 src="res/date.svg" alt="">
        <p>
          {{$date ?? "8 Maret 2004"}}
        </p>
      </div>
      <div class="fow alen">
        <img class="purple" width=8 src="res/clock.svg" alt="">
        <p>
          {{$time ?? "10.30 WIB" }}
        </p>
      </div>
      <div class="fow ">
        <img class="purple" width=8 src="res/location.svg" alt="">
        <p>
          {{$location ?? "SMAN 1 PAGUYANGAN"}}
        </p>
      </div>

    </div>
    <p class="fw-bold">
      {{$tittle ?? "Suatu Event" }}
    </p>
    <p desc style="width:100%; overflow: scroll" class="f-12 g-0  flex-grocw-1">
      {{$desc ?? "Desc..."}}
    </p>
    <div style="color: white" class="fow alen gap-1  my-1 f-8">
       
      <p style="background-color: #6482FE; color: white;text-decoration: none" class="clickable px-1 rounded-1 ">
        {{$tag?? "Tags"}}
      </p>

      <div class="flex-grow-1 f-8 fow gap-2 justify-content-end px-1 purple">
        <div class="fol alen">
          <img width=12 src="res/comment.svg" alt="">
          <a href="/comments?id={{$id}}">Comments</a>
        </div>
        <div class="fol alen">
          <img width=12 src="res/bookmark.svg" alt="">
          <a href="/add_bookmark?id={{$id}}">Bookmark</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  [data-ec-main] [image] {
    min-width: 200px;
    flex-grow: 0;
  }
  [data-ec-main] [text] {
    flex-grow: 1;
  }
  [desc]{
    flex-grow: 1;
  }
  @media screen and (max-width: 768px) {
    [data-ec-main] {
      min-height: fit-content!important;
    }
    [data-ec-main] [text] {
      flex-grow: 0;
    }
    [data-ec-main] [image] {
      min-height: 200px;
      aspect-ratio: 1/1;
    }
  }
</style>