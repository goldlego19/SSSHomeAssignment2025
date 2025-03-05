(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Sidebar Toggler
  $(".sidebar-toggler").click(function () {
    $(".sidebar, .content").toggleClass("open");
    return false;
  });

  const dateInput = document.getElementById("floatingDOB");

  if (dateInput) {
    // Initialize Flatpickr only if the element is found
    const flatpickrInstance = flatpickr(dateInput, {
      dateFormat: "Y-m-d", // Format the date as YYYY-MM-DD
      defaultDate: document.getElementById('floatingDOB').value, // Optional: Set default date to today
    });

    // Date Picker Icon Click Event
    $("#datePickerIcon").click(function () {
      flatpickrInstance.open(); // Open the Flatpickr date picker
    });
  }
})(jQuery);
