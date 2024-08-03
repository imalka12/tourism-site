<script defer src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script defer src="{{asset('assets/js/jquery.min.js')}}"></script>
<script defer src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script defer src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav@1.4.0/dist/bootstrap-better-nav.min.js"></script>
<script defer src="{{asset('assets/js/ttll.js')}}"></script>
@stack('custom-js')
@include('layouts.partials.analytics')
<!-- <script> window._peq = window._peq || []; window._peq.push(["init"]); </script> -->
<!-- <script defer src="https://clientcdn.pushengage.com/core/1349b80f-c5fa-4c92-b9b3-a50a5090.js" async></script> -->

<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
	var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
	(function () {
		var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
		s1.async = true;
		s1.src = 'https://embed.tawk.to/58cf8bba70cdfb0937070c49/default';
		s1.charset = 'UTF-8';
		s1.setAttribute('crossorigin', '*');
		s0.parentNode.insertBefore(s1, s0);
	})();
</script> -->
<!--End of Tawk.to Script-->
