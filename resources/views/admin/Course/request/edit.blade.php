  @component('admin.layouts.content', [
      'title' => 'ویرایش درخواست دوره',
      'tabTitle' => ' ویرایش درخواست دوره',
      'breadcrumb' => [['title' => 'لیست درخواست دوره ها', 'url' => route('admin.course.request.index')], ['title' => 'ویرایش درخواست دوره  ',
      'class' => 'active']],
      ])




      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>ویرایش درخواست دوره </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.course.request.update', $course_request) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">

 @include('admin.layouts.table.selectbox', [ 'allforeachs' => $users ,  'input_name' => 'name'  ,  'name_select' => ' کاربر' ,  'value' =>   $course_request->user->id , 'required'=>'required'  , 'index_id'=>'user_id' ])
 @include('admin.layouts.table.selectbox', [ 'allforeachs' => $courses ,  'input_name' => 'name'  ,  'name_select' => ' دوره' ,  'value' =>   $course_request->course->id , 'required'=>'required'  , 'index_id'=>'course_id' ])


                                        <div class="form-group">
                                            <label for="text"> توضیحات </label>
                                            <textarea class="form-control"  autocomplete="off"
                                                placeholder="توضیحات" name="text"  rows="5"
                                                 >{{$course_request->text}}</textarea>
                                        </div>






                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.course.request.index') }}" class="btn btn-danger">بازگشت</a>
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
