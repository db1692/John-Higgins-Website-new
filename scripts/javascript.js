function myFunction() {
    var dots = document.querySelector(".dots");
    var moreText = document.querySelector(".more");
    var btnText = document.querySelector(".myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction2() {
    var dots = document.querySelector(".dots2");
    var moreText = document.querySelector(".more2");
    var btnText = document.querySelector(".myBtn2");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

$(".navbar-toggler-icon").click(function () {
    console.log("clicked");
    if ($(".navbar").hasClass("dropped")) {
        $(".navbar").removeClass("dropped");
    } else {
        $(".navbar").addClass("dropped");
    }
});

$("#contact-form").submit(function (event) {
    event.preventDefault();

    const middleDiv = document.getElementById("middleName").value;
    if (middleDiv !== "") {
        console.log("Honeypot triggered, form submission blocked.");
        return false;
    }

    var formData = $(this).serialize();

    $.ajax({
        url: "https://formspree.io/f/manwgwga",
        method: "POST",
        data: formData,
        dataType: "json",
        success: function (response) {
            window.location.href = "thank-you.html";
        },
        error: function (error) {
            alert("There was an error sending your message. Please try again.");
        }
    });
});
