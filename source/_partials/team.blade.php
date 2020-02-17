<div class="flex section team">
  <h2>The Team</h2>
  <div class="members">
    @foreach($team as $member)
      <div class="member">
        <div class="img">
          <img src="{{ str_replace("/s1600/", "/s300-c/", $member->image) }}" alt="{{ $member->name }}">
        </div>
        <span>{{ $member->title }}</span>
        <h3>{{ $member->name }}</h3>
      </div>
    @endforeach
  </div>
</div>
