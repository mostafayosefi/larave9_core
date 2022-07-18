@component('admin.layouts.content',[
    'title'=>'مشاهده درخواستهای دوره ',
    'tabTitle'=>'مشاهده درخواستهای دوره',
    'breadcrumb'=>[
            ['title'=>'مشاهده درخواستهای دوره ','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست درخواستهای دوره </h6>
          <div class="table-responsive">

@if($course_requests)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام دوره</th>
                  <th>کاربر </th>
                  <th>نوع دوره</th>
                  <th>تاریخ ایجاد</th>
                  <th>  وضعیت</th>
                  <th>ویرایش</th>
                  <th>مشاهده </th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($course_requests as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
<td>{{$admin->course->name}}
    @include('admin.layouts.table.avatar', [ 'avatarimage' => $admin->image , 'class'=>'img-xs rounded-circle' , 'style' => ''  ])

</td>
<td>{{$admin->user->name}}

    @include('admin.layouts.table.avatar', [ 'avatarimage' => $admin->user->image , 'class'=>'img-xs rounded-circle' , 'style' => ''  ])
</td>

<td>{{$admin->course->course_type->name}}</td>
<td>{{ date_frmat($admin->created_at) }}</td>


<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.course.request.status', $admin->id ) , 'myname' => ' درخواست دوره '.$admin->course->name ])
</td>

 <td>
<a href="{{ route('admin.course.request.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>
</td>


<td>
    <a href="{{ route('admin.course.request.show', $admin) }}">
    <span class="btn btn-primary" >  <i data-feather="eye"></i></span>
    </a>
    </td>

<td>
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.course.request.destroy', $admin) , 'myname' => $admin->name ])
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







    @slot('script')
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
