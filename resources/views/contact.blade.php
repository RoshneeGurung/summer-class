@extends('master')
@section('content')
     {{-- Main Content --}}
    <main>
    <h2>Contact Us</h2>
    <p>Have questions or need assistance? We'd love to hear from you.</p>

    <section>
        <h3>Email</h3>
        <p>support@mywebsite.com</p>

        <h3>Phone</h3>
        <p>+977-9800000000</p>

        <h3>Address</h3>
        <p>MyWebsite HQ, Durbar Marg, Kathmandu, Nepal</p>
    </section>

    <section>
        <h3>Send Us a Message</h3>
        <form action="/send-message" method="POST">
            @csrf
            <label for="name">Your Name:</label><br>
            <input type="text" name="name" required><br><br>

            <label for="email">Your Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea name="message" rows="5" required></textarea><br><br>

            <button type="submit">Send Message</button>
          
        </form>
    </section>
</main>

@endsection 

 
