  @component('admin.layouts.content', [
      'title' => 'ثبت دوره',
      'tabTitle' => 'ثبت دوره',
      'breadcrumb' => [['title' => 'لیست دوره ها', 'url' => route('admin.course.course.index')], ['title' => 'ثبت دوره',
      'class' => 'active']],
      ])

@slot('style')
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">
    <script>
        function fetch_price(val) {
            var val = document.getElementById("price").value;
            $.ajax({
                type: 'get',
                url: '../../fetch/price/' + val + '',
                data: {
                    get_option: val
                },
                success: function(response) {
                    document.getElementById("view_price").innerHTML = response;
                }
            });
        }
    </script>
@endslot


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">




                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ثبت دوره </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.course.course.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                        <select name="type" id="price" onchange="fetch_price(this.value);"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder=""   aria-required="true" >
                                        <option value="online" {{(old('type')  == 'online' ? 'selected' : '')}}   >پرداخت آنلاین   </option>
                                        <option value="offline"  {{(old('type')  == 'offline' ? 'selected' : '')}}  >پرداخت آفلاین</option>
                                        <option value="depo"  {{(old('type')  == 'depo' ? 'selected' : '')}}  >پرداخت از شارژ حساب</option>
                                    </select>
                                    <input type="hidden" name="textUser" value="پرداخت غیرمستقیم" />
        <div  id="view_price">

        </div>



                                          <div class="form-group">
                                              <label for="name">نام دوره</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام دوره  " name="name" value="{{ old('name') }}">
                                          </div>

                                          @include('admin.layouts.table.selectbox', [ 'allforeachs' => $course_types ,  'input_name' => 'name'  ,  'name_select' => 'نوع دوره' ,  'value' =>   old('course_type_id') , 'required'=>'required'  , 'index_id'=>'course_type_id' ])

                                          @include('admin.layouts.table.selectbox', [ 'allforeachs' => $teachers ,  'input_name' => 'name'  ,  'name_select' => 'استاد مدرس دوره' ,  'value' => old('teacher_id') , 'required'=>'required'  , 'index_id'=>'teacher_id' ])



                                          <div class="form-group">
                                              <label for="short"> معرفی کوتاه دوره  </label>
                                              <textarea class="form-control"  autocomplete="off"
                                                  placeholder="معرفی کوتاه دوره   " name="short"  rows="5"
                                                   >{{ old('short') }}</textarea>
                                          </div>


                                          <div class="form-group">
                                              <label for="text"> درباره دوره</label>
                                              <textarea class="form-control"  autocomplete="off"
                                                  placeholder="درباره دوره" name="text"  id="tinymceExample" rows="8"
                                                   >{{ old('text') }}</textarea>
                                          </div>

 

<hr>
<div class="form-group" >
<label for="exampleInputUsername1"> آپلود عکس </label>
<input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
</div>


                                          <div class="card-footer">
                                              <a href="{{ route('admin.course.teacher.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                          </div>
                      </div>
                  </div>





              </div>
          </div>
      </div>










      @slot('script')


    <script src="{{ asset('template/assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/tinymce-rtl/tinymce.min.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/simplemde/simplemde.min.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/ace-builds/src-min/ace.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/ace-builds/src-min/theme-chaos.js') }}"></script>

      <script src="{{ asset('template/assets/vendors/feather-icons/feather.min.js') }}"></script>
      <script src="{{ asset('template/assets/js/template.js') }}"></script>
      <script src="{{ asset('template/assets/js/tinymce.js') }}"></script>
      <script src="{{ asset('template/assets/js/tinymce.js') }}"></script>
      <script src="{{ asset('template/assets/js/ace.js') }}"></script>




      @endslot
  @endcomponent
