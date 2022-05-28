  @component('user.layouts.content', [
      'title' => 'پروفایل من ',
      'tabTitle' => ' پروفایل من',
    'breadcrumb'=>[
            ['title'=>'پروفایل من','class' => 'active']
    ]])



      <div class="profile-page tx-13">
          <div class="row">
              <div class="col-12 grid-margin">
                  <div class="profile-header">
                      <div class="cover">
                          <div class="gray-shade"></div>
                          <figure>
                              <img src="{{ asset('template/assets/images/profile-cover.jpg') }}" class="img-fluid"
                                  alt="profile cover">
                          </figure>
                          <div class="cover-body d-flex justify-content-between align-items-center">
<div>

 @include('admin.layouts.table.avatar', [$admin , 'avatarimage' => $admin->image , 'class'=>'profile-pic' , 'style' => 'height: 100px;width: 100px;'  ])
<span class="profile-name">{{ $admin->name }}</span>
</div>
                              <div class="d-none d-md-block">
                                  <button class="btn btn-primary btn-icon-text btn-edit-profile">
                                      <i data-feather="edit" class="btn-icon-prepend"></i> ویرایش پروفایل
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="header-links">

                      </div>
                  </div>
              </div>
          </div>
          <div class="row profile-body">
              <!-- left wrapper start -->
              <div class="col-md-4 col-xl-3 left-wrapper">
                  <div class="card rounded">
                      <div class="card-body">

                          <div class="d-flex align-items-center justify-content-between mb-2">

                              <h6 class="card-title mb-0">اطلاعات پروفایل</h6>

                              <div class="dropdown">
                                  <button class="btn p-0" type="button" id="dropdownMenuButton"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                          class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i> </button>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                                              class="icon-sm ml-2"></i> <span class="">ویرایش
                                              پروفایل</span></a>
                                      <a class="dropdown-item d-flex align-items-center" href="#"><i
                                              data-feather="git-branch" class="icon-sm ml-2"></i> <span
                                              class="">به روز رسانی</span></a>
                                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                              class="icon-sm ml-2"></i> <span class="">مشاهده همه</span></a>
                                  </div>
                              </div>
                          </div>




                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">نقش کاربری : </label>
                              <p class="text-muted">
                              <h4>
                                  <span class="badge badge-pill  badge-primary"><i data-feather="user"></i> &nbsp; کاربر
                                      معمولی </span>
                              </h4>
                              </p>
                          </div>


                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">نام و نام خانوادگی : </label>
                              <p class="text-muted">

                                  @if ($admin->name)
                                      <span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
                                          {{ $admin->name }} </span>
                                  @else
                                      <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp;
                                          {{ $admin->name }} </span>
                                  @endif

                              </p>
                          </div>



                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">ایمیل : </label>
                              <p class="text-muted">

                                  @if ($admin->email)
                                      <span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
                                          {{ $admin->email }} </span>
                                  @else
                                      <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp;
                                          {{ $admin->email }} </span>
                                  @endif
                              </p>
                          </div>

                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">تلفن : </label>
                              <p class="text-muted">
                                  @if ($admin->tell)
                                      <span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
                                          {{ $admin->tell }} </span>
                                  @else
                                      <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp;
                                          {{ $admin->tell }} </span>
                                  @endif
                              </p>
                          </div>


                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">آدرس : </label>
                              <p class="text-muted">{{ $admin->address }}</p>
                          </div>


                          @if ($inviteds)
                              <hr>
                              <div class="mt-3">
                                  <label class="tx-11 font-weight-bold mb-0 text-uppercase">کاربر دعوت کننده : </label>
                                  <span class="badge badge-success"> &nbsp; {{ $inviteds->username }} </span>
                              </div>
                              <hr>
                          @endif


                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">تاریخ ثبت نام : </label>
                              <p class="text-muted">
                                  {{ date_frmat($admin->created_at) }}</p>
                          </div>



                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">تاریخ آخرین ورود : </label>

                              @if ($loginhistories)
                                  <p class="text-muted"> {{ date_frmat(update_lastlogin($admin->id,'login'))  }}</p>
                              @else
                                  <p class="text-muted">ورود کاربر انجام نشده است! </p>
                              @endif
                          </div>


                          <div class="mt-3">
                              <label class="tx-11 font-weight-bold mb-0 text-uppercase">آی پی : </label>

                              @if ($loginhistories)
                                  <p class="text-muted"> {{ update_lastlogin($admin->id,'ip')  }}</p>
                              @else
                                  <p class="text-muted">ورود کاربر انجام نشده است! </p>
                              @endif

                          </div>





                      </div>
                  </div>
              </div>


              <div class="col-md-8  col-xl-9  ">




                  <div class="card card-default">
                      <div class="card-header card-header-border-bottom">
                          <h4>پروفایل کاربر </h4>
                      </div>
                      <div class="card-body">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link  @if (empty(Session::get('err')))  active @endif" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="@if (empty(Session::get('err')))  true @else false  @endif"> <i data-feather="edit-2"></i>ویرایش
                                      پروفایل </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link @if (Session::get('err') == '1')  active @endif " id="icon-secret-tab" data-toggle="tab" href="#icon-secret" role="tab" aria-controls="icon-secret" aria-selected="@if (Session::get('err') == '1')   true @else false  @endif"> <i data-feather="lock"></i> تنظیمات
                                      رمزعبور</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link @if (Session::get('err') == '8')  active @endif " id="icon-allusers-tab" data-toggle="tab" href="#icon-allusers" role="tab" aria-controls="icon-allusers" aria-selected="@if (Session::get('err') == '1')   true @else false  @endif"> <i data-feather="users"></i>کاربران
                                    زیرمجموعه</a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link @if (Session::get('err') == '9')  active @endif " id="icon-histore-tab" data-toggle="tab" href="#icon-histore" role="tab" aria-controls="icon-histore" aria-selected="@if (Session::get('err') == '1')   true @else false  @endif"> <i data-feather="clock"></i>
                                     تاریخچه ورود</a>
                            </li>

                          </ul>


                          <div class="tab-content" id="myTabContent2">

                              <div class="tab-pane pt-3 fade   @if (empty(Session::get('err'))) show active @endif" id="icon-home" role="tabpanel"
                                  aria-labelledby="icon-home-tab">

                                  <div class="row">
                                      <div class="col-xl-12">

                                        @if (empty(Session::get('err')))
                                        @include('admin.layouts.errors')
                                        @endif

                                          <form class="forms-sample" method="POST"
                                              action="{{ route('user.profile.update', $admin) }}"
                                              enctype="multipart/form-data" onsubmit="return Validate(this);">
                                              @csrf
                                              <div class="row">




                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label for="exampleInputUsername1">نام و نام خانوادگی</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputUsername1" autocomplete="off"
                                                              placeholder="نام و نام خانوادگی" name="name"
                                                              @if ($admin->name) value="{{ $admin->name }}"@else value="{{ old('name') }}" @endif>
                                                      </div>



                                                      <div class="form-group">
                                                          <label for="exampleInputUsername1">ایمیل</label>
                                                          <input type="email" class="form-control"
                                                              id="exampleInputUsername1" autocomplete="off"
                                                              placeholder="ایمیل" name="email" @if ($admin->email) value="{{ $admin->email }}"@else value="{{ old('email') }}" @endif>
                                                      </div>



                                                      <div class="form-group">
                                                          <label for="exampleInputUsername1">تلفن</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputUsername1" autocomplete="off"
                                                              placeholder="تلفن" name="tell" @if ($admin->tell) value="{{ $admin->tell }}"@else value="{{ old('tell') }}" @endif>
                                                      </div>

                                                  </div>


                                                  <div class="col-sm-6">


                                                      <div class="form-group">
                                                          <label for="exampleInputUsername1">نام کاربری</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputUsername1" autocomplete="off"
                                                              placeholder="نام کاربری" name="username"
                                                              @if ($admin->username) value="{{ $admin->username }}"@else value="{{ old('username') }}" @endif  >
                                                      </div>




                                                      <div class="form-group">
                                                          <label for="adres">آدرس</label>

                                                          <textarea class="form-control" placeholder="آدرس" id="address"
                                                              name="address" rows="3">@if ($admin->address) {{ $admin->address }} @else {{ old('address') }} @endif</textarea>

                                                      </div>

                                                      <div class="form-group">
                                                          <label for="exampleInputUsername1"> تصویر پروفایل</label>
                                                          <input type="file" id="exampleInputUsername1" autocomplete="off"
                                                              name="image">

 @include('admin.layouts.table.avatar', [$admin , 'avatarimage' => $admin->image , 'class'=>'profile-pic' , 'style' => 'height: 160px;width: 160px;'  ])
                                                      </div>



                                                      @method('PUT')


                                                      <div class="form-group">
                                                          <label for="exampleInputUsername1"> </label>

                                                          <button type="submit"
                                                              class="btn btn-primary btn-block">ویرایش</button>
                                                      </div>
                                                  </div>


                                              </div>

                                          </form>

                                      </div>
                                  </div>

                              </div>

                              <div class="tab-pane pt-3 fade  @if (Session::get('err') == '1') show active @endif" id="icon-secret" role="tabpanel"
                                  aria-labelledby="icon-secret-tab">

                                  <form method="post" action="{{ route('admin.user.secret', $admin->id) }}">
                                      @csrf
                                      <div class="row">





                                          <div class="col-sm-8">



                                              @if (Session::get('err') == '1')

                                                  @include('admin.layouts.errors')

                                              @endif




                                              <div class="form-group row">
                                                  <label for="password" class="col-sm-2 col-form-label">رمزعبور
                                                      جدید</label>
                                                  <div class="col-sm-10">
                                                      <input type="password" class="form-control" id="password"
                                                          name="password" autocomplete="off"
                                                          value="{{ old('password') }}" required>
                                                  </div>
                                              </div>

                                              <div class="form-group row">
                                                  <label for="password" class="col-sm-2 col-form-label">تکرار
                                                      رمزعبور</label>
                                                  <div class="col-sm-10">
                                                      <input type="password" class="form-control"
                                                          id="password_confirmation" name="password_confirmation"
                                                          autocomplete="off" value="{{ old('password_confirmation') }}"
                                                          required>
                                                  </div>
                                              </div>

                                              @method('PUT')

                                              <div class="form-group">
                                                  <label for="exampleInputUsername1"> </label>

                                                  <button type="submit" class="btn btn-primary btn-block">ویرایش
                                                      رمزعبور</button>
                                              </div>

                                          </div>
                                          <div class="col-sm-4">
                                          </div>



                                      </div>

                                  </form>

                              </div>



                              <div class="tab-pane pt-3 fade  @if (Session::get('err') == '10') show active @endif" id="icon-contact" role="tabpanel"
                              aria-labelledby="icon-contact-tab">


                              <div class="row">
                                  <div class="col-md-12 grid-margin">
                                      <div class="card rounded">

                                          <div class="card-body">
                                              <h6 class="card-title">مشاهده اکانتهای کاربر</h6>
                                              <div class="table-responsive">

                                                @if ($admin->contacts)

                                                <table id="dataTableExample" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ردیف</th>
                                                            <th>firstname</th>
                                                            <th>تاریخ ایجاد</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
