  @component('admin.layouts.content', [
      'title' => 'ویرایش نوع دوره',
      'tabTitle' => ' ویرایش نوع دوره',
      'breadcrumb' => [['title' => 'لیست  انواع دوره', 'url' => route('admin.course.type.index')], ['title' => 'ویرایش نوع دوره  ',
      'class' => 'active']],
      ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-3 grid-margin stretch-card">
                  </div>


                  <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>ویرایش نوع دوره </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.course.type.update', $course_type) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                          <div class="form-group">
                                              <label for="name">نوع دوره</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نوع دوره  " name="name" value="{{$course_type->name}}">
                                          </div>


                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.course.type.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                          </div>
                      </div>
                  </div>



                  <div class="col-md-3 grid-margin stretch-card">
                  </div>



              </div>
          </div>
      </div>













      @slot('script')
      @endslot
  @endcomponent
