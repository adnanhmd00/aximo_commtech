<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <title>
        Sign Up
    </title>
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
                                        <!-- <div class="card-header">
                                            <h4 class="card-title">Sign Up Here</h4>
                                            <a href="#" class="btn btn-primary">+ Add new</a>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="display data-table" style="min-width: 845px">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th></th> -->
                                                            <th>Sr. No.</th>
                                                            <th>Country</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
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

    <div class="modal fade" id="editcustomer" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                                <form method="post" action="update_customer">
                                {{csrf_field()}}
                                <input type="hidden" name="id" id="id" value='{{$data[0]->id}}'/>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                            
                                                <label>Country</label>
                                                
                                                <input type="text" name="country" class="form-control" placeholder="Country" id="country" value={{$data[0]->country}}>
                                            </div>
                                        </div>


                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" id="name" value={{$data[0]->name}}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" id="email" value={{$data[0]->email}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Contact No.</label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Contact No." id="mobile" value={{$data[0]->mobile}}>
                                            </div>

                                        </div>
                                        <div class="col-md-12 pl-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="Password" id="password" value={{$data[0]->password}}>
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


    @include('admin/include/footlink')
</body>

</html>

<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('customer_datatable') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'country', name: 'country'},
            {data: 'name', name:'name'},
            {data: 'email', name: 'email'},
            {data:'mobile',name:'mobile'},
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