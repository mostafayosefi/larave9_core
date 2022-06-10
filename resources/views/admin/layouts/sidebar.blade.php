<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
         مدیریت<span> سایت</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">اصلی</li>


        <li class="nav-item {{ isActive(['admin.dashboard']) }}">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">داشبورد</span>
          </a>
        </li>



          <li class="nav-item  {{ isActive(['admin.user.create' , 'admin.user.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.user.create' , 'admin.user.index'])}}     "  id="user">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.user.create') }}" class="nav-link   {{ isActive(['admin.user.create']) }}  ">ثبت کاربر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.user.index') }}" class="nav-link   {{ isActive(['admin.user.index']) }}  ">مشاهده کاربران</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item  {{ isActive(['admin.faq.create' , 'admin.faq.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#faq" role="button" aria-expanded="false" aria-controls="faq">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">سوالات متداول</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.faq.create' , 'admin.faq.index'])}}   "  id="faq">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.faq.create') }}" class="nav-link   {{ isActive(['admin.faq.create']) }}  ">ایجاد سوال</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.faq.index') }}" class="nav-link   {{ isActive(['admin.faq.index']) }}  ">مشاهده سوالات متداول</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.page.create' , 'admin.page.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#page" role="button" aria-expanded="false" aria-controls="page">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">صفحات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.page.create' , 'admin.page.index'])}}   "  id="page">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.page.create') }}" class="nav-link   {{ isActive(['admin.page.create']) }}  ">ایجاد صفحه</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.page.index') }}" class="nav-link   {{ isActive(['admin.page.index']) }}  ">مشاهده صفحات سایت</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.setting.logo_management' , 'admin.setting.all_management' ,
           'admin.setting.txtdes_management' , 'admin.setting.finical', 'admin.setting.laws', 'admin.setting.getway_payment'
           , 'admin.setting.api'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#setting" role="button" aria-expanded="false" aria-controls="setting">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">تنظیمات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.setting.logo_management' , 'admin.setting.all_management'  , 'admin.setting.txtdes_management' ,
               'admin.setting.finical' , 'admin.setting.laws' , 'admin.setting.getway_payment'
               , 'admin.setting.api'])}}   "  id="setting">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.setting.logo_management') }}" class="nav-link   {{ isActive(['admin.setting.logo_management']) }}  ">مدیریت لوگو و هدر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.all_management') }}" class="nav-link   {{ isActive(['admin.setting.all_management']) }}  "> تنظیمات سایت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.txtdes_management') }}" class="nav-link   {{ isActive(['admin.setting.txtdes_management']) }}  ">   متن های پیش فرض </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.finical') }}" class="nav-link   {{ isActive(['admin.setting.finical']) }}  ">تنظیمات مالی</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.laws') }}" class="nav-link   {{ isActive(['admin.setting.laws']) }}  ">قوانین سایت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.getway_payment') }}" class="nav-link   {{ isActive(['admin.setting.getway_payment']) }}  ">تنظیمات درگاه پرداخت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.api') }}" class="nav-link   {{ isActive(['admin.setting.api']) }}  ">تنظیمات Api </a>
                </li>

              </ul>
            </div>
          </li>




          <li class="nav-item  {{ isActive(['admin.manegement.spotlites' , 'admin.manegement.comid_index' , 'admin.manegement.comid_edit'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#manegement" role="button" aria-expanded="false" aria-controls="manegement">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">مدیریت ایندکس   </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.manegement.spotlites' , 'admin.manegement.comid_index' , 'admin.manegement.comid_edit'])}}   "  id="manegement">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.manegement.spotlites') }}" class="nav-link   {{ isActive(['admin.manegement.spotlites']) }}  ">مدیریت اسپوتلایتها</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , ['first' ]) }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'first' , 'id'] ]) }}  "> امکانات اول </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'second') }}" class="nav-link   {{ isActive([ 'admin.manegement.comid_edit' , ['status'=>'second' , 'id'] ]) }}  "> امکانات دوم </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'coment') }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'coment' , 'id'] ]) }}  "> کامنت مشتریان  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'mnglogos') }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'coment' , 'id'] ]) }}  "> مدیریت لوگو مشتریان  </a>
                </li>
              </ul>
            </div>
          </li>




          <li class="nav-item nav-category">تنظیمات دوره</li>


          <li class="nav-item  {{ isActive(['admin.course.teacher.create' , 'admin.course.teacher.edit' , 'admin.course.teacher.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#teacher" role="button" aria-expanded="false" aria-controls="teacher">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت اساتید </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.course.teacher.create' , 'admin.course.teacher.edit', 'admin.course.teacher.index'])}}   "  id="teacher">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.course.teacher.create') }}" class="nav-link   {{ isActive(['admin.course.teacher.create']) }}  ">ثبت استاد </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.course.teacher.index') }}" class="nav-link   {{ isActive(['admin.course.teacher.edit' , 'admin.course.teacher.index']) }}  ">مشاهده اساتید   </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.course.type.create' , 'admin.course.type.edit' , 'admin.course.type.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#type" role="button" aria-expanded="false" aria-controls="type">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت انواع دوره ها </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.course.type.create' , 'admin.course.type.edit', 'admin.course.type.index'])}}   "  id="type">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.course.type.create') }}" class="nav-link   {{ isActive(['admin.course.type.create']) }}  ">ثبت نوع دوره </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.course.type.index') }}" class="nav-link   {{ isActive(['admin.course.type.edit' , 'admin.course.type.index']) }}  ">مشاهده انواع دوره ها </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.course.course.create' , 'admin.course.course.show', 'admin.course.course.edit' , 'admin.course.course.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#course" role="button" aria-expanded="false" aria-controls="course">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت دوره ها </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.course.course.create' , 'admin.course.course.show' , 'admin.course.course.edit', 'admin.course.course.index'])}}   "  id="course">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.course.course.create') }}" class="nav-link   {{ isActive(['admin.course.course.create']) }}  ">ثبت دوره </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.course.course.index') }}" class="nav-link   {{ isActive(['admin.course.course.edit' ,'admin.course.course.show' , 'admin.course.course.index']) }}  ">مشاهده دوره ها </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.course.file.create' , 'admin.course.file.edit' , 'admin.course.file.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#file" role="button" aria-expanded="false" aria-controls="file">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت جلسات   </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.course.file.create' , 'admin.course.file.edit', 'admin.course.file.index'])}}   "  id="file">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.course.file.create') }}" class="nav-link   {{ isActive(['admin.course.file.create']) }}  ">ثبت جلسه </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.course.file.index') }}" class="nav-link   {{ isActive(['admin.course.file.edit' , 'admin.course.file.index']) }}  ">مشاهد جلسات  </a>
                </li>
              </ul>
            </div>
          </li>





          <li class="nav-item nav-category">مدیریت مالی  </li>

          <li class="nav-item  {{ isActive(['admin.wallet.index' , 'admin.wallet.create'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#wallet" role="button" aria-expanded="false" aria-controls="wallet">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت تراکنشهای کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.wallet.index' , 'admin.wallet.create'])}}   "  id="wallet">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.wallet.index') }}" class="nav-link   {{ isActive(['admin.wallet.index']) }}  ">مشاهده تراکنش های کاربران</a>
                </li>

                <li class="nav-item">
 <a href="{{ route('admin.wallet.create') }}" class="nav-link   {{ isActive(['admin.wallet.create']) }}  ">شارژ حساب کاربران</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item nav-category">پشتیبانی سیستم</li>


          <li class="nav-item  {{ isActive(['user.ticket.create' , 'user.ticket.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#ticket" role="button" aria-expanded="false" aria-controls="ticket">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت تیکتها   </span>
              @include('admin.layouts.table.origin_getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_admin   ])
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.ticket.create' , 'user.ticket.index'])}}     "  id="ticket">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.ticket.index') }}" class="nav-link   {{ isActive(['user.ticket.index']) }}  "> مشاهده تیکت ها
    @include('admin.layouts.table.origin_getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_admin   ])  </a>
</li>
              </ul>
            </div>
          </li>



      </ul>
    </div>
  </nav>
{{--

  <nav class="settings-sidebar">
    <div class="sidebar-body">
      <a href="#" class="settings-sidebar-toggler">
        <i data-feather="settings"></i>
      </a>
      <h6 class="text-muted">سایدبار : </h6>
      <div class="form-group border-bottom">
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
              value="sidebar-light">
            روشن
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
              value="sidebar-dark" checked>
            تیره
          </label>
        </div>
      </div>
      <div class="theme-wrapper">
        <h6 class="text-muted mb-2">تم روشن : </h6>
        <a class="theme-item active" href="../demo_1/dashboard-one.html">
          <img src="../assets/images/screenshots/light.jpg" alt="light theme">
        </a>
        <h6 class="text-muted mb-2">تم تیره : </h6>
        <a class="theme-item" href="../demo_2/dashboard-one.html">
          <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
        </a>
      </div>
    </div>
  </nav>
 --}}
