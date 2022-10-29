@extends('layouts.master')
@section('content')
    <style>
        .contact-row {
            height: 50vh;
            background-color: var(--purble);
        }

        .contact-row h2 {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--bold-font-family);
            font-size: var(--big-header);
            color: white;
            font-weight: bolder
        }

        .contact-title h2 {
            font-family: var(--bold-font-family);
            font-size: var(--big-header);
            margin: 30px auto 30px auto;
        }

        .contact-form .form-group {
            padding-bottom: 10px;

        }
        .conact-details{
            padding: 50px;

        }
        .conact-details p{
            margin-bottom: 5px;
            font-family: var(--regular-font-family);
            font-size: var(--para-font-size);

            
        }


    </style>
    <section>
        <div class="container-fluid">
            <div class="row contact-row">
                <h2> Contact Us</h2>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contact-title">
                    <h2>Get In Touch</h2>
                </div>
                <div class="col-lg-6 col-md-6">

                    <form class="contact-form" method="POST" action="/contact">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                                <div class="alert-danger">{{ $errors->first('name') }}</div>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                                <div class="alert-danger">{{ $errors->first('email') }}</div>

                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="phone number" >
                                <div class="alert-danger">{{ $errors->first('phone') }}</div>

                            </div>
                            <div class="form-group">
                                <label for="company">Comapny</label>
                                <input type="text" name="company" class="form-control" id="company" placeholder="Company name" >
                                <div class="alert-danger">{{ $errors->first('company') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="company">Service</label>
                                <select name="service" class="form-select form-control" aria-label="Default select example" required>
                                    <option selected></option>
                                    <option  value="Website">Website</option>
                                    <option value="Mobile App">Mobile App</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Combos">Combos</option>
                                  </select>
                                  <div class="alert-danger">{{ $errors->first('service') }}</div>

                            </div>

                            
                            <div class="form-group purple-border">
                                <label for="message">Message</label>
                                <textarea name="data" class="form-control" id="message" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                {!! NoCaptcha::display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                <div class="alert-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="custom-btn my-4 btn-5"><span>SEND</span></button>
                    </form>

                </div>
                <div class="col-lg-6 col-md-6 d-flex flex-column ">
                    <div class="conact-details">
                        <p>iTasameem| Digital Agency</p>
                        <ul class="list-unstyled line-h-2">
                               <li class="pb-1">           
                                        <i class="fas fa-phone"></i>               
                                    <span class="footer-p para-text ">+48 571 439 117</span> 
                               </li>       
                               <li class="pb-1">           
                                        <i class="far fa-envelope-open"></i>               
                                    <span class="footer-p para-text ">info@itasameem.com</span> 
                               </li> 
                             </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {!! NoCaptcha::renderJs() !!}

@endsection
