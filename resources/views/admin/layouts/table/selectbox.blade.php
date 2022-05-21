 
    <div class="form-group" >
        <label for="{{$index_id}}">{{$name_select}}</label>
            <select  class="js-example-basic-single w-100"     name="{{$index_id}}"   style="font-size: 18px;" {{$required}}
             @if($index_id=='company_plan_id') id="dropdown_test" onchange="calc()" @endif
              @if($index_id=='user_id') id="language"   onChange="totalIt()"  @endif
               >
            <option value="">لطفا {{$name_select}} مورد نظر را انتخاب نمایید</option>
            @foreach($allforeachs as $option)
            <option value="{{$option->id}}"  {{($option->id  == $value ? 'selected' : '')}}
                @if($index_id=='company_plan_id')   data-var1="{{$option->price}}"    @endif
                >{{$option->$input_name}}</option>
            @endforeach
        </select>
        </div>
