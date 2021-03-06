@component('admin.layouts.content',[
    'title'=>'مشاهده اساتید',
    'tabTitle'=>'مشاهده اساتید ',
    'breadcrumb'=>[
            ['title'=>'مشاهده اساتید','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست اساتید</h6>
          <div class="table-responsive">

@if($teachers)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام و نام خانوادگی</th>
                  <th>تاریخ ایجاد</th>
                  <th>  وضعیت</th>
                  <th>ویرایش</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($teachers as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
<td>{{$admin->name}}

    @include('admin.layouts.table.avatar', [ 'avatarimage' => $admin->image , 'class'=>'img-xs rounded-circle' , 'style' => ''  ])
</td>
<td>{{ date_frmat($admin->created_at) }}</td>


<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.course.teacher.status', $admin->id ) , 'myname' => ' اکانت استاد '.$admin->name.' ' ])
</td>

 <td>


<a href="{{ route('admin.course.teacher.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>


</td>
<td>
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.course.teacher.destroy', $admin) , 'myname' => $admin->name ])
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
