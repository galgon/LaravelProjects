<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
                <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="index.html"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/></a>
            <!-- END LOGO -->
            <ul class="nav pull-right notifcation-center">
                <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
                <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
                <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>
            </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav" >
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
                        <div class="iconset top-menu-toggle-dark"></div>
                    </a> </li>
                </ul>
                <ul class="nav quick-section">
                    <li class="quicklinks"> <a href="#" class="" >
                        <div class="iconset top-reload"></div>
                    </a> </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="quicklinks"> <a href="#" class="" >
                        <div class="iconset top-tiles"></div>
                    </a> </li>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on"> <span class="iconset top-search"></span></span>
                        <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler">
                    <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
                        <div class="user-details">
                            <div class="username">
                                <span class="badge badge-important">3</span>
                                John <span class="bold">Smith</span>
                            </div>
                        </div>
                        <div class="iconset top-down-arrow"></div>
                    </a>
                    <div id="notification-list" style="display:none">
                        <div style="width:300px">
                            <div class="notification-messages info">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                </div>
                                <div class="message-wrapper">
                                    <div class="heading">
                                        David Nester - Commented on your wall
                                    </div>
                                    <div class="description">
                                        Meeting postponed to tomorrow
                                    </div>
                                    <div class="date pull-left">
                                        A min ago
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="notification-messages danger">
                                <div class="iconholder">
                                    <i class="icon-warning-sign"></i>
                                </div>
                                <div class="message-wrapper">
                                    <div class="heading">
                                        Server load limited
                                    </div>
                                    <div class="description">
                                        Database server has reached its daily capicity
                                    </div>
                                    <div class="date pull-left">
                                        2 mins ago
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="notification-messages success">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                                </div>
                                <div class="message-wrapper">
                                    <div class="heading">
                                        You haveve got 150 messages
                                    </div>
                                    <div class="description">
                                        150 newly unread messages in your inbox
                                    </div>
                                    <div class="date pull-left">
                                        An hour ago
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-pic">
                        <img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <div class="iconset top-settings-dark "></div>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="user-profile.html"> My Account</a>
                            </li>
                            <li><a href="calender.html">My Calendar</a>
                            </li>
                            <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
                    </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="quicklinks">
                        <a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" ><div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>
                        </a>
                        <div class="simple-chat-popup chat-menu-toggle hide" >
                            <div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
                            <div style="width:100px">
                                <div class="semi-bold">David Nester</div>
                                <div class="message">Hey you there </div>
                            </div>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->

    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
	</div>
    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="username">John <span class="semi-bold">Smith</span></div>
      <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	<p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
    <ul>	
      <li class="start active "> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>
	  <li class=""> <a href="email.html"> <i class="fa fa-envelope"></i> <span class="title">Email</span>  <span class=" badge badge-disable pull-right ">203</span></a> </li>      
	  <li class=""> <a href="../frontend/index.html"> <i class="fa fa-flag"></i>  <span class="title">Frontend</span></a></li>      
      <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
		  <li > <a href="typography.html"> Typography </a> </li>
		  <li > <a href="messages_notifications.html"> Messages & Notifications </a> </li>
		   <li > <a href="icons.html">Icons</a> </li>
		   <li > <a href="buttons.html">Buttons</a> </li>		 
          <li > <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
          <li > <a href="sliders.html">Sliders</a> </li>
          <li > <a href="group_list.html">Group list </a> </li>
        </ul>
      </li>
	  <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Forms</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="form_elements.html">Form Elements </a> </li>
          <li > <a href="form_validations.html">Form Validations</a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Grids</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="grids_simple.html">Simple Grids</a> </li>
          <li > <a href="grids_draggable.html">Draggable Grids </a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="tables.html"> Basic Tables </a> </li>
          <li > <a href="datatables.html"> Data Tables </a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="google_map.html"> Google Maps </a> </li>
          <li > <a href="vector_map.html"> Vector Maps </a> </li>
        </ul>
      </li>
      <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>    
      <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="user-profile.html"> User Profile </a> </li>
          <li > <a href="time_line.html"> Time line </a> </li>
          <li > <a href="support_ticket.html"> Support Ticket </a> </li>
          <li > <a href="gallery.html"> Gallery</a> </li>
		  <li class=""><a href="calender.html"> Calendar</a> </li>
          <li > <a href="search_results.html"> Search Results </a> </li>
          <li > <a href="invoice.html"> Invoice </a> </li>
          <li > <a href="404.html"> 404 Page </a> </li>
          <li > <a href="500.html"> 500 Page </a> </li>
          <li > <a href="blank_template.html"> Blank Page </a> </li>
          <li > <a href="login.html"> Login </a> </li>
          <li > <a href="login_v2.html">Login v2</a> </li>
          <li > <a href="lockscreen.html"> Lockscreen </a> </li>
        </ul>
      </li>
	  <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="javascript:;"> Level 1 </a> </li>
          <li > <a href="javascript:;">  <span class="title">Level 2</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				 <li > <a href="javascript:;"> Sub Menu </a> </li>
				 <li > <a href="ujavascript:;"> Sub Menu </a> </li>
			</ul>
		  </li>
        </ul>
      </li>
	  <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="javascript:;"> <i class="fa fa-plus"></i></a> 
		  <ul class="sub-menu">
		  	<li class="side-bar-widgets">
			<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
			<ul class="folders" >
				  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
				  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
				  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
				  <li class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name"></li>
			</ul>
			<p class="menu-title">PROJECTS </p>
				<div class="status-widget">
					<div class="status-widget-wrapper">
						<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
						<p>Redesign home page</p>
					</div>
				</div>
				<div class="status-widget">
					<div class="status-widget-wrapper">
						<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
						<p>Statistical report</p>
					</div>
				</div>
			</li>
		</ul>
	  </li>    
    </ul>
	<div class="side-bar-widgets">
	<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
	<ul class="folders" >
		  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
		  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
		  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
		  <li class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" ></li>
	</ul>
	<p class="menu-title">PROJECTS </p>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Redesign home page</p>
			</div>
		</div>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Statistical report</p>
			</div>
		</div>
	</div>
	<a href="#" class="scrollup">Scroll</a>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
   <div class="footer-widget">		
		<div class="progress transparent progress-small no-radius no-margin">
			<div data-percentage="79%" class="progress-bar animate-progress-bar progress-bar-success " ></div>		
		</div>
		<div class="pull-right">
			<div class="details-status">
			<span data-animation-duration="560" data-value="86" class="animate-number"></span>%
		</div>	
		<a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
   </div>  
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tables</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Pessoas</h3>
      </div>
      <button class="btn btn-primary btn-cons" data-toggle="modal" data-target="#myModal"> Cadastrar Pessoa </button>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <form method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <br>
              <i class="icon-credit-card icon-7x"></i>
              <h4 id="myModalLabel" class="semi-bold">Cadastrar usuário.</h4>
              <br>
            </div>
            <div class="modal-body">
              <div class="row form-row">
                <div class="col-md-8">
                  <input type="text" name="person[name]" class="form-control" placeholder="Nome">
                </div>
                <div class="col-md-4">
                  <input type="text" name="person[cpf]" class="form-control" placeholder="CPF/CNPJ">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-8">
                  <input type="text" name="person[address]" class="form-control" placeholder="Endereço">
                </div>
                <div class="col-md-4">
                  <input type="text" name="person[stnumber]" class="form-control" placeholder="Número">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-8">
                  <input type="text" name="person[district]" class="form-control" placeholder="Bairro">
                </div>
                <div class="col-md-4">
                  <input type="text" name="person[compliment]" class="form-control" placeholder="Complemento">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-2">
                  <input type="text" name="person[uf]" class="form-control" placeholder="UF">
                </div>
                <div class="col-md-6">
                  <input type="text" name="person[city]" class="form-control" placeholder="Municipio">
                </div>
                <div class="col-md-4">
                  <input type="text" name="person[cep]" class="form-control" placeholder="CEP">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-6">
                  <input type="text" name="person[email01]" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <input type="text" name="person[phone01]" class="form-control" placeholder="Telefone">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-6">
                  <input type="text" name="person[birthdate]" class="form-control" placeholder="Data de nascimento">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-6">
                  <input type="text" name="person[num_bank]" class="form-control" placeholder="Número do Banco">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-6">
                  <input type="text" name="person[num_ag]" class="form-control" placeholder="Número da Agência">
                </div>
              </div>
              <div class="row form-row">
                <div class="col-md-6">
                  <input type="text" name="person[num_acc]" class="form-control" placeholder="Número da Conta">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="send_form btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Table <span class="semi-bold">Styles</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">   
                <table class="table table-hover table-condensed" id="example">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th style="width:1%">Ação</th>
                      <!-- <th style="width:22%" data-hide="phone,tablet">Description</th>
                      <th style="width:6%">Price</th> -->
                      <!-- <th style="width:10%" data-hide="phone,tablet">Progress</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($people as $person)
                    <tr>
                      <td class="v-align-middle">{{ $person->person_id }}</td>
                      <td class="v-align-middle">{{ $person->name }}</td>
                      <td class="v-align-middle"><a href="/person/{{{ $person->person_id }}}/delete" type="button" class="btn btn-danger btn-primary btn-xs btn-mini">Excluir</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
	   <div class="admin-bar" id="quick-access" style="display:">
        <div class="admin-bar-inner">
          <div class="form-horizontal">
            <select id="val1" class="select2-wrapper">
              <option value="Gecko">Gecko</option>
              <option value="Webkit">Webkit</option>
              <option value="KHTML">KHTML</option>
              <option value="Tasman">Tasman</option>
            </select>
            <select id="val2" class="select2-wrapper">
              <option value="Internet Explorer 10">Internet Explorer 10</option>
              <option value="Firefox 4.0">Firefox 4.0</option>
              <option value="Chrome">Chrome</option>
            </select>
          </div>
          <button class="btn btn-primary btn-cons btn-add" type="button">Add Browser</button>
          <button class="btn btn-white btn-cons btn-cancel" type="button">Cancel</button>
        </div>
      </div>
      <div class="addNewRow"></div>
  </div>
  
