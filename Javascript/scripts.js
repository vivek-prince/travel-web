<script type="text/javascript">
            document.getElementById("aboutbtn").onclick = function () {
            location.href = "about.php";
            };
</script>



<script>
{$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
} );}
</script>




<script type="text/javascript">
            document.getElementById("contactbtn").onclick = function () {
            location.href = "contact.php";
            };
</script>
<script type="text/javascript">
            document.getElementById("contactsbtn").onclick = function () {
            location.href = "contact.php";
            };
</script>
<script>
               
                {var mybutton = document.getElementById("myBtn");

               //When the user scrolls down 20px from the top of the document, show the button
               window.onscroll = function() {scrollFunctions()}; 

                function scrollFunctions() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 700) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
                }

               // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                }}

</script>

<script>
{var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("main-nav").style.top = "0";
  } else {
    document.getElementById("main-nav").style.top = "-75px";
  }
  prevScrollpos = currentScrollPos;
}}
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        //Reference the DropDownList.
        var yearpass = $("#yearpass");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1990; i <= currentYear; i++) {
            var option = $("<option />");
            option.html(i);
            option.val(i);
            yearpass.append(option);
        }
    });
</script>
<script type="text/javascript">
            document.getElementById("contactssbtn").onclick = function () {
            location.href = "contact.php";
            };
        </script>
