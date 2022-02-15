<h2>The participants are:</h2>
<div class="form-group">
  <form>
    <div class="form-group">
      <? 
        foreach($namesArray as $name){ ?>
          <button type="button" class="btn btn-outline-primary">
            <? echo $name; ?>
          </button>
      <? } ?>
    </div>
    <input type="hidden" name="names" value=<? echo implode(",",$namesArray); ?>>

    <div class="form-group">
      <input type="submit" class="btn btn-primary" name="do_math" value="Know the chosen one"/>
    </div>
  </form>

</div>