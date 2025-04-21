<?php
include 'templates/header.php';
include 'templates/navbar.php';
include 'includes/functions.php';
?>

<div class="container mt-5">
    <h1>Event Calendar</h1>
    <div id="calendar"></div>
</div>

<!-- Modal for adding/editing events -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Add/Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <input type="hidden" id="eventId">
                    <div class="form-group">
                        <label for="eventTitle">Event Title</label>
                        <input type="text" class="form-control" id="eventTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="startTime">Start Time</label>
                        <input type="text" class="form-control datetimepicker" id="startTime" required>
                    </div>
                    <div class="form-group">
                        <label for="endTime">End Time</label>
                        <input type="text" class="form-control datetimepicker" id="endTime" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Event</button>
                    <button type="button" class="btn btn-danger" id="deleteEvent">Delete Event</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
