<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>


  @include('admin/include/headlink')
</head>

<body class="">

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
                      <h4 class="card-title">Enquiry </h4>

                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="display data-table" style="min-width: 845px">
                          <thead>
                            <tr>
                              <!-- <th></th> -->
                              <th>Sr. No.</th>
                              <th>Name</th>


                              <th>Email</th>

                              <th>Subject</th>
                              <th>Message</th>
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

  @include('admin/include/footlink')
</body>

</html>
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('contactus_datatable') }}",
        columns: [
            {data: 'id',         name: 'id'},
            {data: 'name',    name: 'name'},
            {data: 'email',     name: 'email'},
            {data: 'subject',    name: 'subject'},
            {data: 'message',       name: 'message'},
            {data: 'action',     name: 'action', orderable: false, searchable: false},
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