</div>
<!-- END PAGE -->
<!-- BEGIN CHAT --> 
<div id="sidr" class="chat-window-wrapper">
	<div id="main-chat-wrapper" >
	<div class="chat-window-wrapper fadeIn" id="chat-users" >
		<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>			
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">group chats</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups" >
					<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
					<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="side-widget fadeIn">
		   <div class="side-widget-title">favourites</div>
		   <div id="favourites-list">
		    <div class="side-widget-content" >
				<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<span class="badge badge-important">3</span>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">more friends</div>
			 <div class="side-widget-content" id="friends-list">
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>				
			</div>		
		</div>
	</div>

	<div class="chat-window-wrapper fadeIn" id="messages-wrapper" style="display:none">
	<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>					
		</div>
	<div class="clearfix"></div>	
	<div class="chat-messages-header">
	<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
	<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
	</div>
	<div class="chat-messages">
		<div class="sent_time">Yesterday 11:25pm</div>
		<div class="user-details-wrapper " >
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Hello, You there?
			   </div>
			</div>					
			<div class="clearfix"></div>
		   <div class="sent_time off">Yesterday 11:25pm</div>
		</div>		
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					How was the meeting?
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="sent_time ">Today 11:25pm</div>
		<div class="user-details-wrapper pull-right">
			<div class="user-details">
			  <div class="bubble sender">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Sent On Tue, 2:45pm</div>
		</div>		
	</div>
	</div>
	<div class="chat-input-wrapper" style="display:none">
		<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/datatables.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>