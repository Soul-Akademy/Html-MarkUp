<footer>
  
</footer>
<script src="/assets/js/scripts.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    $(".create-pane").click(function(){
        $(this).toggleClass("expanded");
        console.log('works');
    });
    
  });
  
  // $(document).ready(function(){
  //       $(".go").click(function(){
  //         
  //         if ($(this).hasClass("expanded")) {
  //           $(this).removeClass('expanded');
  //           $(this).empty('p');
  //           $('#go').append( "<h2>Go</h2>" );
  //         }
  //         else {
  //           $(this).toggleClass("expanded");
  //           $(this).append( "<p>text swapped</p>" );
  //           $('.go > h2').empty();
  //           console.log('works');
  //         };
  //         
  //     });
  // })
  // 
</script>

</body>
</html>
