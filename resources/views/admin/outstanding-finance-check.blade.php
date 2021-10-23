<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
   
   
    @include('admin/include/headlink')
</head>

<body class="">
   
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
   
    <div class="wrapper ">

        <!-- sidebar -->
        @include('admin/include/sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('admin/include/header')
            <!-- End Navbar -->
            <div class="content-body my-content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="row tab-content">
                            <div id="list-view" class="tab-pane fade active show col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Vehicle/Motorcycle Outstanding Finance Check</h4>
                                        <!-- <a href="#" class="btn btn-primary">+ Add new</a> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display data-table" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <!-- <th></th> -->
                                                        <th>Sr. No.</th>
                                                        <th>Company Name</th>
                                                        <th>Country</th>
                                                        <th>Make</th>
                                                        <th>Model</th>
                                                        <th>Plate Number</th>
                                                        <th>Chassis Number</th>
                                                        <th>Engine Number</th>
                                                        <th>Contract Start Date</th>
                                                        <th>Contract End Date</th>
                                                        <th>Mobile Number</th>
                                                        <th>Email Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
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

<div class="modal fade" id="editfinance" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="smallmodalLabel">
                  
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
               
               <div class="modal-body">
               <div class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title"> User</h5>
                                <!-- <button type="submit" class="btn btn-primary btn-round">Back</button> -->

                            </div>
                            <div class="card-body">
                                <form method="post" action="update_finance">
                                {{csrf_field()}}
                                <input type="hidden" name="id" id="id" value='{{$data[0]->id}}'/>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Company Name</label>
                                                
                                                <input type="text" id="name" name="company_name" class="form-control" placeholder="Company" value={{$data[0]->hp_company_name}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Country</label>
                                                
                                                <input type="text" id="country" name="country" class="form-control" placeholder="Country" value={{$data[0]->country}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Make</label>
                                                
                                                <input type="text" id="make" name="make" class="form-control" placeholder="Make" value={{$data[0]->make}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Model</label>
                                                
                                                <input type="text" id="model" name="model" class="form-control" placeholder="Model" value={{$data[0]->model}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Plate Number</label>
                                                
                                                <input type="text" id="plate_number" name="license_plate_no" class="form-control" placeholder="Plate Number" value={{$data[0]->license_plate_no}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Chassis Number</label>
                                                
                                                <input type="text" id="chassis_no" name="chassis_no" class="form-control" placeholder="chassis_no" value={{$data[0]->chassis_no}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Engine Number</label>
                                                
                                                <input type="text" id="engine_no" name="engine_no" class="form-control" placeholder="Engine Number" value={{$data[0]->engine_no}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Contract Start Date</label>
                                                
                                                <input type="text" id="contract_start" name="contract_startdate" class="form-control" placeholder="Company" value={{$data[0]->contract_startdate}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Contract End Date</label>
                                                
                                                <input type="text" id="contract_end" name="contract_enddate" class="form-control" placeholder="Company" value={{$data[0]->contract_enddate}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Mobile Number</label>
                                                
                                                <input type="text" id="mobile" name="mobile_no" class="form-control" placeholder="Company" value={{$data[0]->mobile_no}}>
                                            </div>
                                        </div>


                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" id="email" name="email_id" class="form-control" placeholder="Email" value={{$data[0]->email_id}}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">UPDATE</button>
                                            <!-- <button type="submit" class="btn btn-primary btn-round">Cancel</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('cancel')}}</button>               
                     </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- modal end -->

    @include('admin/include/footlink')
</body>

</html>
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('fiance_datatable') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'country', name:'country'},
            {data: 'make', name: 'make'},
            {data: 'model', name: 'model'},
            {data: 'plate_number', name: 'plate_number'},
            {data: 'chassis', name: 'chassis'},
            {data: 'engine', name: 'engine'},
            {data: 'contract_start', name: 'contract_start'},
            {data: 'contract_end', name: 'contract_end'},
            {data: 'mobile', name: 'mobile'},
            {data:'email',name:'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });

  function delete_record(url) {
        if (confirm($("#delete_data").val())) {
            if($("#demo_lang").val()==1){
                alert('This function is currently disable as it is only a demo website, in your admin it will work perfect');
            }
            else{
                 window.location.href =url;
            }
          
        } else {
            window.location.reload();
        }
    }
</script>