<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						
					</div>
					
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="../assets/media/logo.svg" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0"><?php echo htmlspecialchars($admin_data['Name']); ?></p>
								<p class="designattion mb-0"><?php echo htmlspecialchars($admin_data['Email']); ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
						
							<li><a class="dropdown-item d-flex align-items-center" href="Settings.php"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							
							<li><a class="dropdown-item d-flex align-items-center" href="../backend/logout.php"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>