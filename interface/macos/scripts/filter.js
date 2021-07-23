/******************* Functions **************************/
// function tags_filter(tag_object){
//   var tag_name=$(tag_object).attr("data-tag-name")
//   if ($(tag_object).is(":checked"))
//   {
//     $('tr.row-content').not('[data-tags*='+tag_name+']').css("display","none").attr({'active-filter-checkbox-tags':'true'})
//
//   }else {
//     $("tr.row-content").not('[data-tags*='+tag_name+']').css("display","contents").attr({'active-filter-checkbox-tags':'false'})
//   }
// }


function mode_filter(){
  var mode = $( "#selected-mode option:selected" ).text();
  //$(".uix_impact").parent("[active-filter-uix='true']").css("display","contents").attr('active-filter-uix','false')
  switch (mode) {
    case "Basic":
      $( "td.mode:not(:contains('Basic'))" ).parent().css("display","none").attr({'active-filter-mode':'true'})
      break;
    case "Enterprise":
      $( "td.mode:not(:contains('Enterprise'))" ).parent().css("display","none").attr({'active-filter-mode':'true'})
      break;
    case "StrongBox":
      $( "td.mode:not(:contains('StrongBox'))" ).parent().css("display","none").attr({'active-filter-mode':'true'})
      break;
    default:
      $( "td.mode" ).parent("[active-filter-mode='true']").css("display","contains").attr({'active-filter-mode':'false'})
  }
}


function severity_filter(){
  var severity = $( "#selected-severity option:selected" ).text();
  var uix = $( "#selected-uix option:selected" ).text();
  //$(".severity").parent("[active-filter-severity='true']").css("display","contents").attr('active-filter-severity','false')
  //$(".severity").parent().next().next().css("display","none")
  //$( "td.severity" ).parent("[active-filter-severity='true']").css("display","contents").attr({'active-filter-severity':'false'})
  switch (severity) {
    case "High":
      $( "td.severity:not(:contains('High'))" ).parent().css("display","none").attr('active-filter-severity','true')
      break;
    case "Medium":
      $( "td.severity:not(:contains('Medium'))" ).parent().css("display","none").attr('active-filter-severity','true')
      break;
    case "Low":
      $( "td.severity:not(:contains('Low'))" ).parent().css("display","none").attr('active-filter-severity','true')
      break;
    default:
      $("td.severity").parent("[active-filter-severity='true']").css("display","contents").attr('active-filter-severity','false')
  }
}

function uix_filter(){
  var uix = $( "#selected-uix option:selected" ).text();
  //$(".uix_impact").parent("[active-filter-uix='true']").css("display","contents").attr('active-filter-uix','false')
  switch (uix) {
    case "Impact":
      $( "td.uix_impact:not(:contains('Impact'))" ).parent().css("display","none").attr({'active-filter-uix':'true'})
      break;
    case "Potentially":
      $( "td.uix_impact:not(:contains('Potentially'))" ).parent().css("display","none").attr({'active-filter-uix':'true'})
      break;
    case "No impact":
      $( "td.uix_impact:not(:contains('No impact'))" ).parent().css("display","none").attr({'active-filter-uix':'true'})
      break;
    default:
      $( "td.uix_impact" ).parent("[active-filter-uix='true']").css("display","contains").attr({'active-filter-uix':'false'})
  }
}

function checkbox_filter(){
  if ($('#check-filter').is(":checked"))
  {
    $(".check-policy:not(:checked)").parent().parent().css("display","none").attr({'active-filter-checkbox':'true'})

  }else {
    $(".check-policy").parent().parent("[active-filter-checkbox='true']").css("display","contents").attr({'active-filter-checkbox':'false'})
  }
}
/*************** End functions *******************************/



/*********************************************/
/************* Severity filter  *************/
// récuperation de la variable global (lien)
var severity = decodeURIComponent(document.location.href.substring(document.location.href.indexOf("severity=")+9));
var severity_number;
switch (severity) {
  case "High":
    severity_number = 1;
    break;
  case "Medium":
    severity_number = 2;
    break;
  case "Low":
    severity_number = 3;
    break;
  default:
    severity_number = 0;

}
$("#selected-severity").val(severity_number);
//severity_filter();


/*********************************************/
/************* UIX imapct filter  *************/
// récuperation de la variable global (lien)
var uix = decodeURIComponent(document.location.href.substring(document.location.href.indexOf("uix_impact=")+11));
var uix_number;
switch (uix) {
  case "Impact":
    uix_number = 1;
    break;
  case "Potentially":
    uix_number = 2;
    break;
  case "No impact":
    uix_number = 3;
    break;
  default:
    uix_number = 0;

}
$("#selected-uix").val(uix_number);
//uix_filter();


/*********************************************/
/************* checkbox filter  *************/

/** checkbox filter **/
//$("#check-filter").change(checkbox_filter);

/*****************************************/

/*Filter Event*/
$("#selected-severity, #selected-uix, #check-filter, #selected-mode").change(function() {
  $("td.uix_impact").parent().css("display","contents")
  severity_filter()
  uix_filter()
  checkbox_filter()
  mode_filter()
  //tags_filter(this)
});

/*
$(".tag-check-input").change(function(){
  alert($(this).attr("data-tag-name"))
});
*/
