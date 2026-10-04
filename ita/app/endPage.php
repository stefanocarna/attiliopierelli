<!-- Bootstrap 4 -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->

<!-- slick-carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!-- PhotoSwipe -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.min.js
"></script> 

<!-- Lozad - lazy loading library -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

<script type="text/javascript">
	// Asynchronous loading script init 
	const observer = lozad('.lozad', {
		loaded: function(el) {
			if (this.callbackLoaded) this.callbackLoaded()

			el.parentNode.classList.remove('loading');
			el.parentNode.classList.add('loaded');
		}
	});
	observer.observe();

	// Bootstrap tooltip init
	$('[data-toggle="tooltip"]').tooltip();
</script>

<!-- Init PhotoSwipe -->
<script type="text/javascript">

	// TODO Must be optimized!

	// gallery element
	var pswpElement = document.querySelectorAll('.pswp')[0];

	// all images
	let images = $('.thumb-image');

	// pseudo-array
	let items = [];
	let id = 0;

	// Build pseudo-array
	for (let e of images) {
		let obj = $(e);

		obj.data('id', id++);

		items.push({
			src: obj.data('ssrc'),
			msrc: obj.data('msrc'),
			w: obj.data('w'),
			h: obj.data('h'),
			title: obj.next().html(),
			id: id,
		});

	}

	var assignClick = function () {
		// remove listners
		images.unbind('click tap')

		// assign listener
		images.on('click tap', function () {

			var id = $(this).data('id')

			if (!id) {
				for (let i = 0; i < images.length; ++i) {
					if (images[i].src == this.src) {
						id = i
						break
					}
				}
			}

			if (!id) id = 0

			gallery = new PhotoSwipe(
				pswpElement, 
				PhotoSwipeUI_Default, 
				items, 
				{index: id}
			).init();
		});
	}

	assignClick()

</script>

<!-- Init slide-carousel -->
<script type="text/javascript">
  $(document).ready(function(){

  	let s2 = $('.slider2')
  	let s3 = $('.slider')
  	let s4 = $('.slider4')

  	s2.on('init', function(event, slick, direction){
  		assignClick()
		});
  	s3.on('init', function(event, slick, direction){
  		assignClick()
		});
  	s4.on('init', function(event, slick, direction){
  		assignClick()
		});

	  s2.on('breakpoint', function(event, slick, direction){
		  assignClick()
		});
		s3.on('breakpoint', function(event, slick, direction){
		  assignClick()
		});
		s4.on('breakpoint', function(event, slick, direction){
		  assignClick()
		});

  	if (s2.length > 0) {
  		s2.slick({
			  dots: true,
			  infinite: true,
			  centerMode: true,
			  speed: 300,
			  slidesToShow: 2,
			  slidesToScroll: 1,
			  lazyLoad: 'progressive',
			  responsive: [
			    // {
			    //   breakpoint: 1024,
			    //   settings: {
			    //     slidesToShow: 2,
			    //     slidesToScroll: 1,
			    //   }
			    // },
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		    ]
			});
  	}

  	if (s4.length > 0) {
			s4.slick({
			  dots: true,
			  infinite: true,
			  centerMode: true,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  lazyLoad: 'progressive',
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		    ]
			});
		}
  	
		if (s3.length > 0) {
    	s3.slick({
			  dots: true,
			  infinite: true,
			  centerMode: true,
			  speed: 300,
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  lazyLoad: 'progressive',
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		    ]
			});
		}
	});
</script>