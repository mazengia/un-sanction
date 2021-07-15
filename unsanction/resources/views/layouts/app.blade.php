<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->

    <title>Unsaction-list- </title>

   
      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
  
    <style>
        .sidebar {
            margin-left: 10px;
        }

        .card {
            background-color: #fff;
        }

        .panel-menu-item {
            margin-right: 10px;
            color: #000;
        }

        input[type="password"]:invalid {
            border-color: red;
        }

        input[type="password"],
        input[type="password"]:valid {
            border-color: #ccc;
        }
        .navbar a.active {
  background-color:#DCDCDC;
}
.sidebar {
            margin-left: 10px;
        }

        .card {
            background-color: #fff;
        }

        .panel-menu-item {
            margin-right: 10px;
            color: #000;
        }

        input[type="password"]:invalid {
            border-color: red;
        }


        input[type="password"],
        input[type="password"]:valid {
            border-color: #ccc;
        }
        .required{
      color:red;
           }
           label.required:after {content: " *"; color: red;}
           .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.dropdown-submenu {
  position: relative;
}
ul li a:hover{
        color: #fff;
        background: #939393;
    }
.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: 2px;
}       body {
  font-family: "Lato", sans-serif;
}
.button1 {font-size: 16px;}
.dropdown-submenu
ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }

    </style>
     <style type="text/css">.v-select{position:relative;font-family:sans-serif}.v-select,.v-select *{box-sizing:border-box}.v-select.rtl .open-indicator{left:10px;right:auto}.v-select.rtl .selected-tag{float:right;margin-right:3px;margin-left:1px}.v-select.rtl .dropdown-menu{text-align:right}.v-select.rtl .dropdown-toggle .clear{left:30px;right:auto}.v-select .open-indicator{position:absolute;bottom:6px;right:10px;cursor:pointer;pointer-events:all;opacity:1;height:20px}.v-select .open-indicator,.v-select .open-indicator:before{display:inline-block;transition:all .15s cubic-bezier(1,-.115,.975,.855);transition-timing-function:cubic-bezier(1,-.115,.975,.855);width:10px}.v-select .open-indicator:before{border-color:rgba(60,60,60,.5);border-style:solid;border-width:3px 3px 0 0;content:"";height:10px;vertical-align:top;transform:rotate(133deg);box-sizing:inherit}.v-select.open .open-indicator:before{transform:rotate(315deg)}.v-select.loading .open-indicator{opacity:0}.v-select.open .open-indicator{bottom:1px}.v-select .dropdown-toggle{-webkit-appearance:none;-moz-appearance:none;appearance:none;display:block;padding:0;background:none;border:1px solid rgba(60,60,60,.26);border-radius:4px;white-space:normal}.v-select .dropdown-toggle:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}.v-select .dropdown-toggle .clear{position:absolute;bottom:9px;right:30px;font-size:23px;font-weight:700;line-height:1;color:rgba(60,60,60,.5);padding:0;border:0;background-color:transparent;cursor:pointer}.v-select.searchable .dropdown-toggle{cursor:text}.v-select.unsearchable .dropdown-toggle{cursor:pointer}.v-select.open .dropdown-toggle{border-bottom-color:transparent;border-bottom-left-radius:0;border-bottom-right-radius:0}.v-select .dropdown-menu{display:block;position:absolute;top:100%;left:0;z-index:1000;min-width:160px;padding:5px 0;margin:0;width:100%;overflow-y:scroll;border:1px solid rgba(0,0,0,.26);box-shadow:0 3px 6px 0 rgba(0,0,0,.15);border-top:none;border-radius:0 0 4px 4px;text-align:left;list-style:none;background:#fff}.v-select .no-options{text-align:center}.v-select .selected-tag{color:#333;background-color:#f0f0f0;border:1px solid #ccc;border-radius:4px;height:26px;margin:4px 1px 0 3px;padding:1px .25em;float:left;line-height:24px}.v-select.single .selected-tag{background-color:transparent;border-color:transparent}.v-select.single.open .selected-tag{position:absolute;opacity:.5}.v-select.single.loading .selected-tag,.v-select.single.open.searching .selected-tag{display:none}.v-select .selected-tag .close{float:none;margin-right:0;font-size:20px;appearance:none;padding:0;cursor:pointer;background:0 0;border:0;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.v-select.single.searching:not(.open):not(.loading) input[type=search]{opacity:.2}.v-select input[type=search]::-webkit-search-cancel-button,.v-select input[type=search]::-webkit-search-decoration,.v-select input[type=search]::-webkit-search-results-button,.v-select input[type=search]::-webkit-search-results-decoration{display:none}.v-select input[type=search]::-ms-clear{display:none}.v-select input[type=search],.v-select input[type=search]:focus{appearance:none;-webkit-appearance:none;-moz-appearance:none;line-height:1.42857143;font-size:1em;height:34px;display:inline-block;border:none;outline:none;margin:0;padding:0 .5em;width:10em;max-width:100%;background:none;position:relative;box-shadow:none}.v-select.unsearchable input[type=search]{opacity:0}.v-select.unsearchable input[type=search]:hover{cursor:pointer}.v-select li{line-height:1.42857143}.v-select li>a{display:block;padding:3px 20px;clear:both;color:#333;white-space:nowrap}.v-select li:hover{cursor:pointer}.v-select .dropdown-menu .active>a{color:#333;background:rgba(50,50,50,.1)}.v-select .dropdown-menu>.highlight>a{background:#5897fb;color:#fff}.v-select .highlight:not(:last-child){margin-bottom:0}.v-select .spinner{opacity:0;position:absolute;top:5px;right:10px;font-size:5px;text-indent:-9999em;overflow:hidden;border-top:.9em solid hsla(0,0%,39%,.1);border-right:.9em solid hsla(0,0%,39%,.1);border-bottom:.9em solid hsla(0,0%,39%,.1);border-left:.9em solid rgba(60,60,60,.45);transform:translateZ(0);animation:vSelectSpinner 1.1s infinite linear;transition:opacity .1s}.v-select .spinner,.v-select .spinner:after{border-radius:50%;width:5em;height:5em}.v-select.disabled .dropdown-toggle,.v-select.disabled .dropdown-toggle .clear,.v-select.disabled .dropdown-toggle input,.v-select.disabled .open-indicator,.v-select.disabled .selected-tag .close{cursor:not-allowed;background-color:#f8f8f8}.v-select.loading .spinner{opacity:1}@-webkit-keyframes vSelectSpinner{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes    vSelectSpinner{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}.fade-enter-active,.fade-leave-active{transition:opacity .15s cubic-bezier(1,.5,.8,1)}.fade-enter,.fade-leave-to{opacity:0}</style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/home" class="navbar-brand">
                       <b> Unsanction-List</b>
                    </a>
                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Enat Bank S.c.') }}
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                             <!-- <li><a href="{{ route('sanction') }}">Phone Book</a></li> -->
                        <!-- Authentication Links -->

                        @guest
                            
                            <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                            
                        @else
                            @can('create-user')
                             <li><a href="{{ route('register') }}">Register</a></li>                              
                            @endcan

                            
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->employee->full_name }} <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <!-- <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Reset password
                                        </a> -->
                                    <a href="/password-reset">
                                            Reset password
                                        </a>
                                        @can('create-user')
                                        <a href="user">
                                            User Maintainance
                                        </a>
                            @endcan
                                        

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Settings
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav> -->

        <div class="row">
            <div class="col-md-2 sidebar">
                <!--Side bar functionality-->
                @yield('sidebar')





            </div>
            <div class="col-md-9">
                <!--Main Content functionality-->
                @yield('content')
            </div>
        </div>




    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(document).ready(function () {
        var temp=[];
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
        //to dynamically populate employees while selecting branch.
        $('#branch').change(function () {
            var branch = $(this).val();          
            var result='';
            console.log(branch);
            $.getJSON("/branch/"+branch+"/employees", function(data){
                  $.each(data,function(key,value){
                    result+='<option value="'+value.id+'">'+value.full_name+'</option>';
                    temp[value.id]=value.phone_no;
                  
                  });
                  $('#employee').html(result);
                  $('#phone-no').val(temp[$('#employee').val()]);
             });
        });

        //to dynamically change phone number field based on employee.
        $('#employee').change(function(){
            $('#phone-no').val(temp[$('#employee').val()]);
        });
        // to dynamically populate message content in sms notification page while selecting msg templete.
        $('#msg-templete').change(function(){
            var msg='';
            var msg_templete=$(this).val();
            
            $.getJSON('/msg-templete/'+msg_templete,function(data){
              msg=  data.templete;              
                
                $('#msg').text(msg);
            });
        });


    /*
    *
    */
        $('#employeeDetailModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var employee;
            var modal = $(this)
           $.getJSON('hr/'+id,function(data){
            modal.find('.modal-title').text( data.employee_name)
            modal.find('.modal-body input#full_name').val(data.employee_name)
            modal.find('.modal-body input#email').val(data.email)
            modal.find('.modal-body input#job_position').val(data.job_position)
            modal.find('.modal-body input#employed_date').val(data.employed_date)
            modal.find('.modal-body input#phone_no').val(data.phone_no)
            modal.find('.modal-body input#salary').val(data.salary)
            modal.find('.modal-body input#enat_id').val(data.enat_id)
            
           });                                               
        });
        $('#employeeUpdateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var employee;
            var modal = $(this)
           $.getJSON('hr/'+id,function(data){
            modal.find('.modal-title').text( data.employee_name)
            modal.find('.modal-body input#full_name').val(data.employee_name)
            modal.find('.modal-body input#email').val(data.email)
            modal.find('.modal-body input#job_position').val(data.job_position)
            modal.find('.modal-body input#employed_date').val(data.employed_date)
            modal.find('.modal-body input#phone_no').val(data.phone_no)       
            modal.find('.modal-body form').attr('action','/hr/'+id)
            
           });
           modal.find('.modal-footer a').attr('href',`/hr/${id}/edit`)                        
            
        });
         $('#actingemployeeUpdateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
             // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
   // console.log(id);
   var id = button.data('empid')  
    var employee_name = button.data('full_name') 
     var acting_job_position_name = button.data('acting_job_position_name') 
      var acting_branch_name = button.data('acting_branch_name') 
       var start_date = button.data('start_date') 
        var end_date = button.data('end_date') 
        var status = button.data('status')      
        console.log(acting_branch_name);      
            var modal = $(this)                       
            modal.find('.modal-title').text( "Edit Information");
            modal.find('.modal-body #full_name').val(employee_name);
            modal.find('.modal-body #acting_job_position_name').val(acting_job_position_name);
            modal.find('.modal-body #acting_branch_name').val(acting_branch_name);
            modal.find('.modal-body #start_date').val(start_date);
            modal.find('.modal-body #end_date').val(end_date);
            modal.find('.modal-body #status').val(status);   
            modal.find('.modal-body #empid').val(id);         
            //modal.find('.modal-body form').attr('action','/actingemployee/'+id)                                             
            
        });
        
        
        
        /** 
        
        to retriev employee list from user table
         */

         $.getJSON('/hr/employees',function(data){
                // Loop over the JSON array.
                data.forEach(function(employee) {
                // Create a new <option> element.
                var option = document.createElement('option');
                // Set the value using the item in the JSON array.
                option.value = employee.id;
                option.text=employee.full_name;
                // Add the <option> element to the <datalist>.
                $('#employees-list').append(option);
            });
          //  $('#new-employee').placeholder('--Employee List--');
         });
         
   $.getJSON('/acting/employees',function(data){
                // Loop over the JSON array.
                data.forEach(function(employee) {
                // Create a new <option> element.
                var option = document.createElement('option');
                // Set the value using the item in the JSON array.
                option.value = employee.id;
                option.text=employee.name;
                // Add the <option> element to the <datalist>.
                $('#actemployees-list').append(option);
            });
          //  $('#new-employee').placeholder('--Employee List--');
         });
