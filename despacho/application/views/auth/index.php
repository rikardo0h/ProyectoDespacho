<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->

   <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/agency.css')?>" rel="stylesheet">

    

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">INICIO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Usuarios</h2>
                    <h1>rol <?php echo $this->session->userdata('rol'); ?></h1>
                    


			

			<div id="infoMessage"><?php echo $message;?></div>

			<table cellpadding=0 cellspacing=10>
				<tr>
					<th><?php echo lang('index_fname_th');?></th>
					<th><?php echo lang('index_lname_th');?></th>
					<th><?php echo lang('index_email_th');?></th>
					<th><?php echo lang('index_groups_th');?></th>
					<th><?php echo lang('index_status_th');?></th>
					<th><?php echo lang('index_action_th');?></th>
				</tr>
				<?php foreach ($users as $user):?>
					<tr>
						<td><?php echo $user->first_name;?></td>
						<td><?php echo $user->last_name;?></td>
						<td><?php echo $user->email;?></td>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
			                <?php endforeach?>
						</td>
						<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
						<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                        <td> <a href="<?php echo base_url()."index.php/auth/eliminar_usuario/".$user->id; ?>"> Eliminar </a></td>
					</tr>
				<?php endforeach;?>
			</table>

			<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>


                </div>
            </div>
            
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Despacho</span>

                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                      
                        <li><a href="#">DEMO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

  


    <!-- jQuery Version 1.11.0 -->
    <script src="<?= base_url('assets/js/jquery-1.11.0.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/js/classie.js')?>"></script>
    <script src="<?= base_url('assets/js/cbpAnimatedHeader.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url('assets/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?= base_url('assets/js/contact_me.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/js/agency.js')?>"></script>

</body>

</html>
