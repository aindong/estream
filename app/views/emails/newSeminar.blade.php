<div class="container" style="font-family:calibri; margin: 20px 30px;">
    <hr style="height: 3px; background: #42454A; border:none"/>
    <h1> New seminar has been added on the list! </h1>
    <h3>{{ $title }}</h3>
    <p>Location: {{ $location }}</p>
    <p>Date: {{ $start_at }} - {{ $end_at }}</p>
    <p>{{ $description }}</p>
    <p>
        Check this new seminar from us at : <a href="{{ URL::to('/') }}/seminars">SEMINARS</a>
    </p>
</div>
