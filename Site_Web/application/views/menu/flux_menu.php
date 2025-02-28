		
		<!-- Menu -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container" style="width:90%; min-width:973px;">
			  <div class="nav-collapse">
				<a class="brand" href="<?php  echo url('flux'); ?>">WaveBook</a>
				<ul class="nav">
				  <li class="active"><a href="<?php  echo url('flux'); ?>"><i class="icon-th-list"></i> Flux d'actualités</a></li>
				  <li><a href="<?php  echo url('profil'); ?>"><i class="icon-user"></i> Profil de <?php $user =  unserialize($this->session->userdata('user_obj')); echo ucfirst($user->vorname) . ' ' . ucfirst($user->name); ?></a></li>
				  <li class="dropdown">
						<a href="<?php  echo url('account/settings'); ?>" class="dropdown-toggle" data-toggle="dropdown">
						 <i class="icon-wrench"></i> Mon compte
						  <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
						  <li><a tabindex="-1" href="<?php  echo url('account/settings'); ?>"><i class="icon-edit"></i> Modifier vos informations</a></li>
						  <li><a tabindex="-1" href="<?php  echo url('account/change_img_profile'); ?>"><i class="icon-picture"></i> Changer votre image de profil</a></li>
						  <li class="divider"></li>
						  <li><a tabindex="-1" href="<?php  echo url('account/logout'); ?>"><i class="icon-off"></i> Déconnexion</a></li>
						</ul>
					  </li>
				  <li><a href="<?php  echo url('about'); ?>"><i class="icon-lock"></i> A Propos</a></li>
				</ul> 
				<form class="navbar-search pull-right" method="post" action="<?php  echo url('flux/search'); ?>">
						<input type="text" class="search-query" name="search_query" placeholder="Rechercher" />
				</form>
			  </div>
			</div>
		  </div>
		</nav>