@foreach ($admin->contacts as  $key => $contact)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $contact->firstname }}</td>
    <td>{{   date_frmat($contact->created_at) }} </td>
</tr>
@endforeach
                                                    </tbody>
                                                </table>


                                                @endif



                                              </div>
                                          </div>
                                      </div>
                                    </div>
                              </div>

                          </div>




                          <div class="tab-pane pt-3 fade  @if (Session::get('err') == '9') show active @endif" id="icon-histore" role="tabpanel"
                          aria-labelledby="icon-histore-tab">


                          <div class="row">
                              <div class="col-md-12 grid-margin">
                                  <div class="card rounded">

                                      <div class="card-body">
                                          <h6 class="card-title">تاریخچه ورود</h6>
                                          <div class="table-responsive">

                                            @if ($loginhistories)

                                            <table id="dataTableExample" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ردیف</th>
                                                        <th>آی پی کاربر</th>
                                                        <th>تاریخ ورود</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
@foreach ($loginhistories as  $key => $login)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $login->ip }}</td>
<td>{{   date_frmat($login->created_at) }} </td>
</tr>
@endforeach
                                                </tbody>
                                            </table>


                                            @endif



                                          </div>
                                      </div>
                                  </div>
                                </div>
                          </div>

                      </div>






                      </div>
                  </div>
              </div>

          </div>

      </div>










  @endcomponent
