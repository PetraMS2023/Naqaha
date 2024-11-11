<?php include  '../layout/top.php'; ?>

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Settings</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="home.php"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->


				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body" style="height: 313px;">
										<div class="d-flex flex-column align-items-center text-center" >
											<img style="background-color: #3f3f3f;" src="../assets/media/logo.svg" alt="Admin" class="rounded-circle p-1" width="110">
											<div class="mt-3">
												<h4><?php echo htmlspecialchars($admin_data['Name']); ?></h4>
												<p class="mb-1"><?php echo htmlspecialchars($admin_data['Email']); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card"  style="padding: 40px;">
									<div class="card-body">
                  <form method="POST" action="../backend/update_profile.php">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($admin_data['Name']); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($admin_data['Email']); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9">
                      <button type="submit" class="btn btn-light">Update</button>
											</div>
										</div>
                </form>

										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

<?php include  '../layout/end.php'; ?>