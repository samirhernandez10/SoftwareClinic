$(document).ready(function() {
    $(".dropdown").click(function(e) {
      e.stopPropagation();
      var dropdownContent = $(this).children(".dropdown-content");
      dropdownContent.slideToggle();
      $(this).siblings().find(".dropdown-content").slideUp();
    });

    $(document).click(function() {
      $(".dropdown-content").slideUp();
    });
  });