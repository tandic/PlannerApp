
document.getElementById("sidebar-wrapper");
// Get the container element
  var btnContainer = document.getElementById("sidebar-wrapper");

  // Get all buttons with class="btn" inside the container
  var btns = btnContainer.getElementsByClassName("btn");

  // Loop through the buttons and add the active class to the current/clicked button
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  } 


$(svgLoad);
function svgLoad(){
const meters = document.querySelectorAll('svg[data-value] .meter');

meters.forEach( (path) => {
  // Get the length of the path
  let length = path.getTotalLength();

  // console.log(length) and hardcode the value for both stroke-dasharray & stroke-dashoffest styles
  // If unable to hardcode, set dynamically...
  // path.style.strokeDashoffset = length;
  // path.style.strokeDasharray = length;

  // Get the value of the meter
  let value = parseInt(path.parentNode.getAttribute('data-value'));
  // Calculate the percentage of the total length
  let to = length * ((100 - value) / 100);

  // Trigger Layout in Safari hack https://jakearchibald.com/2013/animated-line-drawing-svg/
  path.getBoundingClientRect();
  // Set the Offset
  path.style.strokeDashoffset = Math.max(0, to);  
});
}

$(function () {
  "use strict";
  
  var resizeTracker;

  // Counteracts all transforms applied above an element.
  // Apply a translation to the element to have it remain at a local position
  var unscale = function (el) {
    var svg = el.ownerSVGElement.ownerSVGElement;
    var xf = el.scaleIndependentXForm;
    if (!xf) {
      // Keep a single transform matrix in the stack for fighting transformations
      xf = el.scaleIndependentXForm = svg.createSVGTransform();
      // Be sure to apply this transform after existing transforms (translate)
      el.transform.baseVal.appendItem(xf);
    }
    var m = svg.getTransformToElement(el.parentNode);
    m.e = m.f = 0; // Ignore (preserve) any translations done up to this point
    xf.setMatrix(m);
  };

  [].forEach.call($("text, .tick"), unscale);

  $(window).resize(function () {
    if (resizeTracker) clearTimeout(resizeTracker);
    resizeTracker = setTimeout(function () { [].forEach.call($("text, .tick"), unscale); }, 100);
  });
});


//ažuriranje stanja u bazi bez page reloada
$('.content-m .card-body a').on('click', function(e){
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
    e.preventDefault();
    var $size = parseFloat($('#gvs').attr("data-value"));
    $('#gvs').attr("data-value", $size+33.3);
    $('.svg-wrapper p').text(Math.round($size+33.3) + "%");
    $('#prog').removeClass('d-none');
    svgLoad();
    $(this).toggleClass('btn-default btn-disabled');
    $(this).parent().parent().toggleClass('border-light border-success');
    var id = $(this).attr('href');
    

    $.ajax({
      type:"POST",
      url:'menu/submit',
      dataType : 'json',
      data:{id: id},
       success: function(data) {
                    console.log('SUCCESS: ', data);
                },
                error: function(data) {
                    console.log('ERROR: ', data);
                },
    });
});


$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});


