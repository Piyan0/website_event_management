<form action="/comment" method="POST" style="width: 100%;color: #56587F; " class="gap-2 f-12 pore zi-3 fow">
  @csrf
  <input name="comment" style="outline: none; border:none; background-color: white" class="d rounded-2 f-12 p-2 w-100" type="text" placeholder="Write comments...">
  <button style="background-color: #6482FE; width: 60px" class="clickable rounded-2 no-deco">
    <img class="white-filt" width=24 src="res/send.svg" alt="">
  </button>
</form>