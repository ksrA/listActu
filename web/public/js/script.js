function myFunction() {
    var commentSection = document.getElementById("comment-section");
    if (commentSection.style.display === "block") {
        commentSection.style.display = "none";
    } else {
        commentSection.style.display = "block";
    }
}
