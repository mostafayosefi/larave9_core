 
                                          <div class="form-group">
                                              <label for="name">نام جلسه</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام جلسه  " name="name" value="{{ old('name') }}">
                                          </div> 
 
                                          <div class="form-group">
                                              <label for="link">لینک جلسه</label>
                                              <input type="text" class="form-control" id="link" autocomplete="off"
                                                  placeholder=" لینک جلسه  " name="link" value="{{ old('link') }}">
                                          </div>
 

                                          <div class="form-group">
                                              <label for="short"> معرفی کوتاه جلسه  </label>
                                              <textarea class="form-control"  autocomplete="off"
                                                  placeholder="معرفی کوتاه جلسه   " name="short"  rows="5"
                                                   >{{ old('short') }}</textarea>
                                          </div>

 


<hr>
<div class="form-group" >
<label for="exampleInputUsername1"> آپلود عکس </label>
<input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
</div>

 