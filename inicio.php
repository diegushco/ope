<!--Titulo-->
					<div class="page-header position-relative">
						<h1>
							
						</h1>
					</div><!--/.page-header-->

		<div align="center" class="row-fluid">
			<div class="span12">
					<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Inspecciones, RA y Censos							
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<div class="row-fluid">
								<div class="span9">
									<div class="space"></div>

									<div id="calendar"></div>
								</div>

								<div class="span3">
									<div class="widget-box transparent">
										<div class="widget-header">
											<h4>Draggable events</h4>
										</div>

										<div class="widget-main">
											<div id="external-events">
												<div class="external-event label-grey" data-class="label-grey">
													<i class="icon-move"></i>
													My Event 1
												</div>

												<div class="external-event label-success" data-class="label-success">
													<i class="icon-move"></i>
													My Event 2
												</div>

												<div class="external-event label-important" data-class="label-important">
													<i class="icon-move"></i>
													My Event 3
												</div>

												<div class="external-event label-purple" data-class="label-purple">
													<i class="icon-move"></i>
													My Event 4
												</div>

												<div class="external-event label-yellow" data-class="label-yellow">
													<i class="icon-move"></i>
													My Event 5
												</div>

												<div class="external-event label-pink" data-class="label-pink">
													<i class="icon-move"></i>
													My Event 6
												</div>

												<div class="external-event label-info" data-class="label-info">
													<i class="icon-move"></i>
													My Event 7
												</div>

												<label>
													<input type="checkbox" class="ace-checkbox" id="drop-remove" />
													<span class="lbl"> Remove after drop</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->





					<!--	
					<div id="myslide" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myslide" data-slide-to="1" class="active"></li>
						<li data-target="#myslide" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img width="800" height="600" src="assets/img/coco.jpg" alt="">
							<div class="carousel-caption">
								<h4>esta es una prueba</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, ut, facilis, voluptatem magnam quas saepe suscipit blanditiis aut recusandae impedit ipsam laudantium atque quia accusantium tempore nihil quaerat? Voluptatum, eum.</p>
							</div>
						</div>
						<div class="item">
							<img width="800" height="600" src="assets/img/cielo.jpg" alt="">
							<div class="carousel-caption">
								<h4>esta es una prueba</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolore voluptatum debitis illum aperiam recusandae exercitationem ratione inventore nisi animi. Nam, est aliquid excepturi odio provident quibusdam ducimus cupiditate exercitationem.</p>
							</div>
						</div>
						
					</div>
					<a href="#myslide" data-slide="prev" class="carousel-control left">&lsaquo;</a>
					<a href="#myslide" data-slide="next" class="carousel-control right">&rsaquo;</a>
				</div>
				-->


			</div><!--/.span-->
		</div><!--/.row-fluid-->
<script>
/*	$("#myslide").carousel({
			interval: 3000,
			pause: "hover",
		});*/
</script>
<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		

		<!--page specific plugin scripts-->
		<script src="assets/js/fullcalendar.min.js"></script>
		

		<script type="text/javascript">
			$(function() {

/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events div.external-event').each(function() {

		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});




	/* initialize the calendar
	-----------------------------------------------------------------*/

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	
	var calendar = $('#calendar').fullCalendar({
		 buttonText: {
			prev: '<i class="icon-chevron-left"></i>',
			next: '<i class="icon-chevron-right"></i>'
		},
	
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: [
		{
			title: 'All Day Event',
			start: new Date(y, m, 1),
			className: 'label-important'
		},
		{
			title: 'Long Event',
			start: new Date(y, m, d-5),
			end: new Date(y, m, d-2),
			className: 'label-success'
		},
		{
			title: 'Diego wiii :D',
			start: new Date(y, m, d+5),
			end: new Date(y, m, d+7),
			className: 'label-success'
		},
		{
			title: 'Diego 2 :D',
			start: new Date(y, m, d+7),
			end: new Date(y, m, d+7),
			className: 'label-important'
		},
		{
			title: 'Some Event',
			start: new Date(y, m, d-3, 16, 0),
			allDay: false
		}]
		,
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date, allDay) { // this function is called when something is dropped
		
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			var $extraEventClass = $(this).attr('data-class');
			
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			copiedEventObject.allDay = allDay;
			if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
			
		}
		,
		selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {
			
			bootbox.prompt("New Event Title:", function(title) {
				if (title !== null) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
			});
			

			calendar.fullCalendar('unselect');
			
		}
		,
		eventClick: function(calEvent, jsEvent, view) {

			var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
			form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
			form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");
			
			var div = bootbox.dialog(form,
				[
				{
					"label" : "<i class='icon-trash'></i> Delete Event",
					"class" : "btn-small btn-danger",
					"callback": function() {
						calendar.fullCalendar('removeEvents' , function(ev){
							return (ev._id == calEvent._id);
						})
					}
				}
				,
				{
					"label" : "<i class='icon-remove'></i> Close",
					"class" : "btn-small"
				}
				]
				,
				{
					// prompts need a few extra options
					"onEscape": function(){div.modal("hide");}
				}
			);
			
			form.on('submit', function(){
				calEvent.title = form.find("input[type=text]").val();
				calendar.fullCalendar('updateEvent', calEvent);
				div.modal("hide");
				return false;
			});
			
		
			//console.log(calEvent.id);
			//console.log(jsEvent);
			//console.log(view);

			// change the border color just for fun
			//$(this).css('border-color', 'red');

		}
		
	});


})
		</script>




