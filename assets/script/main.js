const confirmDelete = (userId) => {
    var result = confirm("Are you sure you want to delete this user?");
    if (result) {
        // If the user confirms, go PHP delete the user
        window.location.href = "../../includes/delete_user.php?id=" + userId;
    }
}