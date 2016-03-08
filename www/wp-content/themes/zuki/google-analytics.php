<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74485035-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
/**
* Funktion, mit der in Google Analytics Klicks auf externe Links erfasst werden
* Bei dieser Funktion wird ein gültiger URL-String als Argument genommen und
* als Ereignis-Label verwendet. Bei der Transportmethode "beacon" kann der Treffer
* mit "navigator.sendBeacon" gesendet werden, sofern der Browser dies unterstützt.
*/
var trackOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>