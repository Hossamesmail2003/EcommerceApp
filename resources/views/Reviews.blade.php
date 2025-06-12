@extends('master')

@section('content')


                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="form-title">
                            <h2>Add review?</h2>
                        </div>
                        <div id="form_status"></div>
                        <div class="contact-form">
                            <form type="POST" method="POST" id="fruitkha-contact" action="/StoreReview">
                                @csrf
                                <p>
                                    <input type="text" placeholder="Name" name="name" id="name">
                                    <input type="email" placeholder="Email" name="email" id="email">
                                </p>
                                <p>
                                    <input type="tel" placeholder="Phone" name="phone" id="phone">
                                    <input type="text" placeholder="Subject" name="subject" id="subject">
                                </p>
                                <p><textarea name="content" id="content" cols="30" rows="10" placeholder="Message"></textarea></p>
                                <input type="hidden" name="token" >
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div>
                    </div>

					<div class="testimonial-sliders">
                        @foreach($reviews as $review)
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar1.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>{{$review->name}}<span>{{$review->subject}}</span></h3>
                                    <p class="testimonial-body">{{$review->content}}</p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</div>



@endsection