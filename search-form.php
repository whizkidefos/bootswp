<form action="/" method="get">
  <div class="form-control">
    <label for="search">Search</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
  </div>
  <button type="submit" name="submit" class="btn btn-outline-default">Search</button>
</form>
