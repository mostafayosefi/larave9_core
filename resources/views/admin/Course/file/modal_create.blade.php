
                                   <button type="button" class="badge badge-success" data-toggle="modal"
                                      data-target="#create">
                                      <i data-feather="file-plus"></i> &nbsp; ثبت جلسه جدید
                                  </button>



                                  <div class="modal fade" id="create" tabindex="-1" role="dialog"
                                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">
                                          <div class="modal-content">

                                            <form class="forms-sample" method="POST" action="{{$route}}"
                                            enctype="multipart/form-data" onsubmit="return Validate(this);">
                                                @csrf

                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">  ثبت جلسه جدید</h5>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                      aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">



                                                  <div class="form-group">
                                                    <label for="course_name">نام دوره</label>
                                                    <input type="text" class="form-control" id="course_name" autocomplete="off"
                                                        placeholder=" نام دوره  " name="course_name" value="{{$course->name}}" disabled>
                                                </div>
                                                <input type="hidden" name="course_id" value="{{$course->id}}" />


                                                  @include('admin.Course.file.create_table', [ 'guard' =>   'admin' ])

                                              </div>
                                              <div class="modal-footer">


                                                        <button  type="submit"   class="btn btn-success"  >  ثبت جلسه</button>



                                              </div>

                                            </form>

                                          </div>
                                      </div>
                                  </div>









