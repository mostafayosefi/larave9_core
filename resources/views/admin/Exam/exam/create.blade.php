  @component('admin.layouts.content', [
      'title' => 'ثبت آزمون',
      'tabTitle' => 'ثبت آزمون',
      'breadcrumb' => [['title' => 'لیست آزمون ها', 'url' => route('admin.exam.exam.index')], ['title' => 'ثبت آزمون',
      'class' => 'active']],
      ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">




                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ثبت آزمون </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.exam.exam.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                          <div class="form-group">
                                              <label for="name">نام آزمون</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام آزمون  " name="name" value="{{ old('name') }}">
                                          </div>



                                          <div class="form-group">
                                              <label for="text"> معرفی کوتاه از آزمون  </label>
                                              <textarea class="form-control"  autocomplete="off"
                                                  placeholder="معرفی کوتاه از آزمون   " name="text"  rows="5"
                                                   >{{ old('text') }}</textarea>
                                          </div>




<hr>
<div class="form-group" >
<label for="exampleInputUsername1"> آپلود عکس </label>
<input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
</div>


                                          <div class="card-footer">
                                              <a href="{{ route('admin.exam.exam.index') }}" class="btn btn-danger">بازگشت</a>
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
