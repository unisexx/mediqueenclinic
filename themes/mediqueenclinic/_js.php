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
					"url": "https://line.me/R/ti/p/%40mediqueen",
					"bgcolor": "#00c300",
					"color": "#ffffff",
					"icon": "<img src='themes/mediqueenclinic/images/widget_icon_line.png' alt=''>",
					"target": "_blank",
					"title": "Add Line"
				},
				{
					"url": "http://m.me/MediqueenClinic",
					"bgcolor": "#2173f3",
					"color": "#ffffff",
					"icon": "<img src='themes/mediqueenclinic/images/icon_messenger.png' alt=''>",
					"target": "_blank",
					"title": "แชทผ่าน Facebook"
				},
				{
					"url": "https://www.instagram.com/mediqueen_clinic/",
					"bgcolor": "#e94c88",
					"color": "#ffffff",
					"icon": "<img src='themes/mediqueenclinic/images/icon-instagram.png' alt=''>",
					"target": "_blank",
					"title": "instagram"
				},
				{
					"url": "tel:+66953626235",
					"bgcolor": "#ec4521",
					"color": "#ffffff",
					"icon": "<img src='themes/mediqueenclinic/images/icon-call.png' alt=''>",
					"target": "_blank",
					"title": "โทร. 095-3626235"
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