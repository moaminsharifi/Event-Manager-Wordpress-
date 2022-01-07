// grab everything we need
const body = document.querySelector('body');
const searchBtn = document.querySelector("#search-btn");
const searchBar = document.querySelector("#search-bar");
const hamburgerButton = document.querySelector("#hamburger-btn");
const hamburgerMenu = document.querySelector("#hamburger-menu");
const hamburgerCloseButton = document.querySelector("#hamburger-close-btn");
const filterEventForm = document.querySelector("#filter-event-form");
const filterEventFormTheme = document.querySelector("#filter-event-theme");
const filterEventFormTargetGroup = document.querySelector("#filter-event-target-group");
const filterEventFormExecution = document.querySelector("#filter-event-execution");
const filterEventFormInput = document.querySelector("#filter-event-keyword");


// add event listeners
hamburgerButton.addEventListener("click", () => {

  hamburgerMenu.classList.toggle("-translate-x-full");
  body.classList.add("js-mobile-menu-open");

});
hamburgerCloseButton.addEventListener("click", () => {
  hamburgerMenu.classList.toggle("-translate-x-full");
  body.classList.remove("js-mobile-menu-open");

});
searchBtn.addEventListener("click", () => {
  searchBar.classList.toggle("hidden");
});


function filterEventFormWithAjax() {
  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'filter_events',
      theme: filterEventFormTheme.value,
      targetGroup: filterEventFormTargetGroup.value,
      execution: filterEventFormExecution.value,
      keyword: filterEventFormInput.value,

    },
    success: function (res) {
      $(".content").empty();

      $('.content').html(res);
    },
    fail: function (res) {
      console.log("error");
      console.log(res);
    }
  })

}
filterEventForm.addEventListener('change', function () {
  filterEventFormWithAjax()
});
filterEventFormInput.addEventListener('change', (event) => {
  filterEventFormWithAjax()
});
