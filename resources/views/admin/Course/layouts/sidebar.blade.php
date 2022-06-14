

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


          <li class="nav-item  {{ isActive(['admin.course.course.create' , 'admin.course.course.edit' , 'admin.course.course.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#course" role="button" aria-expanded="false" aria-controls="course">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت دوره ها </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.course.course.create'   , 'admin.course.course.edit', 'admin.course.course.index'])}}   "  id="course">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.course.course.create') }}" class="nav-link   {{ isActive(['admin.course.course.create']) }}  ">ثبت دوره </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.course.course.index') }}" class="nav-link   {{ isActive(['admin.course.course.edit'   , 'admin.course.course.index']) }}  ">مشاهده دوره ها </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.course.file.create' , 'admin.course.file.edit' , 'admin.course.course.show', 'admin.course.file.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#file" role="button" aria-expanded="false" aria-controls="file">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  مدیریت جلسات   </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.course.file.create' , 'admin.course.file.edit', 'admin.course.course.show', 'admin.course.file.index'])}}   "  id="file">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.course.file.create') }}" class="nav-link   {{ isActive(['admin.course.file.create']) }}  ">ثبت جلسه </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.course.file.index') }}" class="nav-link   {{ isActive(['admin.course.file.edit', 'admin.course.course.show' , 'admin.course.file.index']) }}  ">مشاهد جلسات  </a>
                </li>
              </ul>
            </div>
          </li>

