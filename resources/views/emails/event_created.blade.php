<x-mail::message>
  # You've Been Added to an Event!

  Hey There,

  This email confirms that you've been added to the event "{{$event->name}}" on **{{ Carbon\Carbon::parse($event->date)->format('F d, Y') }}**.

  **Event Details:**

  * **Event Name:** {{$event->name}}
  * **Date:** **{{ Carbon\Carbon::parse($event->date)->format('F d, Y') }}**
  * **Location:** Aduvie Events Center


  **What to Do Next:**

  * You can view this event by clicking the following link: https://aduvieevents.com/events

  We look forward to seeing you there!

  Sincerely,

  The Aduvie Management Team

  <br>


  <x-mail::button :url="'https://aduvieevents.com/'">
    Visit Website
  </x-mail::button>

  Thanks,<br>
  {{ config('app.name') }}
</x-mail::message>
