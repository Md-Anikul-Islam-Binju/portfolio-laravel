@extends('welcome')
@section('content')

{{--About Section--}}
@php
    $user = \App\Models\User::first();
@endphp
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row no-gutters">
            <div class="col-lg-6 video-box">
                <img src="{{ asset('storage/profile/'.$user->profile) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                <div class="section-title">
                    <h2>About</h2>
                    <p>{!!$user->details!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= About Counts Section ======= -->
<section class="counts section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                <div class="count-box">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                    <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="count-box">
                    <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="count-box">
                    <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Technology Section ======= -->
@php
$skill = \App\Models\admin\Skill::get();
@endphp
<section id="services" class="services">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>My Skills</h2>
        </div>
        <div class="row">

            @foreach($skill as $data)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">{{$data->name}}</a></h4>
                <p class="description">{!! $data->details !!}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ======= Project ======= -->
@php
$project = \App\Models\admin\Project::get();
@endphp
<section id="team" class="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Project</h2>
            <p>My Completed Project name and link.</p>
        </div></br></br>
        <div class="row">
            @foreach($project as $data)
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                <div class="member">
{{--                    <div class="pic">--}}
{{--                        <img src="{{('frontend/img/team/team-1.jpg')}}" class="img-fluid" alt="">--}}
{{--                    </div>--}}
                    <div class="member-info">
                        <h4>{{$data->name}}</h4>
                        <span>{!! $data->details !!}</span>
                        <span>
                            <a href="{{$data->link}}" style="color: honeydew"; target="_blank">Project Link</a>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ======= Contact Us Section ======= -->
@php
$user = \App\Models\User::first();
@endphp
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 d-flex" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Badda,DIT Project,Dhaka 1212</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>{{$user->email}}<br>{{$user->optional_email}}</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+88{{$user->phone}}<br>+88{{$user->emergency_contact}}</p>
                </div>
            </div>
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
