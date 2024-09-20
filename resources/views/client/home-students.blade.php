@extends("layouts.app")

@section("header")
			<!-- Start .header-section -->
			<div id="home" class="header-section flex-box-middle section gradiant-background header-curbed-circle background-circles header-software">
				<div id="particles-js" class="particles-container"></div>
				<div id="navigation" class="navigation is-transparent" data-spy="affix">
					<nav class="navbar navbar-default">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-collapse-nav" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#home">
									<img class="logo logo-light" src="images/logo-MA.png" alt="logo" />
									<img class="logo logo-color" src="images/logo-MA.png" alt="logo" />
								</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse font-secondary" id="site-collapse-nav">
								<ul class="nav nav-list navbar-nav navbar-right">
									<li><a class="nav-item" href="/">Home</a></li>
									<li><a class="nav-item" href="/#about">About</a></li>
									<li><a class="nav-item" href="/#features">Features</a></li>
									<li><a class="nav-item" href="/#students">Daftar Siswa</a></li>
									<li><a class="nav-item" href="/#teachers">Daftar Guru</a></li>
									<li><a class="nav-item" href="/#mapels">Jadwal Pelajaran</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</div><!-- .navigation -->
			</div><!-- .header-section -->
@endsection

@section('content')
  		<!-- Start .team-section  -->
      <div class="team-section section grey-background pb-90" id="students">
        <div class="container">
          <div class="section-head text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="heading">Daftar <span>Siswa</span></h2>
              </div>
            </div>
          </div><!-- .section-head  -->
          <div class="row">
            @foreach ($users as $user)
              <div class="col-md-3 col-sm-6">
                <div class="team-member">
                  <div class="team-photo">
                    <img src="images/misbah-fb.jpg" alt="team" />
                    <a href="#{{$loop->iteration}}" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
                  </div>
                  <div class="team-info">
                    <h4 class="name">{{$user->name}}</h4>
                    <p class="sub-title">{{$user->role->name}}</p>
                  </div>
                  <!-- Start .team-profile  -->
                  <div id="{{$loop->iteration}}" class="team-profile mfp-hide">
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                    <div class="container-fluid">
                      <div class="row no-mg">
                        <div class="col-md-6">
                          <div class="team-profile-photo">
                            <img src="images/misbah-fb.jpg" alt="team" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="team-profile-info">
                            <h3 class="name">{{$user->name}}</h3>
                            <p class="sub-title">{{$user->role->name}}</p>
                            <ul class="social">
                              <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                              <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                              <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                              <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                            </ul>
                            <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
                            <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- .team-profile  -->
                </div>
              </div>
              @endforeach
            </div>
            @if ($users->count() === 8)
              <div class="text-center load-more">
                <a href="{{route("homeStudents")}}">Lihat Selengkapnya...</a>
              </div>
            @endif
        </div><!-- .container  -->
      </div><!-- .team-section  -->
@endsection
