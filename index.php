<?php
//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Dashboard";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
include("inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">
		<section id="widget-grid" class="">
			
			<?php
				$ui = new SmartUI;
				$ui->start_track();
				
				$carousel1 = $ui->create_carousel(array(
					'item1' => ASSETS_URL."/img/demo/m1.jpg",
					'item2' => array(
						'img' => ASSETS_URL."/img/demo/m2.jpg",
						'caption' => 
							'<h4>S2 Background Image</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<br>
							<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a>'
					),
					'item3' => array(
						'img' => array(
							'src' => ASSETS_URL."/img/demo/m3.jpg",
							'alt' => 'This is s3 image'
						)
					)
				), 'fade');

				$carousel1->caption('item3', '<h4>S3 Background Image</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<br>
							<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a>');

				$carousel2 = $ui->create_carousel(array(
					'item1' => ASSETS_URL."/img/demo/m1.jpg",
					'item2' => array(
						'img' => ASSETS_URL."/img/demo/m2.jpg",
						'caption' => 
							'<h4>S2 Background Image</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<br>
							<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a>'
					),
					'item3' => array(
						'img' => array(
							'src' => ASSETS_URL."/img/demo/m3.jpg",
							'alt' => 'This is s3 image'
						)
					)
				), 'fade');

				$carousel2->caption('item3', '<h4>S3 Background Image</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<br>
							<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a>');

				$body = '<div class="row">';
				$body .='	<div class="col-sm-12 col-md-12 col-lg-6">';
				$body .=		$carousel1->print_html(true);
				$body .= '	</div>';
				$body .= '	<div class="col-sm-12 col-md-12 col-lg-6">';
				$body .= 		$carousel2->print_html(true);
				$body .= '	</div>';
				$body .= '</div>';

				$ui->create_widget()->body('content', $body)
					->options('editbutton', false)
					->options('fullscreenbutton', false)
					->options('deletebutton', false)
					->options('togglebutton', false)
					->options('colorbutton', false)
					->options('editbutton', false)
					->options('editbutton', false)
				    ->header('title', '<h2>Galeria de Productos</h2>')->print_html();

			?>
			
		</section>
		<div class="row">

			<!-- SuperBox -->
			<div class="superbox col-sm-12">
				<div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-1.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-1.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Miller Cine" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-2.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-2.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Bridge of Edgen" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-3.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-3.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Lines of Friendship" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-4.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-4.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="My new car!" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-5.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-5.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Study Time" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-6.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-6.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="San Francisco Bridge"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-7.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-7.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="New Styla"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-8.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-8.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Cristpta"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-9.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-9.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Cristine Dine"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-10.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-10.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Mosaic Clock"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-11.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-11.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Elegance"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-12.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-12.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="China Town"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-13.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-13.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Sky Diving"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-14.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-14.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Country Music"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-15.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-15.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="You are late!" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-16.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-16.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Royal Bengle Tiger" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-17.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-17.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Snowpine" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-18.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-18.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Hop Jop Mop" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-19.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-19.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Party Girls" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-20.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-20.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Dragon Fly" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-21.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-21.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Kinds Road" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-22.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-22.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Tokyo" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-23.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-23.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Rome" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-24.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-24.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Traning" class="superbox-img">
				</div>
				<div class="superbox-float"></div>
			</div>
			<!-- /SuperBox -->
			
			<div class="superbox-show" style="height:300px; display: none"></div>

		</div>
	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->
<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.tooltip.min.js"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Full Calendar -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/moment/moment.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/superbox/superbox.min.js"></script>


<script type="text/javascript">

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
		$('.superbox').SuperBox();

	})

</script>

<script>
	$(document).ready(function() {

		/*
		 * PAGE RELATED SCRIPTS
		 */

		$(".js-status-update a").click(function() {
			var selText = $(this).text();
			var $this = $(this);
			$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
			$this.parents('.dropdown-menu').find('li').removeClass('active');
			$this.parent().addClass('active');
		});

		/*
		* TODO: add a way to add more todo's to list
		*/

		// initialize sortable
		$(function() {
			$("#sortable1, #sortable2").sortable({
				handle : '.handle',
				connectWith : ".todo",
				update : countTasks
			}).disableSelection();
		});

		// check and uncheck
		$('.todo .checkbox > input[type="checkbox"]').click(function() {
			var $this = $(this).parent().parent().parent();

			if ($(this).prop('checked')) {
				$this.addClass("complete");

				// remove this if you want to undo a check list once checked
				//$(this).attr("disabled", true);
				$(this).parent().hide();

				// once clicked - add class, copy to memory then remove and add to sortable3
				$this.slideUp(500, function() {
					$this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
					$this.remove();
					countTasks();
				});
			} else {
				// insert undo code here...
			}

		})
		// count tasks
		function countTasks() {

			$('.todo-group-title').each(function() {
				var $this = $(this);
				$this.find(".num-of-tasks").text($this.next().find("li").size());
			});

		}

		/*
		* RUN PAGE GRAPHS
		*/

		/* TAB 1: UPDATING CHART */
		// For the demo we use generated data, but normally it would be coming from the server

		var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');

		function getRandomData() {
			if (data.length > 0)
				data = data.slice(1);

			// do a random walk
			while (data.length < totalPoints) {
				var prev = data.length > 0 ? data[data.length - 1] : 50;
				var y = prev + Math.random() * 10 - 5;
				if (y < 0)
					y = 0;
				if (y > 100)
					y = 100;
				data.push(y);
			}

			// zip the generated y values with the x values
			var res = [];
			for (var i = 0; i < data.length; ++i)
				res.push([i, data[i]])
			return res;
		}

		// setup control widget
		var updateInterval = 1500;
		$("#updating-chart").val(updateInterval).change(function() {

			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				$(this).val("" + updateInterval);
			}

		});

		// setup plot
		var options = {
			yaxis : {
				min : 0,
				max : 100
			},
			xaxis : {
				min : 0,
				max : 100
			},
			colors : [$UpdatingChartColors],
			series : {
				lines : {
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.4
						}, {
							opacity : 0
						}]
					},
					steps : false

				}
			}
		};

		var plot = $.plot($("#updating-chart"), [getRandomData()], options);

		/* live switch */
		$('input[type="checkbox"]#start_interval').click(function() {
			if ($(this).prop('checked')) {
				$on = true;
				updateInterval = 1500;
				update();
			} else {
				clearInterval(updateInterval);
				$on = false;
			}
		});

		function update() {
			if ($on == true) {
				plot.setData([getRandomData()]);
				plot.draw();
				setTimeout(update, updateInterval);

			} else {
				clearInterval(updateInterval)
			}

		}

		var $on = false;

		/*end updating chart*/

		/* TAB 2: Social Network  */

		$(function() {
			// jQuery Flot Chart
			var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
				label : "Twitter",
				data : twitter,
				lines : {
					show : true,
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.1
						}, {
							opacity : 0.13
						}]
					}
				},
				points : {
					show : true
				}
			}, {
				label : "Facebook",
				data : facebook,
				lines : {
					show : true,
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.1
						}, {
							opacity : 0.13
						}]
					}
				},
				points : {
					show : true
				}
			}];

			var options = {
				grid : {
					hoverable : true
				},
				colors : ["#568A89", "#3276B1"],
				tooltip : true,
				tooltipOpts : {
					//content : "Value <b>$x</b> Value <span>$y</span>",
					defaultTheme : false
				},
				xaxis : {
					ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
				},
				yaxes : {

				}
			};

			var plot3 = $.plot($("#statsChart"), data, options);
		});

		// END TAB 2

		// TAB THREE GRAPH //
		/* TAB 3: Revenew  */

		$(function() {

			var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");

			var data = [{
				label : "Target Profit",
				data : trgt,
				bars : {
					show : true,
					align : "center",
					barWidth : 30 * 30 * 60 * 1000 * 80
				}
			}, {
				label : "Actual Profit",
				data : prft,
				color : '#3276B1',
				lines : {
					show : true,
					lineWidth : 3
				},
				points : {
					show : true
				}
			}, {
				label : "Actual Signups",
				data : sgnups,
				color : '#71843F',
				lines : {
					show : true,
					lineWidth : 1
				},
				points : {
					show : true
				}
			}]

			var options = {
				grid : {
					hoverable : true
				},
				tooltip : true,
				tooltipOpts : {
					//content: '%x - %y',
					//dateFormat: '%b %y',
					defaultTheme : false
				},
				xaxis : {
					mode : "time"
				},
				yaxes : {
					tickFormatter : function(val, axis) {
						return "$" + val;
					},
					max : 1200
				}

			};

			plot2 = null;

			function plotNow() {
				var d = [];
				toggles.find(':checkbox').each(function() {
					if ($(this).is(':checked')) {
						d.push(data[$(this).attr("name").substr(4, 1)]);
					}
				});
				if (d.length > 0) {
					if (plot2) {
						plot2.setData(d);
						plot2.draw();
					} else {
						plot2 = $.plot(target, d, options);
					}
				}

			};

			toggles.find(':checkbox').on('change', function() {
				plotNow();
			});
			plotNow()

		});

		/*
		 * VECTOR MAP
		 */

		data_array = {
			"US" : 4977,
			"AU" : 4873,
			"IN" : 3671,
			"BR" : 2476,
			"TR" : 1476,
			"CN" : 146,
			"CA" : 134,
			"BD" : 100
		};

		$('#vector-map').vectorMap({
			map : 'world_mill_en',
			backgroundColor : '#fff',
			regionStyle : {
				initial : {
					fill : '#c4c4c4'
				},
				hover : {
					"fill-opacity" : 1
				}
			},
			series : {
				regions : [{
					values : data_array,
					scale : ['#85a8b6', '#4d7686'],
					normalizeFunction : 'polynomial'
				}]
			},
			onRegionLabelShow : function(e, el, code) {
				if ( typeof data_array[code] == 'undefined') {
					e.preventDefault();
				} else {
					var countrylbl = data_array[code];
					el.html(el.html() + ': ' + countrylbl + ' visits');
				}
			}
		});

		/*
		 * FULL CALENDAR JS
		 */

		if ($("#calendar").length) {
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();

			var calendar = $('#calendar').fullCalendar({

				editable : true,
				draggable : true,
				selectable : false,
				selectHelper : true,
				unselectAuto : false,
				disableResizing : false,
				height: "auto",

				header : {
					left : 'title', //,today
					center : 'prev, next, today',
					right : 'month, agendaWeek, agenDay' //month, agendaDay,
				},

				select : function(start, end, allDay) {
					var title = prompt('Event Title:');
					if (title) {
						calendar.fullCalendar('renderEvent', {
							title : title,
							start : start,
							end : end,
							allDay : allDay
						}, true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},

				events : [{
					title : 'All Day Event',
					start : new Date(y, m, 1),
					description : 'long description',
					className : ["event", "bg-color-greenLight"],
					icon : 'fa-check'
				}, {
					title : 'Long Event',
					start : new Date(y, m, d - 5),
					end : new Date(y, m, d - 2),
					className : ["event", "bg-color-red"],
					icon : 'fa-lock'
				}, {
					id : 999,
					title : 'Repeating Event',
					start : new Date(y, m, d - 3, 16, 0),
					allDay : false,
					className : ["event", "bg-color-blue"],
					icon : 'fa-clock-o'
				}, {
					id : 999,
					title : 'Repeating Event',
					start : new Date(y, m, d + 4, 16, 0),
					allDay : false,
					className : ["event", "bg-color-blue"],
					icon : 'fa-clock-o'
				}, {
					title : 'Meeting',
					start : new Date(y, m, d, 10, 30),
					allDay : false,
					className : ["event", "bg-color-darken"]
				}, {
					title : 'Lunch',
					start : new Date(y, m, d, 12, 0),
					end : new Date(y, m, d, 14, 0),
					allDay : false,
					className : ["event", "bg-color-darken"]
				}, {
					title : 'Birthday Party',
					start : new Date(y, m, d + 1, 19, 0),
					end : new Date(y, m, d + 1, 22, 30),
					allDay : false,
					className : ["event", "bg-color-darken"]
				}, {
					title : 'Smartadmin Open Day',
					start : new Date(y, m, 28),
					end : new Date(y, m, 29),
					className : ["event", "bg-color-darken"]
				}],


				eventRender : function(event, element, icon) {
					if (!event.description == "") {
						element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
					}
					if (!event.icon == "") {
						element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
					}
				}
			});

		};

		/* hide default buttons */
		$('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();

		// calendar prev
		$('#calendar-buttons #btn-prev').click(function() {
			$('.fc-prev-button').click();
			return false;
		});

		// calendar next
		$('#calendar-buttons #btn-next').click(function() {
			$('.fc-next-button').click();
			return false;
		});

		// calendar today
		$('#calendar-buttons #btn-today').click(function() {
			$('.fc-button-today').click();
			return false;
		});

		// calendar month
		$('#mt').click(function() {
			$('#calendar').fullCalendar('changeView', 'month');
		});

		// calendar agenda week
		$('#ag').click(function() {
			$('#calendar').fullCalendar('changeView', 'agendaWeek');
		});

		// calendar agenda day
		$('#td').click(function() {
			$('#calendar').fullCalendar('changeView', 'agendaDay');
		});

		/*
		 * CHAT
		 */

		$.filter_input = $('#filter-chat-list');
		$.chat_users_container = $('#chat-container > .chat-list-body')
		$.chat_users = $('#chat-users')
		$.chat_list_btn = $('#chat-container > .chat-list-open-close');
		$.chat_body = $('#chat-body');

		/*
		* LIST FILTER (CHAT)
		*/

		// custom css expression for a case-insensitive contains()
		jQuery.expr[':'].Contains = function(a, i, m) {
			return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
		};

		function listFilter(list) {// header is any element, list is an unordered list
			// create and add the filter form to the header

			$.filter_input.change(function() {
				var filter = $(this).val();
				if (filter) {
					// this finds all links in a list that contain the input,
					// and hide the ones not containing the input while showing the ones that do
					$.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
					$.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
				} else {
					$.chat_users.find("li").slideDown();
				}
				return false;
			}).keyup(function() {
				// fire the above change event after every letter
				$(this).change();

			});

		}

		// on dom ready
		listFilter($.chat_users);

		// open chat list
		$.chat_list_btn.click(function() {
			$(this).parent('#chat-container').toggleClass('open');
		})

		$.chat_body.animate({
			scrollTop : $.chat_body[0].scrollHeight
		}, 500);

	});

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>