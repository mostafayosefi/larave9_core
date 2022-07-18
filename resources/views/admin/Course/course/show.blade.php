  @component('admin.layouts.content', [
      'title' => 'مدیریت جلسات دوره',
      'tabTitle' => ' مدیریت جلسات دوره',
      'breadcrumb' => [['title' => 'لیست دوره ها', 'url' => route('admin.course.file.index')], ['title' => 'مدیریت جلسات دوره  ',
      'class' => 'active']],
      ])




      <div class="row">



        <div class="col-lg-12 col-md-12 col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @include('admin.Course.file.table_index', [ 'course' => $course   ])

                    @include('admin.Course.file.modal_create', [ 'course' => $course  , 'route' => route('admin.course.file.store') ])


                </div>
                </div>
                </div>



                  <div class="col-lg-12 col-md-12 col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>جزییات دوره </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                                  <div class="row">

                                    <div class="col-lg-6 col-md-6 col-md-6 ">

                                        <div class="form-group">
                                            <label for="name">نام دوره</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                 name="name" value="{{$course->name}}"  disabled >
                                        </div>

                                        <div class="form-group">
                                            <label for="name">نوع دوره</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                 name="name" value="{{$course->course_type->name}}"  disabled >
                                        </div>

                                        <div class="form-group">
                                            <label for="name">استاد مدرس دوره</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                 name="name" value="{{$course->teacher->name}}"  disabled >
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-md-6">
                                        <div class="form-group">
                                            <label for="short"> معرفی کوتاه دوره  </label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="معرفی کوتاه دوره   " name="short"  rows="5" disabled
                                                 >{{$course->short}}</textarea>
                                        </div>


                                        @php
                                            echo $course->text;
                                         @endphp




   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $course->image , 'class'=>'profile-pic' , 'style' => 'height: 400px;width: 400px;'  ])



                                          <div class="card-footer">
                                              <a href="{{ route('admin.course.course.index') }}" class="btn btn-danger">  مشاهده دوره ها</a>
                                          </div>



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
