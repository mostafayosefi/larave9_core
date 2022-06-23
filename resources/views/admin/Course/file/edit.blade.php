  @component('admin.layouts.content', [
      'title' => 'ویرایش جلسه',
      'tabTitle' => ' ویرایش جلسه',
      'breadcrumb' => [
        ['title' => 'لیست دوره ها', 'url' => route('admin.course.course.index')],
        ['title' => $course_file->course->name , 'url' => route('admin.course.course.show', $course_file->course )],
        ['title' => $course_file->name , 'class' => 'active'],
        ['title' => 'ویرایش جلسه  ', 'class' => 'active'],
    ],
      ])




      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>ویرایش جلسه </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.course.file.update', $course_file) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">




                                        <div class="form-group">
                                            <label for="name">دوره  </label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="   دوره  " name="course_name" value="{{$course_file->course->name}}" disabled >
                                        </div>


                                        <div class="form-group">
                                            <label for="name">نام جلسه</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder=" نام جلسه  " name="name" value="{{$course_file->name}}">
                                        </div>



                                        <div class="form-group">
                                            <label for="link">لینک جلسه</label>
                                            <input type="text" class="form-control" id="link" autocomplete="off"
                                                placeholder=" لینک جلسه  " name="link" value="{{$course_file->link}}">
                                        </div>



                                        <div class="form-group">
                                            <label for="text"> معرفی کوتاه جلسه  </label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="معرفی کوتاه جلسه   " name="text"  rows="5"
                                                 >{{$course_file->text}}</textarea>
                                        </div>




   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $course_file->image , 'class'=>'profile-pic' , 'style' => 'height: 400px;width: 400px;'  ])


                                          <hr>
                                          <div class="form-group" >
                                          <label for="exampleInputUsername1"> آپلود عکس </label>
                                          <input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
                                          </div>


                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{route('admin.course.course.show', $course_file->course )}}" class="btn btn-danger">بازگشت</a>
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
