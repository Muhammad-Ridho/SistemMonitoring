
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">

  <!-- untuk modal pada viewlist.index -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- library google map -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
          var propertiPeta = {
              center:new google.maps.LatLng(-7.983908,112.621391),
              zoom:10,
              mapTypeId:google.maps.MapTypeId.ROADMAP
          };
        
          var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

          var marker=new google.maps.Marker({
            position: new google.maps.LatLng(-7.983908,112.621391),
            map: peta
          });
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        @include('layouts.sisMonitoring.navbar')
        @show
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('layouts.sisMonitoring.sidebar')
        @show
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        @include('layouts.sisMonitoring.footer')
        @show
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('template/')}}/dist/js/demo.js"></script> -->

<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>

<script type="text/javascript">

    // Config Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyBVYDR2HWLO9Che85FuX1dLNMw4dkIK76g",
        authDomain: "sismonitoring-730ad.firebaseapp.com",
        databaseURL: "https://sismonitoring-730ad-default-rtdb.firebaseio.com",
        projectId: "sismonitoring-730ad",
        storageBucket: "sismonitoring-730ad.appspot.com",
        messagingSenderId: "630375801851",
        appId: "1:630375801851:web:21d7a8d152de4ef4dba15e",
        measurementId: "G-VJDEWPL32N"
    };

    const app = firebase.initializeApp(firebaseConfig);
    var database = firebase.database();
    var lastId = 0;

    // Proses CRUD listEmployee
        // get post data
        database.ref("employee").on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                        <td>'+ index +'</td>\
                        <td>'+ value.fullname +'</td>\
                        <td>'+ value.idNumber +'</td>\
                        <td>'+ value.home_address +'</td>\
                        <td>'+ value.office_address +'</td>\
                        <td>'+ value.phone_number +'</td>\
                        <td><a data-bs-toggle="modal" data-bs-target="#update-modal" class="btn btn-warning update-post" data-id="' + index + '"><i class="nav-icon fas fa-info-circle"></i></a>\
                        <a data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn btn-danger delete-data" data-id="' + index + '"><i class="nav-icon fas fa-trash"></i></a></td>\
                    </tr>');
                }       
                lastId = index;
            });

            $('#list-employee').html(htmls);
        });

        // add data
        $('#add-submit').on('click', function() {
            var formData = $('#add-post').serializeArray();
            var createId = Number(lastId) + 1;

            firebase.database().ref('employee/' + createId).set({
                fullname: formData[0].value,
                idNumber: formData[1].value,
                home_address: formData[2].value,
                office_address: formData[3].value,
                phone_number: formData[4].value,
            });

            // Reassign lastID value
            lastId = createId;
            $("#add-post")[0].reset();
            $("#add-modal").modal('hide');
        });

        // update modal
        var updateID = 0;
        $('body').on('click', '.update-post', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('employee/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                $('#update-fullname').val(values.fullname);
                $('#update-idNumber').val(values.idNumber);
                $('#update-home_address').val(values.home_address);
                $('#update-office_address').val(values.office_address);
                $('#update-phone_number').val(values.phone_number);
            });
        });

        // update post
        $('#update-button').on('click', function() {
            var values = $("#update-post").serializeArray();
            var postData = {
                fullname: values[0].value,
                idNumber: values[1].value,
                home_address: values[2].value,
                office_address: values[3].value,
                phone_number: values[4].value,
            };

            var updatedPost = {};
            updatedPost['employee/' + updateID] = postData;

            firebase.database().ref().update(updatedPost);

            $("#update-modal").modal('hide');
            $("#update-post")[0].reset();
        });

        // delete modal
        $("body").on('click', '.delete-data', function() {
            var id = $(this).attr('data-id');
            $('#post-id').val(id);
        });

        // delete post
        $('#delete-button').on('click', function() {
            var id = $('#post-id').val();
            firebase.database().ref('employee/' + id).remove();

            $('#post-id').val('');
            $("#delete-modal").modal('hide');
        });


        //search bar
        function mySearchEmployee() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("mySearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("list-employee");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
        }

    // Proses CRUD userManagement
        // get post data
        database.ref("userLogin").on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                        <td>'+ index +'</td>\
                        <td>'+ value.idNumber +'</td>\
                        <td>'+ value.fullname +'</td>\
                        <td><a data-bs-toggle="modal" data-bs-target="#update-modalUserLogin" class="btn btn-warning update-post" data-id="' + index + '"><i class="nav-icon fas fa-info-circle"></i></a>\
                        <a data-bs-toggle="modal" data-bs-target="#delete-modalUserLogin" class="btn btn-danger delete-data" data-id="' + index + '"><i class="nav-icon fas fa-trash"></i></a></td>\
                    </tr>');
                }       
                lastIdUser = index;
            });

            $('#list-userLogin').html(htmls);
        });

        // add data
        $('#add-submitUserLogin').on('click', function() {
            var formData = $('#add-postUserLogin').serializeArray();
            var createId = Number(lastId) + 1;

            firebase.database().ref('userLogin/' + createId).set({
                idNumber: formData[0].value,
                fullname: formData[1].value,
                password: formData[2].value,
            });

            // Reassign lastID value
            lastId = createId;
            $("#add-postUserLogin")[0].reset();
            $("#add-userLogin").modal('hide');
        });

        // update modal
        var updateID = 0;
        $('body').on('click', '.update-post', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('userLogin/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                $('#update-idNumber').val(values.idNumber);
                $('#update-fullname').val(values.fullname);
                $('#update-password').val(values.password);
            });
        });

        // update post
        $('#update-btnUserLogin').on('click', function() {
            var values = $("#update-postUserLogin").serializeArray();
            var postData = {
                idNumber: values[0].value,
                fullname: values[1].value,
                password: values[2].value,
            };

            var updatedPost = {};
            updatedPost['userLogin/' + updateID] = postData;

            firebase.database().ref().update(updatedPost);

            $("#update-modalUserLogin").modal('hide');
            $("#update-postUserLogin")[0].reset();
        });

        // delete modal
        $("body").on('click', '.delete-data', function() {
            var id = $(this).attr('data-id');
            $('#post-id').val(id);
        });

        // delete post
        $('#delete-btnUserLogin').on('click', function() {
            var id = $('#post-id').val();
            firebase.database().ref('userLogin/' + id).remove();

            $('#post-id').val('');
            $("#delete-modalUserLogin").modal('hide');
        });


        //search bar
        function mySearchFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("mySearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("list-userLogin");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
        }
</script>
<!-- @yield('javascript') -->


</body>
</html>
