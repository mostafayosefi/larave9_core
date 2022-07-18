  @component('admin.layouts.content', [
      'title' => 'ثبت درخواست دوره',
      'tabTitle' => 'ثبت درخواست دوره',
      'breadcrumb' => [['title' => 'لیست درخواستهای دوره ', 'url' => route('admin.course.request.index')], ['title' => 'ثبت درخواست دوره',
      'class' => 'active']],
      ])


      <div class="row">
          <div class="col-3 col-xl-3 stretch-card"></div>
          <div class="col-6 col-xl-6 stretch-card">


              <div class="row flex-grow">




                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ثبت درخواست دوره </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')

  <form class="forms-sample" method="POST" action="{{ route('admin.course.request.store') }}"
  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


@include('admin.layouts.table.selectbox', [ 'allforeachs' => $users ,  'input_name' => 'name'  ,  'name_select' => ' کاربر ' ,  'value' =>   old('user_id') , 'required'=>'required'  , 'index_id'=>'user_id' ])
@include('admin.layouts.table.selectbox', [ 'allforeachs' => $courses ,  'input_name' => 'name'  ,  'name_select' => ' دوره ' ,  'value' =>   old('course_id') , 'required'=>'required'  , 'index_id'=>'course_id' ])

@include('admin.Course.request.create_table', [ 'guard' =>   'admin' ])


                                          <div class="card-footer">
                                              <a href="{{ route('admin.course.request.index') }}" class="btn btn-danger">بازگشت</a>
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

          <div class="col-3 col-xl-3 stretch-card"></div>
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
