<h1>Re: {{ $bookingMessage->description }}</h1>
<p>Dear {{ $bookingMessage->firstName }},</p>

<p>This is a reply to your booking:</p>

<b>{{ $bookingMessage->message }}</b>

<hr>

<h1>Our Reply:</h1>
<p>{{ $replyMessage }}</p>

<p>Sincerely,</p>
<p>{{ config('mail.from.name') }}</p>
