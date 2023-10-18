@if($show_stay_connected)
  <x-stay-connected />
@endif
<footer class="content-info">
  <div class="waveWrapper waveAnimation">
  <div class="wave"></div>
  </div>
    <div class="container">
        <div class="footer-header">
            <div class="footer-logo">
                @if(isset($logo) && isset($logo['url']))
                    <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" loading="lazy">
                @endif
            </div>
            <div class="tagline">
                {!! $tagline !!}
            </div>
        </div>
        <div class="footer-content">
            <div class="footer-left footer-column navbar">
              @if (has_nav_menu('footer_navigation'))
                {!! wp_nav_menu($footerNavigation) !!}
              @endif
            </div>
            <div class="footer-right footer-column">
                <label>{{ $subscribe_label?: 'Subscribe for updates' }}</label>
                <div class="subscribe-conatiner">
                  @if ($subscribe_form_shortcode)
                  @php echo do_shortcode($subscribe_form_shortcode) @endphp
                  @endif
                </div>
                <label>{{ $follow_us_label?: 'Follow Us' }}</label>
                @if ($social_links)
									<x-social-links :data="$social_links" />
								@endif
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copy-right-text wysiwyg-content">
              <p class="copy-r sm">&copy; {{ $copyright_text }}</p>
            </div>
            <div class="footer-page-links">
              @forelse($page_links as $pageId)
                <a class="sm" href="{{ get_the_permalink($pageId) }}" alt="Page link">{{ get_the_title($pageId) }}</a>
              @empty
              @endforelse
            </div>
        </div>
    </div>
</footer>
<div id="app-sizer"></div>