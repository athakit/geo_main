$(document).ready(function(){
  var detail ;
// $(function() {
//   $('textarea')
//     .on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
//       $('#preview').text(editor.codeBeautifier.run(editor.html.get()))
//       $('#preview').removeClass('prettyprinted');
//       data = editor.html.get(); 
      
//     })
//     .froalaEditor()
// });
$(function() {
  $('textarea').froalaEditor()
  .on('froalaEditor.contentChanged', function (e, editor) {
   // $('#preview').html(editor.html.get());
    detail = editor.html.get(); 
  })
});

$.post("/geo/resource/view.php",{},function(data,status){
  for (var i = 0; data[i]; i++) {
 // $('#preview').html(data[i]['Detail']);
  $("#preview").append(data[i]['Detail']);
  }
},"json");

$( "#save" ).click(function() {
  $.post("/geo/resource/save.php",{detail:detail},function(data,status){
    alert("บันทึกข้อมูลสำเร็จ"+detail);
     location.reload();
   },"json").fail(function(){
     alert("เกิดข้อผิดพลาดบางอย่าง");
     location.reload();
   });
 
  
});
});