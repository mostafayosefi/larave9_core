@component('user.layouts.content',[
    'title'=>'داشبورد من ',
    'tabTitle'=>'داشبورد من',
    'breadcrumb'=>[
            ['title'=>'داشبورد من','class' => 'active']
    ]])



@slot('style')




 @endslot




 <div class="row">
    <div class="col-12 col-xl-12 stretch-card"   >
      <div class="row flex-grow">



                    <div class="col-md-4 grid-margin stretch-card">
                        @include('user.dashboard.card', [  'icon_card' => 'mail'    , 'count_card' => count_dashboard($dash_id,'ticket') , 'title_card' => 'تیکت های من' , 'desc_card' => 'تیکت' ,
                        'route_create' => route('user.ticket.create') ,  'route_index' => route('user.ticket.index') , 'new_card' =>    count_dashboard($dash_id,'ticket')." تیکت جدید"    ])
                    </div>




      </div>
    </div>
  </div>




    @slot('script')
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    @endslot
@endcomponent
