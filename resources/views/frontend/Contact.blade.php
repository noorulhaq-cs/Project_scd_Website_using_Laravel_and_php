@extends('frontend.layouts.main')
@section('main-container')
    <main>
        <div class="container my-5">
            <h2>Contact Us</h2>
            <p>If you have any questions, comments, or concerns, we’d love to hear from you! Please fill out the form below, and we will get back to you as soon as possible.</p>
            
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4>Contact Information</h4>
                    <p><strong>Email:</strong> support@BoldWare.com</p>
                    <p><strong>Phone:</strong> +1 (234) 567-8901</p>
                    <p><strong>Address:</strong> 123 Fashion St, Karachi City, Pakistan</p>
    
                    <h4>Follow Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                        <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                        <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                    </ul>
                </div>
            </div>
    
        </div>
    </main>
    @endsection