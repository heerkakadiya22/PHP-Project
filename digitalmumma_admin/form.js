
<script>
  function validateForm() {
    var faqName = document.getElementById("floatingName").value;
    var faqDet = document.getElementById("floatingTextarea").value;

    if (faqName.trim() == '') {
      alert("Please enter a question.");
      return false;
    }

    if (faqDet.trim() == '') {
      alert("Please enter an answer.");
      return false;
    }

    return true;
  }
</script>












//subtopic validation
<script>
  function validateForm() {
    var subtopname = document.getElementById("floatingName").value;
    var subtopdet = document.getElementById("floatingTextarea").value;

    if (subtopname.trim() == '') {
      alert("Please enter a question.");
      return false;
    }

    if (subtopdet.trim() == '') {
      alert("Please enter an answer.");
      return false;
    }

    return true;
  }
</script>

