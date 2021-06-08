function addFile() {
  const file = document.getElementById("input-upload").files[0];
  const formData = new FormData();
  formData.append("file", file);

  fetch(`${window.BASE_URL}/import/csv`, {
    method: "POST",
    headers: new Headers(),
    body: formdata
  })
    .then((succes) => console.log(succes))
    .catch((error) => console.log(error));
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $(".image-upload-wrap").hide();//queryslector('.file-bla').style.display = 'none';

      $(".file-upload-image").attr("src", e.target.result); //queryslector('.file-bla').setAttribute('src', e.target.result);
      $(".file-upload-content").show(); //queryslector('.file-bla').style.display = '';

      $(".image-title").html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload();
  }

}

function removeUpload() {
  $(".file-upload-input").replaceWith($(".file-upload-input").clone());
  $(".file-upload-content").hide();
  $(".image-upload-wrap").show();
}
$(".image-upload-wrap").bind("dragover", function () {
  $(".image-upload-wrap").addClass("image-dropping");
});
$(".image-upload-wrap").bind("dragleave", function () {
  $(".image-upload-wrap").removeClass("image-dropping");
});
