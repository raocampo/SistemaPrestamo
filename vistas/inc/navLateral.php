<section class="full-box nav-lateral">
	<div class="full-box nav-lateral-bg show-nav-lateral"></div>
	<div class="full-box nav-lateral-content">
		<figure class="full-box nav-lateral-avatar">
			<i class="far fa-times-circle show-nav-lateral"></i>
			<img src="<?php echo servidor; ?>vistas/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
			<figcaption class="roboto-medium text-center">
				Robert Ocampo <br><small class="roboto-condensed-light">Desarrollador Web</small>
			</figcaption>
		</figure>
		<div class="full-box nav-lateral-bar"></div>
		<nav class="full-box nav-lateral-menu">
			<ul>
				<li>
					<a href="<?php echo servidor; ?>home/"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo servidor; ?>clienteNuevo/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>clienteList/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>clienteBuscar/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Items <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo servidor; ?>itemNuevo/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>itemList/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>itemBuscar/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Préstamos <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo servidor; ?>prestamosNuevo/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo préstamo</a>
						</li>
						<li>
							<a href="prestamosRes/"><i class="far fa-calendar-alt fa-fw"></i> &nbsp; Reservaciones</a>
						</li>
						<li>
							<a href="prestamosPend/"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Préstamos</a>
						</li>
						<li>
							<a href="prestamosList/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Finalizados</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>prestamosBuscar/"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar por fecha</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo servidor; ?>usuariosNuevo/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>usuariosList/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
						</li>
						<li>
							<a href="<?php echo servidor; ?>usuariosBuscar/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo servidor; ?>empresa/"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
				</li>
			</ul>
		</nav>
	</div>
</section>