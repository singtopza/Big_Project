// $(document).keydown(function (event) {
//   if (event.keyCode == 123) {
//       return false;
//   } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {     
//     return false;
//   }
// });
// $(document).on("contextmenu", function (e) {        
//   e.preventDefault();
// });

function disableselect(e){
  return false
  }
  function reEnable(){
  return true
  }
  //if IE4+
  document.onselectstart=new Function ("return false")
  //if NS6
  if (window.sidebar){
  document.onmousedown=disableselect
  document.onclick=reEnable
}