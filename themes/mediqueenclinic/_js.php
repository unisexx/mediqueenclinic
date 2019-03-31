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
                "icon": "+"
            },
            {
                "url": "#",
                "bgcolor": "#00c300",
                "color": "#fffff",
                "icon": "<img src='themes/mediqueenclinic/images/widget_icon_line.png' alt=''>",
                "target": "_blank",
                "title": "Add Line"
            },
        ]
        $('.kc_fab_wrapper').kc_fab(links);
    })
</script>

<link href="media/js/lightbox2/src/css/lightbox.css" rel="stylesheet">
<script src="media/js/lightbox2/src/js/lightbox.js"></script>