//phone book search query ajax call
         $('#query').on('keyup',function(){
           var query= $(this).val();
           //to check if the search box is empty and display all the employees.
            if(query==='')
              query='all';

           
           var result='';
           $.getJSON('/sanction/'+query,function(data){
            data.forEach(function(sanction){              
                result+='<tr><td>'
                        +sanction.count
                        +'</td><td>'
                        +sanction.FIRST_NAME
                        +'</td><td>'                      
                        +sanction.SECOND_NAME
                        +'</td><td>'
                        +sanction.THIRD_NAME+'</td></tr>';
            });
            $('#search-result tbody').html(result);
           });
         });
//Act Employee search query ajax call
           $('#queryemp').on('keyup',function(){
           var queryemp= $(this).val();
           //to check if the search box is empty and display all the employees.
            if(queryemp==='')
              queryemp='all';           
           var results='';
           $.getJSON('/searchactingemployee/'+queryemp,function(data){
            data.forEach(function(actemployee){              
                results+='<tr><td>'
                        +actemployee.count
                        +'</td><td>'
                        +actemployee.full_name
                        +'</td><td>'                      
                        +actemployee.job_position
                        +'</td><td>'                      
                        +actemployee.home_branch
                        +'</td><td>'                      
                        +actemployee.acting_job_position
                        +'</td>'
                        +'<td>'                      
                        +actemployee.acting_branch_name
                        +'</td><td>'                      
                        +actemployee.from
                        +'</td><td>'                      
                        +actemployee.upto
                        +'</td><td>'                      
                        +actemployee.status                        
+'</td><td><a class="btn-warning btn-sm" data-toggle="modal" data-target="#actingemployeeUpdateModal" data-empid='+actemployee.emp_id+' data-full_name='+actemployee.full_name+' data-acting_job_position_name='+actemployee.job_position+' data-acting_branch_name='+actemployee.home_branch+' data-start_date='+actemployee.from+' data-end_date='+actemployee.upto+' data-status='+actemployee.status+'> <i class="fa fa-edit"></i></a> ' +'</td></tr>';        
            });
            console.log(results);
            $('#search-results tbody').html(results);
           });
         });

         //add new row to role defination screen
         var row_counter=1;
         $("#add-new-role-row").click(function(){

            var row="<tr>\
                                    <td>\
                                        <select name=\"models[]\" id=\"\" class=\"form-control\">\
                                            <option value=\"employee\">Employee</option>\
                                            <option value=\"user\">User</option>\
                                            <option value=\"branch\">Branch</option>\
                                            <option value=\"job\">Job</option>\
                                            <option value=\"role\">Role</option>\
                                            <option value=\"sms\">SMS Notification</option>\
                                            <option value=\"message\">Message Templete</option>\
                                            <option value=\"hr\">HR Access</option>\
                                            <option value=\"fam\">FAM Access</option>\
                                            <option value=\"vms\">VMS Access</option>\
                                            <option value=\"fcy\">FCY Access Access</option>\
                                        </select>\
                                    </td>\
                                    <td>\
                                        <div class=\"checkbox\">\
                                            <label for=\"\">\
                                            <input type=\"checkbox\" name=\"permissions["+row_counter+"][]\" value=\"create\">\
                                            </label>\
                                        </div>\
                                    </td>\
                                    <td>\
                                        <div class=\"checkbox\">\
                                            <label for=\"\">\
                                            <input type=\"checkbox\" name=\"permissions["+row_counter+"][]\" value=\"view\">\
                                            </label>\
                                        </div>\
                                    </td>\
                                    <td>\
                                        <div class=\"checkbox\" >\
                                            <label for=\"\">\
                                            <input type=\"checkbox\" name=\"permissions["+row_counter+"][]\" value=\"update\">\
                                            </label>\
                                        </div>\
                                    </td>\
                                    <td>\
                                        <div class=\"checkbox\">\
                                            <label for=\"\">\
                                            <input type=\"checkbox\" name=\"permissions["+row_counter+"][]\" value=\"delete\">\
                                            </label>\
                                        </div>\
                                    </td>\
                                </tr>";
                                row_counter++;
       $('#new-role-table tbody').append(row);
       console.log('clicked');

         });


         //to do the actual slugfing
         const slugify=(val)=>{
             return val.toString().toLowerCase().trim()
             .replace(/&/g,'-and-') //replace & with '-and-'
             .replace(/[\s\W-]+/g,'-')  //replace other non wordy character with '-'
         }
         // to create slug for role name
         $('#role-name').keyup(function(){
                $('#role-slug').val(slugify($(this).val()));
         });

         //password generator button click listener.
         $('#password_generate').click(function(){
             $.get('/password-generator',function(data,status){
                 console.log(data);
                 $('#notification-new-password').val(data);
             });
         });


    });
    </script>

</body>

</html>