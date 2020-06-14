<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="hero-wrap hero-bread" style="background-image: url({{asset('assets/images/bg_6.jpg')}});">
                <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/home') }}">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                    </div>
                </div>
                </div>
            </div>
        
            <section class="ftco-section contact-section bg-light">
                <div class="container">
                    <div class="row d-flex mb-5 contact-info">
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-white p-5 contact-form">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    
                    </div>
        
                    <div class="col-md-6 d-flex">
                        <div class="bg-white py-5"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7298.71307647775!2d72.12077667504369!3d23.841469988178165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c87f660de3fb7%3A0x309552211b8546ec!2sJeevandhara%20Society%2C%20Patan%2C%20Gujarat%20384265!5e0!3m2!1sen!2sin!4v1592134070981!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    </div>
                </div>
                </div>
            </section>
            </div>
        blade;
    }
}
