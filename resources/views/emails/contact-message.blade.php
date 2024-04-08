
<x-mail::message>
    <h1>New Contact Message</h1>
    <p>A new contact message has been received from {{ $contactMessage->name }} ({{ $contactMessage->email }}).</p>
    <p><strong>Subject:</strong> {{ $contactMessage->subject }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactMessage->message }}</p>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
