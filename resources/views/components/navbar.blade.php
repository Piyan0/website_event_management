<form action="/search" method="POST" style="width: 100%;" class="fow gap-2 f-12 g-0">
  @csrf
  <div style="background-color: white" class="flex-grow-1 rounded-1  p-1">
    <div class="fow gap-2">
      <img width=12 src="res/search.svg" alt="">
      <input name="search_value" placeholder="Search event..." type="text" name="" style="border: none; outline: none; width:100%">
      @error('search_value')
      <p class="text-danger">
        required
      </p>
      @enderror
    </div>
  </div>
  <button style="width:fit-content; background-color: #6482FE; color: white" class="clickable no-deco rounded-1">Search</button>
</form>