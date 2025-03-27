@extends('layouts.app')

@section('title', 'Clubs')

<style>
    .club-card {
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        padding: 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .club-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background: #006BFF;
    }
    .see-more-btn {
        background: #e63946;
        color: white;
        padding: 10px 24px;
        border-radius: 24px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        transition: background 0.3s ease;
    
    }
    .see-more-btn:hover {
        background: #c53030;
    }
    .titlenum{
        font-size: 70px;
        color: #EEEEEE;
        margin-left: -130px;
        font-weight: bold;
    }
</style>

<h1 style="text-align: center; font-size: 24px; font-weight: bold; margin: 24px 0;">Academic Clubs</h1>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; padding: 0 24px;">
    @php
        $academicClubs = [
            ['id' => 1, 'title' => 'Computer Society', 'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.', 'image' => asset('storage/images/poster1.jpg'), 'route' => route('about')],
            ['id' => 2, 'title' => 'CulBake Club', 'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.', 'image' => asset('storage/images/poster2.jpg'), 'route' => route('about')],
            ['id' => 3, 'title' => 'Society of Automotive Technology (SATS)', 'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.', 'image' => asset('storage/images/poster3.jpg'), 'route' => route('about')],
            ['id' => 4, 'title' => 'Computer Society', 'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.', 'image' => asset('storage/images/poster1.jpg'), 'route' => route('about')],
            ['id' => 5, 'title' => 'CulBake Club', 'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.', 'image' => asset('storage/images/poster2.jpg'), 'route' => route('about')],
            ['id' => 6, 'title' => 'Society of Automotive Technology (SATS)', 'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.', 'image' => asset('storage/images/poster3.jpg'), 'route' => route('about')],
        ];
    @endphp
    
    @foreach ($academicClubs as $club)
    <div class="club-card">
        <h1 class="titlenum">0{{ $club['id'] }}</h1>
        <h2 style="color: #333; font-size: 18px; font-weight: 600;">{{ $club['title'] }}</h2>
        <p style="color: black; margin-top: 8px; font-size: 14px;">{{ $club['description'] }}</p>
        <img src="{{ $club['image'] }}" alt="{{ $club['title'] }}" style="margin-top: 16px; width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        <a href="{{ $club['route'] ?? '#' }}" style="margin-top: 16px;">
            <button class="see-more-btn">See More</button>
        </a>
    </div>
    @endforeach
</div>



<h1 style="text-align: center; font-size: 24px; font-weight: bold; margin: 24px 0;"><br>NOn-Academic Clubs</h1>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; padding: 0 24px;">
    @php
        $nonacademicClubs = [
            ['id' => 1, 'title' => 'Computer Society', 'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.', 'image' => asset('storage/images/poster1.jpg'), 'route' => route('about')],
            ['id' => 2, 'title' => 'CulBake Club', 'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.', 'image' => asset('storage/images/poster2.jpg'), 'route' => route('about')],
            ['id' => 3, 'title' => 'Society of Automotive Technology (SATS)', 'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.', 'image' => asset('storage/images/poster3.jpg'), 'route' => route('about')],
            ['id' => 4, 'title' => 'Computer Society', 'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.', 'image' => asset('storage/images/poster1.jpg'), 'route' => route('about')],
            ['id' => 5, 'title' => 'CulBake Club', 'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.', 'image' => asset('storage/images/poster2.jpg'), 'route' => route('about')],
            ['id' => 6, 'title' => 'Society of Automotive Technology (SATS)', 'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.', 'image' => asset('storage/images/poster3.jpg'), 'route' => route('about')],
        ];
    @endphp
    
    @foreach ($nonacademicClubs as $club)
    <div class="club-card">
        <h1 class="titlenum">0{{ $club['id'] }}</h1>
        <h2 style="color: #333; font-size: 18px; font-weight: 600;">{{ $club['title'] }}</h2>
        <p style="color: black; margin-top: 8px; font-size: 14px;">{{ $club['description'] }}</p>
        <img src="{{ $club['image'] }}" alt="{{ $club['title'] }}" style="margin-top: 16px; width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        <a href="{{ $club['route'] ?? '#' }}" style="margin-top: 16px;">
            <button class="see-more-btn">See More</button>
        </a>
    </div>
    @endforeach
</div>


<h1 style="text-align: center; font-size: 24px; font-weight: bold; margin: 24px 0;"><br>Organizations</h1>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; padding: 0 24px;">
    @php
        $orgzacademicClubs = [
            ['id' => 1, 'title' => 'Computer Society', 'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.', 'image' => asset('storage/images/poster1.jpg'), 'route' => route('about')],
            ['id' => 2, 'title' => 'CulBake Club', 'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.', 'image' => asset('storage/images/poster2.jpg'), 'route' => route('about')],
            ['id' => 3, 'title' => 'Society of Automotive Technology (SATS)', 'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.', 'image' => asset('storage/images/poster3.jpg'), 'route' => route('about')],
            ['id' => 4, 'title' => 'Computer Society', 'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.', 'image' => asset('storage/images/poster1.jpg'), 'route' => route('about')],
            ['id' => 5, 'title' => 'CulBake Club', 'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.', 'image' => asset('storage/images/poster2.jpg'), 'route' => route('about')],
            ['id' => 6, 'title' => 'Society of Automotive Technology (SATS)', 'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.', 'image' => asset('storage/images/poster3.jpg'), 'route' => route('about')],
        ];
    @endphp
    
    @foreach ($orgzacademicClubs as $club)
    <div class="club-card">
        <h1 class="titlenum">0{{ $club['id'] }}</h1>
        <h2 style="color: #333; font-size: 18px; font-weight: 600;">{{ $club['title'] }}</h2>
        <p style="color: black; margin-top: 8px; font-size: 14px;">{{ $club['description'] }}</p>
        <img src="{{ $club['image'] }}" alt="{{ $club['title'] }}" style="margin-top: 16px; width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        <a href="{{ $club['route'] ?? '#' }}" style="margin-top: 16px;">
            <button class="see-more-btn">See More</button>
        </a>
    </div>
    @endforeach
</div>


@endsection
