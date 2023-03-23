{{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/proper-min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/waypoint.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script> --}}

<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/proper-min.js') }}"></script>
<script src="asset('front/js/bootstrap.min.js')"></script>
<!-- === All Plugin === -->
<script src="{{ asset('front/js/plugin/waypoint.min.js') }}"></script>
<script src="{{ asset('front/js/plugin/owl.carousel.min.js') }}"></script>
<script src="asset('front/js/plugin/jquery.nice-select.min.js')"></script>
<script src="asset('front/js/plugin/wow.min.js')"></script>
<!--=== All Active ===-->
<script src="asset('front/js/main.js')"></script>

<script>
    (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
</script>