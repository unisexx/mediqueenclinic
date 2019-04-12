<script src="http://code.jquery.com/jquery.js"></script>
<script src="themes/mediqueenclinic/js/bootstrap.js"></script>
<script src="themes/mediqueenclinic/js/reviewslide.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script js>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({ alwaysShowClose: true });
    });
</script>
<!--JavaScript Floating Action Button Contact -->
<script src="themes/mediqueenclinic/js/kc.fab.min.js"></script>
	<script>
		$(document).ready(function () {
			var links = [
				{
					"bgcolor": "#85cf2f",
					"icon": " <img src='themes/mediqueenclinic/images/icon_word-balloon-speak2.png' alt=''>",
				},
				{
					"url": "#",
					"bgcolor": "#00c300",
					"color": "#ffffff",
					"icon": "<img src='themes/mediqueenclinic/images/widget_icon_line.png' alt=''>",
					"target": "_blank",
					"title": "Add Line"
				},
				{
					"url": "#",
					"bgcolor": "#2173f3",
					"color": "#ffffff",
					"icon": "<img src='themes/mediqueenclinic/images/icon_messenger.png' alt=''>",
					"target": "_blank",
					"title": "แชทผ่าน Facebook"
				},
			]
			$('.kc_fab_wrapper').kc_fab(links);
		})
    </script>

<link href="media/js/lightbox2/src/css/lightbox.css" rel="stylesheet">
<script src="media/js/lightbox2/src/js/lightbox.js"></script>

<!-- article -->
<script>
$(document).ready(function(){
	$('.leftmenu-article li').click(function(){
		// alert('click');
		$(this).siblings().find('a').removeClass('active');
	});
});
</script>