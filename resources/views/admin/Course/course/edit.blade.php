  @component('admin.layouts.content', [
      'title' => 'ویرایش دوره',
      'tabTitle' => ' ویرایش دوره',
      'breadcrumb' => [['title' => 'لیست دوره ها', 'url' => route('admin.course.course.index')], ['title' => 'ویرایش دوره  ',
      'class' => 'active']],
      ])




      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>ویرایش دوره </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.course.course.update', $course) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


 
 
                                        <div class="form-group">
                                            <label for="name">نام دوره</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder=" نام دوره  " name="name" value="{{$course->name}}">
                                        </div>

 @include('admin.layouts.table.selectbox', [ 'allforeachs' => $course_types ,  'input_name' => 'name'  ,  'name_select' => 'نوع دوره' ,  'value' =>   $course->course_type_id , 'required'=>'required'  , 'index_id'=>'course_type_id' ])

 @include('admin.layouts.table.selectbox', [ 'allforeachs' => $teachers ,  'input_name' => 'name'  ,  'name_select' => 'استاد مدرس دوره' ,  'value' => $course->teacher_id , 'required'=>'required'  , 'index_id'=>'teacher_id' ])



                                        <div class="form-group">
                                            <label for="short"> معرفی کوتاه دوره  </label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="معرفی کوتاه دوره   " name="short"  rows="5"
                                                 >{{$course->short}}</textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="text"> درباره دوره</label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="درباره دوره" name="text"  id="tinymceExample" rows="8"
                                                 >{{$course->text}}</textarea>
                                        </div>




   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $course->image , 'class'=>'profile-pic' , 'style' => 'height: 400px;width: 400px;'  ])


                                          <hr>
                                          <div class="form-group" >
                                          <label for="exampleInputUsername1"> آپلود عکس </label>
                                          <input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
                                          </div>


                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.course.course.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
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
