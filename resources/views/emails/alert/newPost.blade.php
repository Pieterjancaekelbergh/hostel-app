<x-mail::message>
# {{ $post['title'] }}

{{ $post['content'] }}



<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
