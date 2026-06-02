<div class="contact-page">
    <div class="contact-container">

       <form action="/contact" method="POST">
    <h1>Contact Us</h1>

    @csrf

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <input type="text" name="phone" placeholder="Phone Number">

    <textarea name="message" placeholder="Your Message"></textarea>

    <button type="submit">Send Message</button>
</form>

    </div>
</div>