

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست جلسات دوره </h6>
          <div class="table-responsive">

@if($course->course_files)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th> نام جلسه</th>
                  <th>مشاهده جلسه</th>
                  <th>ویرایش  </th>
                  <th>حذف  </th>
                </tr>
              </thead>
              <tbody>


@foreach($course->course_files as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
<td>{{$admin->name}}
    @include('admin.layouts.table.avatar', [ 'avatarimage' => $admin->image , 'class'=>'img-xs rounded-circle' , 'style' => ''  ])
</td>



 <td>
<a href="{{$admin->link}}" target="_blank">
<span class="btn btn-success" >  <i data-feather="link"></i></span>
</a>
</td>


<td>
    <a href="{{ route('admin.course.file.edit', $admin) }}">
    <span class="btn btn-primary" >  <i data-feather="edit"></i></span>
    </a>
    </td>


<td>
    @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.course.file.destroy', $admin) , 'myname' => $admin->name ])
    </td>
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




