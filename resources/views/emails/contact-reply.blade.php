<h1>Re: {{ $contactMessage->subject }}</h1>
<p>Dear {{ $contactMessage->name }},</p>

<p>This is a reply to your message:</p>

<b>{{ $contactMessage->message }}</b>

<hr>

<h1>Our Reply:</h1>
<p>{{ $replyMessage }}</p>

<p>Sincerely,</p>
<p>{{ config('mail.from.name') }}</p>
