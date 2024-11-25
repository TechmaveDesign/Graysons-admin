/* Full Calendar Init */
// Small Calendar
$('input[name="calendar"]').flatpickr({
    singleDatePicker: true,
    showDropdowns: false,
    minYear: 1901,
    "cancelClass": "btn-secondary",
    autoApply: true,
    parentEl: "#inline_calendar",
});

/* Single Date */
$('input[name="single-date-pick"]').flatpickr({
    singleDatePicker: true,
    startDate: moment().startOf('hour'),
    showDropdowns: true,
    minYear: 1901,
    "cancelClass": "btn-secondary",
    locale: {
        format: 'DD-MM-YYYY'
    }
});
$('input[name="calendar"]').trigger("click");

var curYear = moment().format('YYYY'),
    curMonth = moment().format('MM');

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar'),
        calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: curYear + '-' + curMonth + '-07',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            themeSystem: 'bootstrap5',
            height: 'parent',
            droppable: true,
            editable: true,
            events: [
                {
                    backgroundColor: '#FFC400',
                    borderColor: '#FFC400',
                    title: '9:30 AM - 8:00 PM Awwards Conference',
                    start: curYear + '-' + curMonth + '-04',
                    end: curYear + '-' + curMonth + '-06',
                    extendedProps: {
                        picture: 'dist/img/avatar8.jpg',
                        staffName: 'John Doe',
                        locationName: 'Conference Hall',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel',
                         startTime: '9:30 AM',
                         endTime: '8:00 PM'
                    }
                },
                {
                    backgroundColor: '#da82f8',
                    borderColor: '#da82f8',
                    title: 'Visit Property',
                    start: curYear + '-' + curMonth + '-13',
                    end: curYear + '-' + curMonth + '-15',
                    extendedProps: {
                        picture: 'dist/img/avatar5.jpg',
                        staffName: 'Jane Smith',
                        locationName: 'Meeting Room A',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel',
                         startTime: '9:30 AM',
            endTime: '8:00 PM'
                    }
                },
                {
                    backgroundColor: '#da82f8',
                    borderColor: '#da82f8',
                    title: 'Viewing Property',
                    start: curYear + '-' + curMonth + '-19',
                    extendedProps: {
                        picture: 'dist/img/avatar2.jpg',
                        staffName: 'Alice Johnson',
                        locationName: 'Office 204',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel'
                    }
                },
                {
                    backgroundColor: '#298DFF',
                    borderColor: '#298DFF',
                    title: 'Viewing Property Complete',
                    start: curYear + '-' + curMonth + '-11',
                    end: curYear + '-' + curMonth + '-13',
                    extendedProps: {
                        picture: 'dist/img/avatar7.jpg',
                        staffName: 'Bob Brown',
                        locationName: 'Main Hall',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel'
                    }
                },
                {
                    backgroundColor: '#298DFF',
                    borderColor: '#298DFF',
                    title: 'Follow-up call with client',
                    start: curYear + '-' + curMonth + '-7T14:30:00',
                    extendedProps: {
                        picture: 'dist/img/avatar14.jpg',
                        staffName: 'Eve Black',
                        locationName: 'Phone Call',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel'
                    }
                },
                {
                    backgroundColor: '#298DFF',
                    borderColor: '#298DFF',
                    title: 'Floor Clean',
                    start: curYear + '-' + curMonth + '-13',
                    extendedProps: {
                        picture: 'dist/img/avatar6.jpg',
                        staffName: 'Hank Critten',
                        locationName: 'Lobby',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel'
                    }
                },
                {
                    backgroundColor: '#007D88',
                    borderColor: '#007D88',
                    title: 'Ac Sheet',
                    start: curYear + '-' + curMonth + '-29',
                    extendedProps: {
                        picture: 'dist/img/avatar5.jpg',
                        staffName: 'Ivy John',
                        locationName: 'Office 201',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel'
                    }
                },
                {
                    backgroundColor: 'rgb(199, 214, 13)',
                    borderColor: '#007D88',
                    title: 'Ac Sheet',
                    start: curYear + '-' + curMonth + '-12',
                    extendedProps: {
                        picture: 'dist/img/avatar5.jpg',
                        staffName: 'testing',
                        locationName: 'Office 201',
                        locationLink: 'https://www.techmavedesigns.com/Design/graysons-properties-adminpanel'
                    }
                }
            ] ,
            eventContent: function(arg) {
                var customHtml = '<div class="event-container">';
                
                if (arg.event.extendedProps.picture && arg.event.extendedProps.staffName) {
                    customHtml += '<div class="Staffevent_container">';
                    customHtml += '<img src="' + arg.event.extendedProps.picture + '" style="width:20px; height:20px; margin-right:5px;">';
                    customHtml += '<strong>Staff:</strong> ' + arg.event.extendedProps.staffName;
                    customHtml += '</div>';
                }
                
                customHtml += '<div class="event-title">' + arg.event.title + '</div>';
            
                if (arg.event.extendedProps.startTime && arg.event.extendedProps.endTime) {
                    customHtml += '<div><strong>Start Time:</strong> ' + arg.event.extendedProps.startTime + '</br> ' + ' <strong>End Time:</strong> ' + arg.event.extendedProps.endTime + '</div>';
                } else {
                    customHtml += '<div><strong>Time:</strong> Not specified</div>';
                }
                
                if (arg.event.extendedProps.locationLink) {
                    customHtml += '<div class="EventlocationUrl"><iconify-icon icon="hugeicons:location-05"></iconify-icon> ';
                    customHtml += '<a href="' + arg.event.extendedProps.locationLink + '">View Location</a></div>';
                } else {
                    customHtml += '<div><iconify-icon icon="hugeicons:location-05"></iconify-icon> Location details not available</div>';
                }
                
                customHtml += '</div>';
                
                return {
                    html: customHtml
                };
            },
       

            eventClick: function (info) {
                var targetEvent = info.event;
            
                // Populate modal with event data
                $('.event-name').html(targetEvent.title);
                $('.event-date').html(moment(targetEvent.start).format('MMM DD, YYYY'));
            
                // Display start time and end time
                var startTime = targetEvent.extendedProps.startTime ? targetEvent.extendedProps.startTime : moment(targetEvent.start).format('hh:mm A');
                var endTime = targetEvent.extendedProps.endTime ? targetEvent.extendedProps.endTime : moment(targetEvent.end).format('hh:mm A');
                $('.event-time').html('<div class="eventdetal_label">Start Time: <span class="eventdetal_content">' + startTime + '</span></div><div class="eventdetal_label">End Time: <span class="eventdetal_content">' + endTime + '</span></div>');



            
                $('.event-staff').html('<div class="eventdetal_label">Staff:</div> ' + targetEvent.extendedProps.staffName);
                $('.event-location').html('<a href="' + targetEvent.extendedProps.locationLink + '">' + targetEvent.extendedProps.locationLink + '</a>');
            
                // Show modal
                $('.calendar-drawer').removeClass('d-none');
            
                // Store the target event in a data attribute for later use
                $('.calendar-drawer').data('target-event', targetEvent);
            },
            eventDrop: function(info) {
                Swal.fire({
                    html: '<div class="mb-3"><i class="ri-question-line fs-5 text-warning"></i></div><h5 class="text-warning">You Changing the Appointment Date</h5><p>Do you want to change the appointment date?</p>',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Change It',
                    cancelButtonText: 'No, Keep It',
                    customClass: {
                        confirmButton: 'btn btn-outline-secondary  swalcustombutton',
                        cancelButton: 'btn btn-outline-secondary swalcustombutton',
                        container: 'swal2-has-bg',
                        actions: 'w-100'
                    }
                }).then((result) => {
                    if (!result.value) {
                        info.revert();
                    }
                });
            }
            


        });
    calendar.render();

      // Ensure all days are droppable
      calendar.getEventSources().forEach(source => {
        source.getEvents().forEach(event => {
            event.setProp('editable', true);
        });
    });

     // Function to handle search functionality
    function handleSearch() {
        var searchText = searchInput.value.toLowerCase();

        calendar.getEvents().forEach(function(event) {
            var eventTitle = event.title.toLowerCase();
            var staffName = event.extendedProps.staffName ? event.extendedProps.staffName.toLowerCase() : '';

            // Check if the event title or staff name includes the search text
            if (eventTitle.includes(searchText) || staffName.includes(searchText)) {
                event.setProp('display', ''); // Show the event
            } else {
                event.setProp('display', 'none'); // Hide the event
            }
        });
    }

    var searchInput = document.getElementById('search-input');

    // Event listener for input changes in search bar
    searchInput.addEventListener('input', function() {
        handleSearch();
    });
    

    var targetDrawer = '.hk-drawer.calendar-drawer',
        targetEvent;
    $(document).on("click", ".calendarapp-wrap .fc-daygrid-event", function (e) {
        $(targetDrawer).css({
            "border": "none",
            "box-shadow": "0 8px 10px rgba(0, 0, 0, 0.1)"
        }).addClass('drawer-toggle');
        $('.calendar-drawer').find('.event-name').html($(this).find('.fc-event-title').html());
        return false;
    });

    // Event Delete
    $(document).on("click", '#del_event', function (e) {
        $('.calendar-drawer').removeClass('drawer-toggle');
        var targetEvent = $('.calendar-drawer').data('target-event'); // Retrieve target event from data attribute

        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete Appointment ?</h5><p>Deleting an Appointment will permanently remove it from your library.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete Note',
            cancelButtonText: 'No, Keep Note',
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                targetEvent.remove();
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">Appointment has been deleted!</h5></div>',
                    timer: 2000,
                    customClass: {
                        content: 'p-0 text-left',
                        actions: 'w-100 justify-content-start',
                    },
                    showConfirmButton: false,
                    buttonsStyling: false,
                })
            }
        })
        return false;
    });

    /* Event Edit */
    $(document).on("click", '#edit_event,.drawer-edit-close', function (e) {
        $(targetDrawer + '>div').toggleClass('d-none');
        return false;
    });

    /* Event Add */
    $(document).on("click", "#add_event", function (e) {
        setTimeout(function () {
            $('.alert.alert-dismissible .close').addClass('btn-close').removeClass('close');
        }, 100);

        calendar.addEvent({
            backgroundColor: $('.cal-event-color').val(),
            borderColor: $('.cal-event-color').val(),
            title: $('.cal-event-name').val(),
            start: $('.cal-event-date-start').val(),
            end: $('.cal-event-date-end').val()
        });
        $.notify({
            icon: 'ri-checkbox-line mr-5',
            message: "Appointment has been created",
        }, {
            type: "dismissible alert alert-inv alert-inv-primary",
            placement: {
                from: "bottom",
                align: "center"
            },
            animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutUp'
            },
            delay: 1000,
        });
        $('.cal-event-name').val("");
        //return false;
    });

    
});

/* Extra Customization */
setTimeout(function () {
    $('.fc-prev-button,.fc-next-button').addClass('btn-icon btn-flush-dark btn-rounded flush-soft-hover').find('.fa').addClass('icon');
    $('.fc-today-button').removeClass('btn-primary').addClass('btn-outline-light');
}, 120);