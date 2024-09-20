@extends('layouts.app')

@section('title', 'Landing Page - KelasMaju')

@section('content')

    {{-- Pembatas Header --}}
    <div class="pembatas pt-100">
        <img src="images/pembatas-header.png" alt="">
    </div>

    {{-- Start .Welcome-section --}}
    <div class="welcome" id="home">
        <img src="{{ asset('images/background-sekolah.png') }}" alt="MA COKROAMINOTO PAGEDONGAN">
        <div class="welcome-text">
            <h1>Selamat Datang di MA COKROAMINOTO 01 PAGEDONGAN </h1>
        </div>
    </div>

    <!-- Start .about-section  -->
    <div id="about" class="about-section section white-bg">
        <div class="galeri-word">
            <h1>Galeri</h1>
        </div>
        <div class="slideshow-container">

            <div class="mySlides" style="display: block;">
                <div class="numbertext">1 / 3</div>
                <img src="{{ asset('images/img1.jpg') }}" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="{{ asset('images/img2.jpg') }}" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="{{ asset('images/img3.jpg') }}" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev-slide" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next-slide" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div
            style="text-align:center; position: absolute;
                    z-index: 1;
                    width: 100%;
                    bottom: 50px;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        {{-- <div class="container tab-fix">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading">About <span>ClassKu</span></h2>
                        <p><b>ClassKu </b>Adalah Sistem Manajemen Kelas untuk memberikan solusi inovatif yang
                            mengintegrasikan potensi hebat dari <a href="https://laravel.com" target="_blank">Laravel</a>
                            dan estetika modern dari <a href="https://github.com/stisla/stisla" target="_blank">Stisla</a>
                            untuk mengatasi tantangan kompleks dalam pengelolaan kelas. Proyek ini dirancang untuk
                            memberdayakan pendidik dan staff sekolah dengan alat yang diperlukan untuk mengelola, memonitor,
                            dan memfasilitasi pengalaman belajar yang optimal.</p>
                    </div>
                </div>
            </div><!-- .section-head -->
            <div class="row tab-center mobile-center">
                <div class="col-md-6">
                    <div class="video wow fadeInLeft" data-wow-duration=".5s">
                        <img src="images/about-video.jpg" alt="about-video" />
                        <div class="video-overlay gradiant-background"></div>
                        <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="video-play"
                            data-effect="mfp-3d-unfold"><i class="fa fa-play"></i></a>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="txt-entry">
                        <h3>Take a Look Around our App</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                        @if (!Auth::user())
                            <a href="{{ route('login') }}" class="button">Login</a>
                        @endif
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container --> --}}
    </div><!-- .about-section  -->

    <!-- Start .features-box-section  -->
    <div id="berita" class="features-box-section section pb-90 white-bg">
        <div class="berita-word">
            <h1>Berita Terbaru</h1>
        </div>
        <div class="berita-container tab-fix pt-70">
            <div class="berita-post">
                <div class="berita-desc">
                    <h2>Title</h2>
                    <span>Date</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quisquam nesciunt amet! Aliquam aut
                        molestias ullam illo alias nihil itaque voluptatum blanditiis.</p>
                    <a href="#">Lanjut Membaca</a>
                </div>
                <img src="{{ asset('images/background-sekolah.png') }}" alt="thumbnail berita">
            </div>
            <div class="berita-post">
                <div class="berita-desc">
                    <h2>Title</h2>
                    <span>Date</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quisquam nesciunt amet! Aliquam aut
                        molestias ullam illo alias nihil itaque voluptatum blanditiis.</p>
                    <a href="#">Lanjut Membaca</a>
                </div>
                <img src="{{ asset('images/background-sekolah.png') }}" alt="thumbnail berita">
            </div>
            <div class="berita-post">
                <div class="berita-desc">
                    <h2>Title</h2>
                    <span>Date</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quisquam nesciunt amet! Aliquam aut
                        molestias ullam illo alias nihil itaque voluptatum blanditiis.</p>
                    <a href="#">Lanjut Membaca</a>
                </div>
                <img src="{{ asset('images/background-sekolah.png') }}" alt="thumbnail berita">
            </div>
            <div class="berita-post">
                <div class="berita-desc">
                    <h2>Title</h2>
                    <span>Date</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quisquam nesciunt amet! Aliquam aut
                        molestias ullam illo alias nihil itaque voluptatum blanditiis.</p>
                    <a href="#">Lanjut Membaca</a>
                </div>
                <img src="{{ asset('images/background-sekolah.png') }}" alt="thumbnail berita">
            </div>

        </div>
        {{-- <div class="container tab-fix">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                        <h2 class="heading">ClassKu <span>Features</span></h2>
                        <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque
                            penatibus et magnis dis parturient montes nascetur.</p>
                    </div>
                </div>
            </div><!-- .section-head -->
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-box">
                        <div class="box-icon box-icon-small">
                            <em class="ti ti-layers"></em>
                        </div>
                        <h4>Responsive Design</h4>
                        <p>Desain responsif memastikan bahwa halaman memiliki kemampuan untuk secara otomatis menyesuaikan
                            tampilannya dengan berbagai ukuran layar, termasuk pada perangkat mobile, tablet, dan desktop.
                        </p>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container --> --}}
    </div><!-- .features-box-section  -->


    {{-- <!-- Start .features-section  -->
		<div class="features-section section gradiant-background section-overflow-fix">
			<div class="container tab-fix">
				<div class="features-content pt-10">
					<div class="row">
						<div class="col-md-7">
							<div class="section-head heading-light mobile-center tab-center">
								<div class="row">
									<div class="col-md-12">
										<h2 class="heading heading-light">Amazing Features</h2>
										<p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									</div>
								</div>
							</div><!-- .section-head -->
							<div class="row">
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-user"></em>
										<h4>User Friendly</h4>
										<p>Lorem ipsum dolor sit amet consect etur adipi sicing elited do eiusmod tempor.</p>
									</div>
								</div><!-- .col -->
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-bolt"></em>
										<h4>Super Fast Speed</h4>
										<p>Amet consect etur adipis icing elited do eiu smod tempor incidi dout labore.</p>
									</div>
								</div><!-- .col -->
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-video-camera"></em>
										<h4>Height Resolation</h4>
										<p>Dolor sit ipsum amet consect etur adipis icing elited do eiusmod dout.</p>
									</div>
								</div><!-- .col -->
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-infinite"></em>
										<h4>Unlimited Posibility</h4>
										<p>Consect etur adipis icing elited do eius mod tempor incidi dout labore magna.</p>
									</div>
								</div><!-- .col -->
							</div><!-- .row -->
						</div><!-- .col -->
						<div class="col-md-5 pt-100 text-center">
							<div class="feature-mockups clearfix">
								<div class="fearures-software-mockup black right wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".7s">
									<img src="images/software-screen-b.jpg" alt="software-screen" />
								</div>
								<div class="phone-mockup">
									<div class="iphonex-flat-mockup large wow fadeInUp" data-wow-duration=".5s">
										<img src="images/app-screen-a.jpg" alt="app screen">
									</div>
								</div>
							</div>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .features-content -->
			</div><!-- .container -->
		</div><!-- .features-section  --> --}}


    {{-- <!-- Start .faq-section  -->
		<div class="faq-section section white-bg pt-120 pb-100">
			<div class="container">
				<div class="faq-alt">
					<div class="row tab-fix">
						<div class="col-md-4 tab-center mobile-center col-md-offset-1">
							<div class="side-heading">
								<h2 class="heading">KelasMaju <span>FAQ</span></h2>
								<p>We got you coverd, check those faq if its not there just <a class="nav-item" href="#contacts">ask</a> us.</p>
							</div>
						</div><!-- .col  -->
						<div class="col-md-6">
							<!-- Accordion -->
							<div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
								<!-- each panel for accordion -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-i1">
										<h6 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
												Is this app free to use for business or commercial use ?
												<span class="plus-minus"><span></span></span>
											</a>
										</h6>
									</div>
									<div id="accordion-pane-i1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i1">
										<div class="panel-body">
											<p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
										</div>
									</div>
								</div>
								<!-- each panel for accordion -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-i2">
										<h6 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
												How do i make a support request with this app?
												<span class="plus-minus"><span></span></span>
											</a>
										</h6>
									</div>
									<div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
										<div class="panel-body">
											<p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
										</div>
									</div>
								</div>
								<!-- each panel for accordion -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-i3">
										<h6 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
												How and where can we download latest update ?
												<span class="plus-minus"><span></span></span>
											</a>
										</h6>
									</div>
									<div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
										<div class="panel-body">
											<p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
										</div>
									</div>
								</div>
								<!-- each panel for accordion -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-i4">
										<h6 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
												Is there any premium version with extended features ?
												<span class="plus-minus"><span></span></span>
											</a>
										</h6>
									</div>
									<div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i4">
										<div class="panel-body">
											<p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
										</div>
									</div>
								</div><!-- end each panel -->
								<!-- each panel for accordion -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-i5">
										<h6 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i5" aria-expanded="false">
												Where do i find any details documentation ?
												<span class="plus-minus"><span></span></span>
											</a>
										</h6>
									</div>
									<div id="accordion-pane-i5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i5">
										<div class="panel-body">
											<p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
										</div>
									</div>
								</div><!-- end each panel -->
								<!-- each panel for accordion -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-i6">
										<h6 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i6" aria-expanded="false">
												Are you gays aviable for making custom apps ?
												<span class="plus-minus"><span></span></span>
											</a>
										</h6>
									</div>
									<div id="accordion-pane-i6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i6">
										<div class="panel-body">
											<p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
										</div>
									</div>
								</div><!-- end each panel -->
							</div><!-- Accordion #end -->
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .faq  -->
			</div><!-- .container  -->
		</div><!-- .faq-section  --> --}}

    <!-- Start .team-section  -->
    {{-- <div class="team-section section grey-background pb-90" id="students">
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
                                <a href="#{{ $loop->iteration }}" class="expand-trigger content-popup"><span
                                        class="ti ti-plus"></span></a>
                            </div>
                            <div class="team-info">
                                <h4 class="name">{{ $user->name }}</h4>
                                <p class="sub-title">{{ $user->role->name }}</p>
                            </div>
                            <!-- Start .team-profile  -->
                            <div id="{{ $loop->iteration }}" class="team-profile mfp-hide">
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
                                                <h3 class="name">{{ $user->name }}</h3>
                                                <p class="sub-title">{{ $user->role->name }}</p>
                                                <ul class="social">
                                                    <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                                                    <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                                                    <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                                                    <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                                                </ul>
                                                <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis
                                                    icing elit. Simi lique, autem. </p>
                                                <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole
                                                    stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam
                                                    iusto minima thanks.</p>
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
                    <a href="{{ route('homeStudents') }}">Lihat Selengkapnya...</a>
                </div>
            @endif
        </div><!-- .container  -->
    </div><!-- .team-section  --> --}}

    {{-- Profil Guru Section --}}
    <div id="teachers">
        <div class="teachers-banner"></div>
        <div class="teachers-word pt-50">
            <h1>Profil Guru</h1>
        </div>
        {{-- <div class="teachers-profile">
        </div> --}}
        <div class="container" style="display: flex; justify-content:center; align-items:center;">
            <div class="owl-carousel teachers-carousel owl-theme pt-50">
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-1.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-1.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-2.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-3.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-4.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-5.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-1.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-2.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-3.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-4.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-5.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="item teacher-profile">
                    <img src="{{ asset('images/avatar-1.png') }}" alt="">
                    <div class="teacher-desc">
                        <h3>Nama</h3>
                        <h4>Mata Pelajaran</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start .testimonial-section  -->
    {{-- <div id="testimonial" class="testimonial-section section white-bg pb-120">
			<div class="imagebg">
				<img src="images/testimonial-bg.png" alt="testimonial-bg">
			</div>
			<div class="container">
				<div class="section-head text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="heading">What our <span>client say !</span></h2>
							<p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
				</div><!-- .section-head  -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="testimonial-carousel has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true" data-navs="false">
							<div class="item text-center">
								<div class="quotes">
									<img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
									<blockquote>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et magnis dis parturient montes nascetur.</blockquote>
									<h6>Andy Lovell</h6>
									<div class="client-image">
										<img src="images/client-1.jpg" alt="client" />
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="quotes">
									<img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
									<blockquote>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et magnis dis parturient montes nascetur.</blockquote>
									<h6>Andy Lovell</h6>
									<div class="client-image">
										<img src="images/client-2.jpg" alt="client" />
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="quotes">
									<img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
									<blockquote>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et magnis dis parturient montes nascetur.</blockquote>
									<h6>Andy Lovell</h6>
									<div class="client-image">
										<img src="images/client-1.jpg" alt="client" />
									</div>
								</div>
							</div>
						</div><!-- .testimonial-carousel  -->
					</div><!-- .col  -->
				</div><!-- .row  -->
			</div><!-- .container  -->
		</div><!-- .testimonial-section  --> --}}

    <!-- Start .contact-section  -->
    <div id="contacts" class="contact-section section gradiant-background pb-90">
        <div class="container">
            <div class="section-head heading-light text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading heading-light">Get In Touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form white-bg text-center">
                        <h3>Kotak Saran</h3>
                        <p>Silahkan sampaikan saran & pesan untuk membuat sekolah lebih baik, saran dan pesan anda sangat berharga bagi kami</p>
                        <form id="contact-form" class="form-message"
                            action="{{ route('saran.create') }}" method="POST">
                            @csrf
                            <div class="form-results"></div>
                            <div class="form-group row fix-gutter-10">
                                <div class="form-field col-sm-6 gutter-10 form-m-bttm">
                                    <input name="name" type="text" placeholder="Nama Lengkap *"
                                        class="form-control required">
                                </div>
                                <div class="form-field col-sm-6 gutter-10">
                                    <input name="email" type="email" placeholder="Email *"
                                        class="form-control required email">
                                </div>
                            </div>
                            <div class="form-group row fix-gutter-10">
                                <div class="form-field col-md-6 gutter-10 form-m-bttm">
                                    <input name="phone_number" type="text" placeholder="Nomor Telephone *"
                                        class="form-control required">
                                </div>
                                {{-- <div class="form-field col-md-6 gutter-10">
                                    <input name="contact-subject" type="text" placeholder="Subject *"
                                        class="form-control required">
                                </div> --}}
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea name="suggestion" placeholder="Pesan *" class="txtarea form-control required"></textarea>
                                </div>
                            </div>
                            <input type="text" class="hidden" name="form-anti-honeypot" value="">
                            <button type="submit" class="button solid-btn sb-h">Kirim</button>
                        </form>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-6">
                    <div class="contact-info white-bg">
                        <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; gap: 5px;">
                                <em class="fa fa-envelope"></em>
                                <h6>macokroaminoto01@gmail.com</h6>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; gap: 5px;">
                                <em class="fa fa-map-marker"></em>
                                <h6>Silegi, Lebakwangi, Banjarnegara</h6>
                            </div>
                        </div>
                    </div>
                    <div id="gMap" class="google-map"></div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .container  -->
    </div><!-- .contact-section  -->
@endsection
