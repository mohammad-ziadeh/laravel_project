function openModal(tripId) {
       
    document.getElementById('trip_id').value = tripId;
    document.getElementById('bookingModal').style.display = "block";
}

function closeModal() {
    document.getElementById('bookingModal').style.display = "none";
}


window.onclick = function(event) {
    if (event.target == document.getElementById('bookingModal')) {
        closeModal();
    }
}
function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to undo this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
           
            document.getElementById('delete-form-' + id).submit();
        }
    });
}