

          <li class="nav-item nav-category">تنظیمات آزمون</li>


          <li class="nav-item  {{ isActive(['admin.exam.exam.create' , 'admin.exam.exam.edit' , 'admin.exam.exam.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#exam" role="button" aria-expanded="false" aria-controls="exam">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت آزمون </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.exam.exam.create' , 'admin.exam.exam.edit', 'admin.exam.exam.index'])}}   "  id="exam">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.exam.exam.create') }}" class="nav-link   {{ isActive(['admin.exam.exam.create']) }}  ">ثبت آزمون </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.exam.exam.index') }}" class="nav-link   {{ isActive(['admin.exam.exam.edit' , 'admin.exam.exam.index']) }}  ">مشاهده آزمون ها   </a>
                </li>
              </ul>
            </div>
          </li>

